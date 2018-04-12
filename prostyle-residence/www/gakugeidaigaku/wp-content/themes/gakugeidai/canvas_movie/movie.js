(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {};

// library properties:
lib.properties = {
	width: 960,
	height: 548,
	fps: 30,
	color: "#FFFFFF",
	webfonts: {},
	manifest: [
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image244.png", id:"image244"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image80.png", id:"image80"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image81.png", id:"image81"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image811.png", id:"image811"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image812.png", id:"image812"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image813.png", id:"image813"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image814.png", id:"image814"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image815.png", id:"image815"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image8152.jpg", id:"image8152"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image816.png", id:"image816"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image8175.jpg", id:"image8175"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image818.png", id:"image818"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image819.png", id:"image819"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image82.png", id:"image82"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image820.png", id:"image820"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image821.png", id:"image821"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image822.png", id:"image822"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image823.png", id:"image823"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image827.jpg", id:"image827"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image828.jpg", id:"image828"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image829.jpg", id:"image829"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image83.png", id:"image83"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image830.jpg", id:"image830"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image831.jpg", id:"image831"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image832.png", id:"image832"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image833.png", id:"image833"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image834.png", id:"image834"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image835.jpg", id:"image835"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image836.jpg", id:"image836"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image837.jpg", id:"image837"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image838.jpg", id:"image838"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image839.jpg", id:"image839"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image84.png", id:"image84"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image840.jpg", id:"image840"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image841.jpg", id:"image841"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image842.jpg", id:"image842"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image843.jpg", id:"image843"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image844.jpg", id:"image844"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image845.jpg", id:"image845"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image846.jpg", id:"image846"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image847.jpg", id:"image847"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image848.jpg", id:"image848"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image85.png", id:"image85"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image851.jpg", id:"image851"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image852.jpg", id:"image852"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image853.jpg", id:"image853"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image854.jpg", id:"image854"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image855.jpg", id:"image855"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image856.jpg", id:"image856"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image857.png", id:"image857"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image86.png", id:"image86"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image87.png", id:"image87"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image88.png", id:"image88"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image89.png", id:"image89"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/image890.png", id:"image890"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/replaybtn.png", id:"replaybtn"},
		{src:"/gakugeidaigaku/wp-content/themes/gakugeidai/canvas_movie/images/skipbtn.png", id:"skipbtn"}
	]
};



lib.webfontAvailable = function(family) {
	lib.properties.webfonts[family] = true;
	var txtFilters = lib.webFontTxtFilters && lib.webFontTxtFilters[family] || [];
	for(var f = 0; f < txtFilters.length; ++f) {
		txtFilters[f].updateCache();
	}
};
// symbols:



