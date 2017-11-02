<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/address/index.html";i:1508832926;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1508832926;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php echo $config['page_title']; ?></title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/plugin/mall_balance.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="__STATIC__/js/plugin/layer.js" ></script>
</head>
<body>
	<div class="head">
		<div class="head-title"><!-- <span class="back_home fa fa-long-arrow-left fa-1x"></span> -->收货地址</div>
	</div>
	<div class="body">
		<div class="address title">　您已创建<span class="fone-color"><?php echo $count; ?></span>个收货地址，最多可创建<span class="fone-color">10</span>个</div>
	<?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="withdraw row">
			<div class="col-xs-4 address right">收货人：</div>
			<div class="col-xs-8 address left"><?php echo $vo['name']; ?></div>
			<div class="col-xs-4 address right">所在地区</div>
			<div class="col-xs-8 address left"><?php echo $vo['addr']; ?></div>
			<div class="col-xs-4 address right">地址：</div>
			<div class="col-xs-8 address left"><?php echo $vo['address']; ?></div>
			<div class="col-xs-4 address right">手机：</div>
			<div class="col-xs-8 address left"><?php echo $vo['mobile']; ?></div>
			<div class="col-xs-4 address right">邮编：</div>
			<div class="col-xs-8 address left"><?php echo $vo['zipcode']; ?></div>
			<div class="col-xs-6 center"><input type="radio" name="checked" value=""><a href="">设为默认</a></div>
			<div class="col-xs-3 center"><a href="<?php echo url('edit',['id' => $vo['id']]); ?>">编辑</a></div>
			<div class="col-xs-3 center"><a href="<?php echo url('del',['id' => $vo['id']]); ?>">删除</a></div>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="addd" style="display: none">
		<form  method="post" name="form" id="myform" action="<?php echo url('add'); ?>">
		<span class="address-add"><div class="col-xs-2 address right">收货人：</div><div class="col-xs-7 address left"><input type="text" name="name" required><span class="fone-color">　*</span></div><div class="col-xs-3 address right">所在地区：</div><div class="middle-lab f_l left"><select id="province" class="pro kshow" name="province" required><option value="" selected>==选择==</option><?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><span class="middle-lab f_l"><div class="col-xs-3 address right"></div><select id="city" name="city" class="khidden"></select></span><span class="middle-lab f_l"><div class="col-xs-3 address right"></div><select id="area" name="area" class="khidden"> </select><div class="col-xs-3 address right"></div><span class="fone-color">　*</span></span></div><div class="col-xs-2 address right">地址：</div><div class="col-xs-7 address left"><input type="text" name="address" required><span class="fone-color">　*</span></div><div class="col-xs-2 address right">手机：</div><div class="col-xs-7 address left"><input type="text" name="mobile" required pattern=""><span class="fone-color">　*</span></div><div class="col-xs-2 address right">邮编：</div><div class="col-xs-7 address left"><input type="text" name="zipcode"></div></span>
		</form>
	</div>
	<span class="add fa  fa-plus"></span>

	<script type="text/javascript">

	    var addd = $('.addd').html();
	    //alert(addd);
		$('.add').click(function(){
			
			layer.open({
			    title: [
			      '添加地址',
			      'background-color: #6ad4c9; color:#fff;'
			    ]
			    ,content:addd,
			    btn: ['确认', '取消'],
			    yes: function(index){
			    	if($('input[name="name"]').val()==''||$('input[name="city"]').val()==''||$('input[name="mobile"]').val()==''||$('input[name="address"]').val()==''){
			    			alert('必填信息不得为空');
			    	}else{
			      	$('#myform').submit(); }
			    }   
			     });
			$(document).ready(function(){
			    //选择省份
			    $('select[name=province]').change(function(){
			        
			        $('#city,#area').removeClass('kshow').addClass('khidden');

			        $('select[name=city]').empty(); //清除原有的元素
			        
			        var ob = $(this).val();
			        if(ob !=''){
			            $.ajax({
			                type: 'get',
			                url: '/index/address/city',
			                data: {id: ob},
			                success: function(response){
			                    console.log(response);
			                    $('select[name=city]').removeClass('khidden').addClass('kshow pro');
			                    var html = createHtml(JSON.parse(response));
			                    $('select[name=city]').append(html);
			                },
			                error: function(e){
			                    console.log(e);
			                }
			            });
			        }
			    });
			    //选择市
			    $('select[name=city]').click(function(){
			        $('select[name=area]').empty(); //清除原有的元素
			        
			            $.ajax({
			                type: 'get',
			                url: '/index/address/area',
			                data: {id: $(this).val()},
			                success: function(response){
			                    
			                    $('select[name=area]').removeClass('khidden').addClass('kshow pro');
			                    var html = createHtml(JSON.parse(response));
			                    $('select[name=area]').append(html);
			                },
			                error: function(e){
			                    console.log(e);
			                }
			            });
			        
			    });

			});

			


			function createHtml(data){
			    var html = '';
			    for(var i=0; i<data.length; i++){
			        html += '<option value="'+data[i]['id']+'">'+data[i]['name']+'</option>';
			    }
			    return html;
			}
			});

		    
	</script>
	<script>

	</script>
	<!--底部-->
<div class="footer">
        <div class="top fa fa-bars" aria-hidden="true"></div>
        <div class="footer_content">
            <li><a href="/"><span class="fa fa-home" aria-hidden="true"></span>首页</a></li>
            <li><a href=""><span class="fa fa-gamepad" aria-hidden="true"></span>游戏</a></li>
            <li><a href="/index/cart/"><span class="fa fa-shopping-cart" aria-hidden="true"></span>购物车</a></li>
            <li><a href="/index/user/"><span class="fa fa-user" aria-hidden="true"></span>个人中心</a></li>
        </div>
</div>
<script>
    $('.top').click(function(event) {
      $('.footer_content').slideToggle(200);
    });
     $('.footer').siblings().click(function(event) {
         /* Act on the event */
         $('.footer_content').slideUp(200);
     });
</script>
<!--底部结束-->
</body>
</html>