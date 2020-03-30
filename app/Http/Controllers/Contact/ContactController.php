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
use Carbon\Carbon;
use Cassandra\Exception;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use function Faker\Provider\en_HK\PhoneNumber;

class ContactController extends Controller
{
    public function signin()
    {
        return redirect(route("base"));
    }

    public function login(UserRequest $request)
    {
        $user = User::where('username',$request->input('userName'))->first();
        if($user==null || !Hash::check($request->input('passWord'),$user->password))
            return back()->withErrors(["login"=>'نام کاربری  یا گذرواژه اشتباه است']);
        if(Hash::check($request->input('passWord'),$user->password)){
            if($user->rollId > 0 ) {
                if($user->customer()->ip == null  && $user->customer()->ipCount > 0) {
                    $ip = [];
                    array_push($ip,$request->getClientIp());
                    $customer = $user->customer();
                    $customer->ip = json_encode($ip);
                    $customer->save();
                }
                if ($user->customer()->enable == false)
                    return back()->withErrors(["login"=>'دسترسی شما غیرفعال می باشد']);
                else{
                    $customer = $user->customer();
                    $ip = json_decode($customer->ip);
                    $i =0;
                    for($i=0;$i<count($ip);$i++){
                        if($ip[$i] == $request->getClientIp()){
                            auth()->loginUsingId($user->id);
                            return redirect(route("base"));
                        }
                    }
                    if($i < $customer->ipCount )
                    {
                        array_push($ip,$request->getClientIp());
                        $customer->ip = json_encode($ip);
                        $customer->save();
                        auth()->loginUsingId($user->id);
                        return redirect(route("base"));
                    }else{
                        return back()->withErrors(["login"=>"شما از تعداد مجاز لاگین خود استفاده کرده اید"]);
                    }
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
    public function signup(Temp $temp)
    {
        $plans = Tariff::all();
        return view('Auth.signup',compact("plans"));
    }
    public function register(Request $request)
    {

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
            'code' => 'Required',
            'verifyPhone' => 'Required',
        ]);
        $phonenumber = $request->input('verifyPhone');
        $temp = Temp::where('phonenumber',$phonenumber)->firstOrFail();
        if($request->session()->get('code')==$request->get('code')){
            $temp->enable=true;
            $temp->save();
            return redirect(route('signup',$temp));
        }else
            return back()->withErrors(['code'=>'کد تایید اشتباه است']);
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
    public function checkUser(Request $request){
        session()->remove("code");
        $request->validate([
            "username"=>"required|unique:users",
            "password"=>"required",
            "phonenumber"=>"required|unique:customers",
        ]);
        $temp = new Temp($request->all());
        $code = round(rand())%999999;
        $request->session()->flash('code',$code);
        User::sendCode($request->input('phonenumber'),$code);
        $temp->save();
    }
}
