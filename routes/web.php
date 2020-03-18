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
});

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index');
    Route::resource('agents', 'AgentController');
    Route::resource('files', 'FileController');
});
