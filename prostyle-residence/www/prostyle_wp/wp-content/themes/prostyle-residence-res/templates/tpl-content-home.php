<?php

/*
    Template Name: Content - Home Page
*/

?>

<?php get_header(); ?>

</div>

<div class="slide">
    <div class="extra">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php echo wptuts_slider_template(); ?>
                </div>
            </div>

        </div>
    </div>
    <div class="pri">
        <?php echo wptuts_slider_template(); ?>
    </div>

</div>

<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="row">

            <?php
                // $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
                $args = array(
                        // 'orderby' => 'ID',
                        // 'order' => 'ASC',
                        'post_type' => 'entries',
                        // 'posts_per_page' => '2',

                    );

                // query_posts($args);
                $the_query = new WP_Query($args);
            ?>
                <div class="entry_list">
            <?php

                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part('/content', 'entry');
                    endwhile;
                endif;

            ?>
                </div>
            <?php


                wp_reset_query();
             ?>


        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="utility">
            <iframe width="100%" height="210" src="https://www.youtube.com/embed/jdYiqvjohqs?rel=0&loop=1&modestbranding=1&showinfo=1&modestbranding=0" frameborder="0" allowfullscreen></iframe>
            <br>
            <h3>NEWS</h3>
            <div class="content">
                <dl>
                    <?php
                        $args = array(
                            'post_type' => 'post'
                        );
                        query_posts($args);
                        if( have_posts() ): while ( have_posts() ) : the_post();
                                get_template_part('content', 'ultility');
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                </dl>
            </div>

        </div>
        <div class="fb-page" data-href="https://m.facebook.com/prostyleresidence/" data-tabs="timeline" data-width="350" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://m.facebook.com/prostyleresidence/" class="fb-xfbml-parse-ignore"><a href="https://m.facebook.com/prostyleresidence/">株式会社プロスタイル</a></blockquote></div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div id="information"> -->

            <?php
                // $args = array(
                //     'orderby' => 'ID',
                //     'order' => 'ASC',
                //     'post_type' => 'abouts',
                // );
                // query_posts($args);

                // if ( have_posts() ) : while ( have_posts() ) : the_post();
                //     get_template_part('/content', 'about');
                //     endwhile;
                // endif;

                // wp_reset_query();
            ?>

<!--         </div>

    </div>
</div> -->




<?php get_footer(); ?>
