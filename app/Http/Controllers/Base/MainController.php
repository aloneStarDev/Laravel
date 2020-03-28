<?php
namespace App\Http\Controllers\Base;

use App\File;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        $files = File::latest()->paginate(12);
        return view('Base.welcom',compact("files"));
    }
    public function about(){

        return view('Base.about');
    }
    public function contactUs(){

        return view('Base.contactus');
    }
}
