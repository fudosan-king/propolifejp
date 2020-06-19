<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="google-site-verification" content="dDL25vJt5ssxOXyO9q9ewjh4iicb7Ufr8N2NHw_K32E" />
<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/reset.css">
<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/general.css">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/colorscheme.less">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/base.less">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/module.less">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/parts.less">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/lightbox.css">
<link rel="stylesheet/less" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/smart.less">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker_nav.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/tablet.css">
<link rel="icon" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/images/favicon.png" type="image/png" />

<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/common/css/base.css">
<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/common/css/detail.css">
<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/works/css/style.css">

<!--[if lt IE 9]>
<script src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/jquery.js"></script>
<script type="text/javascript">
// if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
//         document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0">');
//     }else{
//         document.write('<meta name="viewport" content="width=1100, maximum-scale=1">');
//     }
</script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/less.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/lightbox.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/common.js"></script>

<!-- トップページのみ使用JS start-->
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/jquery.tile.js"></script>
<script type="text/javascript">
/* -- 最新情報エリア高さ揃える -- */
$(window).load(function() {
 $(".boxLatestInfo > div").tile(3);
});
</script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/jquery.flexslider.js"></script>
<script type="text/javascript">
/* スマホ・PICKUPスライド */
$(window).load(function(){
$('.boxImgChange02').css({display: "block",}).flexslider({
animation: "fade",
slideshow: false,
});
});
</script>
<!-- //トップページのみ使用JS end-->

<!-- メインビジュアル用JS start-->
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/tabs.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/tabs.slideshow.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/index.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/material.js"></script>
<!-- //メインビジュアル用JS end-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9S2NL');</script>
<!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9S2NL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="container" class="page-top">

<!--================= Header start ==================-->
<?php get_header(); ?>
<!--================= //Header end ==================-->


<!--================= Content start ==================-->
<div id="content" class="clearfix">


<!--======== ▼（PC）メインビジュアル start ===========-->
<div id="topmain" class="boxImgChangePC">
	<ul class="boxSlidetabs">
	<li>
	<a href="#tab1" class="tab1">
	<span class="imgBtn"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-material.png" alt="自然素材"></span>
	<span class="txtBtn imgMain"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-material-txt.png" alt="自然素材"></span>
	</a>
	</li>
	<li>
	<a href="#tab2" class="tab2">
	<span class="imgBtn"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-onestop.png" alt="ワンストップ"></span>
	<span class="txtBtn imgMain"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-onestop-txt.png" alt="ワンストップ"></span>
	</a>
	</li>
	</ul>

	<div class="boxContWrap">
	<div class="boxItem item1">
	<p class="txt">自然素材</p>
	</div>
	<div class="boxItem item2">
	<p class="txt">ワンストップ</p>
	</div>
	</div>
</div>
<!--======== //（PC）メインビジュアル end ===========-->

<!--======== ▼（スマホ）メインビジュアル start ===========-->
<div id="topmainSmp" class="boxImgChangeSmp">
<ul class="boxSelectBtn">
<li class="on">
<span class="imgBtn"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-material.png" alt="自然素材"></span>
<span class="txtBtn imgSmp"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-material-txt-smp.png" alt="自然素材"></span>
</li>
<li>
<span class="imgBtn"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-onestop.png" alt="ワンストップ"></span>
<span class="txtBtn imgSmp"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/btn-onestop-txt-smp.png" alt="ワンストップ"></span>
</li>
</ul>
<div class="boxContWrap">
<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/img-material-smp.png" alt="自然素材メインイメージ">
</div>
<div class="boxContWrap disnon">
<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/topmain/img-onestop-smp.png" alt="ワンストップメインイメージ">
</div>
</div>
<!--======== //メインビジュアル end ===========-->


<!--======== ▼最新情報エリア start ===========-->
<div id="info" class="boxLatestInfo boxInner clearfix">

<!--=== Left start ===-->
<div class="boxLeft">
	<!-- クロニクルプラス start -->

	<h2 class="ttl">木のインテリアショップmokume</h2>
	<a href="http://www.rakuten.co.jp/mokume/" target="_balnk">
	<img class="imgMain" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/info/bnr-mokume.png" alt="木のインテリアシヨッブ">
	<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/info/bnr-mokume-smp.png" alt="木のインテリアシヨッブ">
	</a>

	<!-- //クロニクルプラス end -->
</div>
<!--=== //Left end ===-->

<!--=== Right start ===-->
<div class="boxRight">
	<div class="fb-page" data-href="https://www.facebook.com/chroniclemansion/" data-tabs="timeline" data-width="350" data-height="207" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/chroniclemansion/"><a href="https://www.facebook.com/chroniclemansion/">リノベーションならクロニクル</a></blockquote></div></div>
</div>
<!--=== //Right end ===-->

</div>
<!--======== //最新情報エリア end ===========-->


