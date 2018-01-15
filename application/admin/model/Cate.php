<?php
namespace  app\admin\model;
use think\Model;
class  Cate extends  Model{
    protected $table = 'tp_admin_cate';

    public static function cateAll(){
         return self::all();
    }


}