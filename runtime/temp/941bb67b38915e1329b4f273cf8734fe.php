<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"/home/aptx/File/PHP/6rmh/public/../app/index/view/order/index.html";i:1508832926;s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/user.html";i:1508832926;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1510619768;s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./user/nav.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
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
    <link href="http://cdn.bootcss.com/bootstrap-fileinput/4.4.2/css/fileinput.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/mall_default_layout.css" type="text/css"/>

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="__STATIC__/js/plugin/jquery.imagezoom.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap-fileinput/4.4.2/js/fileinput.min.js"></script>
    <!--加载fileinput 对中文的支持-->
    <script src="http://cdn.bootcss.com/bootstrap-fileinput/4.3.9/js/locales/zh.min.js"></script>
    <!--加载angularjs-->
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <!--<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    <script src="https://cdn.bootcss.com/angular.js/1.5.0-beta.0/angular-sanitize.min.js"></script>-->
    <script src="__JS__/plugin/laydate/laydate.js"></script> <!--引入日期插件 -->
    <script src="__JS__/mall/mall_default_layout.js"></script>
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
    
    <!--显示头像和二维码-->
    <div class="content-panel" style="height: 120px; margin-top: 20px; padding: 0 2%;">
        <a href="javascript: void(0);" title="点击更新二维码">
            <img class="f_r" style="height: 120px; width: 120px;" src="<?php echo $cookie['qr_code']; ?>"/>
        </a>
        <a href="javascript: void(0);" title="点击更新头像">
            <img class="f_l" style="height: 120px; width: 120px;" src="<?php echo $cookie['headimgurl']; ?>"/>
        </a>
        
        
        <span class="f_r">
            <?php if($cookie['subscribe']==2): ?>
                请尽快绑定微信
            <?php else: ?>
                我的推广二维码
            <?php endif; ?>
        </span>
    </div>

    <!--主要内容页面-->
    <div class="web-content wp_100 f_l ">
        <div class="content-panel">
            <!--导航栏-->
            <!--用户中心功能栏-->
    <div class="f_l user-left">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 订单管理</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <a href="/index/order/index">
                        <li class="user-nav-li" data-url="/index/order/index">
                            <i class="fa fa-reorder"></i>&nbsp;我的订单
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 账号管理</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <a href="/index/user/index">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-id-card-o"></i>&nbsp;个人信息
                        </li>
                    </a>
                    <a href="/index/address/index">
                        <li class="user-nav-li" data-url="/index/address/index">
                            <i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;收货地址
                        </li>
                    </a>
                    <a href="/index/user/passcode">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-key"></i>&nbsp;修改密码
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 资产明细</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <a href="/index/Inner/index/">
                        <li class="user-nav-li" data-url="javascript: void(0);"><i class="fa fa-list"></i>&nbsp;我的资产</li>
                    </a>
                    <a href="/index/Log/index/type/bait">
                        <li class="user-nav-li" data-url="javascript: void(0);"><i class="fa fa-list"></i>&nbsp;鱼饵明细</li>
                    </a>
                    <a href="/index/Log/index/type/point">
                        <li class="user-nav-li" data-url="javascript: void(0);"><i class="fa fa-list"></i>&nbsp;积分明细</li>
                    </a>
                    <a href="/index/Log/index/type/balance">
                        <li class="user-nav-li" data-url="javascript: void(0);"><i class="fa fa-list"></i>&nbsp;余额明细</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 我的余额</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <a href="/index/balance/recharge">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-database"></i>&nbsp;&nbsp;余额充值
                        </li>
                    </a>
                    
                    <a href="/index/balance/withdraw">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-rmb"></i>&nbsp;&nbsp;&nbsp;余额提现
                        </li>
                    </a>
                    
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 交易大厅</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <a href="/index/inner/purchase">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-database"></i>&nbsp;&nbsp;交易大厅
                        </li>
                    </a>
                    
                    <!--<a href="/index/balance/withdraw">
                        <li class="user-nav-li" data-url="javascript: void(0);">
                            <i class="fa fa-rmb"></i>&nbsp;&nbsp;&nbsp;余额提现
                        </li>
                    </a>-->
                    
                </ul>
            </div>
        </div>



    </div>

            
