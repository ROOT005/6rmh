<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/order/preview.html";i:1508832185;s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/index.html";i:1510619768;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1510619768;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/header.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <title><?php echo $config['page_title']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--加载swiper的css-->
    <link rel="stylesheet" href="__CSS__/swiper-3.4.2.min.css" type="text/css"/>
    <link rel="stylesheet" href="__CSS__/animate.min.css" type="text/css"/>

    <link rel="stylesheet" href="__CSS__/mall_default_layout.css" type="text/css"/>
     <!--引用六边形样式-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/hexagon/hexagons.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--<script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>-->
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <!--<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>-->
    
    <!--<script src="__JS__/mall/mall_default_layout.js"></script>-->
   
</head>
<body data-ng-app="myApp" class="web-body" >
    <header class=" web-top  wp_100 ">
        <div data-ng-controller="topCtrl" class="content-panel line-height-26">
    <ul class="fa-ul pull-left">
        
        <li data-ng-repeat="x in top">
            <a href="{{x.url}}" ng-bind="x.title"><i class="{{x.iconfont}}"></a>
        </li>
    </ul>
    
    <ul class="fa-ul pull-right">
        <li>
            <a href="{{logout}}">
                <i class=" fa-li fa fa-user"></i>注销
            </a>
        </li>
        <li>
            <a href="{{mobile}}" target="_blank">
                <i class=" fa-li fa fa-qrcode"></i>手机商城
            </a>
        </li>
        <li>
            <a href="/index/help/index" target="_blank">
                <i class=" fa-li fa fa-hand-paper-o"></i>帮助中心
            </a>
        </li>
        <li>
            <a href="{{order}}" target="_blank">
                <i class=" fa-li fa fa-list-ul"></i>我的订单
            </a>
        </li>
        
        <li>
            <a href="{{cart}}" target="_blank">
                <i class=" fa-li fa fa-heart"></i>购物车
            </a>
        </li>
        <li >
            <a href="{{user}}" target="_blank">
                <i class=" fa-li fa fa-user"></i>会员中心
            </a>
        </li>
        <li>
            <a href="{{index}}" target="_blank">
                <i class=" fa-li fa fa-qrcode"></i>进入商城
            </a>
        </li>
        
    </ul>

</div>
<script>
    var app = angular.module('myApp', []);
    app.controller('topCtrl', function($scope, $http){
        $http.get('/index/index/topInfo')
        .then(function successCallback(response){
            $scope.top = response.data.left;
            
            $scope.logout = response.data.right.logout;
            $scope.mobile = response.data.right.mobile;
            $scope.order = response.data.right.order;
            $scope.cart = response.data.right.cart;
            $scope.user = response.data.right.user;
            $scope.index = response.data.right.index;

        }, function errorCallback(response){
            console.log('失败');
        });
    });

</script>
    </header>

    <!--如果是常规页面，显示头部信息；直推页面，不显示-->
    <?php if($config['template'] == 'index'): ?>
        <header class="web-header wp_100 pull-left">
            <div  class="header-panel hp_100 content-panel">

    <a href="javascript: void(0);">
        <img id="web-logo" class= "pull-left" src="__STATIC__/images/mall/logo.jpg"/>
    </a>

    <div class="search-div pull-left hp_100 w800">
        <form method="post" action="" >
            <input id="web-keywords-input" name="keywords" class="" value="" placeholder=""/>
            <button id="web-keywords-button" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
        <ul class="hot-search">
            <li class="pull-left">
                <a href="javascript: void(0);">魅蓝note6</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">99元100张</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">微波炉</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">电冰箱</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">MacBook Pro</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">oppo手机</a>
            </li>
            <li class="pull-left">
                <a href="javascript: void(0);">六耳泥猴</a>
            </li>

            <li class="pull-left">
                <a href="javascript: void(0);">魅蓝note6</a>
            </li>

        </ul>

        
    </div>
    
    <div class="pull-right shop-cart text-center">
        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;购物车
    </div>




    <!--<img id="web-qrcode" class=" pull-right" src="__STATIC__/images/company/qrcode.jpg"/>-->
