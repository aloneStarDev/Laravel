<?php

use App\Tariff;
use Illuminate\Support\Facades\Route;

Route::get('/','Base\MainController@index')->name('base');
route::get('/About','Base\MainController@about')->name('about');
route::get('/customer','Base\MainController@customer')->name('customer');
route::get('/ContactUs','Base\MainController@contactUs')->name('contactUs');
<<<<<<< HEAD
route::get("/yourAdress",function(){
  return view("Base.TestView");
});
=======
route::post('/save/file','Base\MainController@store')->name('saveMemberFile');

>>>>>>> 7a08b0b0f5b5cd6ccec3cb40a3d8ce151bb9df1f

Route::prefix('contact')->namespace('Contact')->group(function (){
    Route::get('/login', 'ContactController@signin')->name('signin');
    Route::post('/login', 'ContactController@login')->name('login');
    Route::get('/signup/{temp}', 'ContactController@signup')->name('signup');
    Route::post('/signup', 'ContactController@register')->name('register');
    Route::get('/checkUser', 'ContactController@checkUser')->name('checkUser');
    Route::post('/verify', 'ContactController@verify')->name('verify');
    Route::get('/forget', 'ContactController@forget')->name('forget');
    Route::post('/resetPassword', 'ContactController@resetPassword')->name('resetPassword');
    Route::post('/forget', 'ContactController@verifyForget')->name('verifyForget');
    Route::get('/logout','ContactController@logout')->name('logout');
    Route::get('/subscribe/payment', 'PaymentController@payment')->name('payment');
    Route::get('/subscribe/payment/checker', 'PaymentController@checker')->name("checker");
});

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index')->name('manage')->middleware('auth.custom')->middleware('auth');
    Route::resource('agents', 'AgentController')->middleware('auth.custom')->middleware('auth');
    Route::resource('files', 'FileController')->middleware('auth.custom')->middleware('auth');
    Route::get('/file/mode/change/{file}', 'FileController@changeVisible')->middleware('auth.custom')->middleware('auth')->name('changeMode');
    Route::get('/file/archive/{file}', 'FileController@archive')->middleware('auth.custom')->middleware('auth')->name('archive');
    Route::get('/file/archives', 'FileController@archives')->middleware('auth.custom')->middleware('auth')->name('archives');
    Route::post('/file/find', 'FileController@find')->middleware('auth.custom')->middleware('auth')->name('find');
    Route::resource('members','MemberController')->middleware('auth.custom')->middleware('auth');
    Route::get('/resetIp/{customer}','MemberController@resetIp')->middleware('auth.custom')->middleware('auth')->name("resetIp");
    Route::resource('tariffs', 'TariffController')->middleware('auth.custom')->middleware('auth');
    Route::get('/disable/member/{customer}','MemberController@disable')->name('disable.member')->middleware('auth.custom')->middleware('auth');
    //show payments to admin
    Route::get('/successful-payments' , 'PaymentController@index');
    Route::delete('payments/{payment}' , 'PaymentController@destroy');
});
