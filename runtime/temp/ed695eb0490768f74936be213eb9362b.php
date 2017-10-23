<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/order/index.html";i:1508481650;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1508312858;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_order.css">
    <link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>我的订单</title>
	<link rel="stylesheet" href="">
</head>
<body>
    <div class="head-title">
        我的订单
    </div>
	<?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <div class="order_info">
            <div class="order_title">
                <span class="add_time"><?php echo $vo['order']['addtime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="">订单号：<?php echo $vo['order']['order_id']; ?></span>
            </div>
            <?php if(is_array($vo['detail']) || $vo['detail'] instanceof \think\Collection || $vo['detail'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['detail'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <div class="order_detail">
                <img src="<?php echo $v['pic']; ?>" alt="图片不见了">
                <div><?php echo $v['goods_name']; ?></div>
                <div class="spac"><?php echo $v['spec']; ?> * <?php echo $v['num']; ?></div>
                <?php if($v['promotion'] != ''): ?>
                    <div>
                        <span class="promotion"><?php echo $v['promotion']; ?></span>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="order_footer">
                <span class="user_info">
                    <span class="fa fa-user-circle-o" aria-hidden="true"></span>
                    <span class="">&nbsp;<?php echo $vo['order']['user_name']; ?></span>
                </span>
                <span class="price">
                    ￥<?php echo $vo['order']['money']; ?>
                </span>
                <span class="status">
                    <?php switch($vo['order']['status']): case "1": ?>待支付<?php break; case "2": ?>待发货<?php break; case "3": ?>待收货<?php break; case "4": ?>已完成<?php break; default: ?>其他
                    <?php endswitch; ?>
                </span>
                <span class="option">
                    <?php switch($vo['order']['status']): case "1": ?>
                            <a href="/index/wxpay/index?type=order&id=<?php echo $vo['order']['order_id']; ?> ">
                                <?php echo $vo['order']['payment_name']; ?>
                            </a>
                        <?php break; case "2": ?>
                            提醒发货
                        <?php break; case "3": ?>
                            确认收货
                        <?php break; case "4": ?>
                            评价
                        <?php break; default: ?>其他
                    <?php endswitch; ?>
                </span>
            </div>  
       </div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
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
        var dewidth = $('.order_info').width()/$('.order_detail').length;
        $('.order_detail').width(dewidth);
        $('.order_info').click(function(event){
             $('.order_detail').width(dewidth/2);
        });
        $('.order_detail').click(function(event) {
            /* Act on the event */
            $(this).width('50%');
            $(this).siblings().width(dewidth/2);
            $('.order_title').width('100%');
            $('.order_footer').width('100%');
            event.stopPropagation();
        });
    </script>
</body>
</html>