<!--======== ▼クロニクルリフォームとは	 start ===========-->
<div id="about" class="boxAbout bgGrey">
	<div class="boxInner pt60">

	<!--=== Category Title start ===-->
	<div class="ttlCategory mb30">
		<div class="boxInner">
		<h1 class="txtMain">クロニクルリフォームとは</h1>
		<p class="txtSub">ABOUT</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Section start ===-->
	<section class="boxSection clearfix">

	<p class="fltL mb70 mr40"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/about/img-about.jpg" alt="クロニクルリフォームとは"></p>

	<p class="fltL mb50 imgMain">わたしたちは、ちょっとばかり世話焼きです。<br>
	お客様の希望をお伺いするだけでは、まだ足りない。<br>
	「ワンストップは便利。」と、知ってほしいし、<br>
	「自然素材はすごい。」って、実感していただきたい。<br>なぜって、それは、クロニクルリフォームだからできる、<br>とても素敵なリノベーションの秘訣だから。</p>

	<p class="fltL mb50 imgSmp">わたしたちは、ちょっとばかり世話焼きです。<br>
	お客様の希望をお伺いするだけでは、まだ足りない。「ワンストップは便利。」と、知ってほしいし、「自然素材はすごい。」って、実感していただきたい。<br>
	なぜって、それは、クロニクルリフォームだからできる、とても素敵なリノベーションの秘訣だから。</p>


	<p class="mb40 txtC"><img class="imgMain" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/about/img-onestop-service.png" alt="ワンストップサービスとは"><img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/about/img-onestop-service-smp.png" alt="ワンストップサービスとは"></p>

	<p class="mb100 txtC">クロニクルリフォームでは、お客様専属のプランナーが完成までの全工程においてトータルにおうちづくりをお手伝いいたします。<br>
	本当に住みたい家で暮らしていただきたい。<br>
	その想いで、打合せから設計、施工、アフターサービスまで自社一貫のワンストップサービスを整え、お待ちしています。<br>
	より良い素材・デザインのリノベーション住宅を、より手に入れやすい価格で、より早くお引渡しできるように。</p>

	</section>
	<!--=== //Section end ===-->
	</div>
</div>
<!--======== //クロニクルリフォームとは end ===========-->


<!--======== ▼自然素材 start ===========-->
<div id="material" class="boxMaterial boxInner">

	<!--=== Category Title start ===-->
	<div class="ttlCategory">
		<div class="boxInner">
		<h1 class="txtMain">自然素材</h1>
		<p class="txtSub">MATERIAL</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Main Img start ===-->

<?php include TEMPLATEPATH . '/material.php';?>

	<!--=== //Main Img end ===-->

	<!--=== Section start ===-->
	<section class="boxSection">

	<div class="clearfix">
	<h3 class="ttlMaterial txtC mb30"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/material/ttl-main.png" alt="自然素材３つの魅力"></h3>
	<ul class="boxCharm">
	<li class="bgDotBtm">
		<dl>
		<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/material/ttl-charm1.gif" alt="安心安全"></dt>
		<dd>自然素材だからこそ健康面でも安心。</dd>
		</dl>
	</li>
	<li class="bgDotBtm">
		<dl>
		<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/material/ttl-charm2.gif" alt="耐久性"></dt>
		<dd>一般的に自然素材は耐久性が高く、メンテナンスも容易。</dd>
		</dl>
	</li>
	<li class="bgDotBtm">
		<dl>
		<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/material/ttl-charm3.gif" alt="デザイン"></dt>
		<dd>自然素材がもたらす本物ならではの質感、色合いがお部屋を彩ります。</dd>
		</dl>
	</li>
	</ul>
	</div>
	<p class="btnArw"><a href="material/"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/material/btn-material.png" width="130" alt="自然素材詳細を見る"></a></p>
	</section>
	<!--=== //Section end ===-->

</div>
<!--======== //自然素材 end ===========-->


<!--======== ▼サービス start ===========-->
<div id="service" class="boxService bgGrey">
	<div class="boxInner pt60">

	<!--=== Category Title start ===-->
	<div class="ttlCategory mb30">
		<div class="boxInner">
		<h1 class="txtMain">サービス</h1>
		<p class="txtSub">SERVICE</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Section start ===-->
	<section class="boxSection clearfix">

	<div class="boxStep">
		<div class="boxStepInner">
		<ol>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step01.png" alt="STEP01"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step01.jpg" alt="STEP01"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step01.png" width="130" alt="なんでも相談会0円"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step02.png" alt="STEP02"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step02.jpg" alt="STEP02"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step02.png" width="95" alt="現地調査"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step03.png" alt="STEP03"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step03.jpg" alt="STEP03"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step03.png" width="140" alt="設計費＆お見積り0円"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step04.png" alt="STEP04"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step04.jpg" alt="STEP04"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step04.png" width="190" alt="ご納得のゆくまで打ち合わせ0円"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step05.png" alt="STEP05"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step05.jpg" alt="STEP05"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step05.png" width="38" alt="ご契約"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step06.png" alt="STEP06"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step06.jpg" alt="STEP06"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step06.png" width="28" alt="着工"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step07.png" alt="STEP07"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step07.jpg" alt="STEP07"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step07.png" width="90" alt="完了・お引越し"></dd>
			</dl>
		</li>
		<li>
			<dl>
			<dt><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/icn-step08.png" alt="STEP08"></dt>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/img-step08.jpg" alt="STEP08"></dd>
			<dd><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/txt-step08.png" width="150" alt="アフターサービス0円"></dd>
			</dl>
		</li>
		</ol>
		</div>
	</div>

	<p class="mb70 txtC"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/service/ttl-service-onestop.png" alt="ワンストップサービスだからスピーディ＆リーズナブル＆わかりやすい"></p>

	<p class="btnArw"><a href="service/"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/service/btn-service.png" width="130" alt="サービス詳細を見る"></a></p>
	</section>
	<!--=== //Section end ===-->

	</div>
