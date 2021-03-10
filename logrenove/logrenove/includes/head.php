<?php
	global $detect;
    $keywords = is_single() ? get_field('keywords') : get_field('global_keywords', 'option') ;

    if(!empty($keywords)){
        echo '<meta name="keywords" content="'.$keywords.'">';
    }
?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<!-- <title>Logrenove</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/> -->

<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON_PATH;?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON_PATH;?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON_PATH;?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo FAVICON_PATH;?>/site.webmanifest">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.min.css">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.min.css"></noscript>

<?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )): ?>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/webfonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css"></noscript>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap"></noscript>
<?php endif; ?>

<?php 
    wp_enqueue_style( 'main', STYLESHEET_PATH.'/styles.css');
    
    if(is_single()):
        ?>
            <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></noscript>

            <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>

            <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>

            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <?php
        wp_enqueue_style( 'single', STYLESHEET_PATH.'/single.css');
    endif;
?>

<?php 
    if ($detect->isMobile()):
        wp_enqueue_style( 'bsnav', STYLESHEET_PATH.'/bsnav.min.css');
        wp_enqueue_style( 'main-sp', STYLESHEET_PATH.'/mobile.css');
    endif;
    if(is_page('booking-completed')) {
        wp_enqueue_style( 'main-booking', COUNTER_STYLESHEET_PATH.'/main.css');
        wp_enqueue_style( 'main-counter-sp', COUNTER_STYLESHEET_PATH.'/mobile.css');
    }
    wp_enqueue_style( 'main-new', STYLESHEET_PATH.'/styles_new.css');
?>
<script src="https://sdk.form.run/js/v2/formrun.js"></script>
<?php event_popular_seminar_schema(); ?>
<?php event_detail_schema(); ?>
