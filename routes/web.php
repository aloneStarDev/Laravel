<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Base\MainController@index')->name('base');
route::get('/About','Base\MainController@about')->name('about');
route::get('/ContactUs','Base\MainController@contactUs')->name('contactUs');

Route::prefix('contact')->namespace('Contact')->group(function (){
    Route::get('/login', 'ContactController@signin')->name('signin');
    Route::post('/login', 'ContactController@login')->name('login');
    Route::get('/signup', 'ContactController@signup')->name('signup');
    Route::post('/signup', 'ContactController@register')->name('register');
    Route::post('/verify', 'ContactController@verify')->name('verify');
    Route::get('/forget', 'ContactController@forget')->name('forget');
    Route::post('/resetPassword', 'ContactController@resetPassword')->name('resetPassword');
    Route::post('/forget', 'ContactController@verifyForget')->name('verifyForget');
    Route::get('/logout','ContactController@logout')->name('logout');
    Route::get('/subscribe', 'PaymentController@tariffs')->name('subscribePanel');
    Route::post('/subscribe/payment', 'PaymentController@payment');
    Route::get('/subscribe/payment/checker', 'PaymentController@checker');
});

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index')->name('manage')->middleware('auth');
    Route::resource('agents', 'AgentController')->middleware('auth');
    Route::resource('files', 'FileController')->middleware('auth');
    Route::get('/file/mode/change/{file}', 'FileController@changeVisible')->middleware('auth')->name('changeMode');
    Route::get('/file/archive/{file}', 'FileController@archive')->middleware('auth')->name('archive');
    Route::get('/file/archives', 'FileController@archives')->middleware('auth')->name('archives');
    Route::post('/file/find', 'FileController@find')->middleware('auth')->name('find');
    Route::resource('members','MemberController')->middleware('auth');
    Route::resource('tariffs', 'TariffController')->middleware('auth');
    Route::get('/disable/member/{customer}','MemberController@disable')->name('disable.member')->middleware('auth');
    //show payments to admin
    Route::get('/successful-payments' , 'PaymentController@index');
    Route::get('/unsuccessful-payments/', 'PaymentController@unsuccessful');
    Route::delete('payments/{payment}' , 'PaymentController@destroy');
});

