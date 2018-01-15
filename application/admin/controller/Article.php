<?php
namespace app\admin\controller;
use app\admin\model\Cate;
class Article extends Common{
    public function lst(){
        return $this->fetch();
    }

    public function add(){
        $cates = listTree(Cate::cateAll(),0,0);
        $this->assign('cates',$cates);
        return $this->fetch();
    }

}