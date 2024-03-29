

$(function() {

	var fullpage = $('#fullpage'), flg = false, body = $('body'), flg_fullpage = false,
			fullpage_args = {
				scrollOverflow: true,
				navigation: true,
				paddingTop: '5rem',
				afterRender: function() {
					$('.section').height('auto');
					flg_fullpage = true;
				},
				onLeave: function(index, nextIndex, direction) {
					if (2 === nextIndex && 'down' === direction) {
						body.addClass('scroll-fix');
						$('.section01').addClass('on');	
					}
					if (3 === nextIndex && 'down' === direction) {
						$('.section02').addClass('on');	
					}
					if (4 === nextIndex && 'down' === direction) {
						$('.section03').addClass('on');	
					}
					if (5 === nextIndex && 'down' === direction) {
						$('.section04').addClass('on');	
					}
					if (6 === nextIndex && 'down' === direction) {
						$('.section05').addClass('on');	
					}
					if (1 === nextIndex && 'up' === direction) {
						flg = true;
					}
				},
				afterLoad: function(anchorLink, index) {
					switch (index) {
						case 2:
							$('.section01 h2').delay(500).fadeIn(1500);
							$('.section01 .txt').delay(900).fadeIn(1500);
							break;
						case 3:
							$('.section02 .txt').delay(600).fadeIn(1500);
							break;
						case 4:
							$('.section03 .txt').delay(600).fadeIn(1500);
							break;
						case 5:
							$('.section04 .txt').delay(600).fadeIn(1500);
							break;
						case 6:
							$('.section05 .txt').delay(600).fadeIn(1500);
							break;
						default:
							break;
					}
					if (flg) {
						body.removeClass('scroll-fix');
						flg = false;
					}
				}
			},
			menu = $('.toggle-menu'),
			nav = $('.site-navigation'),
			main_visual = $('#main-visual');

	menu.on('click', function() {
		nav.toggleClass('open');
	});

	var func_scroll_class = function() {
		var pos = 76, w, t = $('#fullpage'), offset, start_pos = 0,
		scrollHeight = t.height() + pos,
		flaot_menu = $('.footer-fixed-menu');

		$(window).on('load resize', function() {
			var h = flaot_menu.outerHeight();
			t.css('paddingBottom', h + 'px');
		});

		t.on({
			scroll: function() {
				var current_pos = $(this).scrollTop(),
					scrollHeight = $(this).get(0).scrollHeight,
					scrollPosition = $(window).height() + current_pos;

				if ( current_pos <= scrollHeight - $(this).get(0).offsetHeight + 50 && current_pos > scrollHeight - $(this).get(0).offsetHeight - 100 ) {
					body
						.removeClass('scroll-up')
						.removeClass('scroll-down')
						.addClass('scroll-end');

				} else {
					body.removeClass('scroll-end');
				}
				if (current_pos <= 0) {
					if ( !body.hasClass('scroll-start') ) {
						body
							.removeClass('scroll-fix')
							.removeClass('scroll-up')
							.removeClass('scroll-down')
							.addClass('scroll-start');
					}
				} else if (current_pos > start_pos) {
					if ( !body.hasClass('scroll-end') ) {
						body
							.removeClass('scroll-up')
							.removeClass('scroll-start')
							.addClass('scroll-down');
					}
					if ( !body.hasClass('scroll-fix') ) {
						body.addClass('scroll-fix');
					}
				} else {
					if ( !body.hasClass('scroll-end') ) {
					    body
							.removeClass('scroll-down')
							.addClass('scroll-up');
					}
				}
				if (body.hasClass('home')) {
					offset = Math.abs($('#fullpage #main-visual').offset().top);
				
					var w = $(this).width();
					if ((768 > w)) {
						if (0 <= offset && pos >= offset) {
							body.removeClass('scroll-fix');
						} else if (pos < t.scrollTop()) {
							body.addClass('scroll-fix');
						}
					}
				}
				start_pos = current_pos;
			}
		});

		if (body.hasClass('page')) {
			$(window).on({
				scroll: function() {
					var offset = $(this).scrollTop();
					if (0 <= offset && pos >= offset) {
						body.removeClass('scroll-fix');
					} else if (pos < offset ) {
						body.addClass('scroll-fix');
					}
				}
			});
		}
		
	};
	func_scroll_class();

	var func_main_visual_switcher = function() {
		if (0 === main_visual.length) return;

		$.each(bg_images, function(i) {
			var ac = (0 === i) ? ' active' : '';

			if (0 < main_visual.find('.fp-tableCell').length) {
				main_visual.find('.fp-tableCell').append('<div id="layer' + (i + 1)  + '" class="layer' + ac +'" style="background-image: url(' + this + ')"></div>');
			} else {
				main_visual.append('<div id="layer' + (i + 1)  + '" class="layer' + ac +'" style="background-image: url(' + this + ')"></div>');
			}
		});

		var layer = main_visual.find('.layer'), flg = false, loop = true;

		setInterval(function() {
			if (loop) {
				loop = false;
				page_loading()
					.then(logo)
					.then(bg_view);
			}
		}, 500);

		function page_loading() {
			var d = new $.Deferred,
					loader_bg = $('#loader-bg'),
					loader = $('#loader');
			if (!flg) {
				loader_bg.delay(2000).fadeOut(800);
			  	loader.delay(1700).fadeOut(300, function() {
					$('.logo').delay(1500).fadeIn(1500);
					d.resolve();
				});
			} else {
				$('.logo').delay(1500).fadeIn(1200);
				layer.eq(layer.length - 1).delay(5000).removeClass('active');
				layer.eq(0).delay(5000).addClass('active');
				d.resolve();
			}
	  		return d.promise();
		}

		function logo() {
			var d = new $.Deferred;
			$('.logo').delay(3000).fadeOut(1000, function() {
				$('.catch').fadeIn(1200);
				d.resolve();
			});
			return d.promise();
		}

		function bg_view() {
			var d = new $.Deferred, cnt = 1, timer;
						
			timer = setInterval(function() {
				n = 0;
				if (cnt === layer.length) {
					clearInterval(timer);
					$('.catch').delay(1500).fadeOut(1200, function() {
						flg = true;
						loop = true;
					});
					
					d.resolve();
					return false;
				}
				layer.eq(cnt - 1).delay(5000).removeClass('active');
				layer.eq(cnt).delay(5000).addClass('active');
				
				cnt++;
			}, 5000);

			return d.promise();
		}
	};
	func_main_visual_switcher();

	var func_main_visual_height = function() {
		var mv = $('#main-visual'),
			ti = $('#titleImage');

		if (0 < mv.length) {
			$(window).on('load resize', function() {
				var w = $(this).width(), h = $(this).height();

				if (767 < w) {
					mv.css('paddingTop', '0px');
				} else {
					mv.css('paddingTop', (((h - 76) / w) * 100) + '%');
				}
			});
		}

		// if (0 < ti.length) {
		// 	$(window).on('load resize', function() {
		// 		var w = $(this).width(), h = $(window).height();
		// 		ti.css('height', (h - 76) + 'px');
		// 	});
		// }
	};
	func_main_visual_height();

	var top_page_load = function() {
		if (!body.hasClass('home')) return;
		

		$(window).on({
			load: function() {
				if (768 > $(this).width()) {
					$('.home .section01 h2').show();
					$('.home .section .txt').show();
				} else {
					$('.home .section01 h2').hide();
				$('.home .section .txt').hide();
				}
			},
			resize: function() {
				if (768 > $(this).width()) {
					if ($('.home .section01 h2').hide()) {
						$('.home .section01 h2').show();
					}
					if ($('.home .section .txt').hide()) {
						$('.home .section .txt').show();
					}
				} else {
					$('.home .section01 h2').show();
					$('.home .section .txt').show();
				}
			}
		});
	};
	top_page_load();

	var func_popup = function() {
		var popup = $('.popup');
		if (0 === popup.length) return;

		popup.each(function() {
			$(this).on('click', function() {
				var args, size = $(this).data('size').split(','), opt = $(this).data('option');

				args = "width=" + size[0] + ", height=" + size[1] + ", " + opt;
				window.open($(this).attr('href'), $(this).data('name'), args);
				return false;
			});
		});
	};

	var func_section_rate = function() {
		var section = $('.section'),
			layout = 0.625 < ( $(window).height() / $(window).width() ) ? 'layout02' : 'layout01';

		section.addClass(layout);
	};

	$(window).on({
		load: function() {
			var w = $(this).width();
			if (body.hasClass('home')) {
				if (767 < w) {
					$('.section').height($(this).height());
					fullpage.fullpage(fullpage_args);
					nav.removeClass('open');
					flg_fullpage = true;
				}
			} else {
				if (flg_fullpage) {
					$.fn.fullpage.destroy("all");
					flg_fullpage = false;
				}
			}

			if (0 < $('.mh').length) {
    			$('.mh').matchHeight();
			}
			func_popup();
			func_section_rate();
		},
		resize: function() {
			var w = $(this).width();
			if (body.hasClass('home')) {
				if (767 < w) {
					if (!flg_fullpage) {
						fullpage.fullpage(fullpage_args);
						flg_fullpage = true;
					}
					nav.removeClass('open');
				} else {
					if (flg_fullpage) {
						$.fn.fullpage.destroy("all");
						flg_fullpage = false;
					}
				}
			}
			func_section_rate();
		}
	});

});