<?php
namespace app\admin\controller;
use app\admin\model\Cate;
use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends Common{
    public function lst(){
        $articles = Db::table("tp_admin_article a")->join("tp_admin_cate c",'a.c_id=c.id')->where("a.status=0")->paginate(2);
        $this->assign("articles",$articles);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data = input("post.");
            $code = 0;
            $info = $this->validate($data,'Article');
            if($info !== true){
                $message = $info;
                goto re;
            }
            $article = new ArticleModel();
            if($article->allowField(true)->save($data)){
                $code = 1;
                $message = '保存成功';
            }else{
                $message = '保存失败'.$article->getError();
            }
            re:
            return returnMessage($code,$message,request()->token());

        }
        $cates = listTree(Cate::cateAll(),0,0);
        $this->assign('cates',$cates);
        return $this->fetch();
    }

}