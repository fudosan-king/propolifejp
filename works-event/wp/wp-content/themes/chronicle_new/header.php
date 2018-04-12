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
<!-- chronicle plus header -->
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/dist/css/bootstrap.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?_t=1502068833">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700?_t=1502068833" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/css/global-navi.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/owlcarousel/assets/owl.carousel.min.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/owlcarousel/assets/owl.theme.default.min.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/css/styles.css" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/css/mobile.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/common/css/styles_nicker.css?_t=1502068833" type="text/css">
<link rel="stylesheet" href="https://www.chronicle-web.com/plus/cache/common/css/mobile_nicker.css?_t=1502068833" type="text/css">
<!-- chronicle plus header -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/css/import.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/<?php
	if(is_tax('renovation') || is_tax('renovation_tag')) {
		echo "works";
	} else {
		echo get_post_type( $post );
	}
?>/css/style.css">
<!-- chronicle plus header -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js?_=1502068833"></script>
<script src="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/js/jquery.easing.1.3.js?_t=1502068833"></script>
<script src="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/dist/js/bootstrap.min.js?_t=1502068833"></script>
<script src="https://www.chronicle-web.com/plus/cache/owlcarousel/owl.carousel.js?_t=1502068833"></script>
<script src="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/js/jquery.matchHeight-min.js?_t=1502068833"></script>
<script src="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/js/jquery.datetimepicker.full.min.js?_t=1502068833"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script src="https://www.chronicle-web.com/plus/cache/assets/themes/my-bootstrap/js/functions.js?_t=1502068833"></script>
<!-- chronicle plus header -->
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


        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav role="navigation" class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="text_menu">メニュー</span>
                                </button>
                                <a href="https://www.chronicle-web.com/plus" class="navbar-brand">Brand</a>
                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav visible-sm visible-xs">
                                    <li ><a href="https://www.chronicle-web.com/plus/">ホーム</a></li>
                                    <li ><a href="https://www.chronicle-web.com/plus/#frm_search_area">物件検索</a></li>

                                    <li class="dropdown ">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <div>クロニクルプラスとは <span class="caret"></span></div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="https://www.chronicle-web.com/plus/flow/index.html"><span class="text_inline">中古購入の流れ</span></a></li>
                                            <li><a href="https://www.chronicle-web.com/plus/about/index.html"><span class="text_inline">リノベーションについて</span></a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="https://www.chronicle-web.com/plus/event/">イベント・セミナー</a></li>
                                    <li ><a href="https://www.chronicle-web.com/plus/voice/index.html">お客様の声</a></li>
                                    <li ><a href="https://www.chronicle-web.com/plus/vr/index.html">体験！VR</a></li>
                                    <li ><a href="https://www.chronicle-web.com/plus/works/">リノベーション実例</a></li>
                                    <li ><a href="https://www.chronicle-web.com/plus/package/" target="_blank">クロニクルパッケージ</a></li>
                                </ul>
                                <div class="text_top hidden-sm hidden-xs">
                                    <p class="f18">中古マンション・戸建探しのポータルサイト</p>
                                    <p class="f12">クロニクルプラスは、全国主要都市に拡がる
                                        <br>総合不動産企業クロニクルが運営しています。
                                    </p>
                                </div>
                                <a class="box_top hidden-sm hidden-xs" href="https://www.chronicle-web.com/showroom/">
                                    <img src="https://www.chronicle-web.com/plus/cache/images/img01.jpg" alt="" class="img-responsive">
                                    <p class="f12 mt12">コンシェルジェが物件探しをお手伝い</p>
                                    <p class="text_shadow f16">お近くのショールームはこちら</p>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="header services hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list_services">


                            <li  class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <!-- <i class="i_usedPurchase"></i> -->
                                    <div>クロニクルプラスとは
                                    <p>ABOUT <span class="caret"></span></p></div>

                                </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="https://www.chronicle-web.com/plus/flow/index.html"><span class="text_inline">中古購入の流れ</span></a></li>
                                    <li><a href="https://www.chronicle-web.com/plus/about/index.html"><span class="text_inline">リノベーションについて</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://www.chronicle-web.com/plus/event/">
                                    <!-- <i class="i_purchaseExperiences"></i> -->
                                    <div>イベント・セミナー
                                    <p>EVENT</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.chronicle-web.com/plus/voice/index.html">
                                    <!-- <i class="i_renovationCase"></i> -->
                                    <div>お客様の声
                                    <p>VOICE</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.chronicle-web.com/plus/vr/index.html">
                                    <!-- <i class="i_forRenovation"></i> -->
                                    <div>体験！VR
                                    <p>Virtual Reality</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.chronicle-web.com/plus/works/">
                                    <!-- <i class="i_ourServices"></i> -->
                                    <div>リノベーション実例
                                    <p>WORKS</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.chronicle-web.com/plus/package/" target="_blank">
                                    <!-- <i class="i_ourServices"></i> -->
                                    <div>クロニクルパッケージ
                                    <p>PACKAGE</p></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

