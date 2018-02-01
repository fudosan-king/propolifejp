﻿<!DOCTYPE HTML>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
    <?php if(is_page('privacypolicy')){
    echo '<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />';
}
    ?>
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<?php
if(is_page(array('top'))){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/index.css">
<?php
}elseif(is_page('company')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/company.css">
<?php
}elseif(is_page('history')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/history.css">
<?php
}elseif(is_page('officer')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/officer.css">
<?php
}elseif(is_page('philosophy')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/philosophy.css">
<?php
}elseif(is_page('president')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/message.css">
<?php
}elseif(is_page('access')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/access.css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
<script src="https://www.propolife.co.jp/wp/wp-content/themes/corporate/common/js/access.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<?php
}elseif(is_page('news')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/news.css">
<?php
}elseif(is_page('information')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/news.css">
<?php
}elseif(is_page('pressrelease')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/pressrelease.css">
<?php
}elseif(is_page('socialpolicy')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/pressrelease.css">
<?php
}elseif(is_page('media')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/news.css">
<?php
}elseif(is_page('ir')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/pressrelease.css">
<?php
}elseif(is_page('privacypolicy')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/privacy.css">
<?php
}elseif(is_page('terms')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/privacy.css">
<?php
}elseif(is_page('antisocial')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/privacy.css">
<?php
}elseif(is_page('group')){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/group.css">
<?php
}else{
?>
<?php
}
?>
<?php
if(is_single()){
?>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/pressrelease.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/news.css">
<?php
}else{
?>
<?php
}
?>
<!--css-->

