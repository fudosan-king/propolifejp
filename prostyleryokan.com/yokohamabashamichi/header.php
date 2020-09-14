<!doctype html>
<html class="no-js">
<head>
    <?php 
        $location = get_nav_menu_locations();
        $header_info = get_field('header', 'option');
        $body_info = get_field('body', 'option');

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_url( $custom_logo_id , 'full' );

        // SEO Support
        $seo_title = !empty(get_field('seo_title', $page_info)) ? get_field('seo_title', $page_info) : sprintf("%s - %s", get_the_title(), get_bloginfo('name'));
        $seo_description = !empty(get_field('seo_description', $page_info)) ? get_field('seo_description', $page_info) : get_option( 'blogdescription' );
        $seo_keywords = !empty(get_field('seo_keywords', $page_info)) ? get_field('seo_keywords', $page_info) : '';
        $seo_image = !empty(get_field('seo_image', $page_info)) ? get_field('seo_image', $page_info)['url'] : $image;

        if (is_page() || is_single()){

            $seo_title = !empty(get_field('seo_title')) ? get_field('seo_title') : $seo_title;
            $seo_description = !empty(get_field('seo_description')) ? get_field('seo_description'): $seo_description;
            $seo_keywords = !empty(get_field('seo_keywords')) ? get_field('seo_keywords') : $seo_keywords;
            $seo_image = !empty(get_field('seo_image')) ? get_field('seo_image') : $seo_image;
        }

        if (is_archive()){
            $termObj = get_queried_object();
            $strPage = "accommodation-".$termObj->slug;
            $pageObj = get_page_by_path($strPage);
            
            $seo_title = !empty(get_field('seo_title', $pageObj)) ? get_field('seo_title', $pageObj) : $seo_title;
            $seo_description = !empty(get_field('seo_description', $pageObj)) ? get_field('seo_description', $pageObj): $seo_description;
            $seo_keywords = !empty(get_field('seo_keywords', $pageObj)) ? get_field('seo_keywords', $pageObj) : $seo_keywords;
            $seo_image = !empty(get_field('seo_image', $pageObj)) ? get_field('seo_image', $pageObj) : $seo_image;
        }
    ?>
    
    <?php require 'includes/head.php'; ?>

    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:description" content="<?php echo $seo_description; ?>">
    <meta property="og:image" content="<?php echo $seo_image; ?>" />

    <meta name="keywords" content="<?php echo $seo_keywords; ?>">
    <meta name="description" content="<?php echo $seo_description; ?>">
    <title><?php echo $seo_title; ?></title>

    <?php wp_head(); ?>

    <?php print_r($header_info['extra_scripts']); ?>
    <script src="https://tripla.jp/sdk/javascript/tripla.min.js" data-triplabot-code="6de8a8017ac482dfdace6acc6c934471"></script>
</head>

<body <?php body_class(); ?>>
    <?php print_r($body_info['extra_scripts']); ?>
    
    <?php
        if(is_front_page() && !isset($_COOKIE['isshowed'])):
        ?>
            <div class="js-loading-mask loading-mask">
                <h1><img src="<?php echo IMAGES_PATH; ?>/1x/logo_banner.png" alt="" class="img-fluid" width="214"></h1>
                <h2>文明開化の地で心地よい安らぎを</h2>
            </div>
        <?php
        endif;
    ?>

    <div id="page">
        <?php require 'includes/header.php'; ?>
        <?php require 'includes/booking.php'; ?>
        <div class="spacing <?php echo is_front_page() ? 'd-block d-md-none' : ''; ?>"></div>