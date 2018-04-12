<?php
$categories = get_field('categories', get_post()->ID);
$order_details = get_field('order_details', get_post()->ID);
$description_order = get_field('description_order', get_post()->ID);
$titel_order = get_field('titel_order', get_post()->ID);
?>
<!doctype html>
<html>
<head>
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<title>【<?php echo get_the_title(); ?>】事例紹介｜オーダーリノベ</title>
<meta name="description" content="オーダーリノベはリノベーション住宅の新しい選択肢。物件の販売価格内でお客様のライフスタイルに合ったリノベーションをご提案させて頂きます。">
<meta name="keywords" content="リノベーション,オーダーリノベ,中古マンション,中古物件,住宅ローン,リフォームローン,">
<base href="https://www.chronicle-web.com/order_renove/sample/wp-content/themes/renove/">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/global-navi.css" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/order_renove/static/css/styles.css" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/order_renove/static/css/customer.css" type="text/css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/order_renove/static/css/tablet.css" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
var pp_position = new google.maps.LatLng(10.792200, 106.705543);
var marker;
var map;
function initialize() {
var mapOptions = {
zoom: 13,
scrollwheel: false,
center: pp_position
};
map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
marker = new google.maps.Marker({
map:map,
draggable:true,
animation: google.maps.Animation.DROP,
position: pp_position
});
google.maps.event.addListener(marker, 'click', toggleBounce);
}

function toggleBounce() {
if (marker.getAnimation() != null){marker.setAnimation(null);}
else{marker.setAnimation(google.maps.Animation.BOUNCE);}
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=284306,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- Yahoo Code for your Conversion Page In your html page, add the snippet and call
yahoo_report_conversion when someone clicks on the phone number link or button. -->
<script type="text/javascript">
    /* <![CDATA[ */
    yahoo_snippet_vars = function() {
        var w = window;
        w.yahoo_conversion_id = 1000299296;
        w.yahoo_conversion_label = "F1tGCInOxmYQ-7LXpAM";
        w.yahoo_conversion_value = 0;
        w.yahoo_remarketing_only = false;
    }
    // IF YOU CHANGE THE CODE BELOW, THIS CONVERSION TAG MAY NOT WORK.
    yahoo_report_conversion = function(url) {
        yahoo_snippet_vars();
        window.yahoo_conversion_format = "3";
        window.yahoo_is_call = true;
        var opt = new Object();
        opt.onload_callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        }
        var conv_handler = window['yahoo_trackConversion'];
        if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
        }
    }
    /* ]]> */
</script>

<header>

<nav class="top-nav">
<div class="container">
<h1 class="texthead hidden-xs">オーダーリノベ物件探し・設計・施工・住宅ローンまで専属コンシェルジュがコーディネート</h1>
<div class="logo"><a href="https://www.chronicle-web.com/order_renove/#main"><img src="images/top-logo.png" class="img-responsive" alt=""></a></div>
<div class="collapse-nav">
<ul class="navbar">
<li><a href="https://www.chronicle-web.com/order_renove/#main">TOP<span>トップ</span></a></li>
<li><a href="https://www.chronicle-web.com/order_renove/search">SEARCH<span>物件を探す</span></a></li>
<li><a href="https://www.chronicle-web.com/order_renove/concept/">CONCEPT<span>オーダーリノベとは</span></a></li>
<li><a href="https://www.chronicle-web.com/order_renove/service/">SERVICE<span>サービス紹介</span></a></li>
<li class="active"><a href="https://www.chronicle-web.com/order_renove/sample/">SAMPLE<span>事例紹介</span></a></li>
</ul>
</div>

<div class="top-nav-right">

<div class="top-contact hidden-sm hidden-xs">
<a href="https://www.chronicle-web.com/order_renove/contact?order_material=1"><img src="images/envelope-2x.png"> <br><span>CONTACT</span>
リノベーションについての<br>お問い合わせ
</a>
</div>

