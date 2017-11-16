<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/inner/purchase.html";i:1510642166;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php echo $config['page_title']; ?></title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css">
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/plugin/mall_balance.css">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<div class="head">
		<div class="head-title"><span class="back_home fa fa-long-arrow-left fa-1x" onclick="javascript:history(-1);"></span>交易平台</div>
	</div>
	<div>
	<form class="layui-form" method="post"  action="<?php echo url('purchase'); ?>" style="display: none"> 
		<div class="layui-row">
			<div class="layui-margin-left layui-col-xs4 layui-col-sm4">
			      <select name="interest" lay-filter="aihao">
			      	<?php if($timer['status']): if(is_array($title) || $title instanceof \think\Collection || $title instanceof \think\Paginator): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	                    <option value="<?php echo $vo['title']; ?>" <?php if($timer['title']==$vo['title']): ?>selected<?php endif; ?> ><?php echo $vo['title']; ?></option>
	                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
	                    <option value="" selected><?php if($timer['status']): ?><?php echo $timer['title']; else: ?>请选择<?php endif; ?></option>
	                    <?php if(is_array($title) || $title instanceof \think\Collection || $title instanceof \think\Paginator): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	                    <option value="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></option>
	                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
			      </select>
	      	</div>
	      	<div class="layui-margin-left layui-col-xs3 layui-col-sm3">
			       <input type="number" name="minprice" required  lay-verify="required" placeholder="最低价" autocomplete="off" class="layui-input" <?php if($times['status']): ?>value="<?php echo $times['minprice']; ?>"<?php endif; ?>>
	      	</div>
	      	<div class="layui-margin-left layui-col-xs3 layui-col-sm3">
			       <input type="number" name="maxprice" required  lay-verify="required" placeholder="最高价" autocomplete="off" class="layui-input" <?php if($times['status']): ?>value="<?php echo $times['maxprice']; ?>"<?php endif; ?>>
	      	</div>
	 	</div>
	 	<div class="layui-row">
			<div class=" layui-margin-left layui-col-xs5 layui-col-sm5"><input type="text" name="begintime" class="layui-input" id="begintime" placeholder="开始时间" <?php if($time['status']): ?>value="<?php echo $time['begintime']; ?>"<?php endif; ?>></div>
			<div class=" layui-margin-left layui-col-xs5 layui-col-sm5"><input type="text" name="endtime" class="layui-input" id="endtime" placeholder="结束时间" <?php if($time['status']): ?>value="<?php echo $time['endtime']; ?>"<?php endif; ?>></div>
	 	</div>
	 	<div class="layui-row">
			<div class=" layui-margin-left layui-col-xs5 layui-col-sm5"><input type="text" name="value" class="layui-input" id="value" placeholder="数量"  <?php if($sum['status']): ?>value="<?php echo $sum['value']; ?>"<?php endif; ?>></div>
			<span class="purchase-button"><button class="layui-icon" lay-filter="formDemo">&#xe615;</button></span>
	 	</div>
		
	</form>
		<span class="title inner-center"><i class="layui-icon">&#xe61a;</i>展开搜索</span>
	 	<hr class="layui-bg-blue">
</div>
	<div class="body">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['status'] == 1): ?>
		<div class="purchase-content">
			<div class="purchase-img">
				<?php if($vo['type'] == 1): ?>
				<div class="left-img"><img src="<?php echo $vo['pic']; ?>"></div>
				<?php else: ?>
				<div class="left-img"><img src="<?php echo $vo['pic']; ?>"></div>
				<?php endif; ?>
				<span>
					<?php if($vo['type'] == 1): ?>
					积分
					<?php else: ?>
					鱼饵
					<?php endif; ?>
				</span>
			</div>
			<div class="purchase-right-content">
				<div class="price">价格：<?php echo $vo['money']; ?></div>
				<div class="price">卖家姓名：<?php echo $vo['money']; ?></div>
				<div class="price">数量：<?php echo $vo['value']; ?></div>
				<div class="price">出售时间段：<?php echo $vo['selltime']; ?></div>
				<div class="time">上架时间：<?php echo $vo['addtime']; ?></div>
			</div>
			<div class="purchase-right-button"><button class="layui-btn layui-btn-mini" onclick="buy(<?php echo $vo['order_id']; ?>)">购买</button></div>
		</div>
		<hr>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		<span id="payform" style="display: none;">
			<form class="form1" name="form1" method="post" role="form" action="<?php echo url('pay'); ?>">
				<div class="paycheck"><input class="checked" type="checkbox" name="checkbox">&nbsp;&nbsp;余额支付</div>
				<span class="payinput" style="display: none"><input class="w80 h30 main_font_color" type="password" name="pass" autofocus placeholder="支付密码" maxlength="6"/></span>	
		</form>
		</span>
	</div>

<div style="text-align: center;">
	<?php echo $list->render(); ?>
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
<script type="text/javascript" src="__STATIC__/js/plugin/layer.js" ></script>

	<script type="text/javascript">
		layui.use(['form', 'upload','laydate'], function(){  //如果只加载一个模块，可以不填数组。如：layui.use('form')
		  var form = layui.form //获取form模块
		  ,upload = layui.upload, //获取upload模块
		   data = layui.laydate;
		  //监听提交按钮

		  data.render({
		  	elem:'#begintime',
		  	type:'datetime'
		  });
		  data.render({
		  	elem:'#endtime',
		  	type:'datetime'
		  });
		});

		$('.layui-icon').click(function(){
			$(".layui-form").submit();
		})
		$('.title').click(function(){
			if($(".layui-form").css("display")=='none'){
				$('.layui-form').css('display','');
				$('.title').html('<i class="layui-icon">&#xe619;</i> 收起搜索');
			}else{
				$('.layui-form').css('display','none');
				$('.title').html('<i class="layui-icon">&#xe61a;</i> 展开搜索');
			}
		})
		var payform = $('#payform').html();
		function buy(orderid){

			layer.open({
			  title: [
			    '购买',
			    'background-color: #22ba7f; color:#fff;',

			  ]
			   ,btn: ['确定', '取消']
			   ,skin: 'footer'
			   ,shadeClose: true
			  ,content: payform,
			  yes:function(){
			  	$('.form1').submit();
			  },
			  no:function(index){
			  	 layer.close(index);
			  }
			  
			});
			$('.checked').click(function(){
				var a='<input name="orderid" type="hidden" value="'+orderid+'">';
				$('.paycheck').append(a)
				$('.payinput').css('display','');
			});
		};
		
	</script>

</body>

</html>