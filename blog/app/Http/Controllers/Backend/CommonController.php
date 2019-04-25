<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CommonController extends Controller 
{
    //商城和后台的Rbac 权限控制
    public function __construct()
    {
        //禁止非法登录
        $this->check();
        //获取该用户的权限
        $this->checkAccess();
    }


    //禁止非法登录
    public function check()
    {
        session_start();
        // dd($_SESSION);
        if(empty($_SESSION['user_id'])){
            echo "禁止非法登录";
            exit();
        }
    }

    
    //获取该用户的权限
    public function checkAccess()
    {
        //获取用户的id
        $user_id = $_SESSION['user_id'];
        //通过用户id 查询 该用户的角色的id
        $role_id = DB::select("select `role_id` from `user_role` where user_id = $user_id");

        $role_id = $role_id[0]->role_id;
       
        //通过该角色的id 查询 拥有的权限的id
        $access_id = DB::select("select `access_id` from `role_access` where role_id = $role_id");
        //因为是多个权限id 所以要处理成字符串
        $str = '';
        foreach ($access_id as $key => $value) {
            $str .= $value->access_id.',';
        }
        //处理成 1,2,3........ 这种格式
        $access_id = trim($str,',');

        //通过权限id 查询 该用户拥有的权限
        $access = DB::select("select `access_url`,`access_name` from `ecs_access` where access_id in ($access_id)");
       

        //获取当前的路由
        $url = \Request::getRequestUri();
        $url = ltrim($url,'/');
        $data = 0;
        //查看数据库中是否有该路由 如果有就是有权限 没有就是没有权限
        foreach ($access as $key => $value) {
            if($value->access_url == $url){
                //有权限访问
                $_SESSION['access'] = $access;
                $data = 1;
                
            }
        }
        // dd($data);
        if(!$data){
            //就是没权限
            header("refresh:3;url=http://www.laravel.com/frontend");
            print('没有权限访问该网页<br>三秒后自动跳转到商城首页。');
            exit();
        }
       
    }

}