<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/order/preview.html";i:1506415340;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_preview.css">
    <title>订单页</title>
    <link rel="stylesheet" href="">
</head>
<body data-ng-app="myApp">
    <div ng-controller="previewCtrl">
        <div class="more-info-navbar">
            订单
        </div>
        <div class="info paper">
           <?php if($address != null): if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="connect_info">
                        <span>联系人：<?php echo $vo['name']; ?></span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>联系电话:<?php echo substr($vo['mobile'],0,3); ?>****<?php echo substr($vo['mobile'],7); ?></span>
                    </div>
                    <div class="address">
                        <span class="fa fa-location-arrow"></span>
                        <span>默认地址:</span>
                        <span>
                            <?php echo $vo['province']; ?>&nbsp;
                            <?php echo $vo['city']; ?>&nbsp;
                            <?php echo $vo['area']; ?>&nbsp;
                            <?php echo $vo['address']; ?>
                        </span>
                    </div>
                    <br>
                    <div class="info_footer">
                        <a class="footer_left" href="" title="">编辑</a>
                        <a class="footer_right" href="" title="">新增</a>
                    </div>
                 <?php endforeach; endif; else: echo "" ;endif; else: ?>
                <a href="" title="">+添加收货地址</a>
           <?php endif; ?> 
        </div>
        <div class="paper pay_way">
            <div>
                支付方式:
            </div>
            <?php if(is_array($pay_way) || $pay_way instanceof \think\Collection || $pay_way instanceof \think\Paginator): $i = 0; $__LIST__ = $pay_way;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <span name="pay_way" ng-class="{chosePay: <?php echo $vo['id']; ?>==isChose}" ng-click="paySelect(<?php echo $vo['id']; ?>);"><?php echo $vo['name']; ?></span>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div>
                配送方式:
            </div>
            <?php if(is_array($delivery) || $delivery instanceof \think\Collection || $delivery instanceof \think\Paginator): $i = 0; $__LIST__ = $delivery;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <span class=" default-spec-li" name="delivery" ng-class="{chosePay: <?php echo $vo['id']; ?>==delivery}" ng-click="deliverySelect(<?php echo $vo['id']; ?>);"><?php echo $vo['title']; ?></span>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="goods_info paper">
            <div>
                应付总额：¥<?php echo $count['prices']; ?>
            </div>
            <?php if(is_array($carts) || $carts instanceof \think\Collection || $carts instanceof \think\Paginator): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="goods_details">
                <span class="goods_left">
                    <img title="<?php echo $vo['sub_name']; ?>" class="cart-goods-pic" src="<?php echo $vo['pic']; ?>"/>
                </span>
                <span class="goods_center">
                    <li><?php echo $vo['name']; ?></li>
                    <li>规格：<?php echo $vo['spec']; ?></li>
                    <li>单价: ￥<?php echo $vo['price']; ?></li>
                    <li>数量：<?php echo $vo['num']; ?></li>
                    <li class="promotion">
                         <?php if($vo['promotion'] != ''): ?>
                         <?php echo $vo['promotion']; endif; ?>
                    </li>
                    <li> 赠送鱼饵：<?php echo $vo['bait']*$vo['num']; ?>个&nbsp;&nbsp;获得积分：<?php echo $vo['point']*$vo['num']; ?></li>
                </span>
                <span class="goods_right">小计:¥<?php echo $vo['price']*$vo['num']; ?></span>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="pay">
            <div>支付</div>
        </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
        app.controller('previewCtrl', function($scope) {
            <?php if($address != null): ?>
                $scope.addrID = <?php echo $address[0]['id']; ?>;                
            <?php endif; ?>
            //默认是默认地址的ID
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
</body>
</html>