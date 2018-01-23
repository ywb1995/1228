<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class User extends Validate
{
	
	//验证规则
	protected $rule = [
		"username|用户名" => "require|alphaNum|token|unique:admin_user|length:4,25", //alphaNum验证是否为数字和字母  token是表单令牌验证
		"password|密码"   => "require|length:6,10",
        'captcha|验证码'=>'require|captcha'
	];

	//验证警告
	protected $message = [
		'username.require' => '用户名不能为空',
		'password.require' => '密码不能为空',
        'username.length' => '用户名长度在4-25',
        'password.length' => '密码长度为6',

	];

	//验证场景
    protected  $scene = [
        'signin' => ["username" => "require|alphaNum|token","password",'captcha'],
        'edit' => ["username"=>"require|alphaNum|token|length:4,25","password"=>'length:6'],
        'update' => ["username","password"]
    ];
}