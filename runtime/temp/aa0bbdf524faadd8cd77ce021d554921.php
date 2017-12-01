<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\diary\nodetail.html";i:1503903509;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\header.html";i:1503924613;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">

<meta charset="utf-8">
<title>个人博客</title>
<link href="__PUBLIC__css/base.css" rel="stylesheet">
<link href="__PUBLIC__css/main.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
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
  <div class="container">
    <div class="con_content">
      <div class="about_box">
        <h2 class="nh1"><span>您现在的位置是：<a href="/index.php/index/index/index">网站首页</a>>><a href="#" >笔记详情</a></span><b>笔记详情</b></h2>
        <div class="f_box">
          <p class="a_title"><?php echo $list['title']; ?></p>
          <p class="p_title"></p>
            <p class="box_p"><span>发布时间：<?php echo date("Y-m-d h:i:s",$list['time']); ?></span></p>
          <!-- 可用于内容模板 -->
        </div>
        <ul class="about_content">
            <?php echo $list['content']; ?>
        </ul>
            <div class="nextinfos">
      <p>上一篇：<?php if($prev['id'] != ''): ?>
      <a href="/index.php/index/diary/nodetail?id=<?php echo $prev['id']; ?>">
      <?php echo $prev['title']; else: ?>
      没有了
      <?php endif; ?>
      </a></p>
      <p>下一篇：<?php if($next['id'] != ''): ?>
      <a href="/index.php/index/diary/nodetail?id=<?php echo $next['id']; ?>">
      <?php echo $next['title']; else: ?>
      没有了
      <?php endif; ?></a></p>
    </div>
        <!-- 可用于内容模板 -->

        <!-- container代码 结束 -->
      </div>
    </div>
    <div class="blank"></div>
  </div>
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
