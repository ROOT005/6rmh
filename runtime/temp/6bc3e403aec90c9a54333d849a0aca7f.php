<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/register/index.html";i:1507705172;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 600px)"  
href="style/css/css600.css" />  -->
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_register.css">
    <title><?php echo $header['title']; ?></title>
</head>
<body>
   <p class="glyphicon glyphicon-cloud register_logo"></p>
   <h1 class="logo_title">亿签云</h1>
  <form action="/index/register/register" method="post" class="reg_form col-md-10 col-md-offset-1">
       <div class="input-group input-group-lg">
         <span class="input-group-addon glyphicon glyphicon-phone"></span>
         <input type="text" class="form-control phone" name="phone" placeholder="请输入手机号码......." check="wrong">
         <span class="glyphicon glyphicon-remove form-control-feedback wrong_phone" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-ok form-control-feedback right_phone" aria-hidden="true"></span>
       </div>
       <div class="input-group input-group-lg">
         <span class="input-group-addon glyphicon glyphicon-link"></span>
         <input type="password" class="form-control password" name="password" placeholder="请输入密码.......">
       </div>
       <div class="input-group input-group-lg">
         <span class="input-group-addon glyphicon glyphicon-link"></span>
         <input type="password" class="form-control password-repeat"  placeholder="请再次输入密码......." check="wrong">
         <span class="glyphicon glyphicon-remove form-control-feedback wrong_password" aria-hidden="true"></span>
         <span class="glyphicon glyphicon-ok form-control-feedback right_password" aria-hidden="true"></span>
       </div>
       <div class="input-group input-group-lg">
         <span class="input-group-addon glyphicon glyphicon-tag"></span>
         <input type="text" class="form-control verify" name="verify" placeholder="请输入短信验证码......." check="right">
         <a href="javascript:void(0)" class="input-group-addon btn send_sms" onclick="sendM()" >发送</a>
         <span class="showtime" style="display: none;"><span class="time_info"></span>秒后重新发送</span>
       </div>
       <button class="btn-block btn-lg" type="submit" onclick="return checkForm()">注册</button>
  </form>
  <script src="__STATIC__/js/jquery-1.10.2.min.js"></script>
  <script src="__STATIC__/js/form_verify.js"></script>
</body>
</html>