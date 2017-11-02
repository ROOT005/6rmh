<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/user/index.html";i:1508832185;s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/user.html";i:1508832926;s:67:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/top.html";i:1508832185;s:65:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./user/nav.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
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
    .m_a{margin: 0 auto;}
    .user_headimg{margin-top: 15px;box-shadow: 0 3px 10px #949894;}
    
    .f_c{color: #666;}
    .l_h_40{line-height: 40px;}
    .file_btn{border:1px solid #666;border-radius: 5px;}
    .file_btn:hover{background: #CDCDCD;}
    .edits{color: #005EA7;}
    .edits:hover{color: #E4393C;}
</style>
<form class="form-horizontal" method="post" role="form" action="<?php echo url('editor'); ?>" enctype="multipart/form-data">
<div class="user-panel address">
    <div class="more-info-navbar wp_100 ">
        <ul  >
            <li>
                <a href="javascript: void(0);">个人信息</a>
            </li>
        </ul>
    </div>
    <div class="wp_100">
        <div class="wp_25  f_l">&nbsp;</div>
        <div class="wp_50  f_l">
            <input type="hidden" name="id" value="<?php echo $users['id']; ?>"/>
            <div class="w100 h100 m_a user_headimg">
                <img class="hp_100 wp_100 o_h" src="<?php echo $users['headimgurl']; ?>" alt="用户头像未显示">
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">昵称：</span>
                <span class="wp_50 f_l t_l f_c"><input id="shows" class="w150 h30 f_c" type="text" name="name" value="<?php echo $users['name']; ?>" required></span>
                <!-- <span id="edits" class="wp_10 edits">修改</span> -->
            </div>
            <div class="wp_100 l_h_40">
                <span class="wp_40 f_l t_r f_c">真实姓名：</span>
                <span class="wp_60 f_l t_l f_c"><?php echo $users['realname']; ?></span>
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">性别：</span>
                <span class="wp_60 f_l t_l f_c">
                    <?php if($users['sex']==1): ?>
                    <input type="radio" name="sex" value="1" checked/>&nbsp;男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="0" />&nbsp;女
                    <?php else: ?>
                    <input type="radio" name="sex" value="1" />&nbsp;男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="0" checked/>&nbsp;女
                    <?php endif; ?>
                </span>
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">手机号：</span>
                <span class="wp_60 f_l t_l f_c"><input id="mobile" class="w150 h30 f_c" type="text" name="mobile" value="<?php echo $users['mobile']; ?>" pattern='^\d{11}$'></span>
                
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">QQ：</span>
                <span class="wp_60 f_l t_l f_c"><input id="qq" class="w150 h30 f_c" type="text" name="qq" value="<?php echo $users['qq']; ?>"></span>
                
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">邮箱：</span>
                <!-- 正则邮箱验证 pattern='/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$/' -->
                <span class="wp_60 f_l t_l f_c"><input id="email" class="w150 h30 f_c" type="text" name="email" value="<?php echo $users['email']; ?>" ></span>
                
            </div>
            <div class="wp_100 m_t20 l_h_40">
                <span class="wp_40 f_l t_r f_c">上传头像：</span>
                <span class="wp_60 f_l t_l f_c">
                    <div class="w90 h40 t_c">
                        <input id="headimg" type="file" accept="image/*" class="form-control fileinput" name="headimg" upurl=""/>
                    </div>
                    <script>
                        initFileInput('headimg', $('input#headimg').attr('upurl'));
                    </script>
                </span>
            </div>
        </div>
        <div class="wp_25  f_l"></div>
    </div>
</div>
<div class="clear"></div>
<div class="more-info-navbar wp_100">
    <a class="pull-right" href="javascript: void(0);" title="提交">
        <button class="submit-btn-default ">提交</button>
    </a>
</div>
</form>

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