<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
    //    echo "我是前台index控制器里面的默认方法";
        return view('frontend.index.index');
    }
}