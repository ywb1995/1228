<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/30
 * Time: 11:31
 */
namespace app\admin\controller;
use app\admin\model\AuthGroup;
use app\admin\model\User as UserModel;


class User extends  Common {

    public function  index(){
        return $this->fetch();
    }
    public function lst(){
        $User = new UserModel();
        $userList = $User->userAll();
        $this->assign('users',$userList);
        return $this->fetch('lst');
    }

    public function  add(){
        $request = $this->request;
        if($request->isPost()){
            $data = $request->post();
            $code =0;
            //数据验证
            $data1 = $data;
            $data1['password'] =  $data1['password'][0];
            $info = $this->validate($data1,    'User.update');
            if($info !== true){
                $message = $info;
            }else{
                if($data['password'][0] == $data['password'][1]){
                    $User = new UserModel();
                    if($add = $User->addUser($data['username'],$data['password'][0],$data['group_id'] )){
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
        $authGroups = AuthGroup::all(['status'=>1]);
        $this->assign('authGroups',$authGroups);
        return $this->fetch();
    }

    public function edit(){
        $request = $this->request;
        $id = input('id');
        if($request->isPost()) {
            $data = $request->post();
            $code = 0;
            //如果密码填写
            if (!empty($data['password']) && !empty($data['password2']))
            {
                if ($data['password'] == $data['password2']) {
                    $info = $this->validate($data, 'User.edit');
                    if ($info !== true){
                        $message = $info;
                    } else {
                        $user = new UserModel();
                        if($user->editUser($data)){
                            $code = 1;
                            $message = '修改成功';
                        }
                    }
                } else {
                    $message = '两次输入密码不一致请检查';
                }
            }else{
               //如果密码没有填写
                $info = $this->validate($data, 'User.edit');
                if ($info !== true) {
                    $message = $info;
                } else {
                    $user = new UserModel();
                    if($user->editUser($data)){
                        $code = 1;
                        $message = '修改成功';
                    }
                }
            }
            return returnMessage($code, $message,$request->token());
        }

        if(!isset($id)){ //这里不用empty，因为empty当变量为0时，也返回true
            return $this->error('页面不存在');
        }
        $user = UserModel::get($id);
        if(!$user) $this->error('用户不存在');
        $authGroups = AuthGroup::all(['status'=>1]);
        $this->assign('user',$user);
        $this->assign('kkk',$user->AuthGroup);
        $this->assign('authGroups',$authGroups);
        return $this->fetch();

    }

    public function  delete(){
        $id = input('id');
        if(!isset($id)){
            return $this->error('页面不存在');
        }
        if(UserModel::destroy($id)){
            return $this->success('删除成功','lst');
        }else{
            return $this->error('删除失败');
        }
    }
}