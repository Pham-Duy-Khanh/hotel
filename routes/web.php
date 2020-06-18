<?php



Route::get('/', function () {
    return view('welcome');
});


//index
Route::get("/", "hotel_controller@index")->name("index");
//hotel
Route::get("hotel", "hotel_controller@hotel")->name("hotel");
//hotel_details
Route::get("hotel_details/{id}", "hotel_controller@hotel_details")->name("hotel_details");
//login 
Route::get('login',"Controller@login")->name('login');
Route::post('login',"Controller@login_post")->name('post_login');
Route::get('logout_user','Controller@logout_user')->name('logout_user');
//registration 
Route::get('registration',"Controller@register")->name('register');
Route::post('registration','Controller@insert')->name('insert_register');
//room
Route::get('room_hotel/{id}',"hotel_controller@room")->name('room');
//profile
Route::get('profile',"Controller@profile")->name('profile');
//Services
Route::get('services',"hotel_controller@services")->name('services');
//Blog
Route::get('blog',"hotel_controller@blog")->name('blog');
//About
Route::get('about',"hotel_controller@about")->name('about');
