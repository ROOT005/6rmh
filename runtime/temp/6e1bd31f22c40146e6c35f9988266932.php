<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/home/aptx/File/PHP/6rmh/public/../app/index/view/login/index.html";i:1508832185;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/view/./public/footer.html";i:1508832185;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?php echo $header['title']; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/mall_default_layout.css" type="text/css"/>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular-animate.min.js"></script>
    </head>
    <body data-ng-app="myApp" data-ng-controller="loginCtrl" class="login-body abs"  style="background: url(<?php echo $header['loginbg']; ?>);">
        <div class="login-header wp_100 abs h100">
            <div class="login-header-panel hp_100">
                <a href="javascript: void(0);">
                    <img class="login-logo pull-left" src="__STATIC__/images/company/logo.jpg"/>
                </a>
                
                <div class="login-title text-center pull-left">欢迎登录</div>
                <!--<div class="login-icons pull-right text-center">

                </div>-->
            </div>
            
        </div>
        <div class="login-panel">
            <div class="login-panel-img pull-left hp_100 w700">
                <a href="javascript: void(0);">
                    <img class="pull-right" src="__STATIC__/images/company/loginPic.jpg"/>
                </a>
            </div>
            <div class="login-panel-content pull-left text-center">
                <form action="login/login" method="post">
                    <div class="web-login-div input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user" ></i>
                        </span>
                        <input class="form-control" name="login[name]" placeholder="会员名/邮箱/手机号" required/>
                        <!--<span class="input-verify" ng-show="myForm.user.$invalid">
                        <span ng-show="myForm.user.$error.required">*</span>-->
                    </div>
                    <div class="web-login-div input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock" ></i>
                        </span>
                        <input class="form-control" name="login[password]" required/>
                    </div>
                        
 
                    <div class="web-login-div ">
                        <button class="submit-btn" type="submit">登录</button/>
                    </div>
                </form>
            </div>
        </div>
        <script>
            var app = angular.module('myApp', []);
        </script>
        <div class="abs wp_100 h70">
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
        
        <script>
            app.controller('loginCtrl', function($scope){
                
            });

        </script>
    </body>
</html>