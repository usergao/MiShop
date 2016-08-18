<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>我的购物车</title>
	<link rel="stylesheet" href="/Mi/Public/home/css/shopcar.css" />
	<link rel="stylesheet" type="text/css" href="/Mi/Public/home/css/bootstrap.min.css"/>
	<script src="/Mi/Public/home/js/jquery.js"></script>
	<script src="/Mi/Public/home/js/shopcar.js"></script>
	<script src="/Mi/Public/home/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<!--top部分-->
<div id="top">
	<div class="top-content">
		<div class="logo">
			<a href="{{U('Index/index')}}"><img src="/Mi/Public/home/image/logo.png" /></a>
		</div>
		<div class="title">
			我的购物车
		</div>
		<!-- <div class="userinfo">
			<div class="user">
				<a href="{{U('User/index')}}" >
					用户名
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</a>
			</div>
			<span class="sep"> | </span>
			<div class="user-order">
				<a href="{{U('Login/del')}}">退出登录</a>
			</div>
		</div> -->
		<div class="userinfo">
			<div class="user">
				<a href="{{U('Login/login')}}" >
					登录
				</a>
			</div>
			<span class="sep"> | </span>
			<div class="user-order">
				<a href="{{U('Login/register')}}">注册</a>
			</div>
		</div>
	</div>
</div>
<!--top部分结束-->
<!--购物车开始-->
	<div id="shopcar">
		<!-- <div class="content">
			<div class="content-title">
				<div class="good-name">
					商品名称
				</div>
				<div class="comments">
					单价
				</div>
				<div class="shuliang">
					数量
				</div>
				<div class="little-count">
					小计
				</div>
				<div class="movement">
					操作
				</div>
			</div>
			
				<div class="good-info">
					<div class="good-image">
						<a href="" target="_blank"><img src=""/></a>
					</div>
					<div class="info-name">
						<a href="" target="_blank">
							小米手机4c 高配版3GB内存+32GB容量
						</a>
						<p>请在两小时内完成下单</p>
					</div>
					<div class="info-single-price">
						<span>123</span>元
					</div>
					<div class="raise-num">
						<span class="glyphicon glyphicon-minus changeblock plus" onclick="minus(this,'<?php echo ($v['pid']); ?>')" aria-hidden="true" style="border-right:none;"></span>
						<input type="text" value="1" class="phone-num" name="number[]" readonly="readonly"/>
						<span class="glyphicon glyphicon-plus changeblock mines" onclick="addplus(this,'<?php echo ($v['pid']); ?>')" aria-hidden="true" style="border-left:none;"></span>
					</div>
					<div class="total-price">
						<span>123</span>元
					</div>
					<div class="remove">
						<span class="glyphicon glyphicon-remove" aria-hidden="true" title="删除" onclick="delGood(this,'{<?php echo ($v['pid']); ?>}')"></span>
					</div>
				</div>
		</div>
		<div class="good-total">
			<div class="back-to-shop">
				<a href="{{U('Index/index')}}">继续购物</a>
			</div>
			<div class="useless">
				|
			</div>
			<div class="good-count">
				共<span class="good-num">1</span>件商品
			</div>
			<div class="gonext">
				<a href="{{U('Checkout/index')}}">去结算</a>
				
			</div>
			<div class="good-price">
				合计（不含运费）：<span class="price">123</span>元
			</div>
		</div>
	</div> -->
	<div id="emptyshopcar">
		<div class="emptycontent">
			<div class="empty-image">
				<img src="/Mi/Public/home/image/cart-empty.png" alt="" />
			</div>
			<div class="empty-title">
				<h1>您的购物车还是空的！</h1>
				<div class="goshop">
					<a href="<?php echo U('List/index');?>">马上去购物</a>
				</div>
			</div>
		</div>
	</div>
<!--购物车结束-->
<!-- 底部开始 -->
<div id="bottom">
	<div class="service">
		<ul>
			<li><a href="">1小时快修服务</a></li>
			<li><a href="">7天无理由退货</a></li>
			<li><a href="">15天免费换货</a></li>
			<li><a href="">满150包邮</a></li>
			<li style="border:none;"><a href="">150家售后网点</a></li>
		</ul>
	</div>
	<div class="aboutus">
		<ul>
			<li class="infomations">
				<span>帮助中心</span>
				<ul class="details">
					<li>购物指南</li>
					<li>支付方式</li>
					<li>配送方式</li>
				</ul>
			</li>
			<li class="infomations">
				<span>服务支持</span>
				<ul class="details">
					<li>售后政策</li>
					<li>自助服务</li>
					<li>相关下载</li>
				</ul>
			</li>
			<li class="infomations">
				<span>小米之家</span>
				<ul class="details">
					<li>小米之家</li>
					<li>服务网点</li>
					<li>预约亲临到店服务</li>
				</ul>
			</li>
			<li class="infomations">
				<span>关于小米</span>
				<ul class="details">
					<li>了解小米</li>
					<li>假如小米</li>
					<li>联系我们</li>
				</ul>
			</li>
			<li class="infomations">
				<span>关注我们</span>
				<ul class="details">
					<li>新浪微博</li>
					<li>小米论坛</li>
					<li>官方微信</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="contactus">
		<div class="number">400-100-5678</div>
		<div class="time">周一至周日 8:00-18:00</div>
		<div class="cost">（仅收市话费）</div>
	</div>

</div>
<div class="last">
	<div class="zong">
		<div class="somethingelse">
			<a href=""小米网></a>
			<a href="">米聊</a><span class="sep"> | </span>
			<a href="">多看书城</a><span class="sep"> | </span>
			<a href="">MIUI</a><span class="sep"> | </span>
			<a href="">小米路由器</a><span class="sep"> | </span>
			<a href="">小米后院</a><span class="sep"> | </span>
			<a href="">小米天猫店</a><span class="sep"> | </span>
			<a href="">小米淘宝直营店</a><span class="sep"> | </span>
			<a href="">小米网盟</a><span class="sep"> | </span>
			<a href="">问题反馈</a><span class="sep"> | </span>
			<a href="">Select Region</a>
		</div>
		<div class="lawonline">
			©mi.com 京ICP证110507号 京ICP备10046444号 京公网安备1101080212535号 京网文[2014]0059-0009号
		</div>
	</div>
	
	<div class="last-right">
		<ul>
			<li>
				<a href=""><img src="/Mi/Public/home/image/v-logo-1.png" alt="" /></a>
			</li>
			<li>
				<a href=""><img src="/Mi/Public/home/image/v-logo-2.png" alt="" /></a>
			</li>
			<li>
				<a href=""><img src="/Mi/Public/home/image/v-logo-3.png" alt="" /></a>
			</li>
		</ul>
	</div>	
</div>
<!-- 底部结束 -->
</body>
</html>