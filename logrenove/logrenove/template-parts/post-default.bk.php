<?php
    global $detect;
    global $header_ids;
?>

<div class="box_lastproducts">
    <?php if ($detect->isMobile() && count($header_ids) > 1): ?>
        <div class="box_lastproducts_top">
            <div class="row no-gutters">
                <?php
                    $header_ids_mod = array_slice($header_ids, 1);
                    $args = array(

                        'post__in' => $header_ids_mod,
                
                        // Type & Status Parameters
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                
                        // Order & Orderby Parameters
                        'order'               => 'DESC',
                        'orderby'             => 'date',
                        'ignore_sticky_posts' => true,

                        // Pagination Parameters
                        'posts_per_page'         => 2,
                
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
                        $count = 0;
                        while($query->have_posts()): $query->the_post();
                            $_size = $detect->isMobile() ? 'medium' : 'large' ;
                            $thumbnails = new ThumbnailItem(get_post_thumbnail_id(), 'medium');
                            $firstCat = get_the_category()[0];
                            $count++;

                            $childNode = $count == count($header_ids_mod) ? 'products_item_last' : '';
                            ?>
                                <div class="col-6 col-md-6">
                                    <div class="products_item <?php echo $childNode;?>">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <a class="products_item_img" href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <div class="products_item_content">
                                                    <p class="products_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                    <p class="btn_badge_cate"><?php echo $firstCat->name; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    wp_reset_query();
                ?>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="row">
        <?php 
            if(have_posts()):
                $count = 0;
                while(have_posts()): the_post();
                    $_size = $detect->isMobile() ? 'thumbnail' : 'medium' ;
                    $firstCat = get_the_category()[0];
                    $thumbnails = new ThumbnailItem(get_post_thumbnail_id(), $_size);
                    ?>
                        <div class="col-12 col-md-6">
                            <div class="products_item">
                                <div class="row no-gutters">
                                    <div class="col-5 col-md-12">
                                        <a class="products_item_img" href="<?php the_permalink(); ?>">
                                            <img src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-7 col-md-12">
                                        <div class="products_item_content">
                                            <p class="products_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                            <p class="btn_badge_cate"><?php echo $firstCat->name; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                endwhile;
                ?>

                    <div class="col-12 mt-3">
                        <?php echo get_query_pagination(); ?>
                    </div>

                <?php
            else:
                // DO NOTHING
            endif;
            wp_reset_postdata();
            wp_reset_query();
        ?>
    </div>
</div>