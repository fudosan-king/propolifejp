// プランページ 配置計画

$(function(){
	var touchsupport = ('ontouchstart' in window); //タッチイベントの切り替え判定

	console.log(touchsupport);

	if(touchsupport){
  	$(".list li").on(touchstart, function(){  	
			var className = $(this).attr('class');
			var type = className.substr(4,5);
			//console.log(type);
  		$(".area img").attr('src','img/plan/img_area_' + type + '_cr.png');
			$(".f1 img").attr('src','img/plan/1f_' + type + '_cr.jpg');
			$(".f2 img").attr('src','img/plan/2_5f_' + type + '_cr.png');
			$(".f6 img").attr('src','img/plan/6f_' + type + '_cr.png');
	  });
		$(".list li").on(touchend, function(){
			$(".area img").attr('src','img/plan/img_area.png');
			$(".f1 img").attr('src','img/plan/1f.jpg');
			$(".f2 img").attr('src','img/plan/2_5f.png');
			$(".f6 img").attr('src','img/plan/6f.png');
		});
  } else {
  	$(".list li").hover(function(){  	
			var className = $(this).attr('class');
			var type = className.substr(4,5);
			//console.log(type);
  		$(".area img").attr('src','img/plan/img_area_' + type + '_cr.png');
			$(".f1 img").attr('src','img/plan/1f_' + type + '_cr.jpg');
			$(".f2 img").attr('src','img/plan/2_5f_' + type + '_cr.png');
			$(".f6 img").attr('src','img/plan/6f_' + type + '_cr.png');
	  },function(){
			$(".area img").attr('src','img/plan/img_area.png');
			$(".f1 img").attr('src','img/plan/1f.jpg');
			$(".f2 img").attr('src','img/plan/2_5f.png');
			$(".f6 img").attr('src','img/plan/6f.png');
		});
  };

});
