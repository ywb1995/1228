<?php
namespace app\admin\model;
use think\Model;

class Article extends Model{
    protected $table = 'tp_admin_article';

    //模型事件
    protected static function init()
    {
        Article::event('before_insert', function ($data) {
            //接收文件
            $file = request()->file('image');
            if($file){
                $info = $file->validate(['size'=>1024*1024*1024*50,'ext'=>'jpg,png,gif'])->rule('')->move(ROOT_PATH . 'public'.DS."upload".DS.date("YmdHi"));
                if(!$info){
                    $data->error = $file->getError();
                    //return false 可以中断插入操作的执行
                    return false;
                }
                $data['image'] = DS."upload".DS.date("YmdHi").DS.$info->getSaveName();
            }
        });
    }

}