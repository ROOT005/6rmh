<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/index/special.html";i:1505359730;s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/index.html";i:1504744427;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/header.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1504744427;}*/ ?>
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

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>
    
    <!--<script src="__JS__/admin/admin_default_layout.js"></script>-->
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
        
<!--special 模板-->
<!--<img style="width: 100%;" src="__STATIC__/images/mall/bg.jpg"/>-->
<p>
    <a href="/index/goods/detail/id/5">测试商品5</a>
    <br>
    <a href="/index/cart/index">购物车</a>
    <br>
    <a href="/index/order/index">订单</a>
</p>

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