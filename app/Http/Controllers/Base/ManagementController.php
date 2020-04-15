<?php

namespace App\Http\Controllers\Base;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Tariff;
use App\Temp;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    public function index(){
        $customer = auth()->user()->customer();
        $payments = Payment::where('customer_id',auth()->user()->customer()->id)->latest()->paginate(10);
        return view("Base.management",compact("customer","payments"));
    }
    private function is_english($str)
    {
        if (strlen($str) != strlen(utf8_decode($str))) {
            return false;
        } else {
            return true;
        }
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required|max:191',
            'lastname'=>'required|max:191',
            'username'=>'required|max:191|',
            'address'=>'required|max:191',
            'office'=>'required|max:890',
            'email'=>'nullable|email|max:191',
            'image' => 'nullable|image|max:512'
        ]);
        if($request->has("username"))
            if(!$this->is_english($request->get("username")))
                return back()->withErrors(["msg"=>"نام کاربری باید انگلیسی باشد"]);
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
        $user = User::where("username",$request->get("username"))->first();
        if($user != null ) {
            if ($user->rollId != $customer->id)
                return back()->withErrors(["msg"=>"این نام کاربری قبلا ثبت شده است"]);
        }else
            User::where('id', auth()->user()->id)->update([
                'username' => $request->input('username')
            ]);
        if($request->hasFile("image")){
            $image = $request->file("image");
            if($customer->image != null)
                Storage::delete("public/".$customer->image);
            $path = $image->store("/Images/members/","public");
            Customer::where('id',$customer->id)->update(["image"=>$path]);
        }
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
    public function  payment(){
        $customer=auth()->user()->customer();
        $plans = Tariff::all();
        return view("Base.dakheli",compact('plans',"customer"));
    }
    public function checkSubscribe(Request $request){
        $request->validate([
            'id'=>"required",
            'panel'=>"required",
            'ipCount'=>"required",
        ]);
        $customer = Customer::where('id',$request->input('id'))->first();
        if($customer == null)
            return back()->withErrors(['msg'=>'ابتدا ثبت نام کنید']);
        $panel = $request->input("panel");
        $ipCount = $request->input("ipCount");
        return redirect()->route('payment',compact("customer","panel","ipCount"));
    }
}
