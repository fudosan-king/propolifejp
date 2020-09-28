<section class="section_slide_promotions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel carousel_promotions" data-flickity='{ "wrapAround": true, "imagesLoaded": true }'>
                    <?php
                    $posts = get_posts([
                        'numberposts'	=> 3,
                        'post_type'		=> 'post',
                        'meta_query'    => [
                            'key'	  	=> 'enable_promotion',
                            'value'	  	=> '1',
                            'compare' 	=> '=',
                        ]
                    ]);
                    if ($posts) : foreach ($posts as $post) : $category = get_the_category($post->ID)[0];
                        ?>
                        <div class="carousel-cell">
                            <div class="row flex-row-reverse">
                                <div class="col-12 col-lg-7">
                                    <div class="carousel_promotions_img">
                                        <a href="<?php echo get_post_permalink($post->ID) ?>"><img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id( $post->ID ),'post-thumbnail-homepage-posts-slider') ?>" alt="<?php echo $post->post_title ?>" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <p class="tag"><span style="background: <?php echo get_field('color_label', $category) ?>"><?php echo get_cat_name($category->term_id) ?></span></p>
                                    <h2><?php echo $post->post_title ?></h2>
                                    <p class="date"><?php echo get_the_time('Y\.m\.d') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>