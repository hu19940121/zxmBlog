<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\index\model\Cate as CateModel;
class Index extends Base
{
    public function index()
    {
        //文章列表
       $res=Db::view('article','*')
        ->view('arclass','classname','arclass.id=article.type')
        ->order('id desc')
        ->paginate(5);
        // $res=Db::name('article')->select();
        $this->assign('list',$res);
        //点击排行  （按阅读量）
        $rank=Db::name('article')->order(['read'=>'desc'])->select();
        $this->assign('rank',$rank);
         //首页轮播图
        $lun=Db::name('album')->where('islun',1)->select();
        $this->assign('lun',$lun);
        //首页视频
        $video=Db::name('videos')->where('isshow','1')->value('vsrc');
        $this->assign('video',$video);
        //首页视频缩略图
        $vimg=Db::name('videos')->where('isshow','1')->value('vimg');
        $this->assign('vimg',$vimg);
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
            //文章的评论
        //
       $selp= Db::view('register','id,uname')
    ->view('comment','*','register.id=comment.uid')
    ->where('comment.artid',$id)
    ->select();
        // $selp=Db::name('comment')->where('artid',$id)->select();
        $this->assign('plist',$selp);

        //评论下的回复
        $cate=new CateModel();
        $selh=Db::view('register','id,uname')
    ->view('reply','*','register.id=reply.uid')
    ->where('reply.artid',$id)
    ->order('reply.id')
    ->select();
        $sorted=$cate->sort($selh);
        $this->assign('hlist',$sorted);
        return $this->fetch();
    }
    //评论
    public function comment(){
        if (Session::has('username')) {  //判断是否登录
            $seluid=Db::name('register')->where('uname',Session::get('username'))->value('id');//根据用户名查找uid
            $data=[
                'content'=>$_POST['comment'],
                'artid'  =>$_POST['artid'],
                'uid'    =>$seluid,
                'time'=>time(),
            ];
            $insert=Db::name('comment')->insert($data);
            if ($insert) {
                return $this->success('评论成功');
            }else{
                 return $this->error('评论失败,请联系管理员');
            }
        }else{
         return $this->error('请登录后评论');
        }

    }
    //评论回复
    public function reply(){
        if (Session::has('username')) {  //判断是否登录
            $seluid=Db::name('register')->where('uname',Session::get('username'))->value('id');//根据用户名查找uid


            $towhoid=$_POST['towhoid'];

            $seluname=Db::name('register')->where('id',$towhoid)->value('uname');

            $data=[
                'rcontent'=>$_POST['rcontent'],
                'pid'  =>$_POST['pid'],
                'uid'    =>$seluid,
                'rid'    =>0,
                'artid'    =>$_POST['artid'],
                'touname'=>$seluname,
                'time'=>time(),
            ];
            $insert=Db::name('reply')->insert($data);
            if ($insert) {
                return $this->success('回复成功');
            }else{
                 return $this->error('回复失败,请联系管理员');
            }
        }else{
         return $this->error('请登录后回复');
        }

    }
   //inner评论回复
        public function innereply(){
        if (Session::has('username')) {  //判断是否登录
            $seluid=Db::name('register')->where('uname',Session::get('username'))->value('id');//根据用户名查找uid

            $towhoid=$_POST['towhoid'];
            $seluname=Db::name('register')->where('id',$towhoid)->value('uname');
            $data=[
                'rcontent'=>$_POST['rcontent'],
                'pid'  =>$_POST['pid'],
                'uid'    =>$seluid,
                'rid'    =>$_POST['rid'],
                'touname'=>$seluname,
                'artid'    =>$_POST['artid'],
                'time'=>time(),
            ];
            $insert=Db::name('reply')->insert($data);
            if ($insert) {
                return $this->success('回复成功');
            }else{
                 return $this->error('回复失败,请联系管理员');
            }
        }else{
         return $this->error('请登录后回复');
        }

    }
}
