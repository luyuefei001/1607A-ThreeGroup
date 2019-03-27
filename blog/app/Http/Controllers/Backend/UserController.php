<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //用户列表
    public function userList()
    {
        return view('backend.user.userList');
    }
    //会员列表
    public function vipList()
    {
        return view('backend.user.vipList');
    }
    //添加会员
    public function vipListAdd()
    {
        return view('backend.user.vipListAdd');
    }
    //添加会员
    public function vipListDel()
    {
        //进行删除操作
    }
}
