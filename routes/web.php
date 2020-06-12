<?php

use Illuminate\Support\Facades\Route;

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

//Admin Login
Route::group(["prefix" => "admin"], function(){
    Route::get("login", 'Admin\UserController@index')->name('admin.login');
    Route::get('logout',
        ['as' => 'getLogout', 'uses' => 'Admin\UserController@logout']);

    Route::post('processLogin',
        ['as' => 'getLogin', 'uses' => 'Admin\UserController@processLogin']);

    Route::get('dashboard', 'Admin\UserController@dashboard')->name('admin.dashboard');

    Route::get('profile',
        ['as' => 'getProfile', 'uses' => 'Admin\UserController@profile']);

    Route::get('lockScreen/{admin_id}',
        ['as' => 'getLockScreen', 'uses' => 'Admin\UserController@getLockScreen']);

    Route::post('checkAdmin/{adminId}',
        ['as' => 'checkAdmin', 'uses' => 'Admin\UserController@checkAdmin']);



});
