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

}