<div  class=" user-panel order-preview-html " >
    <div class="more-info wp_100 ">
        <div class="more-info-navbar wp_100 ">
            <ul  >
                <li  >
                    <a href="<?php echo url('index'); ?>" >全部订单</a>
                </li>
                <li class="li-split">/</li>
                <li   >
                    <a href="<?php echo url('index', ['status'=>1]); ?>"  >待支付</a>
                </li>
                <li class="li-split" >/</li>
                <li  >
                    <a href="<?php echo url('index', ['status'=>2]); ?>" >待发货</a>
                </li>
                <li class="li-split" >/</li>
                <li  >
                    <a href="<?php echo url('index', ['status'=>3]); ?>" >待收货</a>
                </li>
                <li class="li-split" >/</li>
                <li  >
                    <a href="<?php echo url('index', ['status'=>4]); ?>" >已完成</a>
                </li>
                <li class="li-split" >/</li>
                <li  >
                    <a href="javascript: void(0);" >已取消</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="panel panel-default ">
        <div class="panel-heading main-panel-heading">
            <div class=" f_l wp_60 panel-title">商品详情</div>
            <div class=" f_l wp_10 t_c panel-title">收货人</div>
            <div class=" f_l wp_10 t_c panel-title">金额</div>
            <div class=" f_l wp_10 t_c panel-title">订单状态</div>
            <div class=" f_l wp_10 t_c panel-title">操作</div>
        </div>
    </div>
    <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="panel panel-default ">
        <div class="panel-heading">
            <?php echo $vo['order']['addtime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            订单号：<?php echo $vo['order']['order_id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            六耳猕猴

            
        </div>
        <div class="panel-body more-info-detail order-panel-body">
            <div class="order-item-div wp_60 f_l">
                <?php if(is_array($vo['detail']) || $vo['detail'] instanceof \think\Collection || $vo['detail'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['detail'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="wp_100 order-goods-detail f_l">
                        <div class="wp_20 f_l">
                            <a href="/index/goods/detail/id/<?php echo $v['gid']; ?>">
                                <img class="cart-goods-pic" src="<?php echo $v['pic']; ?>"/>
                            </a>
                        </div>
                        <div class="wp_60 f_l ">
                            <?php echo $v['goods_name']; ?>
                            <br><br>
                            <?php if($v['promotion'] != ''): ?>
                                <span class="goods-promotion " > <?php echo $v['promotion']; ?> </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                            <?php echo $v['spec']; ?>
                            
                        </div>
                        <div class="wp_20 f_l t_c">
                            x <?php echo $v['num']; ?>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <div class="order-item-div order-item-sub wp_10  t_c f_l">
                <span class="order-user" data-container="body" title="联系方式：<?php echo $vo['order']['user_mobile']; ?>" data-toggle="popover" data-placement="left" 
                data-content="收货地址：<?php echo $vo['order']['user_address']; ?>  ">
                    <i class="fa fa-user-o"></i>&nbsp;<?php echo $vo['order']['user_name']; ?>
                </span>
                
            </div>
            <div class="order-item-div order-item-sub wp_10  t_c f_l">
                 <i class="fa fa-rmb"></i>&nbsp;<?php echo $vo['order']['money']; ?>
            </div>
            <!--订单状态-->
            <div class="order-item-div order-item-sub wp_10  t_c f_l">
                <?php switch($vo['order']['status']): case "1": ?>待支付<?php break; case "2": ?>待发货<?php break; case "3": ?>待收货<?php break; case "4": ?>已完成<?php break; default: ?>其他
                <?php endswitch; ?>
            </div>
            <!--操作-->
            
            <div class="order-item-div order-item-sub wp_10  t_c f_l" >
                
                    <?php switch($vo['order']['status']): case "1": ?>
                        <a href="/index/wxpay/index?type=order&id=<?php echo $vo['order']['order_id']; ?> ">
                            <div class="wp_100 hp_100  order-operation-btn">
                            <?php echo $vo['order']['payment_name']; ?>
                            </div>
                        </a>
                            
                        <?php break; case "2": ?>
                            提醒发货
                        <?php break; case "3": ?>
                            确认收货
                        <?php break; case "4": ?>
                            评价
                        <?php break; default: ?>其他
                    <?php endswitch; ?>
                
                
            </div>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    

</div>



        </div>
        
    </div>
        

    <div class="web-footer wp_100 f_l">
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