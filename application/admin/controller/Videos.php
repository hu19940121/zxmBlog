<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Videos extends Base
{



// 首页
    public function index()
        {
         $sel=Db::name('videos')->paginate(4);
          // $sel = Db::name('article')->paginate(8);
          $page = $sel->render(); // 获取分页显示
          $this->assign('list',$sel);// 模板变量赋值
          $this->assign('page', $page); // 渲染模板输出
          return $this->fetch();

        }
//添加
    public function add(){
          if(request()->isPost()){
            $file = request()->file('vsrc');
            if($file != null){
                $info = $file->move('videos');
                if($info){
                  $data = [
                  'vtitle'  =>    $_POST['vtitle'],
                  'isshow'  =>    $_POST['isshow'],
                  'vimg'    =>  $_POST['vimg'],
                  'vsrc'    =>   $info->getSaveName(),
                  'time'     =>   time()
                  ];
                  if ($data['isshow']==1) {
                       Db::name('videos')->where('isshow',1)->update(['isshow' => 0]); //
                  }
                  $hdInsert = Db::name('videos')->insert($data);

                      if($hdInsert){
                            return $this->success('添加成功','videos/index');
                        }else{
                            return $this->error('新增失败');
                        }
                 }else{
                        return $this->error('服务器拦截了缩略简图的上传,请联系服务商检查服务器配置');
                      }
            }else{
                //不传视频的操作
                $data = [
                  'vtitle'  =>   $_POST['vtitle'],
                  'isshow'  =>    $_POST['isshow'],
                  'vimg'    =>  $_POST['vimg'],
                  'time'     =>   time()
                  ];
                  $hdInsert = Db::name('videos')->insert($data);

                      if($hdInsert){
                            return $this->success('添加成功','videos/index');
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
                $file = request()->file('vsrc');
                if($file != null){
                    $info = $file->move('videos');
                    if($info){
                       $data = [
                        'vtitle'  =>   $_POST['vtitle'],
                        'vsrc'    =>   $info->getSaveName(),
                        'isshow'  =>    $_POST['isshow'],
                        'vimg'    =>  $_POST['vimg'],
                        'time'     =>   time()
                      ];
                      if ($data['isshow']==1) {
                       Db::name('videos')->where('isshow',1)->update(['isshow' => 0]); //
                      }
                      $id=$_POST['id'];
                      $update = Db::name('videos')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','videos/index');
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
                         'vtitle'  =>   $_POST['vtitle'],
                         'isshow'  =>    $_POST['isshow'],
                         'vimg'    =>  $_POST['vimg'],
                         'time'     =>   time()
                      ];
                       if ($data['isshow']==1) {
                       Db::name('videos')->where('isshow',1)->update(['isshow' => 0]); //
                        }
                      $update = Db::name('videos')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','videos/index');
                            }else{
                                return $this->error('修改失败');
                            }
                  }


            }else{

                 $id=$_GET['id'];
                 $selst=Db::name('videos')->where('id',$id)->find();
                 $this->assign('lst',$selst);
                 return $this->fetch();
            }


        }

//删除
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('videos')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','videos/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
