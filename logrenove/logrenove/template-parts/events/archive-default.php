<div class="box_event_content">
    <div class="row">
        <?php 
        $posts = get_events();
        if($posts) {
        if($posts->have_posts()):
            while($posts->have_posts()): $posts->the_post();
                $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
                $tags = get_the_terms(get_the_ID(), 'event_tags');
                $even_datetime = get_event_datetime();
                ?>
            <div class="col-12 col-lg-4">
                <div class="box_event_item">
                    <div class="box_event_item_img">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnails->url;?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="box_event_item_content">
                        <ul>
                            <?php 
                            foreach ( $tags as $tag ) {
                            $tag_link = get_tag_link( $tag->term_id );
                            ?>
                                <li><a href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a></li>
                            <?php } ?>
                        </ul>
                        <a class="goto_frm_services" href="<?php the_permalink(); ?>">
                            <!-- <p class="online_seminar">オンラインリノベセミナー</p> -->
                            <h3><?php the_title();?></h3>
                        </a>
                        <p class="time"><?php echo $even_datetime['date'].' '.$even_datetime['time'] ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn_eventdetail">イベントの詳細を見る</a>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            $pagination = get_query_pagination_events(array(), $posts->max_num_pages);
        endif;
        wp_reset_query();
        ?>
    </div>
    <?php echo $pagination;} ?>
    <!-- <nav class="my-5" aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">◀︎</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">▶︎</span>
                </a>
            </li>
        </ul>
    </nav> -->

</div>
