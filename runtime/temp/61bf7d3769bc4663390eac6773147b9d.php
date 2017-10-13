<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/goods/detail.html";i:1505370625;s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/index.html";i:1506132572;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/header.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/navbar.html";i:1504744427;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1504744427;}*/ ?>
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
    <script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>
    
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
        
<div  class=" content-panel ">
    <!--导航栏-->
    <!--<div  class="navbar-panel">
    <ul  >
        <li  >
            <a href="javascript: void(0);">本期直推</a>
        </li>
        <li class="li-split">/</li>
        <li   >
            <a href="javascript: void(0);">数码</a>
        </li>
        <li class="li-split" >/</li>
        <li  >
            <a href="javascript: void(0);">商家入驻</a>
        </li>
        <li class="li-split" >/</li>
        <li  >
            <a href="javascript: void(0);">购买历史</a>
        </li>
        <li class="li-split" >/</li>
        <li  >
            <a href="javascript: void(0);">生鲜</a>
        </li>
        <li class="li-split" >/</li>
        <li  >
            <a href="javascript: void(0);">帮助中心</a>
        </li>
        <li class="li-split" >/</li>
        <li  >
            <a href="<?php echo url('goods/detail', ['id'=>5]); ?>">测试商品5</a>
        </li>
    </ul>
