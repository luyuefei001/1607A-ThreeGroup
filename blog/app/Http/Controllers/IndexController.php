<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    //视图
    public function index()
    {
        return view('index.show');
    }
    //分页展示
    public function create()
    {
        //当前页数
        $p = $_GET['p'] ?? 1;
        //获取要搜索的条件
        $serach = $_GET['serach'] ?? '';
        //获取总条数
        $count = DB::table('ss3_zk_two')->get()->count();
        //每页展示的个数
        $size = 2;
        //获取总页数
        $pageSum = ceil($count/$size);
        //偏移量
        $office = ($p-1) * $size;
        $data = DB::select("select * from `ss3_zk_two` where name like '%$serach%' limit $office , $size");
        return json_encode(['data'=>$data,'now_page'=>$p,'pageSum'=>$pageSum]);
    }
    //删除
    public function destroy($id)
    {
        // echo $id;
        //删除该条数据
        $res = DB::delete("delete from `ss3_zk_two` where id = $id");
        if(!$res){
            return json_encode(['code'=>'0','msg'=>'error']);
        }
        return json_encode(['code'=>'1','msg'=>'success']);
    }
}