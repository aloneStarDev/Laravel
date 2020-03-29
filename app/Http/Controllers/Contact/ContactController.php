<?php
namespace App\Http\Controllers\Contact;

use App\Agent;
use App\Customer;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\UserRequest;
use App\Tariff;
use App\Temp;
use App\User;
use Cassandra\Exception;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function signin()
    {
        return view('Auth.Login',['title'=>'ورود']);
    }

    public function login(UserRequest $request)
    {
        $user = User::where('username',$request->input('userName'))->first();
        if($user==null || !Hash::check($request->input('passWord'),$user->password))
            return back()->withErrors('نام کاربری  یا گذرواژه اشتباه است');
        if(Hash::check($request->input('passWord'),$user->password)){
            if($user->rollId > 0 ) {
                if($user->ip == null || isEmptyOrNullString($user->ip)) {
                    $user->ip = $request->getClientIp();
                    $user->save();
                }
                if (Customer::where('id', $user->rollId)->firstOrFail()->enable == false || $user->ip != $request->getClientIp())
                    return back()->withErrors('دسترسی شما غیرفعال می باشد');
                else{
                    auth()->loginUsingId($user->id);
                    return redirect(route("base"));
                }
            }else{
                if($user->rollId < 0 )
                    if( Agent::where('id',-1*($user->rollId))->firstOrFail()->active == false)
                        return back()->withErrors('دسترسی شما غیر فعال است');
                auth()->loginUsingId($user->id);
            }
            return redirect(route('manage'));
        }
        return back()->withErrors(['meg'=>'login fail']);
    }
    public function signup()
    {
        return view('Auth.Signup',['title'=>'ثبت نام']);
    }
    private function register($request)
    {
        $customer->save();
        $request->session()->flash('phonenumber',$request->input('phonenumber'));
        $request->session()->flash('code',$code);
        User::sendCode($request->input('phonenumber'),$code);
        return view('Auth.verify',['title'=>'فعال سازی']);
    }
    public function forget(){
        return view('Auth.forget',['title'=>'تایید هویت']);
    }
    public function resetPassword(Request $request){
        if(session()->has('code'))
            return back()->withErrors(['msg'=>'لطفا بعد از 15 دقیقه تلاش کنید']);
        $customer = Customer::where('phonenumber',$request->input('phonenumber'))->cursor()->first();
        $code = round(rand())%999999;
        if($customer != null){
            $request->session()->put('code',$code);
            $request->session()->put('phonenumber',$request->input('phonenumber'));
            User::sendCode($request->input('phonenumber'),$code);
            return view('Auth.reset',['title'=>'تغییرگزرواژه']);
        }else
            return redirect(route('signup'));
    }
    public function verifyForget(Request $request){
        $request->validate([
            'verify' => 'Required',
            'password' => 'Required'
        ]);
        if(session()->has('code')){
            if($request->get('verify') == session()->get('code'))
            {
                $user = User::where('username',session()->get('phonenumber'))->firstOrFail();
                $user->password = Hash::make($request->get('password'));
                $user->save();
                return redirect(route('signin'));
            }
            else
                return back()->withErrors(['msg'=>'کد تایید اشتباه است']);
        }else
            return back()->withErrors(['msg'=>'کد تایید منقضی شده است']);
    }
    public function verify(Request $request)
    {
        $request->validate([
            'verify' => 'Required',
        ]);
        $phonenumber = $request->session()->get('phonenumber');
        $customer = Customer::where('phonenumber',$phonenumber)->firstOrFail();
        if($request->session()->get('code')==$request->get('verify')){
            $customer->enable=true;
            $customer->active=false;//for payment
            $customer->save();
            $tar = Tariff::all()->toArray();
            return view('subscribe',compact('tar','phonenumber'));
        }else
            return back()->withErrors(['msg'=>'کد تایید اشتباه است']);
    }

    /**
     * @param Request $request
     * @return Redirector
     */
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect(route('signin'));
    }
    public function registarA(Request $request){
        $request->validate([
                "username"=>"required",
                "password"=>"required",
                "phonenumber"=>"required",
            ]);
        $temp = new Temp($request->all());
        $code = round(rand())%999999;
        $request->session()->push('phonenumber',$request->input('phonenumber'));
        $request->session()->flash('code',$code);
        User::sendCode($request->input('phonenumber'),$code);
        $temp->save();
    }
    public function registerB(Request $request){
        $request->validate(["code"=>"required"]);
        if($request->input('code') == session('code')){
            $temp = Temp::where('phonenumber',session('phonenumber'))->firstOrFail();
            $temp->enable=true;
            $temp->save();
            cookie()->forever("phonenumber",$temp->phonenumber);
            return "true";
        }
        else
            return "false";
    }
    public function registerC(Request $request){
        $request->validate(
            [
                "name"=>"required",
                "lastname"=>"required",
                "phone_home"=>"required",
                "office"=>"required",
                "address"=>"required"
            ]);
        $temp = Temp::where('phonenumber',session()->get("phonenumber"))->firstOrFail();
        $temp->update($request->all());
        $temp->save();
        $customer = new Customer([
            "name"=>$temp->name,
            "lastname"=>$temp->lastname,
            "phonenumber"=>$temp->phonenumber,
        ]);
        $tar = Tariff::all()->toArray();
    }
}
