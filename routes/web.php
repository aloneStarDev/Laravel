<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/login','UserController@signin')->name('signin');
Route::post('/contact/login','UserController@login')->name('login');
Route::get('/contact/signup','UserController@signup')->name('signup');
Route::post('/contact/signup','UserController@register')->name('register');

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index');

});
