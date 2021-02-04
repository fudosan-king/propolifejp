<!doctype html>
<html class="no-js" lang="ja">

<head>
    <?php 
        if(is_page( 'service' )){
            require 'includes/head2.php';
        }elseif(is_page( 'branding' )){
            require 'includes/head-branding.php';
        }elseif(is_page('sell')){
            require 'includes/head-sell.php'; 
        }else{
            require 'includes/head.php'; 
        }
    ?>

    <?php wp_head(); ?>
    <?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )):
        do_action( 'header_extra_script');
    endif; ?>
    <style>
        .init-overload.active {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #fff;
            top: 0;
            z-index: 100;
        }
    </style>
</head>

<?php if(is_page('booking-completed')): ?>
    <body class="body-service-lp">
<?php else: ?>
    <body <?php body_class(); ?>>
<?php endif; ?>
    
    <?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )):
        do_action( 'body_extra_script');
    endif; ?>

    <?php if(!is_preview() && !is_page( 'branding' ) && !is_page( 'sell' )): ?>
        <div class="init-overload active"></div>
    <?php endif; ?>
    <div id="page" data-service="<?php echo is_page( 'service' ); ?>">
        <?php
            if(is_page( 'service' )){
                require 'includes/header2.php';
            }elseif(is_page( 'branding' )){
                require 'includes/header-branding.php';
            }elseif(is_page('sell')){
                require 'includes/header-sell.php';
            }else{
                require 'includes/header.php';
            }
            
            if(is_home()){
                get_template_part( 'template-parts/banner', 'default' );     
            }
        ?>
