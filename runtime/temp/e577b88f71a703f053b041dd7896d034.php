<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/cart/index.html";i:1506074542;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/css/mall_mobile_cart.css">
    <title>购物车</title>
</head>
<body data-ng-app="myApp">
    <div  class="content-panel" data-ng-controller="cartCtrl">
        <div class="more-info-navbar">
            购物车
        </div>
        <div class="more-info-top">
            <input id="chose_all" data-ng-model="allChecked"  data-ng-click="checkAllCart($event);" type="checkbox"/>
            <label for="chose_all"></label>
            全选
            <span class="pull-right">
                <a href="javascript: void(0);" >删除选中商品</a>
                <a href="<?php echo url('cart/delate'); ?>" >清理下架商品</a>
            </span>
        </div>
        <div class="more-info-detail" >
            <?php if(is_array($carts) || $carts instanceof \think\Collection || $carts instanceof \think\Paginator): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="cart-goods-record">
                    <div class="head-title">
                        <span>
                            <input id="<?php echo $vo['cart_id']; ?>" data-ng-checked="allChecked" data-ng-click="checkCart($event, <?php echo $vo['cart_id']; ?>);" type="checkbox"/>
                            <label for="<?php echo $vo['cart_id']; ?>">
                                <span class="fa fa-check" aria-hidden="true"></span>
                            </label>
                        </span>
                        <span class="pull-right edit" >编辑</span>
                    </div>
                    <div class="good-left">
                        <img title="<?php echo $vo['sub_name']; ?>" class="" src="<?php echo $vo['pic']; ?>"/>
                    </div>
                    <div class="goods-detail">
                        <li class="name-title" title="<?php echo $vo['description']; ?>"><?php echo $vo['name']; ?></li>
                        <li class="good-info">
                            规格：<?php echo $vo['spec']; ?>
                        </li>
                        <li class="">
                            单价：¥<?php echo $vo['price']; if($vo['promotion'] != ''): ?>
                            <span class="goods-promotion" >
                                <?php echo $vo['promotion']; ?>
                            </span>
                            <?php endif; ?>        
                        </li>
                        <li class="given-info" href="javascript: void(0);">赠送鱼饵<?php echo $vo['bait']; ?>个&nbsp;&nbsp;&nbsp;&nbsp;获得<?php echo $vo['point']; ?>积分
                        </li>
                    </div>
                    <div class="good-option">
                         <li class="option-title">编辑</li>
                         <li class="changeNum">
                            <a class="number-change" href="/index/cart/setInc/id/<?php echo $vo['cart_id']; ?>/num/<?php echo $vo['num']; ?>" title="数量减1">-</a>
                            <input class="cart-goods-num" name="number" value="<?php echo $vo['num']; ?>"/>
                            <a class="number-change" href="/index/cart/setDec/id/<?php echo $vo['cart_id']; ?>/num/<?php echo $vo['num']; ?>" title="数量加1">+</a>
                        </li>
                        <li>
                            <a class="btn"href="<?php echo url('cart/del', ['id'=>$vo['cart_id']]); ?>" title="删除该商品">
                            删除</a>
                            <a class="btn" href="" title="">完成</a>
                        </li>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="foot-info-navbar">
            <a class="btn btn-block" href="/index/order/preview/id_list/{{cart_list}}" title="结算选中商品">去结算</a>
        </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
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
        $('.edit').click(function(){
            $(this).parent().parent().animate({
                left: '-10em'
            },100);
            $(this).parent().nextAll('.good-option').fadeIn(100);
        });
        $('.goods-detail').click(function(){
            $(this).next().fadeOut(100);
            $(this).parent().animate({
                left: '0em'
            },100);
        });
    </script>
</body>
</html>