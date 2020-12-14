
<div class="each_boxright">
    <h2>人気イベントランキング</h2>
    <div class="each_boxright_content">
        <?php

            $post__in = get_recommend_events_ids();

            $ts = array(
                'post_type'         =>      'events',
                'post__in'          =>      $post__in,
            );

            $query = new WP_Query( $ts );

            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                    $query->the_post();

                    ?>
                        <article class="article_items">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <a href="<?php the_permalink(); ?>" class="article_items_img">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" title="<?php the_title(); ?>" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="article_items_content">
                                        <p class="article_items_name"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></p>
                                        <span class="badge badge-secondary badge_cate"><?php echo $post->firstCat;?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php 

                }

            }
            wp_reset_postdata();
            wp_reset_query();

        ?>
    </div>
</div>