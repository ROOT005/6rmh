<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/inner/index.html";i:1508310952;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1508312858;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title></title>
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_inner.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
</head>
<body>
	<div class="head">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="amount">
				<span class="score">
					<?php if($vo['name'] == 'bait'): ?>
				    	<?php echo $userinfo['bait']; else: ?>
				    	<?php echo $userinfo['point']; endif; ?>
				</span>
				<span class="title"><?php echo $vo['title']; ?></span>
				<div class="option" id="<?php echo $vo['id']; ?>">出售</div>
			</div>
			</span>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="content">
		<li class="record">购买记录</li>
		<li class="head-title">
			<span>时间</span>
			<span>名称</span>
			<span>数量</span>
			<span>价格</span>
			<span>类型</span>
			<span>卖家名称</span>
		</li>
		<?php if(is_array($log) || $log instanceof \think\Collection || $log instanceof \think\Paginator): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li class="data-content">
			<span><?php echo $vo['addtime']; ?></span>
			<span><?php echo $vo['username']; ?></span>
			<span><?php echo $vo['value']; ?></span>
			<span><?php echo $vo['money']; ?></span>
			<span>
				<?php if($vo['type'] == 1): ?>
				积分
				<?php else: ?>
				鱼饵
				<?php endif; ?>
			</span>
			<span><?php echo $vo['sellername']; ?></span>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<li class="data-foot">
			所有
		</li>
	</div>
	<div class="moudle">
		<div class="other-top"></div>
		<div class="moudle-content">
			<div class="content-title">出售信息</div>
			<hr>
			<div class="content-body">
				<form method="post" action="<?php echo url('sellgoods'); ?>" onsubmit="return check(this)">
					<li>出售数量：<input type="text" name="value"></li>
					<li>出售金额：<input type="text" name="money"></li>
					<li>出售时段：<select name="selltime">
						<option value="2" selected>2</option>
                     <option value="4">4</option>
                     <option value="6">6</option>
                     <option value="8">8</option>
                     <option value="10">10</option>
                     <option value="12">12</option>
                     <option value="14">14</option>
                     <option value="16">16</option>
                     <option value="18">18</option>
                     <option value="20">20</option>
                     <option value="22">22</option>
                     <option value="24">24</option>
					</select></li>
					<input  class="select_type" type="hidden" name="type">
				</form>
			</div>
			<div class="content-footer">
				<a class="cancel">取消</a><a class="submit">提交</a>
			</div>
		</div>
		<div class="other-bottom"></div>
		
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
	<script>
		$('.option').click(function(event) {
			$('.moudle').slideDown('fast');
			var type = $(this).attr('id');
			$('.select_type').val(type);
		});
		$('.moudle-content').siblings().click(function(event) {
			$('.moudle').slideToggle(100);
		});
		$('.cancel').click(function(event) {
			/* Act on the event */
			$('.moudle').slideToggle(100);
		});
		$('.submit').click(function(event) {
			/* Act on the event */
			$('form').submit();
		});
		function check(form){
		    if(form.value.value == ''){
		        alert('请输入出售数量！！！');
		        form.value.focus();
		        return false;
		    }
		    if(form.money.value ==''){
		        alert('请输入出售金额');
		        form.money.focus();
		        return false;
		    }
		    return true;
		}
	</script>		
</body>
</html>