<?php

namespace App\Http\Controllers\Base;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Payment;
use App\Temp;
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
    public function sendCode(Request $request){
        $request->validate([
           'newPhone'=>"required"
        ]);
        if(Customer::IranMobile($request->input('newPhone')))
        {
            session()->remove("code");
            $temp = new Temp([
                'phonenumber'=>$request->input('newPhone'),
                'username'=>auth()->user()->customer()->phonenumber,
                'password'=>"reset",
                ]);
            $code = round(rand())%999999;
            $request->session()->flash('code',$code);
            User::sendCode($request->input('newPhone'),$code);
            $temp->save();
            return "true";
        }
        return "false";
    }
    public function resetPhonenumber(Request $request){
        $request->validate([
            'code' => 'Required',
            'newPhone' => 'Required',
        ]);
        $phonenumber = $request->input('newPhone');
        $temp = Temp::where('phonenumber',$phonenumber)->where('password','reset')->firstOrFail();
        if($request->session()->get('code')==$request->get('code')){
            auth()->user()->customer()->update(['phonenumber'=>$temp->phonenumber]);
            $temp->delete();
            return redirect()->route('member.panel')->withErrors(['msg'=>'اطلاعات با موفقی ثبت شد']);
        }else
            return back()->withErrors(['code'=>'کد تایید اشتباه است']);
    }

}
