<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="post_content">
            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
