<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
    //    echo "我是后台index控制器里面的默认方法";
       return view('backend.index.index');
    }

}