<?php
namespace App\Http\Controllers\Base;

use App\Customer;
use App\File;
use App\Http\Controllers\Controller;
use App\Receive;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MainController extends Controller{
    public function index(){
        $files = File::where("visible",true)->latest()->paginate(36);
        $customers = Customer::where("active",true)->latest()->get()->toArray();
        return view('Base.index',compact("files","customers"));
    }
    public function about(){
        return view('Base.about');
    }
    public function contactUs(){
        return view('Base.contactus');
    }
    public function customer(){
        return view('Base.customer');
    }
    public function store(){
        request()->validate([
            "name"=>"required",
            "lastname"=>"required",
            "phonenumber"=>"required",
            "buildingType"=>"required",
            "address"=>"required",
            "type"=>"required",
            "mode"=>"required",
        ]);
        $rec = new Receive(request()->all());
        $rec->save();
        $msg =" اطلاعات شما با موفقیت ثبت شد";
        return redirect()->route('base')->withErrors(['msg'=>$msg]);
    }
}
