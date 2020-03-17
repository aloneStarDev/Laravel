<?php

namespace App\Http\Controllers;

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
        if($request->get('username')==null && $request->get('password')==null)
            return back()->withErrors('نام کاربری اجباری است');
        $user = User::where('username',$request->get('username'))->first();
        if($user==null || $user->password!=$request->get('password'))
            return back()->withErrors('نام کاربری  یا گذرواژه اشتباه است');
        if($user->password==$request->get('password'))
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
        $request->validate(
        [
            'name'=>'Required',
            'lastname'=>'Required',
            'phonenumber'=>'Required',
            'region'=>'Required',
            'adress'=>'Required'
        ]);
        return redirect(route('signin'));
    }
}
