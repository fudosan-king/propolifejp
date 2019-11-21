<?php 
/* Template Name: Access - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page access">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
                            ?>

                            <!-- <h2 class="sub_title"><?php //the_title(); ?></h2> -->
                            
                            <div id="main-content">
                                <?php the_content(); ?>

                                <section class="extra-content">
                                    <div id="section_title">
                                        <h2><?php the_title(); ?></h2>
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <!-- <p class="line"></p> -->
                                    </div>
                                    <div id="contents_inner">
                                        <div class="row">
                                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <br>
                                                <h1><?php echo get_field('main_title'); ?></h1>
                                                <p><?php echo get_field('subtitle'); ?></p>
                                                <hr>
                                                <br>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <?php echo get_field('main_content'); ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                <div id="map_canvas">
                                                    <?php echo get_field('google_embed_map'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </section>
                                
                            </div>

                            <?php
                        endwhile;
                    else:
                        ?>
                            <p align="center">404 Page not found.</p>
                        <?php
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();?>