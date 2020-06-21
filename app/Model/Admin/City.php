<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class City {

    public $table = 'tinhthanhpho';

    public function getAllCity() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

}
