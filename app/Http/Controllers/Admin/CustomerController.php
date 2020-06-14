<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class CustomerController extends Controller
{
    protected $showCustomer;

    public function __construct(
        \App\Model\Admin\ShowCustomer $showCustomer
    )
    {
        $this->showCustomer = $showCustomer;
    }

    public function getAllCustomer() {
        $arr = $this->showCustomer->getDataCustomer();
        \Illuminate\Support\Facades\Session::put('data', $arr);
        return view('admin.showAddCustomer');

    }

    public function deleteCustomer(Request $request) {
        if (Request::ajax()) {
            $customerId = Request::input('customerId');
            $this->showCustomer->deleteCustomer($customerId);
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}
