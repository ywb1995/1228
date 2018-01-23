<?php
namespace app\admin\model;
use think\Model;

class Article extends Model{
    protected $table = 'tp_admin_article';

    //模型事件
    protected static function init()
    {
        Article::event('before_insert', function ($data){
            //接收文件
            $file = request()->file('image');
            if($file) {
                $info = $file->validate(['size' => 1024 * 1024 * 1024 * 50, 'ext' => 'jpg,png,gif'])->rule('')->move(ROOT_PATH . 'public' . DS . "upload" );
                if (!$info) {
                    $data->error = $file->getError();
                    //return false 可以中断插入操作的执行
                    return false;
                }
                $data['image'] = DS . "upload" . DS . $info->getSaveName();
            }
        });

        Article::event('before_update',function ($data){
            $imagePath = $data['image'];
            //接收文件
            $file = request()->file('image');
            if($file) {
                $info = $file->validate(['size' => 1024 * 1024 * 1024 * 50, 'ext' => 'jpg,png,gif'])->rule('')->move(ROOT_PATH . 'public' . DS . "upload" );
                if (!$info) {
                    $data->error = $file->getError();
                    //return false 可以中断插入操作的执行
                    return false;
                }
                $data['image'] = DS . "upload"  . DS . $info->getSaveName();
            }
            //删除原来的文件
            if(file_exists(ROOT_PATH.'public'.$imagePath)){
                @unlink(ROOT_PATH.'public'.$imagePath);
                //如果目录下文件为空删除文件夹
                if(isEmptyDir(dirname(ROOT_PATH.'public'.$imagePath))){
                    rmdir(dirname(ROOT_PATH.'public'.$imagePath));
                }
            }
        });
        Article::event("after_delete",function ($data){
            $imagePath = $data['image'];
            //删除原来的文件
            if(file_exists(ROOT_PATH.'public'.$imagePath)){
                @unlink(ROOT_PATH.'public'.$imagePath);
                //如果目录下文件为空删除文件夹
                if(isEmptyDir(dirname(ROOT_PATH.'public'.$imagePath))){
                    rmdir(dirname(ROOT_PATH.'public'.$imagePath));
                }
            }
        });
    }

}