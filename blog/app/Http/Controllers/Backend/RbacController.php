<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RbacController extends Controller
{
    //管理员列表
    public function adminList()
    {
        return view('backend.rbac.adminList');
    }
    //管理员日志
    public function adminLog()
    {
        return view('backend.rbac.adminLog');
    }
    //角色管理
    public function adminRole()
    {
        return view('backend.rbac.adminRole');
    }
}
