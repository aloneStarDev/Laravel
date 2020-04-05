<?php


namespace App\Http\Controllers\Admin;


use App\Customer;
use App\Http\Controllers\Controller;
use App\Tariff;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index(){
        $customers = Customer::latest()->paginate(20);
        return view('Admin.members.all',compact('customers'));
    }
    public function disable(Customer $customer){
        $customer->setAttribute('enable',!$customer->getAttributeValue('enable'));
        $customer->save();
        return redirect(route('members.index'));
    }
    public function show($id){
        $customer = Customer::where("id",$id)->firstOrFail();
        return view("Admin.members.show",compact('customer'));
    }
    public function create(){
        return view('Admin.members.create');
    }
    public function edit($id){
        $customer = Customer::where("id",$id)->firstOrFail();
        return view('Admin.members.edit',compact("customer"));
    }
    public function resetIp($id){
        $customer = Customer::where("id",$id)->update(["ip"=>null]);
        return redirect(route("members.index"));
    }
    public function destroy($id){
        Customer::where("id",$id)->firstOrFail()->delete();
        return redirect(route("members.index"));
    }
    public function update($id){
        request()->validate([
            "name"=>"required|max:191",
            "lastname"=>"required|max:191",
            "phonenumber"=>"required|max:191",
            "region"=>"required",
            "office"=>"required|max:191",
            "address"=>"required|max:191",
            "username"=>"unique:users|max:191"
        ]);
        $customer = Customer::where("id",$id)->firstOrFail();
        if($customer['panel']!==request('panel'))
            $customer['expire_subscription']=Carbon::now()->addMonth(Tariff::$val[request("panel")]);
        $customer->update(request()->all());
        $customer['panel']=request('panel');
        $customer->save();
        $user = null;
        if(request("username") != null) {
            $user = User::where("rollId", $customer->id)->firstOrFail();
            $user->update([
                "username" => request("username")
                ]);
            $user->save();
        }
        if(request("password") != null) {
            $user = User::where("rollId", $customer->id)->firstOrFail();
            $user->update([
                "password" => Hash::make(request("password"))
            ]);
            $user->save();
        }
        return redirect(route("members.index"));
    }
    public function store(){
        request()->validate([
            "name"=>"required|max:191",
            "lastname"=>"required|max:191",
            "phonenumber"=>"required|unique:customers|max:191",
            "region"=>"required|between:0,15",
            "office"=>"required|max:191",
            "address"=>"required",
            "username"=>"required|unique:users",
            "password"=>"required"
        ]);
        $customer = new Customer(request()->all());
        $customer['ipCount'] = 1;
        if(request('ipCount') != null)
            $customer['ipCount'] += request('ipCount');
        $customer['enable']=true;
        $customer['active']=true;
        $customer['panel']=request('panel');
        $customer['expire_subscription']=Carbon::now()->addMonth(Tariff::$val[request("panel")]);
        $customer->save();
        $user = new User([
            "username"=>request("username"),
            "password"=>Hash::make(request("password")),
            "rollId"=>$customer["id"]
        ]);
        $user->save();
        return redirect(route("members.index"));
    }
}
