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
        if($_POST){
            $data = $_POST;
            unset($data['_token']);
         
            // dd($data);
            if(!$_FILES['shopImg']['error'] == 4){
               //获取要添加的品牌logo信息
               $file = $_FILES['shopImg'];
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
                  $data['shop_img'] = $filename;
               }
               
            }

            //添加相关信息到 good表
            $data['values'] = '';
               foreach ($data as $key => $value) {
                  
                     //如果该数组中还有数组
                     if(is_array($value)){
                          $k = substr($key,strpos($key,'r')+1);
                          $v = implode('-',$value);
                          $data['values'] .=  $k . ':' . $v .'||';
                          //将该数组清除
                          unset($data[$key]);
                        //   die;
                     }
               }
               //取出商品属性值两边的||
               $data['values'] = trim($data['values'],'||');
               //商品添加的时间
               $data['createDate'] = time();
               //进行添加
               dd($data);
               if($id = DB::table('ecs_good')->insertGetId($data)){
                     //生成商品的货号
                     // print_r( 'ecs'. ($id+10000));
                     // exit();
                     $shopNumbers = 'ecs'. (intval($id)+intval(10000));
                     //将商品的货号存储进去
                     DB::table('ecs_good')->where('shop_id',$id)->update(['shopNumbers'=>$shopNumbers]);
                     exit();
               }
               echo "商品添加失败";
               exit();
        }
        //获取商品品牌的名称与id
        $shopBrand = DB::select("select shopBrand_id,shopBrandName from `ecs_goodBrand`");

        //获取商品分类的名称与id
        $shopClassify = DB::table('ecs_goodClassify')->get();
        $shopClassify = $this->getChild($shopClassify);
        //将子级分类前面加 多个[*]
        $shopClassify = $this->blank($shopClassify);

        //获取商品类型的名称与id
        $shopType = DB::select("select t_id,t_name from `ecs_goodType`");
         return view('backend.shop.shopAdd',['shopBrand'=>$shopBrand,'shopClassify'=>$shopClassify,'shopType'=>$shopType]);
     }

     public function getAttr()
     {
        $type_id = $_GET['type_id'];
      //   echo $type_id;
        //查询goodAttr 表中 该type_id 的属性
        $data = DB::select('select * from `ecs_goodAttr` where a_type_id ='.$type_id);
        return json_encode($data);
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
         $data = DB::table('ecs_goodType')->get();
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
            $id = $Info['t_id'];
            unset($Info['_token']);
            unset($Info['id']);
            //进行修改
            $res = DB::table('ecs_goodType')->where('t_id',$id)->update($Info);
            if($res){
               return redirect('backend/shopType');
            }
            echo "修改失败";
            exit();
        }
         $id = $_GET['id'] ?? 1;
         // echo "$id";
         //获取该品牌的信息
         $data = DB::table('ecs_goodType')->where(['t_id'=>$id])->get();
         return view('backend.shop.shopTypeUpdate',['data'=>$data]);
     }

     //删除商品类型
     public function shopTypeDel()
     {
         //进行删除操作
         $id = $_GET['id'];
         //   echo $id;
         if(DB::table('ecs_goodType')->where('t_id',$id)->delete()){
             return redirect('backend/shopType');
         }
         echo "删除失败";
         exit();
     }


     //商品属性
     public function shopAttr()
     {
        //获取商品类型的t_id
        $id = $_GET['id'];
        //获取商品属性信息
        $list = DB::select("select * from `ecs_goodType` as t join `ecs_goodAttr` as a on t.t_id = a.a_type_id where a.a_type_id = $id");
      //   echo "<pre>";
      //   var_dump($list);
      //   exit();
        return view('backend.shop.shopAttr',['list'=>$list]);
     }

     //添加商品属性
     public function shopAttrAdd()
     {
        if($_POST){
            $Info = $_POST;
            // dd($Info);
            unset($Info['_token']);
            $t_id = $Info['a_type_id'];
            if(DB::table('ecs_goodAttr')->insert($Info))
            {
               //给shopType 里面的 number + 1
               DB::table('ecs_goodType')->where('t_id',$t_id)->update(['number'=>'number+1']);
               return redirect("backend/shopAttr?id=$t_id");
            }
            echo "添加属性失败";
            exit();
        }
        //获取商品类型信息
        $data = DB::select('select t_name,t_id from `ecs_goodType`');
        return view('backend.shop.shopAttrAdd',['data'=>$data]);
     }

     //修改商品属性
     public function shopAttrUpdate()
     {
        if($_POST){
            $Info = $_POST;
            //获取a_id
            $id = $Info['id'];
            //获取t_id
            $t_id = $Info['a_type_id'];
            unset($Info['_token']);
            unset($Info['id']);
            if(DB::table('ecs_goodAttr')->where('a_id',$id)->update($Info)){
               return redirect("backend/shopAttr?id=$t_id");
            }
            echo "商品属性修改失败";
            exit();
        }
        //获取商品类型信息
        $data = DB::select('select t_name,t_id from `ecs_goodType`');
        $id = $_GET['id']; 
        $list = DB::select('select * from `ecs_goodAttr` where a_id ='.$id);
        return view('backend.shop.shopAttrUpdate',['data'=>$data,'list'=>$list]);
     }

     //删除商品属性
     public function shopAttrDel()
     {
        //进行删除操作
        $id = $_GET['id'];
        $t_id = $_GET['t_id'];
        //   echo $id;
        if(DB::table('ecs_goodAttr')->where('a_id',$id)->delete()){
            return redirect("backend/shopType?id=$t_id");
        }
        echo "删除失败";
        exit();

     }
     
 
}