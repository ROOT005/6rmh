<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/home/aptx/File/PHP/6rmh/public/../app/index/mobile/cart/status.html";i:1507881999;}*/ ?>
<!-- <h1 style="text-align: center;color: #6ad4c9;">添加成功!</h1><script>setTimeout(history.go(-1),5000);</script> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>状态</title>
	<style>
		.ftx-02{
			background: #6ad4c9;
			color: #fff;
			width: 100%;
			font-size: 2em;
			height: 10em;
			line-height: 10em;
			text-align: center;
		}

		a{
			text-align: center;
			text-decoration: none;
			display: inline-block;
		}
		.button{
			position: relative;
			bottom: 2em;
		}
	</style>
</head>
<body>
    <div class="ftx-02">
        <?php if($result['status']): ?>
        		<div>商品已成功加入购物车！</div>
				<div class="button">
					<a href="/index/goods/detail/id/<?php echo $result['goods']['id']; ?>" ><div class="show-detail">查看商品详情</div></a>
					<a href="/index/cart/index" ><div class="go-cart">去购物车结算</div></a>
				</div>	
        <?php else: endif; ?>
    </div>
</body>
</html>