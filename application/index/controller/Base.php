<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;


//判断是否登录的session 基类
Class Base extends Controller
{
    public function _initialize(){
      if(Session::has('username')){
        $this->assign('username',Session::get('username'));
      }
    }
}
