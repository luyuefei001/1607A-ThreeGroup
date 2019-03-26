<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ss3_zk_one extends Model
{
    //指定数据表
    protected $table = 'ss3_zk_one';
    //指定主键 id
    protected $primaryKey = 'id';
    //关闭多添加的两个字段  最好是开启
    public $timestamps = false;
    //允许批量添加的字段
    protected $fillable = ['title','type','content'];
    //如果不关闭 创建两个字段 updated_at  created_at 返回时间戳
    public function getDateFormat()
    {
        return time();
    }
}