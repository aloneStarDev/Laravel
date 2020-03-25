<?php
namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        return view('Base.index');
    }
    public function about(){

        return view('Base.about');
    }
    public function contactUs(){

        return view('Base.contactus');
    }
}
