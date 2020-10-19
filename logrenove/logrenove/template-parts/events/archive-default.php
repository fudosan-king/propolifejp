<div class="box_event_content">
    <?php 
    $posts = get_events();
    if($posts) {
    if($posts->have_posts()):
        while($posts->have_posts()): $posts->the_post();
            $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
            $tags = get_the_terms(get_the_ID(), 'event_tags');
            $even_datetime = get_event_datetime();
            ?>
    <div class="box_event_itemv2">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="row no-gutters">
                    <div class="col-4 col-lg-12">
                        <div class="box_event_item_img">
                            <a href="<?php the_permalink(); ?>"><img data-src="<?php echo $thumbnails->url;?>" alt="" class="img-fluid"></a>
                        </div>  
                    </div>
                    <div class="col-8 d-block d-lg-none">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <a href="<?php the_permalink(); ?>" class="box_event_item_content">
                    <div class="row flex-sm-column-reverse">
                        <div class="col-12 col-lg-12">
                            <h3 class="d-none d-lg-block"><?php the_title();?></h3>
                            <p><?php echo limit_event_content(get_the_content(), 180); ?></p>
                            <!-- <p>ご自宅から参加できる【オンライン相談会】<br>
                            外出を控えていらっしゃる方のために、急遽オンライン相談会の開催を決定いたしました。<br>
                            詳細テキストが入ります詳細テキストが入ります詳細テキストが入ります詳細テキストが入ります詳細テキストが入ります詳細テキ</p> -->
                        </div>
                        <div class="col-12 col-lg-12">
                            <ul class="list_sub_cate_event">
                                <?php 
                                foreach ( $tags as $tag ) {
                                $tag_link = get_tag_link( $tag->term_id );
                                ?>
                                    <li><a href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    </a><a href="<?php the_permalink(); ?>" class="btn btn_eventdetail2 d-block d-lg-none">イベントの詳細を見る</a>
                
            </div>
        </div>
    </div>
    <?php
        endwhile;
        $pagination = get_query_pagination_events($posts->max_num_pages);
        endif;
        wp_reset_postdata();
        wp_reset_query();
    ?>
    <?php echo $pagination;} ?>
</div>