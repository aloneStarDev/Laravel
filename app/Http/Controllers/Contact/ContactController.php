<?php
namespace App\Http\Controllers\Contact;

use App\Agent;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\UserRequest;
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
    public function register(CustomerRequest $request)
    {
        if(Customer::where("phonenumber",$request->input("phonenumber"))->first() != null)
        {

            if(Customer::where("phonenumber",$request->input("phonenumber"))->first()->enable !=true)
            {
                $customer = Customer::where("phonenumber",$request->input("phonenumber"))->firstOrFail();
                $request->session()->flash('phonenumber',$customer->phonenumber);
                $code = round(rand())%999999;
                $request->session()->flash('code',$code);
                $request->session()->flash('rollId',$customer->id);
                User::sendCode($request->input('phonenumber'),$code);
                return view('Auth.verify',['title'=>'فعال سازی']);
            }else
                return view('Auth.Login',['title'=>'ورود'])->withErrors("شما قبلا ثبت نام کرده اید و در صورت فراموشی گذرواژه بر روی بازیابی بزنید");
        }
        $customer = new Customer($request->all());
        $customer->save();
        $request->session()->flash('phonenumber',$request->input('phonenumber'));
        $code = round(rand())%999999;
        $request->session()->flash('code',$code);
        $request->session()->flash('rollId',$customer->id);
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
            'password' => 'Required'
        ]);
        $customer = Customer::where('phonenumber',$request->session()->get('phonenumber'))->firstOrFail();
        if($request->session()->get('code')==$request->get('verify')){
            $customer->enable=true;
            $customer->active=true;//to payment it should be change
            $customer->save();
            $user = new User([
                'username' => $request->session()->get('phonenumber'),
                'password' =>  Hash::make($request->get('password')),
                'rollId' => $request->session()->get('rollId')
            ]);
//            return Redirect::route('subscribePanel',compact('user'));
            return redirect(route("signin"));
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
}
