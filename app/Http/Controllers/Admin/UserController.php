<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;


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
        $adminId = $this->request->session()->get('admin_id');
        $username = $this->request->session()->get('username');
        if ($this->request->session()->get('error')) {
            $this->request->session()->remove('error');
        }
        if ($adminId != null && $username != null) {
            return view('admin.dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function logout() {
        Auth::logout();
        $this->request->session()->invalidate();
        return redirect()->route('admin.login');
    }

    public function profile() {
        return view('admin.profile');
    }

    public function getLockScreen($admin_id) {
        \Illuminate\Support\Facades\Session::put('admin_id', $admin_id);
        $this->request->session()->remove('username');
        return view('admin.lockScreen');
    }

    public function checkAdmin($adminId) {
        $checkData = $this->admin->checkAdmin($adminId);
        if (count($checkData) >= 1) {
            $checkPass = $this->request->get('password');
            $passAdmin = $checkData[0]->password;
            if ($checkPass == $passAdmin) {
                \Illuminate\Support\Facades\Session::put('admin_id', $adminId);
                \Illuminate\Support\Facades\Session::put('username', $checkData[0]->username);
                return redirect()->route('admin.dashboard');
            } else {
                \Illuminate\Support\Facades\Session::put('admin_id', $adminId);
                \Illuminate\Support\Facades\Session::put('error', 'Sai mat khau');
                return view('admin.lockScreen');
            }
        } else {
            return $this->logout();
        }
    }
}
