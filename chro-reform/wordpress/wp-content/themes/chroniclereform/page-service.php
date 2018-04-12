<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="">

<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/reset.css">
<link rel="stylesheet" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/general.css">
<link rel="stylesheet/less" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/colorscheme.less">
<link rel="stylesheet/less" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/base.less">
<link rel="stylesheet/less" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/module.less">
<link rel="stylesheet/less" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/parts.less">
<link rel="stylesheet/less" type="text/css" href ="<?php bloginfo('template_directory'); ?>/commonfiles/css/smart.less">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker_nav.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/tablet.css">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/png" />
<!--[if lt IE 9]>
<script src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/jquery.js"></script>
<script type="text/javascript">
// if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
//         document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0">');
//     }else{
//         document.write('<meta name="viewport" content="width=1100, maximum-scale=1">');
//     }
</script>
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/less.js"></script>
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/common.js"></script>
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/jquery.pagenav.js"></script>
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

<div id="container" class="page-service">

<!--================= Header start ==================-->
<?php get_header(); ?>
<!--================= //Header end ==================-->


<!--================= Content start ==================-->
<div id="content" class="clearfix">

<!--======== Category Title start ===========-->
<div class="ttlCategory bgGrey">
	<div class="boxInner">
	<h1 class="txtMain">サービス内容</h1>
	<p class="txtSub">SERVICE</p>
	</div>
</div>
<!--======== //Category Title end ===========-->

<!--======== Breadcrumb start ===========-->
<nav class="boxBreadcrumb boxInner">
	<p>
	<span><a href ="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>">ホーム</a> » </span>
	<span>サービス内容</span>
	</p>
</nav>
<!--======== //Breadcrumb end ===========-->