(lib.image244 = function() {
	this.initialize(img.image244);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,46,46);


(lib.image80 = function() {
	this.initialize(img.image80);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,24,126);


(lib.image81 = function() {
	this.initialize(img.image81);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,296,296);


(lib.image811 = function() {
	this.initialize(img.image811);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,25,143);


(lib.image812 = function() {
	this.initialize(img.image812);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,46,46);


(lib.image813 = function() {
	this.initialize(img.image813);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,47,47);


(lib.image814 = function() {
	this.initialize(img.image814);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,35,34);


(lib.image815 = function() {
	this.initialize(img.image815);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,35,35);


(lib.image8152 = function() {
	this.initialize(img.image8152);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1500,856);


(lib.image816 = function() {
	this.initialize(img.image816);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,55,55);


(lib.image8175 = function() {
	this.initialize(img.image8175);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1500,856);


(lib.image818 = function() {
	this.initialize(img.image818);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,47,46);


(lib.image819 = function() {
	this.initialize(img.image819);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,101,110);


(lib.image82 = function() {
	this.initialize(img.image82);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,296,296);


(lib.image820 = function() {
	this.initialize(img.image820);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,154,18);


(lib.image821 = function() {
	this.initialize(img.image821);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,169,18);


(lib.image822 = function() {
	this.initialize(img.image822);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,133,19);


(lib.image823 = function() {
	this.initialize(img.image823);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,68,19);


(lib.image827 = function() {
	this.initialize(img.image827);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,487,797);


(lib.image828 = function() {
	this.initialize(img.image828);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,415,359);


(lib.image829 = function() {
	this.initialize(img.image829);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,416,359);


(lib.image83 = function() {
	this.initialize(img.image83);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,220,220);


(lib.image830 = function() {
	this.initialize(img.image830);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,415,359);


(lib.image831 = function() {
	this.initialize(img.image831);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,415,359);


(lib.image832 = function() {
	this.initialize(img.image832);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,101,333);


(lib.image833 = function() {
	this.initialize(img.image833);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,37,225);


(lib.image834 = function() {
	this.initialize(img.image834);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,109,17);


(lib.image835 = function() {
	this.initialize(img.image835);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1500,856);


(lib.image836 = function() {
	this.initialize(img.image836);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,891,530);


(lib.image837 = function() {
	this.initialize(img.image837);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,569,264);


(lib.image838 = function() {
	this.initialize(img.image838);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,384,305);


(lib.image839 = function() {
	this.initialize(img.image839);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,494,295);


(lib.image84 = function() {
	this.initialize(img.image84);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,220,221);


(lib.image840 = function() {
	this.initialize(img.image840);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,354,211);


(lib.image841 = function() {
	this.initialize(img.image841);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1500,856);


(lib.image842 = function() {
	this.initialize(img.image842);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1475,536);


(lib.image843 = function() {
	this.initialize(img.image843);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,402,301);


(lib.image844 = function() {
	this.initialize(img.image844);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,368,301);


(lib.image845 = function() {
	this.initialize(img.image845);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1500,856);


(lib.image846 = function() {
	this.initialize(img.image846);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1464,405);


(lib.image847 = function() {
	this.initialize(img.image847);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,744,274);


(lib.image848 = function() {
	this.initialize(img.image848);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,734,274);


(lib.image85 = function() {
	this.initialize(img.image85);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,220,220);


(lib.image851 = function() {
	this.initialize(img.image851);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,688,287);


(lib.image852 = function() {
	this.initialize(img.image852);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,688,280);


(lib.image853 = function() {
	this.initialize(img.image853);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,406,429);


(lib.image854 = function() {
	this.initialize(img.image854);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,406,428);


(lib.image855 = function() {
	this.initialize(img.image855);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,408,429);


(lib.image856 = function() {
	this.initialize(img.image856);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,408,428);


(lib.image857 = function() {
	this.initialize(img.image857);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,110,17);


(lib.image86 = function() {
	this.initialize(img.image86);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,220,221);


(lib.image87 = function() {
	this.initialize(img.image87);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,164,23);


(lib.image88 = function() {
	this.initialize(img.image88);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,164,22);


(lib.image89 = function() {
	this.initialize(img.image89);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,127,20);


(lib.image890 = function() {
	this.initialize(img.image890);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,109,17);


(lib.replaybtn = function() {
	this.initialize(img.replaybtn);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.skipbtn = function() {
	this.initialize(img.skipbtn);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.white_mc = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("EhK/Aq0MAAAhVnMCV/AAAMAAABVng");
	this.shape.setTransform(480,274,1.021,1.036);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.timer = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(255,0,0,0)").s().p("AnzH0IAAvnIPnAAIAAPng");
	this.shape.setTransform(50,50);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,100,100);


(lib.symbol_27 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#707070").s().p("EgG8g3BIATgCMANmBuFIgUACg");
	this.shape.setTransform(28.5,225.6,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,57.1,451.2);


(lib.symbol_26 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#707070").s().p("EgE0gkQIAUgCMAJVBIjIgUACg");
	this.shape.setTransform(19.8,148.7,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,39.7,297.4);


(lib.symbol_25 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#707070").s().p("EgxFA4rMBh8hxiIAPANMhh7Bxig");
	this.shape.setTransform(201.1,233,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,402.3,466);


(lib.symbol_24 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#707070").s().p("EhC3AFtMCFtgLtIACAUMiFtALtg");
	this.shape.setTransform(273.9,24.7,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,547.9,49.4);


(lib.symbol_23 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image80();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,15.4,80.7);


(lib.symbol_22 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image811();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,16,91.5);


(lib.symbol_21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image89();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,81.3,12.8);


(lib.symbol_20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image823();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,43.5,12.2);


(lib.symbol_19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image819();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,64.7,70.4);


(lib.symbol_18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image820();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,98.6,11.5);


(lib.symbol_17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image821();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,108.2,11.5);


(lib.symbol_16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image87();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,105,14.7);


(lib.symbol_15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image88();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,105,14.1);


(lib.symbol_14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image822();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,85.1,12.2);


(lib.symbol_13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image816();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,35.2,35.2);


(lib.symbol_12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image818();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,30.1,29.5);


(lib.symbol_11_7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image857();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,70.4,10.9);


(lib.symbol_11_6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image854();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,259.9,273.9);


(lib.symbol_11_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image852();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,440.3,179.2);


(lib.symbol_11_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image856();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,261.1,273.9);


(lib.symbol_11_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image855();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,261.1,274.6);


(lib.symbol_11_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image851();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,440.3,183.7);


(lib.symbol_11_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image853();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,259.9,274.6);


(lib.symbol_11_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image8175();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.9);


(lib.symbol_11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image244();
	this.instance.setTransform(0,0,0.63,0.63);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,29,29);


(lib.symbol_10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image812();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,29.5,29.5);


(lib.symbol_9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image815();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,22.4,22.4);


(lib.symbol_8_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image847();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,476.2,175.4);


(lib.symbol_8_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image848();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,469.8,175.4);


(lib.symbol_8_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 2
	this.instance = new lib.image846();
	this.instance.setTransform(0,-4,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,-4,937,263.2);


(lib.symbol_8_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image845();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.symbol_8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image814();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,22.4,21.8);


(lib.symbol_7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image813();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,30.1,30.1);


(lib.symbol_6_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image844();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,235.5,192.7);


(lib.symbol_6_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image843();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,257.3,192.7);


(lib.symbol_6_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image842();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,944,343);


(lib.symbol_6_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 2
	this.instance = new lib.image890();
	this.instance.setTransform(85.4,526.9,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// レイヤー 1
	this.instance_1 = new lib.image841();
	this.instance_1.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.symbol_6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image86();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,140.8,141.5);


(lib.symbol_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image82();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,189.5,189.5);


(lib.symbol_4_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image840();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,226.6,135.1);


(lib.symbol_4_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image837();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,364.2,169);


(lib.symbol_4_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image839();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,316.2,188.8);


(lib.symbol_4_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image838();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,245.8,195.2);


(lib.symbol_4_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image836();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,570.3,339.2);


(lib.symbol_4_0 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image835();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.symbol_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image81();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,189.5,189.5);


(lib.symbol_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image84();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,140.8,141.5);


(lib.symbol_2_9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image834();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,69.8,10.9);


(lib.symbol_2_8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image831();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,265.6,229.8);


(lib.symbol_2_7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image830();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,265.6,229.8);


(lib.symbol_2_6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image827();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,311.7,510.1);


(lib.symbol_2_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image833();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,23.7,144);


(lib.symbol_2_4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image832();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,64.7,213.1);


(lib.symbol_2_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image829();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,266.3,229.8);


(lib.symbol_2_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image828();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,265.6,229.8);


(lib.symbol_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image85();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,140.8,140.8);


(lib.symbol_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.image83();
	this.instance.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,140.8,140.8);


(lib.sim76b = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.skipbtn();

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.replay_btn2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.replaybtn();

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.defsize = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(255,255,255,0)").s().p("EiV/CWAMAAAkr/MEr/AAAMAAAEr/g");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-960,-960,1920,1920);


(lib.symbol_white_s8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// symbol_17
	this.instance = new lib.symbol_17();
	this.instance.setTransform(462.8,186.7,1,1,0,0,0,54.1,5.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// symbol_14
	this.instance_1 = new lib.symbol_14();
	this.instance_1.setTransform(234.4,467.2,1,1,0,0,0,42.6,6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// symbol_20
	this.instance_2 = new lib.symbol_20();
	this.instance_2.setTransform(724.3,266.3,1,1,0,0,0,21.8,6);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// symbol_18
	this.instance_3 = new lib.symbol_18();
	this.instance_3.setTransform(536,109.3,1,1,0,0,0,49.2,5.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// symbol_10
	this.instance_4 = new lib.symbol_10();
	this.instance_4.setTransform(528.4,203.3,1,1,0,0,0,14.7,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// symbol_7
	this.instance_5 = new lib.symbol_7();
	this.instance_5.setTransform(302.2,466.7,1,1,0,0,0,15.1,15.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// symbol_12
	this.instance_6 = new lib.symbol_12();
	this.instance_6.setTransform(685,248.7,1,1,0,0,0,15.1,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1));

	// symbol_11
	this.instance_7 = new lib.symbol_11();
	this.instance_7.setTransform(588.6,134.2,1,1,0,0,0,14.7,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1));

	// symbol_22
	this.instance_8 = new lib.symbol_22();
	this.instance_8.setTransform(562,410.4,1,1,0,0,0,8,45.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(1));

	// symbol_23
	this.instance_9 = new lib.symbol_23();
	this.instance_9.setTransform(710.2,389.5,1,1,0,0,0,7.7,40.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(1));

	// symbol_19
	this.instance_10 = new lib.symbol_19();
	this.instance_10.setTransform(644.6,81.7,1,1,0,0,0,32.3,35.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(1));

	// symbol_3
	this.instance_11 = new lib.symbol_3();
	this.instance_11.setTransform(529.1,203.6,1,1,0,0,0,70.4,70.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(1));

	// symbol_6
	this.instance_12 = new lib.symbol_6();
	this.instance_12.setTransform(302.5,466,1,1,0,0,0,70.4,70.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(1));

	// symbol_1
	this.instance_13 = new lib.symbol_1();
	this.instance_13.setTransform(685.2,248.7,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(1));

	// symbol_2
	this.instance_14 = new lib.symbol_2();
	this.instance_14.setTransform(588.6,134.2,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(1));

	// symbol_26
	this.instance_15 = new lib.symbol_26();
	this.instance_15.setTransform(546.8,351.9,1,1,0,0,0,19.8,148.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(1));

	// symbol_27
	this.instance_16 = new lib.symbol_27();
	this.instance_16.setTransform(686.1,254.6,1,1,0,0,0,28.5,225.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_16).wait(1));

	// symbol_25
	this.instance_17 = new lib.symbol_25();
	this.instance_17.setTransform(473.9,265.6,1,1,0,0,0,201.1,233);

	this.timeline.addTween(cjs.Tween.get(this.instance_17).wait(1));

	// white_mc
	this.white_mc = new lib.white_mc();
	this.white_mc.setTransform(490,284,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,980,568);


(lib.symbol_white_s6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// symbol_14
	this.instance = new lib.symbol_14();
	this.instance.setTransform(234.4,467.2,1,1,0,0,0,42.6,6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// symbol_20
	this.instance_1 = new lib.symbol_20();
	this.instance_1.setTransform(724.3,266.3,1,1,0,0,0,21.8,6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// symbol_18
	this.instance_2 = new lib.symbol_18();
	this.instance_2.setTransform(536,109.3,1,1,0,0,0,49.2,5.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// symbol_7
	this.instance_3 = new lib.symbol_7();
	this.instance_3.setTransform(302.2,466.7,1,1,0,0,0,15.1,15.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// symbol_12
	this.instance_4 = new lib.symbol_12();
	this.instance_4.setTransform(685,248.7,1,1,0,0,0,15.1,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// symbol_11
	this.instance_5 = new lib.symbol_11();
	this.instance_5.setTransform(588.6,134.2,1,1,0,0,0,14.7,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// symbol_23
	this.instance_6 = new lib.symbol_23();
	this.instance_6.setTransform(710.2,389.5,1,1,0,0,0,7.7,40.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1));

	// symbol_19
	this.instance_7 = new lib.symbol_19();
	this.instance_7.setTransform(644.6,81.7,1,1,0,0,0,32.3,35.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1));

	// symbol_6
	this.instance_8 = new lib.symbol_6();
	this.instance_8.setTransform(302.5,466,1,1,0,0,0,70.4,70.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(1));

	// symbol_1
	this.instance_9 = new lib.symbol_1();
	this.instance_9.setTransform(685.2,248.7,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(1));

	// symbol_2
	this.instance_10 = new lib.symbol_2();
	this.instance_10.setTransform(588.6,134.2,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(1));

	// symbol_27
	this.instance_11 = new lib.symbol_27();
	this.instance_11.setTransform(686.1,254.6,1,1,0,0,0,28.5,225.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(1));

	// symbol_25
	this.instance_12 = new lib.symbol_25();
	this.instance_12.setTransform(473.9,265.6,1,1,0,0,0,201.1,233);

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(1));

	// white_mc
	this.white_mc = new lib.white_mc();
	this.white_mc.setTransform(490,284,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,980,568);


(lib.symbol_white_s4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// symbol_20
	this.instance = new lib.symbol_20();
	this.instance.setTransform(724.3,266.3,1,1,0,0,0,21.8,6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// symbol_18
	this.instance_1 = new lib.symbol_18();
	this.instance_1.setTransform(536,109.3,1,1,0,0,0,49.2,5.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// symbol_12
	this.instance_2 = new lib.symbol_12();
	this.instance_2.setTransform(685,248.7,1,1,0,0,0,15.1,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// symbol_11
	this.instance_3 = new lib.symbol_11();
	this.instance_3.setTransform(588.6,134.2,1,1,0,0,0,14.7,14.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

	// symbol_23
	this.instance_4 = new lib.symbol_23();
	this.instance_4.setTransform(710.2,389.5,1,1,0,0,0,7.7,40.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1));

	// symbol_19
	this.instance_5 = new lib.symbol_19();
	this.instance_5.setTransform(644.6,81.7,1,1,0,0,0,32.3,35.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1));

	// symbol_1
	this.instance_6 = new lib.symbol_1();
	this.instance_6.setTransform(685.2,248.7,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1));

	// symbol_2
	this.instance_7 = new lib.symbol_2();
	this.instance_7.setTransform(588.6,134.2,1,1,0,0,0,70.4,70.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1));

	// symbol_27
	this.instance_8 = new lib.symbol_27();
	this.instance_8.setTransform(686.1,254.6,1,1,0,0,0,28.5,225.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(1));

	// symbol_25
	this.instance_9 = new lib.symbol_25();
	this.instance_9.setTransform(473.9,265.6,1,1,0,0,0,201.1,233);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(1));

	// white_mc
	this.instance_10 = new lib.white_mc();
	this.instance_10.setTransform(490,284,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,980,568);


(lib.symbol_white_s2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.symbol_18();
	this.instance.setTransform(536,109.3,1,1,0,0,0,49.2,5.8);

	this.instance_1 = new lib.symbol_11();
	this.instance_1.setTransform(588.6,134.2,1,1,0,0,0,14.7,14.7);

	this.instance_2 = new lib.symbol_19();
	this.instance_2.setTransform(644.6,81.7,1,1,0,0,0,32.3,35.2);

	this.instance_3 = new lib.symbol_2();
	this.instance_3.setTransform(588.6,134.2,1,1,0,0,0,70.4,70.4);

	this.instance_4 = new lib.symbol_25();
	this.instance_4.setTransform(473.9,265.6,1,1,0,0,0,201.1,233);

	this.instance_5 = new lib.white_mc();
	this.instance_5.setTransform(490,284,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,980,568);


(lib.symbol_2_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.symbol_2_9();
	this.instance.setTransform(896.4,537.3,1,1,0,0,0,34.9,5.5);

	this.instance_1 = new lib.image8152();
	this.instance_1.setTransform(0,0,0.64,0.64);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.9);


(lib.skip_btn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.sim76b();
	this.instance.setTransform(37.5,10,1,1,0,0,0,37.5,10);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Al2BjIAAjGILsAAIAADGg");
	this.shape.setTransform(37.5,10);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{alpha:1}}]}).to({state:[{t:this.instance,p:{alpha:0.762}}]},1).to({state:[{t:this.shape}]},2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.sim48 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.s0.alpha = 0;

		this.t1.alpha = 0;

		createjs.Tween.get(this.s0,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);
		createjs.Tween.get(this.t1,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);

		for(i=1;i<=6;i++){
			var sName = 'ss'+i;
			this[sName].alpha = 0;
			this[sName].scaleX = 1.10;
			this[sName].scaleY = 1.10;
		}
	}
	this.frame_1 = function() {
		this.stop();

		var fr = 60;



		for(i=1;i<=6;i++){
			var sName = 'ss'+i;
			createjs.Tween.get(this[sName],{useTicks:true}).wait((i)*10).to({alpha:1}, 30, createjs.Ease.cubicOut);
			createjs.Tween.get(this[sName],{useTicks:true}).wait((i)*10).to({scaleX:1.02, scaleY:1.02}, fr,createjs.Ease.cubicOut);
		}
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1).call(this.frame_1).wait(96));

	// symbol_11_7
	this.t1 = new lib.symbol_11_7();
	this.t1.setTransform(900.5,537.3,1,1,0,0,0,35.2,5.5);

	this.timeline.addTween(cjs.Tween.get(this.t1).wait(97));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("A0TVfMAAAgq9MAonAAAMAAAAq9g");
	mask.setTransform(130,137.5);

	// symbol_11_1
	this.ss1 = new lib.symbol_11_1();
	this.ss1.setTransform(129.9,137.2,1,1,0,0,0,129.9,137.2);

	this.ss1.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.ss1).wait(97));

	// mask (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("A0TVtMAAAgraMAonAAAMgAHArag");
	mask_1.setTransform(130,413);

	// symbol_11_6
	this.ss6 = new lib.symbol_11_6();
	this.ss6.setTransform(129.9,410.9,1,1,0,0,0,129.9,137);

	this.ss6.mask = mask_1;

	this.timeline.addTween(cjs.Tween.get(this.ss6).wait(97));

	// mask (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("A0hVtMAAAgraMApEAAAMAAAArag");
	mask_2.setTransform(829.5,413);

	// symbol_11_4
	this.ss4 = new lib.symbol_11_4();
	this.ss4.setTransform(829.5,410.9,1,1,0,0,0,130.6,137);

	this.ss4.mask = mask_2;

	this.timeline.addTween(cjs.Tween.get(this.ss4).wait(97));

	// mask (mask)
	var mask_3 = new cjs.Shape();
	mask_3._off = true;
	mask_3.graphics.p("A0hVfMAAAgq9MApEAAAMAAAAq9g");
	mask_3.setTransform(829.5,137.5);

	// symbol_11_3
	this.ss3 = new lib.symbol_11_3();
	this.ss3.setTransform(829.5,137.2,1,1,0,0,0,130.6,137.2);

	this.ss3.mask = mask_3;

	this.timeline.addTween(cjs.Tween.get(this.ss3).wait(97));

	// mask (mask)
	var mask_4 = new cjs.Shape();
	mask_4._off = true;
	mask_4.graphics.p("EgibAOSIAA8jMBE4AAAIgHcjg");
	mask_4.setTransform(478.5,459.5);

	// symbol_11_5
	this.ss5 = new lib.symbol_11_5();
	this.ss5.setTransform(479.4,458.2,1,1,0,0,0,220.2,89.6);

	this.ss5.mask = mask_4;

	this.timeline.addTween(cjs.Tween.get(this.ss5).wait(97));

	// mask (mask)
	var mask_5 = new cjs.Shape();
	mask_5._off = true;
	mask_5.graphics.p("EgibAOXIAG8uMBErAAAIAHcug");
	mask_5.setTransform(478.5,92);

	// symbol_11_2
	this.ss2 = new lib.symbol_11_2();
	this.ss2.setTransform(479.4,91.8,1,1,0,0,0,220.2,91.8);

	this.ss2.mask = mask_5;

	this.timeline.addTween(cjs.Tween.get(this.ss2).wait(97));

	// symbol_11_0
	this.s0 = new lib.symbol_11_0();
	this.s0.setTransform(234.6,156.2,1,1,0,0,0,234.6,156.2);

	this.timeline.addTween(cjs.Tween.get(this.s0).wait(97));

	// レイヤー 2
	this.white_mc = new lib.white_mc();
	this.white_mc.setTransform(480,274,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(97));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.s113 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, 132).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});

		this.white_mc.alpha = 0;
		createjs.Tween.get(this.white_mc,{useTicks:true}).to({alpha:1}, 30, createjs.Ease.cubicOut);
	}
	this.frame_189 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(189).call(this.frame_189).wait(2));

	// white_mc
	this.instance = new lib.white_mc();
	this.instance.setTransform(480,274,1,1,0,0,0,480,274);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(103).to({_off:false},0).to({alpha:1},28,cjs.Ease.get(1)).wait(60));

	// symbol_15
	this.instance_1 = new lib.symbol_15();
	this.instance_1.setTransform(310.8,368.6,1,1,0,0,0,52.5,7);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(29).to({_off:false},0).to({x:300.8,alpha:1},17,cjs.Ease.get(1)).wait(145));

	// symbol_16
	this.instance_2 = new lib.symbol_16();
	this.instance_2.setTransform(403,262.8,1,1,0,0,0,52.5,7.4);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(29).to({_off:false},0).to({x:393,alpha:1},17,cjs.Ease.get(1)).wait(145));

	// symbol_13
	this.instance_3 = new lib.symbol_13();
	this.instance_3.setTransform(427.9,356.8,2.898,2.898,0,0,0,17.6,17.6);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(80).to({_off:false},0).to({scaleX:1,scaleY:1,alpha:1},16,cjs.Ease.get(1)).wait(95));

	// symbol_13
	this.instance_4 = new lib.symbol_13();
	this.instance_4.setTransform(427.9,356.8,2.898,2.898,0,0,0,17.6,17.6);
	this.instance_4.alpha = 0;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(72).to({_off:false},0).to({scaleX:1,scaleY:1,alpha:1},16,cjs.Ease.get(1)).to({_off:true},8).wait(95));

	// symbol_13
	this.instance_5 = new lib.symbol_13();
	this.instance_5.setTransform(427.9,356.8,2.898,2.898,0,0,0,17.6,17.6);
	this.instance_5.alpha = 0;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(64).to({_off:false},0).to({scaleX:1,scaleY:1,alpha:1},16,cjs.Ease.get(1)).to({_off:true},8).wait(103));

	// symbol_9
	this.instance_6 = new lib.symbol_9();
	this.instance_6.setTransform(434.9,289,0.286,0.286,0,0,0,11.2,11.2);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(29).to({_off:false},0).to({scaleX:1,scaleY:1},17,cjs.Ease.get(1)).wait(145));

	// symbol_8
	this.instance_7 = new lib.symbol_8();
	this.instance_7.setTransform(368.3,365.4,0.263,0.263,0,0,0,11.2,10.8);
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(29).to({_off:false},0).to({scaleX:1,scaleY:1},17,cjs.Ease.get(1)).wait(145));

	// symbol_21
	this.instance_8 = new lib.symbol_21();
	this.instance_8.setTransform(592.9,313,1,1,0,0,0,40.6,6.4);
	this.instance_8.alpha = 0;
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(22).to({_off:false},0).to({alpha:1},17,cjs.Ease.get(1)).wait(152));

	// symbol_4
	this.instance_9 = new lib.symbol_4();
	this.instance_9.setTransform(435.8,289.3,0.136,0.136,0,0,0,94.8,94.8);
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(46).to({_off:false},0).to({regX:94.7,regY:94.7,scaleX:1,scaleY:1},28,cjs.Ease.get(1)).wait(117));

	// symbol_5
	this.instance_10 = new lib.symbol_5();
	this.instance_10.setTransform(368.6,364.8,0.115,0.115,0,0,0,94.8,94.8);
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(46).to({_off:false},0).to({regX:94.7,regY:94.7,scaleX:1,scaleY:1},28,cjs.Ease.get(1)).wait(117));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_22 = new cjs.Graphics().p("AdAIaIA7gEIBgYVIg7AEg");
	var mask_graphics_23 = new cjs.Graphics().p("AYbIeIIAggIBgYVIoAAgg");
	var mask_graphics_24 = new cjs.Graphics().p("AUCIiIOyg6IBgYVIuyA6g");
	var mask_graphics_25 = new cjs.Graphics().p("AP1ImIVShUIBgYVI1SBUg");
	var mask_graphics_26 = new cjs.Graphics().p("AL1IpIbdhsIBgYVI7dBsg");
	var mask_graphics_27 = new cjs.Graphics().p("AICItMAhVgCEIBgYVMghVACEg");
	var mask_graphics_28 = new cjs.Graphics().p("AEbIwMAm6gCaIBgYVMgm6ACag");
	var mask_graphics_29 = new cjs.Graphics().p("ABBIzMAsMgCuIBgYVMgsNACug");
	var mask_graphics_30 = new cjs.Graphics().p("AiLI2MAxIgDCIBgYVMgxJADCg");
	var mask_graphics_31 = new cjs.Graphics().p("AlNI4MA10gDUIBgYVMg10ADUg");
	var mask_graphics_32 = new cjs.Graphics().p("AoCI7MA6LgDlIBgYVMg6LADlg");
	var mask_graphics_33 = new cjs.Graphics().p("AqrI9MA+QgD1IBgYVMg+QAD1g");
	var mask_graphics_34 = new cjs.Graphics().p("AtHJAMBCCgEFIBgYVMhCCAEFg");
	var mask_graphics_35 = new cjs.Graphics().p("AvWJCMBFfgESIBgYVMhFfAESg");
	var mask_graphics_36 = new cjs.Graphics().p("AxZJDMBIqgEeIBfYVMhIpAEeg");
	var mask_graphics_37 = new cjs.Graphics().p("AzQJFMBLhgEqIBgYVMhLhAEqg");
	var mask_graphics_38 = new cjs.Graphics().p("A06JHMBOFgE0IBgYVMhOFAE0g");
	var mask_graphics_39 = new cjs.Graphics().p("A2YJIMBQWgE9IBgYVMhQWAE9g");
	var mask_graphics_40 = new cjs.Graphics().p("A3pJJMBSUgFFIBfYVMhSTAFFg");
	var mask_graphics_41 = new cjs.Graphics().p("A4tJKMBT9gFLIBgYVMhT+AFLg");
	var mask_graphics_42 = new cjs.Graphics().p("A5mJLMBVVgFRIBgYVMhVVAFRg");
	var mask_graphics_43 = new cjs.Graphics().p("A6RJLMBWYgFUIBfYVMhWXAFUg");
	var mask_graphics_44 = new cjs.Graphics().p("A6xJMMBXJgFYIBgYVMhXJAFYg");
	var mask_graphics_45 = new cjs.Graphics().p("A7DJMMBXlgFZIBgYVMhXlAFZg");
	var mask_graphics_46 = new cjs.Graphics().p("A7KJMMBXugFaIBgYVMhXvAFag");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:null,x:0,y:0}).wait(22).to({graphics:mask_graphics_22,x:201.1,y:209.5}).wait(1).to({graphics:mask_graphics_23,x:217.1,y:209.9}).wait(1).to({graphics:mask_graphics_24,x:232.5,y:210.3}).wait(1).to({graphics:mask_graphics_25,x:247.1,y:210.7}).wait(1).to({graphics:mask_graphics_26,x:261.1,y:211.1}).wait(1).to({graphics:mask_graphics_27,x:274.4,y:211.4}).wait(1).to({graphics:mask_graphics_28,x:287,y:211.7}).wait(1).to({graphics:mask_graphics_29,x:298.9,y:212}).wait(1).to({graphics:mask_graphics_30,x:310.1,y:212.3}).wait(1).to({graphics:mask_graphics_31,x:320.7,y:212.6}).wait(1).to({graphics:mask_graphics_32,x:330.6,y:212.9}).wait(1).to({graphics:mask_graphics_33,x:339.8,y:213.1}).wait(1).to({graphics:mask_graphics_34,x:348.3,y:213.3}).wait(1).to({graphics:mask_graphics_35,x:356.1,y:213.5}).wait(1).to({graphics:mask_graphics_36,x:363.3,y:213.7}).wait(1).to({graphics:mask_graphics_37,x:369.8,y:213.9}).wait(1).to({graphics:mask_graphics_38,x:375.6,y:214}).wait(1).to({graphics:mask_graphics_39,x:380.7,y:214.1}).wait(1).to({graphics:mask_graphics_40,x:385.1,y:214.2}).wait(1).to({graphics:mask_graphics_41,x:388.8,y:214.3}).wait(1).to({graphics:mask_graphics_42,x:391.9,y:214.4}).wait(1).to({graphics:mask_graphics_43,x:394.3,y:214.5}).wait(1).to({graphics:mask_graphics_44,x:396,y:214.5}).wait(1).to({graphics:mask_graphics_45,x:397,y:214.6}).wait(1).to({graphics:mask_graphics_46,x:397.3,y:214.6}).wait(145));

	// symbol_24
	this.instance_11 = new lib.symbol_24();
	this.instance_11.setTransform(505.7,328.6,1,1,0,0,0,273.9,24.7);
	this.instance_11._off = true;

	this.instance_11.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(22).to({_off:false},0).wait(169));

	// white_mc
	this.white_mc = new lib.symbol_white_s8();
	this.white_mc.setTransform(480,274,1,1,0,0,0,490,284);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(191));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.s112 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.s0.alpha = 0;

		createjs.Tween.get(this.s0,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);

		for(i=1;i<=3;i++){
			var sName = 's'+i;
			this[sName].alpha = 0;
			this[sName].scaleX = 1.15;
			this[sName].scaleY = 1.15;
		}
	}
	this.frame_1 = function() {
		this.stop();

		var fr = 140;



		for(i=1;i<=3;i++){
			var sName = 's'+i;
			createjs.Tween.get(this[sName],{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);
			createjs.Tween.get(this[sName],{useTicks:true}).to({scaleX:1.0, scaleY:1.0}, fr);
		}


		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, fr-30).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1).call(this.frame_1).wait(10));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Egj2ApSIAA7ZMBJaAAAIAAbZg");
	mask.setTransform(240.5,264.3);

	// symbol_8_2
	this.s2 = new lib.symbol_8_2();
	this.s2.setTransform(245.1,441,1,1,0,0,0,234.8,87.7);

	this.s2.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.s2).wait(11));

	// mask (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("EgkoANsIAA7XMBJRAAAIAAbXg");
	mask_1.setTransform(714.6,440.9);

	// symbol_8_3
	this.s3 = new lib.symbol_8_3();
	this.s3.setTransform(711.1,441,1,1,0,0,0,238.1,87.7);

	this.s3.mask = mask_1;

	this.timeline.addTween(cjs.Tween.get(this.s3).wait(11));

	// mask (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("EhJLAUQMAAAgoeMCSXAAAMAAAAoeg");
	mask_2.setTransform(480,139.9);

	// symbol_8_1
	this.s1 = new lib.symbol_8_1();
	this.s1.setTransform(479.9,143.6,1,1,0,0,0,468.4,129.6);

	this.s1.mask = mask_2;

	this.timeline.addTween(cjs.Tween.get(this.s1).wait(11));

	// symbol_8_0
	this.s0 = new lib.symbol_8_0();
	this.s0.setTransform(480,273.9,1,1,0,0,0,480,273.9);

	this.timeline.addTween(cjs.Tween.get(this.s0).wait(11));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.s73 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.s0.alpha = 0;
		this.t1.alpha = 0;
		this.t2.alpha = 0;

		createjs.Tween.get(this.s0,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);

		for(i=1;i<=5;i++){
			var sName = 's'+i;
			this[sName].alpha = 0;
			this[sName].scaleX = 1.15;
			this[sName].scaleY = 1.15;
		}
	}
	this.frame_1 = function() {
		this.stop();

		var fr = 140;



		for(i=1;i<=5;i++){
			var sName = 's'+i;
			createjs.Tween.get(this[sName],{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);
			createjs.Tween.get(this[sName],{useTicks:true}).to({scaleX:1.0, scaleY:1.0}, fr);
		}

		createjs.Tween.get(this.t1,{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);
		createjs.Tween.get(this.t2,{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);

		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, fr-30).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1).call(this.frame_1).wait(2));

	// symbol_2_5
	this.t2 = new lib.symbol_2_5();
	this.t2.setTransform(598.7,112.3,1,1,0,0,0,11.8,72);

	this.timeline.addTween(cjs.Tween.get(this.t2).wait(3));

	// symbol_2_4
	this.t1 = new lib.symbol_2_4();
	this.t1.setTransform(376.6,162.2,1,1,0,0,0,32.3,106.5);

	this.timeline.addTween(cjs.Tween.get(this.t1).wait(3));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EgYVAn2MAAAhPrMAwrAAAMAAABPrg");
	mask.setTransform(479.7,284.5);

	// symbol_2_6
	this.s3 = new lib.symbol_2_6();
	this.s3.setTransform(479.7,284.5,1,1,0,0,0,155.8,255);

	this.s3.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.s3).wait(3));

	// mask (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("A0yR8MAAAgj3MAplAAAMAAAAj3g");
	mask_1.setTransform(160,401.6);

	// symbol_2_3
	this.s2 = new lib.symbol_2_3();
	this.s2.setTransform(160,401.6,1,1,0,0,0,133.1,114.9);

	this.s2.mask = mask_1;

	this.timeline.addTween(cjs.Tween.get(this.s2).wait(3));

	// mask (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("A0uR8MAAAgj3MApeAAAMAAAAj3g");
	mask_2.setTransform(159.7,144.3);

	// symbol_2_2
	this.s1 = new lib.symbol_2_2();
	this.s1.setTransform(160.4,145,1,1,0,0,0,132.8,114.9);

	this.s1.mask = mask_2;

	this.timeline.addTween(cjs.Tween.get(this.s1).wait(3));

	// mask (mask)
	var mask_3 = new cjs.Shape();
	mask_3._off = true;
	mask_3.graphics.p("A0vR8MAAAgj3MApeAAAMAAAAj3g");
	mask_3.setTransform(797.8,401.6);

	// symbol_2_8
	this.s4 = new lib.symbol_2_8();
	this.s4.setTransform(797.8,401.6,1,1,0,0,0,132.8,114.9);

	this.s4.mask = mask_3;

	this.timeline.addTween(cjs.Tween.get(this.s4).wait(3));

	// mask (mask)
	var mask_4 = new cjs.Shape();
	mask_4._off = true;
	mask_4.graphics.p("A0vR8MAAAgj3MApeAAAMAAAAj3g");
	mask_4.setTransform(797.8,145);

	// symbol_2_7
	this.s5 = new lib.symbol_2_7();
	this.s5.setTransform(798.4,144.4,1,1,0,0,0,132.8,114.9);

	this.s5.mask = mask_4;

	this.timeline.addTween(cjs.Tween.get(this.s5).wait(3));

	// symbol_2_1
	this.s0 = new lib.symbol_2_1();
	this.s0.setTransform(480,273.3,1,1,0,0,0,480,273.3);

	this.timeline.addTween(cjs.Tween.get(this.s0).wait(3));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.9);


(lib.s72 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.s0.alpha = 0;

		createjs.Tween.get(this.s0,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);

		for(i=1;i<=5;i++){
			var sName = 's'+i;
			this[sName].alpha = 0;
			this[sName].scaleX = 1.15;
			this[sName].scaleY = 1.15;
		}
	}
	this.frame_1 = function() {
		this.stop();

		var fr = 140;



		for(i=1;i<=5;i++){
			var sName = 's'+i;
			createjs.Tween.get(this[sName],{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);
			createjs.Tween.get(this[sName],{useTicks:true}).to({scaleX:1.0, scaleY:1.0}, fr);
		}


		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, fr-30).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1).call(this.frame_1).wait(10));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EgsiAagMAAAg0/MBZFAAAMAAAA0/g");
	mask.setTransform(292.8,176);

	// symbol_4_1
	this.s1 = new lib.symbol_4_1();
	this.s1.setTransform(292.8,176,1,1,0,0,0,285.1,169.6);

	this.s1.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.s1).wait(11));

	// mask (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("EgSlAqFIAA+1MAmYAAAIAAe8g");
	mask_1.setTransform(126.7,270);

	// symbol_4_2
	this.s2 = new lib.symbol_4_2();
	this.s2.setTransform(130.6,443.2,1,1,0,0,0,122.9,97.6);

	this.s2.mask = mask_1;

	this.timeline.addTween(cjs.Tween.get(this.s2).wait(11));

	// mask (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("A4rOsIAA9XMAxXAAAIAAdXg");
	mask_2.setTransform(419.8,446);

	// symbol_4_3
	this.s3 = new lib.symbol_4_3();
	this.s3.setTransform(419.9,445.8,1,1,0,0,0,158.1,94.4);

	this.s3.mask = mask_2;

	this.timeline.addTween(cjs.Tween.get(this.s3).wait(11));

	// mask (mask)
	var mask_3 = new cjs.Shape();
	mask_3._off = true;
	mask_3.graphics.p("A8bNMIAA6XMA43AAAIAAaXg");
	mask_3.setTransform(769,90.9);

	// symbol_4_4
	this.s4 = new lib.symbol_4_4();
	this.s4.setTransform(769,90.9,1,1,0,0,0,182.1,84.5);

	this.s4.mask = mask_3;

	this.timeline.addTween(cjs.Tween.get(this.s4).wait(11));

	// mask (mask)
	var mask_4 = new cjs.Shape();
	mask_4._off = true;
	mask_4.graphics.p("AxrKjIAA1FMAjXAAAIAAVFg");
	mask_4.setTransform(778.9,410.5);

	// symbol_4_5
	this.s5 = new lib.symbol_4_5();
	this.s5.setTransform(778.8,410.5,1,1,0,0,0,113.2,67.5);

	this.s5.mask = mask_4;

	this.timeline.addTween(cjs.Tween.get(this.s5).wait(11));

	// symbol_4_0
	this.s0 = new lib.symbol_4_0();
	this.s0.setTransform(480,273.9,1,1,0,0,0,480,273.9);

	this.timeline.addTween(cjs.Tween.get(this.s0).wait(11));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.s7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, 100).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});


		this.white_mc.alpha = 0;
		createjs.Tween.get(this.white_mc,{useTicks:true}).to({alpha:1}, 30, createjs.Ease.cubicOut);
	}
	this.frame_189 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(189).call(this.frame_189).wait(2));

	// レイヤー 2
	this.instance = new lib.symbol_19();
	this.instance.setTransform(634.6,71.7,1,1,0,0,0,32.3,35.2);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(31).to({_off:false},0).wait(160));

	// symbol_20
	this.instance_1 = new lib.symbol_20();
	this.instance_1.setTransform(705.3,256.3,1,1,0,0,0,21.8,6);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(29).to({_off:false},0).to({x:714.3,alpha:1},17,cjs.Ease.get(1)).wait(145));

	// symbol_12
	this.instance_2 = new lib.symbol_12();
	this.instance_2.setTransform(674.9,238.7,0.34,0.34,0,0,0,15,14.7);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(29).to({_off:false},0).to({regX:15.1,scaleX:1,scaleY:1,x:675},17,cjs.Ease.get(1)).wait(145));

	// symbol_23
	this.instance_3 = new lib.symbol_23();
	this.instance_3.setTransform(700.2,379.5,1,1,0,0,0,7.7,40.3);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(22).to({_off:false},0).to({alpha:1},17,cjs.Ease.get(1)).wait(152));

	// symbol_1
	this.instance_4 = new lib.symbol_1();
	this.instance_4.setTransform(675.2,238.7,0.21,0.21,0,0,0,70.4,70.4);
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(46).to({_off:false},0).to({scaleX:1,scaleY:1},28,cjs.Ease.get(1)).wait(117));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_22 = new cjs.Graphics().p("EAjzAdhIYNi5IAIBDI4NC4g");
	var mask_graphics_23 = new cjs.Graphics().p("EAjKAYDIYNi4IA2HHI4NC4g");
	var mask_graphics_24 = new cjs.Graphics().p("EAiiAS1IYNi4IBiM6I4NC4g");
	var mask_graphics_25 = new cjs.Graphics().p("EAh8AN2IYNi4ICNSdI4OC4g");
	var mask_graphics_26 = new cjs.Graphics().p("EAhYAJFIYNi4IC1XwI4NC4g");
	var mask_graphics_27 = new cjs.Graphics().p("EAg1AEjIYNi4IDbcyI4NC4g");
	var mask_graphics_28 = new cjs.Graphics().p("EAgVAAQIYNi2MAD/AhiI4NC4g");
	var mask_graphics_29 = new cjs.Graphics().p("Af2jyIYNi4MAEiAmDI4OC4g");
	var mask_graphics_30 = new cjs.Graphics().p("AfZnnIYNi4MAFCAqTI4NC5g");
	var mask_graphics_31 = new cjs.Graphics().p("Ae9rNIYNi4MAFhAuTI4NC4g");
	var mask_graphics_32 = new cjs.Graphics().p("AekulIYNi4MAF9AyDI4NC4g");
	var mask_graphics_33 = new cjs.Graphics().p("AeMxtIYNi4MAGXA1iI4NC4g");
	var mask_graphics_34 = new cjs.Graphics().p("Ad20nIYNi4MAGwA4xI4NC4g");
	var mask_graphics_35 = new cjs.Graphics().p("Adh3SIYOi4MAHGA7vI4NC4g");
	var mask_graphics_36 = new cjs.Graphics().p("AdP5uIYNi4MAHbA+cI4NC4g");
	var mask_graphics_37 = new cjs.Graphics().p("Ac+77IYNi4MAHuBA5I4NC4g");
	var mask_graphics_38 = new cjs.Graphics().p("Acv95IYNi4MAH/BDFI4NC4g");
	var mask_graphics_39 = new cjs.Graphics().p("Aci/pIYNi4MAINBFBI4NC4g");
	var mask_graphics_40 = new cjs.Graphics().p("EAcWghJIYOi4MAIZBGsI4NC4g");
	var mask_graphics_41 = new cjs.Graphics().p("EAcNgibIYNi4MAIkBIHI4NC4g");
	var mask_graphics_42 = new cjs.Graphics().p("EAcFgjMIYNi4MAItBJRI4NC4g");
	var mask_graphics_43 = new cjs.Graphics().p("EAb/gjpIYNi4MAI0BKLI4NC4g");
	var mask_graphics_44 = new cjs.Graphics().p("EAb6gj+IYNi4MAI6BK1I4OC4g");
	var mask_graphics_45 = new cjs.Graphics().p("EAb4gkKIYNi4MAI8BLNI4NC4g");
	var mask_graphics_46 = new cjs.Graphics().p("EAb4gkOIYNi4MAI+BLVI4OC4g");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:null,x:0,y:0}).wait(22).to({graphics:mask_graphics_22,x:384.9,y:195.5}).wait(1).to({graphics:mask_graphics_23,x:385.3,y:199.4}).wait(1).to({graphics:mask_graphics_24,x:385.8,y:203.2}).wait(1).to({graphics:mask_graphics_25,x:386.2,y:206.7}).wait(1).to({graphics:mask_graphics_26,x:386.6,y:210.1}).wait(1).to({graphics:mask_graphics_27,x:387,y:213.4}).wait(1).to({graphics:mask_graphics_28,x:387.4,y:216.5}).wait(1).to({graphics:mask_graphics_29,x:387.7,y:219.4}).wait(1).to({graphics:mask_graphics_30,x:388,y:222.1}).wait(1).to({graphics:mask_graphics_31,x:388.3,y:224.7}).wait(1).to({graphics:mask_graphics_32,x:388.6,y:227.1}).wait(1).to({graphics:mask_graphics_33,x:388.9,y:229.3}).wait(1).to({graphics:mask_graphics_34,x:389.1,y:231.4}).wait(1).to({graphics:mask_graphics_35,x:389.4,y:233.3}).wait(1).to({graphics:mask_graphics_36,x:389.6,y:235.1}).wait(1).to({graphics:mask_graphics_37,x:389.7,y:236.6}).wait(1).to({graphics:mask_graphics_38,x:389.9,y:238.1}).wait(1).to({graphics:mask_graphics_39,x:390.1,y:239.3}).wait(1).to({graphics:mask_graphics_40,x:390.2,y:240.4}).wait(1).to({graphics:mask_graphics_41,x:390.3,y:241.3}).wait(1).to({graphics:mask_graphics_42,x:390.4,y:240.3}).wait(1).to({graphics:mask_graphics_43,x:390.5,y:238.6}).wait(1).to({graphics:mask_graphics_44,x:390.5,y:237.3}).wait(1).to({graphics:mask_graphics_45,x:390.5,y:236.6}).wait(1).to({graphics:mask_graphics_46,x:390.7,y:238.7}).wait(145));

	// symbol_27
	this.instance_5 = new lib.symbol_27();
	this.instance_5.setTransform(676.1,244.6,1,1,0,0,0,28.5,225.6);
	this.instance_5._off = true;

	this.instance_5.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(22).to({_off:false},0).wait(169));

	// white_mc
	this.white_mc = new lib.symbol_white_s2();
	this.white_mc.setTransform(480,274,1,1,0,0,0,490,284);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(191));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.s5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, 90).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});

		this.white_mc.alpha = 0;
		createjs.Tween.get(this.white_mc,{useTicks:true}).to({alpha:1}, 30, createjs.Ease.cubicOut);
	}
	this.frame_185 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(185).call(this.frame_185).wait(2));

	// symbol_17
	this.instance = new lib.symbol_17();
	this.instance.setTransform(462.8,176.7,1,1,0,0,0,54.1,5.8);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(27).to({_off:false},0).to({x:452.8,alpha:1},17,cjs.Ease.get(1)).wait(143));

	// symbol_10
	this.instance_1 = new lib.symbol_10();
	this.instance_1.setTransform(518.4,193.3,0.286,0.286,0,0,0,14.7,14.7);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(27).to({_off:false},0).to({scaleX:1,scaleY:1},17,cjs.Ease.get(1)).wait(143));

	// symbol_22
	this.instance_2 = new lib.symbol_22();
	this.instance_2.setTransform(552,400.4,1,1,0,0,0,8,45.8);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(28).to({_off:false},0).to({alpha:1},16,cjs.Ease.get(1)).wait(143));

	// symbol_3
	this.instance_3 = new lib.symbol_3();
	this.instance_3.setTransform(519.1,193.6,0.2,0.2,0,0,0,70.4,70.7);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(44).to({_off:false},0).to({scaleX:1,scaleY:1},26,cjs.Ease.get(1)).wait(117));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_21 = new cjs.Graphics().p("AWRPfIYNi4IAFAoI4OC4g");
	var mask_graphics_22 = new cjs.Graphics().p("AWBNfIYOi4IAjEnI4OC4g");
	var mask_graphics_23 = new cjs.Graphics().p("AVzLlIYNi4IBAIZI4NC4g");
	var mask_graphics_24 = new cjs.Graphics().p("AVlJxIYNi4IBcMAI4NC4g");
	var mask_graphics_25 = new cjs.Graphics().p("AVYICIYNi4IB2PcI4NC4g");
	var mask_graphics_26 = new cjs.Graphics().p("AVMGZIYNi4ICOStI4NC4g");
	var mask_graphics_27 = new cjs.Graphics().p("AVAE2IYNi4ICmVyI4NC4g");
	var mask_graphics_28 = new cjs.Graphics().p("AU1DYIYNi4IC8YsI4NC4g");
	var mask_graphics_29 = new cjs.Graphics().p("AUqCAIYNi2IDRbZI4NC4g");
	var mask_graphics_30 = new cjs.Graphics().p("AUhAuIYNi2IDkd9I4NC4g");
	var mask_graphics_31 = new cjs.Graphics().p("AUYgdIYNi4MAD2AgVI4NC4g");
	var mask_graphics_32 = new cjs.Graphics().p("AUPhkIYNi4MAEHAiiI4NC4g");
	var mask_graphics_33 = new cjs.Graphics().p("AUHilIYNi4MAEXAkkI4NC4g");
	var mask_graphics_34 = new cjs.Graphics().p("AUAjgIYNi5MAElAmbI4NC4g");
	var mask_graphics_35 = new cjs.Graphics().p("AT6kWIYNi4MAExAoFI4NC4g");
	var mask_graphics_36 = new cjs.Graphics().p("AT0lHIYNi4MAE9AplI4NC4g");
	var mask_graphics_37 = new cjs.Graphics().p("ATvlxIYNi4MAFHAq5I4NC5g");
	var mask_graphics_38 = new cjs.Graphics().p("ATrmWIYNi4MAFPAsDI4NC4g");
	var mask_graphics_39 = new cjs.Graphics().p("ATnm1IYNi4MAFXAtBI4NC4g");
	var mask_graphics_40 = new cjs.Graphics().p("ATknPIYNi4MAFdAt0I4NC4g");
	var mask_graphics_41 = new cjs.Graphics().p("ATinjIYNi4MAFhAucI4NC4g");
	var mask_graphics_42 = new cjs.Graphics().p("ATgnxIYNi4MAFlAu4I4NC4g");
	var mask_graphics_43 = new cjs.Graphics().p("ATfn5IYNi4MAFnAvII4NC4g");
	var mask_graphics_44 = new cjs.Graphics().p("ATfn4IYNi4MAFnAvOI4NC4g");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:null,x:0,y:0}).wait(21).to({graphics:mask_graphics_21,x:297.9,y:103.2}).wait(1).to({graphics:mask_graphics_22,x:299.4,y:115.8}).wait(1).to({graphics:mask_graphics_23,x:300.8,y:127.9}).wait(1).to({graphics:mask_graphics_24,x:302.2,y:139.3}).wait(1).to({graphics:mask_graphics_25,x:303.5,y:150.3}).wait(1).to({graphics:mask_graphics_26,x:304.7,y:160.6}).wait(1).to({graphics:mask_graphics_27,x:305.9,y:170.5}).wait(1).to({graphics:mask_graphics_28,x:307,y:179.7}).wait(1).to({graphics:mask_graphics_29,x:308,y:188.4}).wait(1).to({graphics:mask_graphics_30,x:309,y:196.5}).wait(1).to({graphics:mask_graphics_31,x:309.9,y:204.1}).wait(1).to({graphics:mask_graphics_32,x:310.8,y:211.1}).wait(1).to({graphics:mask_graphics_33,x:311.5,y:217.5}).wait(1).to({graphics:mask_graphics_34,x:312.2,y:223.4}).wait(1).to({graphics:mask_graphics_35,x:312.9,y:228.7}).wait(1).to({graphics:mask_graphics_36,x:313.4,y:233.5}).wait(1).to({graphics:mask_graphics_37,x:313.9,y:237.7}).wait(1).to({graphics:mask_graphics_38,x:314.4,y:241.3}).wait(1).to({graphics:mask_graphics_39,x:314.7,y:244.4}).wait(1).to({graphics:mask_graphics_40,x:315,y:247}).wait(1).to({graphics:mask_graphics_41,x:315.3,y:248.9}).wait(1).to({graphics:mask_graphics_42,x:315.4,y:250.3}).wait(1).to({graphics:mask_graphics_43,x:315.5,y:251.2}).wait(1).to({graphics:mask_graphics_44,x:315.6,y:251.8}).wait(143));

	// symbol_26
	this.instance_4 = new lib.symbol_26();
	this.instance_4.setTransform(536.8,341.9,1,1,0,0,0,19.8,148.7);
	this.instance_4._off = true;

	this.instance_4.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(21).to({_off:false},0).wait(166));

	// white_mc
	this.white_mc = new lib.symbol_white_s6();
	this.white_mc.setTransform(480,274,1,1,0,0,0,490,284);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(187));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.s3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.s0.alpha = 0;

		createjs.Tween.get(this.s0,{useTicks:true}).to({alpha:1}, 40, createjs.Ease.cubicOut);

		for(i=1;i<=3;i++){
			var sName = 's'+i;
			this[sName].alpha = 0;
			this[sName].scaleX = 1.15;
			this[sName].scaleY = 1.15;
		}
	}
	this.frame_1 = function() {
		this.stop();

		var fr = 140;



		for(i=1;i<=3;i++){
			var sName = 's'+i;
			createjs.Tween.get(this[sName],{useTicks:true}).to({alpha:1}, 60, createjs.Ease.cubicOut);
			createjs.Tween.get(this[sName],{useTicks:true}).to({scaleX:1.0, scaleY:1.0}, fr);
		}


		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, fr-30).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1).call(this.frame_1).wait(18));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EhJvAayMAAAg1kMCTeAAAMAAAA1kg");
	mask.setTransform(480.3,177.9);

	// symbol_6_1
	this.s1 = new lib.symbol_6_1();
	this.s1.setTransform(480.3,177.9,1,1,0,0,0,472,171.5);

	this.s1.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.s1).wait(19));

	// mask (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("EATEAqQIAA+HMAlCAAAIAAeHg");
	mask_1.setTransform(359,270.4);

	// symbol_6_2
	this.s2 = new lib.symbol_6_2();
	this.s2.setTransform(610,444.5,1,1,0,0,0,128.7,96.3);

	this.s2.mask = mask_1;

	this.timeline.addTween(cjs.Tween.get(this.s2).wait(19));

	// mask (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("AyYPDIAA+FMAkxAAAIAAeFg");
	mask_2.setTransform(834.6,444.5);

	// symbol_6_3
	this.s3 = new lib.symbol_6_3();
	this.s3.setTransform(834.6,444.5,1,1,0,0,0,117.8,96.3);

	this.s3.mask = mask_2;

	this.timeline.addTween(cjs.Tween.get(this.s3).wait(19));

	// symbol_6_0
	this.s0 = new lib.symbol_6_0();
	this.s0.setTransform(480,273.9,1,1,0,0,0,480,273.9);

	this.timeline.addTween(cjs.Tween.get(this.s0).wait(19));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,960,547.8);


