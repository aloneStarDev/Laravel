<?php
namespace App\Http\Controllers\Base;

use App\Customer;
use App\File;
use App\Http\Controllers\Controller;
use App\Receive;
use App\User;
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
            $type = $request->get("type");
            switch ($request->get('type')){
                case 1:
                    $files = File::where("visible",true)->whereNotNull('buy')->latest()->paginate(36);
                    $customers = Customer::where("active",true)->latest()->get()->toArray();
                    return view('Base.index',compact("files","customers","type"));
                    break;
                case 2:
                    $files = File::where("visible",true)->whereNotNull('ejare')->orWhereNotNull('rahn')->latest()->paginate(36);
                    $customers = Customer::where("active",true)->latest()->get()->toArray();
                    return view('Base.index',compact("files","customers","type"));
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
                $files = File::where("code", $request->get("code"))->get();
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
    private function scopeDynamicInBetweenFilter($query, $filters)
    {
        if(! empty($filters)) {
            if (is_array($filters)) {
                foreach ($filters as $key => $value) {
                    $query->whereBetween($key, $value);
                }
            }
        }

        return $query;
    }
    public function smartSearch(Request $request){
        $customers = Customer::where("active", true)->latest()->get()->toArray();
        $fich = array("visible" => true);
        $fibe = array();
        if($request->get("chas")!=null){
            if($request->get("chas")=="0")
                $fich["asansor"] =false;
            else
                $fich["asansor"] =true;
        }
        if($request->get("chpa")!=null){
            if($request->get("chpa")=="0")
                $fich["parking"] =false;
            else
                $fich["parking"] =true;
        }
        if($request->get("chtr")!=null){
            if($request->get("chtr")=="0")
                $fich["trace"] =false;
            else
                $fich["trace"] =true;
        }
        if($request->get("chan")!=null){
            if($request->get("chan")=="0")
                $fich["anbary"] =false;
            else
                $fich["anbary"] =true;
        }
        if($request->get("ched")!=null){
            if($request->get("ched")=="0")
                $fich["edoor"] =false;
            else
                $fich["edoor"] =true;
        }
        if($request->get("chko")!=null){
            if($request->get("chko")=="0")
                $fich["komod"] =false;
            else
                $fich["komod"] =true;
        }
        if($request->get("rafrom")!= null && $request->get("rato") != null){
            $fibe["rahn"] = [(float)($request->get("rafrom")/1000),(float)($request->get("rato")/1000)];
        }
        if($request->get("ejfrom")!= null && $request->get("ejto") != null){
            $fibe["ejare"] = [(float)($request->get("ejfrom")/1000),(float)($request->get("ejto")/1000)];
        }
        if($request->get("byfrom")!= null && $request->get("byto") != null){
            $fibe["buy"] = [(float)($request->get("byfrom")/1000),(float)($request->get("byto")/1000)];
        }
        if($request->get("befrom")!= null && $request->get("beto") != null){
            $fibe["bedroom"] = [$request->get("befrom"),$request->get("beto")];
        }
        if($request->get("agfrom")!= null && $request->get("agto") != null){
            $fibe["age"] = [$request->get("agfrom"),$request->get("agto")];
        }
        if($request->get("flfrom")!= null && $request->get("flto") != null){
            $fibe["floor"] = [$request->get("agfrom"),$request->get("flto")];
        }
        if($request->get("mefrom")!= null && $request->get("meto") != null){
            $fibe["area"] = [$request->get("mefrom"),$request->get("meto")];
        }
        $query = File::where($fich);
        foreach ($fibe as $key=>$val){
            $query = $query->whereBetween($key,$val);
        }
        $files = $query->get();
        if($files != null && $files->count()>0)
            return view("Base.index",compact("files","customers"));
        return redirect()->route("base")->withErrors(["msg"=>"موردی با این فیلتر ها پیدا نشد"]);
    }
    public function store(){
        request()->validate([
            "name"=>"required|max:191",
            "lastname"=>"required|max:191",
            "phonenumber"=>"required|max:191",
            "buildingType"=>"required|max:191",
            "address"=>"required|max:191",
            "type"=>"required",
            "mode"=>"required",
        ]);
        if(!Customer::IranMobile(request()->get("phonenumber")))
            return back()->withErrors(["msg"=>"ماره تماس معتبر نیست"]);
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
