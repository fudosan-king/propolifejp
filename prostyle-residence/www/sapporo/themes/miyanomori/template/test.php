<?php
/* 
Template Name: Test
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container">
	<h1>TEST</h1>
	<?php echo do_shortcode("[apartment-plan]"); ?>
</div>

<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>