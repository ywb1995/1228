<?php
namespace app\admin\controller;
use think\Db;
use app\admin\model\Cate as CateModel;
class  Cate extends  Common{
    //设置delete方法的前置钩子函数为deletechild方法
    protected $beforeActionList = [
        'deleteChild' => ['only'=>'delete'],
    ];

    public  function  lst(){
        $data = listTree(CateModel::cateAll(),0,0);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function  add(){
        if(request()->isPost()){
            $data = request()->post();
            $code = 0;
            $info = $this->validate($data,'Cate.add');
            if($info !== true ){
                $message = $info;
            }else{
                $cate = new CateModel;
                if($cate->allowField(true)->save($data) !== false){
                    $message = '添加成功';
                    $code = 1;
                }else{
                    $message = '添加失败,检查数据库';
                }
            }
            return returnMessage($code,$message,request()->token());
        }
        $cates = listTree(CateModel::cateAll(),0,0);
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function edit(){
        $id = input('id');
        if(!($cate =  CateModel::get($id))){
            return $this->error('数据不存在');
        }
        if(request()->isPost()){
            $data = request()->post();
            $code = 0;
            $info = $this->validate($data,"cate.eidt");
            if($info !== true){
                $message = $info;
            }else if($id == input("pid")){
                $message = '父级分类不能是自身';
            }else{
                $catemodel = new CateModel();
                if($catemodel->allowField(true)->save($data,$id) !== false){
                    $message = '修改成功';
                    $code = 1;
                }else{
                    $message = '修改失败,检查数据库';
                }
            }
            return returnMessage($code,$message,request()->token());
        }

        $cates = CateModel::cateAll();
        $this->assign('cates',$cates);
        $this->assign('cate',$cate);
        return $this->fetch();
    }

    public function delete(){
        $id = input('id');
        if(!isset($id)){
            return $this->error('页面不存在');
        }
        \app\admin\model\Article::destroy(['c_id'=>$id]);
        if(CateModel::destroy($id) !== false){
            return $this->success('删除成功','lst');
        }else{
            return $this->error('删除失败,勤检查数据库');
        }
    }
    public function deleteChild(){
        $id = input('id');
        $arrId = childToParent(CateModel::cateAll(),$id);
        //删除分类下的文章
        foreach ($arrId as $item) {
            \app\admin\model\Article::destroy(['c_id'=>$item]);
        }
        if(CateModel::destroy($arrId) === false){
            return $this->error('删除失败,勤检查数据库');
        }
    }
}