<!--======== ▼Article start ===========-->
<article class="boxArticle">
	<header class="boxArticleHead boxInner">
	<h1 class="ttlArticle"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-service-onestop.png" alt="ワンストップサービスだからスピーディ＆リーズナブル＆わかりやすい"></h1>
	</header>

	<!--==== Step Nav start ====-->
	<nav id="boxStepNav">
		<ul class="boxInner clearfix">
		<li><a href="#step01" class="on">01</a></li>
		<li><a href="#step02">02</a></li>
		<li><a href="#step03">03</a></li>
		<li><a href="#step04">04</a></li>
		<li><a href="#step05">05</a></li>
		<li><a href="#step06">06</a></li>
		<li><a href="#step07">07</a></li>
		<li><a href="#step08">08</a></li>
		</ul>
	</nav>
	<!--==== //Step Nav end ====-->

	<!--==== STEP01 start ====-->
	<section id="step01" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step01.jpg" alt="STEP01"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step01.png" alt="STEP01 なんでも相談会"></dt>
		<dd>まずはお気軽にお問合せのうえ、弊社ショールームでの<a href ="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>/event/"><em>「なんでも無料相談会」</em></a>	に参加ください。リノベーション内容や資金計画など、専属プランナーがお客様のご希望や不安、疑問などトータルにお伺いします。不便な点や改善したい点も遠慮なくプランナーにお伝えください。<br>
		中古物件さがしからご希望の方は、「物件さがし＋フルリノベーション」の弊社サービス<a href="http://chronicle-plus.com/" target="_balnk"><em>「クロニクルプラス」</em></a>	もご案内可能です。<br>
		<a href="https://www.chronicle-plus.com/showroom/" target="_blank"><em>ショールーム</em>	</a>には、数多くのインテリアサンプルや天然無垢材仕様のオリジナル住宅設備商品を展示しているので実際にご覧いただきながらお客様の希望するイメージを具体的にかためていきます。初回のご相談でリノベーションにまつわる一通りのお話をお伺いするので、その後のやりとりもぐっとスムーズになります。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP01 end ====-->

	<!--==== STEP02 start ====-->
	<section id="step02" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step02.jpg" alt="STEP02"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step02.png" alt="STEP02 現地調査０円"></dt>
		<dd>リノベーションを予定されているお宅へ、お客様とともに現地調査にお伺いいたします。現地への出張費や調査費は無料。実際の現場で構造や劣化具合を確認することで、より具体的な施工方法やプランをかためていきます。既存部分でそのまま使えるものはできるだけ活用し、モノを大切にするとともに予算をおさえる工夫なども検討していきます。<br>
		また調査終了時に、プランニングシートとお見積りをお出しする日程をお伝えして、スピーディに次のステップへ進めるよう細かい確認事項などもご案内しています。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP02 end ====-->

	<!--==== STEP03 start ====-->
	<section id="step03" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step03.jpg" alt="STEP03"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step03.png" alt="STEP03 設計費＆お見積り０円"></dt>
		<dd>無料相談会でのお打合せ内容と現地調査の結果をもとに、プランナーとデザイナー、施工技術スタッフが打合せをし、最適なプランを作成いたします。<br>
		設計もなんと０円。設計事務所に依頼をすればそれだけで数十万円かかるコストも、自社一貫のワンストップ対応だからできる無料サービスになりました。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP03 end ====-->

	<!--==== STEP04 start ====-->
	<section id="step04" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step04.jpg" alt="STEP04"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step04.png" alt="STEP04 ご納得ゆくまでお打合せ０円"></dt>
		<dd>作成したお見積りとプランニングシートの内容をご覧いただきます。具体的に何の工事にいくらかかるのか、またどういった設備をご提案させていただくのか、詳細資料をお持ちしてお客様に<em>わかりやすく</em>ご説明させていただきます。 <br>
		相談会や現地調査などでより具体的なお話をしているので一回のご提案でスムーズにリノベーション計画が決定することもあります。もちろん、お客様によっては納得のいくまで何度も打合せを重ね、よりご満足いただけるリノベーションに向けてプランを練っていくことも。本当にご希望のお住まいに暮らしていただきたいから、<em>設計のひき直しやお見積りの出し直しも０円</em>。どんなご要望もお聞かせください。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP04 end ====-->

	<!--==== STEP05 start ====-->
	<section id="step05" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step05.jpg" alt="STEP05"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step05.png" alt="STEP05 ご契約"></dt>
		<dd>お見積もりとプランをご検討いただき、ご納得の上でご契約いただきます。その後、工事時期や期間を示す工程表を作成し、お渡しします。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP05 end ====-->

	<!--==== STEP06 start ====-->
	<section id="step06" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step06.jpg" alt="STEP06"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step06.png" alt="STEP06 着工"></dt>
		<dd>管理会社や近隣の方へのご挨拶を行った後、実際の施工に入ります。工事途中、現場に足を運べないお客様には写真をお送りするなど、安心してお任せいただけるように努めています。<br>
		建築資材なども、リノベーション施工数が多い弊社だからこそできる<em>一括仕入れで経費を削減</em>するとともに、資材が間に合わなくて工期が長引くことがないよう管理しています。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP06 end ====-->

	<!--==== STEP07 start ====-->
	<section id="step07" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step07.jpg" alt="STEP07"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step07.png" alt="STEP07 完了・お引越し"></dt>
		<dd>事前の調整で、ご契約いただいてからの工事開始および完了までの期間をできるだけ短くするようにしています。<br>
		お引越しまでに時間がかかると仮ずまいの家賃がかさみ、その分コストがかかってしまいます。ワンストップサービスで効率よくご対応することで、引渡しまでの期間を短くし弊社へのお支払以外のコストもできるだけ削減できるように努力しています。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP07 end ====-->

	<!--==== STEP08 start ====-->
	<section id="step08" class="boxSection boxServiceStep">
		<div class="boxInner clearfix">
		<p class="imgStep fltL"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/img-step08.jpg" alt="STEP08"></p>
		<dl class="boxStep fltR">
		<dt><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/service/ttl-step08.png" alt="STEP08 アフターサービス０円"></dt>
		<dd>安心のアフターサービスをおつけしています。保証対象および保証期間中の不具合はもちろん無料で修理。<br>
		詳細は、お引渡し時にお渡しするアフターサービス保証書をご覧のうえ、お客様専属プランナーにご確認ください。</dd>
		</dl>
		</div>
	</section>
	<!--==== //STEP08 end ====-->

</article>
<!--======== //Article end ===========-->


<!--======== A-Side start ===========-->
<aside id="aside" class="boxInner">
<p class="txtC">
<a href="http://www.rakuten.co.jp/mokume/" target="_blank">
<img class="imgMain" src="<?php bloginfo('template_directory'); ?>/commonfiles/img/common/bnr-toMokume.png" alt="木のインテリアショップmokume">
<img class="imgSmp" src="<?php bloginfo('template_directory'); ?>/commonfiles/img/common/bnr-toMokumeSP.png" alt="木のインテリアショップmokume">
</a>
</p>
</aside>
<!--======== //A-Side end ===========-->

<?php get_footer(); ?>

</body>

</html>

