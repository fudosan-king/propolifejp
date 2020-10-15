<div class="col-12 col-lg-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="box_article_detail">
        <h1 class="d-md-block"><?php echo the_title(); ?></h1>

        <div class="col-12">

            <?php echo the_content(); ?>
        </div>

        <p class="update_date">
            公開日 <?php echo get_the_time('Y年m月d日') ?> <br>
            更新日 <?php echo get_the_modified_time('Y年m月d日') ?></p>
        <div class="d-block d-lg-flex mb-5">
            <a href="https://lmp1.net/3b6ughk0aqghkd5asjlvtmakot16kxcd/contacts/new" class="btn btn_documentrequest flex-fill text-white">資料請求</a>
            <a href="https://lmp1.net/onl4aktwd2f3poxzihr9ms4vlyklsonf/contacts/new" class="btn btn_contactus flex-fill mr-0 text-white">お問い合わせ</a>
        </div>
    </div>
    <div class="box_relation_article">
            <h2>関連記事</h2>
            <div class="carousel carousel_relation_article" data-flickity='{ "groupCells": true, "pageDots": false }'>

                <?php
                $related = get_posts(
	                array(
		                'category__in' => wp_get_post_categories( get_the_ID() ),
		                'numberposts'  => 5,
		                'post_status' => 'publish',
		                'orderby'      => 'publish_date',
		                'order'        => 'DESC',
		                'post__not_in' => array( get_the_ID() )
	                )
                );
                if( $related ) : foreach( $related as $post ) : setup_postdata($post); ?>
                    <div class="carousel-cell">
                        <div class="box_relation_article_item">
                            <div class="carousel_relation_article_img">
                                <a href="<?php echo get_post_permalink($post->ID) ?>"><img src="<?php echo get_the_post_thumbnail($post->ID) ?>" alt="" class="img-fluid"></a>
                            </div>
                            <p><?php echo $post->post_title ?></p>
                        </div>
                    </div>
                <?php wp_reset_postdata(); endforeach; endif; ?>

            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>