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

    Route::get('profile/{admin_id}',
        ['as' => 'getProfile', 'uses' => 'Admin\UserController@profile']);

    Route::post('updateAdmin/{admin_id}',
        ['as' => 'updateAdmin', 'uses' => 'Admin\UserController@updateAdmin']);

    Route::get('lockScreen/{admin_id}',
        ['as' => 'getLockScreen', 'uses' => 'Admin\UserController@getLockScreen']);

    Route::post('checkAdmin/{adminId}',
        ['as' => 'checkAdmin', 'uses' => 'Admin\UserController@checkAdmin']);

    //Customer
    Route::group(["prefix" => "customer"], function(){
        Route::get('showAllCustomer',
            ['as' => 'showAllCustomer', 'uses' => 'Admin\CustomerController@getAllCustomer']);
        Route::get('deleteCustomer',
            ['as' => 'deleteCustomer', 'uses' => 'Admin\CustomerController@deleteCustomer']);
    });

    Route::group(["prefix" => "staff"], function(){
        Route::get('showStaff',
            ['as' => 'showStaff', 'uses' => 'Admin\AdminController@showStaff']);

        Route::get('addAdmin',
            ['as' => 'addAdmin', 'uses' => 'Admin\AdminController@addAdmin']);

        Route::get('deleteAdmin/{admin_id}',
            ['as' => 'deleteAdmin', 'uses' => 'Admin\AdminController@deleteAdmin']);

        Route::get('lockAccount/{admin_id}',
            ['as' => 'lockAccount', 'uses' => 'Admin\AdminController@lockAccount']);
    });

    //Hotel manager
    Route::group(["prefix" => "hotel"], function(){
        Route::get('showAllHotel',
            ['as' => 'showAllHotel', 'uses' => 'Admin\HotelController@showAllHotel']);

        Route::get('createNewHotel',
            ['as' => 'createNewHotel', 'uses' => 'Admin\HotelController@createNewHotel']);

        Route::get('loadCity',
            ['as' => 'loadCity', 'uses' => 'Admin\HotelController@loadCity']);

        Route::get('loadDistrict',
            ['as' => 'loadDistrict', 'uses' => 'Admin\HotelController@loadDistrict']);

//        Route::get('test',
//            ['as' => 'test', 'uses' => 'Admin\HotelController@test']);
    });
});
Route::post('/item/image/upload', 'Admin\HotelController@fileUpload');
Route::get('/item/image/delete', 'Admin\HotelController@removeUpload');
