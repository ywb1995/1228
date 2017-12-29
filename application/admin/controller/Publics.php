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
			$info = $this->validate($data, 'User');
			if($info !== true){
				$res = [
					'code' => 0,
					'error' => $info,
					'token' => $request->token()
				];
				return json_encode($res);
			}

			$username = $data['username'];
			$password = $data['password'];
			// $User = new User();
			$a = (new User)->where('username=:username',['username'=>$username])->select();
			return json_encode($a);
			//验证用户名和密码
			$isLogin = User::login($username, $password);

			return;
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
}