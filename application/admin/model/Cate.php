<?php
namespace app\admin\model;
use think\Model;
Class Cate extends Model{

    public function sort($data,$pid=0,$level=0){
        static $arr=array();//定义静态空数组
        foreach ($data as $k => $v) {
            if ($v['pid']==$pid) {
             $v['level']=$level;
             $arr[]=$v;
             $this->sort($data,$v['id'],$level+1);
            }
        }
        return $arr;

    }
}
