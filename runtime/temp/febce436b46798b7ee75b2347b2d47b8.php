<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/user/index.html";i:1508823646;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1508312858;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php echo $config['page_title']; ?></title>
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_user.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://cdn.bootcss.com/bootstrap-fileinput/4.4.2/css/fileinput.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap-fileinput/4.4.2/js/fileinput.min.js"></script>
</head>
<body>
	<div class="head">		
		<span class="back_home fa fa-long-arrow-left fa-1x" onclick="location.assign('/')"></span>
		<span class="setting fa fa-cog fa-1x"></span>
		<img class="hp_100 wp_100 o_h" src="<?php echo $users['headimgurl']; ?>" alt="用户头像未显示">
		<span class="user_name"><?php echo $users['name']; ?></span>
	</div>
	<div class="body">
		<ul>
			<li>
				<a href="/index/order" class="fa fa-thumb-tack fa-3x" aria-hidden="true"></a>
				<div>我的订单</div>
			</li>
			<li>
				<a href="/index/inner" class="fa fa-pie-chart fa-3x" aria-hidden="true"></a>
				<div>我的资产</div>
			</li>
			<li>
				<a href="/index/Log/index/type/bait" class="fa fa-tags fa-3x" aria-hidden="true"></a>
				<div>鱼饵明细</div>
			</li>
			<li>
				<a href="/index/Log/index/type/point" class="fa fa-ticket fa-3x" aria-hidden="true"></a>
				<div>积分明细</div>
			</li>
			<li>
				<a href="/index/Log/index/type/balance" class="fa fa-credit-card fa-3x" aria-hidden="true"></a>
				<div>余额明细</div>
			</li>
			<li>
				<a href="/index/balance/recharge" class="fa fa-paper-plane fa-3x" aria-hidden="true"></a>
				<div>余额充值</div>
			</li>
			<li>
				<a href="/index/balance/withdraw" class="fa fa-paper-plane fa-3x" aria-hidden="true"></a>
				<div>余额提现</div>
			</li>
			<li>
				<a href="/index/inner/purchase" class="fa fa-random fa-3x" aria-hidden="true"></a>
				<div>交易大厅</div>
			</li>
		</ul>
	</div>
	<div class="setting-content">
		<form method="post" role="form" action="<?php echo url('editor'); ?>" enctype="multipart/form-data">
		<div class="change_info">
			<img class="hp_100 wp_100 o_h" src="<?php echo $users['headimgurl']; ?>" alt="用户头像未显示">
			<div class="change_cont">
				<span class="left">昵称：</span>
				<span class="right"><input id="shows" class="" type="text" name="name" value="<?php echo $users['name']; ?>" required></span>
			</div>
			<div class="change_cont">
			    <span class="left">真实姓名：</span>
			    <span class="right"><?php echo $users['realname']; ?></span>
			</div>
			<div class="change_cont">
			    <span class="left">性别：</span>
			    <span class="right">
			        <?php if($users['sex']==1): ?>
			        <input type="radio" name="sex" value="1" checked/>&nbsp;男&nbsp;&nbsp;
			        <input type="radio" name="sex" value="0" />&nbsp;女
			        <?php else: ?>
			        <input type="radio" name="sex" value="1" />&nbsp;男&nbsp;&nbsp;
			        <input type="radio" name="sex" value="0" checked/>&nbsp;女
			        <?php endif; ?>
			    </span>
			</div>
			<div class="change_cont">
			    <span class="left">手机号：</span>
			    <span class="right"><input id="mobile" class="w150 h30 f_c" type="text" name="mobile" value="<?php echo $users['mobile']; ?>" pattern='^\d{11}$'></span>
			    
			</div>
			<div class="change_cont">
			    <span class="left">QQ：</span>
			    <span class="right"><input id="qq" class="w150 h30 f_c" type="text" name="qq" value="<?php echo $users['qq']; ?>"></span>
			    
			</div>
			<div class="change_cont">
			    <span class="left">邮箱：</span>
			    <!-- 正则邮箱验证 pattern='/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$/' -->
			    <span class="right"><input id="email" class="w150 h30 f_c" type="text" name="email" value="<?php echo $users['email']; ?>" ></span>
			    
			</div>
			<div class="change_cont">
			    <span class="left">上传头像：</span>
			    <span class="right">
			        <div class="">
			            <input id="headimg" type="file" accept="image/*" name="headimg" upurl=""/>
			        </div>
			       <!--  <script>
			           initFileInput('headimg', $('input#headimg').attr('upurl'));
			       </script> -->
			    </span>
			</div>
			<div class="change_cont submit-button">
				提交
			</div>
		</div>
		</form>
		<li class="menu"><span class="fa fa-map-marker" aria-hidden="true"></span><a href="/index/address/index" title="">收货地址</a></li>
		<li class="menu"><span class="fa fa-pencil" aria-hidden="true"></span><a href="/index/user/passcode" title="">修改密码</a></li>
		<li class="qr">
			<a href="javascript: void(0);" title="点击更新二维码">
           	<img class="f_r" style="height: 120px; width: 120px;" src="<?php echo $cookie['qr_code']; ?>"/>
           </a>
       </li>
       <li class="qr">
       		<?php if($cookie['subscribe']==2): ?>
       		    请尽快绑定微信
       		<?php else: ?>
       		    我的推广二维码
       		<?php endif; ?>
       </li>
	</div>
	<!--底部-->
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
    });
     $('.footer').siblings().click(function(event) {
         /* Act on the event */
         $('.footer_content').slideUp(200);
     });
</script>
<!--底部结束-->
</body>
<script>
	$('.body li').css('height', $('.body li').width());
	$('.setting-content').height($(document).height());
	$('.setting').click(function(event) {
		/*$('.setting-content').animate({'right':'0' }, 200);*/
		/*$('.setting-content').css('width','75%');*/
		$('.setting-content').css('display','block');
		event.stopPropagation();
	});
	$('.setting-content').siblings().click(function(event) {
		/*$('.setting-content').animate({'right':'-75%' }, 500);*/
		/*$('.setting-content').css('width','0');*/
		$('.setting-content').css('display','none');
	});
	$('.submit-button').click(function(event) {
		$('form').submit();
	});
</script>
</html>