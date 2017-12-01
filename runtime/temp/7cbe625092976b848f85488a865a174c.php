<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\album\index.html";i:1503906261;s:75:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\header.html";i:1503389458;s:73:"C:\phpstudy\WWW\zxmblog\public/../application/admin\view\common\left.html";i:1503801988;}*/ ?>
<!DOCTYPE html>
<html><head>
<link rel="Shortcut Icon" href="__APUBLIC__images/mylogo.ico" type="image/x-icon">

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
                            <i class="menu-icon fa fa-pencil"></i>
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
                        <li class="active">个人相册</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <a href="<?php echo url('album/add'); ?>"><button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = ''> <i class="fa fa-plus"></i>Add
                    </button></a>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                                <tr>
                                                    <th width="2%" class="text-center">ID</th>
                                                    <th width="10%" class="text-center">标题</th>
                                                    <th width="20%" class="text-center">图片</th>
                                                    <th width="20%" class="text-center">是否显示在主页轮播图</th>
                                                    <th class="text-center">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <tr>

                                                    <td align="center"><?php echo $vo['id']; ?></td>
                                                    <td align="center">
                                                   <!--  <?php
                                                        echo mb_substr($vo['title'],0,2,'utf-8');
                                                    ?> -->
                                                    <?php echo $vo['imgtitle']; ?>

                                                    </td>

                                                    <td align="center">
                                                   <!--  <?php
                                                        echo mb_substr($vo['title'],0,2,'utf-8');
                                                    ?> -->
                                                    <img height="100px;" src="/images/<?php echo $vo['imgurl']; ?>" alt="">

                                                    </td>
                                                    <td align="center">
                                                    <?php if($vo['islun'] == 1): ?>
                                                    是
                                                    <?php else: ?>
                                                    否
                                                    <?php endif; ?>

                                                    </td>
                                                    <td align="center">
                                                        <a href="edit?id=<?php echo $vo['id']; ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="del?id=<?php echo $vo['id']; ?>" onclick="return confirm('是否删除')"  class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                      <?php echo $page; ?>
                                    <div>
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

	    <!--Basic Scripts-->
    <script src="__APUBLIC__style/jquery_002.js"></script>
    <script src="__APUBLIC__style/bootstrap.js"></script>
    <script src="__APUBLIC__style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__APUBLIC__style/beyond.js"></script>



</body></html>