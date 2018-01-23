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
		die;
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
//根据子级id找出所有父级id
if(!function_exists('getParent')){
    function getParent($data,$id){
        $arr = [];
        foreach ($data as $v){
            if($v['id'] == $id){
                $arr[] = $v['id'];
                $arr = array_merge($arr, getParent($data,$v['pid']));
            }
        }
        return $arr;
    }
}
//无限极分类，生成一维数组的方式，
if(!function_exists("listTree")){
    function listTree($data,$pid,$level, $isGetParent=false){
        $arr = [];
        foreach($data as $key=>$value){
            if($value['pid'] == $pid){
                if($isGetParent){
                     $dataid = getParent($data,$value['id']);
                     asort($dataid);
                    $value['dataid'] =implode('-',$dataid);
                }
                $value['level'] = $level;
                $arr[] = $value;
                $arr = array_merge($arr,listTree($data,$value['id'],$level+1,$isGetParent));
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

////如果目录下文件为空删除文件夹
if(!function_exists('isEmptyDir')){
    function isEmptyDir($path){
        $info = true;
        if(is_dir($path)){
            $hanle = opendir($path);
            while ($item = readdir($hanle)){
                if($item != '.' && $item != '..'){
                    if(!is_dir($path.DS.$item)){
                        $info = false;
                    }else{
                        $info = isEmptyDir($path.DS.$item);
                    }
                }
            }
            closedir($hanle);
            return $info;
        }

    }
}