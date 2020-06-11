<?php



Route::get('/', function () {
    return view('welcome');
});


//index
Route::get("/", "hotel_controller@index")->name("index");
//hotel
Route::get("hotel", "hotel_controller@hotel")->name("hotel");
//hotel_details
Route::get("hotel_details", "hotel_controller@hotel_details")->name("hotel_details");
//login 
Route::get('login',"Controller@login")->name('login');
//registration 
Route::get('registration',"Controller@register")->name('register');
Route::post('registration','Controller@insert')->name('insert_register');
//room
Route::get('room_hotel',"hotel_controller@room")->name('room');
