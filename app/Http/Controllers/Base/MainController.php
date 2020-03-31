<?php
namespace App\Http\Controllers\Base;

use App\File;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        $files = File::where("visible",true)->latest()->paginate(36);
        return view('Base.index',compact("files"));
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
}
