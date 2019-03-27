<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ShopController extends Controller
{
    //商品列表
    public function shopList()
    {
        return view('backend.shop.shopList');
    }
     //添加新商品
     public function shopAdd()
     {
         return view('backend.shop.shopAdd');
     }


     //商品分类
     public function shopClassify()
     {
         //获取当前分类信息
          $data = DB::table('ecs_goodClassify')->orderBy('sort','desc')->get();
          $data = $this->getChild($data);
          //将子级分类前面加 多个[*]
          $data = $this->blank($data);
          return view('backend.shop.shopClassify',['list'=>$data]);
     }

     //添加商品分类
     public function shopClassifyAdd()
     {
        if($_POST)
        {
           $data = $_POST;
           $data['CreateDate'] = time();
           unset($data['_token']);
           if(DB::table('ecs_goodClassify')->insert($data))
           {
               return redirect('backend/shopClassify');
           }
           echo "添加商品分类失败";
           exit();
        }
        //获取商品分类
        $data = DB::table('ecs_goodClassify')->orderBy('sort','desc')->get();
        $data = $this->getChild($data);
        //将子级分类前面加 多个[*]
        $data = $this->blank($data);
        return view('backend.shop.shopClassifyAdd',['data'=>$data]);
     }

     //修改商品分类
     public function shopClassifyUpdate()
     {
        if($_POST){
            $Info = $_POST;
            $id = $Info['id'];
            unset($Info['_token']);
            unset($Info['id']);
            //进行修改
            $res = DB::table('ecs_goodClassify')->where('id',$id)->update($Info);
            if($res){
               return redirect('backend/shopClassify');
            }
            echo "修改失败";
            exit();
        }
        $id = $_GET['id'];
        //获取该品牌的信息
        $dataOne = DB::table('ecs_goodClassify')->where(['id'=>$id])->get();
         //获取商品分类
        $data = DB::table('ecs_goodClassify')->orderBy('sort','desc')->get();
        $data = $this->getChild($data);
        //将子级分类前面加 多个[*]
        $data = $this->blank($data);
        return view('backend.shop.shopClassifyUpdate',['data'=>$dataOne,'classify'=>$data]);
     }

     //删除商品分类
     public function shopClassifyDel()
     {
        //进行删除操作
        $id = $_GET['id'];
        //   echo $id;
        if(DB::table('ecs_goodClassify')->where('id',$id)->delete()){
            return redirect('backend/shopClassify');
        }
        echo "删除失败";
        exit();
     }

      //无限极分类
      public function getChild($data,$pid = 0,$leval = 0)
      {
         static $arr = [];
         foreach ($data as $key => $value) {
            //第一次遍历 找到父节点 也就是pid = 0的
            if($value->parent_id == $pid){
               $value->leval = $leval;
               //将数组放到arr中
               $arr[] = $value;
               unset($data[$key]);
               //开始递归,查找父id为该节点id的节点 
               $this->getChild($data,$value->id,$leval+1);
            }
         }
         return $arr;
      }

      //将子级分类前面 加多个[*]
      public function blank($data)
      {
         foreach ($data as $key => &$value) {
            $value->name = str_repeat(' === ',$value->leval) . $value->name;
         }
         return $data;
      }


     //商品品牌
     public function shopBrand()
     {
        //获取商品品牌信息
        $data = DB::table('ecs_goodBrand')->orderBy('sort','desc')->get();
        return view('backend.shop.shopBrand',['list'=>$data]);
     }

     //添加商品品牌
     public function shopBrandAdd()
     {
        if($_POST){
            //获取要添加的信息
            $data = $_POST;
            //获取要添加的品牌logo信息
            $file = $_FILES['brand_logo'];
            if($file['error'] > 0){
               echo "文件上传失败";
               exit();
            }
            //文件的存储地址
            $filename = 'backends/images' .'/'. time(). $file['name']; 
            //判断该文件是否存在
            if(file_exists($filename)){
               echo "该文件已存在";
               exit();
            }
            //文件名如果是中文名 转换编码格式
            $filename = iconv('UTF-8','gb2312',$filename);
            if(move_uploaded_file($file['tmp_name'],$filename)){
               //上传成功那就将之添加进数据库
               $data['logo'] = $filename;
               $data['CreateDate'] = time();
               unset($data['_token']);
               //进行添加操作
               $res = DB::table('ecs_goodBrand')->insert($data);
               if($res){
                  //添加成功
                  return redirect('backend/shopBrand');
               }
               else{
                  echo "添加失败";
                  exit();
               }
            }
        }
        return view('backend.shop.shopBrandAdd');
     }

     //修改商品品牌
     public function shopBrandUpdate()
     {
        if($_POST){
           //接收要修改的信息
            $Info = $_POST;
            $id = $Info['shopBrand_id'];
            if(!$_FILES['brand_logo']['error'] == 4){
               //获取要添加的品牌logo信息
               $file = $_FILES['brand_logo'];
               dd($file);
               die;
               if($file['error'] > 0){
                  echo "文件上传失败";
                  exit();
               }
               //文件的存储地址
               $filename = 'backends/images' .'/'. time(). $file['name']; 
               //判断该文件是否存在
               if(file_exists($filename)){
                  echo "该文件已存在";
                  exit();
                  
               }
               //文件名如果是中文名 转换编码格式
               $filename = iconv('UTF-8','gb2312',$filename);
               if(move_uploaded_file($file['tmp_name'],$filename)){
                  $Info['logo'] = $filename;
               }
               
            }
         unset($Info['_token']);
         unset($Info['shopBrand_id']);
         //进行修改
         $res = DB::table('ecs_goodBrand')->where('shopBrand_id',$id)->update($Info);
         if($res){
            return redirect('backend/shopBrand');
         }
         echo "修改失败";
         exit();
        }
         $id = $_GET['id'] ?? 1;
         // echo "$id";
         //获取该品牌的信息
         $data = DB::table('ecs_goodBrand')->where(['shopBrand_id'=>$id])->get();
         // dd($data);
         return view('backend.shop.shopBrandUpdate',['data'=>$data]);
     }

     //删除商品品牌
     public function shopBrandDel()
     {
        //进行删除操作
        $id = $_GET['id'];
        //   echo $id;
        if(DB::table('ecs_goodBrand')->where('shopBrand_id',$id)->delete()){
            return redirect('backend/shopBrand');
        }
        echo "删除失败";
        exit();
     }


     //商品类型
     public function shopType()
     {
         //获取商品类型信息
         $data = DB::table('ecs_goodType')->orderBy('id','desc')->get();
         return view('backend.shop.shopType',['list'=>$data]);
     }

     //添加商品类型
     public function shopTypeAdd()
     {
        if($_POST){
            $data = $_POST;
            unset($data['_token']);
            if(DB::table('ecs_goodType')->insert($data))
            {
               return redirect('backend/shopType');
            }
            echo "添加商品类型失败";
            exit();
        }
        return view('backend.shop.shopTypeAdd');
     }

     //修改商品类型
     public function shopTypeUpdate()
     {
        if($_POST){
            $Info = $_POST;
            $id = $Info['id'];
            unset($Info['_token']);
            unset($Info['id']);
            //进行修改
            $res = DB::table('ecs_goodType')->where('id',$id)->update($Info);
            if($res){
               return redirect('backend/shopType');
            }
            echo "修改失败";
            exit();
        }
         $id = $_GET['id'] ?? 1;
         // echo "$id";
         //获取该品牌的信息
         $data = DB::table('ecs_goodType')->where(['id'=>$id])->get();
         return view('backend.shop.shopTypeUpdate',['data'=>$data]);
     }

     //删除商品类型
     public function shopTypeDel()
     {
         //进行删除操作
         $id = $_GET['id'];
         //   echo $id;
         if(DB::table('ecs_goodType')->where('id',$id)->delete()){
             return redirect('backend/shopType');
         }
         echo "删除失败";
         exit();
     }


     //商品属性
     public function shopAttr()
     {
        //获取商品属性信息
        $data = DB::table('ecs_goodType')->orderBy('id','desc')->get();
        return view('backend.shop.shopAttr',['list'=>$data]);
     }

     //添加商品属性
     public function shopAttrAdd()
     {
        return view('backend.shop.shopAttrAdd');
     }

     //修改商品属性
     public function shopAttrUpdate()
     {
        return view('backend.shop.shopAttrUpdate');
     }

     //删除商品属性
     public function shopAttrDel()
     {
        //进行删除操作
     }
     
 
}