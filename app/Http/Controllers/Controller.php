<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //login
    public function login(){
        return view('hotel.login');
    }
    //register
    public function register(){
        return view('hotel.registration');
    }
    //insert register
    public function insert(RegisterRequest $req){
    		// dd(1);
			$fullname = $req->name;
			$password = $req->password;
			$email = $req->email;
			$cmnd = $req->cmnd;

			// dd($req->all());
			$data = array(
				'customer_id' => '2',
				'name' => $fullname,
				'password' => $password,
				'email' => $email,
				'status' => '1' ,
				'idcard' => $cmnd,
				'gender' => '1' ,
			);
			$register = DB::table('customer')->insert($data); 
			return view('hotel.registration',['register' => $register ]);

	}
}
