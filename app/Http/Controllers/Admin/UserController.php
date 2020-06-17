<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


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
            $firstname = $checkData[0]->firstname;
            $lastname = $checkData[0]->lastname;
            $role = $checkData[0]->role;
            \Illuminate\Support\Facades\Session::put('admin_id', $adminId);
            \Illuminate\Support\Facades\Session::put('firstname', $firstname);
            \Illuminate\Support\Facades\Session::put('lastname', $lastname);
            \Illuminate\Support\Facades\Session::put('role', $role);
            return redirect()->route('admin.dashboard')->with('messages',' Welcome Admin: ');

        }
        return redirect()->route('admin.login')->with('error','Đăng nhập sai');
    }

    public function dashboard() {
        $adminId = $this->request->session()->get('admin_id');
        $firstname = $this->request->session()->get('firstname');
        $lastname = $this->request->session()->get('lastname');
        if ($this->request->session()->get('error')) {
            $this->request->session()->remove('error');
        }
        if ($adminId != null && $firstname != null && $lastname != null) {
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

    public function profile($adminId) {
        $arr = $this->admin->checkAdmin($adminId);
        \Illuminate\Support\Facades\Session::put('data', $arr);
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
                \Illuminate\Support\Facades\Session::put('firstname', $checkData[0]->firstname);
                \Illuminate\Support\Facades\Session::put('lastname', $checkData[0]->lastname);
                \Illuminate\Support\Facades\Session::put('role', $checkData[0]->role);
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

    public function updateAdmin($adminId) {
        $firstname = $this->request->get('firstname');
        $lastname = $this->request->get('lastname');
        $phone = $this->request->get('phone');
        $address = $this->request->get('address');
        $birthday = $this->request->get('birthday');
        $gender = $this->request->get('gender');
        $password = $this->request->get('password');
        $newPass = $this->request->get('newPassword');
        $checkPass = $this->admin->getAdmin($adminId);
        $dataPass = $checkPass[0]->password;
        if ($password !== $dataPass) {
            return redirect()->route('getProfile', $adminId)->with('messagesError', 'Incorrect password');
        } else {
            $update = $this->admin->updateAdmin($adminId, $firstname, $lastname, $phone, $address, $birthday, $gender,$newPass);
            if ($update == '1') {
                return redirect()->route('getProfile', $adminId)->with('messagesSuccess', 'Update Success');
            } else {
                return redirect()->route('getProfile', $adminId)->with('messagesError', 'Update failed');
            }
        }
    }
}
