<?php
namespace app\admin\model;
use think\Model;

class AuthGroup extends Model{
    protected $table = "tp_auth_group";

    //自动完成，先自动完成，在修改器
    protected $auto = ['status' => 0];
    //修改器
    public function setStatusAttr($value,$data){
        if(!isset($data['status'])){
            return $value;
        }else{
            return $data['status'];
        }
    }



}