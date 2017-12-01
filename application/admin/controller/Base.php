<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;


//判断是否登录的session 基类
Class Base extends Controller
{
    public function _initialize(){
      if(Session::has('nicheng')){
        $this->assign('name',Session::get('nicheng'));
      }else{
        return $this->error('请登录后再进行操作','Index/index');
      }
      return $this->fetch();
    }
}
