<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css%3Ffamily=Noto+Serif+JP:500,600&amp;display=swap&amp;subset=japanese.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css%3Ffamily=Cinzel&amp;display=swap.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/fonts/icomoon/style.css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/normalize.min.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/fancybox/jquery.fancybox.min.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/base.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/common.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/slick/slick.css" media="all">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/home.css" media="all">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS_PATH; ?>/css/mobile.css">

    <script src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyAffKlhXHZXYWehQzLKHGMFmJVb7Nvgi0Y"></script>

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="<?php echo TEMPLATE_ASSETS_PATH; ?>/gtag/js%3Fid=UA-153074140-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-153074140-1');

    </script>
</head>

<body class="p-home">

    <header id="js-gHeaderWrap" class="gHeaderWrap <?php echo !is_front_page() ? 'header_underpage' : ''; ?>">
        <div class="gHeader">
            <div class="gHeader_inner u-inner">
                <div class="gHeader_cols">
                    <div class="gHeader_col gHeader_col-no1">
                        <p class="gHeader_link"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>" target="_blank">会社概要</a></p>
                    </div>
                    <div class="gHeader_col gHeader_col-no3">
                        <p class="gHeader_link"><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></p>
                    </div>
                    <div class="gHeader_col gHeader_col-no3">
                        <p class="gHeader_link"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" target="_blank">お問い合わせ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="gBody">