<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\index\index.html";i:1511432628;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\topnav.html";i:1504320753;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\header.html";i:1504320312;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/index\view\common\footer.html";i:1503635158;}*/ ?>
<!doctype html>
<html>
<head>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">

<meta charset="gb2312">
<title>个人博客</title>
<link href="__PUBLIC__css/base.css" rel="stylesheet">
<link href="__PUBLIC__css/index.css" rel="stylesheet">
<link href="__PUBLIC__css/video-js.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__js/jquery.color.js"></script> -->
<script type="text/javascript" src="__PUBLIC__js/dist/myfocus-2.0.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__js/video.min.js"></script>
<script src="http://itbyc.com/templets/yang/js/snow.js"></script>


<style>
/*分页样式*/
.pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}
.pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}
.pagination .active{background-color: #46A3FF;color: #fff;}
.pagination .disabled{color:#aaa;}
.lunboWrap{width: 100%;
  height: 300px;}
   #boxID{ width: 550px; height: 300px;float:left;}
.shuo{width:320px; height: 315px;float:left;background:url(__PUBLIC__images/every.jpg) center center;
background-size:cover;color:red;font-size:16px;font-family:"楷体";}
.shuo p{margin-top:120px;margin-left:60px;background-color: rgba(0,0,0,0.5);}
.loginWrap{display: inline-block;float:right;}
.operate a{display: block;line-height:26px;}
.operate a:hover{color:white;}
.operate{display:none;background-color: rgba(0,0,0,0.5);}
.snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}
.btitle{width:70%;padding-top:4px;padding-bottom:4px;}
@keyframes changeCol{
    from
    {
      background-color:none;
    }
    to
    {
      background-color:rgba(0,0,0,0.3);
    }

}

.btitle:hover{
  animation:changeCol 1s;
   animation-fill-mode:forwards;
}
</style>
</head>
<body>
   <div class="snow-container"></div>
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
     <div class="lunboWrap">
        <div id="boxID">
      <!-- 载入中的Loading图片(可选) -->
        <div class="loading"><img src="__PUBLIC__images/loading.gif" alt="请稍候..." /></div>
      <!-- 内容列表 -->
        <div class="pic">
            <ul>
                 <?php if(is_array($lun) || $lun instanceof \think\Collection || $lun instanceof \think\Paginator): $i = 0; $__LIST__ = $lun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunbo): $mod = ($i % 2 );++$i;?>
                <li><a href="#"><img width="100%" src="/images/<?php echo $lunbo['imgurl']; ?>" alt="<?php echo $lunbo['imgtitle']; ?>" /></a></li>

                <!-- 你可以根据你的需要增加更多的列 -->
              <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- 你可以根据你的需要增加更多的列 -->
            </ul>
        </div>
        </div>
        <div class="shuo">
          <video id="video" class="video-js" controls preload="auto" width="320" height="315"
      poster="<?php echo $vimg; ?>" data-setup="{}">
             <!--  <source src="http://vf2.mtime.cn/Video/2017/08/30/mp4/170830101329584351.mp4" type="video/mp4"> -->
              <source src="/videos/<?php echo $video; ?>" type="video/mp4">
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
          </video>
          <div id="output"></div>
        </div>
    </div>
    <div class="bloglist f_l">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <div>
         <h3 class="btitle"><a href="/index.php/index/index/artdetail?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></h3>
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
         <p class="dateview"><span><?php echo date("Y-m-d",$vo['time']); ?></span><span>作者：<?php echo $vo['author']; ?></span><span>个人博客：[<a href="#"><?php echo $vo['classname']; ?></a>]</span></p>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
       <?php echo $list->render(); ?>
    </div>

    <div class="r_box f_r">
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
myFocus.set({
    id: 'boxID',//焦点图盒子ID
    pattern: 'mF_pithy_tb',//焦点图风格的名称
    time: 3,//切换时间间隔(秒)
    trigger: 'mouseover',//触发切换模式:'click'(点击)/'mouseover'(悬停)
    delay: 200,//'mouseover'模式下的切换延迟(毫秒)
    txtHeight: 'default'//标题高度设置(像素),'default'为默认CSS高度，0为隐藏
});
</script>
<script>
if ($('.d').html()==null) {
   $('.loginWrap').click(function(){

        $('.operate').slideToggle();
    })

};

//标题动画
$('.btitle').hover(function(){
  $(this).animate({
    width:"90%",
    textIndent:'60px',
  })


},function(){
   $(this).animate({
    width:"70%",
    textIndent:'0px',

  })


})


</script>
<!-- 视频播放器 -->
 <script type="text/javascript">
      var myPlayer = videojs('video');
      videojs("video").ready(function(){
        var myPlayer = this;

      });
  </script>
<!-- 获取第一针作为图片 -->

</html>
