<?php 
    global $detect;
    global $header_ids;

    if (count($header_ids) > 0):

        $header_ids_mod = array_merge(array(), $header_ids);

        if ($detect->isMobile()):
            $header_ids_mod = array_slice($header_ids, 0, 1);
        endif;

        // echo 'BANNER: ';
        // print_r($header_ids);

        $headerBanner = get_field('header_banner', 'option');
        $display_type = $headerBanner['display_type'];

        echo '<section class="section_banner">';

        $args = array(
                    
            // Post & Page Parameters
            'post__in'     => $header_ids_mod,

            // Type & Status Parameters
            'post_type'   => 'post',
            'post_status' => 'publish',


            // Order & Orderby Parameters
            'order'               => 'DESC',
            'orderby'             => 'date',
            'ignore_sticky_posts' => true,
            // Pagination Parameters
            'posts_per_page'         => 3,

            // Permission Parameters -
            'perm' => 'readable',

            // Parameters relating to caching
            'no_found_rows'          => false,
            'cache_results'          => true,
            'update_post_term_cache' => true,
            'update_post_meta_cache' => true,

        );

        if ($display_type == 'auto'){
            $args['ignore_sticky_posts'] = true;
        }

        $query = new WP_Query( $args );

        if($query->have_posts()):
            ?>
                <div class="carousel carousel_banner">
            <?php
            while($query->have_posts()): $query->the_post();
                $_size = $detect->isMobile() ? 'medium' : 'large' ;
                $thumbnails = new ThumbnailItem(get_post_thumbnail_id(), $_size);
                $firstCat = get_the_category()[0];
                ?>
                    <div class="carousel-cell">
                        <p class="badge badge-secondary badge_cate badge_cate_sm"><?php echo $firstCat->name; ?></p>
                        <a href="<?php the_permalink(); ?>" >
                            <img data-src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                        </a>
                        <div class="caption">
                            <p class="badge badge-secondary badge_cate"><?php echo $firstCat->name; ?></p>
                            <h1><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
                        </div>
                    </div>
                <?php
            endwhile;
            ?>
                </div>
            <?php
        endif;
        wp_reset_postdata();
        wp_reset_query();

        echo '</section>';
    endif;
    
?>