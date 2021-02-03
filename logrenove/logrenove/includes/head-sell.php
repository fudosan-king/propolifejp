<?php
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

<?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )): ?>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=SELL_STYLESHEET_PATH?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?=SELL_STYLESHEET_PATH?>/animate.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=SELL_STYLESHEET_PATH?>/flickity.min.css">
<?php endif; ?>

<?php 
    wp_enqueue_style( 'bsnav', SELL_STYLESHEET_PATH.'/bsnav.min.css');
    wp_enqueue_style( 'main', SELL_STYLESHEET_PATH.'/styles.css');
    wp_enqueue_style( 'main-sp', SELL_STYLESHEET_PATH.'/mobile.css');
?>
