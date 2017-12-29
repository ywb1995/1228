<?php
namespace app\admin\model;
use think\Model;
use think\helper\Hash;
/**
* 
*/
class User extends Model
{
	protected $table = 'tp_admin_user';

	//密码的修改器，密码自动加密
	public function setPasswordAttr($value){
		return Hash::make((string)$value);
	}

	public static function login($username, $password){
		
		// $this->where('username=:username',['username'=>$username])->find();
		$username = trim($username);
		$password = trim($password);
		$user = $this->get(['username' => $username]);

		$password = Hash::make($password);
		if($password == $user['password']){
			return true;
		}
	}

	public function addUser($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
		$this->save();
	}
}