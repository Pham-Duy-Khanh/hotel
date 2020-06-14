<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class ShowCustomer {


    public $table = 'customer';

    public function getDataCustomer() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

    public function deleteCustomer($customerId) {
        DB::delete("delete from $this->table where customer_id = ?", [$customerId]);
    }

}