(lib.s2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, 85).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});

		this.white_mc.alpha = 0;
		createjs.Tween.get(this.white_mc,{useTicks:true}).to({alpha:1}, 30, createjs.Ease.cubicOut);
	}
	this.frame_164 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(164).call(this.frame_164).wait(2));

	// symbol_14
	this.instance = new lib.symbol_14();
	this.instance.setTransform(234.4,457.2,1,1,0,0,0,42.6,6);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(20).to({_off:false},0).to({x:224.4,alpha:1},17,cjs.Ease.get(1)).wait(129));

	// symbol_7
	this.instance_1 = new lib.symbol_7();
	this.instance_1.setTransform(292.2,456.7,0.269,0.269,0,0,0,15.1,15.1);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(20).to({_off:false},0).to({scaleX:1,scaleY:1},17,cjs.Ease.get(1)).wait(129));

	// symbol_6
	this.instance_2 = new lib.symbol_6();
	this.instance_2.setTransform(292.5,456,0.204,0.204,0,0,0,70.5,70.7);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(37).to({_off:false},0).to({regX:70.4,scaleX:1,scaleY:1},29,cjs.Ease.get(1)).wait(100));

	// white_mc
	this.white_mc = new lib.symbol_white_s4();
	this.white_mc.setTransform(480,274,1,1,0,0,0,490,284);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(166));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.s1_12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		createjs.Tween.get(exportRoot.timer,{useTicks:true,override:true}).to({}, 70).call(function(){
			//exportRoot.text_mc.play();
			exportRoot.since_mc.gotoAndStop(nextSince);
		});
	}
	this.frame_167 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(167).call(this.frame_167).wait(1));

	// symbol_18
	this.instance = new lib.symbol_18();
	this.instance.setTransform(536,99.3,1,1,0,0,0,49.2,5.8);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(8).to({_off:false},0).to({x:526,alpha:1},17,cjs.Ease.get(1)).wait(143));

	// symbol_11
	this.instance_1 = new lib.symbol_11();
	this.instance_1.setTransform(578.6,124.2,0.252,0.252,0,0,0,14.7,14.7);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(8).to({_off:false},0).to({scaleX:1,scaleY:1},17,cjs.Ease.get(1)).wait(143));

	// symbol_19
	this.instance_2 = new lib.symbol_19();
	this.instance_2.setTransform(634.6,71.7,1,1,0,0,0,32.3,35.2);
	this.instance_2.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({alpha:1},17,cjs.Ease.get(1)).wait(151));

	// symbol_2
	this.instance_3 = new lib.symbol_2();
	this.instance_3.setTransform(578.6,124.2,0.203,0.203,0,0,0,70.4,70.4);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(25).to({_off:false},0).to({scaleX:1,scaleY:1},26,cjs.Ease.get(1)).wait(117));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_0 = new cjs.Graphics().p("EAmEgHxIBphqIRPRNIhpBqg");
	var mask_graphics_1 = new cjs.Graphics().p("EAjTgGZIEakaIRPRNIkaEag");
	var mask_graphics_2 = new cjs.Graphics().p("EAghgFAIHMnMIRPRNInMHMg");
	var mask_graphics_3 = new cjs.Graphics().p("AdwjnIJ9p+IRPRNIp9J+g");
	var mask_graphics_4 = new cjs.Graphics().p("Aa/iPIMusuIRQRNIsvMug");
	var mask_graphics_5 = new cjs.Graphics().p("AYOg2IPgvgIRPRNIvgPgg");
	var mask_graphics_6 = new cjs.Graphics().p("AVcAhISSyQIRPRPIySSQg");
	var mask_graphics_7 = new cjs.Graphics().p("ASrB5IVD1AIRPRPI1DVAg");
	var mask_graphics_8 = new cjs.Graphics().p("AP6DSIX03yIRPRPI30Xyg");
	var mask_graphics_9 = new cjs.Graphics().p("ANJErIal6kIRPRPI6lakg");
	var mask_graphics_10 = new cjs.Graphics().p("AKXGDIdX9UIRPRPI9XdUg");
	var mask_graphics_11 = new cjs.Graphics().p("AHmHcMAgIggGIRPRPMggIAgGg");
	var mask_graphics_12 = new cjs.Graphics().p("AE1I1MAi5gi4IRPRPMgi5Ai4g");
	var mask_graphics_13 = new cjs.Graphics().p("ACDKNMAlrgloIRPRPMglqAlog");
	var mask_graphics_14 = new cjs.Graphics().p("AgsLmMAoagoaIRQRPMgodAoag");
	var mask_graphics_15 = new cjs.Graphics().p("AjdM/MArMgrMIRPRPMgrOArMg");
	var mask_graphics_16 = new cjs.Graphics().p("AmOOXMAt9gt9IRPRQMgt/At9g");
	var mask_graphics_17 = new cjs.Graphics().p("ApAPwMAwvgwuIRPRPMgwxAwug");
	var mask_graphics_18 = new cjs.Graphics().p("ArxRJMAzggzgIRPRPMgziAzgg");
	var mask_graphics_19 = new cjs.Graphics().p("AuiSiMA2Rg2SIRPRQMg2TA2Rg");
	var mask_graphics_20 = new cjs.Graphics().p("AxTT6MA5Cg5CIRPRPMg5CA5Cg");
	var mask_graphics_21 = new cjs.Graphics().p("A0FVTMA70g70IRPRPMg70A70g");
	var mask_graphics_22 = new cjs.Graphics().p("A22WsMA+lg+mIRPRPMg+lA+mg");
	var mask_graphics_23 = new cjs.Graphics().p("A5nYEMBBWhBWIRPRPMhBWBBWg");
	var mask_graphics_24 = new cjs.Graphics().p("A8YZdMBEIhEIIRPRPMhEIBEIg");
	var mask_graphics_25 = new cjs.Graphics().p("A/Ea2MBG5hG6IRPRPMhG5BG6g");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:mask_graphics_0,x:364.5,y:13.4}).wait(1).to({graphics:mask_graphics_1,x:364.5,y:22.3}).wait(1).to({graphics:mask_graphics_2,x:364.5,y:31.1}).wait(1).to({graphics:mask_graphics_3,x:364.5,y:40}).wait(1).to({graphics:mask_graphics_4,x:364.5,y:48.8}).wait(1).to({graphics:mask_graphics_5,x:364.5,y:57.7}).wait(1).to({graphics:mask_graphics_6,x:364.5,y:66.5}).wait(1).to({graphics:mask_graphics_7,x:364.5,y:75.4}).wait(1).to({graphics:mask_graphics_8,x:364.5,y:84.2}).wait(1).to({graphics:mask_graphics_9,x:364.6,y:93.1}).wait(1).to({graphics:mask_graphics_10,x:364.6,y:101.9}).wait(1).to({graphics:mask_graphics_11,x:364.6,y:110.7}).wait(1).to({graphics:mask_graphics_12,x:364.6,y:119.6}).wait(1).to({graphics:mask_graphics_13,x:364.6,y:128.4}).wait(1).to({graphics:mask_graphics_14,x:364.6,y:137.3}).wait(1).to({graphics:mask_graphics_15,x:364.6,y:146.1}).wait(1).to({graphics:mask_graphics_16,x:364.6,y:155}).wait(1).to({graphics:mask_graphics_17,x:364.6,y:163.8}).wait(1).to({graphics:mask_graphics_18,x:364.6,y:172.7}).wait(1).to({graphics:mask_graphics_19,x:364.7,y:181.5}).wait(1).to({graphics:mask_graphics_20,x:364.7,y:190.3}).wait(1).to({graphics:mask_graphics_21,x:364.7,y:199.2}).wait(1).to({graphics:mask_graphics_22,x:364.7,y:208}).wait(1).to({graphics:mask_graphics_23,x:364.7,y:216.9}).wait(1).to({graphics:mask_graphics_24,x:364.7,y:225.7}).wait(1).to({graphics:mask_graphics_25,x:365.2,y:233.6}).wait(143));

	// symbol_25
	this.instance_4 = new lib.symbol_25();
	this.instance_4.setTransform(463.9,255.6,1,1,0,0,0,201.1,233);

	this.instance_4.mask = mask;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(168));

	// white_mc
	this.white_mc = new lib.white_mc();
	this.white_mc.setTransform(480,274,1,1,0,0,0,480,274);

	this.timeline.addTween(cjs.Tween.get(this.white_mc).wait(168));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-10,-10,980,568);