</div>
<!--<script>
    app.controller('headerCtrl', function($scope, $http){
        
    });
</script>-->
        </header>
        <!--<div class="web-navbar h40 wp_100 pull-left">
            
        </div>-->
    <?php endif; ?>

    <!--主要内容页面-->
    <div class="web-content wp_100 pull-left">
        
<div  class=" content-panel order-preview-html " ng-controller="previewCtrl">
    <form action="<?php echo url('order/create'); ?>" method="post">

    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left"> 收货人信息</h3>
            <a href="javascript: void(0);" class="pull-right">新增收货地址</a>
        </div>
        <div class="panel-body">
            <?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="address-record wp_100">
                    <div class="f_l t_c addr-item-title wp_10" title="<?php echo $vo['name']; ?>" ng-class="{choseAddr: <?php echo $vo['id']; ?>==addrID}" data-ng-click="selectAddr(<?php echo $vo['id']; ?>)"><?php echo $vo['name']; ?></div>
                    <div class="f_l addr-item-content wp_70" ng-class="{choseDiv: <?php echo $vo['id']; ?>==addrID}"><?php echo $vo['name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $vo['province']; ?>&nbsp;
                        <?php echo $vo['city']; ?>&nbsp;
                        <?php echo $vo['area']; ?>&nbsp;
                        <?php echo $vo['address']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo substr($vo['mobile'],0,3); ?>****<?php echo substr($vo['mobile'],7); if($vo['type']==1): ?>
                        <span class="f_r main-color">默认地址</span>
                        <?php endif; ?>
                    </div>
                    <div class="f_r t_r addr-item-ctrl wp_15">
                        <?php if($vo['type'] != 1): ?>
                            <a href="/index/order/defaddr/id_list/<?php echo $id_list; ?>/id/<?php echo $vo['id']; ?>">设为默认</a>
                            &nbsp;&nbsp;
                        <?php endif; ?> 
                        <a href="javascript: void(0);">编辑</a> 
                        <!--&nbsp;&nbsp;
                        <a href="/index/order/deladdr/id_list/<?php echo $id_list; ?>/id/<?php echo $vo['id']; ?>">删除</a> -->
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> 
                支付方式   &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="hint-str">
                    <input name="money_first" type="checkbox"/>优先使用余额
                </span>
                
            </h3>
        </div>
        <div class="panel-body">
            <ul>
                <?php if(is_array($pay_way) || $pay_way instanceof \think\Collection || $pay_way instanceof \think\Paginator): $i = 0; $__LIST__ = $pay_way;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class=" default-spec-li" name="pay_way" ng-class="{chosePay: <?php echo $vo['id']; ?>==isChose}" ng-click="paySelect(<?php echo $vo['id']; ?>);"><?php echo $vo['name']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> 配送方式 </h3>
        </div>
        <div class="panel-body">
            <ul>
                <?php if(is_array($delivery) || $delivery instanceof \think\Collection || $delivery instanceof \think\Paginator): $i = 0; $__LIST__ = $delivery;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class=" default-spec-li" name="delivery" ng-class="{chosePay: <?php echo $vo['id']; ?>==delivery}" ng-click="deliverySelect(<?php echo $vo['id']; ?>);"><?php echo $vo['title']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            <div class=" f_l wp_70 panel-title">商品详情</div>
            <div class=" f_l wp_10 panel-title">单价</div>
            <div class=" f_l wp_10 panel-title">数量</div>
            <div class=" f_l wp_10 panel-title">小计</div>
        </div>
        <div class="panel-body more-info-detail">
            <?php if(is_array($carts) || $carts instanceof \think\Collection || $carts instanceof \think\Paginator): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="cart-goods-record  wp_100">
                    <div class="wp_15">
                        
                        <a href="javascript: void(0);">
                            <img title="<?php echo $vo['sub_name']; ?>" class="cart-goods-pic" src="<?php echo $vo['pic']; ?>"/>
                        </a>
                    </div>
                    <div class="goods-detail wp_55">
                        <p title="<?php echo $vo['description']; ?>"><?php echo $vo['name']; ?></p>
                        <p>
                            规格：<?php echo $vo['spec']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="hint-str pull-right">
                                赠送鱼饵：
                                <span class="hint-int"><?php echo $vo['bait']*$vo['num']; ?></span>个&nbsp;&nbsp;&nbsp;&nbsp;
                                获得<span class="hint-int"><?php echo $vo['point']*$vo['num']; ?></span>积分
                            </span>
                        </p>
                        <?php if($vo['promotion'] != ''): ?>
                            <span class="goods-promotion " > <?php echo $vo['promotion']; ?> </span>
                        <?php endif; ?>
                    </div>
                    
                    <div class=" wp_10"> ¥ <?php echo $vo['price']; ?></div>
                    <div class=" wp_10"><?php echo $vo['num']; ?></div>
                    <div class=" wp_10">
                        <span class="font-color-sub_main">¥ <?php echo $vo['price']*$vo['num']; ?></span>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                订单详情
            </h3>
        </div>
        <div class="panel-body t_r">
            <p>鱼饵：<?php echo $count['baits']; ?></p>
            <p>积分：<?php echo $count['points']; ?></p>
        </div>
    </div>
    

    <!--<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                发票信息
            </h3>
        </div>
        <div class="panel-body">
            面板内容
        </div>
    </div>-->
<!---->
    <div class="more-info-navbar wp_100">
        <input type="hidden" name="id_list" value="<?php echo $id_list; ?>"/><!--商品列表ID-->
        <input type="hidden" name="pay" value="{{isChose}}"/><!--支付方式-->
        <input type="hidden" name="addr" value="{{addrID}}"/><!--收货地址-->
        <input type="hidden" name="delivery" value="{{delivery}}"/><!--配送方式-->

        <a class="pull-right" href="javascript: void(0);" title="提交订单">
            <button type="submit" class="submit-btn-default ">提交订单</button>
        </a>

        <span class="f_r order-total">
            
            应付总额：
            <span class="font-color-sub_main">¥</span>
            <span class=" price" title="订单总价格" ><?php echo $count['prices']; ?></span>
        </span>
    </div>
    </form>
</div>

<script>
    app.controller('previewCtrl', function($scope) {
        $scope.isChose = 1;
        $scope.addrID = <?php echo $address[0]['id']; ?>; //默认是默认地址的ID
        $scope.delivery = 1;
        $scope.paySelect = function($id) {
            $scope.isChose = $id;
        }
        $scope.selectAddr = function($id){
            $scope.addrID = $id;
        }
        $scope.deliverySelect = function($id){
            $scope.delivery = $id;
        }
    });



</script>

    </div>
        

    <div class="web-footer wp_100 pull-left">
        <div  data-ng-controller="footerCtrl"  class="footer login-footer hp_100 wp_100 text-center">
    <p>
        <a class="ng-cloak" ng-cloak data-ng-repeat="x in footers" href="{{x.url}}" target="_blank" ng-bind="x.title"></a>
    </p>
    <p ng-bind="company"></p>
</div>
<script>
    
    app.controller('footerCtrl', function($scope, $http){
        $http.get('/index/index/footerinfo')
        .then(function successCallback(response){
            $scope.footers = response.data.footer;
            $scope.company = response.data.company;
        }, function errorCallback(response){

        });
    });

</script>
    </div>

    
    <!--加载swiper--> 
    <script src="__STATIC__/js/plugin/swiper3/swiper-3.4.2.jquery.min.js"></script>
    <script src="__STATIC__/js/plugin/swiper3/swiper.animate1.0.2.min.js"></script>
</body>
</html>