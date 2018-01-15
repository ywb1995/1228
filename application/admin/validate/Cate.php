<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate{
    protected $rule = [
        "catename|分类名" => "require|unique:admin_cate|length:4,25|token",
        "type|分类类型" => "require|in:0,1",
    ];

//    protected  $message = [
//        'catename.require'=> '分类名'
//    ];
    protected  $scene = [
        "add" => ['catename','type']
    ];
}