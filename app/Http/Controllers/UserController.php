<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $request->validate(['username'=>'requierd','password'=>'requierd'],
        [
            'username.requierd'=>'نام کاربری اجباری است',
            'password.requierd'=>'گذرواژه اجباری است',
        ]);
        $user = User::where('username',$request->get('username')->first());
        if($user!=null)
        {
            dd($user);
        }
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
        $request->validate(
        [
            'name'=>'Required',
            'lastname'=>'Required',
            'phonenumber'=>'Required|regex:/09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}/',
            'region'=>'Required',
            'adress'=>'Required'
        ]);
        return redirect(route('signin'));
    }
}
