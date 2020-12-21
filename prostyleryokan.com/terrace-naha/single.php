<?php get_header(); ?>

<?php 
    $post_type = $post->post_type;

    if(have_posts()):
        if ($post_type == 'post'){
            get_template_part('template-part/single/content', 'default');
        }else{
            get_template_part('template-part/single/content', $post_type);
        }
        
    else:

    endif;
?>

<?php get_footer(); ?>