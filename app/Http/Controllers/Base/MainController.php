<?php
namespace App\Http\Controllers\Base;

use App\Customer;
use App\File;
use App\Http\Controllers\Controller;
use App\Receive;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller{
    public function index(){
        $files = File::where("visible",true)->latest()->paginate(36);
        $customers = Customer::where("active",true)->latest()->get()->toArray();
        return view('Base.index',compact("files","customers"));
    }
    public function about(){
        return view('Base.about');
    }
    public function rules(){
        return view('Base.rules');
    }
    public function contactUs(){
        return view('Base.contactus');
    }
    public function customer(){
        $customers = Customer::where("active",true)->latest()->paginate(36);
        return view('Base.customer',compact('customers'));
    }
    public function profile($id){
        $customer = Customer::where('id',$id)->firstOrFail();
        return view('Base.profile',compact("customer"));
    }
    public function info(File $file){
        $customers  = Customer::where('region',$file->region)->where('active',true)->paginate(5);
        return view('Base.amlak',compact('file',"customers" ));
    }
    public function search(Request $request){
        if($request->get("type") != null)
        {
            switch ($request->get('type')){
                case 1:
                    $files = File::where("visible",true)->whereNotNull('buy')->latest()->paginate(36);
                    $customers = Customer::where("active",true)->latest()->get()->toArray();
                    return view('Base.index',compact("files","customers"));
                    break;
                case 2:
                    $files = File::where("visible",true)->whereNotNull('ejare')->orWhereNotNull('rahn')->latest()->paginate(36);
                    $customers = Customer::where("active",true)->latest()->get()->toArray();
                    return view('Base.index',compact("files","customers"));
                    break;
            }
        }
        else {
            $customers = Customer::where("active", true)->latest()->get()->toArray();
            $cl = array("visible" => true);
            if ($request->get('reg') != null)
                $cl["region"] = $request->input("reg");
            if ($request->get('buildingType') != null)
                $cl["buildingType"] = $request->input("buildingType");
            $files = null;
            if ($request->get("code") != null) {
                $files = File::where("code", $request->get("code"));
                if ($files->count() == 0) {
                    if ($request->get("from") != null || $request->get('to') != null) {
                        if ($request->get("from") != null && $request->get("to") != null)
                            $files = File::where($cl)->where("addressPu","like","%".$request->get("code")."%")->whereBetween("area", $request->get("from"), $request->get("to"))->latest()->paginate(36);
                        else if ($request->get("from") == null)
                            $files = File::where($cl)->where("addressPu","like","%".$request->get("code")."%")->where("area", "<", $request->get("to"))->latest()->paginate(36);
                        else
                            $files = File::where($cl)->where("addressPu","like","%".$request->get("code")."%")->where("area", ">", $request->get("from"))->latest()->paginate(36);
                    } else
                        $files = File::where($cl)->where("addressPu","like","%".$request->get("code")."%")->latest()->paginate(36);
                }
            }
            else {
                if ($request->get("from") != null || $request->get('to') != null) {
                    if ($request->get("from") != null && $request->get("to") != null)
                        $files = File::where($cl)->whereBetween("area", $request->get("from"), $request->get("to"))->latest()->paginate(36);
                    else if ($request->get("from") == null)
                        $files = File::where($cl)->where("area", "<", $request->get("to"))->latest()->paginate(36);
                    else
                        $files = File::where($cl)->where("area", ">", $request->get("from"))->latest()->paginate(36);
                }
                else{
                    if(count($cl) != 1)
                        $files = File::where($cl)->latest()->paginate(36);
                }
            }
            if($files == null || $files->count()==0){
                return redirect()->route("base")->withErrors(["msg"=>"موردی با این فیلتر ها پیدا نشد"]);
            }
            return view("Base.index",compact("files","customers"));
        }
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
    public function searchMember(){
        if(request()->get("filter") != null){
            $customers = Customer::where("active",true)->where("office",request("filter"))->orWhere("region",request("filter"))->latest()->paginate(36);
            return view('Base.customer',compact('customers'));
        }
    }
}
