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
					footer: '.site-footer',
					offset: 0,
					sp_offset: 0
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
						var off = (767 < $(window).width()) ? options.offset : options.sp_offset;
						href = $(this).attr('href');
						t = $(href === "#" || href === "" || href === "#top" ? 'html' : href);
						position = t.offset().top;
						$('body, html').animate({
							scrollTop: position - off
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

	var btn = $('.smp-naviagtion-wrap .button-toggle'),
		menu = $('.smp-naviagtion-wrap .navigation'),
		menu_flg = false;
	// var menu = $('.navigation ul');

	function menu_ctl(w) {
		// if(767 < w) {
		// 	menu.removeClass('open');
		// 	return;
		// }
		// console.log('ok');
		btn.stop().on({
			click: function() {
				menu.toggleClass('open');
				// if ( menu_flg ) return;
				// menu_flg = true;
				// menu.slideToggle( 500, function() {
				// 	menu_flg = false;
				// });
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

	var mv = $('.home .main-visual ul'), mv_slider;
	if (0 < mv.length) {
		var pos_x_s, pos_x_e;
		$('.home .main-visual-wrap h2').on({
			touchstart: function(e) {
				pos_x_s = Math.floor(e.originalEvent.pageX);
			},
			touchend: function(e) {
				pos_x_e = Math.floor(e.originalEvent.pageX);
				if (50 < pos_x_e - pos_x_s) {
					mv_slider.goToPrevSlide();
				} else if (-50 > pos_x_e - pos_x_s) {
					mv_slider.goToNextSlide();
				}
			}
		});

		$(window).on({
			load: function() {
				var hh = $('.site-header .inner').outerHeight(), rw = $(this).width(), rh = (455 > $(this).height() - hh) ? 455 : $(this).height() - hh, r = rh / rw;
				if (0.43071 > r) {
					// rh = rw * 0.430871 < rh ? $(this).height() - hh : rw * 0.430871;
					$('.home .main-visual').addClass('short');
				} else {
					$('.home .main-visual').removeClass('short');
				}
				$('.home .main-visual li').css('height', rh + 'px');
				$('.home .main-visual').css({
					'width': rw + 'px',
					'height': rh + 'px',
				}).promise().done(function() {
					mv_slider = mv.bxSlider({
						'auto': true,
						'pager': false,
						'controls': false,
						'minSlides': 1
					});
				});

			},
			resize: function() {
				var hh = $('.site-header .inner').outerHeight(), rw = $(this).width(), rh = (455 > $(this).height() - hh) ? 455 : $(this).height() - hh, r = rh / rw;

				if (0.43071 > r) {
					// rh = rw * 0.430871 < rh ? $(this).height() - hh : rw * 0.430871;
					$('.home .main-visual').addClass('short');
				} else {
					$('.home .main-visual').removeClass('short');
				}

				$('.home .main-visual').css({
					'width': rw + 'px',
					'height': rh + 'px',
				}).promise().done(function() {
					if (455 < rh) {
						if ( 'undefined' !== typeof mv_slider ) {
							mv_slider.destroySlider();
							mv_slider = mv.bxSlider({
								'auto': true,
								'pager': true,
								'controls': false,
								'minSlides': 1,
								onSliderLoad: function() {
									$('.home .main-visual .bx-viewport').css({
										'cssText': 'height: ' + rh + 'px' + ' !important;'
									});
									$('.home .main-visual li').css('height', rh + 'px');
								}
							});
						}
					}
				});
			}
		});
	}


	$(window).on({
		load: function() {
			var w = $(this).width();
			menu_ctl(w);
			plan_same_height(w);
			blink_class(w);
			modal();
			if ( $('.popup-campaign-banner').length ) {
				$('body').css({
					'position': 'fixed'
				});
				$('.layer').addClass('open');
				$('.popup-campaign-banner').addClass('on');
				$('.popup-campaign-banner .btn-close a').on('click', function() {
					$('.layer').removeClass('open');
					$('.popup-campaign-banner').removeClass('on');
					$('body').css({
						'position': 'static'
					});
					$('.main-visual-wrap h2').addClass('on');
				});
			}
		},
		resize: function() {
			var w = $(this).width();
			// menu_ctl(w);
			plan_same_height(w);
			blink_class(w);
		}
	});

	$('.smooth_scroll').smooth_scroll();

	$('.equipment-section01 li').smooth_scroll({
		sp_offset: 185
	});

	$('.upper-menu.access-menu li').smooth_scroll({
		sp_offset: 185
	});

	$('.lower-menu.access-menu li').smooth_scroll({
		sp_offset: 135
	});

	$('.gototop').smooth_scroll({
		'scroll_hide': true
	});
	$('.blink').blink();
	ico.popup();
	$('.life-information').tab();

	$('.map-link a').off().on({
		click: function() {
			if ($('body').hasClass('home')) {
				newWindown_map();
			} else {
				newWindown_map2();
			}
			return false;
		}
	});



	var ua = navigator.userAgent.toUpperCase();
  if(ua.indexOf('IPHONE') != -1 || (ua.indexOf('ANDROID') != -1 && ua.indexOf('MOBILE') != -1)){
    $(".btnStyle.print").hide();
  }

	/*20170207*/
$(function() {
    var CVBtn = $('#conversion_btn');
    // CVBtn.hide();
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 50) {
    //         CVBtn.fadeIn();
    //     } else {
    //         CVBtn.fadeOut();
    //     }
    // });

});
	/*20170207*/

function modal() {
	var link = $('.modal-link'),
			layer = $('.layer'),
			modal = $('.modal');

	if (0 === link.length) return;

	link.on({
		click: function() {
			modal.toggleClass('open');
			layer.toggleClass('open');
			var t = $("html");
			position = t.offset().top;
			$('body, html').animate({
				scrollTop: position
			}, 40, 'swing');
			return false;
		}
	});

	modal.find('.btn-close a').on({
		click: function() {
			modal.toggleClass('open');
			layer.toggleClass('open');
			return false;
		}
	});

	layer.on({
		click: function() {
			modal.toggleClass('open');
			layer.toggleClass('open');
			return false;
		}
	});
}

/* 20170421 */
function smp_scroll() {
	var body = $('body'),
		h 	 = $('.site-header'),
		hh   = h.find('h1').outerHeight(),
		btn  = $('#conversion_btn'),
		nav  = $('.navigation'),
		inn  = h.find('.inner'),
		ibtn = inn.find('.btn'),
		upper_text_pos = 0,
		bn, bn_pos = 0;

	if ( $('.bn-mv-modelroom').length ) {
		bn = $('.bn-mv-modelroom'),
		bn_pos = bn.position().top;
	}
	$(window).on('load scroll', function() {
		if ( $('.upper-text-wrap').length ) {
			$('.upper-text-wrap').css({
				paddingTop: $('.upper-text').outerHeight()
			});
		}

		if (767 < $(this).width()) {
			// body.removeClass('fixed').css('paddingTop', '0px');
			btn.fadeIn();

			if ( $('.upper-text-wrap').length ) {
				upper_text_pos = $('.upper-text-wrap').position().top;

				if ( upper_text_pos.length ) {
					if ( upper_text_pos < $('html').scrollTop() ) {
						body.addClass('scroll-on');
					} else {
						body.removeClass('scroll-on');
					}
				}
			}

			// return;
		} else {
			body.removeClass('scroll-on');
		}
		var ih = $('.site-header .inner').outerHeight();
		// $('.site').css('paddingTop', ih + 'px');
		if (0 <= $(this).scrollTop() && hh > $(this).scrollTop()) {
			body.removeClass('fixed');
			// $('.site').css('paddingTop', '0px');
			btn.fadeIn();
		} else if (hh <= $(this).scrollTop()) {
			body.addClass('fixed');
			btn.fadeOut();
		}

		if ( 'undefined' !== typeof bn ) {
			if ( bn.length ) {
				if ( bn_pos <= $(this).scrollTop() ) {
					bn.addClass('fixed').css('top', $('.site-header .inner').outerHeight());
				} else if ( bn_pos > $(this).scrollTop() ) {
					bn.removeClass('fixed').css('top', 'auto');
				}
			}
		}

	});
	$(window).on('load', function() {
		// $('.main-visual-wrap h2').addClass('on');
	});
	$(window).on('resize', function() {
		if ( $('.upper-text-wrap').length ) {
			$('.upper-text-wrap').css({
				paddingTop: $('.upper-text').outerHeight()
			});
			upper_text_pos = $('.upper-text-wrap').position().top;
		}
		if ( bn.length() ) {
			bn_pos = bn.position().top;
		}
		if (767 < $(this).width()) {
			body.removeClass('fixed').css('paddingTop', '0px');
			btn.fadeIn();
			return;
		}
	});
}
smp_scroll();

})(jQuery);