(lib.replay_btn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー 1
	this.instance = new lib.replay_btn2();
	this.instance.setTransform(37.5,11,1,1,0,0,0,37.5,11);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Al2BjIAAjGILsAAIAADGg");
	this.shape.setTransform(37.5,10);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{alpha:1}}]}).to({state:[{t:this.instance,p:{alpha:0.762}}]},1).to({state:[{t:this.shape}]},2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,75,20);


(lib.sinceMC = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{s0:0,s1:9,s2:19,s3:29,s4:39,s5:49,s6:59,s7:69,s8:79,s9:89});

	// timeline functions:
	this.frame_0 = function() {
		sinceNo = 0;
		this.stop();
	}
	this.frame_9 = function() {
		sinceNo = 1;
	}
	this.frame_19 = function() {
		sinceNo = 2;
	}
	this.frame_29 = function() {
		sinceNo = 3;
	}
	this.frame_39 = function() {
		sinceNo = 4;
	}
	this.frame_49 = function() {
		sinceNo = 5;
	}
	this.frame_59 = function() {
		sinceNo = 6;
	}
	this.frame_69 = function() {
		sinceNo = 7;
	}
	this.frame_79 = function() {
		sinceNo = 8;
	}
	this.frame_89 = function() {
		sinceNo = 9;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(9).call(this.frame_9).wait(10).call(this.frame_19).wait(10).call(this.frame_29).wait(10).call(this.frame_39).wait(10).call(this.frame_49).wait(10).call(this.frame_59).wait(10).call(this.frame_69).wait(10).call(this.frame_79).wait(10).call(this.frame_89).wait(31));

	// last_bg
	this.last_bg = new lib.sim48();
	this.last_bg.setTransform(750,350,1,1,0,0,0,750,350);
	this.last_bg._off = true;

	this.timeline.addTween(cjs.Tween.get(this.last_bg).wait(89).to({_off:false},0).wait(31));

	// s8
	this.s8 = new lib.s113();
	this.s8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s8).wait(79).to({_off:false},0).to({_off:true},10).wait(31));

	// s7
	this.s7 = new lib.s112();
	this.s7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s7).wait(69).to({_off:false},0).to({_off:true},11).wait(40));

	// s6
	this.s6 = new lib.s5();
	this.s6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s6).wait(59).to({_off:false},0).to({_off:true},11).wait(50));

	// s5
	this.s5 = new lib.s3();
	this.s5.setTransform(750,350,1,1,0,0,0,750,350);
	this.s5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s5).wait(49).to({_off:false},0).to({_off:true},11).wait(60));

	// s4
	this.s4 = new lib.s2();
	this.s4.setTransform(479.9,235,1,1,0,0,0,479.9,235);
	this.s4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s4).wait(39).to({_off:false},0).to({_off:true},11).wait(70));

	// s3
	this.s3 = new lib.s72();
	this.s3.setTransform(650,650,1,1,0,0,0,650,650);
	this.s3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s3).wait(29).to({_off:false},0).to({_off:true},11).wait(80));

	// s2
	this.s2 = new lib.s7();
	this.s2.setTransform(650,650,1,1,0,0,0,650,650);
	this.s2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s2).wait(19).to({_off:false},0).to({_off:true},11).wait(90));

	// s1
	this.s1 = new lib.s73();
	this.s1.setTransform(695.5,306.9,1,1,0,0,0,695.5,306.9);
	this.s1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.s1).wait(9).to({_off:false},0).to({_off:true},11).wait(100));

	// s0
	this.s0 = new lib.s1_12();

	this.timeline.addTween(cjs.Tween.get(this.s0).to({_off:true},10).wait(110));

	// defSize
	this.instance = new lib.defsize();
	this.instance.setTransform(448.1,284.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(120));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-511.9,-675.9,1920,1920);


