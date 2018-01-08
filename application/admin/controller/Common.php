<?php
namespace app\admin\controller;
use app\admin\model\User;
use think\Controller;

class Common extends  Controller{
    public function  _initialize()
    {

        if(!User::isLogin()){

            return $this->error('请先登录','publics/signin');
        }

    }

}
