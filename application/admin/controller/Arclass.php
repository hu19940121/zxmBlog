<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Arclass extends Base
{




    public function index()
        {

          $sel = Db::name('arclass')->select();
          $this->assign('list',$sel);
          return $this->fetch();

        }
//添加栏目
    public function add(){
            if (request()->isPost()){
                $data=[
                    'classname'=>input('classname'),
                ];
                $res=Db::name('arclass')->insert($data);
                if ($res) {
                     return $this->success('添加成功','arclass/index');
                }else{
                     return $this->success('添加失败');
                }
            }else{

                return $this->fetch();
            }


        }
//编辑栏目
        public function edit(){
             if (request()->isPost()) {
                 $data=[
                    'classname'=>input('classname'),
                ];
                $id=$_POST['id'];
                $res=Db::name('arclass')->where("id",$id)->update($data);
                if ($res) {
                     return $this->success('更新成功','arclass/index');
                }else{
                     return $this->success('更新失败');
                }

            }else{
                 $id=$_GET['id'];
                 $selst=Db::name('arclass')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }

//删除栏目
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('arclass')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','arclass/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
