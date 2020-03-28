<?php
namespace App\Http\Controllers\Base;

use App\File;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        $files = File::latest()->paginate(12);
        return view('Base.index');
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
