<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class QuanHuyen {

    public $table = 'quanhuyen';

    public function getAllQuanHuyen() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

    public function getLoadQuanHuyen($value) {
        $arr = DB::select("select * from $this->table where matp=$value");
        return $arr;
    }

}
