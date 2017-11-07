<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/index/special.html";i:1509354058;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--加载swiper的css-->
    <link rel="stylesheet" href="__CSS__/swiper-3.4.2.min.css" type="text/css"/>
    <link rel="stylesheet" href="__CSS__/animate.min.css" type="text/css"/>


    <link rel="stylesheet" type="text/css" href="__STATIC__/css/hexagon/mobile_hexagons.css">


    <link rel="stylesheet" href="__CSS__/mall_mobile_layout.css" type="text/css"/>
	<link rel="stylesheet" href="__CSS__/plugin/mall_mobile_footer.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>-->
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>
    
    <!--<script src="__JS__/admin/admin_default_layout.js"></script>-->

</head>
    <body id="index-body">
        <img style="height: 140px; width: 90%; margin: 10% 5%;" class="" src="__STATIC__/images/mall/index_font.png" />

        <div class="htmleaf-container" style="margin-top: 5%; margin-bottom: 100px;">
			<ul id="hexGrid" >
					<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="hex-li">
						<a href="<?php echo url('goods/detail', ['id'=>$vo['id']]); ?>">
							<div class="hex">
								<div class="hexIn">
									<img src="<?php echo $vo['img']; ?>" alt="" />
								</div>
							</div>
							<div class="hex-info wp_50" >
								<span class="product_name"><?php echo $vo['name']; ?></span>
								<br>
								<span class="product_des"><?php echo $vo['description']; ?></span>
							</div>
						</a>
					</li>
						



						
					<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
					

			</ul>
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
    </body>
    <script>
    	$('.hex-li').each(function() {
    		var h1 = $(this).find('.hex').offset().top;
    	    var hc = $(this).find('img').height()/2+h1;
    	    var hi = hc - ($(this).find('.hex-info').height()+14)/2;
    	    $(this).find('.hex-info').css('top', hi);
    	});
    </script>
</html>