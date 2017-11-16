<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:69:"/home/aptx/File/PHP/6rmh/public/../app/index/view/inner/purchase.html";i:1510619768;s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/user.html";i:1508832926;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1510619768;s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./user/nav.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
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

            
<style>
    .f_c{color: #666;}
    .withdraw{height: 50px;padding: 16px 10px;border-bottom: 1px dashed #f0f0f0;}
    .begintime{width: 156px; height: 25px;margin: 10px 10px;border:1px solid #e0e0e0;color:#666;padding: 0px 10px;}
    .search_input{width: 86px; height: 25px;margin: 10px 10px;}
    .span{margin-top:12px;color:#aaa}
    .search{width:25px; height:25px;margin: 10px 10px;border-radius:10px;}
    .input_border{border: 1px solid #e0e0e0;padding: 0px 10px;color:#666}
    
</style>
<div class="user-panel address">
    <div class="more-info-navbar wp_100 ">
        <ul  >
            <li>
                <a href="javascript: void(0);">出售列表</a>
            </li>
        </ul>
        <!-- onsubmit="return check(this)" -->
        <form class="form-horizontal" method="post" role="form" action="<?php echo url('purchase'); ?>">
            <button title="搜索" class="search f_r glyphicon glyphicon-search"></button>
            <input id="endtime" class="layui-input f_r begintime" type="text" name="endtime" placeholder="结束时间" readonly="readonly" <?php if($time['status']): ?>value="<?php echo $time['endtime']; ?>"<?php endif; ?>>
            <span class="f_r span">——</span>
            <input id="begintime" class="layui-input f_r begintime" type="text" name="begintime" placeholder="开始时间" readonly="readonly" <?php if($time['status']): ?>value="<?php echo $time['begintime']; ?>"<?php endif; ?>>                           
            <input  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="search_input f_r input_border" type="text" name="value" placeholder="数量" <?php if($sum['status']): ?>value="<?php echo $sum['value']; ?>"<?php endif; ?>>                           
            <input  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="search_input f_r input_border" type="text" name="maxprice" placeholder="最高价" <?php if($times['status']): ?>value="<?php echo $times['maxprice']; ?>"<?php endif; ?>>
            <span class="f_r span">—</span>                           
            <input  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="search_input f_r input_border" type="text" name="minprice" placeholder="最低价" <?php if($times['status']): ?>value="<?php echo $times['minprice']; ?>"<?php endif; ?>>                           
            <select class="f_r search_input input_border" name="title">
                <?php if($timer['status']): if(is_array($title) || $title instanceof \think\Collection || $title instanceof \think\Paginator): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['title']; ?>" <?php if($timer['title']==$vo['title']): ?>selected<?php endif; ?> ><?php echo $vo['title']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                    <option value="" selected><?php if($timer['status']): ?><?php echo $timer['title']; else: ?>请选择<?php endif; ?></option>
                    <?php if(is_array($title) || $title instanceof \think\Collection || $title instanceof \think\Paginator): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                
            </select>
        </form>
    </div>
    <div class="more-info-detail table-title wp_100">
            <div class=" wp_20">图片</div>
            <div class=" wp_20">上架时间</div>
            <div class=" wp_10">名称</div>
            <div class=" wp_10">数量</div>
            <div class=" wp_10">价格</div>
            <div class=" wp_10">出售时间段</div>
            <div class=" wp_10">卖家姓名</div>
            <div class=" wp_10">操作</div>
        </div>
        <div class="more-info-detail wp_100" >
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['status'] == 1): ?>
            <div class="cart-goods-record wp_100">
                <div class="wp_20 f_l">
                    <?php if($vo['type'] == 1): ?>
                    <img class="w100 h80" src="<?php echo $vo['pic']; ?>">
                    <?php else: ?>
                    <img class="w100 h80" src="<?php echo $vo['pic']; ?>">
                    <?php endif; ?>
                </div>
                <div class="wp_20 f_l"><?php echo $vo['addtime']; ?></div>
                <div class=" wp_10 f_l">
                    <?php if($vo['type'] == 1): ?>
                    积分
                    <?php else: ?>
                    鱼饵
                    <?php endif; ?>
                </div>
                <div class="wp_10 f_l"><?php echo $vo['value']; ?></div>
                <div class="wp_10 f_l"><?php echo $vo['money']; ?></div>
                <div class="wp_10 f_l"><?php echo $vo['selltime']; ?></div>
                <div class="wp_10 f_l"><?php echo $vo['username']; ?></div>
                <div class="wp_10 f_l">
                    <span class="ctrl-option" data-toggle="modal" data-target="#myModal" rel="<?php echo $vo['order_id']; ?>">购买</span>
                </div>
            </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php echo $list->render(); ?>
        <div class="more-info-navbar wp_100"></div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" id="form1" name="form1" method="post" role="form" action="<?php echo url('pay'); ?>">                    
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        支付
                    </h4>
                </div>
                <div class="wp_100">
                    <div class="wp_100  f_l ">
                        <div class="wp_100 m_t l_h_50">
                            <span class="wp_60 f_l t_r main_font_color"><input id="checked" type="checkbox" name="checkbox">&nbsp;&nbsp;余额支付<p></p></span>
                            <!-- <span class="wp_60 f_l t_l main_font_color"><input id="pays" class="khidden w120 h30 main_font_color" type="password" name="pass" value=""></span>    -->
                        </div>
                        <!-- <div class="wp_100 m_t l_h_50">
                            <a href="/index/inner/gopay"><span class="wp_60 f_l t_r main_font_color"><input class="btn btn-primary" type="submit" name="submit" value="微信支付"></span></a>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="hid" type="hidden" name="order_id" value="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <!-- <input class="btn btn-primary" type="submit" name="submit" value="提交"> -->  
                    <input class="btn btn-primary" type="submit" name="submit" value="支付">
                        
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    laydate.render({
      elem: '#begintime', //指定元素
      type: 'datetime'
    });
    laydate.render({
      elem: '#endtime', //指定元素
      type: 'datetime'
    });
</script>
<script>
    $(document).ready(function() {
        $(".ctrl-option").click(function() {
            var order_id = $(this).attr('rel');
            console.log(order_id);
            $("#hid").val(order_id);
            $("#Modal").modal();
        });
    });
</script>
<script>
    document.getElementById('checked').onclick = function() {
        var a = this.parentNode.getElementsByTagName('p')[0];
        // console.log(a);
        if (this.checked){
            a.innerHTML = '<input class="w80 h30 main_font_color" type="password" name="pass" autofocus placeholder="支付密码" maxlength="6"/>';
            a.focus();

        }else{
            a.innerHTML = '';
        } 
    }
</script>

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