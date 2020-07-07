<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class Hotel {

    public $table = 'hotels';

    public function getDataHotel() {
        $arr = DB::table('hotels')
            ->join('admins', 'admins.admin_id', '=', 'hotels.admin_id')
            ->join('tinhthanhpho', 'hotels.matp', '=', 'tinhthanhpho.matp')
            ->join('quanhuyen', 'hotels.maqh', '=', 'quanhuyen.maqh')
            ->join('xaphuongthitran', 'hotels.xaid', '=', 'xaphuongthitran.xaid')
            ->get();
        return $arr;
    }

    public function addHotel($hotelName,$matp,$district,$commune,$dichvu,$description,$adminId) {
        $date = date("Y-m-d");
        $values = array(
            'admin_id' => $adminId,
            'hotel_name' => $hotelName,
            'matp' => $matp,
            'maqh' => $district,
            'xaid' => $commune,
            'count_star' => '1',
            'services_id' => $dichvu,
            'describe' => $description,
            'status' => "1",
            'create_at' => $date
        );
        $insert = DB::table('hotels')->insert($values);
        return $insert;
    }

    public function getDataMax() {
        $arr = DB::select("select MAX(hotel_id) from hotels");
        return $arr;
    }

    public function updateHotel($maxHotel, $img) {
        DB::table('hotels')
            ->where('hotel_id', $maxHotel)
            ->update(['avatar_hotel' => $img]);
    }

    public function loadOnHotel($hotelId) {
        $array = DB::select("select * from $this->table
    		where hotel_id = ?
    		limit 1",[
            $hotelId
        ]);
        return $array;
    }
}
