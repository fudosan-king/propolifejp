<?php 

    /*
    * The WordPress Query class.
    *
    * @link https://codex.wordpress.org/Function_Reference/WP_Query
    */
    $args = array(

    // Type & Status Parameters
        'post_type'   => 'accommodation',
        'post_status' => 'publish',

    // Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',

    // Pagination Parameters
        'posts_per_page'         => -1,
    // 'posts_per_archive_page' => 10,
    // 'nopaging'               => false,
    // 'paged'                  => get_query_var( 'paged' ),
    // 'offset'                 => 3,

    // Custom Field Parameters
        'meta_query'     => array(
            array(
                'key'     => 'featured_on_top',
                'value'   => 'enabled',
                'compare' => '=',
            ),
        ),

    // Permission Parameters -
        'perm' => 'readable',

    // Parameters relating to caching
        'no_found_rows'          => false,
        'cache_results'          => true,
        'update_post_term_cache' => true,
        'update_post_meta_cache' => true,

    );

    $query = new WP_Query( $args );

    if ($query->have_posts()):
        

        echo '<div id="accommodations" class="accommodations">';
        while ($query->have_posts()): $query->the_post();
            $featured_on_top_options = get_field('featured_on_top_options');
        ?>
            <div class="accommodation-type column-item">
                <a href="<?php the_permalink(); ?>">
                    <h4 class="accommodation-name"><?php the_title(); ?></h4>
                    <div class="accommodation-bg" style="background-image:url('<?php echo $featured_on_top_options['top_image_default']['url']; ?>')">
                        <div class="accommodation-bg-change" data-src="<?php echo $featured_on_top_options['top_image_hover']['url']; ?>" style="background-image:url('<?php echo $featured_on_top_options['top_image_hover']['url']; ?>')"></div>
                    </div>
                </a>
            </div>
        <?php
        endwhile;
        echo '</div>';
        wp_reset_query();
        wp_reset_postdata();
    endif;

?>