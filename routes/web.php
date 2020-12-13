<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('reservation','ReservationFormController@create');

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home','TemplateController@index')->name('user.home');
    //Route::get('/master', 'TemplateController@index');
    Route::get('profile','TemplateController@profile')->name('user.profile');
    Route::post('add-offer','TemplateController@addOffer')->name('user.add-offer');
    Route::post('reservation','TemplateController@reservation')->name('user.reservation');
});
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('user-list','AdminController@users')->name('admin.user_list');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


