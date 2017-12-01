<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\phpStudy\WWW\zxmblog\public/../application/index\view\login\index.html";i:1503983902;}*/ ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>登录注册</title>
<link rel="Shortcut Icon" href="__PUBLIC__images/mylogo.ico" type="image/x-icon">
<link rel="stylesheet" href="__PUBLIC__css/login.css">
<script type="text/javascript" src="__PUBLIC__js/jquery.js"></script>
</head>

<body>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<body>
<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>登录</h2>
            <p>点击此处即可登录.</p>
            <button class="btn_login" onclick="cambiar_login()">登录</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>注册</h2>
            <p>点击此处即可注册.</p>
            <button class="btn_sign_up" onclick="cambiar_sign_up()">注册</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="__PUBLIC__images/po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="__PUBLIC__images/po.jpg" alt="" /> </div>

        <form action="/index.php/index/login/index" method="post">
          <div class="cont_form_login"> <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
               <h2>登录</h2>

                <input type="text" placeholder="用户名" name="uname" />
                <input type="password" placeholder="密码"  name="upass" />
                <input style="text-align:center;color:white;" class="btn_login" type="submit" value="登录">
                <!-- <button class="btn_login" onclick="cambiar_login()">LOGIN</button> -->


          </div>
        </form>
        <form action="/index.php/index/login/reg" method="post">
           <div class="cont_form_sign_up"> <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
            <h2>注册</h2>
            <input type="text" id="zname" placeholder="用户名" name="zuname" />
            <input class="pas1" type="password" placeholder="密码" name="zupass" />
            <input class="pas2" type="password" placeholder="再次输入密码" />
            <input style="text-align:center;color:white;" class="btn_sign_up" id="btn_signup" type="submit" value="注册">
            <!-- <button class="btn_sign_up" onclick="cambiar_sign_up()">注册</button> -->
        </div>
        </form>

      </div>
    </div>
  </div>
</div>
<script src="__PUBLIC__js/login.js"></script>
</body>
<script>
$('#btn_signup').click(function(){
  // alert($('.pas1').val());
  var pas1=$('.pas1').val();
  var pas2=$('.pas2').val();
  var zname=$('#uname').val();
  console.log(zname);
  // alert(zname);
  if (pas1!=pas2) {
    alert('两次密码输入不一致！');
    return false;
  };
  if (zname=='') {
     alert('用户名不能为空');
       return false;
  };


})

</script>
</body>
</html>
