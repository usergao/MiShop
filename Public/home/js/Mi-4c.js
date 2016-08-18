$(function(){
	var indexm=0;
	var indexn=0;
	// 轮播效果
	function indexscroll(){
		if(indexm==3){
			indexm=0;
		}
		$(".slide-show li").eq(indexm).fadeIn(1500).siblings(".slide-show li").fadeOut(1500);
		indexm++;
	}
	indextime=setInterval(indexscroll,5000);
})
