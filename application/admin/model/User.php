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

		if(!$user){
            $this->error = "用户名或密码错误";
		    return false;
        }

		$password = md5($password);
		if($password == $user['password']){
		    //更新登录信息
            $user->last_login_time = time();
            $user->last_login_ip = request()->ip();
            if($user->save()){

                $this->autoLogin($user);
                return true;
            }else{
                $this->error = "更新登录信息失败";
                return false;
            }

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
	    return $this->field(['username','id'])->paginate(1);
    }

    public function autoLogin($user){
        //保存session
        $autoLogin = [
            'name'=>$user->username,
            'id' => $user->id
        ];

        session('autologin',$autoLogin);
        session('autologin_sign',$this->dataAuthSign($autoLogin));
    }
    public static function isLogin(){
        $autoLogin = session('autologin');
        if($autoLogin){
            if(session("autologin_sign") == self::dataAuthSign($autoLogin)){
                return true;
            }
        }
        return false;
    }
    /*

数据加密方法
 $data  被加密的数组
 */
    public static function  dataAuthSign($data){
        if(!is_array($data)){
            $data = (array)($data);
        }
        ksort($data);
        $data = http_build_query($data);
        //生成签名
        $sign = sha1($data);
        return $sign;

    }
}