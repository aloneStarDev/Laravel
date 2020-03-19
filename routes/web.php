<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
});

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index')->name('manage')->middleware('auth');
    Route::resource('agents', 'AgentController')->middleware('auth');
    Route::resource('files', 'FileController')->middleware('auth');
});
