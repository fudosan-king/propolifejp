<?php
/*Template Name: Experience - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_experience section_experience_sub">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title"><?php echo get_field('title'); ?></h2>
                    <div class="row">

                        <?php 
                            $args = array(

                            // Type & Status Parameters
                                'post_type'   => 'customer_exp',
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
                                while ($query->have_posts()): $query->the_post();
                                    $imgUrl = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'full', $icon = false );
                                ?>
                                    <div class="col-12 col-md-4">
                                        <div class="box_experience_item">
                                            <div class="box_experience_item_img">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid"></a>
                                                <?php 
                                                if (!empty(get_field('customer_name'))):
                                                    echo '<span>'.get_field('customer_name').'</span>';
                                                endif;
                                                ?>
                                            </div>
                                            <h2><?php the_title(); ?></h2>
                                            <p class="box_experience_item_content"><?php the_excerpt(); ?></p>
                                            <a class="btnMore" href="<?php the_permalink(); ?>">
                                                <span class="more">
                                                    <p class="more_text">More<span class="line more_loop no_width"></span></p>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_query();
                                wp_reset_postdata();
                            endif;
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>