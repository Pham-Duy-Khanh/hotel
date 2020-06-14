<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class AdminController extends Controller
{
    protected $admin;

    public function __construct(
        \App\Model\Admin\Admin $admin
    )
    {
        $this->admin = $admin;
    }

    public function showStaff() {
        $arr = $this->admin->getDataAdmin();
        \Illuminate\Support\Facades\Session::put('data', $arr);
        return view('admin.ShowStaff');
    }

    public function addAdmin(Request $request) {
        if (Request::ajax()) {
            $firestname = Request::input('firestname');
            $lastname = Request::input('lastname');
            $email = Request::input('email');
            $formRadioInput = Request::input('formRadioInput');
            $pass = Request::input('pass');
            $this->admin->getInsert($firestname, $lastname, $email, $formRadioInput, $pass);
            $arr = $this->admin->getDataAdmin();
            return json_encode(["data" => $arr]);

        } else {
            $result = false;
        }
        return $result;
    }

}
