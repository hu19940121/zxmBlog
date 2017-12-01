<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
header("Content-type: text/html; charset=utf-8");
//搜索
class Search extends Common
{
    public function index()
    {
        $keywords=$_POST['keywords'];
        if ($keywords=='') {
             return $this->error('请输入关键字');
        }
         $res=Db::view('article','*')
        ->view('arclass','classname','arclass.id=article.type')
        ->order('id desc')
        ->where('title','like','%'.$keywords.'%')
        ->paginate(5);
        $this->assign('list',$res);
        return $this->fetch();
    }

}
