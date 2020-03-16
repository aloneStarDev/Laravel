<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/login','UserController@signin')->name('signin');
Route::post('/contact/login','UserController@login')->name('login');
