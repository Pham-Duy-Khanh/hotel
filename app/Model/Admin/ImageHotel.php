<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class ImageHotel {

    public $table = 'images_hotel';

    public function insetData($test,$maxHotel) {
        $values = array(
            'hotel_id' => $maxHotel,
            'name_images_hotel' => $test,
        );
        $insert = DB::table('images_hotel')->insert($values);
        return $insert;
    }

    /**
     * @param $maxHotel
     * @return array
     */
    public function minHotel($maxHotel) {
        $arr = DB::select("select MIN(name_images_hotel) from images_hotel where hotel_id=$maxHotel");
        return $arr;
    }


    public function loadImage($hotelId) {
        $arr = DB::select("select * from $this->table
    		where hotel_id = ?
    		",[
            $hotelId
        ]);
        return $arr;
    }
}
