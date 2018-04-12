/* update 2013.2.22 */

(function ($) {
	
     if (!('console' in window)) {
          window.console = {};
          window.console.log = function(str){
              return str;
          };
     }
	
	/* document ready */
	
	$(function(){
	ut.jsLoader.init();
	//if(!$.support.fixedPosition) ut.jsLoader.loadScript('jquery.exfixed.js', function(){$(".fixed").exFixed();});
	//if(ut.userAgent.match(/MSIE [5-8]/)) ut.jsLoader.loadScript('jquery.belatedPNG.js', function(){$(".pngfix, img[src*='.png']").fixPng();});
	ut.windowonresize();
	ut.windowonscroll();
	});
	
	/* jquery extends */
	
	ut = {
		
	/* javascript file loader */

	jsLoader : {
		init: function (){
			scriptTags = document.getElementsByTagName('script');
			myFileName = /util\.js/;
			for (var s = 0, len = scriptTags.length; s < len; s++) {
				var stag = scriptTags.item(s);
				if(stag.src.match(myFileName)) {
					my = stag;
					break;
				}
			};
			loadedScript = {}
		},
		loadScript : function(src, callback) {
			if(!callback) callback = function(){};
			if(loadedScript[src] == undefined) {
				loadedScript[src] = false;
				var head = document.getElementsByTagName("head")[0] || document.documentElement;
				var script = document.createElement('script');
				script.type= 'text/javascript';
				script.src = my.src.replace(myFileName, src);
				function onloaded() {loadedScript[src] = true; callback()};
				script.onload = onloaded;
				script.onreadystatechange = function(){
					if(this.readyState=="loaded"||this.readyState=="complete") onloaded();
				}
				
				head.appendChild(script);
			}
		}
	},
	
	/* get useragent */
	
	userAgent : window.navigator.userAgent,
	
	/* check function */
	
	canTouch : ('ontouchstart' in window),
	hasOrientation : ('orientation' in window),
	
	/* get parsed URI */
	
	parseURI : function (uri) {
		var _anchor = document.createElement('a');
		_anchor.href = uri;
		var apath = $.support.hrefNormalized ? _anchor.getAttribute("href") : $(_anchor).attr('href');
		var m = uri.match(/(\w+:)?(\/\/)?((\w+):?(\w+)?@)?([^\/\?:#]+)?:?(\d+)?(\/?[^\?#]+)?\??([^#]+)?#?(\w*)?/);
		var querys = {};
		if(m[9]) {
			for(var q = 0, _arr = m[9].split('&'), _query = _arr[0]; _query; _query = _arr[q++]) {
				var _queryset = _query.split('=');
				if(_queryset.length == 2) querys[_queryset[0]] = _queryset[1];
			}
		}
		return m ? {"absolute":apath, "scheme":m[1], "username":m[4], "password":m[5], "host":m[6], "port":m[7], "path":m[8], "querys":querys, "fragment":m[10]} : null;
	},
	
	/* get window size & scroll position */
	
	windowonresize : function () {
		function check(e) {
			ut.windowW = document.documentElement.clientWidth || window.innerWidth;
			ut.windowH = document.documentElement.clientHeight || window.innerHeight;
		}
		check(); $(window).bind("resize", check);
	},
	
	windowonscroll : function () {
		function check(e) {
			ut.scrollX = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;
			ut.scrollY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
		}
		check(); $(window).bind("scroll", check);
	},
	
	/* smooth scrolling */
	
	scrollTimeout : 0,
	smoothScroll : function (targetId, speed, offset) {
		var _speed = speed || 10;
		var _offset = offset || 0;
		var _targetStr = targetId ? targetId.replace(/.*#/,"#") : '#';
		var _targetelm = $(_targetStr);
		var start = ut.scrollY;
		var end = ((_targetStr != '#') ? _targetelm.offset().top : 0);
		end -= _offset;
		
		
		var documentH = document.documentElement.scrollHeight || document.body.scrollHeight;
		var scrollTimeout;
		if(Math.abs(start - end) < (ut.windowH * 2)) _speed /= 2;
		if(ut.userAgent.match(/MSIE/)) _speed /= 2;
		
		if(documentH - ut.windowH < end) end = documentH - ut.windowH;
		function scroll() {
			if(Math.abs(start - end) > 1) {
				start -= (start - end) / _speed;
				window.scrollTo(0, start);
			} else {
				cancel ();
				//window.location.hash = targetId.replace(/.*#/,"");
				window.scrollTo(0, end);
				
				
			}
		}
		function cancel () {
			clearInterval(ut.scrollTimeout);
			$(window).unbind("touchstart mousewheel", cancel);
			$('html,body').stop();
		}
		cancel ();
		$('html,body').bind("touchstart mousewheel", cancel);
		ut.scrollTimeout = setInterval(scroll, 20);
	}
	};
	
	$.fn.smoothScrollLink = function (option) {
		var c = $.extend({speed:10, offset:0}, option);
		this.filter("[href^=#]").each(function(index, element) {
			$(element).click( function (e) {
				ut.smoothScroll(e.currentTarget.href, c.speed, c.offset);
				return false;
			});
		});
		return this;
	}

	/* check self link */
	
	$.fn.checkSelfLink = function (option) {
		this.find(document.links).not("[href^=#], [href$=javascript]").each(function(index, element) {
			if((ut.parseURI(element.href).host === ut.parseURI(window.location.href).host) && (ut.parseURI(element.href).path === ut.parseURI(window.location.href).path)) {
				$(element).addClass('selfLink')
				.find('img:eq(0)').each(function(index, img) {
					if(img.buttonImage) $(img).buttonImage({action:"on"});
				});
			}
		});
		return this;
	}
	
	/* check parent link */
	
	$.fn.checkParentLink = function (option) {
		this.find(document.links).not("[href^=#]").each(function(index, element) {
			if(new RegExp(element.href).test(window.location.href) && (ut.parseURI(element.href).path !== ut.parseURI(window.location.href).path)) {
				$(element).addClass('parentLink')
				.find('img').each(function(index, img) {
					if(img.buttonImage) $(img).buttonImage({action:"on_enabled"});
				});
			}
		});
		return this;
	}
		
	/* rollover image */
	
	$.fn.buttonImage = function (option) {
		
		this.each(function(index, element) {
			var c;
			if('setting' in element)  {
				c = $.extend(element.setting, option);
			} else {
				c  = $.extend({rolloverPrefix:'_on', currentPrefix:'_cr', fadeTime:200, glowPrefix: '_on', glow:0, glowStrength:1, action:''}, option);
				element.setting = c
			}
			
			if(ut.userAgent.match(/MSIE [0-7]/)) c.fadeTime = 0;
			
			var prefixRegExp = new RegExp("(" + c.rolloverPrefix + ")?(" + c.currentPrefix + ")?(_off)?(\.gif|\.jpg|\.png)");
			if(!element.defaultSrc) element.defaultSrc = element.src;
			if(!element.glowSrc && c.glowPrefix) element.glowSrc = element.src.replace(prefixRegExp, c.glowPrefix + "$4");
			if(!element.rolloverSrc && c.rolloverPrefix) element.rolloverSrc = element.src.replace(prefixRegExp, c.rolloverPrefix + "$4");
			if(!element.currentSrc && c.currentPrefix) element.currentSrc = element.src.replace(prefixRegExp, c.currentPrefix + "$4");
			
			function onMouseOver (){if(!$(element).hasClass('button_on')) {
				if(c.fadeTime && element.rolloverImage) {
					element.rolloverImage.attr('src', element.rolloverSrc).fadeIn(c.fadeTime);
					if(element.currentImage && (c.rolloverPrefix != c.currentPrefix)) element.currentImage.fadeOut(c.fadeTime);
				} else {
					element.src = element.rolloverSrc;
				}
			}};
			function onMouseOut  (){if(!$(element).hasClass('button_on')) {
				if(c.fadeTime && element.rolloverImage) {
					element.rolloverImage.fadeOut(c.fadeTime);
					if(element.currentImage && $(element).hasClass('button_on_enabled') && (c.rolloverPrefix != c.currentPrefix)) element.currentImage.fadeIn(c.fadeTime);
				} else {
					element.src = element.defaultSrc;
				}
			}};
			
			switch(c.action) {
				case "on" :
				case "on_enabled" : 
					if(element.buttonImage) {
						onMouseOver();
						element.currentSrc = element.src.replace(prefixRegExp, c.currentPrefix + "$4");
						if(element.currentImage) {
							if(c.fadeTime) {
								element.currentImage.attr('src', element.currentSrc).fadeIn(c.fadeTime) 
							} else  {
								element.src = element.currentSrc;
							}
						}
						if(c.action === "on") $(element).addClass('button_on');
						else $(element).addClass('button_on_enabled');
					}
					break;
				case "off" :
					if(element.buttonImage) {
						$(element).removeClass('button_on').removeClass('button_on_enabled');
						if(element.currentImage) (c.fadeTime) ? element.currentImage.fadeOut(c.fadeTime) : element.src = element.defaultSrc;
						onMouseOut();
					}
					break;
				default :
					if(!element.buttonImage) {
					$(element).wrap("<span>");
					element.buttonImage = $(element).parent();
					
					if((c.fadeTime)){
						var cssobj = {};
						if(ut.userAgent.match(/MSIE [6-7]/)) { cssobj = {"display" : "inline", "zoom" : "1"} }
						else { cssobj = {"display" : "inline-block"} }
						cssobj = $.extend({'position' : 'relative', 'z-index' : $(element).css('z-index'), "height" : $(element).innerHeight(), "width" : $(element).innerWidth(), 'margin': $(element).css('margin'), 'overflow': 'hidden', 'cursor' : 'pointer'}, cssobj);
						element.buttonImage.css(cssobj);
						
						if(c.glow) {
							element.glowImage = $("<img alt=''>").attr({'width': $(element).attr('width'), 'height':$(element).attr('height'), 'src': element.glowSrc}).css({'position' : 'absolute', 'left' : 0, 'top' : 0}).css({opacity:0})
							.appendTo(element.buttonImage);
							(function animate_element (){
								element.glowSrc = element.src.replace(prefixRegExp, c.glowPrefix + "$4");
								element.glowImage.attr('src', element.glowSrc).animate({opacity:c.glowStrength},c.glow).animate({'opacity':0},c.glow);setTimeout(animate_element, c.glow * 2);
							}())
						}
						element.rolloverImage = $("<img alt=''>").attr({'width': $(element).attr('width'), 'height':$(element).attr('height'), 'src': element.rolloverSrc}).css({'position' : 'absolute', 'left' : 0, 'top' : 0})
						.appendTo(element.buttonImage).hide();
						if(element.currentSrc) { element.currentImage = $("<img alt=''>").attr({'width': $(element).attr('width'), 'height':$(element).attr('height'), 'src': element.currentSrc}).css({'position' : 'absolute', 'left' : 0, 'top' : 0})
						.appendTo(element.buttonImage).hide()};
					}
					
					element.buttonImage.bind(ut.canTouch ? 'touchstart' : 'mouseenter', onMouseOver).bind(ut.canTouch ? 'touchend' : 'mouseleave', onMouseOut);
					};
					break;
			}
		});
		return this;
	}
	
	/* popup window */
	
	ut.windowopen = function (href, target, option) {
		var c = $.extend({width:800, height:null, menubar:false, toolbar:false, location:false, scrollbars:true, resizable:true}, option);
		var href = href;
		var target = target || "popup";
		var width = c.width || window.innerWidth || document.documentElement.clientWidth;
		var height = c.height || window.innerHeight || document.documentElement.clientHeight;
		var futures = ",menubar=" + (c.menubar ? "yes" : "no") + ",toolbar=" + (c.toolbar ? "yes" : "no") + ",location=" + (c.location ? "yes" : "no") + ",scrollbars=" + (c.scrollbars ? "yes" : "no") + ",resizable=" + (c.resizable ? "yes" : "no");
		var newWin = window.open(href, target, 'width=' + width + ', height=' + height + futures);
		if(newWin) newWin.focus();
	}
	
	$.fn.popupLink = function (option) {
		var c = $.extend({width:800, height:0, menubar:false, toolbar:false, location:false, scrollbars:true, resizable:true}, option);
		this.each(function(index, element) {
			$(element).click( function(e){
				ut.windowopen($(this).attr('href'), $(this).attr('target'), option);
				return false;
			});
		});
		return this;
	}
	
	/* tooltip */
	
	$.fn.toolTip = function (option) {
		var c = $.extend({content: 'tooltip', relative: 'mouse'}, option);
		if(!ut.canTouch) {
		var tip = ($("#toolTip").length) ? $("#toolTip") : jQuery('<div id="toolTip">').css('position', 'absolute').appendTo(document.body);
		this.each(function(index, self){
			self.relative = c.relative;
			self.content = c.content;
			function posChange (e) {
				switch (self.relative) {
				case "element" :
				tip.css({left: $(self).offset().left + 5, top: $(self).offset().top - tip.outerHeight() - 5});
				break;
				default :
				tip.css({left: e.pageX + 5, top: e.pageY - tip.outerHeight() - 5});
				break;
				}
			}
			$(self).bind('mouseenter', function(e) {
				tip.html(self.content);
				posChange (e);
				$(document.body).bind('mousemove', posChange);
				tip.show();
			});
			$(self).bind('mouseleave', function(e) {
				$(document.body).unbind('mousemove', posChange);
				tip.html('');
				tip.hide();
			});
		});
		}
		return this;
	}
	
	/* tab */
	
	$.fn.tab = function (option) {
		this.each (function (index, self) {
			var c = $.extend({tabSelector: "a.tab", defaultTab:null, eventHandler:'click', scrollBack:null}, option);
			var contents = $([]);
			var tab = $(self).find(c.tabSelector).filter('a, area').each(function (index, element) {
				contents = contents.add("#" + element.href.replace(/.*#/,""));
				$(element).unbind(c.eventHandler).bind(c.eventHandler, function () {
					tabChange(this.href);
					if(c.scrollBack) ut.smoothScroll(c.scrollBack);
					return false;
				});
			});
			function tabChange (selectorId) {
				var _selectContents = $("#" + selectorId.replace(/.*#/,""));
				var _selectTab = $("a[href^=#" + selectorId.replace(/.*#/,"") + "]")
				tab.not(_selectTab).removeClass("select").find("img").buttonImage({action:"off"});
				_selectTab.addClass("select").find("img").buttonImage({action:"on"});
				contents.not(_selectContents).hide();
				_selectContents.show();
			}
			contents.hide();
			tabChange(c.defaultTab || tab.eq(0).get(0).href);
		});
		return this;
	}
	
	/* image gallery update 2013.8.7 */
	
	$.fn.contentsSlider = function (option) {
		var c = $.extend({contentSelector:'img', timer:5000, thumbnail:"thumbs", thumbImagePrefix: '_s', navSelector: ".nav a", arrow:"arrowlink", eventHandler:'click', contentMouseEnabled:false, transition:"fade", fadeTime:200, slidehalftone: 0, orientation:'horizontal', limit: 0, scrollBack:null, onChange:null}, option);
		this.each (function(index, self) {
			self.timer = c.timer;
			if(!self.initialized) {
				self.transition = c.transition
				self.pos = 0;
				if(c.thumbnail) var thumbsul = $("<ul>").addClass(c.thumbnail).appendTo(self);
				self.images = $(self).find(c.contentSelector)
				.each(function(index, element) {
					if(c.thumbnail) {
						var image = $(element).is('img') ? $(element) : $(element).find("img").eq(0);
						var thumbSrc = image.attr('src').replace(/(_off)?(\.gif|\.jpg|\.png)/, c.thumbImagePrefix + "$2");
						var thumbAlt = image.attr('alt') ? image.attr('alt') : '';
						var thumbimg = $('<img>').attr('src', thumbSrc);
						var thumbli = $("<li>").append(thumbimg)
						.data("index", index)
						.unbind(c.eventHandler)
						.bind(c.eventHandler, function () {change(index)});
						thumbsul.append(thumbli);
					}
					$(element).data("index", index).css({"position" : "absolute"})
				});
				self.thumbs = (thumbsul) ? thumbsul.find("li") : $([]);
				self.navs = $(self).find(c.navSelector).filter(document.links).each(function (index, element) {
					var content =  self.images.filter("#" + element.href.replace(/.*#/,""));
					if(content.length) {
						var contentIndex = content.data("index");
						$(element).data("index", contentIndex).unbind(c.eventHandler).bind(c.eventHandler, function () {
							change(contentIndex);
							return false;
						});
					}
				});
				function slideViewUpdate (_pos) {
					self.images.each(function(index, element) {
						var pos = index - _pos;
						if(c.limit == 0){
							if(pos < self.images.length / -2) pos +=  self.images.length;
							else if(pos >= self.images.length / 2) pos -=  self.images.length;
						}
						
						$(element).css('opacity' , Math.min(1, Math.max(0, (1 - c.slidehalftone*Math.abs(pos)) ) ) );
						
						if((self.transition == 'slide') && (c.orientation == 'vertical')) {
							$(element).css({"left": 0, "margin-top": pos * $(element).innerHeight()});
						} else {
							$(element).css({"top": 0, "margin-left": pos * $(element).innerWidth()});
						}
					});
				}
				switch (self.transition) {
					case 'fade' : self.images.css({"top" : 0}).slice(1).hide(); break;
					case 'swipe': case 'slide' : slideViewUpdate (self.pos); break;
				}
				function change (selectIndex, init) {
					clearTimeout(self.timeout);
					
					switch (self.transition) {
						case 'fade' :
							self.images.each(function(index, element) {
								if ($(element).data("index") == selectIndex) $(element).fadeIn(c.fadeTime, 'linear');
								else $(element).fadeOut(c.fadeTime, 'linear');
							});
							if(self.timer) self.timeout = setTimeout(next, self.timer);
							break;
						case 'swipe' :
						case 'slide' :
							if(c.limit == 0){
								if(selectIndex > self.images.length -1) selectIndex = selectIndex % self.images.length;
								if(selectIndex < 0)  selectIndex = self.images.length + selectIndex;
							} else {
								if(selectIndex > c.limit) selectIndex = c.limit;
								if(selectIndex < 0)  selectIndex = 0;
							}
							clearInterval (self.slide);
							var end = selectIndex;
							if(self.pos > self.images.length - 2 && end == 0) self.pos -= self.images.length;
							if(self.pos < 1 && end == self.images.length - 1) self.pos += self.images.length;
							function slide() {
								if(Math.abs(self.pos - end) > 0.001) {
									self.pos -= (self.pos - end) / (c.fadeTime * 0.05);
								} else {
									self.pos = end;
									clearInterval (self.slide);
									if(self.timer) self.timeout = setTimeout(next, self.timer);
								}
								slideViewUpdate (self.pos);
							}
							self.slide = setInterval(slide, 10);
							
							break;
					}
					
					if(c.limit) {
						if(selectIndex <= 0) {$(self).find('.prev').fadeOut(200)} else {$(self).find('.prev').fadeIn(200)};
						if(selectIndex >= c.limit) {$(self).find('.next').fadeOut(200)} else {$(self).find('.next').fadeIn(200)};
					}
					
					self.thumbs.each(function(index, element) {
						if ($(element).data("index") == selectIndex) $(element).addClass("select");
						else $(element).removeClass("select");
					});
					
					self.navs.each(function(index, element) {
						if ($(element).data("index") == selectIndex) $(element).addClass("select").find("img").buttonImage({action:"on"});
						else $(element).removeClass("select").find("img").buttonImage({action:"off"});
					});
					
					if(c.scrollBack && !init) ut.smoothScroll(c.scrollBack);
					
					var nowelement;
					
					self.images.each(function(index, element) {
						if ($(element).data("index") == selectIndex) nowelement = element;
					});
					
					if(c.onChange) c.onChange(selectIndex, nowelement);
					
					self.currentindex = selectIndex;
				}
				
				function prev () {
					change((self.currentindex <= 0) ? self.images.length -1 : self.currentindex - 1);
				}
				function next () {
					change(((self.currentindex + 1) >= self.images.length) ? 0 : self.currentindex + 1);
				}
				if(c.arrow) {
					self.arrowul = $('<ul>').addClass(c.arrow)
					.append($('<li>').addClass('prev').unbind(c.eventHandler).bind(c.eventHandler, function () {prev()}))
					.append($('<li>').addClass('next').unbind(c.eventHandler).bind(c.eventHandler, function () {next()}))
					.prependTo(self);
					
					if(c.limit) $(self).find('.prev').hide();
				}
				switch (self.transition) {
					case 'swipe' :
					case 'slide' :
					$(window).bind('resize', function (e) {
						slideViewUpdate (self.pos);
					});
				}
				if(self.transition == 'swipe') {
					touchstart = function(e) {
						self.touched = true;
						clearTimeout(self.timeout);
						clearTimeout (self.slide);
						if(!ut.canTouch) e.preventDefault();
						$(e.target).css('cursor', 'pointer');
						self.mouseX = (ut.canTouch ? event.changedTouches[0].pageX : e.pageX);
					};
					touchmove = function(e) {
						if (!self.touched) return;
						e.preventDefault();
						var left = (ut.canTouch ? event.changedTouches[0].pageX : e.pageX);
						var addPos = (left - self.mouseX) / $(e.currentTarget).innerWidth();
						var movepos = self.pos - addPos;
						
						if(c.limit) {
							if((movepos > 0) && (movepos < c.limit)) slideViewUpdate (movepos);
						} else {
							slideViewUpdate (movepos);
						}
					};
					touchend = function(e) {
						if (!self.touched) return;
						self.touched = false;
						$(e.target).css('cursor', 'auto');
						var left = (ut.canTouch ? event.changedTouches[0].pageX : e.pageX);
						var addPos = (left - self.mouseX) / $(e.currentTarget).innerWidth();
						var movepos = self.pos - addPos;
						
						if(c.limit) {
							if((movepos > 0) && (movepos < c.limit)) self.pos -= addPos;
						} else {
							self.pos -= addPos;
						}
						change (Math.round(self.pos));
					};
					self.images.bind('touchstart mousedown', touchstart)
					.bind('touchmove mousemove', touchmove)
					.bind('touchend mouseup mouseleave', touchend);
				} else {
					if(c.contentMouseEnabled) self.images.bind('click', next);
				}
				change (0, true);
				self.initialized = true;
			} else if(option === "next") {
				next ();
			} else if(option === "prev") {
				prev ();
			} else {
				if(self.timer) self.timeout = setTimeout(next, self.timer);
				else clearTimeout(self.timeout);
			}
		});
		return this;
	}
	
	/* parallax scrolling */
	
	$.fn.parallaxScroll = function (option) {
		var self = this;
		var c = $.extend({windowHeight:0, adjuster:0, inertia:0.3}, option);
		var IE6 = (ut.userAgent.match(/MSIE [0-6]\./)) ? true : false;
		var SP = (ut.userAgent.match(/iPhone|iPad|iPod|Android/)) ? true : false;
		
		self.each (function (index, element) {
			var xPos = c.xPos || $(element).css('background-position-x') || "50%";
			if(IE6 || SP) $(element).css("background-attachment", "scroll");
			//if(IE6 || SP) $(element).css("background-position", (xPos + " ") + c.adjuster + "px");
			function check (e) {
				$(element).css("background-position", newBgPos(xPos, 0, ut.scrollY, c.adjuster, c.inertia, self));
			}
			function newBgPos(x, windowHeight, scrollPos, adjuster, inertia, self) {
				var _pos = ($(element).offset().top - scrollPos + adjuster) * inertia;
				return (x + " ") + _pos + "px";
			}
			if(!(IE6 || SP)) {
				$(window).bind("scroll resize", check);
				check();
			}
		});
		return this;
	}
	
	/* check in view */
	
	$.fn.checkInView = function (option) {
		var self = this;
		var c = $.extend({offset: 200, onetime:false, checkside:"both"}, option);
		
		self.each (function (index, element) {
			$(element).wrap($("<span class='checkInViewWrapper'>")
			.css("display" , ($(element).css("display") == "inline") ?  ((ut.userAgent.match(/MSIE [0-7]/)) ? "inline" : "inline-block") : "block")); //adjustment for MSIE -7
			element.inviewWrap = $(element).parent();
			$(element).data("inView", false);
		});
		
		function scrollCheck () {
			if((self.data("scroll") != ut.scrollY) || (self.data("windowheight") != ut.windowH)) {check (); self.data("scroll", ut.scrollY); self.data("windowheight", ut.windowH);}
			window.setTimeout(scrollCheck, 20);
		}
		
		function inview(_offsetTop, _innerHeight) {
			switch (c.checkside) {
				case 'top' :
					return _offsetTop < (ut.scrollY + ut.windowH - c.offset)
					break;
				case 'bottom' :
					return (_offsetTop + _innerHeight - c.offset) > ut.scrollY
					break;
				default :
					return (_offsetTop < (ut.scrollY + ut.windowH - c.offset)) && ((_offsetTop + _innerHeight - c.offset) > ut.scrollY)
					break
					
			}
		}
		
		function outview(_offsetTop, _innerHeight) {
			switch (c.checkside) {
				case 'top' :
					return _offsetTop > (ut.scrollY + ut.windowH)
					break;
				case 'bottom' :
					return (_offsetTop + _innerHeight) < ut.scrollY
					break;
				default :
					return (_offsetTop > (ut.scrollY + ut.windowH) || ((_offsetTop + _innerHeight) < ut.scrollY))
					break;
			}
		}
		
		function check () {
			self.each (function (index, element) {
				var _offsetTop = element.inviewWrap.offset().top;
				var _innerHeight = $(element).innerHeight();
				if(!($(element).data("inView"))
				 && inview(_offsetTop, _innerHeight)
				) {
					 if(c.onIn) c.onIn(element);
					 $(element).addClass('inView').data("inView", true);
				} else
				if(($(element).data("inView"))
				 && (outview(_offsetTop, _innerHeight))
				) {
					 $(element).removeClass('inView')
					 if(c.onOut) c.onOut(element);
					 if(!c.onetime) $(element).data("inView", false);
				}
			});
		}
		
		scrollCheck();
		return this;
	}
	
})(jQuery);