<?php

use App\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/','Base\MainController@index')->name('base')->middleware('account');
route::get('/About','Base\MainController@about')->name('about')->middleware('account');
route::get('/customer','Base\MainController@customer')->name('customer')->middleware('account');
route::get('/ContactUs','Base\MainController@contactUs')->name('contactUs')->middleware('account');
route::get('/rules','Base\MainController@rules')->name('rules')->middleware('account');
route::get('/profile/{id}','Base\MainController@profile')->name('profile')->middleware('account');
route::get('/file/info/{file}','Base\MainController@info')->name('info')->middleware('account');
route::get('/file/search','Base\MainController@search')->name('search')->middleware('account');
Route::post('/survey/store','Base\SurveyController@store')->name('survey.store')->middleware('account');
route::post('/member/search','Base\MainController@searchMember')->name('searchMember')->middleware('account');
route::get('/member/panel','Base\ManagementController@index')->name('member.panel')->middleware('account')->middleware("auth");
route::post('/member/update','Base\ManagementController@update')->name('member.panel.update')->middleware('account')->middleware("auth");
route::post('/member/reset/password','Base\ManagementController@resetPass')->name('member.panel.resetPass')->middleware('account')->middleware("auth");
route::post('/member/reset/phonenumber','Base\ManagementController@resetPhonenumber')->name('member.panel.resetPhonenumber')->middleware('account')->middleware("auth");
route::get('/member/reset/phonenumber','Base\ManagementController@sendCode')->name('member.panel.sendCode')->middleware('account')->middleware("auth");
route::get('/member/payment','Base\ManagementController@payment')->name('member.panel.payment')->middleware("auth");
route::post('/member/subscribe','Base\ManagementController@checkSubscribe')->name('member.panel.subscribe')->middleware("auth");
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
    Route::get('/file/recheck', 'FileController@recheck')->name('file.recheck');
    Route::get('/file/back', 'FileController@callback')->name('file.callback');
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
    Route::get('survey/index','ReceiveController@indexsurvey')->name('survey.index');
    Route::get('survey/delete/{survey}','ReceiveController@destroysurvey')->name('survey.delete');
    Route::get('survey/show/{survey}','ReceiveController@showsurvey')->name('survey.show');
    Route::post("/reset/pass","PanelController@reset")->name("admin.reset.pass");
});
