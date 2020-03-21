<?php


namespace App\Http\Controllers\Admin;


use App\Customer;
use App\Http\Controllers\Controller;

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
}
