<?php 
/* Template Name: Result - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page award">
        <div class="container">

            <div class="row">
                <div class="col col-12">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
                            ?>
                            
                            <div id="main-content">
                                <?php the_content(); ?>

                                <section class="extra-content">
                                    <div id="section_title">
                                        <h2><?php the_title(); ?></h2>
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <p class="line"></p>
                                    </div>
                                    <div id="contents_inner">
                                        <section class="result-list-page">
                                            <?php echo wpb_list_child_pages(); ?>
                                        </section>
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