<div class="visible-sm visible-xs">
<div class="o-grid">
<button class="c-hamburger c-hamburger--htx"><span>Sample</span></button>
<span class="mnname">Menu</span>
</div>
<div class="o-grid yellow">
<a href="https://www.chronicle-web.com/order_renove/contact?order_material=1">
<img src="images/envelope-2x.png">
<span class="ttt">Contact</span>
</a>
</div>
</div>
</div>
</div>
<div class="blackLayer"></div>
</nav>

</header>

<main>

<article class="container">
<section class="row">
<div class="col-lg-12 hidden-xs">
<ol class="breadcrumb">
<li><a href="https://www.chronicle-web.com/order_renove/#main">HOME</a></li>
<li><a href="https://www.chronicle-web.com/order_renove/sample/">事例紹介</a></li>
<li class="active"><?php echo get_post()->post_title;?></li>
</ol>
</div>
<div class="col-lg-12 col-md-12 col-xs-12" align="center">
<h3 class="title-ico"><img src="images/sample-logo-bl.png"></h3>
<div class="top-title"><div class="title">SAMPLE</div><span>事例紹介</span></div>
</div>
</section>
</article>

<div class="head-topdetail">
<article class="container">
<section class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3><?php echo get_post()->post_title;?></h3></div>
</section>
</article>
</div>

<div class="bgw">

<!-- Body Slider -->
<?php if ($categories) { ?>

<?php
	echo '
	<article class="container">

	<section class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	';
?>

<!-- Slider -->
<?php
	$idx = 0;
	foreach($categories as $categorie) {
		$active = '';
		if ($idx == 0){
			$active = 'active';
		}
		echo '<div class="item ' . $active . '" align="center">
		<div class="item-view"><img src="' . $categorie['images']['url'] . '" alt=""></div>
		<div class="carousel-caption">
		' . $categorie['content'] . '
		</div>
		</div>';
	    $idx ++;
	}
?>
<!-- End Slider -->

<?php echo
	'</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>

	<!-- Indicators -->

	<!-- Slider -->
	<ol class="carousel-indicators">';
?>
<?php
	$idx = 0;
	foreach($categories as $categorie) {
		$active = '';
		if ($idx == 0){
			$active = 'active';
		}
		echo '<li data-target="#carousel-example-generic" data-slide-to="' . $idx .'" class="' . $active . '"><img src="' . $categorie['images']['url'] . '" alt=""></li>';
	    $idx ++;
	}
?>
<?php
	echo '
	</ol>
	<!-- End Slider -->

	</div>
	</div>
	</section>
	</article>
	';
?>
<!-- End Body Slider -->
<?php } ?>

<article class="container">
<section class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-detail"><h3>オーダーリノベ詳細</h3></div>
<div class="showdetail">
<section class="block-detail">
<ul>
<li><span class="w1">物件名</span><span class="w2"><?php echo $order_details[0]['property_name'];?></span></li>
<li><span class="w1">築年数</span><span class="w2">築<?php echo $order_details[0]['age'];?>年</span></li>
</ul>
</section>
<section class="block-detail">
<ul>
<li><span class="w1">専有面積</span><span class="w2"><?php echo $order_details[0]['occupied_area'];?>m²</span></li>
<li><span class="w1">間取り</span><span class="w2"><?php echo $order_details[0]['floor_plan'];?></span></li>
</ul>
</section>
<hr>
<div class="title-icon"><span><?php echo $titel_order;?></span></div>
<hr>
<?php
foreach($description_order as $description) {
	echo '<div class="panel-title">' . $description['name'] . '</div><p>' . $description['content'] . '</p>';
}
?>



<div class="bt-black" align="center">
<!-- Button Back And Next -->

<?php
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	if ($prev_post->ID) {
		echo '<a href="' . get_permalink($prev_post->ID) . '" class="btn btn-lg btn-black"><i class="fa fa-arr-left"></i>back</a>';
	}
	echo '<a href="https://www.chronicle-web.com/order_renove/sample/" class="btn btn-lg btn-black"><i class="fa fa-arr-left"></i>事例一覧に戻る</a>';
	if ($next_post->ID) {
		echo '<a href="' . get_permalink($next_post->ID) . '" class="btn btn-lg btn-black">next<i class="fa fa-arr-w"></i></a>';
	}
