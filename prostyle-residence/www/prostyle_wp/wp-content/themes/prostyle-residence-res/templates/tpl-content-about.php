<?php
/*
    Template Name: Content - About Page
*/
?>


<?php get_header(); ?>

<div class="page_content">
    <h2><?php the_title(); ?></h2>
    <div class="content">
        <?php
            $args = array(
                'orderby' => 'ID',
                'order' => 'ASC',
                'post_type' => 'abouts',
            );
            query_posts($args);

            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part('/content', 'about');
                endwhile;
            endif;
        ?>
    </div>
</div>


<?php get_footer(); ?>
