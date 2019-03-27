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
        return view('backend.shop.shopClassify');
     }

     //添加商品分类
     public function shopClassifyAdd()
     {
        return view('backend.shop.shopClassifyAdd');
     }

     //修改商品分类
     public function shopClassifyUpdate()
     {
        //获取当前分类信息

        return view('backend.shop.shopClassifyUpdate');
     }

     //删除商品分类
     public function shopClassifyDel()
     {
        //进行删除操作
     }


     //商品品牌
     public function shopBrand()
     {
        return view('backend.shop.shopBrand');
     }

     //添加商品品牌
     public function shopBrandAdd()
     {
        return view('backend.shop.shopBrandAdd');
     }

     //修改商品品牌
     public function shopBrandUpdate()
     {
        return view('backend.shop.shopBrandUpdate');
     }

     //删除商品品牌
     public function shopBrandDel()
     {
        //进行删除操作
     }


     //商品类型
     public function shopType()
     {
        return view('backend.shop.shopType');
     }

     //添加商品类型
     public function shopTypeAdd()
     {
        return view('backend.shop.shopTypeAdd');
     }

     //修改商品类型
     public function shopTypeUpdate()
     {
        return view('backend.shop.shopTypeUpdate');
     }

     //删除商品类型
     public function shopTypeDel()
     {
        //进行删除操作
     }


     //商品属性
     public function shopAttr()
     {
        return view('backend.shop.shopAttr');
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