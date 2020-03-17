<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

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
    private function checkSubscribtion()
    {
        # code...
    }
    public function signup()
    {
        return view('Auth.Signup',['title'=>'ثبت نام']);
    }
    public function register(Request $request)
    {
        // try{
        $request->validate(
        [
            'name'=>'Required',
            'lastname'=>'Required',
            'phonenumber'=>'Required',
            'region'=>'Required',
            'adress'=>'Required'
        ]);
        $customer = new Customer([
            'name'=>$request->get('name'),
            'lastname'=>$request->get('lastname'),
            'phonenumber'=>$request->get('phonenumber'),
            'region'=>$request->get('region'),
            'adress'=>$request->get('adress'),
            'mode'=>false,
            'enable'=>true,
            'active'=>true
        ]);
        $customer->save();
        $user = new User([
            'username'=>$request->get('phonenumber'),
            'password'=>$request->get('password'),
            'rollId'=>$customer->id
        ]);
        $user->save();
        return redirect(route('signin'));
    }
}
