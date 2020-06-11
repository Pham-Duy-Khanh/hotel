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
    Route::get("login", 'Admin\UserController@index');


//    Route::get("processLogin","Admin\UserController@processLogin")
//        ->name("processLogin");
});
Route::post('processLogin', "Admin\UserController@processLogin");
