<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/cart/index.html";i:1505801878;s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/index.html";i:1504744427;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/header.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1504744427;}*/ ?>
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
        
<div  class=" content-panel " data-ng-controller="cartCtrl">
    <div class="more-info-navbar wp_100 ">
        <ul  >
            <li>
                <a href="javascript: void(0);">购物车</a>
            </li>
        </ul>
    </div>

    <div class="more-info-detail table-title wp_100">
        <div class=" wp_15">
            <div class="hp_100 pull-left">
                <input data-ng-model="allChecked"  data-ng-click="checkAllCart($event);" type="checkbox"/>
            </div>
            &nbsp;全选
        </div>
        <div class=" wp_50">商品</div>
        <div class=" wp_10">单价</div>
        <div class=" wp_10">数量</div>
        <div class=" wp_10">小计</div>
        <div class=" wp_5">操作</div>
    </div>
    <div class="more-info-detail wp_100" >
        <?php if(is_array($carts) || $carts instanceof \think\Collection || $carts instanceof \think\Paginator): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="cart-goods-record  wp_100">
                <div class="wp_15">
                    
                    <input data-ng-checked="allChecked" data-ng-click="checkCart($event, <?php echo $vo['cart_id']; ?>);" type="checkbox"/>
                    <a href="javascript: void(0);">
                        <img title="<?php echo $vo['sub_name']; ?>" class="cart-goods-pic" src="<?php echo $vo['pic']; ?>"/>
                    </a>
                </div>
                <div class="goods-detail wp_50">
                    <p title="<?php echo $vo['description']; ?>"><?php echo $vo['name']; ?></p>
                    <p>
                        规格：<?php echo $vo['spec']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript: void(0);" class="pull-right">
                            赠送鱼饵：<?php echo $vo['bait']; ?>个&nbsp;&nbsp;&nbsp;&nbsp;
                            获得<?php echo $vo['point']; ?>积分
                        </a>
                    </p>
                    <!--<a href="javascript: void(0);">促销活动：</a>-->
                    <?php if($vo['promotion'] != ''): ?>
                    <span class="goods-promotion " >
                        <?php echo $vo['promotion']; ?>
                    </span>
                    <?php endif; ?>

                </div>
                <div class=" wp_10">
                    <span class="font-color-sub_main">¥ <?php echo $vo['price']; ?></span>
                    
                </div>
                <div class=" wp_10">
                    <a class="number-change" href="/index/cart/setInc/id/<?php echo $vo['cart_id']; ?>/num/<?php echo $vo['num']; ?>" title="数量减1">-</a>
                    <input class="cart-goods-num" name="number" value="<?php echo $vo['num']; ?>"/>
                    <a class="number-change" href="/index/cart/setDec/id/<?php echo $vo['cart_id']; ?>/num/<?php echo $vo['num']; ?>" title="数量加1">+</a>
                </div>
                <div class=" wp_10">
                    <span class="font-color-sub_main">¥ <?php echo $vo['price']*$vo['num']; ?></span>
                    
                </div>
                <div class=" wp_5">
                    <a href="<?php echo url('cart/del', ['id'=>$vo['cart_id']]); ?>" title="删除该商品">
                        删除
                    </a>
                </div>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="more-info-navbar wp_100">
        <ul  >
            <li>
                <div class="hp_100 pull-left">
                    <input  data-ng-model="allChecked" data-ng-click="checkAllCart($event);" type="checkbox"/>
                </div>
                &nbsp;全选
            </li>
            <li> <a href="/index/cart/delete/id_list/{{cart_list}}" >删除选中商品</a></li>
            <li><a href="<?php echo url('cart/delete'); ?>" >清理下架商品</a></li>
        </ul>

        <a class="pull-right" href="/index/order/preview/id_list/{{cart_list}}" title="结算选中商品">
            <button class="submit-btn-default ">去结算</button>
        </a>
    </div>
</div>

<script>
    app.controller('cartCtrl', function($scope) {
        var all_cart = <?php echo $all_cart; ?>; //获取全部的购物车ID
        //console.log(all_cart);
        var check_list = []; //选中的ID

        $scope.cart_list = ''; //初始化
        $scope.checkAllCart = function($event){
            var checkbox = $event.target;
            if(checkbox.checked){
                check_list = all_cart;
                $scope.cart_list = check_list.join(); //把数组放入一个数组，并用分隔符分割，默认是","
            }else{
                check_list = [];
                $scope.cart_list = '';
            }
        }

        $scope.checkCart = function($event, $id){
            var checkbox = $event.target; //获取checkbox元素
            var pos = check_list.indexOf($id);
            if(checkbox.checked){ //选中
                if(pos < 0){ //不存在则添加
                    check_list.push($id); //添加元素
                }
            }else{ //取消选中
                if(pos >= 0){//存在则清除
                    check_list.splice(pos, 1); //清除
                }
            }
            
            $scope.cart_list = check_list.join();

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