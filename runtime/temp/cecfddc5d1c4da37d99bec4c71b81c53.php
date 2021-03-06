<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/goods/detail.html";i:1509954947;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/swiper-3.4.2.min.css">
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
    <!--规格-->
    <div class="choice_size btn btn-block">
        选择规格
    </div>
    <div class="size" data-ng-controller="goodsCtrl">
        <div class="close"></div><!--黑色部分-->
        <div class="size-content">
        <img src="<?php echo $goods['img']; ?>" alt="商品图片" rel="<?php echo $goods['img']; ?>">
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
         <span class="end_count item-title">库存：<?php echo $goods['amount']; ?></span>
        <div class="buy_count input-group">
            <div class="input-group-addon" ng-click="redNum()">-</div>
            <input id="buy-number"  ng-model="buy_number" title="填写购买数量"/>
            <div class="input-group-addon" ng-click="addNum()">+</div>
        </div>
        <a class="btn add_car" href="/index/cart/add/id/<?php echo $goods['id']; ?>/spec/{{specValue}}/num/{{buy_number}}" title="加入购物车">加入购物车</a>
        </div>
    </div>
    <div class="swiper-container-contant" >
        <div class="swiper-wrapper">
            <div class="product_info swiper-slide">
                <!--banner区-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(is_array($goods['pic']) || $goods['pic'] instanceof \think\Collection || $goods['pic'] instanceof \think\Paginator): $i = 0; $__LIST__ = $goods['pic'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide">
                            <img src="<?php echo $vo['pic']; ?>" alt="商品图片" rel="<?php echo $vo['pic']; ?>"/>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
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
            </div>
            <!--详情页-->
            <div class="details swiper-slide">
                <?php echo htmlspecialchars_decode($goods['detail'] ); ?>
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
            $scope.redNum = function(){
                ($scope.buy_number - 1 < 0) ? $scope.buy_number = 0 : $scope.buy_number--;
            }
            $scope.addNum = function(){
                $scope.buy_number++;
            }
        });
        //设置展示图片的高宽相同
        var scr_height=window.screen.width;
        $('.swiper-container img').css("height",scr_height);

        var mySwiper = new Swiper ('.swiper-container', {
            autoplay : 3000,
            loop: true,
            pagination: '.swiper-pagination',
        })
        //外部切换
        var Swiper1 = new Swiper('.swiper-container-contant',{
            loop:true,
            autoHeight: true,
            iOSEdgeSwipeDetection : true,
            onSlideChangeStart:function(swiper){
                $("html,body").animate({scrollTop:0}, 1);
                $('.current').removeClass('current');
                $('.tab').children().eq(swiper.realIndex).addClass('current');
            }
        });
        //标签页点击切换
        $('.tab li').click(function(){
            $('.tab li').removeClass('current');
            $(this).addClass('current');
            var index = $(this).index()+1;
            Swiper1.slideTo(index, 500, false);
            $("html,body").animate({scrollTop:0}, 1);
        });

        //判断滑动方向    
  /*      function scroll( fn ) {
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
                $(".tab").slideUp(100);
            }else if(direction=="down"){
                $(".tab").slideDown(100);
            }
         });*/
        //按钮点击切换显示
        $(".choice_size").click(function(){
            $(".choice_size").css("display","none");
            $(".size").slideToggle(100);
            $('.shop_car').css('display','none');
        });
        $('.close').click(function(){
            $(".size").slideToggle(100);
            $('.shop_car').css('display', 'block');
            $(".choice_size").css("display","block");
        });
        $('.add_car').click(function(){
            $(".size").slideToggle(100);
            $(".choice_size").css("display","block");
            $('.shop_car').css('display','block');
        });
      </script>
</body>
</html>