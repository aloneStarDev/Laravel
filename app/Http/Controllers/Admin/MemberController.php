<?php


namespace App\Http\Controllers\Admin;


use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use http\Env\Request;

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
    public function create(){
        return view('Admin.members.create');
    }
    public function store(Request $request){//this part should be complete
        $request->validate(
            [
                "name"=>"required",
                "lastname"=>"required",
                "region"=>"required",
                "address"=>"required",
                "panel"=>"required",
            ]
        );
        $panel = [
            '1'=>1,
            '2'=>3,
            '3'=>6,
            '4'=>9,
            '5'=>12,
        ];
        $customer = new Customer([
            "name"=>$request->input("name"),
            "lastname"=>$request->input("lastname"),
            "region"=>$request->input("region"),
            "address"=>$request->input("address"),
            "panel"=>$request->input('panel'),
            "expire_subscription"=>Carbon::now()->addMonth($panel[$request->input('panel')])
        ]);
        $customer->create();
        return redirect(route("members.index"));
    }
}
