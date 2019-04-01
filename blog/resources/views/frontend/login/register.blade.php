<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>1607AThreeGroup</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="{{asset('backends/Login/css/style.css')}}" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="{{asset('backends/Login/js/jquery.js')}}"></script>
<script src="{{asset('backends/Login/js/verificationNumbers.js')}}"></script>
<script src="{{asset('backends/Login/js/Particleground.js')}}"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
});
</script>
</head>
<body>

<dl class="admin_login">
 <dt>
  <strong>ThreeGroup注册系统</strong>
  <em>we are superman</em>
 </dt>
 <form action="" method="post">
 @csrf
 <dd class="user_icon">
  <input type="text" name="accountNumber" placeholder="账号" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" name="pwd" placeholder="密码" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="text" name="nickName" placeholder="昵称" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="text" name="phone" placeholder="手机号码" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="email" name="email" placeholder="邮箱" class="login_txtbx"/>
 </dd>
 <dd style="margin-left:30%;margin-top:10%">
    <select name="userType" id="">
        <option value="1">注册管理员</option>
        <option value="2">注册商家</option>
        <option value="3" selected = "selected">注册普通用户</option>
    </select>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="submit" value="立即注册" class="submit_btn" id="register"/>
 </dd>
 </form>
 <dd>
 
  <p>© 2015-2016 DeathGhost 版权所有</p>
  <p>陕B2-20080224-1</p>
 </dd>
</dl>
</body>
</html>
