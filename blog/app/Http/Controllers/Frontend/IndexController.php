<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    //商城首页
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
    //登录页面
    public function login()
    {
        if($_POST){
            $Info = $_POST;
            unset($Info['_token']);
            $data = DB::table('ecs_user')->where($Info)->get();
            if(!empty($data[0])){
                // dd($data[0]);
                //判断账号是否启用
                $status = $data[0]->userStatus;
                if($status == 0){
                    header("refresh:3;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend");
                    print('账号还在审核中,请耐心等待或联系管理员<br>三秒后自动跳转。');
                    exit();
                }
                //接收账号类型
                $type = $data[0]->userType;
                //将管理员或者用户的id 与昵称 存入session
                session_start();
                $_SESSION['user_id'] = $data[0]->user_id;
                $_SESSION['nickName'] = $data[0]->nickName;
                if($type == 1 || $type == 2){             
                    return redirect('backend');
                }
                return redirect('frontend');         
            }
            header("refresh:3;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend/register");
            print('账号不存在请注册<br>三秒后自动跳转。');
            exit();
        }
        return view('frontend/login/login');
    }
    //注册页面
    public function register()
    {
        if($_POST){
            $data = $_POST;
            //进行添加操作
            unset($data['_token']);
            //账号不能为空
            if($data['accountNumber'] == ''){
                header("refresh:3;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend/register");
                print('账号名不能为空<br>三秒后自动跳转。');
                exit();
            }
            //密码不能为空
            if($data['userPwd'] == ''){
                header("refresh:3;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend/register");
                print('密码不能为空<br>三秒后自动跳转。');
                exit();
            }
            if($user_id = DB::table('ecs_user')->insertGetId($data)){
                //判断是什么类型的用户
                if($data['userType'] == 1){
                    //注册的是管理员
                    header("refresh:5;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend");
                    print('等待审核,通过我们将回给您发送邮件<br>五秒后自动跳转。');
                    exit();
                }
                elseif($data['userType'] == 2){
                    //注册的是商家
                    header("refresh:5;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend");
                    print('欢迎您在本站注册商家,请等待本站审核,将于1-2个小时发送到您邮箱相关信息<br>五秒后自动跳转。');
                    exit();
                }
                //进入登录页面
                //修改一下普通用户的状态
                DB::table('ecs_user')->where(['user_id'=>$user_id])->update(['userStatus'=>'1']);
                return redirect('frontend/login');
            }

        }
        return view('frontend/login/register');
    }

    //判断账号是否存在
    public function check()
    {
        //接收用户输入的账号
        $accountNumber = $_GET['accountNumber'];
        $data = DB::table('ecs_user')->where(['accountNumber'=>$accountNumber])->get();
        if(empty($data[0])){
            echo json_encode(['code'=>1,'msg'=>'该账号可用']);       
             exit();
        }
        else{
            echo json_encode(['code'=>0,'msg'=>'该账号不可用']);
        }
        
    }

    //退出登录
    public function sessionOut()
    {
        session_start();
        unset($_SESSION['nickName']);
        header("refresh:5;url=http://127.0.0.1/1607A-ThreeGroup/blog/public/frontend");
        print('退出登录成功<br>五秒后自动跳转。');
    }
}