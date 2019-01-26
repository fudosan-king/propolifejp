<!doctype html>
<html class="no-js">
    <?php 
    $location = get_nav_menu_locations();
    $page_info = get_page_by_path('general-addition-info');
    $header_info = get_field('header', $page_info);
    $body_info = get_field('body', $page_info);

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

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">


        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo TEMPLATE_DIR; ?>/favicon_package_v0.16/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo TEMPLATE_DIR; ?>/favicon_package_v0.16/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo TEMPLATE_DIR; ?>/favicon_package_v0.16/favicon-16x16.png">
        <link rel="manifest" href="<?php echo TEMPLATE_DIR; ?>/favicon_package_v0.16/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet"> -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/ui-darkness/jquery-ui.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.2/aos.css" type="text/css">

        <!-- <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_DIR; ?>/inc/mCustomScrollbar/jquery.mCustomScrollbar.min.css"/> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.8/SmoothScroll.min.js"></script>
       

        <script src="https://use.typekit.net/krm1frd.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <meta property="og:title" content="<?php echo $seo_title; ?>">
        <meta property="og:description" content="<?php echo $seo_description; ?>">
        <meta property="og:image" content="<?php echo $seo_image; ?>" />

        <meta name="keywords" content="<?php echo $seo_keywords; ?>">
        <meta name="description" content="<?php echo $seo_description; ?>">
        <title><?php echo $seo_title; ?></title>

        

        <?php wp_head(); ?>

        <?php print_r($header_info['extra_scripts']); ?>
    </head>

    <body>

        <?php print_r($body_info['extra_scripts']); ?>

        <div id="page" class="">

        <!-- CONTENT HERE -->