</div>
<!--======== //サービス end ===========-->


<!--======== ▼リフォームプラン	 start ===========-->
<div id="plan" class="boxPlan boxInner">

	<!--=== Category Title start ===-->
	<div class="ttlCategory mb30">
		<div class="boxInner">
		<h1 class="txtMain">リフォームプラン</h1>
		<p class="txtSub">REFORM PLAN</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Section start ===-->
	<section class="boxSection clearfix">
	<ul>
	<li>
	<dl>
	<dt>
	<a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>/plan/">
	<span class="ttlPlan">DESIGNER’S PLAN <span class="txtSub">デザイナーズプラン</span></span>
	<img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/plan/img-plan-designers.jpg" alt="デザイナーズプラン">
	</a>
	</dt>
	<dd>リノベーション実績豊富な当社が、これまでの経験や<br>
	ノウハウを活かしてご提供する<br>
	デザイナーズプランです。</dd>
	</dl>
	</p>

	<li>
	<dl>
	<dt>
	<a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>/freeplan/">
	<span class="ttlPlan">FREE PLAN<span class="txtSub">自由設計プラン</span></span>
		<img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/plan/img-plan-free.jpg" alt="自由設計プラン">
	</a>
	</dt>
	<dd>「こだわりのある暮らしはこだわりのある生活空間から」<br>
	「とにかく自分流の暮らしを実現したい」そんなお客さまと一緒に、<br>
	最高のお家を作り上げていくのが自由設計プランです。</dd>
	</dl>
	</li>
	</ul>
	</section>
	<!--=== //Section end ===-->

</div>
<!--======== //リフォームプラン end ===========-->


<!--======== ▼施工事例	 start ===========-->
<div id="works" class="boxWorks bgGrey">
	<div class="boxInner pt60">

	<!--=== Category Title start ===-->
	<div class="ttlCategory mb30">
		<div class="boxInner">
		<h1 class="txtMain">施工事例</h1>
		<p class="txtSub">WORKS</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Section start ===-->
	<section class="boxSection clearfix">

	<!--===== Tabs Wrap start =====-->
	<div class="boxTabsWrap">
		<?php get_template_part( 'template-parts/content', 'works'); ?>

	<p class="btnArw"><a href="works/"><img src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/works/btn-works.png" width="140" alt="施工事例をもっと見る"></a></p>
	</section>
	<!--=== //Section end ===-->

	</div>
</div>
<!--======== //施工事例 end ===========-->

<!--======== ▼ショールーム	 start ===========-->
<div id="showroom" class="boxShowroom boxInner">

	<!--=== Category Title start ===-->
	<div class="ttlCategory mb30">
		<div class="boxInner">
		<h1 class="txtMain">ショールーム</h1>
		<p class="txtSub">SHOWROOM</p>
		</div>
	</div>
	<!--=== //Category Title end ===-->

	<!--=== Section start ===-->
	<section class="boxSection txtC clearfix">
	<p class="mb40">安心安全の天然無垢材を多用したシステムキッチンや室内ドア、洗面台など、<br>
	高品質・低価格の住宅設備・建材を実際のお部屋にいるかのごとく見て、触れていただくことができます。<br>
	ぜひ、お近くのショールームまでお気軽にご来場ください。</p>
	<p>
	<a href="https://www.chronicle-web.com/showroom/" target="_blank"><img class="imgMain" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/showroom/bnr-showroom.png" alt="Our Showroom 自然の温もりを「住まい」に">
	<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/top/showroom/bnr-showroom-smp.png" alt="Our Showroom 自然の温もりを「住まい」に"></a>
	</p>
	</section>
	<!--=== //Section end ===-->

</div>
<!--======== //ショールーム end ===========-->


<!--======== A-Side start ===========-->
<aside id="aside" class="boxInner">
<p class="txtC">
	<a href="https://www.chronicle-web.com/line/" target="_blank">
<img class="imgMain" style="width:840px" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-chronicle-line.jpg" alt="木のインテリアショップmokume">
<img class="imgSmp" style="width:100%" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-chronicle-line-sp.jpg" alt="木のインテリアショップmokume">
</a><br><br>
<a href="http://www.rakuten.co.jp/mokume/" target="_blank">
<img class="imgMain" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-toMokume.png" alt="木のインテリアショップmokume">
<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-toMokumeSP.png" alt="木のインテリアショップmokume">
</a>
</p>
</aside>
<!--======== //A-Side end ===========-->

<?php get_footer(); ?>
