<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Aboutme extends Base
{



// 首页
    public function index()
        {
          $sel=Db::name('aboutme')->select();
          $this->assign('list',$sel);
          return $this->fetch();
        }
//添加
       public function add(){
            if (request()->isPost()){
                $data=[
                    'title'=>input('title'),
                    'content'=>input('content'),
                    'isshow'=>input('isshow')
                ];
                if ($data['isshow']==1) {
                    Db::name('aboutme')->where('isshow',1)->update(['isshow' => 0]); //
                }
                $res=Db::name('aboutme')->insert($data);
                if ($res) {
                     return $this->success('添加成功','aboutme/index');
                }else{
                     return $this->success('添加失败');
                }

            }else{

                return $this->fetch();

            }


        }
//编辑
    public function edit(){
             if (request()->isPost()) {
                $data=[
                    'title'=>input('title'),
                    'content'=>input('content'),
                    'isshow'=>input('isshow')
                ];
                if ($data['isshow']==1) {
                    Db::name('aboutme')->where('isshow',1)->update(['isshow' => 0]); //
                }
                $id=$_POST['id'];
                $res=Db::name('aboutme')->where("id",$id)->update($data);
                if ($res) {
                     return $this->success('更新成功','aboutme/index');
                }else{
                     return $this->success('更新失败');
                }

            }else{
                 $id=$_GET['id'];
                 $selst=Db::name('aboutme')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }
//删除
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('aboutme')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','aboutme/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
