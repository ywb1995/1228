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