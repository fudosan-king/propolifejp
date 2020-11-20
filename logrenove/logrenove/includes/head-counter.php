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

<link rel="stylesheet" href="<?php echo COUNTER_STYLESHEET_PATH;?>/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo COUNTER_STYLESHEET_PATH;?>/bootstrap-datepicker3.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo COUNTER_STYLESHEET_PATH;?>/bootstrap-datepicker3.standalone.min.css" type="text/css">
<link rel="preload" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo STYLESHEET_PATH;?>/fontawesome-pro/css/all.min.css"></noscript>
<?php 
    wp_enqueue_style( 'styles', STYLESHEET_PATH.'/styles.css');
    wp_enqueue_style( 'main', COUNTER_STYLESHEET_PATH.'/main.css');
    wp_enqueue_style( 'main-sp', COUNTER_STYLESHEET_PATH.'/mobile.css');
?>