</div>-->
    
    <div data-ng-controller="goodsCtrl" class="goods-detail-panel wp_100">
        <div class="goods-picture wp_40  pull-left">
            <style>
                .tb-thumb li{float: left;}

                .tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
                .tb-pic a img{vertical-align:middle;}
                .tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
                .tb-thumb{margin:10px 0 0;overflow:hidden;}
                .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
                .tb-s310, .tb-s310 a{height:310px;width:310px;}
                .tb-s310, .tb-s310 img{max-height:310px;max-width:310px;}
                .tb-s310 a{*font-size:271px;}
                .tb-s40 a{*font-size:35px;}
                .tb-s40, .tb-s40 a{height:40px;width:40px;}
                .tb-booth{border:1px solid #CDCDCD;position:relative;z-index:1;}
                .tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px;}
                .tb-thumb .tb-selected div{background-color:#FFFFFF;border:medium none;}
                .tb-thumb li div{border:1px solid #CDCDCD;}
                div.zoomDiv{z-index:999; position:absolute; top:0px; left:0px; width:303.75px; height:303.75px;
                    background:#ffffff; border:1px solid #CCCCCC; display:none; text-align:center; overflow:hidden;}
                div.zoomMask{position:absolute; background:url("images/mask.png") repeat scroll 0 0 transparent;cursor:move;z-index:1;}
            </style>
            <div class="main-pic wp_100">
                <a href="__STATIC__/images/01.jpg">
                    <img src="__STATIC__/images/01_mid.jpg" alt="美女" rel="__STATIC__/images/01_mid.jpg" id="jqzoom" class="jqzoom" />
                </a>
            </div>
            
            <ul class="tb-thumb" id="thumblist">
                <li class="tb-selected"><div class="tb-pic tb-s40"><a href="javascript: void(0);"><img src="__STATIC__/images/01_small.jpg" mid="__STATIC__/images/01_mid.jpg" big="__STATIC__/images/01.jpg"></a></div></li>
                <li><div class="tb-pic tb-s40"><a href="javascript: void(0);"><img  src="__STATIC__/images/02_small.jpg" mid="__STATIC__/images/02_mid.jpg" big="__STATIC__/images/02.jpg"></a></div></li>
                <li><div class="tb-pic tb-s40"><a href="javascript: void(0);"><img src="__STATIC__/images/03_small.jpg" mid="__STATIC__/images/03_mid.jpg" big="__STATIC__/images/03.jpg"></a></div></li>
                <li><div class="tb-pic tb-s40"><a href="javascript: void(0);"><img src="__STATIC__/images/04_small.jpg" mid="__STATIC__/images/04_mid.jpg" big="__STATIC__/images/04.jpg"></a></div></li>
                <li><div class="tb-pic tb-s40"><a href="javascript: void(0);"><img src="__STATIC__/images/05_small.jpg" mid="__STATIC__/images/05_mid.jpg" big="__STATIC__/images/05.jpg"></a></div></li>
            </ul>
        </div>
        <div class="goods-detail wp_60 pull-left">
            <h4><?php echo $goods['name']; ?> </h4>
            <p class="goods-desc" title="<?php echo $goods['description']; ?>"><?php echo $goods['description']; ?></p>
            <div class="goods-price  wp_100">
                <p>
                    
                    
                    <?php if($goods['promotion']['type'] == 1): ?>
                    <span class="item-title">促销价：</span>
                    <span class="font-color-sub_main">¥</span>
                    <span class=" price" title="折扣后价格" ng-bind="{{real_price|number:2}}"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <s >六儿价:<span ng-bind="{{price}}"></span></s>

                    <?php else: ?>
                    <span class="item-title">六 儿 价：</span>
                    <span class="font-color-sub_main">¥</span>
                    <span class=" price" ng-bind="{{price}}"></span>
                    <?php endif; ?>
                    
                </p>
                <p>
                    <span class="item-title">促 销：</span>
                    <span class="goods-promotion " title="<?php echo $goods['promotion']['description']; ?>">
                    <?php echo $goods['promotion']['title']; ?>
                    </span>
                </p>
                <p>
                    <span class="item-title">来 源：</span>
                    <?php if($goods['userid'] == 0): ?>
                        六儿官方
                    <?php else: ?>
                        来源不明
                    <?php endif; ?>
                </p>
            </div>
            
            <p class="goods-info">
                <span class="item-title">重量：</span>
                <?php echo $goods['weight']; ?>kg
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
                <?php if($goods['free_shipping'] ==1): ?>
                    免运费 
                <?php endif; ?>
            </p>
            
            <ul>
                <li><span class="item-title">选择规格：</span></li>
                <style>
                    
                </style>
                <?php if(is_array($goods['spec']) || $goods['spec'] instanceof \think\Collection || $goods['spec'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods['spec'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class=" default-spec-li" ng-class="{choseSpec: <?php echo $vo['id']; ?>==isChose}" ng-click="specSelect(<?php echo $vo['id']; ?>);"><?php echo $vo['spec']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

            
            <div class="amount-number wp_100">
                <p style="line-height: 45px;"><span class="item-title">库存：</span><?php echo $goods['amount']; ?>
                <!--<i class="deal-num-fa fa fa-plus-square-o"></i>-->
                <input id="buy-number" ng-model="buy_number" title="填写购买数量"/>
                <!--<i class="deal-num-fa fa fa-minus-square-o"></i>-->

                </p>
                
            </div>
            <div class="goods-buy wp_100">
                <!--立即购买-->
                <!--<a href="/index/sale/buy/id/<?php echo $goods['id']; ?>/spec/{{specValue}}/num/{{buy_number}}">
                    <div>立即购买</div>
                </a>-->

                <a href="/index/cart/add/id/<?php echo $goods['id']; ?>/spec/{{specValue}}/num/{{buy_number}}" title="加入购物车">
                    <button class="submit-btn ">加入购物车</button>
                </a>

                <!--<a href="/index/sale/collect/id/<?php echo $goods['id']; ?>">
                    <div>收藏</div>
                </a>-->
                
            </div>
            <p class="goods-service">
                <span class="item-title">尊享服务：</span>
                <?php if(is_array($goods['service']) || $goods['service'] instanceof \think\Collection || $goods['service'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods['service'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <?php echo $vo['title']; endforeach; endif; else: echo "" ;endif; ?>
            </p>
        </div>


        <!--更多内容-->
        
        <div class="more-info wp_100 pull-left">
            <div class="more-info-navbar wp_100 ">
                <ul  >
                    <li  >
                        <a href="javascript: void(0);" ng-click="barSelect(0);">商品详情</a>
                    </li>
                    <li class="li-split">/</li>
                    <li   >
                        <a href="javascript: void(0);"  ng-click="barSelect(1);">规格与包装</a>
                    </li>
                    <li class="li-split" >/</li>
                    <li  >
                        <a href="javascript: void(0);"  ng-click="barSelect(2);">售后保障</a>
                    </li>
                    <li class="li-split" >/</li>
                    <li  >
                        <a href="javascript: void(0);"  ng-click="barSelect(3);">商品评论</a>
                    </li>
                </ul>
            </div>
            <div class="more-info-detail wp_100 khidden" ng-class="{kshow: 0==choseBar}">
                <?php echo htmlspecialchars_decode($goods['detail'] ); ?>
            </div>
            <div class="more-info-detail wp_100 khidden" ng-class="{kshow: 1==choseBar}">
                规格与包装
            </div>
            <div class="more-info-detail wp_100 khidden" ng-class="{kshow: 2==choseBar}">
                售后保障
            </div>
            <div class="more-info-detail wp_100 khidden" ng-class="{kshow: 3==choseBar}">
                评论
            </div>
            
        </div>
    </div>
</div>
<script>

    app.controller('goodsCtrl', function($scope) {
        $scope.price = <?php echo $goods['price']; ?>;
        <?php if($goods['promotion']['type']==1): ?>
            $scope.real_price = <?php echo $goods['price']; ?>*<?php echo $goods['promotion']['percent']; ?>/100;
        <?php endif; ?>
        $scope.buy_number = 1; //购买数量初始化
        
        //商品详情
        $scope.choseBar = 0;
        $scope.barSelect = function($id){
            $scope.choseBar = $id;
        }


        $scope.specSelect = function($id) {
            $scope.specValue = $id; 
            $scope.isChose = $id;
        }
    });

    //暂时用jquery，回头看看能不能改成angularjs
    $(document).ready(function(){
        $("#jqzoom").imagezoom();
        var currImg = $('#thumblist li:first a');
        $(currImg).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
        $(".jqzoom").attr('src',$(currImg).find("img").attr("mid"));
        $(".jqzoom").attr('rel',$(currImg).find("img").attr("big"));

        $("#thumblist li a").click(function(){
            $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
            $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
            $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
        });
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
