<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//<<<<<<< HEAD
Route::get('/contact/login','AuthController@signin')->name('signin');
Route::post('/contact/login','AuthController@login')->name('login');
Route::get('/contact/signup','AuthController@signup')->name('signup');
Route::post('/contact/signup','AuthController@register')->name('register');
//=======
// Route::get('/contact/login','UserController@signin')->name('signin');
// Route::post('/contact/login','UserController@login')->name('login');
// Route::get('/contact/signup','UserController@signup')->name('signup');
// Route::post('/contact/signup','UserController@register')->name('register');

////route group for admin panel and management of it
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/panel' , 'PanelController@index');

});
// >>>>>>> 1f024e0cd1b94c4c87f2344c16ac4452881cf58c
