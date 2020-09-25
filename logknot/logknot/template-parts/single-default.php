<?php 
if(have_posts()):
    while(have_posts()): the_post();
        $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
        $caption = wp_get_attachment_caption( get_post_thumbnail_id() );
    ?>              
        <p class="date"><?php the_date(); ?></p>
        <h3><?php the_title(); ?></h3>
        <?php if(!empty($thumbnails)){ ?>
            <div class="news_content_img">
                <img src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  class="img-fluid">
            </div>
        <?php } ?>
        <?php the_content(); ?>      
    <?php
    endwhile;
endif;
?>