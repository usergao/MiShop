$(function(){
	
	//密码提示
	$('#new-pwd').blur(function(){
		val=$(this).val();
		if(val==''){
			$('.notice').css({display:"none"});
			$('.confirm').css({display:"block"});
		}else{
			$('.confirm').css({display:"none"});
		}
	})
	
	//确认密码提示
	$('#new-pwd-again').blur(function(){
		val=$(this).val();
		if(val==''){
			$('.confirm-again').css({display:"block"});
		}else{
			$('.confirm-again').css({display:"none"});
		}
	})
})
