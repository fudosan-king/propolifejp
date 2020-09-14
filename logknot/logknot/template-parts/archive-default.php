
<div class="w_box_article_basic">
    <div class="box_article_main_items">
        <?php 
        if(have_posts()):
            while(have_posts()): the_post();
                $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
                $firstCat = get_the_category()[0];
                ?>

                    <article class="article_main_items">
                        <div class="row no-gutters">
                            <div class="col-3">
                                <a href="<?php the_permalink(); ?>" class="article_main_items_img">
                                    <img data-src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-9">
                                <div class="article_main_items_content">
                                    <p class="article_main_items_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    <span class="badge badge-secondary badge_cate"><?php echo $firstCat->name; ?></span>
                                </div>
                            </div>
                        </div>
                    </article>
                
                <?php
            endwhile;
            $pagination = get_query_pagination();
        endif;
        ?>
    </div>

    <div class="col-12 mt-5">
        <?php echo $pagination; ?>
    </div>
</div>