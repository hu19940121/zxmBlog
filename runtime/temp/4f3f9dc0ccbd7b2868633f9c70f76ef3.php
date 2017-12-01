<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\index\artdetail.html";i:1504325380;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\topnav.html";i:1504320753;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\header.html";i:1504320312;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客</title>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">

<link href="__PUBLIC__css/base.css" rel="stylesheet">
<link href="__PUBLIC__css/main.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
<style type="text/css">
 .commentWrap{overflow:hidden;margin-top:60px;font-family:"微软雅黑";}
 .headimg,.comment{float:left;}
 .headimg{width: 6%;height: 60px;} .headimg img{width:100%;height: 100%;}
 .comment{width: 70%;height: 140px;margin-left:10px;}
 .comment textarea{width: 100%;height: 110px;}
 .comment input{width: 80px;height: 25px;background-color: orange;color:white;}
 .tip{font-size:23px;line-height:50px;}
 .commentlist h4{font-size:16px;font-weight:bold;font-family:"微软雅黑";}
 .listWrap p{line-height:30px;}
 .listWrap li{border-top:1px solid gray;}
.listWrap li li{border:none;}
 .top{color:#777777;font-size:15px;}
 .pcontent{font-size:15px;color:black;font-family:"微软雅黑";}
 .reply{padding-bottom:10px;}
 .reply a{color:gray;}
 .username{color:blue;}
  .huifu{width: 70%;height: 140px;margin-left:10px;padding-top:20px;padding-bottom: 10px;display: none;}
 .huifu textarea{width: 100%;height: 110px;}
 .huifu input{width: 80px;height: 25px;background-color: orange;color:white;}
 .towho{color:green;}
 .loginWrap{display: inline-block;float:right;}
.operate a{display: block;line-height:26px;}
.operate a:hover{color:white;}
.operate{display:none;background-color: rgba(0,0,0,0.5);}
</style>
</head>
<body>
<div class="topnav">
<a  href="#">猪小明的个人博客</a>
 <div class="loginWrap">
      <?php if($username != ''): ?>
        欢迎  <?php echo $username; else: ?>
        <a class="d" href="/index.php/index/login/index">登录</a>
        <a href="/index.php/index/login/index">注册</a>
      <?php endif; ?>
      <div class="operate">
          <a class="operate1" href="/index.php/index/login/lgout">退出</a>
          <a class="operate2" href="">修改密码</a>
      </div>
  </div>
</div>
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
        <h2 class="nh1"><span>您现在的位置是：<a href="/index.php/index/index/index" >网站首页</a>>><a href="#">文章详情</a></span><b>文章详情</b></h2>
        <div class="f_box">
          <p class="a_title"><?php echo $list['title']; ?></p>
          <p class="p_title"></p>
            <p class="box_p"><span>发布时间：<?php echo date("Y-m-d h:i:s",$list['time']); ?></span><span>作者：<?php echo $list['author']; ?></span><span>点击：<?php echo $list['read']; ?></span></p>
          <!-- 可用于内容模板 -->
        </div>
        <ul class="about_content">
            <?php echo $list['content']; ?>
        </ul>
            <div class="nextinfos">
      <p>上一篇：<?php if($prev['id'] != ''): ?>
      <a href="/index.php/index/index/artdetail?id=<?php echo $prev['id']; ?>">
      <?php echo $prev['title']; else: ?>
      没有了
      <?php endif; ?>
      </a></p>
      <p>下一篇：<?php if($next['id'] != ''): ?>
      <a href="/index.php/index/index/artdetail?id=<?php echo $next['id']; ?>">
      <?php echo $next['title']; else: ?>
      没有了
      <?php endif; ?></a></p>
    </div>
        <!-- 可用于内容模板 -->
      <!-- 评论区域 -->
          <div class="commentWrap">
            <p class="tip">快点留下你的脚印吧</p>
            <div class="headimg">
              <img src="__PUBLIC__images/header.jpg" alt="">
            </div>
            <div class="comment">
                <form action="/index.php/index/index/comment" method="post">
                    <input type="hidden" name="artid" value="<?php echo $list['id']; ?>">
                    <textarea id="pcontent" placeholder="我有话说...." name="comment"></textarea>
                    <input  id="fbtn" type="submit" name="" value="发布">
                </form>
            </div>
          </div>
          <div class="commentlist">
           <h4 >最新评论:</h4>
            <ul class="listWrap">
              <?php if($plist != null): if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                   <p class="top">
                      <span class="username"><?php echo $vo['uname']; ?></span>：<?php echo date("Y-m-d h:i:s",$vo['time']); ?>
                   </p>
                   <p class="pcontent">
                      <?php echo $vo['content']; ?>
                   </p>
                    <div class="reply">
                      <a href="#">顶</a>
                      <span class="reply1" href="#">回复</span>
                      <a href="#">分享 >></a>
                      <div class="huifu">
                        <form action="/index.php/index/index/reply" method="post">
                          <input type="hidden" name="pid" value="<?php echo $vo['id']; ?>">
                          <input type="hidden" name="towhoid" value="<?php echo $vo['uid']; ?>">
                          <input type="hidden" name="artid" value="<?php echo $list['id']; ?>">
                          <textarea id="pcontent" placeholder="我有话说...." name="rcontent"></textarea>
                          <input  class="hbtn" type="submit" name="" value="回复">
                        </form>
                      </div>
                    </div>

                    <?php if(is_array($hlist) || $hlist instanceof \think\Collection || $hlist instanceof \think\Paginator): $i = 0; $__LIST__ = $hlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voh): $mod = ($i % 2 );++$i;if($vo['id'] == $voh['pid']): ?>
                      <div style="margin-left:20px" class="innereply" >

                       <p class="top">
                        <?php echo str_repeat('&nbsp;', $voh['level']*3)?><span class="username"><?php echo $voh['uname']; ?></span>：<?php echo date("Y-m-d h:i:s",$voh['time']); ?> 回复给:<span class="towho"><?php echo $voh['touname']; ?></span>
                       </p>
                       <p class="pcontent">
                         <?php echo str_repeat('&nbsp;', $voh['level']*10) ?><?php echo $voh['rcontent']; ?>
                       </p>

                       <div class="reply">
                        <a href="#"><?php echo str_repeat('&nbsp;', $voh['level']*4) ?>顶</a>
                        <span class="reply1" href="#">回复</span>
                        <a href="#">分享 >></a>
                        <div class="huifu">
                          <form action="/index.php/index/index/innereply" method="post">
                            <input type="hidden" name="pid" value="<?php echo $vo['id']; ?>">
                            <input type="hidden" name="rid" value="<?php echo $voh['id']; ?>">
                            <input type="hidden" name="towhoid" value="<?php echo $voh['uid']; ?>">
                            <input type="hidden" name="artid" value="<?php echo $list['id']; ?>">
                            <textarea id="pcontent" placeholder="我有话说...." name="rcontent"></textarea>
                            <input  class="hbtn" type="submit" name="" value="回复">
                          </form>
                        </div>
                       </div>

                    </div>
                    <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>
              <?php endforeach; endif; else: echo "" ;endif; else: ?>
                此文章暂无评论
              <?php endif; ?>


              </ul>
          </div>
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
<script>
  $('#fbtn').click(function(){
    if ($('#pcontent').val()=='') {
      alert('请输入评论内容');
      return false;
    };

  });

 $('.hbtn').click(function(){

    if ($(this).siblings('textarea').val()=='') {
      alert('请输入评论内容');
      return false;
    };


  })


  $('.reply1').click(function(){
    $(this).siblings('.huifu').toggle();
  })
</script>
<script>
if ($('.d').html()==null) {
   $('.loginWrap').click(function(){

        $('.operate').slideToggle();
    })

};



</script>
</html>
