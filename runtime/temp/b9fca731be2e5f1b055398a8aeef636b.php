<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/index/special.html";i:1508286073;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--加载swiper的css-->
    <link rel="stylesheet" href="__CSS__/swiper-3.4.2.min.css" type="text/css"/>
    <link rel="stylesheet" href="__CSS__/animate.min.css" type="text/css"/>
    
    <link rel="stylesheet" href="__CSS__/mall_mobile_layout.css" type="text/css"/>

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>-->
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>
    
    <!--<script src="__JS__/admin/admin_default_layout.js"></script>-->
</head>
    <body>
        <a href="/index/order/index">进入我的订单</a>
        <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($goods) ? array_slice($goods,0,3, true) : $goods->slice(0,3, true); if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <h1><?php echo $vo['name']; ?></h1>
                    <p><?php echo $vo['description']; ?></p>
        <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
    </body>
</html>