<?php
namespace app\admin\controller;
use app\admin\model\AuthGroup as AuthGroupModel;
use app\admin\model\AuthRule;
use think\Request;
use think\Validate;

class AuthGroup extends Common{

    public function lst(){
        $groups = AuthGroupModel::paginate();
        $this->assign('groups',$groups);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data = input("post.");
            $data['rules'] = implode(',',$data['rules']);
            if(AuthGroupModel::create($data,true)){
                return returnMessage(1,'成功',request()->token());
            }else{
                return returnMessage(0,'失败',request()->token());
            }

        }
        $rules = listTree(AuthRule::select(),0,0,true);

        $this->assign('rules',$rules);
        return $this->fetch();
    }

    public function edit(){
        $id = input('id');
        if(!($authGroup = AuthGroupModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if(request()->isPost()){
            $data = input('post.');
            $code = 0;
            if($authGroup->title == $data['title']){
                unset($data['title']);
            }
            $validate = new Validate([
                'title|用户组名称' => 'unique:auth_group|token'
            ]);

            if(!$validate->check($data)){
                $message = $validate->getError();
                goto re ;
            }
            $data['rules'] = implode(',',$data['rules']);
            if(AuthGroupModel::update($data,1,true)){
                $code = 1;
                $message = '修改成功';
            }else{
                $message = '修改失败，请检查数据库';
            }

            re:
            return returnMessage($code,$message,request()->token());
        }
        $rules = listTree(AuthRule::select(),0,0,true);
        $authGroup['rules'] = explode(',',$authGroup['rules']);
        $this->assign('rules',$rules);
        $this->assign('authGroup',$authGroup);
        return $this->fetch();
    }

    public function  delete(){
        $id = input('id');
        if(!($authGroup = AuthGroupModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if($authGroup->delete()){
            return $this->success('删除成功','lst');
        }else{
            return $this->error('删除失败','lst');
        }
    }

    public  function  setStatus(){
        $data = input('post.');
        if(AuthGroupModel::update($data,['id'=>$data['id']])){
            return returnMessage(1,'成功');
        }else{
            return returnMessage(0,'更新失败，检查数据库');
        }
    }
    public function getParent(){
        $id = input('id');
        $arr = getParent(AuthRule::all(),$id);
        dd($arr);
    }
    public function te(){
        $a = new AuthGroupModel();
        $a->status  = 3;
        $a->title = '1哈哈';
        $a->save();
    }
}