<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\CommonController;
class IndexController extends CommonController
{
    //模板
    public function index()
    {
        return view('backend.index.index');
    }
    //模板的上部分
    public function top()
    {
        return view('backend.index.top');
    }
    //模板的中间部分
    public function main()
    {
        return view('backend.index.main');
    }
    //模板的菜单部分
    public function menu()
    {
        return view('backend.index.menu');
    }

}