<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use DB;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

class hotel_controller extends Controller {
    //index
    public function index(){
        
        return view('hotel.index');
    }
    //hotel
    public function hotel(){
        return view('hotel.hotel');
    }
    //hotel_details
    public function hotel_details(){
        return view('hotel.hotel_details');
    }
    //room
    public function room(){
        return view('hotel.room');
    }
}

