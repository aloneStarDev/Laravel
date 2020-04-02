<?php

use App\Tariff;
use Illuminate\Support\Facades\Route;

Route::get('/','Base\MainController@index')->name('base')->middleware('account');
route::get('/About','Base\MainController@about')->name('about')->middleware('account');
route::get('/customer','Base\MainController@customer')->name('customer')->middleware('account');
route::get('/ContactUs','Base\MainController@contactUs')->name('contactUs')->middleware('account');

route::get("/yourAdress",function(){
  return view("Base.management");
});

route::post('/save/file','Base\MainController@store')->name('saveMemberFile');


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
Route::prefix('admin')->namespace('Admin')->middleware('auth')->middleware('auth.custom')->group(function (){
    Route::get('/panel' , 'PanelController@index')->name('manage');
    Route::resource('agents', 'AgentController');
    Route::resource('files', 'FileController');
    Route::get('/file/mode/change/{file}', 'FileController@changeVisible')->name('changeMode');
    Route::get('/file/archive/{file}', 'FileController@archive')->name('archive');
    Route::get('/file/archives', 'FileController@archives')->name('archives');
    Route::post('/file/find', 'FileController@find')->name('find');
    Route::resource('members','MemberController');
    Route::get('/resetIp/{customer}','MemberController@resetIp')->name("resetIp");
    Route::resource('tariffs', 'TariffController');
    Route::get('/disable/member/{customer}','MemberController@disable')->name('disable.member');
    Route::get('/successful-payments' , 'PaymentController@index');
    Route::delete('payments/{payment}' , 'PaymentController@destroy');
    Route::get('file/receives/{mode}','ReceiveController@index')->name('received');
    Route::get('file/receives/{id}/show','ReceiveController@show')->name('showReceived');
    Route::get('receives/delete/{id}','ReceiveController@destroy')->name('removeReceived');
    Route::get('receives/register/{id}','ReceiveController@edit')->name('editReceived');
    Route::post('receives/register','ReceiveController@register')->name('registerReceived');
});
