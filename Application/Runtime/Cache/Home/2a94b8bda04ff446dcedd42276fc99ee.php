<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta property="qc:admins" content="143612201577560754560006375730707" />
    <title>小米官网</title>
    <link rel="stylesheet" href="/Mi/Public/home/css/Mi.css" />
    <link rel="stylesheet" href="/Mi/Public/home/css/iconfont.css">
    <link rel="stylesheet" href="/Mi/Public/home/css/bootstrap.css" />
    <link rel="stylesheet" href="/Mi/Public/home/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Mi/Public/home/js/jquery.js"></script>
    <script type="text/javascript" src="/Mi/Public/home/js/index.js"></script>
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
        <div id="logo">
            <a href="<?php echo U('index');?>}"><img src="/Mi/Public/home/image/logo.png" alt="" /></a>
        </div>
        <div class="guidenav">
            <ul>
                
                <li><a href="javascript:;">小米手机</a></li>
                <li><a href="javascript:;">红米</a></li>
                <li><a href="javascript:;">平板▪笔记本</a></li>
                <li><a href="javascript:;">电视</a></li>
                <li><a href="javascript:;">盒子▪影音</a></li>
                <li><a href="javascript:;">路由器</a></li>
                <li><a href="javascript:;">智能硬件</a></li>
                <li><a href="javascript:;">服务</a></li>
                <li><a href="javascript:;">社区</a></li>
                
            </ul>
        </div>
        <div class="banner_search">
            <form action="">
                <input type="text" class="search" placeholder="小米4c"/><input type="submit" value="&#xe7b9;" class='sub icon iconfont'/>
            </form>
        </div>
    </div>
    <!-- 导航栏结束 -->
    <!-- 商品分类 -->
    <div id="container">
        <div class="cover">
        </div>
        <div class="site-category">
            <ul class="category">
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">手机 电话卡</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">笔记本 平板</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">电视 盒子</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">路由器 智能配件</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">移动电源 电池 插线板</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">耳机 音箱</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">保护套 贴膜</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">线材 支架 存储卡</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">箱包 服饰</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                <a href="">
                                    <img src="/Mi/Public/home/image/minote.jpg"/>
                                    <span>小米手机5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('List/index');?>" class="cates">米兔 生活周边</a>
                    <div class="category-children" style="top:0;">
                        <ul class="category-good1">
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <a href="<?php echo U('Buy/index');?>" class="showgoods"><img src="/Mi/Public/home/image/indexshow1.jpg" alt="" /></a>
        <a href="<?php echo U('Buy/index');?>" class="showgoods"><img src="/Mi/Public/home/image/indexshow2.jpg" alt="" /></a>
        <a href="<?php echo U('Buy/index');?>" class="showgoods"><img src="/Mi/Public/home/image/indexshow3.jpg" alt="" /></a>
        <a href="<?php echo U('Buy/index');?>" class="showgoods"><img src="/Mi/Public/home/image/indexshow4.jpg" alt="" /></a>
        <a href="<?php echo U('Buy/index');?>" class="showgoods"><img src="/Mi/Public/home/image/indexshow5.jpg" alt="" /></a>
    </div>
    <!-- 商品分类结束 -->
    <!-- 常用功能 -->
    <div id="wholefunc">
        <div id="functions">
            <ul class="siglefunc">
                <li>
                    <i class="iconfont">&#xe601;</i><a href="">电信专场</a>
                </li>
                <li>
                    <i class="iconfont">&#xe60b;</i><a href="">企业团购</a>
                </li>
                <li>
                    <i class="iconfont">&#xe630;</i><a href="">官翻产品</a>
                </li>
                <li>
                    <i class="iconfont">&#xe647;</i><a href="">小米移动</a>
                </li>
                <li>
                    <i class="iconfont">&#xe782;</i><a href="">话费充值</a>
                </li>
                <li>
                    <i class="iconfont">&#xe7b9;</i><a href="">防伪查询</a>
                </li>
            </ul>
        </div>
        <div class="goods">
            <a href=""><img src="/Mi/Public/home/image/good1.jpg" alt="" /></a>
            <a href=""><img src="/Mi/Public/home/image/good2.jpg" alt="" /></a>
            <a href=""><img src="/Mi/Public/home/image/good3.jpg" alt="" /></a>
        </div>
    </div>
<!-- 常用功能结束 -->
<!-- 明星单品开始 -->
<div class="title">
    <h3>小米明星单品</h3>
</div>
<div id="stargood">
    <ul>
        <li>
            <a href=""><img src="/Mi/Public/home/image/star1.jpg" alt="" /></a>
            <div class="goodname"><a href="">小米路由器Mini</a></div>
            <div class="infos">主流双频AC智能路由器</div>
            <div class="price">129元起</div>
        </li>
        <li>
            <a href=""><img src="/Mi/Public/home/image/star2.jpg" alt="" /></a>
            <div class="goodname"><a href="">小米盒子</a></div>
            <div class="infos">4K高清网络机顶盒</div>
            <div class="price">299元</div>
        </li>
        <li>
            <a href=""><img src="/Mi/Public/home/image/star3.jpg" alt="" /></a>
            <div class="goodname"><a href="">小米note女神版</a></div>
            <div class="infos">科技与时尚的理想结合</div>
            <div class="price">1799元起</div>
        </li>
        <li>
            <a href=""><img src="/Mi/Public/home/image/star4.png" alt="" /></a>
            <div class="goodname"><a href="">小米电视</a></div>
            <div class="infos">4K无损画质，薄至9.9mm</div>
            <div class="price">3999元</div>
        </li>
        <li>
            <a href=""><img src="/Mi/Public/home/image/star5.jpg" alt="" /></a>
            <div class="goodname"><a href="">小米平板</a></div>
            <div class="infos">搭载 NVIDIA Tegra K1 平板</div>
            <div class="price">999元起</div>
        </li>
    </ul>
