<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/balance/recharge.html";i:1510629558;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title></title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_recharge.css">
</head>
<body>
	<div class="container">
		<div class="re_form" >
			<form class="form-inline" method="post" role="form" action="<?php echo url('opRecharge'); ?>">
			  <div class="form-group">
			    <label class="sr-only" for="recharge_amount">提现金额</label>
			    <div class="input-group">
			      <div class="input-group-addon sign">￥</div>
			      <input type="text" name="money" value="" class="form-control" id="recharge_amount" placeholder="请输入提现金额">
			      <div class="input-group-addon form_submit">提现</div>
			    </div>
			  </div>  
			</form>
		</div>
		<div class="re_list">
			<div class="panel panel-default">
			  <div class="panel-heading">充值记录</div>
			  <table class="table">
			    <tr class="list_content">
			    	<td>订单号</td>
			    	<td>时间</td>
			    	<td>名字</td>
			    	<td>金额</td>
			    	<td>方式</td>
			    	<td>状态</td>
			    </tr>
			    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			    	<tr class="list_content">
			    		<td><?php echo $vo['order_id']; ?></td>
			    		<td><?php echo date('Y-m-d H:i:s',$vo['addtime']); ?></td>
			    		<td><?php echo $vo['name']; ?></td>
			    		<td>¥ <?php echo $vo['money']; ?></td>
						<td>
							<?php if($vo['type'] == 1): ?>
							电脑端
							<?php else: ?>
							手机端
							<?php endif; ?>
						</td>
						<td>
							<?php if($vo['status'] == 1): ?>
							申请充值
							<?php elseif($vo['status'] == 2): ?>
							充值成功
							<?php else: ?>
							驳回
							<?php endif; ?>
						</td>
			    	</tr>
			    <?php endforeach; endif; else: echo "" ;endif; ?>
			  </table>
			</div>
		</div>
	</div>
	<div class="page_footer">
		<?php echo $list->render(); ?>
	</div>
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="__STATIC__/js/bootstrap.min.js"></script>
	<script>
		$('.form_submit').click(function(event) {
			$('form').submit();
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