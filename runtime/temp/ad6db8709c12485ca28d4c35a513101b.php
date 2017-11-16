<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"/home/aptx/File/PHP/6rmh/public/../app/index/view/inner/index.html";i:1508832926;s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/user.html";i:1508832926;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1510619768;s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./user/nav.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
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

            
<div class="user-panel address">
    <div class="more-info-navbar wp_100 ">
        <ul  >
            <li>
                <a href="javascript: void(0);">个人资产</a>
            </li>
        </ul>
    </div>

    <div class="more-info-detail table-title wp_100">
        <div class=" wp_35">图片</div>
        <div class=" wp_25">名称</div>
        <div class=" wp_25">数量</div>
        <div class=" wp_15">操作</div>
    </div>
    <div class="more-info-detail wp_100" >
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="cart-goods-record wp_100">
            <div class="wp_35 f_l"><img class="w100 h80" src="<?php echo $vo['pic']; ?>"></div>
            <div class=" wp_25 f_l"><?php echo $vo['title']; ?></div>
            <div class="wp_25 f_l">
                <?php if($vo['name'] == 'bait'): ?>
                    <?php echo $userinfo['bait']; else: ?>
                    <?php echo $userinfo['point']; endif; ?>
            </div>
            <div class="wp_15 f_l">
                <span class="ctrl-option" data-toggle="modal" data-target="#myModal" rel="<?php echo $vo['id']; ?>">出售</span>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo url('Fishing/index'); ?>"><span class="ctrl-option">使用</span>&nbsp;&nbsp;&nbsp;</a>
                <a href="<?php echo url('buy', ['id'=>$vo['id']]); ?>"><span class="ctrl-option">购买</span>&nbsp;&nbsp;&nbsp;</a>
                
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php echo $list->render(); ?>
    <div class="more-info-navbar wp_100"></div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" method="post" role="form" action="<?php echo url('sellgoods'); ?>" onsubmit="return check(this)">
                    
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        出售信息
                    </h4>
                </div>
                <div class="modalbody">
                <div class="wp_100">
                    <div class="wp_100  f_l ">
                        <div class="wp_100 m_t l_h_50">
                            <span class="wp_40 f_l t_r main_font_color">出售数量：</span>
                            <span class="wp_60 f_l t_l main_font_color"><input class="w120 h30 main_font_color" type="text" name="value" value=""></span>   
                        </div>
                        <div class="wp_100 m_t l_h_50">
                            <span class="wp_40 f_l t_r main_font_color">出售金额：</span>
                            <span class="wp_60 f_l t_l main_font_color"><input class="w120 h30 main_font_color" type="text" name="money" value=""></span>   
                        </div>
                        <div class="wp_100 m_t l_h_50">
                            <span class="wp_40 f_l t_r main_font_color">出售时间段：</span>
                            <span class="wp_25 f_l t_l main_font_color">
                                <select class="w120 h30 main_font_color" name="selltime" required>
                                    <option value="2" selected>2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                    <option value="20">20</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                </select>
                            </span>
                            <span class="wp_35 f_l t_l main_font_color fz_12">最低2小时，最高24小时</span> 
                        </div>
                    </div>
                </div>
                
                </div>
                <div class="modal-footer">
                    <input id="hid" type="hidden" name="type" value="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <input class="btn btn-primary" type="submit" name="submit" value="提交">
                </div>
            </div>
        </form>
    </div>
</div>


<div class="user-panel address">
    <div class="more-info-navbar wp_100 ">
        <ul  >
            <li>
                <a href="javascript: void(0);">购买记录</a>
            </li>
        </ul>
    </div>

    <div class="more-info-detail table-title wp_100">
        <div class=" wp_30">时间</div>
        <div class=" wp_15">名称</div>
        <div class=" wp_15">数量</div>
        <div class=" wp_15">价格</div>
        <div class=" wp_15">类型</div>
        <div class=" wp_10">卖家姓名</div>
    </div>
    <div class="more-info-detail wp_100" >
        <?php if(is_array($log) || $log instanceof \think\Collection || $log instanceof \think\Paginator): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="withdraw wp_100">
            <div class="wp_30 f_l"><?php echo $vo['addtime']; ?></div>
            <div class="wp_15 f_l"><?php echo $vo['username']; ?></div>
            <div class="wp_15 f_l"><?php echo $vo['value']; ?></div>
            <div class="wp_15 f_l"><?php echo $vo['money']; ?></div>
            <div class=" wp_15 f_l">
                <?php if($vo['type'] == 1): ?>
                积分
                <?php else: ?>
                鱼饵
                <?php endif; ?>
            </div>
            <div class="wp_10 f_l"><?php echo $vo['sellername']; ?></div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php echo $list->render(); ?>
    <div class="more-info-navbar wp_100"></div>
</div>
<script>
    $(document).ready(function() {
        $(".ctrl-option").click(function() {
        var id = $(this).attr('rel');
        $("#hid").val(id);
        $("#Modal").modal();
        });
    });
</script>
<script>
    function check(form){
        if(form.value.value == ''){
            alert('请输入出售数量！！！');
            form.value.focus();
            return false;
        }
        if(form.money.value ==''){
            alert('请输入出售金额');
            form.money.focus();
            return false;
        }
        return true;
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