<!--OGP-->
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<?php if(is_front_page()):  ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php bloginfo('url'); ?>">
<?php elseif(is_page()): ?>
<meta property="og:description" content="<?php echo get_post_meta($post->ID, _aioseop_description, true); ?>">
<meta property="og:title" content="<?php the_title(); ?>｜<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php the_permalink() ?>">
<?php elseif(is_tax()): ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php single_tag_title(); ?>｜<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
<?php elseif(is_archive()): ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php post_type_archive_title(); ?>｜<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
<?php elseif (is_single()): ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php the_title(); ?>｜<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php the_permalink() ?>">
<?php endif; ?>
<meta property="og:site_name" content="株式会社プロポライフグループ">
<?php
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
if (is_single() or is_page()){
if (has_post_thumbnail()){
     $image_id = get_post_thumbnail_id();
     $image = wp_get_attachment_image_src( $image_id, 'full');
     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {
     echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
} else {
     echo '<meta property="og:image" content="https://www.propolife.co.jp/wp/wp-content/themes/corporate/common/img/sns_id.jpg">';echo "\n";
}
} else {
     echo '<meta property="og:image" content="https://www.propolife.co.jp/wp/wp-content/themes/corporate/common/img/sns_id.jpg">';echo "\n";
}
?>
<!--OGP-->

<!--favicon-->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/common/img/favicon.png" type="image/x-icon" />
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/common/img/favicon.png" type="image/x-icon" />
<!--favicon-->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WZZMNF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZZMNF');</script>
<!-- End Google Tag Manager -->
</head>

<body onload="initialize();">
<div class="menuBg"></div>
<div id="container">
	<header id="header">
		<div class="hInner clearfix">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/logo.png" width="206" height="40" alt="株式会社プロポライフグループ 「住」に自由とロマンを。"></a></h1>
			<nav id="gNavi" class="gNavi">
				<div class="link"><a href="https://page.line.me/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_03.png" width="20" height="20" alt="LINE"></a></div>
				<div class="link"><a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_02.png" width="16" height="16" alt="Instagram"></a></div>
				<div class="link"><a href="https://ja-jp.facebook.com/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link.png" width="8" height="16" alt="Facebook"></a></div>
				<ul class="clearfix">
					<li class="sub01"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/"
>企業情報</a></li>
					<li class="sub02"><a href="<?php echo esc_url( home_url( '/' ) ); ?>group/">グループ企業</a></li>
					<li class="sub03"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">ニュース</a></li>
					<li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab" target="_blank">お問い合わせ</a></li>
				</ul>
			</nav>
		</div>
		<div class="header">
			<div class="hInner clearfix">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/logo02.png" width="206" height="40" alt="株式会社プロポライフグループ 「住」に自由とロマンを。"></a></h1>
				<nav class="gNavi">
					<div class="link"><a href="https://page.line.me/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_0302_on.png" width="20" height="20" alt="LINE"></a></div>
					<div class="link"><a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_0202_on.png" width="16" height="16" alt="Instagram"></a></div>
					<div class="link"><a href="https://ja-jp.facebook.com/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_on.png" width="8" height="16" alt="Facebook"></a></div>

					<ul class="clearfix">
						<li class="sub01"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
						<li class="sub02"><a href="<?php echo esc_url( home_url( '/' ) ); ?>group/">グループ企業</a></li>
						<li class="sub03"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">ニュース</a></li>
						<li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
						<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab" target="_blank">お問い合わせ</a></li>
					</ul>
				</nav>
			</div>
			<div class="menu sp"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/common/img/menu.png" width="18" height="14" alt=""></a></div>
		</div>
		<div class="menu sp"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/common/img/menu.png" width="18" height="14" alt=""></a></div>

		<div class="hBox hBox03">
			<div class="subBox">
				<ul class="clearfix txtbanner">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/information/"><span>企業からのお知らせ</span></a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/pressrelease/"><span>プレスリリース</span></a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/media/"><span>メディア掲載情報</span></a></li>
				</ul>
			</div>
		</div>
		<div class="hBox hBox02">
			<div class="subBox">
				<ul class="clearfix">
					<li>
						<a href="https://www.chronicle-web.com/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link01.jpg" width="356" height="101" alt="CHRONICLE リノベーションならクロニクル">
						</a>
						<span><a href="https://www.chronicle-web.com/" target="_blank">株式会社クロニクル</a></span>
					</li>
					<li>
						<a href="http://www.chronicle-kensetsu.co.jp/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/com_link02.jpg" width="356" height="101" alt="CHRONICLE"></a><span><a href="http://www.chronicle-kensetsu.co.jp/" target="_blank">株式会社クロニクル建設</a></span></li>
					<li>
						<a href="https://www.prostyle-residence.com/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link03.jpg" width="356" height="101" alt="PROSTYLE">
						</a>
						<span><a href="https://www.prostyle-residence.com/" target="_blank">株式会社プロスタイル</a></span>
					</li>
					<li>
						<a href="https://www.prostyle-villa.com/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link04.jpg" width="356" height="98" alt="PROSTYLE VILLA">
						</a>
						<span><a href="https://www.prostyle-villa.com/" target="_blank">株式会社プロスタイルヴィラ</a></span>
					</li>
					<li>
						<a href="http://chinokanri.co.jp/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link05.jpg" width="356" height="98" alt="CHINO 千野建物管理">
						</a>
						<span><a href="http://chinokanri.co.jp/" target="_blank">千野建物管理株式会社</a></span>
					</li>
					<li>

							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link06.jpg" width="356" height="98" alt="">

						<span>煙台提案生活木業有限公司</span>
					</li>
					<li>
						<a href="http://www.propolifevietnam.com/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link07.jpg" width="356" height="94" alt="">
						</a>
						<span><a href="http://www.propolifevietnam.com/" target="_blank">PROPOLIFE VIETNAM</a></span>
					</li>
					<li>

							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link09.jpg" width="356" height="98" alt="PROPOLIFE SHINGAPORE">

						<span>PROPOLIFE SINGAPORE</span>
					</li>
					<li>
						<a href="http://kotakino.wpblog.jp" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link10.jpg" width="356" height="98" alt="株式会社小滝野">
						</a>
						<span><a href="http://kotakino.wpblog.jp" target="_blank">株式会社小滝野</a></span>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link11.jpeg" width="356" height="98" alt="株式会社プロポライフホテルズ">
						<span>株式会社プロポライフホテルズ</span>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/common/img/com_link12.jpg" width="356" height="98" alt="株式会社沖縄イゲトー">
						<span>株式会社沖縄イゲトー</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="hBox hBox01">
			<div class="subBox">
				<ul class="clearfix">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/president/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link01.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/president/">代表者挨拶</a></span>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/philosophy/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link02.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/philosophy/">企業理念</a></span>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link03.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社概要</a></span>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/history/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link04.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/history/">沿革</a></span>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/officer/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link05.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/officer/">役員一覧</a></span>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>company/access/">
							<img src="<?php bloginfo('template_directory'); ?>/common/img/h_link06.jpg" width="356" height="133" alt="">
						</a>
						<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/access/">アクセス</a></span>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="menuBox">
		<div class="close"><img src="<?php bloginfo('template_directory'); ?>/common/img/close.png" width="16" height="16" alt=""></div>
		<ul>
			<li>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></p>
			</li>
			<li>
				<p><a href="javascript:void(0);">ニュース</a></p>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/information/">企業からのお知らせ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/pressrelease/">プレスリリース</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/media/">メディア掲載情報</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>ir/">電子公告</a></li>
				</ul>
			</li>
			<li>
				<p><a href="javascript:void(0);">企業情報</a></p>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/president/">代表者挨拶</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/philosophy/">経営理念</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/about/">会社概要</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/history/">沿革</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/officer/">役員一覧</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/access/">アクセス</a></li>
				</ul>
			</li>
			<li>
				<p><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></p>
			</li>
			<li>
				<p><a href="javascript:void(0);">グループ企業</a></p>
				<ul>
					<li><a href="https://www.chronicle-web.com/">株式会社クロニクル</a></li>
					<li><a href="http://www.chronicle-kensetsu.co.jp/">株式会社クロニクル建設</a></li>
					<li><a href="https://www.prostyle-residence.com/">株式会社プロスタイル</a></li>
					<li><a href="https://www.prostyle-villa.com/">株式会社プロスタイルヴィラ</a></li>
					<li><a href="http://chinokanri.co.jp/">千野建物管理株式会社</a></li>
					<li><span>煙台提案生活木業有限公司</span></li>
					<li><a href="http://www.propolifevietnam.com/">PROPOLIFE VIETNAM</a></li>
					<li><span>PROPOLIFE SINGAPORE</span></li>
					<li><a href="http://kotakino.wpblog.jp" target="_blank">株式会社小滝野</a></li>
					<li><span>小滝野</span></li>
					<li><span>PROPOLIFE HOTELS</span></li>
				</ul>
			</li>
			<li>
				<p><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab" target="_blank">お問い合わせ</a></p>
			</li>
			<li>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacypolicy/">プライバシーポリシー</a></p>
			</li>
		</ul>
	</div>
	<!-- /#header -->

