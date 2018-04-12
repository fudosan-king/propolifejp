<?php

    // Enqueue Flexslider Files

    function wptuts_slider_scripts() {
        wp_enqueue_script( 'jquery' );

        wp_enqueue_style( 'flex-style', get_template_directory_uri() . '/library/flexslider/css/flexslider.css' );

        wp_enqueue_script( 'flex-script', get_template_directory_uri() .  '/library/flexslider/js/jquery.flexslider-min.js', array( 'jquery' ));

        wp_enqueue_script( 'flex-script-option', get_template_directory_uri() .  '/library/flexslider/js/jquery.flexslider-option.js', array( 'jquery' ));
    }
    add_action( 'wp_enqueue_scripts', 'wptuts_slider_scripts' );




    // Create Slider

    function wptuts_slider_template() {

        // Query Arguments
        $args = array(
            'post_type' => 'slides',
            'posts_per_page' => 5,
            'orderby' => 'ID',
            'order' => 'ASC',
        );

        // The Query
        $the_query = new WP_Query( $args );

        // Check if the Query returns any posts
        if ( $the_query->have_posts() ) {

            // Start the Slider ?>
            <div class="flexslider">
                <ul class="slides">

                    <?php
                    // The Loop
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li>
                        <?php // Check if there's a Slide URL given and if so let's a link to it
                        if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                            <a href="<?php echo esc_url( get_post_meta( get_the_id(), 'wptuts_slideurl', true) ); ?>" target="_blank">
                        <?php }

                        // The Slide's Image
                        echo the_post_thumbnail();

                        // Close off the Slide's Link if there is one
                        if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                            </a>
                        <?php } ?>

                        </li>
                    <?php endwhile; ?>

                </ul><!-- .slides -->
            </div><!-- .flexslider -->

        <?php }

        // Reset Post Data
        wp_reset_postdata();
    }

?>
