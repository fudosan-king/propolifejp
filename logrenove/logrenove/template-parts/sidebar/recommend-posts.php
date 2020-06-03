<?php
    global $detect;
?>

<div class="each_boxright">
    <h2>おすすめ記事</h2>
    <div class="each_boxright_content">
        <?php

            $recent_posts = wp_get_recent_posts( array(
                'numberposts' => 5,
                'post_status' => 'publish',
            ), $output = 'ARRAY_A' );

            $recent_ids = array_column($recent_posts, 'ID');

            $args = array(
                'post__in'    => $recent_ids,
                // Type & Status Parameters
                'post_type'   => 'post',
                'post_status' => 'publish',
        
                // Order & Orderby Parameters
                'order'               => 'DESC',
                'orderby'             => 'date',
                'ignore_sticky_posts' => true,
        
                // Pagination Parameters
                'posts_per_page'         => -1,
        
                // Permission Parameters -
                'perm' => 'readable',
        
                // Parameters relating to caching
                'no_found_rows'          => false,
                'cache_results'          => true,
                'update_post_term_cache' => true,
                'update_post_meta_cache' => true,
        
            );
            
            $query = new WP_Query( $args );

            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                    $_size = $detect->isMobile() ? 'medium' : 'thumbnail' ;
                    $thumbnails = new ThumbnailItem(get_post_thumbnail_id(), $_size);
                    $firstCat = get_the_category()[0];
                    ?>
                        <article class="article_items">
                            <div class="row no-gutters">
                                <div class="col-6 align-self-center">
                                    <a href="<?php the_permalink(); ?>" class="article_items_img">
                                        <img data-src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6 align-self-center">
                                    <div class="article_items_content">
                                        <p class="article_items_name"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></p>
                                        <span class="badge badge-secondary badge_cate"><?=$firstCat->name;?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php
                    wp_reset_postdata();
                endwhile;
                wp_reset_query();
            endif;
            
        ?>
        
    </div>
    <!-- <div class="each_boxright_footer">
        <a href="#" class="btn btnMore">もっと見る <i class="fal fa-long-arrow-right"></i></a>
    </div> -->
</div>