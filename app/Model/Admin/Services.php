<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class Services {

    public $table = 'services';

    public function getDataServices() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

    public function addServices($name,$description) {
        $values = array(
            'name_services' => $name,
            'describe' => $description
        );
        DB::table('services')->insert($values);
    }

    public function deleteServices($servicesId) {
        DB::delete("delete from $this->table where services_id = ?", [$servicesId]);
    }
}
