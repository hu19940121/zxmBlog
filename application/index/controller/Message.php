<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Message extends Base
{
    public function index()
    {
        $selmes=Db::view('message','*')
        ->view('register','uname','message.uid=register.id')
        ->order('id desc')
        ->paginate(5);
        $this->assign('list',$selmes);
        return $this->fetch();
    }

    //留言
    public function liuyan()
    {
          if (Session::has('username')) {  //判断是否登录
            $seluid=Db::name('register')->where('uname',Session::get('username'))->value('id');//根据用户名查找uid
            $data=[
                'content'=>$_POST['content'],
                'uid'    =>$seluid,
                'time'=>time(),
            ];
            $insert=Db::name('message')->insert($data);
            if ($insert) {
                return $this->success('留言成功');
            }else{
                 return $this->error('留言失败,请联系管理员');
            }
        }else{
         return $this->error('请登录后留言');
        }

    }
        //删除留言
    public function delmsg()
    {
          if (Session::has('username')) {  //判断是否登录
            $seluid=Db::name('register')->where('uname',Session::get('username'))->value('id');//根据用户名查找uid
            $cuid =$_GET['uid'];
            if ($seluid==$cuid) {
                $msgid =$_GET['id'];
                $del=Db::name('message')->where('id',$msgid)->delete();
                if ($del) {
                    return $this->success('删除留言成功');
                }else{
                    return $this->error('删除留言失败');
                }
            }else{
                return $this->error('只能删除自己的留言');
            }
        }else{
         return $this->error('请登录后操作');
        }

    }
}
