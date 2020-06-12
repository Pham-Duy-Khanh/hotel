<?php

namespace App\Model;

use DB;

class Customer {
	public $table = 'customer';

	public function get_login()
    {
    	$array = DB::select("select * from $this->table
    		where email = ? and pass = ?
    		limit 1",[
    			$this->email,
    			$this->pass
    		]);
    	return $array;
    }

}
