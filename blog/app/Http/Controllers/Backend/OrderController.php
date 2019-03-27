<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //订单列表
    public function orderList()
    {
        return view('backend/order/orderList');
    }
     //订单添加
     public function orderListAdd()
     {
         return view('backend/order/orderListAdd');
     }
      //订单查询
    public function orderQuery()
    {
        return view('backend/order/orderQuery');
    }
     //发货单列表
     public function sendList()
     {
         return view('backend/order/sendList');
     }
     //退货单列表
     public function backList()
     {
         return view('backend/order/backList');
     }
}
