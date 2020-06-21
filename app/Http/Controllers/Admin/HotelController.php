<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class HotelController extends Controller
{
    protected $hotel;

    protected $city;

    protected $quanhuyen;

    protected $xaPhuong;

    public function __construct(
        \App\Model\Admin\Hotel $hotel,
        \App\Model\Admin\City $city,
        \App\Model\Admin\QuanHuyen $quanHuyen,
        \App\Model\Admin\XaPhuong $xaPhuong
    )
    {
        $this->hotel = $hotel;
        $this->city = $city;
        $this->quanhuyen = $quanHuyen;
        $this->xaPhuong = $xaPhuong;
    }


    public function showAllHotel() {
        $arr = $this->hotel->getDataHotel();
        \Illuminate\Support\Facades\Session::put('data', $arr);
        return view('admin.hotelManager.showAllHotel');
    }

    public function createNewHotel() {
        $city = $this->city->getAllCity();
        $quanHuyen = $this->quanhuyen->getAllQuanHuyen();
        $xaPhuong = $this->xaPhuong->getAllXaPhuong();
        \Illuminate\Support\Facades\Session::put('city', $city);
        \Illuminate\Support\Facades\Session::put('quanHuyen', $quanHuyen);
        \Illuminate\Support\Facades\Session::put('xaPhuong', $xaPhuong);
        return view('admin.hotelManager.formAddHotel');
    }

    public function loadCity(Request $request) {
        if (Request::ajax()) {
            $value = Request::input('value');
            $quanHuyen = $this->quanhuyen->getLoadQuanHuyen($value);
        }
        return response(['data' => $quanHuyen]);
    }

    public function loadDistrict(Request $request) {
        if (Request::ajax()) {
            $value = Request::input('value');
            $quanHuyen = $this->xaPhuong->getLoadXa($value);
        }
        return response(['data' => $quanHuyen]);
    }

}
