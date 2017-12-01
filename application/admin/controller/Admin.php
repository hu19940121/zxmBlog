<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
Class Admin extends Base
{

    //后台主页


    public function lst()
        {

          $sel = Db::name('admin')->paginate(5);
          $page = $sel->render(); // 获取分页显示
          $this->assign('list',$sel);// 模板变量赋值
          $this->assign('page', $page); // 渲染模板输出
          return $this->fetch();

        }
//添加管理员
    public function add(){
            if (request()->isPost()){
                $data=[
                    'name'=>input('name'),
                    'password'=>input('password')
                ];
                $res=Db::name('admin')->insert($data);
                if ($res) {
                     return $this->success('添加成功','Admin/lst');
                }else{
                     return $this->success('添加失败');
                }

            }else{

                return $this->fetch();

            }


        }
//编辑管理员
        public function edit(){
             if (request()->isPost()) {
                $data=[
                    'name'=>input('name'),
                    'password'=>input('password')
                ];
                $id=$_POST['id'];
                $res=Db::name('admin')->where("id",$id)->update($data);
                if ($res) {
                     return $this->success('更新成功','Admin/lst');
                }else{
                     return $this->success('更新失败');
                }

            }else{
                 $id=$_GET['id'];
                 $selst=Db::name('admin')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }

//删除管理员
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('admin')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','Admin/lst');
         }else{
           return $this->error('删除失败');
         }
        }
}
