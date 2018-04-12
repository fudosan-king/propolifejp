/**
 * functions.js
 *
 *  version --- 3.1
 *  updated --- 2011/05/19
 */


/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function($) {
	pageScroll();
	rollover();
	popWindow();
	localNav();
});


/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();
/* !fxPrint ----------------------------------------------------------------- */
(function(){
	setCSS = function(){
		elem = document.createElement('link');
		elem.setAttribute('rel','stylesheet');
		elem.setAttribute('type','text/css');
		elem.setAttribute('media','print');
		elem.setAttribute('href','/common/css/fx_print.css');
		document.getElementsByTagName('head')[0].appendChild(elem);
	}
	if( isUA.fx() ) window.addEventListener("load",setCSS,false); 
})();
/* !init Smart Devices ------------------------------------------------------ */
(function (){
	var parentNode = document.getElementsByTagName('head')[0];
	var viewport = {
		android : 'width=480, user-scalable=yes, ,initial-scale=0.3125 maximum-scale=3',
		ipad    : 'width=1024',
		iphone  : 'width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0'
	}
	meta = document.createElement('meta');
	meta.setAttribute('name','viewport');

	if( isUA.android() ){
		meta.setAttribute('content',viewport.android);
		parentNode.appendChild(meta);
	}else if( isUA.ipad() ){
		meta.setAttribute('content',viewport.ipad);
		parentNode.appendChild(meta);
	}else if( isUA.ipod() || isUA.iphone() ){
		meta.setAttribute('content',viewport.iphone);
		parentNode.appendChild(meta);
		window.addEventListener('load', function(){ setTimeout(scrollTo, 100, 0, 1);}, false);
	}else{
	}
})();
/* !rollover ---------------------------------------------------------------- */
var rollover = function(){
	var suffix = { normal : '_no.', over   : '_on.'}
	$('a.over, img.over, input.over').each(function(){
		var a = null;
		var img = null;

		var elem = $(this).get(0);
		if( elem.nodeName.toLowerCase() == 'a' ){
			a = $(this);
			img = $('img',this);
		}else if( elem.nodeName.toLowerCase() == 'img' || elem.nodeName.toLowerCase() == 'input' ){
			img = $(this);
		}

		var src_no = img.attr('src');
		var src_on = src_no.replace(suffix.normal, suffix.over);

		if( elem.nodeName.toLowerCase() == 'a' ){
			a.bind("mouseover focus",function(){ img.attr('src',src_on); })
			 .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'img' ){
			img.bind("mouseover",function(){ img.attr('src',src_on); })
			   .bind("mouseout", function(){ img.attr('src',src_no); });
		}else if( elem.nodeName.toLowerCase() == 'input' ){
			img.bind("mouseover focus",function(){ img.attr('src',src_on); })
			   .bind("mouseout blur",  function(){ img.attr('src',src_no); });
		}

		var cacheimg = document.createElement('img');
		cacheimg.src = src_on;
	});
};
/* !pageScroll -------------------------------------------------------------- */
var pageScroll = function(){
	jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}; 
	$('a.scroll, .scroll a, .pageTop a').each(function(){
		$(this).bind("click keypress",function(e){
			e.preventDefault();
			var target  = $(this).attr('href');
			var targetY = $(target).offset().top;
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			$(parent).animate(
				{scrollTop: targetY },
				1000,
				'easeInOutCubic',
				function(){
					location.hash = target;
				}
			);
			return false;
		});
	});
}

/* !localNav ---------------------------------------------------------------- */
var localNav = function(){
	var navClass = document.body.className;
	var parent = $("#lNavi");
	var routing = [];
	$("ul ul", parent).hide();
	if( navClass.indexOf("lDef") != -1 ){
		routing[0] = navClass.match(/l[\d]+_[\d]+_[\d]+/);
		routing[1] = navClass.match(/l[\d]+_[\d]+/);
		routing[2] = navClass.match(/l[\d]+/);
		if( routing[0] ){ routing[0].push(routing[0][0].match(/[\d]+/g)) };
		if( routing[1] ){ routing[1].push(routing[1][0].match(/[\d]+/g)) };
		if( routing[2] ){ routing[2].push(routing[2][0].match(/[\d]+/g)) };

		if( routing[0] != null ){
			var e = $("a.lNav"+routing[0][1][0]+'_'+routing[0][1][1]+'_'+routing[0][1][2], parent);
				e.addClass('current')
					.parent().parent().show()
					.parent().parent().show();
		}else if( routing[1] != null ){
			var e = $("a.lNav"+routing[1][1][0]+'_'+routing[1][1][1], parent);
				e.addClass('current')
					.next().show();
				e.parent().parent().show();
		}else if( routing[2] != null ){
			var e = $("a.lNav"+routing[2][1], parent);
				e.addClass('current')
					.next().show();
		}else{
		}
	}
}
/* !popWindow --------------------------------------------------------------- */
var popWindow = function (){
	var param = null;
	// param[0] = width
	// param[1] = height
	// param[2] = window.name
	$('a[class^="js_popup"], area[class^="js_popup"]').each(function(i){
		$(this).click(function(){
			var w = null;
			param = $(this).attr('class').match(/[0-9]+/g);
			// get window.name
			param[2] = window.name ? window.name+'_' : '';
			w = window.open(this.href, param[2]+'popup'+i,'width='+param[0]+',height='+param[1]+',scrollbars=yes');
			w.focus();
			return false;
		});
	});
}
/* !defFunc ----------------------------------------------------------------- */
var defFunc = (function(){
	Print = function(){ window.print(); return false;}
	Close = function(){ window.close(); return false;}
})();
/* !PrintPage ----------------------------------------------------------------- */
function PrintPage(){
 if(document.getElementById || document.layers){
  window.print();
  }
}

/* !PrintPage ----------------------------------------------------------------- */
function openNewWindow(args){
    var name = args;

    if(args == 'mapdetail'){
        window.open("../map/map-detail.html","a","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=708,height=367");
    }
}