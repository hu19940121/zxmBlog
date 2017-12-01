<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Aboutme extends Common
{

    //个人简介
    public function gr(){

        $res=Db::name('aboutme')->where('isshow',1)->find();
        $this->assign('list',$res);
        return $this->fetch();

    }
    public function album(){
        $res= Db::name('album')->paginate(8);
        // $res=Db::name('album')->select();
        $this->assign('list',$res);
        return $this->fetch();

    }
}
