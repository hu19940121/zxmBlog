<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Login extends Common
{

    //登录
    public function index(){
        if (request()->ispost()) {
             $uname=$_POST['uname'];
             $upassword=md5($_POST['upass']);
             if ($uname==''|| $upass='') {
                 return $this->error('用户名或密码不能为空');
             }else{
                $seluser=Db::name('register')->where('uname',$uname)->select();
                if ($seluser) {
                    $selpass=Db::name('register')->where('uname',$uname)->value('upass');
                    // var_dump($upassword);die;
                    if ($selpass==$upassword) {
                        Session::set('username',$uname);
                        //登陆成功后更新最后一次登陆时间
                        $data=[
                            'lastdl'=>time()
                        ];
                        Db::name('register')->where('uname',$uname)->update($data);
                         return $this->success('登录成功','Index/index');
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
    //登出
    public function lgout(){
       Session::clear();
       return $this->success('退出登录成功','Index/index');

    }
    //注册
    public function reg(){
        $data=[
            'uname'=>$_POST['zuname'],
            'upass'=>md5($_POST['zupass']),
            'lastdl'=>time(),
            'time'=>time(),
        ];
        if ($data['uname']==''||$data['upass']=='') {
             return $this->error('用户名或密码不能为空');
        }
        $selname=Db::name('register')->where('uname',$data['uname'])->find();
        if ($selname) {
             return $this->error('用户名已存在 。。请重新输入');
        }else{
            $insert=Db::name('register')->insert($data);
            if ($insert) {
               return $this->success('注册成功！！','login/index');
            }else{
               return $this->success('注册失败。。');
            }
        }

    }
}
