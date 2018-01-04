<?php
namespace app\admin\model;
use think\Model;
//use think\helper\Hash;
/**
* 
*/
class User extends Model
{
	protected $table = 'tp_admin_user';

	//密码的修改器，密码自动加密
	public function setPasswordAttr($value){
		return md5((string)$value);
	}

	public  function login($username, $password){
		
		// $this->where('username=:username',['username'=>$username])->find();
		$username = trim($username);
		$password = trim($password);
		$user = self::get(['username' => $username]);

		$password = md5($password);
		if($password == $user['password']){
			return true;
		}else{
		    $this->error = '密码错误';
		    return false;
        }
	}

	public function addUser($username, $password)
	{

		$this->username = trim($username);
		$this->password = trim($password);
		if($this->save()){
		    return true;
        }else{
		    $this->error = '新增失败';
		    return false;
        }
	}

	public function editUser($data){
	    //update方法用allowfiled无效
        if($this->isUpdate(true)->allowField(true)->save($data)){
            return true;
        }else{
            $this->error = "新增失败,数据库错误";
            return false;
        }
    }

	public  function  userAll(){
	    return $this->where(1)->select();
    }
}