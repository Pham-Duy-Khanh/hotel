<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class Admin {


    public $table = 'admin';

    public function getLogin($email,$pass)
    {
        $array = DB::select("select * from $this->table
    		where email = ? and pass = ?
    		limit 1",[
            $email,
            $pass
        ]);
        return $array;
    }

}
