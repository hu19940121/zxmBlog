<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Album extends Base
{



// 首页
    public function index()
        {
           $sel=Db::name('album')->paginate(4);
          $this->assign('list',$sel);
          $page = $sel->render(); // 获取分页显示
          $this->assign('page', $page); // 渲染模板输出
          return $this->fetch();
        }
//添加
       public function add(){
          if(request()->isPost()){
            $file = request()->file('imgurl');
            if($file != null){
                $info = $file->move('images');
                if($info){
                  $data = [
                  'imgtitle'  =>   $_POST['imgtitle'],
                  'islun'  =>   $_POST['islun'],
                  'imgurl'    =>   $info->getSaveName(),
                  ];
                  $hdInsert = Db::name('album')->insert($data);

                      if($hdInsert){
                            return $this->success('添加成功','album/index');
                        }else{
                            return $this->error('新增失败');
                        }
                 }else{
                        return $this->error('服务器拦截了缩略简图的上传,请联系服务商检查服务器配置');
                      }
            }else{
                //不传图片的操作
                $data = [
                  'imgtitle'  =>   $_POST['imgtitle'],
                  'islun'  =>   $_POST['islun'],
                  ];
                  $hdInsert = Db::name('album')->insert($data);

                      if($hdInsert){
                            return $this->success('添加成功','album/index');
                        }else{
                            return $this->error('新增失败');
                        }
              }

            }else{

                return $this->fetch();

            }


        }
//编辑
public function edit(){
             if (request()->isPost()) {
                $file = request()->file('imgurl');
                if($file != null){
                    $info = $file->move('images');
                    if($info){
                       $data = [
                          'imgtitle'  =>   $_POST['imgtitle'],
                          'islun'  =>   $_POST['islun'],
                          'imgurl'    =>   $info->getSaveName(),
                                ];
                      $id=$_POST['id'];
                      $update = Db::name('album')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','album/index');
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
                         'imgtitle'  =>   $_POST['imgtitle'],
                         'islun'  =>   $_POST['islun'],
                      ];
                      $update = Db::name('album')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','album/index');
                            }else{
                                return $this->error('修改失败');
                            }
                  }


            }else{
                 $id=$_GET['id'];
                 $selst=Db::name('album')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }
//删除
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('album')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','album/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
