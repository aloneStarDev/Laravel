<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            "fullName"=>"required",
            "email"=>"required|email:rfc,dns",
            "title"=>"required",
            "description"=>"required",
        ]);
        $survey = new Survey(request()->all());
        $survey->save();
        return back()->withErrors(["msg"=>"پیام شما با موفقیت ثبت شد"]);
    }

}
