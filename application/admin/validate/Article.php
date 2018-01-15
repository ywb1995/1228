<?php
namespace app\admin\validate;
use think\Validate;

class Article extends Validate{
    protected $rule = [
        "title|标题名" => "require|length:4,25|token",
        "c_id|分类名" => "require",
        'content|文章内容'=> "require",
    ];

    protected  $scene = [
    ];
}