<?php 
global $detect;                   
if(have_posts()):
    while(have_posts()): the_post();
        
        $post_id = get_the_ID();
        $cat_ids = array();
        $categories = get_the_category();
        if(!empty($categories)){
            foreach($categories as $cat){
                array_push($cat_ids, $cat->term_id);
            }
        }
        $current_post_type = get_post_type();
        $posts_per_page = $detect->isMobile()?3:6;
        $args = array(
            
            'post__not_in' => array( $post_id ),
            'category__in'     => $cat_ids,
            'post_type'   =>  $post->post_type,
            'post_status' => $post->post_status,
            'posts_per_page'         => $posts_per_page,
    
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
            ?>
                <!-- <div class="box_relation_article">
                    <h2>関連記事</h2>
                    <div class="carousel carousel_relation_article" data-flickity='{ "groupCells": true, "pageDots": false, "freeScroll": true, "wrapAround": true }'>
                        <?php
                        // while($query->have_posts()): $query->the_post();
                        //     $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
                        //     ?>
                        //         <div class="carousel-cell">
                        //             <a class="relation_article_img" href="<?php //the_permalink(); ?>" target="_blank">
                        //                 <img data-src="<?php //echo $thumbnails->url;?>" alt="<?php //the_title(); //alt but get post title?>" title="<?php //the_title(); //alt but get post title?>" class="img-fluid">
                        //             </a>
                        //             <p><?php //the_title(); ?></p>
                        //         </div>                            
                        //     <?php
                        // endwhile;
                        ?>
                    </div>
                </div> -->

                <div class="box_relation_article">
                    <h2>関連記事</h2>
                    <div class="box_relation_article_item">
                        <div class="row">
                        <?php
                            while($query->have_posts()): $query->the_post();
                                $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
                                $articles_id = get_the_ID();
                                // var_dump(get_the_category());
                                // $firstCat = (!empty(get_the_category($articles_id)) && count(get_the_category($articles_id))) ?get_the_category($articles_id)[0]->name :'';
                        ?>
                            <div class="col-12 col-lg-6">
                                <div class="relation_article_item">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <a class="relation_article_img" href="<?php the_permalink(); ?>?from=related" rel="noopener noreferrer">
                                                <img data-src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="relation_article_content">
                                                <p>
                                                    <a href="<?php the_permalink(); ?>?from=related"><?php the_title(); ?></a>
                                                    <?php // the_title(); ?>
                                                </p>
                                                <span class="badge badge-secondary badge_cate"><?php echo get_the_category()[0]->name; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                        </div>
                    </div>
                </div>
            <?php
            wp_reset_query();
            wp_reset_postdata();
        endif;
    endwhile;
endif;
?>