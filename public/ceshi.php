<?php

// 1.非限定名称访问方式


// 2.限定名称访问方式

// 3.完全限定名访问方式
namespace kj1;
function getmsg(){

    echo "123";
}
//命名空间
namespace kj2;
function getmsg(){

    echo "456";
}
getmsg();  //默认执行距离命名空间最近的方法   kj2里的getmsg（）
class Animals{
    public $obj='pig';


}

\kj1\getmsg();//完全限定名访问方式