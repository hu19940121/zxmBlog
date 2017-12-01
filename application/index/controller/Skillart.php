<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Skillart extends Common
{
    public function index()
    {
        //文章列表
       $res=Db::view('article','*')
        ->view('arclass','classname','arclass.id=article.type')
        ->order('id desc')
        // ->where('classname','技术文章')
        ->paginate(5);
        // $res=Db::name('article')->select();
        $this->assign('list',$res);
        //点击排行  （按阅读量）
        $rank=Db::name('article')->order(['read'=>'desc'])->select();
        $this->assign('rank',$rank);

        return $this->fetch();
    }

    public function artdetail(){
        //文章详情
        $id=$_GET['id'];
        $sel=Db::name('article')->where('id',$id)->find();
        if ($sel) {   //查到后浏览量加1
           $read=Db::name('article')->where('id',$id)->value('read');
           $read=$read+1;
           Db::name('article')->where('id',$id)->update(['read'=> $read]);
        }
        $this->assign('list',$sel);
        //上一篇
        $prev=Db::name('article')->where('id','<',$id)->order('id desc')->find();
        $this->assign('prev',$prev);
        // 下一篇
        $next=Db::name('article')->where('id','>',$id)->find();
        $this->assign('next',$next);

        return $this->fetch();
    }
}
