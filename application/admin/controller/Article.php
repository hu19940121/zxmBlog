<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Cate as CateModel;
Class Article extends Base
{



// 首页
    public function index()
        {
         $sel=Db::table('bg_article')->alias('a')->join('arclass b ','b.id= a.type')->field('a.id,a.title,a.content,a.pic,a.author,a.type,a.time,b.classname')->paginate(5);
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
                  'author'    => $_POST['author'],
                  'content'    => $_POST['content'],
                  'type'    => $_POST['type'],
                  'read'    => 0,
                  'time'     =>   time()
                  ];
                  $hdInsert = Db::name('article')->insert($data);

                      if($hdInsert){
                            return $this->success('文章添加成功','Article/index');
                        }else{
                            return $this->error('文章新增失败');
                        }
                 }else{
                        return $this->error('服务器拦截了缩略简图的上传,请联系服务商检查服务器配置');
                      }
            }else{
                //不传图片的操作
                $data = [
                  'title'  =>   $_POST['title'],
                  'author'    => $_POST['author'],
                  'content'    => $_POST['content'],
                  'type'    => $_POST['type'],
                  'read'    => 0,
                  'time'     =>   time()
                  ];
                  $hdInsert = Db::name('article')->insert($data);

                      if($hdInsert){
                            return $this->success('文章添加成功','Article/index');
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
                // $data=[
                //     'name'=>input('name'),
                //     'password'=>input('password')
                // ];
                // $id=$_POST['id'];
                // $res=Db::name('article')->where("id",$id)->update($data);
                // if ($res) {
                //      return $this->success('更新成功','article/lst');
                // }else{
                //      return $this->success('更新失败');
                // }
                $file = request()->file('pic');
                if($file != null){
                    $info = $file->move('images');
                    if($info){
                       $data = [
                        'title'  =>   $_POST['title'],
                        'pic'    =>   $info->getSaveName(),
                        'author'    => $_POST['author'],
                        'content'    => $_POST['content'],
                        'type'    => $_POST['type'],
                      ];
                      $id=$_POST['id'];
                      $update = Db::name('article')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','Article/index');
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
                        'author'    => $_POST['author'],
                        'content'    => $_POST['content'],
                        'type'    => $_POST['type'],

                      ];
                      $update = Db::name('article')->where('id',$id)->update($data);
                          if($update){
                                return $this->success('修改成功','Article/index');
                            }else{
                                return $this->error('修改失败');
                            }
                  }


            }else{
                 $id=$_GET['id'];
                 $selst=Db::name('article')->where('id',$id)->find();
                 $this->assign('lst',$selst);

                $cateres=Db::name('arclass')->select();
                $this->assign('cateres',$cateres);
                 return $this->fetch();
            }


        }

//删除
    public function del()
        {
         $id=$_GET['id'];
         $del=Db::name('article')->where('id',$id)->delete();
         if ($del) {
           return $this->success('删除成功','article/index');
         }else{
           return $this->error('删除失败');
         }
        }
}