?>
<!--
<a href="sample.html" class="btn btn-lg btn-black"><i class="fa fa-arr-left"></i>back</a>
<a href="sample.html" class="btn btn-lg btn-black"><i class="fa fa-arr-left"></i>事例一覧に戻る</a>
<a href="sample.html" class="btn btn-lg btn-black">next<i class="fa fa-arr-w"></i></a>
-->
<!-- End Button Back And Next -->
</div>

</div>
</div>

</section>
</article>
</div>

<div class="bl-group-lg" align="center">
<article class="container">
<section class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
<a href="https://www.chronicle-web.com/order_renove/search" class="btn btn-info btn-lg">オーダーリノベ物件を探す <i class="fa fa-arr-w"></i></a>
<a href="https://www.chronicle-web.com/order_renove/contact?order_material=1" class="btn btn-warning btn-lg">オーダーリノベについてのお問い合わせ<i class="fa fa-arr-bl"></i></a>
</div>

</section>
</article>
</div>

<article class="container consul2">
<section class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="thumbnail">
<div class="caption" align="center">
<fieldset class="consul-2 sample">
<legend>Consultation</legend>
<p class="title">オーダーリノベ物件詳細・周辺環境・住宅ローンなどお気軽にご相談ください！</p>
<a href="https://www.chronicle-web.com/order_renove/contact?order_material=1" class="g-consul-2">
<section>
<img src="images/envelope-2x.png" class="hidden-lg hidden-md">
<span>ご相談は無料！まずはお気軽にお問い合わせください</span>
<i class="fa fa-caret-down fa-2x" aria-hidden="true"></i>
<p><img src="images/envelope-2x.png" class="hidden-sm hidden-xs">オーダーリノベについてのお問い合わせ</p>
</section>
<i class="fa fa-arr-bl"></i>
</a>

<div class="col-lg-6 col-sm-6 col-xs-12">
<a href="https://www.chronicle-web.com/logmansion/" class="c3">
<figure>
<img src="images/ico1.png">
<figcaption align="center"><p>天然無垢材・⾃然素材の<br>リノベーション済みマンションサイト</p><i class="fa fa-arr-w"></i></figcaption>
</figure>
</a>
</div>

<div class="col-lg-6 col-sm-6 col-xs-12">
<a href="https://www.chronicle-web.com/showroom/" class="c4">
<figure>
<img src="images/ico2.png">
<figcaption><p>東京・横浜・名古屋・大阪・福岡<br><span>ShowRoom</span></p><i class="fa fa-arr-w"></i></figcaption>
</figure>
</a>
</div>
</fieldset>

</div>
</div>
</div>
</section>
</article>

<article class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div align="center" class="chronicle-line"><a href="https://www.chronicle-web.com/line/" target="_blank"><img src="images/bnr-chronicle-line.jpg" alt="" class="img-responsive"></a></div>
  </div>
<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="fb-page" data-href="https://www.facebook.com/chronicle.web.official/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/chronicle.web.official/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/chronicle.web.official/">リノベーションならクロニクル</a></blockquote></div>
</div> -->
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>
</article>

</main>

<footer class="doc-footer">
<div class="doc-parttern">

<div class="container">
<div class="row">
<div class="col-lg-3 col-xs-6">
<section>
<h4>Search<span class="pull-right">物件を探す</span></h4>
<div class="clearfix"></div>
<hr>
<ul class="pull-left">
<li>- <a href="https://www.chronicle-web.com/order_renove/search/kanto/area/result?pref=11,12,13,14">関東</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/chubu/area/result?pref=23">中部</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/kansai/area/result?pref=26,27,28,29">関西</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/kyusyu/area/result?pref=40">九州</a></li>
</ul>

<ul class="pull-right">
<!-- <li>- <a href="https://www.chronicle-web.com/order_renove/search/27B/area/result">大阪市</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/27A/area/result">北摂</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/27C/area/result">堺市</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/27E/area/result">京阪</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/27D/area/result">河内</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/28B/area/result">神戸市</a></li>
<li>- <a href="https://www.chronicle-web.com/order_renove/search/28B/area/result">阪神間</a></li> -->
</ul>
</section>
</div>

