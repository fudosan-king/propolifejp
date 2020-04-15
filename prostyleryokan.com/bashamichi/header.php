<!doctype html>
<html class="no-js">
<head>
    <?php 
        $location = get_nav_menu_locations();
        $header_info = get_field('header', 'option');
        $body_info = get_field('body', 'option');

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
    ?>
    
    <?php require 'includes/head.php'; ?>

    <?php wp_head(); ?>

    <?php print_r($header_info['extra_scripts']); ?>
</head>

<body <?php body_class(); ?>>
    <?php print_r($body_info['extra_scripts']); ?>

    <?php if(is_front_page()): ?>
        <div class="js-loading-mask loading-mask">
            <h1><img src="<?php echo IMAGES_PATH; ?>/1x/logo_banner.png" alt="" class="img-fluid" width="214"></h1>
            <h2>文明開化の地で心地よい安らぎを</h2>
        </div>
    <?php endif; ?>

    <div id="page">
        <?php require 'includes/header.php'; ?>
        <div class="spacing <?php echo is_front_page() ? 'd-block d-md-none' : ''; ?>"></div>