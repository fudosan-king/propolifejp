
$(document).ready(function(){
$('.bxslider').bxSlider({
	mode:'horizontal', //エフェクトの種類
	speed      : 500, //エフェクトのスピード
	pager      : true , //ページャーの有無
	auto       : true, //自動再生
	pause      : 5000, //静止時間
	responsive : true,  //true or false
    controls : true,  //前後の矢印を消すための記述
	autoControls: false
});
});
