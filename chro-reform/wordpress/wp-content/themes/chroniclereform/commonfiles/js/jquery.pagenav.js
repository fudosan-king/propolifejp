
/* ---------------- ページ内ナビ・スクロール追従 ---------------- */

$(function() {
    var nav = $('#boxStepNav');
    //navの位置    
    var navTop = nav.offset().top;
    //スクロールするたびに実行
    $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        //スクロール位置がnavの位置より下だったらクラスfixedを追加
        if (winTop >= navTop) {
            nav.addClass('fixed')
        } else if (winTop <= navTop) {
            nav.removeClass('fixed')
        }
    });
});


/* ---------------- ページ内ナビ・カレント表示 ---------------- */
$(function() {


	// ----------------------------------------------------
	// navカレント表示
	// ----------------------------------------------------

	var box = new Array;
	var current = -1;
	$(".boxServiceStep").each(function(i) {
		box[i] = $(this).offset().top;
	});
	
	// カレント表示の変更
	function changeBox(secNum) {
		if (secNum != current) {
			current = secNum;
			secNum2 = secNum + 1;
			$("#boxStepNav li a").removeClass("on");
			$("#boxStepNav li:nth-child(" + secNum2 +") a").addClass('on');
		}
	};

	// scroll量での判定
	function scrollCheck() {
		st = $(window).scrollTop()+30;
		for (var i = box.length - 1 ; i >= 0; i--) {
			if (st > box[i]) {
				changeBox(i);
				break;
			}
		};
	}
	
	// scrollでのカレント表示をon
	$(window).on("load scroll", scrollCheck);


	// ----------------------------------------------------
	// スムーススクロール
	// ----------------------------------------------------

	// ua判定
	var userAgent = window.navigator.userAgent.toLowerCase();
	var webkit = userAgent.indexOf("safari") > -1;

	$("#boxStepNav a").click( function() {

		// scrollでのカレント表示を無効にする
		$(window).off("load scroll", scrollCheck);

		// カレントclassを変更
		$("#boxStepNav li a").removeClass("on");
		$(this).addClass("on");

		// スクロール処理
		var target = $(this).attr("href");
		var targetTop = $(target).offset().top;
		$(webkit ? 'body' : 'html').animate({scrollTop: targetTop}, function() {

			// scrollでのカレント表示を再度有効にする
			$(window).on("load scroll", scrollCheck);

		});
		
		return false;
	});				


});
