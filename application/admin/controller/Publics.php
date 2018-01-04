<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;
use think\Db;
/**
* 
*/
class Publics extends Controller
{
	
	public function signin(){
		$request = $this->request;
		if($request->isPost()){

			$data = $request->post();

			//数据验证
			$info = $this->validate($data, 'User.signin');
			if($info !== true){
				$res = [
					'code' => 0,
					'message' => $info,
					'token' => $request->token()
				];
				return json_encode($res);
			}

			$username = $data['username'];
			$password = $data['password'];

			//验证用户名和密码
            $User = new User();
			$isLogin = $User->login($username, $password);
            if($isLogin !== true){
                $res = [
                    'code' => 0,
                    'message' => $User->getError(),
                    'token' => $request->token(),
                ];
            }else{
                $res = [
                    'code' =>1,
                    'message' => '登录成功，即将跳转',
                    'token' => $request->token(),
                ];
            }
			return json_encode($res);
		}
		


		return $this->fetch();
	}

	public function a()
	{	
		$User = new User;
		$a = Db::name('admin_user')->where('id=:id',["id" => 'a'])->select();
		dd($a);
	}

	public  function add($value='', $password)
	{
		$User = new User();
		$User->addUser($value, $password);

	}

	public function  index(){
	    return $this->fetch();
    }
    public function lst(){

    }
}