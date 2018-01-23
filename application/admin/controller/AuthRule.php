<?php
namespace app\admin\controller;
use app\admin\model\AuthRule as AuthRuleModel;
use think\Validate;

class AuthRule extends Common{

    protected $beforeActionList = [

        'delAll' => ['only'=>'delete'],

    ];
    public function lst(){
        $rules = listTree(AuthRuleModel::all(),0,0);
        $this->assign('rules',$rules);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data = input("post.");
            if(AuthRuleModel::create($data,true)){
                return returnMessage(1,'成功',request()->token());
            }else{
                return returnMessage(0,'失败',request()->token());
            }

        }
        $rules = listTree(AuthRuleModel::all(),0,0);
        $this->assign('rules',$rules);
        return $this->fetch();
    }

    public function edit(){
        $id = input('id');
        if(!($authRule = AuthRuleModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if(request()->isPost()){
            $data = input('post.');
            $code = 0;
            $validate = new Validate([
                'name|权限规则' => 'require|unique:auth_rule|checkTitle:1',
                'title|权限名称' => 'unique:auth_rule|token|'
            ]);
            $validate->extend('checkTitle',function ($value,$rule,$data){
                if($data['pid'] == 0){
                    if(isset($value)){
                        return '顶级权限规则应该为空';
                    }
                }
                return true;
            });

            if(!$validate->check($data)){
                $message = $validate->getError();
                goto re ;
            }
            if(AuthRuleModel::update($data,1,true)){
                $code = 1;
                $message = '修改成功';
            }else{
                $message = '修改失败，请检查数据库';
            }

            re:
            return returnMessage($code,$message,request()->token());
        }
        $this->assign('authRule',$authRule);
        $rules = listTree(AuthRuleModel::all(),0,0);
        $this->assign('rules',$rules);
        return $this->fetch();
    }

    public function  delete(){
        $id = input('id');
        if(!($authRule = AuthRuleModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if($authRule->delete()){
            return $this->success('删除成功','lst');
        }else{
            return $this->error('删除失败','lst');
        }
    }

    public function  delAll(){
        $id = input('id');
        $data = childToParent(AuthRuleModel::all(),$id);
        if(AuthRuleModel::destroy($data) === false){
            return $this->error('删除失败,请检查数据库');
        }
    }


}