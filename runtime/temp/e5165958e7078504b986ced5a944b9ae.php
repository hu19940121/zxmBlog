<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:72:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\videos\add.html";i:1505138078;s:72:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\css.html";i:1503380362;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\header.html";i:1503389458;s:73:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\left.html";i:1505138620;s:71:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\js.html";i:1503380392;}*/ ?>
<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
    <title></title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
         <link href="__APUBLIC__style/bootstrap.css" rel="stylesheet">
    <link href="__APUBLIC__style/font-awesome.css" rel="stylesheet">
    <link href="__APUBLIC__style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__APUBLIC__style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__APUBLIC__style/demo.css" rel="stylesheet">
    <link href="__APUBLIC__style/typicons.css" rel="stylesheet">
    <link href="__APUBLIC__style/animate.css" rel="stylesheet">
     <script src="__APUBLIC__editor/ueditor.config.js"></script>
     <script src="__APUBLIC__editor/ueditor.all.min.js"></script>
     <script src="__APUBLIC__editor/lang/zh-cn/zh-cn.js"></script>
     <style type="text/css">
         .row{width: 100%; clear: both;}
         .w50{width: 50%; float: left;}
         .w50 video{max-width: 100%;}
     </style>
</head>
<body>
	<!-- 头部 -->
  <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__APUBLIC__images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__APUBLIC__images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo $name; ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                <a href="<?php echo url('Index/lgout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="<?php echo url('Index/home'); ?>">
                            <i class="menu-icon fa fa-dashboard"></i>
                            <span class="">主页</span>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('arclass/index'); ?>">
                                    <span class="menu-text">
                                        文章分类                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article/index'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil"></i>
                            <span class="menu-text">关于我</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('aboutme/index'); ?>">
                                    <span class="menu-text">
                                        个人简介                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('album/index'); ?>">
                                    <span class="menu-text">
                                        个人相册                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-certificate"></i>
                            <span class="menu-text">我的日记</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('diary/index'); ?>">
                                    <span class="menu-text">
                                        个人日记                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('notes/index'); ?>">
                                    <span class="menu-text">
                                        学习笔记                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-caret-square-o-right"></i>
                            <span class="menu-text">视频管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('videos/index'); ?>">
                                    <span class="menu-text">
                                        视频列表                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">视频管理</a>
                    </li>
                                        <li class="active">添加视频</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增视频</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">视频标题</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="vtitle" required="" type="text">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">视频</label>
                            <div class="col-sm-6">
                              <input id="file" name="vsrc" type="file" value="" placeholder="点击上传" />
                                <input id="vimg" name="vimg" type="hidden"   />
                              <div class="row">
                                <div id="video" class="w50"></div>
                                <div id="imgSmallView" class="w50"></div>
                             </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">是否显示主页</label>
                            <div class="col-sm-6">
                                <div class="control-group">
                                                <div class="radio">
                                                    <label>
                                                        <input name="isshow" type="radio" checked="checked" value="1">
                                                        <span class="text">显示 </span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input name="isshow" type="radio" class="inverted" value="0">
                                                        <span class="text">不显示</span>
                                                    </label>
                                                </div>
                                    </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">添加</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	 <script src="__APUBLIC__style/jquery_002.js"></script>
<script src="__APUBLIC__style/bootstrap.js"></script>
<script src="__APUBLIC__style/jquery.js"></script>
    <!--Beyond Scripts-->
<script src="__APUBLIC__style/beyond.js"></script>



</body>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:750,initialFrameHeight:400,});



</script>
<script>
    (function() {
            "use strict";
            $('#file').on('change', function() {
                var files = this.files,
                    video = $('#video').find('video'),
                    videoURL = null,
                    windowURL = window.URL || window.webkitURL;;
                if (files && files[0]) {

                    videoURL = windowURL.createObjectURL(files[0]);

                    $('#video').html('<video src="' + videoURL + '" controls="controls"></video>');

                    setTimeout(function() {
                        createIMG();
                    }, 500);

                }
            }).trigger('change');

            var createIMG = function() {
                var scale = 0.25,
                    video = $('#video').find('video')[0],
                    canvas = document.createElement("canvas"),
                    canvasFill = canvas.getContext('2d');
                canvas.width = video.videoWidth * scale;
                canvas.height = video.videoHeight * scale;
                canvasFill.drawImage(video, 0, 0, canvas.width, canvas.height);

                var src = canvas.toDataURL("image/jpeg");
                $('#imgSmallView').html('<img id="imgSmallView" src="' + src + '" alt="预览图" />');
                 $('#vimg').val(src);
            }

        })()
</script>
</html>