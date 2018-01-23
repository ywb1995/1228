<?php
namespace app\admin\controller;
use app\admin\model\Cate;
use think\captcha\Captcha;
use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends Common{
    public function lst(){
        $articles = Db::table("tp_admin_article a")
                    ->join("tp_admin_cate c",'a.c_id=c.id')
                    ->where("a.status=0")
                    ->field(['a.id','a.title','a.content','c.catename','a.keywords','a.author','a.image'])
                    ->paginate(1);
        $this->assign("articles",$articles);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data = input("post.");
            $code = 0;
            $info = $this->validate($data,'article');
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

    public function edit(){
        $id = input('id');
        if(!($article = ArticleModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if(request()->isPost()){
            $code = 0;
            $data = input('post.');
            $info = $this->validate($data,"article");
            if($info !== true){
                $message = $info;
                goto re;
            }
            if($article->allowField(true)->save($data,$id) !== false){
                $code = 1;
                $message = '修改成功';
            }else{
                $message = '修改失败'.$article->getError();
            }
            re:
            return returnMessage($code,$message,request()->token());
        }

        $cates = listTree(Cate::cateAll(),0,0);
        $this->assign('cates',$cates);
        $this->assign('article',$article);
        return $this->fetch();
    }

    public function delete(){
        $id = input('id');
        if(!($article = ArticleModel::get($id))){
            return $this->error('数据不存在','lst');
        }
        if($article->delete()){
            return $this->success('删除成功','lst');
        }else{
            return $this->error('删除失败','lst');
        }
    }

    public function te(){
        $captcha = new Captcha();
        return $captcha->entry();
        dd(isEmptyDir("D:/phpStudy/WWW/1228/public/upload/20180117"));
        rmdir("D:/phpStudy/WWW/1228/public/upload/201801162317/20180116");die;
        dd(glob(APP_PATH.'*', GLOB_ONLYDIR));die;
        dd(file_exists("D:/phpStudy/WWW/1228/public/upload/201801162304/20180116"));die;
        echo dirname("D:/phpStudy/WWW/1228/upload/201801161928/20180116/51fa452842356a03285766d67d2f9679.jpg");die;
        unlink(ROOT_PATH.'public'."/upload/201801162156/20180116/3d956c87f879cff624e5997dd6acc5c8.jpg");die;
        echo APP_PATH;echo '<br>';
        echo dirname($_SERVER['SCRIPT_FILENAME']) . DS;
        die;
        $a = new ArticleModel;
        $a->isUpdate(true)->save([
            'id'=>14,
            'title'=>'测试标题'
        ]);
        //如果不加isUpdate()方法，save方法的第二个参数需要指定更新的id
    }
}