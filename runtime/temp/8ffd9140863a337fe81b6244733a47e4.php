<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\diary\grdiary.html";i:1503903503;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\header.html";i:1504320312;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">

<meta charset="gb2312">
<title>个人博客</title>
<link href="__PUBLIC__css/base.css" rel="stylesheet">
<link href="__PUBLIC__css/main.css" rel="stylesheet">
<link href="__PUBLIC__css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__js/wow.min.js"></script>
<style>
/*分页样式*/
.pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}
.pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}
.pagination .active{background-color: #46A3FF;color: #fff;}
.pagination .disabled{color:#aaa;}
</style>
</head>
<body>
<div id="wrapper">
  <header>
    <div class="headtop"></div>
    <div class="contenttop">
      <div style="font-family:'楷体';" class="logo f_l">猪小明的个人博客</div>
      <div class="search f_r">
        <form action="/index.php/index/search/index" method="post" name="searchform" id="searchform">
          <input name="keywords" id="keyboard" class="input_text" value="" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
          <input name="show" value="title" type="hidden">
          <input name="tempid" value="1" type="hidden">
          <input name="tbname" value="news" type="hidden">
          <input name="Submit" class="input_submit" value="搜索" type="submit">
        </form>
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
            <li><a href="/index.php/index/message/index">给我留言</a> </li>
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
<div class="container">
  <div class="con_content">
    <div class="about_box">
      <h2 class="nh1"><span>您现在的位置是：<a href="/index.php/index/index/index" >网站首页</a>>><a href="#">个人日记</a></span><b>个人日记</b></h2>
      <div class="dtxw box">
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="wow flipInX  animated">
          <div class="dttext f_l">
            <ul>
              <h2><a href="/index.php/index/diary/artdetail?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></h2>
              <p><?php  echo mb_substr(preg_replace("/<(.*?)>/","",$vo['content']),0,100,'utf-8');  ?>....</p>
              <span><?php echo date("Y-m-d",$vo['time']); ?></span>
            </ul>
          </div>
          <div class="xwpic f_r">
            <?php if($vo['pic'] != ''): ?>
                <a href="#"><img src="/images/<?php echo $vo['pic']; ?>"></a>
            <?php else: ?>
              暂无缩略图
            <?php endif; ?>

          </div>
        </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <?php echo $list->render(); ?>

    </div>
  </div>
  <div class="blank"></div>
  <!-- container代码 结束 -->

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