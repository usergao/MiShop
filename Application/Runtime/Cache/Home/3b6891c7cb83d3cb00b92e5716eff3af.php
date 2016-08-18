<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>小米手机4c</title>
	<link rel="stylesheet" href="/Mi/Public/home/css/Mi-4c.css" />
	<link rel="stylesheet" href="/Mi/Public/home/css/iconfont.css">
	<script type="text/javascript" src="/Mi/Public/home/js/jquery.js"></script>
	<script type="text/javascript" src="/Mi/Public/home/js/Mi-4c.js"></script>
</head>
<body>
    <!-- banner部分 -->
    <div id="banner">
        <div class="banner_content">
            <div class="banner_left">
                <a href="" class="">小米网</a>
                <span class="sep"> | </span>
                <a href="" class="">MIUI</a>
                <span class="sep"> | </span>
                <a href="" class="">米聊</a>
                <span class="sep"> | </span>
                <a href="" class="">游戏</a>
                <span class="sep"> | </span>
                <a href="" class="">多看阅读</a>
                <span class="sep"> | </span>
                <a href="" class="">云服务</a>
                <span class="sep"> | </span>
                <a href="" class="">小米网移动版</a>
                <span class="sep"> | </span>
                <a href="" class="">问题反馈</a>
                <span class="sep"> | </span>
                <a href="" class="">SelectRegion</a>
            </div>
            <div class="shopcar">
                <a href="<?php echo U('Shopcar/index');?>"><i class="icon iconfont">&#xe61b;</i>&nbsp;&nbsp;&nbsp;购物车<span class="goodsnum">(0)</span></a>
            </div>
            
            <div class="login">
                <a href="<?php echo U('Login/login');?>">登录</a>
                <span class="sep"> | </span>
                <a href="<?php echo U('Login/register');?>">注册</a>
            </div>
            

            <!-- 用户登录时 -->

            <!-- <div class="user">
                <span style="float:left;color:#ddd;font-size:11px;margin-right:5px;">欢迎您</span>
                <div class="username">
                    <a href="<?php echo U('User/index');?>">
                       用户昵称
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    </a>
                </div>
                <span class="sep"> | </span>
                <div class="mylist">
                    <a href="<?php echo U('Login/del');?>">退出登录</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- banner部分结束 -->
    <!-- 导航栏开始 -->
    <div id="guidebar">
        <div id="logo"><a href="<?php echo U('Index/index');?>"><img src="/Mi/Public/home/image/logo.png" alt="" /></a></div>
        <div class="guidenav">
            <ul>
                <li><a href="">小米手机</a></li>
                <li><a href="">红米</a></li>
                <li><a href="">平板</a></li>
                <li><a href="">电视盒子</a></li>
                <li><a href="">路由器</a></li>
                <li><a href="">智能硬件</a></li>
                <li><a href="">服务</a></li>
                <li><a href="">社区</a></li>
            </ul>
        </div>
        <div class="banner_search">
            <form action="">
                <input type="text" class="search" placeholder="小米手机4c"/><input type="submit" value="&#xe7b9;" class='sub icon iconfont'/>
            </form>
        </div>
    </div>
	<!-- 导航栏结束 -->
	<!-- 商品展示 -->
	<div id="phoneprice">
		<div class="phoneinfo">
			<div class="name">
				小米手机4c
			</div>
			<div class="buyit">
				<a href="<?php echo U('Buy/index');?>">立即购买</a>
			</div>
			<div class="introducephone">
				<ul>
					<li><a href="" style="color:#ff6700;">功能</a><span class="phonesep"> | </span></li>
					<li><a href="">性能</a><span class="phonesep"> | </span></li>
					<li><a href="">屏幕</a><span class="phonesep"> | </span></li>
					<li><a href="">相机</a><span class="phonesep"> | </span></li>
					<li><a href="">设计</a><span class="phonesep"> | </span></li>
					<li><a href="">图集</a><span class="phonesep"> | </span></li>
					<li><a href="">参数</a><span class="phonesep"> | </span></li>
					<li><a href="">意外保</a><span class="phonesep"> | </span></li>
					<li><a href="">F码通道</a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="phoneface">
		<div class="price-container">
			<div class="price-content">
				<div class="title">小米手机4c</div>
				<div class="subtitle">骁龙808旗舰手机，爱不释手</div>
				<p class="price">标准版<span class="num">1299</span>元<span class="sep">|</span>高配版<span class="num">1499</span>元</p>
			</div>
		</div>
		<div class="slide-show">
			<ul class="slide-size">
				<li><img src="/Mi/Public/home/image/1.jpg" alt="" /></li>
				<li><img src="/Mi/Public/home/image/2.jpg" alt="" /></li>
				<li><img src="/Mi/Public/home/image/3.jpg" alt="" /></li>
			</ul>
		</div>
	</div>
	<div class="scrool-phone">
		<video autoplay="autoplay" loop="loop">
			<source src="/Mi/Public/home/image/overall-summary.mp4">
		</video>
	</div>
	<div class="phone-power">
		<ul>
			<li>
				<p class="phone-special">骁龙808</p>
				<p class="special-detail">64位处理器</p>
			</li>
			<li>
				<p class="phone-special">5英寸</p>
				<p class="special-detail">全高清屏幕</p>	
			</li>
			<li>
				<p class="phone-special">全网通2.0</p>
				<p class="special-detail">4G双卡双待</p>
			</li>
			<li>
				<p class="phone-special">1300万像素</p>
				<p class="special-detail">高画质相机</p>
			</li>
		</ul>
		<p class="phone-text">什么是你梦寐以求的手机？它一定是拥有流畅体验、漂亮外观以及更好手感的手机。人称“安卓小王子”的小米4c 正是这样一部手机，配备高通全新 64 位骁龙 808 处理器，性能媲美骁龙 810，但是功耗却更低。出色的性能不仅让你使用 app 时更快，玩大型游戏效果也极为流畅。经典的 5 英寸屏幕与全包围外壳珠联璧合，恰到好处贴合手掌，让你用起来不仅得心应手，更爱不释手。</p>
	</div>
	<div class="phone-cpu">
		<div class="cpu-container">
			<h2 class="cpu-title">万般体验始于快！<br />Qualcomm® 骁龙™ 808 旗舰级<br />64位处理器平台</h2>
			<p class="cpu-text">每一代小米手机，都代表当今的更高性能，小米4c 亦无例外。流畅的性能始于Qualcomm® 全新旗舰级骁龙™ 808 处理器平台，它采用 64 位构架，配备两个 Cortex-A57 、 四个 Cortex-A53 处理核芯，以及Adreno™ 418 图形处理器，支持多种游戏渲染特效，使小米4c 在进行 3D 游戏、高清视频播放时，呈现细致入微的复杂特效，并将画面细节处理得淋漓尽致。</p>
			<a href="" class="konw-more">了解性能></a>
			<ul class="cpu-size">
				<li style="width:120px;">
					<div class="cpu-size-detail">
						<span class="num">64</span>位
					</div>架构
				</li>
				<li style="width:144px;">
					<div>
						<span class="num">2/3</span>GB
					</div>LPDDR3 内存
				</li>
				<li style="width:144px;">
					<div>
						<span class="num">16/32</span>GB
					</div>eMMC 5.0
				</li>
			</ul>
		</div>
		<div class="cpu-sub">
			<h2>众多科技于一屏 <br />5英寸全高清阳光屏</h2>
			<p>以往人们无法相信，在手机上也能实现 1080p 电脑级的分辨率。如今，为一块 5 英寸屏幕配备众多科技，已然成为我们的旗舰标准。例如，可以根据光线独立调节每个像素的阳光屏技术，使你在阳光下观看内容也能如同室内一样。夜光屏技术通过更精确的背光调节，使夜晚读书、刷微博，光线变得更为柔和舒适。广受好评的，还有一项称为高色彩饱和度的技术，它使屏幕色域超过普通 sRGB 手机 30% 之多，可以显示的色彩范围更加广泛，无论红色、绿色亦或蓝色，都更生动地呈现在屏幕上。</p>
			<a href="" class="konw-more">了解屏幕></a>
			<ul class="cpu-size">
				<li style="width:120px;">
					<div class="cpu-size-detail">
						<span class="num">1080p</span>
					</div>全高清分辨率
				</li>
				<li style="width:144px;">
					<div>
						<span class="num">95%</span>NTSC
					</div>高色彩饱和度
				</li>
				<li style="width:144px;">
					<div>
						<span class="num">5</span>英寸
					</div>舒适握感
				</li>
			</ul>
		</div>
	</div>
		<div class="phone-camera">
			<div class="camera-size">
				<div class="camera-content">
					<img src="/Mi/Public/home/image/overall-camera-bg.jpg" alt="" />
				</div>
				<div class="camera-right">
					<div class="camera-title">
						<div>可用于创作的</div>
						<div>1300万像素相机</div>
						<div>对焦快至0.1秒</div>
					</div>
						<p>我们将摄影爱好者所向往的，都倾注在相机上：对焦快、画质好、操作感更佳。首先是加入相位对焦技术，这项技术最初源于单反相机，比一般数码相机的反差对焦更快，最快可达 0.1 秒。当你使用它拍照，对焦不再忽虚忽实，而是瞬间完成。 <br /><br />同时，为使画质达数码相机素质，专门配备了一个用来优化画质的影像处理器。当逆光拍照时，它会自动优化照片光线，使逆光下也能拍出明亮的照片。拍摄夜景时，通过多帧合成降噪技术，它能自动找出照片中的噪点进行降噪，使画质更为细腻。天空行走的云朵，原野绽放的鲜花，深秋飘散的落叶或初冬点点白雪…用手机拍摄不再称之为记录，现在拿起小米4c 进行创作吧！</p>
					<a href="" class="konw-more">了解相机></a>
				</div>
			</div>
		</div>
		<div id="buy-now">
			<ul class="choose-type">
				<li class="left"><img src="/Mi/Public/home/image/overall-compare-std.jpg" alt="" />
					<div class="choose-content">
						<div class="choose-title">小米手机4c 标准版</div>
						<div class="title-content">2GB内存+16GB容量</div>
						<span class="num">1299</span>元
						<a href="<?php echo U('Buy/index');?>">立即购买</a>
					</div>
				</li>
				<li class="right"><img src="/Mi/Public/home/image/overall-compare-pro.jpg" alt="" />
					<div class="choose-content">
						<div class="choose-title">小米手机4c 高配版</div>
						<div class="title-content">3GB内存+32GB容量</div>
						<span class="num">1499</span>元
						<a href="<?php echo U('Buy/index');?>">立即购买</a>
					</div>
				</li>
			</ul>
		</div>
	<!-- 商品展示结束 -->
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
					<a href="">
					<img src="image/v-logo-1.png" alt="" />
					</a>
				</li>
				<li>
					<a href="">
					<img src="image/v-logo-2.png" alt="" />
					</a>
				</li>
				<li>
					<a href="">
					<img src="image/v-logo-3.png" alt="" />
					</a>
				</li>
			</ul>
		</div>	
	</div>
	<!-- 底部结束 -->
</body>
</html>