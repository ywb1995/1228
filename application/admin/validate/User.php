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
		"username|用户名" => "require|alphaNum|unique:admin_user|token", //alphaNum验证是否为数字和字母  token是表单令牌验证
		"password|密码"   => "require",
	];

	//验证警告
	protected $message = [
		'username.require' => '用户名不能为空',
		'password.require' => '密码不能为空'
	];
}