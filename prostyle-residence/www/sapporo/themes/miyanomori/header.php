<?php  
    if (!is_home() && !is_front_page() && !is_user_logged_in())
    {
        wp_redirect(home_url());
    }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <?php if ( !is_user_logged_in()) : ?>
        <title>【公式】プロスタイル札幌 宮の森｜新築分譲マンション </title>
    <?php else: ?>
         <title><?= strip_tags(get_the_title()); ?></title>
    <?php endif; ?>

    <meta name="title" content="<?= get_the_title(); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/favicon_package_v0.16/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/bsnav.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/styles.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/mobile.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/custom.css" type="text/css">
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    
    <div id="page">

