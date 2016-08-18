$(function(){
	// 购物车商品的数量
	len=$('.good-info').length;
	$('.good-count span').html(len);
});
// 判断最多购买数量
function addplus(obj,id,tid){
	// 商品数量
	var num=parseInt($(obj).siblings('.phone-num').val());
	// 商品单价
	var singleprice=$(obj).parents('.raise-num').siblings('.info-single-price').children('span').html();
	// 购物车总价
	var totalprice=$('.good-price').children('span');
	// totalprice.html(num*singleprice);
	// ajax查询库存
    $.ajax({
    	url:"index.php?m=Home&c=Shopcar&a=inventory",
    	type:'post',
    	data:{pid:id},
    	success:function(data){
    		inven=data;
    		if(num<data&&num<10){
    			// 增加购买数量
    			$(obj).siblings('.phone-num').val(num+1);
    			// 增加小计价格
    			price=parseInt(singleprice)*(num+1);
    			$(obj).parents('.raise-num').siblings('.total-price').children('span').html(price);
    			// 增加总价价格
    			total=parseInt(singleprice)+parseInt(totalprice.html());
    			totalprice.html(total);
    			// 传值修改SESSION中的num和总价格
    			$.ajax({
    				url:"index.php?m=Home&c=Shopcar&a=changeNum",
    				type:'post',
    				data:{kid:tid,num:num},
    				success:function(data){
    				}
    			});
    		}else{
    			alert('超过当前可购买数量');
    		}
    	}
    })
}
// 判断最少购买数量
function minus(obj,id,tid){
	// 商品数量
	var num=parseInt($(obj).siblings('.phone-num').val());
	// 商品单价
	var singleprice=$(obj).parents('.raise-num').siblings('.info-single-price').children('span').html();
	// 购物车总价
	var totalprice=$('.good-price').children('span');
	// ajax查询库存
	if(num==1){
		alert('低于最少购买数量');
	}else{
		// 减少购买数量
		$(obj).siblings('.phone-num').val(num-1);
		// 减少小计价格
    	price=parseInt(singleprice)*(num-1);
    	$(obj).parents('.raise-num').siblings('.total-price').children('span').html(price);
    	// 减少总价价格
    	total=parseInt(totalprice.html())-parseInt(singleprice);
    	totalprice.html(total);
	}
}

// 删除商品
function delGood(obj,id){
	if(confirm('确认要删除此商品吗？')) {
		price=$(obj).parents('.remove').siblings('.total-price').children('span').html();
		totalnow=$('.good-price span').html();
		totalafter=parseInt(totalnow)-parseInt(price);
		// alert(totalafter);
		$.ajax({
			url:"index.php?m=Home&c=Shopcar&a=del",
			type:"post",
			data:{id:id},
			success:function(data){
				if(data){
					$(obj).parents('.good-info').remove();
					$('.good-price span').html(totalafter);
				}else{
					alert('删除出错');
				}
			}
		})
	}
}