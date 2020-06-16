<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use DB;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\Hotel;

class hotel_controller extends Controller {
    //index
    public function index(){

        return view('hotel.index');
    }
    //hotel
    public function hotel(){
        $hotel = DB::table('hotels')->paginate(8);
        // $hotel = DB:: Select("select * from hotels ");
        return view('hotel.hotel',['hotels' => $hotel]);
    }
    //hotel_details
    public function hotel_details($id){

        // $room= DB::table('rooms')->join('services', 'services.services_id', '=', 'rooms.services_id')->get();
       
        $room= DB::table('rooms')->get();
        $hotel = Hotel::find($id);
        
        return view('hotel.hotel_details', ['room' => $room,'hotel' => $hotel]);
    }
    //room
    public function room(){
        return view('hotel.room');
    }
    //Services
    public function services(){
        return view('hotel.services');
    }
     //Blog
    public function blog(){
        return view('hotel.blog');
    }

    //About
    public function about(){
        return view('hotel.about');
    }

}

