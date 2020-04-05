<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PanelController extends Controller
{
    private function is_english($str)
    {
        if (strlen($str) != strlen(utf8_decode($str))) {
            return false;
        } else {
            return true;
        }
    }
    //this method go to admin panel
    public function index()
    {
        return view('Admin.panel');
    }
    public function reset(Request $request){
        $user = auth()->user();
        if($request->get("username") != null){
            $u = User::where("username",$request->get("username"))->first();
            if($u != null && $u->username != $user->username)
                return back()->withErrors(["msg" => "این نام کاربری قبلا ثبت شده است"]);
            if(!$this->is_english($request->get("username")))
                return back()->withErrors(["msg" => " نام کاربری باید نگلیسی باشد "]);
            User::where("id",$user->id)->update(["username"=>$request->get("username")]);
        }
        if($request->get("password") != null)
            User::where("id",$user->id)->update(["password"=>Hash::make($request->get("password"))]);
        return redirect()->route("manage");
    }
}
