<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Content HERE without title tag -->
	<?php get_template_part('template-parts/content', 'head'); ?>

	<?php wp_head(); ?>
</head>
<body>
	<?php do_action( 'wp_body' ); ?>
	
	<div id="page">
		<?php get_template_part( 'template-parts/header/header', 'content' );?>