<?php 
/*
	Template Name: Table Outline Simple
*/
?>

<?php get_header(); ?>

<?php 
	$page_name = $post->post_name;

	if(have_posts()):
		get_template_part('template-part/page/content', $page_name);
	else:

	endif;
?>

<?php get_footer(); ?>