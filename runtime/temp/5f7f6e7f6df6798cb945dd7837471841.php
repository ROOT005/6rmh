<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/balance/withdraw.html";i:1508832926;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php echo $config['page_title']; ?></title>
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/plugin/mall_balance.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<!-- 顶部提现表单开始 -->
<div class="head" >
	<div class="head-content">
		<form method="post" id="form" role="form" action="<?php echo url('opwithdraw'); ?>">

			<span class="content-top"><div class="back_home fa fa-long-arrow-left fa-1x" onclick="location.assign('/')"></div>申请提现</span>
				<span>
					<div class="col-xs-2"></div>
					<div class="col-xs-8">
					    <input type="text" class="form-control" name="value" placeholder="请输入金额">
					</div>
				</span>
				<span>
				<div class="col-xs-"></div>
					<div class="col-xs-2"></div>
					<div class="col-xs-8">
					    <input type="password" class="form-control" name="pay_code" placeholder="请输入密码">
					</div>
				</span>
		</form>
		<span><button onclick="javascript:submit();">提现</button><button onclick="slide()">取消</button></span>
	</div>
	<div class="topp fa fa-arrow-up" aria-hidden="true">申请提现</div>

</div>
<!-- 顶部提现表单结束 -->
<div class="body">
	<span class="withdraw-span"><span>提现记录</span></span>
	<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="withdraw row">
			<div class="col-xs-7"><?php echo $vo['addtime']; ?></div>
			<div class="col-xs-5">姓名：<?php echo $vo['name']; ?></div>
			<div class="col-xs-7">金额：¥ <?php echo $vo['value']; ?></div>
			<div class="col-xs-5">方式：
				<?php if($vo['type'] == 1): ?>
                电脑端
                <?php else: ?>
                手机端
                <?php endif; ?>
			</div>
			<div class="col-xs-7">IP:<?php echo $vo['terminal']; ?></div>
			<div class="col-xs-5">状态：
				<?php if($vo['status'] == 1): ?>
                申请提现
                <?php elseif($vo['status'] == 2): ?>
                提现成功
                <?php else: ?>
                驳回
                <?php endif; ?>
			</div>
			<div class="col-xs-7">
				<?php if($vo['status']==3): ?>
                驳回理由：<?php echo $vo['opreason']; endif; ?>
			</div>
			

		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<span><?php echo $list->render(); ?></span>
	  　
</div>
	<script type="text/javascript">
		function submit(){$('#form').submit()}
		function slide(){$('.head-content').slideUp(200);}
		$('.topp').click(function(event) {
      		$('.head-content').slideToggle(200);
    	});
    	$('.head').siblings().click(function(event) {
    	    $('.head-content').slideUp(200);
    	});
	</script>
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
</body>
</html>