// stage content:
(lib.movie = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.stop();

		var lastSince = 9;

		window.addEventListener("keydown", handleKeyDown);
		function handleKeyDown(event) {
		   var keyCode = event.keyCode;
		   if (keyCode == 39) {
		      clickNextBtn();
		   }
		}
		function clickNextBtn(event) {
			createjs.Tween.removeTweens(exportRoot.timer);
			exportRoot.since_mc.gotoAndStop(nextSince);
		}

		stage.enableMouseOver();

		var skip_btn = this.skip_btn;
		var replay_btn = this.replay_btn;

		skip_btn.addEventListener("click", clickSkipBtn);
		replay_btn.addEventListener("click", clickReplayBtn);

		function clickSkipBtn(event) {
			createjs.Tween.removeTweens(exportRoot.timer);
			exportRoot.since_mc.gotoAndStop('s'+lastSince);
		}
		function clickReplayBtn(event) {
			createjs.Tween.removeTweens(exportRoot.timer);
			exportRoot.since_mc.gotoAndStop('s0');
		}

		var container = document.getElementById( 'canvasContainer' ),
		canvas = document.getElementById( 'canvas' ),
		queue = null,
		wait = 300;

		window.addEventListener( 'resize', function() {
			setCanvasSize();
		});
		function setCanvasSize() {
			canvas.width = container.offsetWidth;
			canvas.height = container.offsetWidth*0.57083333 + 1;
			rePage();
		}

		//var textPt = [0,0,1,1,1,0,0,0,0,0,0,0,0,0,0];

		sinceNo = 0;
		nowSince = 's0';
		nextSince = 's1';
		var since_mc = this.since_mc;
		//var text_mc = this.text_mc;

		function rePage(){
			//if(sinceNo == 0){
				since_mc.scaleX = canvas.width/960;
				since_mc.scaleY = since_mc.scaleX;
				since_mc.x = 0;
				since_mc.y = 0;
			//}

			/*
			text_mc.x = canvas.width / 2;
			text_mc.y = canvas.height / 2;
			*/
			/*
			if(sinceNo == 9){
				s9.x = Math.floor(canvas.width) / 30;
				s9.y = Math.floor(canvas.height/2) - 88;
			}
			*/

			if(sinceNo == 9){
				replay_btn.visible = true;
				skip_btn.visible = false;
				replay_btn.x = 15;
				//replay_btn.x = canvas.width - 75 - 15;
				replay_btn.y = canvas.height - 20 - 15;
			} else {
				replay_btn.visible = false;
				skip_btn.visible = true;
				skip_btn.x = 15;
				//skip_btn.x = canvas.width - 75 - 15;
				skip_btn.y = canvas.height - 20 - 15;
			}

		}

		setCanvasSize();

		createjs.Ticker.addEventListener("tick", tickEvent);
		var beforeSinceNo = sinceNo;
		function tickEvent(){
			if(beforeSinceNo != sinceNo){
				sinceChangeEvent();
				beforeSinceNo = sinceNo;
			}
		}

		var s9 = this.s9;

		function sinceChangeEvent(){
			nowSince = 's'+parseInt(sinceNo);
			if(sinceNo >= lastSince){
				nextSince = 's0';
			} else {
				var sno = parseInt(sinceNo)+1;
				nextSince = 's'+sno;
			}

			/*
			if(textPt[sinceNo] != 0){
				textEvent();
			} else {
				text_mc.gotoAndStop(0);
				text_mc.alpha = 0;
			}
			*/

			console.log(nowSince);


			/*if(sinceNo == 9){
				s9.gotoAndPlay(1);
			} else {
				s9.gotoAndStop(0);
			}*/

			rePage();
		}

		/*
		function textEvent(){
			text_mc.alpha = 1;
			text_mc.obj_mc.gotoAndStop(sinceNo);
			text_mc.gotoAndPlay(1);
		}
		*/
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(9));

	// レイヤー 11
	this.replay_btn = new lib.replay_btn();
	this.replay_btn.setTransform(191,0);
	new cjs.ButtonHelper(this.replay_btn, 0, 1, 2, false, new lib.replay_btn(), 3);

	this.timeline.addTween(cjs.Tween.get(this.replay_btn).wait(9));

	// レイヤー 9
	this.skip_btn = new lib.skip_btn();
	new cjs.ButtonHelper(this.skip_btn, 0, 1, 2, false, new lib.skip_btn(), 3);

	this.timeline.addTween(cjs.Tween.get(this.skip_btn).wait(9));

	// timer
	this.timer = new lib.timer();
	this.timer.setTransform(50,-50,1,1,0,0,0,50,50);

	this.timeline.addTween(cjs.Tween.get(this.timer).wait(9));

	// since_mc
	this.since_mc = new lib.sinceMC();

	this.timeline.addTween(cjs.Tween.get(this.since_mc).wait(9));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-2099.8,-402,6000,1920);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;