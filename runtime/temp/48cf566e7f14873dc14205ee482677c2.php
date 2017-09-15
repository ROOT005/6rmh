<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/login/index.html";i:1504864343;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>登录</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_login.css">
</head>
<body>
    <p class="glyphicon glyphicon-cloud logo"></p>
    <h1 class="logo_title">亿签云</h1>
    <form action="/index/login/login" method="post" class="form col-md-10 col-md-offset-1">
         <div class="input-group input-group-lg">
           <span class="input-group-addon glyphicon glyphicon-user"></span>
           <input type="text" class="form-control phone" name="login[name]" placeholder="用户名......">
         </div>
         <div class="input-group input-group-lg">
           <span class="input-group-addon glyphicon glyphicon-link"></span>
           <input type="password" class="form-control password" name="login[password]" placeholder="请输入密码.......">
         </div>
         <button class="btn-block btn-lg" type="submit">登录</button>
    </form>
    <a  class="forget" href="" title="">忘记密码</a>
    <script src="__STATIC__/js/jquery-1.10.2.min.js"></script>
</body>
</html>