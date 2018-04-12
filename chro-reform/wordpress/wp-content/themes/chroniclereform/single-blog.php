<?php

$template_assets_root = get_bloginfo('template_directory') . '/commonfiles';

?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="">

<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/general.css">
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/colorscheme.less">
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/base.less">
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/module.less">
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/parts.less">
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/commonfiles/css/smart.less">
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
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/jquery.responsive-elements.js"></script>
<script type="text/javascript" src ="<?php bloginfo('template_directory'); ?>/commonfiles/js/common.js"></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '768887693149991',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

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

<div id="container" class="page-blog">

<!--================= Header start ==================-->
<?php get_header(); ?>
<!--================= //Header end ==================-->


<!--================= Content start ==================-->
<div id="content" class="clearfix">

<!--======== Category Title start ===========-->
<div class="ttlCategory bgGrey">
	<div class="boxInner">
	<h1 class="txtMain"><img class="imgMain" src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/blog/ttl-main.png" alt="スタッフブログ"><img class="imgSmp" src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/blog/ttl-main-smp.png" alt="スタッフブログ"></h1>
	</div>
</div>
<!--======== //Category Title end ===========-->

<!--======== Breadcrumb start ===========-->
<nav class="boxBreadcrumb boxInner">
	<p>
	<span><a href="/">ホーム</a> » </span>
	<span><a href="/blog/">スタッフブログ</a> » </span>
	<span><?php the_title();?></span>
	</p>
</nav>
<!--======== //Breadcrumb end ===========-->


<!--======== Columns start ===========-->
<div id="columns" class="boxInner">
<!--======== Main start ===========-->
<div id="main">

<?php if(have_posts()):while(have_posts()):the_post();?>

<!--===== ▼投稿詳細 start =====-->
<article class="boxPostDetail">
	<header class="boxPostHead">
	<h1 class="ttlPost"><?php the_title();?></h1>
	<p class="txtDate"><?php the_time('Y.m.d');?></p>
	</header>

	<div class="boxSNS clearfix">
		<ul>
		<li class="btnFB"><div class="fb-like" data-href="<?php the_permalink();?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></li>
		<li class="btnTW"><a href="https://twitter.com/share" class="twitter-share-button twitter-count-vertical" data-via="monthlymansatsu" data-url="<?php the_permalink();?>" data-lang="ja" data-count="vertical">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
		<li class="btnGP"><div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60"></div></li>
		</ul>
	</div>

	<section class="boxSection">
<?php the_content('');?>
	</section>
</article>
<!--===== //投稿詳細 end =====-->
<?php endwhile;endif;?>



<!--===== ▼ページング start =====-->

<div class="singleBoxPaging clearfix">
	<p>
	<span class="btnPrev"><?php previous_post_link('%link', '<img src ="' . $template_assets_root . '/img/post/btn-prev.png" alt="前の投稿">');?></span>
	<span class="btnTop"><a href="/blog/"><img src ="<?php bloginfo('template_directory'); ?>/commonfiles/img/post/btn-blogtop.png" alt="スタッフブログトップへ"></a></span>
	<span class="btnNext"><?php next_post_link('%link', '<img src ="' . $template_assets_root . '/img/post/btn-next.png" alt="次の投稿">');?></span>
	</p>
</div>
<!--===== //ページング end =====-->

</div>
<!--======== //Main end ===========-->


<!--======== Side start ===========-->
<div id="side" data-respond="start: 0px; end: 640px; interval: 20px;">

<!--===== ▼最近の投稿 start =====-->
<div id="recent" class="boxPostMenu">
	<h3 class="ttlMain">最近の投稿</h3>
	<h3 class="ttlSmp">最近の投稿</h3>
<ul>
<?php
$args = array(
'post_type' => 'blog',
'taxonomy' => 'blogcat',
'posts_per_page' => 10,
'numberposts' => '-1',
);
$my_posts = get_posts($args);
foreach ( $my_posts as $post ) {
setup_postdata($post); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php
}
?>
</ul>
</div>
<!--===== //最近の投稿 end =====-->

<!--===== ▼カテゴリー start =====-->
<div id="category" class="boxPostMenu">
	<h3 class="ttlMain">カテゴリー</h3>
	<h3 class="ttlSmp">カテゴリー</h3>
<ul>
<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'blogcat', 'show_count' => 0, 'depth' => 1)); ?>
</ul>
</div>
<!--===== //カテゴリー end =====-->

<!--===== ▼アーカイブ start =====-->
<div id="archive" class="boxPostMenu">
	<h3 class="ttlMain">アーカイブ</h3>
	<h3 class="ttlSmp">アーカイブ</h3>
<ul>
<?php wp_get_archives('type=monthly&post_type=blog'); ?>
</ul>
</div>
<!--===== //アーカイブ end =====-->

</div>
<!--======== //Side end ===========-->
</div>
<!--======== //Columns end ===========-->


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
