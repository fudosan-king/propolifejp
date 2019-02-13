<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
<link href="http://www.landcreation.co.jp/static/common/css/reset.css" rel="stylesheet" type="text/css">
<link href="http://www.landcreation.co.jp/static/common/css/clearfix.css" rel="stylesheet" type="text/css">
<link href="http://www.landcreation.co.jp/static/common/css/common.css" rel="stylesheet" type="text/css">
<link href="http://www.landcreation.co.jp/static/common/css/table.css" rel="stylesheet" type="text/css">
<link href="http://www.landcreation.co.jp/static/common/css/contents.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/twentyfifteen/style.css" rel="stylesheet" type="text/css">
<link href="http://www.landcreation.co.jp/static/common/css/dropdownmenu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://www.landcreation.co.jp/static/common/js/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="http://www.landcreation.co.jp/static/common/js/tell_link.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQNV8X');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQNV8X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="wrapper">
<div class="logo"><span style="display:none;">さいたま市の新築一戸建て・中古一戸建て・マンション・土地の不動産情報はランドクリエイションにお任せ下さい。</span>
  <h1 style="padding-left:8px;">浦和の新築戸建て・不動産情報はランドクリエイションにお任せ下さい</h1>
  <a href="/"><img src="http://www.landcreation.co.jp/static/img/common/logo.png" width="296" height="57" alt="株式会社ランドクリエイション　不動産総合情報サービス"/></a></div>
<div class="freedial"><img class="tel-link" src="http://www.landcreation.co.jp/static/img/common/freedial.png" width="276" height="52" alt="0120-15-3718"/></div>
<a href="/contact" class="mail not_print"><img src="http://www.landcreation.co.jp/static/img/common/btn_mail.png" width="82" height="41" alt="お問い合せ"/></a>

<a href="#toggle" class="menubtn sp"><img src="http://www.landcreation.co.jp/static/img/common/sp/menu_open.png"></a>

<ul class="dropdown-menu">
  <li><a href="http://www.landcreation.co.jp/"><img src="http://www.landcreation.co.jp/static/img/common/menu_home.png" width="28" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/search"><img src="http://www.landcreation.co.jp/static/img/common/menu_search.png" width="60" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/renovation/index.html"><img src="http://www.landcreation.co.jp/static/img/common/menu_renovation.png" width="146" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/knowledge/index.html"><img src="http://www.landcreation.co.jp/static/img/common/menu_knowledge.png" width="132" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/rental/index.html"><img src="http://www.landcreation.co.jp/static/img/common/menu_rental_management.png" width="60" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/conference/index.html"><img src="http://www.landcreation.co.jp/static/img/common/menu_conference.png" width="162" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/blog" class="now"><img src="http://www.landcreation.co.jp/static/img/common/menu_blog.png" width="46" height="63" alt=""/></a></li>
  <li><a href="http://www.landcreation.co.jp/company/index.html" class="last"><img src="http://www.landcreation.co.jp/static/img/common/menu_company.png" width="62" height="63" alt=""/></a></li>
</ul>
<script>
$('.menubtn').on({
  click:function(e){
    e.preventDefault();

    var cls = $(".dropdown-menu").attr("class");

    if(cls.match(/open/)){
      $(".dropdown-menu").removeClass("open");
    }
    else{
      $(".dropdown-menu").addClass("open");
    }
  }
});
</script>

</header>
<div class="menubar clearfix">
  <ul>
  <li><a class="home" href="http://www.landcreation.co.jp/"></a></li>
  <li><a class="search" href="http://www.landcreation.co.jp/search"></a></li>
  <li><a class="renova" href="http://www.landcreation.co.jp/renovation/index.html"></a></li>
  <li><a class="know" href="http://www.landcreation.co.jp/knowledge/index.html"></a></li>
  <li><a class="manage" href="http://www.landcreation.co.jp/rental/index.html"></a></li>
  <li><a class="conf" href="http://www.landcreation.co.jp/conference/index.html"></a></li>
  <li><a class="blog now" href="http://www.landcreation.co.jp/blog"></a></li>
  <li class="last"><a class="company" href="/company/index.html"></a></li>
  </ul>
</div>
<div class="pankuzu wrapper"><a href="http://www.landcreation.co.jp/">トップ</a>　＞　ブログ</div>
<div class="contents wrapper">

  <h2><img src="http://www.landcreation.co.jp/static/img/h/h_blog.png" height="37" alt="ブログ"/></h2>
  <div class="box blog">
    <h3><img src="<?php echo get_template_directory_uri()."/images/blog_hdr.png" ?>" width="958" height="200" alt="ランドクリエイション　スタッフブログ"></h3>
	<?php
		if ( is_single() ) :
			the_post_navigation( array(
				'next_text' => '<img src="http://www.landcreation.co.jp/static/img/blog/btn_next_ontxt.png" width="57" height="24" alt="next"> %title',
                               	'prev_text' => '%title <img src="http://www.landcreation.co.jp/static/img/blog/btn_prev_ontxt.png" width="57" height="24" alt="next">', ) );
		else :
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>', ) );
		endif;
	?>

<div id="page" class="content clearfix">


	<div id="content" class="main">
