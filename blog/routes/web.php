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
    return view('welcome');
});

//后台路由
             //命名空间               前缀
Route::group(['namespace'=>'Backend','prefix'=>'backend'],function(){
    Route::resource('/','IndexController');
    Route::resource('user','UserController');
});
//前台路由
Route::group(['namespace'=>'Frontend','prefix'=>'frontend'],function(){
    Route::resource('/','IndexController');
});
// Route::resource('index','IndexController');
