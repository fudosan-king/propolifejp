<?php get_header(); ?>

<?php 

get_template_part( 'template-parts/post/single', $post->post_type );

// while(have_posts()): the_post();
// 	the_content();
// endwhile;

?>

<?php get_footer(); ?>
