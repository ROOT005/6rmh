<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/log/point.html";i:1508832926;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1508832926;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title></title>
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_bait.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
	<script src="__JS__/plugin/laydate/laydate.js"></script>
</head>
<body>
	<div class="head">
		<div>积分明细</div>
		<div class="head-content">
			 <form  method="post" role="form" action="<?php echo url('index', ['type'=>'point']); ?>" onsubmit="return check(this)">
				<li>开始时间：&nbsp<input id="endtime" class="layui-input begintime" type="text" name="endtime" <?php if($time['status']): ?>value="<?php echo $time['endtime']; ?>"<?php endif; ?> readonly="readonly"></li>
				<li>结束时间：&nbsp<input id="begintime" class="layui-input begintime" type="text" name="begintime" <?php if($time['status']): ?>value="<?php echo $time['begintime']; ?>"<?php endif; ?> readonly="readonly"></li>
				<li class="submit">搜索</li>
			</form>
		</div>
	</div>
	<div class="data-content">
		<li class="content-head">
			<span>时间</span>
			<span>名字</span>
			<span>积分</span>
			<span>类型</span>
		</li>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li class="content-body">
			<span><?php echo $vo['addtime']; ?></span>
			<span><?php echo $vo['name']; ?></span>
			<span><?php echo $vo['value']; ?></span>
			<span>
				<?php if($vo['type'] == 1): ?>
				获得积分
				<?php else: ?>
				消耗积分
				<?php endif; ?>
			</span>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
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
	    laydate.render({
	      elem: '#begintime', //指定元素
	      type: 'datetime'
	    });
	    laydate.render({
	      elem: '#endtime', //指定元素
	      type: 'datetime'
	    });
	    function check(form){
	        if(form.begintime.value == '' || form.endtime.value ==''){
	            alert('请输入开始时间和结束时间！！！');
	            form.begintime.focus();
	            form.endtime.focus();
	            return false;
	        }
	        return true;
	    }
	    $('.submit').click(function(event) {
	    	/* Act on the event */
	    	$('form').submit();
	    });
	</script>
</body>
</html>