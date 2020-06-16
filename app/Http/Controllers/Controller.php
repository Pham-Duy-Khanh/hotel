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




class Controller extends BaseController
{

    protected $customer;

    public function __contruct(
        \App\Model\Customer $customer
    ) {
        $this->customer = $customer;
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //login
    public function login(){
        return view('hotel.login');
    }
    //
    public function process_login_user(Request $req)
    {
        
        $email    = $req::get('email');
        $pass = $req::get('password');
        // $cus           = $this->get_login($email, $pass);
        $cus           = $this->customer->get_login($email, $pass);
        dd($cus);

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
        $show_profile = DB:: select( " select * from customer ");
        return view('profile.profile',['show_profile'=>$show_profile]);
    }
}
