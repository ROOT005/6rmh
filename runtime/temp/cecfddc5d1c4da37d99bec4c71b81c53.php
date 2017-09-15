<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/goods/detail.html";i:1505458242;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>详情</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_detail.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
</head>
<body data-ng-app="myApp">
    <!--头-->
    <div class="tab">
        <li class="current">商品</li>
        <li>详情</li>
        <li>评价</li>
    </div>
    <!--购物车-->
    <div class="shop_car glyphicon glyphicon-shopping-cart" onclick="location='/index/cart'">
    </div>
    <div class="swiper-container-contant" data-ng-controller="goodsCtrl">
        <div class="swiper-wrapper">
            <div class="product_info swiper-slide">
                <!--banner区-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="__STATIC__/images/01_mid.jpg" alt="美女" rel="__STATIC__/images/01_mid.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="__STATIC__/images/02_mid.jpg" alt="美女" rel="__STATIC__/images/02_mid.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="__STATIC__/images/01_mid.jpg" alt="美女" rel="__STATIC__/images/01_mid.jpg"/>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!--名称价格-->
                <div class="price_con">
                    <span class="product_name"><?php echo $goods['name']; ?></span>
                    <span class="product_description" title="<?php echo $goods['description']; ?>"><?php echo $goods['description']; ?></span>
                    六 儿 价：
                    <?php if($goods['promotion']['type'] == 1): ?>
                    <span class=" price" title="折扣后价格" ng-bind="{{real_price|number:2}}">
                    </span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <s>原价:<span ng-bind="{{price}}"></span></s>
                    <?php else: ?>
                    <span class="price" ng-bind="{{price}}"></span>
                    <?php endif; ?>
                    <p>
                        <span class="item-title">促 销：</span>
                        <span class="goods-promotion " title="<?php echo $goods['promotion']['description']; ?>">
                        <?php echo $goods['promotion']['title']; ?>
                        </span>
                    </p>
                    <p>
                        <span class="item-title">来 源：</span>
                        <?php if($goods['userid'] == 0): ?>
                            官方
                        <?php else: ?>
                            来源不明
                        <?php endif; ?>
                    </p>
                </div>
                <!--规格-->
                <div class="size">
                    <span class="item-title">重量：</span>
                    <?php echo $goods['weight']; ?>kg
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <?php if($goods['free_shipping'] ==1): ?>
                        免运费 
                    <?php endif; ?>
                    <li><span class="item-title">选择规格：</span></li>
                    <?php if(is_array($goods['spec']) || $goods['spec'] instanceof \think\Collection || $goods['spec'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods['spec'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="default-spec-li" ng-class="{choseSpec: <?php echo $vo['id']; ?>==isChose}" ng-click="specSelect(<?php echo $vo['id']; ?>);"><?php echo $vo['spec']; ?></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="end_count">
                        <input id="buy-number" ng-model="buy_number" title="填写购买数量"/>
                        <span class="item-title">库存：<?php echo $goods['amount']; ?></span>
                    </div>
                    <div class="btn add_car">
                        加入购物车
                    </div>
                </div>
            </div>
            <!--详情页-->
            <div class="details swiper-slide">
                <li>hhhhhaaa</li>
                <li>hhhhhaaa</li>
                <li>hhhhhaaa</li>
                <li>hhhhhaaa</li>
                <li>hhhhhaaa</li>
                <li>hhhhhaaa</li>
            </div>
            <!--评价-->
            <div class="comment swiper-slide">
                <li>sauhidawhu</li>
                <li>sauhidawhu</li>
                <li>sauhidawhu</li>
                <li>sauhidawhu</li>
            </div>
        </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="__STATIC__/js/plugin/swiper3/swiper-3.4.2.jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
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
        //设置展示图片的高宽相同
        var scr_height=window.screen.width;
        $('.swiper-container img').css("height",scr_height);

        var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        pagination: '.swiper-pagination',
        })

        //外部切换
        var Swiper1 = new Swiper('.swiper-container-contant',{
            loop:true,
            onSlideChangeStart:function(swiper){
                $("html,body").animate({scrollTop:0}, 1);
                $('.current').attr('class','');
                $('.tab').children().eq(swiper.realIndex).attr('class', 'current');
            }
        });
        //判断滑动方向    
        function scroll( fn ) {
            var beforeScrollTop = document.body.scrollTop,
                fn = fn || function() {};
            window.addEventListener("scroll", function() {
                var afterScrollTop = document.body.scrollTop,
                    delta = afterScrollTop - beforeScrollTop;
                if( delta === 0 ) return false;
                fn( delta > 0 ? "down" : "up" );
                beforeScrollTop = afterScrollTop;
            }, false);
        }
        scroll(function(direction) {
            if(direction=="up"){
                $(".tab").slideUp(200);
                $(".shop_car").fadeOut(200);
            }else if(direction=="down"){
                $(".tab").slideDown(200);
                $(".shop_car").fadeIn(200);
            }
         });
      </script>
</body>
</html>