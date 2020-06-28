<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class ServicesController extends Controller
{
    protected $services;

    protected $request;

    public function __construct(
        \App\Model\Admin\Services $services,
        \Illuminate\Http\Request $request
    )
    {
        $this->services = $services;
        $this->request = $request;
    }

    public function showServices() {
        $arr = $this->services->getDataServices();
        \Illuminate\Support\Facades\Session::put('data', $arr);
        return view('admin.services.showAllServices');
    }

    public function addServices() {
        $name = $this->request->get('name');
        $description = $this->request->get('description');
        $this->services->addServices($name,$description);
        return redirect('admin/services/showServices')->with('messagesService', 'Them thành công');
    }

    public function deleteServices($servicesId) {
        $this->services->deleteServices($servicesId);
        return redirect('admin/services/showServices')->with('messagesService', 'Xoa thành công');
    }
}