</div>


<!-- 明星单品结束 -->
<!-- 智能硬件 -->
<div id="smarthardware">
    <div class="hardwaretitle">
        <h3>智能硬件</h3>
        <div class="know-more">
            <a href="">查看全部<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
        </div>
    </div>
    <div class="hardware">
        <div class="miband-sale">
            <a href=""><img src="/Mi/Public/home/image/miband-sale.jpg" alt="" /></a>
        </div>
        <ul class="hardware-list">
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware1.jpg"/></a>
                <div class="goodname">小米体重秤</div>
                <div class="infos">高精度压力传感器 ｜ 手机管理全家健康</div>
                <div class="price">99元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware2.jpg"/></a>
                <div class="goodname">小蚁智能相机</div>
                <div class="infos">能看能听能说，手机远程观看</div>
                <div class="price">149元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware3.jpg"/></a>
                <div class="goodname">iHealth智能血压计</div>
                <div class="infos">送给爸妈的好礼物</div>
                <div class="price">199元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware4.jpg"/></a>
                <div class="goodname">小米路由器&nbsp;青春版</div>
                <div class="infos">将高性能路由器 凝聚于掌心大小</div>
                <div class="price">79元</div>
            </li>
        </ul>
        <ul class="hardware-list">
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware5.jpg"/></a>
                <div class="goodname">小米水质TDS检测笔</div>
                <div class="infos">准确检测家中水质纯度</div>
                <div class="price">39元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware6.jpg"/></a>
                <div class="goodname">小蚁运动相机&nbsp;套装</div>
                <div class="infos">边玩边录边拍，手机随时分享</div>
                <div class="price">499元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware7.jpg"/></a>
                <div class="goodname">Yeelight床头灯</div>
                <div class="infos">触摸式操作，给卧室1600万种颜色</div>
                <div class="price">249元</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/hardware8.jpg"/></a>
                <div class="goodname">小米智能家庭套装</div>
                <div class="infos">30多种智能玩法 3分钟快速安装</div>
                <div class="price">199元</div>
            </li>
        </ul>
    </div>
</div>
<!-- 智能硬件结束 -->
<!-- 搭配开始 -->
<div id="sale">
    <div class="sale-list">
        <h3>搭配</h3>
        <ul class="list">
            <li>热门</li>
            <li>耳机音箱</li>
            <li>电源</li>
            <li>电池存储卡</li>
        </ul>
    </div>
    <div class="sale-goods">
        <ul class="hot-goods">
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinemain1.jpg" alt="" /></a>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinemain2.jpg" alt="" /></a>
            </li>
        </ul>
        <ul class="goods-show">
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood1.jpg" alt="" /></a>
                <div class="good-name">小米移动电源10000mAh</div>
                <div class="good-price">69元</div>
                <div class="good-comment">9.7万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood2.jpg" alt="" /></a>
                <div class="good-discount">享8折</div>
                <div class="good-name">小米移动电源16000mAh</div>
                <div class="good-price">99元</div>
                <div class="good-comment">9.3万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood3.jpg" alt="" /></a>
                <div class="good-name">小米移动电源5000mAh</div>
                <div class="good-price">49元</div>
                <div class="good-comment">6.7万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood4.jpg" alt="" /></a>
                <div class="good-name">ZMi移动电源10000mAh</div>
                <div class="good-price">99元</div>
                <div class="good-comment">2.4万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood5.jpg" alt="" /></a>
                <div class="good-name">ZMi随身路由器</div>
                <div class="good-price">299元</div>
                <div class="good-comment">3.8万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood6.jpg" alt="" /></a>
                <div class="good-name">小米插线板</div>
                <div class="good-price">49元</div>
                <div class="good-comment">13万人评价</div>
            </li>
            <li>
                <a href=""><img src="/Mi/Public/home/image/combinegood7.jpg" alt="" /></a>
                <div class="good-name">小米智能插座</div>
                <div class="good-price">59元</div>
                <div class="good-comment">4.7万人评价</div>
            </li>
            <li>
                <div class="else-goods">
                    <div class="else-good-name">
                        <span>电源适配器</span>
                        <p>19.9元</p>
                    </div>
                    <a href=""><img src="/Mi/Public/home/image/combinegood8.jpg" alt="" /></a>
                </div>
                <div class="watch-more">
                    <a href="">浏览更多<small>电源</small></a>
                    <a href=""><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                </div>
            </li>
        </ul>
    </div>
</div>





<!-- 搭配结束 -->
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