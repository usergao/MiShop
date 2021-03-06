<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>填写订单信息</title>
	<link rel="stylesheet" href="/Mi/Public/home/css/checkout.css" />
	<link rel="stylesheet" type="text/css" href="/Mi/Public/home/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/Mi/Public/home/admin/dist/css/bootstrapValidator.css"/>
	<script src="/Mi/Public/home/js/jquery.js"></script>
	<script src="/Mi/Public/home/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://lib.h-ui.net/jquery/1.9.1/jquery.min.js"></script>
	<script src="/Mi/Public/home/js/area.js"></script>
	<script src="/Mi/Public/home/js/checkout.js"></script>
	<script type="text/javascript" src="/Mi/Public/home/admin/dist/js/bootstrapValidator.js"></script>
</head>
<body>
<!--top部分-->
<div id="top">
	<div class="top-content">
		<div class="logo">
			<a href="{{U('Index/index')}}"><img src="/Mi/Public/home/image/logo.png" /></a>
		</div>
		<div class="title">
			确认订单
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
				<a href="<?php echo U('Login/del');?>">退出登录</a>
			</div>
		</div> -->

		<div class="userinfo">
			<div class="user">
				<a href="<?php echo U('Login/login');?>" >
					登录
				</a>
			</div>
			<span class="sep"> | </span>
			<div class="user-order">
				<a href="<?php echo U('Login/register');?>">注册</a>
			</div>
		</div>


	</div>
</div>
<!--top部分结束-->

<!--购买者信息填写-->
<div id="info-content">
	<div class="custom-info">
		<div class="address-title">
			<h4>收货地址</h4>
			<div class="receive-address">
				<form id="defaultForm" method="post" class="form-horizontal" action="">
                    
                    <!-- <div class="form-group">
                        <label class="col-lg-3 control-label">姓名</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="name" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">手机号</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="number" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">城市</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="city" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">详细地址</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="address" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">邮政编码</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="postcode" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-1">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button type="reset" class="btn btn-default">重置</button>
                        </div>
                    </div> -->


                    <div class="form-group">
                        <label class="col-lg-3 control-label">姓名</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">手机号</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="number" />
                        </div>
                    </div>
                    <div class="form-group">
                    	<label class="col-lg-3 control-label">选择城市</label>
                        <select name="sheng" id="a1" style="margin-left:-120px;">
						</select>
						<select name="shi" id="a2">
						</select>
						<select name="xian" id="a3">
						</select>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">详细地址</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">邮政编码</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="postcode" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-1">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button type="reset" class="btn btn-default">重置</button>
                        </div>
                    </div>
                    
                    </form>
				</div>	
				<div class="pay-type">
					<span class="first-title">支付方式</span>
					<span class="second-detail">在线支付 （支持支付宝、银联、财付通、小米钱包等）</span>
				</div>
				<div class="pay-type">
					<span class="first-title">配送方式</span>
					<span class="second-detail">快递配送（免运费）</span>
				</div>
				<div class="final-step">
					<div class="bought">
						商品及及优惠卷
					</div>
					<div class="good-info">
						<div class="info-img">
							<a href=""><img src="/Mi/Public/home/image/4c.jpg"/></a>
						</div>
						<div class="info-name">
							<a href="">
								商品名称 价格 数量
							</a>
						</div>
						<div class="info-price">
							123 X 1
						</div>
						<div class="info-status">
							有货
						</div>
						<div class="info-total">
							123元
						</div>
					</div>
				</div>
				<div class="hr-20" style="height:20px;clear:both;"></div>
				<div class="money-count">
					<div class="moneybox">
						<ul>
							<li class="clearfix">
								<label for="">商品件数：</label>
								<span>{<?php echo ($money['number']); ?>}件</span>
							</li>
							<li class="clearfix">
								<label for="">金额合计：</label>
								<span>123元</span>
							</li>
							<li class="clearfix">
								<label for="">运费：</label>
								<span>0元</span>
							</li>
							<li class="total-price">
								<label for="">应付总额：</label>
								<span>123元</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="payit">
					<input type="submit" value="去结算" class="final-decision" onclick="queding(this,'{<?php echo ($_SESSION['userinfo']['uid']); ?>}')"/>
				</div>
				<!-- </form> -->
			</div>
		</div>
	</div>
</div>


<!--购买者信息填写结束-->

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