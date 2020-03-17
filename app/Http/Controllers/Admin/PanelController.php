<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    //this method go to admin panel
    public function index()
    {
        return view('Admin.panel');
    }
}
