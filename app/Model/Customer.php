<?php

namespace App\Model;

use DB;

class Customer {
	public $table = 'customer';

	public function get_login($email, $pass)
    {
    	$array = DB::select("select * from  'customer'
    		where email = ? and password = ?
    		limit 1",[
    			$email,
                $pass,
    		]);
    	return $array;
    }

}