<div class="col-lg-3 col-xs-6">
<section>
<h4>Concept<span class="pull-right">コンセプト</span></h4>
<div class="clearfix"></div>
<hr>
<ul>
<li><a href="https://www.chronicle-web.com/order_renove/concept/#about">- オーダーリノベとは</a></li>
<li><a href="https://www.chronicle-web.com/order_renove/concept/#fivemerit">- 5つのメリット</a></li>
<li><a href="https://www.chronicle-web.com/order_renove/concept/#services">- サービスの流れ</a></li>
<li><a href="https://www.chronicle-web.com/order_renove/concept/#faq">- よくある質問</a></li>
</ul>
</section>
</div>
<div class="col-lg-3 col-xs-6 clearboth">
<section>
<h4>Service<span class="pull-right">サービス紹介</span></h4>
<div class="clearfix"></div>
<hr>
<ul>
<li><a href="https://www.chronicle-web.com/order_renove/service/">- サービス紹介</a></li>
</ul>
</section>
</div>
<div class="col-lg-3 col-xs-6">
<section>
<h4>contact<span class="pull-right">コンタクト</span></h4>
<div class="clearfix"></div>
<hr>
<ul>
<li><a href="https://www.chronicle-web.com/order_renove/contact?order_material=1">- お問い合わせ</a></li>
<li><a href="https://www.chronicle-web.com/showroom/" target="_blank">- ショールーム</a></li>
</ul>
</section>
</div>
</div>
</div>

</div>

<div class="footer_black">
    <div class="footer_top">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h5><img src="images/logo_chronicle.png" alt="" class="img-responsive">
                    <span>– クロニクルが提供するサービス –</span></h5>
                </div>
                <div class="col-xs-12">
                    <ul class="link_footer_top">
                        <li><a href="https://www.chronicle-web.com/logmansion/" target="_blank">ログマンション</a></li>
                        <li><a href="https://www.chronicle-web.com/order_renove/" target="_blank">オーダーリノベ</a></li>
                        <li><a href="https://www.chronicle-web.com/plus/" target="_blank">クロニクルプラス</a></li>
                        <li><a href="https://www.chronicle-web.com/reform/" target="_blank">クロニクルリフォーム</a></li>
                        <li><a href="http://www.chro-residence.com/aobadai/" target="_blank">クロニクルレジデンス</a></li>
                        <li><a href="https://www.chronicle-web.com/showroom/" target="_blank">ショールーム</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <ul class="link_footer_bottom">
                        <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ohncq-a6256eea8b2bb0ffa3acf846063a435f" target="_blank">お問い合わせ</a></li>
                        <li><a href="https://www.chronicle-web.com/terms/" target="_blank">WEBサイト利用規約</a></li>
                        <li><a href="https://www.propolife.co.jp/privacypolicy/" target="_blank">プライバシーポリシー</a></li>
                        <li><a href="https://www.chronicle-web.com/company/about/" target="_blank">運営会社（企業情報）</a></li>
                        <li>法人のお客様
                          <a href="http://www.propolife.co.jp/wordpress/wp-content/uploads/sell.pdf" target="_blank">（社有物件一覧表）</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer_white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                <div class="copyright">Copyright © CHRONICLE. All Rights Reserved.</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                <img class="img-responsive pull-right img_penguins" src="images/img_penguins.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="back-top"></div>
</footer>

<script>
jQuery(function($) {
var toggles = document.querySelectorAll(".c-hamburger");
for (var i = toggles.length - 1; i >= 0; i--) {
var toggle = toggles[i];
toggleHandler(toggle);
};

function toggleHandler(toggle) {
toggle.addEventListener( "click", function(e) {
e.preventDefault();
(this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
(this.classList.contains("is-active") === true) ? $(".top-nav").addClass("open") : $(".top-nav").removeClass("open");
});
}
$('.carousel').carousel({
interval: false
})
});
</script>

</body>
</html>
