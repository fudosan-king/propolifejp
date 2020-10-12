<section class="section_recomend">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title">RECOMMEND</h2>
                <ul class="list_recomend">
                    <?php
                    $recommend = get_posts([
                        'numberposts'	=> 10,
                        'post_type'		=> 'post',
                        'meta_query'    => [
                        [
                            'key'	  	=> 'recommend',
                            'value'	  	=> 'yes',
                            'compare' 	=> 'LIKE',
                        ]
                        ]
                    ]);
                    if( $recommend ) : foreach( $recommend as $post ) : setup_postdata($post); $category = get_the_category($post->ID)[0];?>
                        <li>
                            <div class="box_recomend_item">
                                <div class="box_recomend_item_img">
                                    <a href="<?php echo get_post_permalink($post->ID) ?>"><img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id( $post->ID )) ?>" alt="" class="img-fluid"></a>
                                </div>
                                <p class="tag"><span class="" style="background: <?php echo get_field('color_label', $category) ?>"><?php echo get_cat_name($category->term_id) ?></span></p>
                                <p class="box_recomend_item_content"><a href="<?php echo get_post_permalink($post->ID) ?>"><?php echo acf_get_post_title($post->ID) ?></a></p>
                            </div>
                        </li>
                    <?php endforeach; endif; wp_reset_postdata();?>
                </ul>
            </div>
        </div>
    </div>
</section>