<?php
namespace App\Http\Controllers\Contact;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Cassandra\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function signin()
    {
        return view('Auth.Login',['title'=>'ورود']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'userName'=>'Required',
            'passWord'=>'Required'
        ]);

        $user = User::where('username',$request->input('userName'))->first();
        if($user==null || !Hash::check($request->input('passWord'),$user->password))
            return back()->withErrors('نام کاربری  یا گذرواژه اشتباه است');
        if(Hash::check($request->input('passWord'),$user->password))
            return Auth::user();//cheack this part

    }
    public function signup()
    {
        return view('Auth.Signup',['title'=>'ثبت نام']);
    }
    public function register(Request $request)
    {
        // try{
        $messages=[
            'name.required'=>'نام الزامی است',
            'lastname.required'=>'نام خانوادگی الزامی است',
            'phonenumber.required'=>'شماره تماس الزامی هست',
            'phonenumber.uniq'=>'این شماره قبلا ثبت شده است',
            'region.required'=>'ناحیه الزامی است',
            'address.required'=>'آدرس الزامی است',
            'password.required'=>'گذرواژه الزامی است',
        ];
        $request->validate(
            [
                'name'=>'Required',
                'lastname'=>'Required',
                'phonenumber'=>'Required|unique:customers',
                'region'=>'Required',
                'address'=>'Required',
            ],$messages);

        $customer = new Customer([
            'name'=>$request->get('name'),
            'lastname'=>$request->get('lastname'),
            'phonenumber'=>$request->get('phonenumber'),
            'region'=>$request->get('region'),
            'address'=>$request->get('address'),
            'mode'=>false,
            'enable'=>false,//when verify phone number
            'active'=>false
        ]);
        $customer->save();
        $request->session()->flash('phonenumber',$request->input('phonenumber'));
        $request->session()->flash('rollId',$customer->id);
        return view('Auth.verify',['title'=>'فعال سازی']);
    }
    public function verify(Request $request)
    {
        $request->validate([
            'verify' => 'Required',
            'password' => 'Required'
        ]);
        $customer = Customer::where('phonenumber',$request->session()->get('phonenumber'))->first();
        $customer->enable=true;//if he enter correct verification
        $customer->active=true;
        $customer->save();
        $user = new User([
            'username' => $request->session()->get('phonenumber'),
            'password' =>  Hash::make($request->get('password')),
        'rollId' => $request->session()->get('rollId')
        ]);
        $user->save();
        return Redirect::route('signin');
    }
}
