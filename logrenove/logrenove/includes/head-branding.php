<?php
    global $detect;
    $keywords = is_single() ? get_field('keywords') : get_field('global_keywords', 'option') ;

    if(!empty($keywords)){
        echo '<meta name="keywords" content="'.$keywords.'">';
    }
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">

<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<link rel="apple-touch-icon" sizes="152x152" href="<?php echo SERVICE_FAVICON_PATH;?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SERVICE_FAVICON_PATH;?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SERVICE_FAVICON_PATH;?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo SERVICE_FAVICON_PATH;?>/site.webmanifest">

<link rel="stylesheet" href="<?=BRANDING_STYLESHEET_PATH?>/bootstrap.min.css">
<link rel="stylesheet" href="<?=BRANDING_STYLESHEET_PATH?>/animate.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=BRANDING_STYLESHEET_PATH?>/flickity.min.css">
<link rel="stylesheet" type="text/css" href="<?=BRANDING_STYLESHEET_PATH?>/bsnav.min.css">
<?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )): ?>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/webfonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css"></noscript>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap"></noscript>
<?php endif; ?>

<?php
    wp_enqueue_style( 'styles', BRANDING_STYLESHEET_PATH.'/styles.css');
    wp_enqueue_style( 'mobile', BRANDING_STYLESHEET_PATH.'/mobile.css');
?>