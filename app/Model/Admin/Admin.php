<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class Admin {

    public $table = 'admins';

    public function getDataAdmin() {
        $arr = DB::select("select * from $this->table");
        return $arr;
    }

    public function getInsert($firestname, $lastname, $email, $formRadioInput, $pass) {
        $values = array(
            'name' => $firestname,
            'username' => $lastname,
            'email' => $email,
            'password' => $pass,
            'gender' => $formRadioInput,
            'role' => "2",
            'status' => "1"
        );
        DB::table('admins')->insert($values);
    }

}
