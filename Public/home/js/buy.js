$(function(){
	var indexm=0;
	// 轮播效果
	function indexscroll(){
		indexm++;
		if(indexm==3){
			indexm=0;
		}
		$(".slide-show li").eq(indexm).fadeIn(800).siblings(".slide-show li").fadeOut(800);
	}
	indextime=setInterval(indexscroll,3000);

	$(document).scroll(function(){
		width=$(document).scrollTop();
		if(width>=930){
			$("#fixed-banner").css({display:"block"});
		}else{
			$("#fixed-banner").css({display:"none"});
		}
	})
	
	//获取所选商品信息
	$('.different-type ul li').click(function() {
		$(this).addClass('cur').siblings('li').removeClass('cur');

		len=$('.different-type .cur').length;
		str='';
		thislen=$('.different-type').length;
		// alert(thislen);
		for (var i = 0; i < len; i++) {
			str+=','+$('.different-type .cur').eq(i).val();
		};
		if(len==thislen){
				$.ajax({
				url:'index.php?m=Home&c=Buy&a=getPro',
				type:'post',
				data:{combine:str,gid,gid},
				dataType:'json',
				success:function(data){
					if(data.state==0){
						$('.no-good').css({display:"block"});
						$('.next-step').css({display:"none"});
						$('.buyit').css({display:"none"});
					}else if(data.state==1){
						$('.no-good').css({display:"none"});
						$('.next-step').css({display:"none"});
						$('.buyit').css({display:"block"});
					}
				}
			})
		}
		
	});
	
	// 提交所选商品信息到购物车
	$('.buyit').click(function() {
		var num=1;
		len=$('.different-type .cur').length;
		var str='';
		for (var i = 0;i < len;i ++) {
			str+=','+$('.different-type .cur').eq(i).val();
		};
		$.ajax({
			url:'index.php?m=Home&c=Buy&a=addCart',
			data:{combine:str,num:num,gid:gid},
			type:'post',
			success:function(data){
				location.href="index.php?m=Home&c=Shopcar&a=index";
			}
		})
	})
})
