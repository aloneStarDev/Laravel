<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/login','AuthController@signin')->name('signin');
Route::post('/contact/login','AuthController@login')->name('login');
Route::get('/contact/signup','AuthController@signup')->name('signup');
Route::post('/contact/signup','AuthController@register')->name('register');
