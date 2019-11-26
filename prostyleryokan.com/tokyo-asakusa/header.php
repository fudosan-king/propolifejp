<!doctype html>
<html class="no-js">

	<head>
	    <meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="">

		<link rel="apple-touch-icon" sizes="152x152" href="<?php the_fav_path(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php the_fav_path(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php the_fav_path(); ?>/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap&subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="<?php the_css_path(); ?>/fontawesome-pro-5.7.0-web/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php the_css_path(); ?>/bsnav.min.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
		<link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">

		<link rel="stylesheet" href="<?php the_css_path(); ?>/styles.css" type="text/css">
		<link rel="stylesheet" href="<?php the_css_path(); ?>/mobile.css" type="text/css">

		<?php wp_head(); ?>
		<?php do_action('wp_head_plus') ?>

	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<?php do_action('wp_body_plus') ?>
		
		<div id="page">
			<?php get_template_part( 'template-part/nav', 'header' ) ?>
			<?php do_action('content_banner'); ?>
			<main>