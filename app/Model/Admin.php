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

    public function getAdmin($adminId) {
        $arr = DB::select("select * from $this->table where admin_id = $adminId");
        return $arr;
    }

    public function updateAdmin($adminId,$firstname,$lastname,$phone,$address,$birthday,$gender,$newPass) {
        $arr = DB::table('admins')
            ->where('admin_id', $adminId)
            ->update([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone' => $phone,
                'address' => $address,
                'birthday' => $birthday,
                'gender' => $gender,
                'password' => $newPass
            ]);
        return $arr;

    }

}
