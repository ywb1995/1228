<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

if(!function_exists('dd')){
	function dd($value)
	{
		echo "<pre>";
		var_dump($value);
		echo "</pre>";
	}
}

if(!function_exists("returnMessage")){
    function returnMessage($code, $message,$token = ''){
        $res['code'] = $code;
        $res['message'] = $message;
        if(!empty($token)){
            $res['token'] = $token;
        }
        return json_encode($res);
    }
}
//无限极分类，生成一维数组的方式，
if(!function_exists("listTree")){
    function listTree($data,$pid,$level ){
        $arr = [];
        foreach($data as $key=>$value){
            if($value['pid'] == $pid){
                $value['level'] = $level;
                $arr[] = $value;
                $arr = array_merge($arr,listTree($data,$value['id'],$level+1));
            }
        }
        return $arr;
    }
}

//根据父级id查找所有子集id
if(!function_exists("childToParent")){
    function childToParent($data, $id){
        if(!is_array($data)){
            $data = (array)($data);
        }
        $arr = [];
        foreach($data as $key=>$value){
            if($value['pid'] == $id){
                $arr[] = $value['id'];
                $arr = array_merge($arr,childToParent($data,$value['id']));
            }
        }
        return $arr;
    }
}