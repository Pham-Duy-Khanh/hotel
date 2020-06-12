<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Request;
use Session;
use App\Model\Customer;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //login
    public function login(){
        return view('hotel.login');
    }
    //
    public function process_login_user()
    {
        $cus           = new Customer();
        $cus->email    = Request::get('email');
        $cus->pass = Request::get('pass');

        $cus           = $cus->get_login($cus->email,$cus->pass);


        if(count($cus)==1&& $cus[0]->access==0){
            Session::put('ma_us',$cus[0]->customer_id);
            Session::put('email',$cus[0]->email);
            Session::put('phone',$cus[0]->phone);

            return redirect()->route("index")->with('messages',' Welcome user: ');
        }
        return redirect()->route('login')->with('error1','Đăng nhập sai');
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
	//profile
    public function profile(){
        return view('profile.profile');
    }
}
