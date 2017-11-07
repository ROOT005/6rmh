<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/user/passcode.html";i:1508832926;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_passcode.css">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>修改密码</title>
</head>
<body>
	<div class="change_con up">
		<form class="login_form" method="post" role="form" action="<?php echo url('password'); ?>" enctype="multipart/form-data">
		<div class="change_title">修改登录密码</div>
		<li><span class="left-side">原密码：</span><span><input type="text" name="old-password" value=""></span></li>
		<li><span class="left-side">新密码：</span><span><input type="text" name="pass" value=""></span></li>
		<li><span class="left-side">重复密码：</span><span><input type="text" name="repass" value=""></span></li>
		<li class="login_submit">修改</li>
		</form>
	</div>
	<div class="change_con down">
		<form class="pay_form" method="post" role="form" action="<?php echo url('payword'); ?>" enctype="multipart/form-data">
		<div class="change_title">修改付款密码</div>
		<li><span class="left-side">原密码：</span><span><input type="text" name="old-password" value=""></span></li>
		<li><span class="left-side">新密码：</span><span><input type="text" name="pass" value=""></span></li>
		<li><span class="left-side">重复密码：</span><span><input type="text" name="repass" value=""></span></li>
		<li class="pay_submit">修改</li>
		</form>
	</div>
	<!--底部-->
<div class="overflow">
    
</div>
<div class="footer">
        <div class="top fa fa-bars" aria-hidden="true"></div>
        <div class="footer_content">
            <li><a href="/"><span class="fa fa-home" aria-hidden="true"></span>首页</a></li>
            <li><a href=""><span class="fa fa-gamepad" aria-hidden="true"></span>游戏</a></li>
            <li><a href="/index/cart/"><span class="fa fa-shopping-cart" aria-hidden="true"></span>购物车</a></li>
            <li><a href="/index/user/"><span class="fa fa-user" aria-hidden="true"></span>个人中心</a></li>
        </div>
</div>
<script>
    $('.top').click(function(event) {
      $('.footer_content').slideToggle(200);
      $('.overflow').slideToggle(200);
    });
     $('.footer').siblings().click(function(event) {
         /* Act on the event */
          $('.overflow').slideUp(200);
         $('.footer_content').slideUp(200);
     });
</script>
<!--底部结束-->
	<script>
		$('.change_con').height($(window).height()/2.1);
		$('.login_submit').click(function(event) {
			/* Act on the event */
			$('.login_form').submit();
		});
		$('.pay_submit').click(function(event) {
			/* Act on the event */
			$('.pay_form').submit();
		});

	</script>
</body>
</html>