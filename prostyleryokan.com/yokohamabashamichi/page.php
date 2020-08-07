<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_policy section_content_article">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
					    if(have_posts()):
					        while(have_posts()): the_post();
					            the_content();
					        endwhile;
					    endif;
					?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>