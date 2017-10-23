<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"/home/aptx/File/PHP/6rmh/public/../app/index/view/cart/status.html";i:1505353820;s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/index.html";i:1507856018;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1507856018;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/header.html";i:1507856018;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1507856018;}*/ ?>
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
            <a href="{{mobile}}" target="_blank">
                <i class=" fa-li fa fa-qrcode"></i>手机商城
            </a>
        </li>
        <li>
            <a href="{{order}}" target="_blank">
                <i class=" fa-li fa fa-list-ul"></i>我的订单
            </a>
        </li>
        <li>
            <a href="{{collection}}" target="_blank">
                <i class=" fa-li fa fa-heart"></i>收藏夹
            </a>
        </li>
        <li >
            <a href="{{user}}" target="_blank">
                <i class=" fa-li fa fa-user"></i>会员中心
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
            $scope.mobile = response.data.right.mobile;
            $scope.order = response.data.right.order;
            $scope.collection = response.data.right.collection;
            $scope.user = response.data.right.user;

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
        
<style>
    /*.content{width: 100%;height: 145px;background: #f5f5f5 none repeat scroll 0 0;font-family: "Microsoft YaHei";}*/
    .succeed-box{display: block;font-family: "Microsoft YaHei";position: relative; }
    .success-lcol{float: left; margin-bottom: 50px;}
    .success-top{width:450px;height:50px;line-height: 50px;}
    .succ-icon{display :block;height: 50px;line-height: 50px;width: 32px;overflow: hidden;float: left;}
    .ftx-02{height: 50px;color: #7ABD54;}
    .success-top span {font-size: 18px;font-weight: 400;margin: 0px 5px;}
    .success-top .succ-icon img{width: 28px;height: 28px;}
    .item{width: 600px;height: 60px;margin-top: 15px;position: relative;}
    .item-img{width: 60px;height: 60px;float: left;}
    .item-title{width: 530px;height: 20px;color:#333;overflow: hidden;margin-left: 10px;float: right;position: absolute;top: 3px;right: 0px;}
    .item-title:hover{color: #e4393c;}
    .area{width: 530px;height: 20px;color:#aaa;overflow: hidden;margin-left: 10px;float: right;position: absolute;top: 25px;right: 0px;}
    .txt{float: left;color:#aaa;margin-right: 5px;}
    .success-btn{width: 340px;height: 125px;float: right;position: relative;}
    .show-detail{width: 165px;height: 36px;line-height: 36px;border: 1px solid #fff;font-size: 16px;color:#E4393C;text-align: center;background:#fff;position: absolute;bottom: 0;}
    .show-detail:hover{border: 1px solid #E4393C;}
    .go-cart{width: 165px;height: 36px;line-height: 36px;font-size: 16px;color:#fff;text-align: center;background:#E4393C;position: absolute;bottom: 0;right: 0;}
    .go-cart:hover{background:#DA1026;}
    i.fa-user-circle{color: red!important;}
</style>
<!--<div class="content">-->
    <div  class=" content-panel ">
        <!--<div data-ng-controller="goodCtrl" class="succeed-box">-->
        <div class="succeed-box">
            <div class="success-lcol">
                <div class="success-top">
                    <?php if($result['status']): ?>
                    <!--<b class="succ-icon"><img  src="__STATIC__/images/success.png"></b>-->
                    <b class="succ-icon">
                        <i class="fa fa-user-circle"></i>
                    </b>
                    <span class="ftx-02">商品已成功加入购物车！</span>
                    <?php else: endif; ?>
                </div>
                <div class="item">
                    <?php if($result['status']): ?>
                        <a href="/index/goods/detail/id/<?php echo $result['goods']['id']; ?>" ><img class="item-img" src="<?php echo $result['goods']['pic']; ?>"></a>
                        <a href="/index/goods/detail/id/<?php echo $result['goods']['id']; ?>" title="<?php echo $result['goods']['description']; ?>">
                            <div class="item-title"><?php echo $result['goods']['name']; ?></div>
                        </a>
                        <div class="area">
                            <span class="txt" title="<?php echo $result['goods']['spec']; ?>">规格：<?php echo $result['goods']['spec']; ?></span>
                            &nbsp;&nbsp;
                            <span class="txt" title="">重量：<?php echo $result['goods']['weight']; ?>kg</span>&nbsp;&nbsp;
                            <span class="txt">/ 数量：<?php echo $result['num']; ?></span>&nbsp;&nbsp;
                        
                        </div>
                    <?php else: endif; ?>
                </div>
            </div>
            <div class="success-btn">
                <a href="/index/goods/detail/id/<?php echo $result['goods']['id']; ?>" ><div class="show-detail">查看商品详情</div></a>
                <a href="/index/cart/index" ><div class="go-cart">去购物车结算 >></div></a>
            </div>
        </div>
    </div>
<!--</div>-->
    

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