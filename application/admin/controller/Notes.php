<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Notes extends Base
{



// 首页
    public function index()
        {
         $sel=Db::name('notes')->order('id desc')->paginate(4);
          // $sel = Db::name('article')->paginate(8);
          $page = $sel->render(); // 获取分页显示
          $this->assign('list',$sel);// 模板变量赋值
          $this->assign('page', $page); // 渲染模板输出
          return $this->fetch();

        }
//添加
    public function add(){
          if(request()->isPost()){
            $file = request()->file('pic');
            if($file != null){
                $info = $file->move('images');
                if($info){
                  $data = [
                  'title'  =>   $_POST['title'],
                  'pic'    =>   $info->getSaveName(),
                  'content'    => $_POST['content'],
                  'time'     =>   time()
                  ];
                  $hdInsert = Db::name('notes')->insert($data);

                      if($hdInsert){
                            return $this->success('添加成功','notes/index');
                        }else{
                            return $this->error('新增失败');
                        }
                 }else{
                        return $this->error('服务器拦截了缩略简图的上传,请联系服务商检查服务器配置');
                      }
            }else{
                //不传图片的操作
                $data = [
                  'title'  =>   $_POST['title'],
                  'content'    => $_POST['content'],
                  'time'     =>   time()
                  ];
                  $hdInsert = Db::name('notes')->insert($data);

                      if($hdInsert){
                            return $this->success('文章添加成功','notes/index');
                        }else{
                            return $this->error('文章新增失败');
                        }
              }

            }else{
                $cateres=Db::name('arclass')->select();
                $this->assign('cateres',$cateres);
                return $this->fetch();

            }


        }
//编辑
        public function edit(){
             if (request()->isPost()) {
                $file = request()->file('pic');
                if($file != null){
                    $info = $file->move('images');
                    if($info){
                       $data = [
                        'title'  =>   $_POST['title'],
                        'pic'    =>   $info->getSaveName(),
                        'content'    => $_POST['content'],
                        'time'     =>   time()
                      ];
                      $id=$_POST['id'];
                      $update = Db::name('notes')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','notes/index');
                            }else{
                                return $this->error('修改失败');
                            }
                     }else{
                            return $this->error('服务器拦截了缩略简图的上传,请联系服务商检查服务器配置');
                          }
                }else{
                    //不传图片的操作
                    $id=$_POST['id'];
                        $data = [
                         'title'  =>   $_POST['title'],
                         'content'    => $_POST['content'],
                         'time'     =>   time()
                      ];
                      $update = Db::name('notes')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','notes/index');
                            }else{
                                return $this->error('修改失败');
                            }
                  }


            }else{

                 $id=$_GET['id'];
                 $selst=Db::name('notes')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }

//删除
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('notes')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','notes/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
