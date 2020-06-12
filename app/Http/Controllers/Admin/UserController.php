<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;


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
        if (count($checkData) >= 1) {
            $adminId = $checkData[0]->admin_id;
            $username = $checkData[0]->username;
            \Illuminate\Support\Facades\Session::put('admin_id', $adminId);
            \Illuminate\Support\Facades\Session::put('username', $username);
            return redirect()->route('admin.dashboard')->with('messages',' Welcome Admin: ');

        }
        return redirect()->route('admin.login')->with('error','Đăng nhập sai');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function logout() {
        return redirect()->route('admin.login');
    }

    public function profile() {
        return view('admin.profile');
    }
}
