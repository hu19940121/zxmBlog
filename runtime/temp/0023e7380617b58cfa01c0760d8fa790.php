<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\message\index.html";i:1504325014;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\topnav.html";i:1504320753;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\header.html";i:1504320312;s:75:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">
<meta charset="utf-8">
<title>个人博客</title>
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
.commentWrap{overflow:hidden;margin-top:60px;font-family:"微软雅黑";}
 .headimg,.comment{float:left;}
 .headimg{width: 6%;height: 60px;} .headimg img{width:100%;height: 100%;}
 .comment{width: 70%;height: 140px;margin-left:10px;}
 .comment textarea{width: 100%;height: 110px;}
 .comment input{width: 80px;height: 25px;background-color: orange;color:white;}
 .tip{font-size:23px;line-height:50px;}
 .liuyanList ul li{padding-top:20px;border-bottom:1px solid rgba(0,0,0,0.1);}
 .liuyanList h3{font-family:微软雅黑;color:orange;}
 .who{font-family:微软雅黑;font-size:16px;color:green;}
 .lycontent{color:black;font-family:微软雅黑;text-indent:12px;margin-top:10px;margin-bottom:10px;}
 .loginWrap{display: inline-block;float:right;}
.operate a{display: block;line-height:26px;}
.operate a:hover{color:white;}
.operate{display:none;background-color: rgba(0,0,0,0.5);}
.liuyanList .del{color:rgba(0,0,0,0.5);}
}
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
  <div class="jztop"></div>
  <div class="container">
    <div class="bloglist f_l wow fadeInLeft  animated">
        <div class="commentWrap">
            <p class="tip">快点留下你的脚印吧</p>
            <div class="headimg">
              <img src="__PUBLIC__images/header.jpg" alt="">
            </div>
            <div class="comment">
                <form action="/index.php/index/message/liuyan" method="post">
                    <textarea id="pcontent" placeholder="我有话说...." name="content"></textarea>
                    <input  id="fbtn" type="submit" name="" value="留言">
                </form>
            </div>
          </div>
          <div class="liuyanList">
              <h3>最新留言:</h3>
              <ul>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <li>
                    <p class="wholy">
                      <span class="who"><?php echo $vo['uname']; ?></span>. <span class="time"><?php echo date("m-d h:i:s",$vo['time'] ); ?></span>  说：
                    </p>
                    <p class="lycontent">
                      <?php echo $vo['content']; ?>
                    </p>
                    <a class="del" href="/index.php/index/message/delmsg?id=<?php echo $vo['id']; ?>&uid=<?php echo $vo['uid']; ?>" onclick='return confirm("确认要删除？")'>删除此条留言</a>
                  </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

              </ul>

          </div>
          <?php echo $list->render(); ?>
    </div>

    <div class="r_box f_r wow fadeInRight  animated">
      <div class="tit01">
        <h3 class="tit">关注我</h3>
        <div class="gzwm">
          <ul>
            <li><a class="email" href="#" target="_blank">我的电话</a></li>
            <li><a class="qq" href="#mailto:admin@admin.com" target="_blank">我的邮箱</a></li>
            <li><a class="tel" href="#" target="_blank">我的QQ</a></li>
            <li><a class="prize" href="#">个人奖项</a></li>
          </ul>
        </div>
      </div>
      <!--tit01 end-->

      <div class="tuwen">
        <h3 class="tit">图文推荐</h3>
        <ul>
          <li><a href="/"><img src="__PUBLIC__images/01.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="__PUBLIC__images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="__PUBLIC__images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="__PUBLIC__images/06.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="__PUBLIC__images/04.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="__PUBLIC__images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="__PUBLIC__images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
        </ul>
      </div>
      <div class="ph">
        <h3 class="tit">点击排行</h3>
        <ul class="rank">
          <?php if(is_array($rank) || $rank instanceof \think\Collection || $rank instanceof \think\Paginator): $i = 0; $__LIST__ = $rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
              <a href="/index.php/index/index/artdetail?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?>
             </a>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="ad"> <img src="__PUBLIC__images/03.jpg"> </div>
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
  <script>
     $('#fbtn').click(function(){
    if ($('#pcontent').val()=='') {
      alert('请输入评论内容');
      return false;
    };

  });
  </script>
  <script>
if ($('.d').html()==null) {
   $('.loginWrap').click(function(){

        $('.operate').slideToggle();
    })

};



</script>
</html>
