<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "禁止访问";
});

//后台路由
             //命名空间               前缀
Route::group(['namespace'=>'Backend','prefix'=>'backend'],function(){
    //因为一个控制器只能有一个资源路由 所以就展示不使用资源路由啦
    Route::get('/','IndexController@index');
    //模块上部分
    Route::get('top','IndexController@top');
    //模块中间部分
    Route::get('main','IndexController@main');
    //模块菜单部分
    Route::get('menu','IndexController@menu');

    //商品模块----------------------------------------------------------------------------------
    //商品列表
    Route::get('shopList','ShopController@shopList');
    //新商品添加  因为要在该方法中进行添加成功 所以 是any
    Route::any('shopAdd','ShopController@shopAdd');
    //编辑商品 因为要在该方法中进行修改 所以 是any
    Route::any('shopUpdate','ShopController@shopUpdate');
    //删除商品分类
    Route::any('shopDel','ShopController@shopDel');

    //商品分类
    Route::get('shopClassify','ShopController@shopClassify');
    //添加商品分类 因为要在该方法中进行添加成功 所以 是any
    Route::any('shopClassifyAdd','ShopController@shopClassifyAdd');
    //编辑(修改)商品分类 因为要在该方法中进行修改 所以 是any
    Route::any('shopClassifyUpdate','ShopController@shopClassifyUpdate');
    //删除商品分类
    Route::any('shopClassifyDel','ShopController@shopClassifyDel');

    //商品品牌
    Route::get('shopBrand','ShopController@shopBrand');
    //添加商品品牌 因为要在该方法中进行添加成功 所以 是any
    Route::any('shopBrandAdd','ShopController@shopBrandAdd');
    //编辑(修改)商品品牌 因为要在该方法中进行修改 所以 是any
    Route::any('shopBrandUpdate','ShopController@shopBrandUpdate');
    //删除商品品牌
    Route::any('shopBrandDel','ShopController@shopBrandDel');

    //商品类型
    Route::get('shopType','ShopController@shopType');
    //添加商品类型 因为要在该方法中进行添加成功 所以 是any
    Route::any('shopTypeAdd','ShopController@shopTypeAdd');
    //编辑(修改)商品类型 因为要在该方法中进行修改 所以 是any
    Route::any('shopTypeUpdate','ShopController@shopTypeUpdate');
    //删除商品类型
    Route::any('shopTypeDel','ShopController@shopTypeDel');
    
    //商品属性
    Route::get('shopAttr','ShopController@shopAttr');
    //添加商品属性 因为要在该方法中进行添加成功 所以 是any
    Route::any('shopAttrAdd','ShopController@shopAttrAdd');
    //编辑(修改)商品属性 因为要在该方法中进行修改 所以 是any
    Route::any('shopAttrUpdate','ShopController@shopAttrUpdate');
    //删除商品属性
    Route::any('shopAttrDel','ShopController@shopAttrDel');

    Route::get('getAttr','ShopController@getAttr');
    //商品模块----------------------------------------------------------------------------------
    

    //订单管理模块-------------------------------------------------------------------------------

    //订单列表
    Route::get('orderList','OrderController@orderList');
    //订单查询
    Route::get('orderQuery','OrderController@orderQuery');
    //添加订单
    Route::any('orderListAdd','OrderController@orderListAdd');
    //发货单列表
    Route::get('sendList','OrderController@sendList');
    //退货单列表
    Route::get('backList','OrderController@backList');
    //订单管理模块-------------------------------------------------------------------------------


    //用户管理模块-------------------------------------------------------------------------------
    //用户列表
    Route::get('userList','userController@userList');
    //会员列表
    Route::get('vipList','userController@vipList');
    //添加会员
    Route::any('vipListAdd','userController@vipListAdd');
    //删除会员
    Route::any('vipListDel','userController@vipListDel');
    //用户管理模块-------------------------------------------------------------------------------
    

    //权限模块-----------------------------------------------------------------------------------
    //管理员列表
    Route::get('adminList','RbacController@adminList');
    //管理员日志
    Route::get('adminLog','RbacController@adminLog');
    //角色管理
    Route::get('adminRole','RbacController@adminRole');
    //权限模块-----------------------------------------------------------------------------------
    Route::get('checkAccess','CommonController@checkAccess');
});


//前台路由
Route::group(['namespace'=>'Frontend','prefix'=>'frontend'],function(){
    //商城首页
    Route::get('/','IndexController@index');
    //登录页面路由
    Route::any('login','IndexController@login');
     //注册页面路由
     Route::any('register','IndexController@register');
     //判断账号是否存在路由
     Route::get('check','IndexController@check');
     //退出登录路由
     Route::get('sessionOut','IndexController@sessionOut');
});