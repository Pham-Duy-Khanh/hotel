<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * @var \App\Model\Admin
     */
    protected $admin;

    protected $request;

    /**
     * UserController constructor.
     * @param \App\Model\Admin $admin
     */
    public function __construct(
        \App\Model\Admin $admin,
        \Illuminate\Http\Request $request
    )
    {
        $this->admin = $admin;
        $this->request = $request;
    }

    public function index() {
        return view('admin.login');
    }

    public function processLogin() {
        $email = $this->request->get('username');
        $pass = $this->request->get('password');

        $checkData = $this->admin->getLogin($email,$pass);


//        if(count($admin)==1&& $admin[0]->status==0){
//            Session::put('ma_admin',$admin[0]->id);
//            Session::put('ten_admin',$admin[0]->name);
//
//            return redirect()->route("welcome")->with('messages',' Welcome Admin: ');
//        }
        return redirect()->route('view_login')->with('error','Đăng nhập sai');
    }
}
