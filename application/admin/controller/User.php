<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/30
 * Time: 11:31
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User as UserModel;

class User extends  Controller{
    public function lst(){
        $User = new UserModel();
        $userList = $User->userAll();
        $this->assign('users',$userList);
        return $this->fetch('lst');
    }

    public  function  add(){
        $request = $this->request;
        if($request->isPost()){
            $data = $request->post();
            $code =0;
            //数据验证
            $info = $this->validate($data, 'User.update');
            if($info !== true){
                $message = $info;
            }else{
                if($data['password'][0] == $data['password'][1]){
                    $User = new UserModel();
                    if($add = $User->addUser($data['username'],$data['password'][0] )){
                        $code = 1;
                        $message = '新增成功';
                    }else{
                        $message = $User->getError();
                    }
                }else{
                    $message = '两次密码填写不一致，请确认';
                }
            }
            $token = $request->token();
            return returnMessage($code,$message,$token);
        }
        return $this->fetch();
    }

    public function edit(){
        $request = $this->request;
        $id = input('id');
        if($request->isPost()) {
            $data = $request->post();
            $code = 0;
            if ($data['password'][0] && $data['password'][1])
            {

                if ($data['password'][0] == $data['password'][1]) {
                    $data = [
                        'username' => trim($data['username']),
                        'password' => trim($data['password'])
                    ];
                    $info = $this->validate($data, 'User.edit');
                    if ($info !== true) {
                        $res['message'] = $info;
                    } else {

                    }
                } else {
                    $res['message'] = '两次输入密码不一致请检查';
                }
            }
        }

        if(empty($id)){
            return $this->error('页面不存在');
        }
        $user = UserModel::get($id);
        if(!$user) $this->error('用户不存在');
        $this->assign('user',$user);
        return $this->fetch();

    }
}