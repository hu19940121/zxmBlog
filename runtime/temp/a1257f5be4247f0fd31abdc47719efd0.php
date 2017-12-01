<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\search\index.html";i:1503924693;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">

<meta charset="gb2312">
<title>搜索结果</title>
<link href="__PUBLIC__css/base.css" rel="stylesheet">
<link href="__PUBLIC__css/index.css" rel="stylesheet">
<link href="__PUBLIC__css/animate.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__js/wow.min.js"></script>
<style>
/*分页样式*/
.pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}
.pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}
.pagination .active{background-color: #46A3FF;color: #fff;}
.pagination .disabled{color:#aaa;}
.for{margin-top:36px;margin-left:24px;}
.sou{width: 460px;height: 36px;border:1px solid #eeee;text-indent:12px;font-size:16px;}
.bbtn{width: 40px;height: 39px;line-height:39px;background-color:#056d68;color:white;border:1px solid #056d68;font-family:"微软雅黑";}
}
</style>
</head>
<body>
<div class="shadow">
  <div class="shadowl">

  </div>
   <div class="shadowr">

  </div>
  <div class="go">
      进入
  </div>
</div>
<div class="topnav">
<a  href="#">猪小明的个人博客</a>
</div>
<div id="wrapper">
  <meta charset="utf-8">
 <header>
    <div class="headtop"></div>
    <div class="contenttop">
      <div style="font-family:'楷体';" class="logo f_l">猪小明的个人博客</div>
      <div class="search f_r">

      </div>
      <div class="blank"></div>
      <nav>
        <div  class="navigation">
          <ul class="menu">
            <li><a href="/index.php/index/index/index">网站首页</a></li>
            <li><a href="#">关于我</a>
              <ul>
                <li><a href="/index.php/index/aboutme/gr">个人简介</a></li>
                <li><a href="/index.php/index/aboutme/album">个人相册</a></li>
              </ul>
            </li>
            <li><a href="#">我的日记</a>
              <ul>
                <li><a href="/index.php/index/diary/grdiary">个人日记</a></li>
                <li><a href="/index.php/index/diary/notes">学习笔记</a></li>
              </ul>
            </li>
            <li><a href="/index.php/index/skillart/index">学无止境</a> </li>
            <li><a href="#">给我留言</a> </li>
          </ul>
        </div>


      </nav>
      <SCRIPT type=text/javascript>
    // Navigation Menu
    $(function() {
        $(".menu ul").css({display: "none"}); // Opera Fix
        $(".menu li").hover(function(){
            $(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown("normal");
        },function(){
            $(this).find('ul:first').css({visibility: "hidden"});
        });
    });
</SCRIPT>
    </div>
  </header>
  <div class="jztop"></div>
  <div style="min-height: 300px;" class="container">

    <form class="for"  action="/index.php/index/search/index" method="post">
        <input class="sou" type="text" placeholder="请输入关键字" name="keywords">
        <input class="bbtn" type="submit" name="" value="搜索">
    </form>
    <div class="bloglist f_l wow fadeInLeft  animated">
    <?php if($list[0]['title'] != ''): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <div>
         <h3><a href="/index.php/index/index/artdetail?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></h3>
        <figure>
        <?php if($vo['pic'] != ''): ?>
        <img src="/images/<?php echo $vo['pic']; ?>" alt="">
        <?php else: ?>
        暂无缩略图
        <?php endif; ?>
        </figure>
        <ul>
          <p><?php  echo mb_substr(preg_replace("/<(.*?)>/","",$vo['content']),0,100,'utf-8');  ?>....</p>
          <a title=""  href="/index.php/index/index/artdetail?id=<?php echo $vo['id']; ?>" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
         <p class="dateview"><span><?php echo date("Y-m-d",$vo['time']); ?></span><span>作者：<?php echo $vo['author']; ?></span><span>个人博客：[<a href="/jstt/bj/"><?php echo $vo['classname']; ?></a>]</span></p>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
       <?php echo $list->render(); else: ?>
      无记录
    <?php endif; ?>

    </div>

  </div>
  <!-- container代码 结束 -->
  <div class="jzend"></div>
   <footer>
    <div class="footer">
      <div class="f_l">
        <p>All Rights Reserved 版权所有：<a href="http://www.zxm.com">猪小明个人博客</a> 备案号：蜀ICP备00000000号</p>
      </div>
      <div class="f_r textr">
        <p>Design by Hsh</p>
      </div>
    </div>
  </footer>
</div>

</body>

</html>
