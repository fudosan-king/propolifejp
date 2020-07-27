<div class="box_content">
    <div class="about_content">
        <?php 
            if(have_posts()):
                while(have_posts()): the_post();
                    $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
                    ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="box_about_main_img">
                            <?php if(!empty($thumbnails)): ?>
                                <img src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid about_main_img">

                            <?php endif; ?>
                            <!-- <h2><img src="<?php //echo IMAGE_PATH; ?>/1x/logo_white.png" alt="logrenove_logo" class="img-fluid" width="149"></h2> -->
                        </div>
                        <?php the_content(); ?>
                    <?php
                endwhile;
            endif;
        ?>
    </div>
</div>