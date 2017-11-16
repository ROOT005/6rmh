<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/address/index.html";i:1510385579;s:70:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/public/footer.html";i:1509929910;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__STATIC__/css/plugin/mall_mobile_footer.css">
	<link rel="stylesheet" href="__STATIC__/css/mall_mobile_address.css">
	<title></title>
</head>
<body>
	<div class="add_address fa fa-plus" data-toggle="modal" data-target="#formModal">
    </div>
    <div class="modal fade modal-show" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="ModalLabel">新增收货地址</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal" method="post" name="form" id="myform" action="<?php echo url('add'); ?>">
		          <div class="form-group">
		            	<label for="name" class="col-xs-4 control-label">收货人：</label>
						<div class="col-xs-8">
	  						<input type="text"  name="name" class="form-control verify" id="name" placeholder="请输入姓名..." aria-describedby="helpBlock1">
						</div>
		          </div>
		        	<div class="form-group">
		        		<label for="province" class="col-xs-4 control-label">所在地区：</label>
						<div class="col-xs-8">
	  						<select class="form-control" id="province" name="province">
	  						  	<option value=""  selected>选择</option>
	  						  	<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	  						   	<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
					   			<?php endforeach; endif; else: echo "" ;endif; ?>
	  						</select>
						</div>
						<div class="col-xs-4 col-xs-offset-4">
							<select class="form-control" id="city" name="city">
							</select>
						</div>
						<div class="col-xs-4">
							<select class="form-control" id="area" name="area">
							</select>
						</div>
		        	</div>
		          <div class="form-group">
		            <label for="address" class="col-xs-4 control-label">地址：</label>
						<div class="col-xs-8">
	  						<input type="text" name="address" class="form-control verify" id="address" placeholder="请输入详细地址">
						</div>
		          </div>
		           <div class="form-group">
		            <label for="phone" class="col-xs-4 control-label">手机：</label>
						<div class="col-xs-8">
	  						<input type="text" name="mobile" class="form-control verify" id="mobile" placeholder="请输入电话...">
						</div>
		          </div>
		           <div class="form-group">
		            <label for="zipcode" class="col-xs-4 control-label">邮编：</label>
						<div class="col-xs-8">
	  						<input type="text" name="zipcode" class="form-control" id="zipcode">
						</div>
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		        <button type="button" class="btn form-submit">确认</button>
		      </div>
		    </div>
		  </div>
    </div>
	<div class="address-title">　您已创建<span class="fone-color"><?php echo $count; ?></span>个收货地址，最多可创建<span class="fone-color">10</span>个</div>
	<?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<div class="withdraw">
		<div class="row top-title">
			<div class="col-xs-2">
				<input type="radio" name="checked" value="">
			</div>
			<div class="col-xs-5">
				<a href="">设为默认</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 address">收货人：</div>
			<div class="col-xs-7 address"><?php echo $vo['name']; ?></div>
		</div>
		<div class="row">
			<div class="col-xs-3 address ">所在地区</div>
			<div class="col-xs-7 address "><?php echo $vo['addr']; ?></div>
		</div>
		<div class="row">
			<div class="col-xs-3 address ">地址：</div>
			<div class="col-xs-7 address "><?php echo $vo['address']; ?></div>
		</div>
		<div class="row">
			<div class="col-xs-3 address ">手机：</div>
			<div class="col-xs-7 address "><?php echo $vo['mobile']; ?></div>
		</div>
		<div class="row">
			<div class="col-xs-3 address ">邮编：</div>
			<div class="col-xs-7 address "><?php echo $vo['zipcode']; ?></div>
		</div>
		<div class="row">
			<div class="col-xs-8 address"></div>
			<div class="col-xs-2 address"><a class="edit_button" href="<?php echo url('edit',['id' => $vo['id']]); ?>">编辑</a></div>
			<div class="col-xs-2 address"><a href="<?php echo url('del',['id' => $vo['id']]); ?>">删除</a></div>
		</div>
	</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="__STATIC__/js/bootstrap.min.js"></script>
	<script>
    	$('#province').change(function(){
    		var city = $(this).val();
			$.getJSON("/index/address/city?id="+city, function(re){
		     	var optionstring = "";
		     	$.each(re, function(i,item){
		         optionstring += "<option value=\"" + item.id + "\" >" + item.name + "</option>";
		     	});
		     	$("#city").html('<option value="">请选择</option>'+optionstring);
			});
			$("#area").html('<option value="">请选择</option>');
    	});
    	$('#city').change(function(){
    		var area = $('#city').val();
    		console.log(area);
			$.getJSON("/index/address/area?id="+area, function(re){
		     	var optionstring = "";
		     	$.each(re, function(i,item){
		         optionstring += "<option value=\"" + item.id + "\" >" + item.name + "</option>";
		     	});
		     	$("#area").html('<option value="">请选择</option>'+optionstring);
		});
    	});
    	$('.verify').change(function(event) {
    		if($(this).val()==''){
    			$(this).parent().removeClass('has-success');
    			$(this).parent().addClass('has-error');
    			$(this).removeClass('true');
    		}else{
    			$(this).addClass("true");
    			$(this).parent().removeClass('has-error');
    			$(this).parent().addClass('has-success');
    		}
    	});
    	$('.form-submit').click(function(){
    		if($('#name').val()!=''&&$('#address').val()!=""&&$('#mobile').val()!=''){
    			var phone = $("#mobile").val();  
    			var reg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;         
    			if(!reg.test(phone)){  
    				$('#mobile').parent().addClass('has-error');
    			    alert("请输入有效的手机号码！");
    			    return false;  
    			}else{
    				$('form').submit();
    			} 
    		}else{
    			$(".verify").each(function(){
    			    if ($(this).val()=='') {
    			    	$(this).parent().addClass('has-error');
    			    }
    			  });
    			alert("请输入必要的内容");
    			return false;
    		}
    	});
    </script>
	<!--底部-->
<div class="overflow">
    
</div>
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
      $('.overflow').slideToggle(200);
    });
     $('.footer').siblings().click(function(event) {
         /* Act on the event */
          $('.overflow').slideUp(200);
         $('.footer_content').slideUp(200);
     });
</script>
<!--底部结束-->
</body>
</html>