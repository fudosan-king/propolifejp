function newWindown_map() {
	window.open("map/","map","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}
function newWindown_map2() {
	window.open("../map/","map","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}

function newWindown_planA() {
	window.open("plan-a/","planA","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}

function newWindown_planB() {
	window.open("plan-b/","planB","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}

function newWindown_planC() {
	window.open("plan-c/","planC","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}

function newWindown_planD() {
	window.open("plan-d/","planD","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
}

(function($) {
	$.fn.blink = function(option) {
		var defaults = {
			speed: 1000
		};
		var options	= $.extend(defaults, option);
		var target = this;

		setInterval(function() {
			target.fadeTo(options.speed, 0.2, function() {
				$(this).fadeTo(options.speed, 1.0);
			});
		}, options.speed * 2);

		return this;
	};

	$.fn.popup = function() {
		if (768 > $(window).width()) return;
		var target = this;
		var flg = false;
		target.each(function() {
			$(this).on({
				click: function() {
					var t = $(this).attr('data-popup');
					$('.popup').removeClass('on');
					flg = false;
					$('.' + t).addClass('on');
					flg = true;
				}
			});
		});

		target.parents('.map').find('.inner > img').on({
			click: function() {
					if(flg) {
						$('.popup').removeClass('on');
						flg = false;
					}
			}
		});
		return this;
	};

	$.fn.smooth_scroll = function(option) {
			var defaults = {
					speed: 600,
					scroll_hide: false,
					footer: '.site-footer'
			};
			var options	= $.extend(defaults, option);
			var href;
			var target = this;
			var position;
			var footer_height = 50;
			var footer_pos = $('.site-footer').position().top;
			var window_height = 0;

			$(window).on({
					load: function() {
							window_height = $(this).height();
							if (options.scroll_hide) {
								target.hide();
							}
					},
					resize: function() {
							window_height = $(this).height();
					},
					scroll: function () {
						if (!options.scroll_hide) return;
							if ($(this).scrollTop() > 100) {
									target.fadeIn();
							} else {
									target.fadeOut();
							}
							if ($(this).scrollTop() > Math.abs(window_height - footer_pos + footer_height)) {
									target.addClass('on');
							} else {
									target.removeClass('on');
							}
					}
			});

			target.find('a').on( {
					click: function() {
							href = $(this).attr('href');
							t = $(href === "#" || href === "" || href === "#top" ? 'html' : href);
							position = t.offset().top;
							$('body, html').animate({
									scrollTop: position
							}, options.speed, 'swing');
							return false;
					}
			} );
			return (this);
	};

	$.fn.tab = function() {
		if (0 === this.length) return;
		var target 	= this;
		var menus 	= target.find('#tab-menu');
		var panels 	= target.find('.tab-panel');

		menu_init();
		panel_init();

		menus.find('li').each(function() {
			$(this).find('a').on({
				click: function() {
					var t = $(this).attr('href');
					menus.find()
					panels.fadeOut();
					change_menu(t);
					$(t).fadeIn();
					return false;
				},
				mouseenter: function() {
					if ($(this).parent('li').hasClass('on')) return;
					var src = $(this).find('img').attr('src');
					$(this).find('img').attr('src', replace_image(src));
				},
				mouseleave: function() {
					if ($(this).parent('li').hasClass('on')) return;
					var src = $(this).find('img').attr('src');
					$(this).find('img').attr('src', replace_image(src));
				}
			});
		});

		function menu_init() {
			var first = menus.find('li:first-child img');
			var src 	= first.attr('src');

			menus.find('li:first-child').addClass('on');
			first.attr('src', replace_image(src));
		}

		function change_menu(t) {
			menus.find('li').each(function() {
				var src = $(this).find('img').attr('src');
				if(t === $(this).find('a').attr('href')) {
					if(src.match(/-off/)) {
						src = src.replace(/-off/, '-on');
					}
					$(this).addClass('on');
				} else {
					if(src.match(/-on/)) {
						src = src.replace(/-on/, '-off');
					}
					$(this).removeClass('on');
				}
				$(this).find('img').attr('src', src);
			});
		}

		function panel_init() {
			$('#tab01').show();
		}

		function replace_image(src) {
			if(src.match(/-off/)) {
				src = src.replace(/-off/, '-on');
			} else if(src.match(/-on/)) {
				src = src.replace(/-on/, '-off');
			}
			return src;
		}
		return this;
	};

	var btn = $('.button-toggle');
	var menu = $('.navigation ul');
	var menu_flg = false;

	function menu_ctl(w) {
		if(767 < w) {
			menu.removeClass('open');
			return;
		}
		btn.on({
			click: function() {
				if ( menu_flg ) return;
				menu_flg = true;
				menu.slideToggle( 500, function() {
					menu_flg = false;
				});
				return false;
			}
		});
	}

	var plan = $('.plan-box');
	function plan_same_height(w) {
		if (768 > w) {
			plan.find('.plan-header').height('auto');
			return;
		}
		var h = 0;
		plan.each(function() {
			if (h < $(this).find('.plan-header').height()) {
				h = $(this).find('.plan-header').height();
			}
		});
		plan.find('.plan-header').height(h);
	}

	var ico = $('.ico');
	function blink_class(w) {
		if (767 < w) {
			ico.addClass('blink').blink();
		} else {
			ico.removeClass('blink');
		}
	}

	$(window).on({
		load: function() {
			var w = $(this).width();
			menu_ctl(w);
			plan_same_height(w);
			blink_class(w);
		},
		resize: function() {
			var w = $(this).width();
			menu_ctl(w);
			plan_same_height(w);
			blink_class(w);
		}
	});

	$('.smooth_scroll').smooth_scroll();
	$('.gototop').smooth_scroll({
		'scroll_hide': true
	});
	$('.blink').blink();
	ico.popup();
	$('.life-information').tab();

	var ua = navigator.userAgent.toUpperCase();
  if(ua.indexOf('IPHONE') != -1 || (ua.indexOf('ANDROID') != -1 && ua.indexOf('MOBILE') != -1)){
    $(".btnStyle.print").hide();
  }
	
	/*20170207*/
$(function() {
    var CVBtn = $('#conversion_btn');    
    CVBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            CVBtn.fadeIn();
        } else {
            CVBtn.fadeOut();
        }
    });

});
	/*20170207*/
	
	
	
})(jQuery);
