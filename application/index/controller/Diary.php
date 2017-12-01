<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Diary extends Common
{

    //个人日记
    public function grdiary(){

        $res=Db::name('diary')->order('id desc')->paginate(5);
        $this->assign('list',$res);
        return $this->fetch();

    }

    public function artdetail(){
        //日记详情
        $id=$_GET['id'];
        $sel=Db::name('diary')->where('id',$id)->find();
        $this->assign('list',$sel);
        //上一篇
        $prev=Db::name('diary')->where('id','<',$id)->order('id desc')->find();
        $this->assign('prev',$prev);
        // 下一篇
        $next=Db::name('diary')->where('id','>',$id)->find();
        $this->assign('next',$next);

        return $this->fetch();
    }
    //学习笔记
    public function notes(){
        $res=Db::name('notes')->order('id desc')->paginate(4);
        $this->assign('list',$res);
        return $this->fetch();

    }
      public function nodetail(){
        //笔记详情
        $id=$_GET['id'];
        $sel=Db::name('notes')->where('id',$id)->find();
        $this->assign('list',$sel);
        //上一篇
        $prev=Db::name('notes')->where('id','<',$id)->order('id desc')->find();
        $this->assign('prev',$prev);
        // 下一篇
        $next=Db::name('notes')->where('id','>',$id)->find();
        $this->assign('next',$next);

        return $this->fetch();
    }
}
