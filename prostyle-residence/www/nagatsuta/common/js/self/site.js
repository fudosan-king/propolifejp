$(document).ready(function(){
/* ページトップへ移動 */
    $('.page_top a').click(function () {
        $($.browser.webkit ? 'body' : 'html').animate({ scrollTop: 0}, 500);
    });

var w = $(window).width();


// Android
if(ut.userAgent.match(/Android/)) {
	$('html').addClass('android');
	$('html').addClass('mobile');
	if(ut.userAgent.match(/Mobile/)) {
		$('html').addClass('sp');
	}
};

// iOS
if(ut.userAgent.match(/iPhone|iPad/)) {
	$('html').addClass('ios');
	$('html').addClass('mobile');
	if(ut.userAgent.match(/iPhone/)) {
		$('html').addClass('sp');
	}
};



$(function(){
	$('a img').hover(function(){
		$(this).attr('src',$(this).attr('src').replace('_off','_on'));
	},function(){
		$(this).attr('src',$(this).attr('src').replace('_on','_off'));
	});
});








/* TEL */

if($('html').hasClass('sp')){
		$('.phone').wrapInner('<a href="tel:0120965297" style="display:block;">');

	}



/* SP用メニュー */

	$('.sp_toggle').bind('click', function (e) {
		if($('#gnav').css('display') == 'none') {
			$('#gnav').slideDown("fast");
		} else  {
			$('#gnav').slideUp("fast");
		};
	});
	$(window).bind('resize', function (e) {
		if(ut.windowW > 600) {
			$('#spnav_toggle .on, #spreq_toggle .on').hide();
			$('#header_require').css({'display' : ''});
			$('#gnav').css({'display' : ''});
		}
	});





/* 外部リンク */

$('a[href^="http"]').attr('target', '_blank');

$('#imgToogle').click(function(){
        var nav_bottom = $('.navbar-fixed-bottom');
        var toggle = $('.toggle');
        var data_display = nav_bottom.attr('data-display');

        var toggle_pos = 0;

        nav_bottom.slideToggle('fast', function(){
        });
        if(data_display == 'show'){
            nav_bottom.attr('data-display', 'hidden');
        }else{
            toggle_pos = 20;
            nav_bottom.attr({'data-display':'show', 'style':''});
        }

        toggle.animate({
            bottom: toggle_pos,
        });
    });

    $('#navTel').click(function(){
        window.location = 'tel:0120965297';
    });
    $('#navContact').click(function(){
        window.open('https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-njqhq-fbd2980b9b0a049ce514f99b2df63c24', '_blank');
    });

});




/* ポップアップ */

(function($){

	$.fn.subwin = function(settings){

		// Settings to configure the jQuery lightBox plugin how you like
		settings = jQuery.extend({
			default_width: 850,
			default_height: 880
			},settings);
		var jQueryMatchedObj = this; // This, in this context, refer to jQuery object

		settings.width = settings.width || settings.default_width;
		settings.height = settings.height || settings.default_height;

		function open_subwin(url,w,h){
			var sWin = window.open(url, "",  "width=" + w +", height=" + h + ",scrollbars=yes" );
			return;
		};

		this.each(function(){
			var _url = $(this).attr('href');
			$(this).attr('href','javascript:void(0);');
			//$(this).attr('target',null);
			$(this).removeAttr('target');
			$(this).click(function(){
				open_subwin(_url,settings.width,settings.height);
				return false;
			});
		});

	};



})(jQuery);

$(function(){
	$('a.subW').attr('target', '_blank').subwin();
});

