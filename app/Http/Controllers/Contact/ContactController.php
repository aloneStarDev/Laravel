<?php
namespace App\Http\Controllers\Contact;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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
        if($user==null || $user->password!=$request->input('passWord'))
            return back()->withErrors('نام کاربری  یا گذرواژه اشتباه است');
        if($user->password==$request->input('passWord'))
            return 'login';

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
            'adress.required'=>'آدرس الزامی است',
            'password.required'=>'گذرواژه الزامی است',
        ];
        $request->validate(
            [
                'name'=>'Required',
                'lastname'=>'Required',
                'phonenumber'=>'Required|unique:customers',
                'region'=>'Required',
                'adress'=>'Required',
            ],$messages);

        $customer = new Customer([
            'name'=>$request->get('name'),
            'lastname'=>$request->get('lastname'),
            'phonenumber'=>$request->get('phonenumber'),
            'region'=>$request->get('region'),
            'adress'=>$request->get('adress'),
            'mode'=>false,
            'enable'=>false,//when verify phone number
            'active'=>false
        ]);
        $customer->save();
        $request->session()->flash('phonenumber',$request->input('phonenumber'));
        $request->session()->flash('rollId',$customer->id);
        return view('Auth.verify');
    }
    public function verify(Request $request){
        $user = new User([
            'username'=>$request->session()->get('phonenumber'),
            'password'=>$request->get('password'),
            'rollId'=>$request->session()->get('phonenumber')
        ]);
        $user->save();
    }
}
