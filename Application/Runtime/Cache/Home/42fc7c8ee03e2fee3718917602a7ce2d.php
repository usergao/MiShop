<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>手机——小米手机官网</title>
    <link rel="stylesheet" href="/Mi/Public/home/css/list.css" />
    <link rel="stylesheet" href="/Mi/Public/home/css/iconfont.css">
    <link rel="stylesheet" href="/Mi/Public/home/css/bootstrap.css" />
    <link rel="stylesheet" href="/Mi/Public/home/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Mi/Public/home/js/jquery.js"></script>

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
<!--商品分类列表-->
<div id="list">
	<div class="list-title">
		<a href="">首页</a>  > 所有商品
	</div>

	<div class="list-kinds">
		<div class="kinds">
			<span class="kind1">机型：</span>
            <span class="kindall">全部</span>
			
			<ul>
				<li>
					<a href="<?php echo U('index');?>">小米Note</a>
				</li>
                <li>
                    <a href="<?php echo U('index');?>">红米手机</a>
                </li>
                <li>
                    <a href="<?php echo U('index');?>">红米Pro</a>
                </li>
                <li>
                    <a href="<?php echo U('index');?>">小米手机4c</a>
                </li>
                <li>
                    <a href="<?php echo U('index');?>">小米Max</a>
                </li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="order-list-box">
			<ul class="order-list">
				<li class="active">
					<a href="">推荐</a>
				</li>
				<li>
					<a href="">新品</a>
				</li>
				<li>
					<a href="">价格<span class=" glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a>
				</li>
			</ul>
		</div>
		<div class="good-list-box">
			<div class="good-list">
				<div class="flags">
					<div class="likeit">
						<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
						<a href="" class="like">喜欢</a>
					</div>
					<div class="addcar">
						<a href="" class="add">加入购物车</a>
						<i class="icon iconfont">&#xe61b;</i>
					</div>
				</div>
				<div class="good-image">
					<a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
				</div>
				<div class="good-title">
					<a href="<?php echo U('Buy/index');?>">小米手机4c</a>
				</div>
				<div class="good-price">
					1100元
				</div>
				<div class="good-thumbs">
					<ul>
						<li><img src="/Mi/Public/home/image/4c.jpg"/></li>
					</ul>
				</div>
			</div>
            <div class="good-list">
                <div class="flags">
                    <div class="likeit">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <a href="" class="like">喜欢</a>
                    </div>
                    <div class="addcar">
                        <a href="" class="add">加入购物车</a>
                        <i class="icon iconfont">&#xe61b;</i>
                    </div>
                </div>
                <div class="good-image">
                    <a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
                </div>
                <div class="good-title">
                    <a href="<?php echo U('Buy/index');?>">小米手机4c</a>
                </div>
                <div class="good-price">
                    1100元
                </div>
                <div class="good-thumbs">
                    <ul>
                        <li><img src="/Mi/Public/home/image/4c.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="good-list">
                <div class="flags">
                    <div class="likeit">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <a href="" class="like">喜欢</a>
                    </div>
                    <div class="addcar">
                        <a href="" class="add">加入购物车</a>
                        <i class="icon iconfont">&#xe61b;</i>
                    </div>
                </div>
                <div class="good-image">
                    <a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
                </div>
                <div class="good-title">
                    <a href="<?php echo U('Buy/index');?>">小米手机4c</a>
                </div>
                <div class="good-price">
                    1100元
                </div>
                <div class="good-thumbs">
                    <ul>
                        <li><img src="/Mi/Public/home/image/4c.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="good-list">
                <div class="flags">
                    <div class="likeit">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <a href="" class="like">喜欢</a>
                    </div>
                    <div class="addcar">
                        <a href="" class="add">加入购物车</a>
                        <i class="icon iconfont">&#xe61b;</i>
                    </div>
                </div>
                <div class="good-image">
                    <a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
                </div>
                <div class="good-title">
                    <a href="<?php echo U('Buy/index');?>">小米手机4c</a>
                </div>
                <div class="good-price">
                    1100元
                </div>
                <div class="good-thumbs">
                    <ul>
                        <li><img src="/Mi/Public/home/image/4c.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="good-list">
                <div class="flags">
                    <div class="likeit">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <a href="" class="like">喜欢</a>
                    </div>
                    <div class="addcar">
                        <a href="" class="add">加入购物车</a>
                        <i class="icon iconfont">&#xe61b;</i>
                    </div>
                </div>
                <div class="good-image">
                    <a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
                </div>
                <div class="good-title">
                    <a href="<?php echo U('Buy/index');?>">小米手机4c</a>
                </div>
                <div class="good-price">
                    1100元
                </div>
                <div class="good-thumbs">
                    <ul>
                        <li><img src="/Mi/Public/home/image/4c.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="good-list">
                <div class="flags">
                    <div class="likeit">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <a href="" class="like">喜欢</a>
                    </div>
                    <div class="addcar">
                        <a href="" class="add">加入购物车</a>
                        <i class="icon iconfont">&#xe61b;</i>
                    </div>
                </div>
                <div class="good-image">
                    <a href="<?php echo U('Show/index');?>"><img src="/Mi/Public/home/image/4c.jpg"/></a>
                </div>
                <div class="good-title">
                    <a href="<?php echo U('Buy/index');?>">小米手机4c</a>
                </div>
                <div class="good-price">
                    1100元
                </div>
                <div class="good-thumbs">
                    <ul>
                        <li><img src="/Mi/Public/home/image/4c.jpg"/></li>
                    </ul>
                </div>
            </div>
		</div>
	</div>
</div>


<!--商品分类结束-->
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
                <img src="/Mi/Public/home/image/v-logo-1.png" alt="" />
                </a>
            </li>
            <li>
                <a href="">
                <img src="/Mi/Public/home/image/v-logo-2.png" alt="" />
                </a>
            </li>
            <li>
                <a href="">
                <img src="/Mi/Public/home/image/v-logo-3.png" alt="" />
                </a>
            </li>
        </ul>
    </div>  
</div>
<!-- 底部结束 -->
</body>
</html>