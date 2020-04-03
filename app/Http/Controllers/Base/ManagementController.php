<?php

namespace App\Http\Controllers\Base;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagementController extends Controller
{
    public function index(){
        $customer = auth()->user()->customer();
        $payments = Payment::where('customer_id',auth()->user()->customer()->id)->latest()->paginate(10);
        return view("Base.management",compact("customer","payments"));
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'username'=>'required:unique:users',
            'address'=>'required',
            'office'=>'required',
            'email'=>'email'
        ]);
        $customer = auth()->user()->customer();
        Customer::where('id',$customer->id)->update([
          'name' => $request->input("name"),
          'lastname'=> $request->input("lastname"),
          'address'=>$request->input("address"),
          'office'=>$request->input("office"),
          'explain'=>$request->input("explain"),
          'telegram'=>$request->input("telegram"),
          'twitter'=>$request->input("twitter"),
          'instagram'=>$request->input("instagram")
        ]);
        User::where('id',auth()->user()->id)->update([
            'username'=>$request->input('username')
        ]);
        return back()->withErrors(['msg'=>'اطلاعات با موفقیت تغییر کرد']);
    }
    public function resetPass(){
        request()->validate([
            'password'=>'required',
            'repeatPassword'=>'required',
        ]);
        if(request('password') != request('repeatPassword'))
            return back()->withErrors(['msg'=>'گذرواژه و تکرار آن برابر نیستند']);
        auth()->user()->update(['password'=>Hash::make(request('password'))]);
        return back()->withErrors(['msg'=>'گذرواژه با موفقیت تغییر کرد']);
    }

}
