<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class XaPhuong {

    public $table = 'xaphuongthitran';

    public function getAllXaPhuong() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

    public function getLoadXa($value) {
        $arr = DB::select("select * from $this->table where maqh=$value");
        return $arr;
    }

}
