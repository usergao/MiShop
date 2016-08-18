<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>小米账号 - 登录</title>
	<link rel="stylesheet" href="/Mi/Public/home/css/login.css" />
</head>
<body>
	<div id="logo">
		<a href="<?php echo U('Index/index');?>"><img src="/Mi/Public/home/image/index.png" alt="" /></a>
	</div>
	<div id="Mi">一个帐号，玩转所有小米服务！</div>
	<div id="infomation">
		<form action="<?php echo U('login');?>" method="post">
			<input type="text" name="telephone" class="account" placeholder="手机账号" required/>
			<input type="password" name="password" class="password" placeholder="密码" required/>
			<input type="submit" value="立即登录" class="sub"/>
		</form>
	</div>
	<div class="situation">
		<a href="">忘记密码</a>
	</div>
	<div class="other-way">
		<a href="<?php echo U('Login/qqlogin');?>">
			<img src="/Mi/Public/home/image/qq_login.png" alt="" />
		</a>


	</div>
	<a href="<?php echo U('Login/register');?>" class="reg">
		注册小米账号
	</a>
	<div class="lan">
		<a href="" style="font-weight:bold;">简体</a>
		<span class="sep"> | </span>
		<a href="">繁体</a>
		<span class="sep"> | </span>
		<a href="">English</a>
		<span class="sep"> | </span>
		<a href="">常见问题</a>
	</div>
	<div class="law">小米公司版权所有-京ICP备10046444-京公网安备1101080212535-京ICP证110507号</div>

</body>
</html>