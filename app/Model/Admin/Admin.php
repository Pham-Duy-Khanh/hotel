<?php

namespace App\Model\Admin;

use Illuminate\Support\Facades\DB;

class Admin {

    public $table = 'admins';

    public function getDataAdmin() {
        $arr = DB::select("select * from $this->table where role = 2");
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

    public function deleteAdmin($adminId) {
        DB::delete("delete from $this->table where admin_id = ?", [$adminId]);
    }

    public function lockAccount($adminId) {
        DB::table('admins')
            ->where('admin_id', $adminId)
            ->update(['status' => '2']);
    }

}
