<?php
/*
Template Name:固定ページ
 */
get_header('2'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
