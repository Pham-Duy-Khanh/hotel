<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class HotelController extends Controller
{

    /**
     * @var \App\Model\Admin\Hotel
     */
    protected $hotel;

    /**
     * @var \App\Model\Admin\City
     */
    protected $city;

    /**
     * @var \App\Model\Admin\QuanHuyen
     */
    protected $quanhuyen;

    /**
     * @var \App\Model\Admin\XaPhuong
     */
    protected $xaPhuong;

    /**
     * @var \App\Model\Admin\ImageHotel
     */
    protected $imageHotel;

    /**
     * HotelController constructor.
     * @param \App\Model\Admin\Hotel $hotel
     * @param \App\Model\Admin\City $city
     * @param \App\Model\Admin\QuanHuyen $quanHuyen
     * @param \App\Model\Admin\XaPhuong $xaPhuong
     * @param \App\Model\Admin\ImageHotel $imageHotel
     */
    public function __construct(
        \App\Model\Admin\Hotel $hotel,
        \App\Model\Admin\City $city,
        \App\Model\Admin\QuanHuyen $quanHuyen,
        \App\Model\Admin\XaPhuong $xaPhuong,
        \App\Model\Admin\ImageHotel $imageHotel
    )
    {
        $this->hotel = $hotel;
        $this->city = $city;
        $this->quanhuyen = $quanHuyen;
        $this->xaPhuong = $xaPhuong;
        $this->imageHotel = $imageHotel;
    }


    public function showAllHotel() {
        $arr = $this->hotel->getDataHotel();
        \Illuminate\Support\Facades\Session::put('data', $arr);
        return view('admin.hotelManager.showAllHotel');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    public function fileUpload(\Illuminate\Http\Request $request) {
        $_IMAGE = $request->file('file');
        $filename = time().$_IMAGE->getClientOriginalName();
        $uploadPath = 'public/images/item_images/';
        $_IMAGE->move($uploadPath,$filename);

        echo json_encode($filename);
    }

    public function removeUpload(\Illuminate\Http\Request $request)
    {
        try{
            $image = str_replace('"', '', $request->file);
            $directory = public_path() .  '/images/item_images/' . $image;
            @unlink(public_path() .  '/images/item_images/' . $image );

        }
        catch(Exception $e) {
            //echo 'Message: ' .$e->getMessage();
        }
        finally{
            $message = "success";
        }
        return json_encode($image);

    }

    /**
     * @return array
     */
    public function addHotel() {
        if (Request::ajax()) {
            $hotelName = Request::input('hotelName');
            $matp = Request::input('matp');
            $district = Request::input('district');
            $commune = Request::input('commune');
            $dichvu = Request::input('dichvu');
            $description = Request::input('description');
            $adminId = Request::input('adminId');
            $item_images = Request::input('item_images');
            $insert = $this->hotel->addHotel($hotelName,$matp,$district,$commune,$dichvu,$description,$adminId);
            if ($insert == true) {
                $getDataMax = $this->hotel->getDataMax();
                foreach ($getDataMax as $max) {
                    $data = $max->{'MAX(hotel_id)'};
                }
            }
            $arr = [
              'max' => $data,
              'image' => $item_images
            ];
        }
        return $arr;
    }

    public function addImage() {
        if (Request::ajax()) {
            $image = Request::input('image');
            $arr = explode('"', $image);
            $maxHotel = Request::input('maxHotel');
            foreach ($arr as $test) {
                if ($test != "" && $test != ",") {
                    $this->imageHotel->insetData($test,$maxHotel);
                }
            }
            $min = $this->imageHotel->minHotel($maxHotel);
            foreach ($min as $data) {
                $img = $data->{'MIN(name_images_hotel)'};
                $this->hotel->updateHotel($maxHotel, $img);
            }
            redirect('admin/hotel/showAllHotel')->with('messageHotel', 'Create a successful hotel');
        }
        return true;
    }

}
