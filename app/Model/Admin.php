<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class Admin {


    public $table = 'admins';

    public function getLogin($email,$pass)
    {
        $array = DB::select("select * from $this->table
    		where email = ? and password = ?
    		limit 1",[
            $email,
            $pass
        ]);
        return $array;
    }

    public function checkAdmin($adminId) {
        $array = DB::select("select * from $this->table
    		where admin_id = ?
    		limit 1",[
            $adminId
        ]);
        return $array;
    }

}
