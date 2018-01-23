<?php
namespace app\admin\controller;
use app\admin\model\User;
use think\Controller;
use think\Auth;

class Common extends  Controller{
    public function  _initialize()
    {
        if(!User::isLogin()){

            return $this->error('请先登录','publics/signin');
        }

        $action = $this->request->action();
        $controller = $this->request->controller();
        $auth = new Auth;
        $name = ($controller.'/'.$action);

        $notCheck = ['user/index','publics/signin','publics/outLogin'];
        if(!in_array($name,$notCheck)){
            if(!$auth->check($name,session('autologin')['id'])){
                return $this->error('没有权限');
            }
        }



    }

}
