<?php
namespace app\index\model;
use think\Model;
Class Cate extends Model{

    public function sort($data,$rid=0,$level=0){
        static $arr=array();//定义静态空数组
          // var_dump($data);die;
        foreach ($data as $k => $v) {
            if ($v['rid']==$rid) {
             $v['level']=$level;
             $arr[]=$v;

             $this->sort($data,$v['id'],$level+1);
            }
        }
       // var_dump($arr);die;
        return $arr;

    }
}
