<?php //header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/css/import.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/<?php
	if(is_tax('renovation') || is_tax('renovation_tag')) {
		echo "works";
	} else {
		echo get_post_type( $post );
	}
?>/css/style.css">
<script type="text/javascript" src="https://www.chronicle-web.com/wordpress/wp-content/themes/propolife2015/common/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/wordpress/wp-content/themes/propolife2015/common/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/wordpress/wp-content/themes/propolife2015/common/js/jquery.transit.min.js"></script>
<script type="text/javascript" src="https://www.chronicle-web.com/wordpress/wp-content/themes/propolife2015/common/js/common.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/script.js"></script>
</head>
<body <?php body_class(); ?> id="<?php echo get_post_type( $post ); ?>">
<div id="wrapper">
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/common/images/img_logo_chronicle_ja.png" width="202" alt="リノベーションならクロニクル"></a></h1>
	<div id="gnav">
		<ul id="gnav_list">
			<li>
				<p class="parents">ニュース</p>
				<ul>
					<li class="information" id="post-133"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/information/">企業からのお知らせ</a></li>
					<li class="pressrelease bg" id="post-133"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/pressrelease/">プレスリリース</a></li>
					<li class="media" id="post-133"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/media/">メディア掲載情報</a></li>
					<li class="news bg" id="post-133"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/news/">物件ニュース</a></li>
				</ul>
			</li>
			<li>
				<p class="parents">企業情報</p>
				<ul>
					<li class="president" id="post-8"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/president/">代表者挨拶</a></li>
					<li class="message bg" id="post-8"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/message/">コーポレート<br>メッセージ</a></li>
					<li class="about" id="post-8"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/about/">会社概要</a></li>
					<li class="access bg" id="post-8"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/access/">アクセス</a></li>
				</ul>
			</li>
			<li>
				<p class="parents">事業概要</p>
				<ul>
					<li class="main" id="post-22"><a href="<?php echo esc_url( home_url( '/' ) ); ?>business/main/">主要事業</a></li>
					<li><a href="https://www.propolife.co.jp/group/" target="_blank">グループ企業</a></li>
				</ul>
			</li>
			<li class="sp"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/access/">アクセス</a></li>
			<li><p><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用</a></p></li>
		<!--
			<li class="lang">
				<p class="en"><a href="/en/"><span>ENGLISH</span></a></p><p class="cn"><a href="/cn/"><span>中文</span></a>
			</li>
		-->
		</ul>
	</div>
	<p class="gnav_ico"></p>
</div><!-- // #header -->

