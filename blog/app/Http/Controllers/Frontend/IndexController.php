<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
        //获取排序钱3名 作为轮播图展示的数据
        $list1 = DB::table('ecs_good')->orderBy('shopSort','desc')->limit(3)->get();
        //获取排序前3-6名的 作为促销盒区域的数据
        $list2 = DB::table('ecs_good')->orderBy('shopSort','desc')->limit(3,3)->get();
        //获取特色榜的前五名 
        $list3 = DB::table('ecs_good')->where('recommend',1)->limit(5)->get();
        //获取新品榜的前五名
        $list4 = DB::table('ecs_good')->where('recommend',2)->limit(5)->get();
        //获取畅销榜的前五名
        $list5 = DB::table('ecs_good')->where('recommend',3)->limit(5)->get();
        //获取廉价榜的前五名
        $list6 = DB::table('ecs_good')->where('recommend',4)->limit(5)->get();
        //获取最受关注的产品领域
        // dd($str);
        return view('frontend.index.index',['list1'=>$list1,'list2'=>$list2,'list3'=>$list3,'list4'=>$list4,'list5'=>$list5,'list6'=>$list6]);
    }
}