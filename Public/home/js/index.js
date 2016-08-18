$(function(){
	var indexm=0;
	var indexn=0;
	// 轮播效果
	function indexscroll(){
		if(indexm==5){
			indexm=0;
		}
		$(".showgoods").eq(indexm).fadeIn(1400).siblings(".showgoods").stop().fadeOut(1400);
		indexm++;

	}
	indextime=setInterval(indexscroll,4000);

	// 鼠标放入轮播停止
	$(".showgoods").mouseover(function(){
		clearInterval(indextime);
	})
	// 鼠标移开轮播继续
	$(".showgoods").mouseout(function(){
		indextime=setInterval(indexscroll,4000);
	})
})
