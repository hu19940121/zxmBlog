<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller
{



//登录
    public function index()
    {
        if (request()->ispost()) {
            $data=[
            'name'=>input('name'),
            'password'=>input('password')
            ];
            if ($data['name']=='' || $data['password']=='') {
                return $this->error('用户名或密码不能为空');
            }else{
                $seluser=Db::name('admin')->where('name',$data['name'])->select();
                if ($seluser) {
                    $selpass=Db::name('admin')->where('name',$data['name'])->value('password');
                    if ($selpass==$data['password']) {
                        Session::set('nicheng',$data['name']);
                         return $this->success('登录成功','Index/home');
                    }else{
                        return $this->error('密码错误');
                    }
                }else{
                    return $this->error('用户名不存在');
                }
            }
        }else{
             return $this->fetch();
        }


    }


    // 后台主页
    public function home(){

        if(Session::has('nicheng')){
            $this->assign('name',Session::get('nicheng'));
        }else{
            return $this->error('请先登录','Index/index');
        }
        return $this->fetch();

    }
    //注销登录
    public function lgout(){
       Session::clear();
       return $this->success('退出登录成功','Index/index');

    }
}
