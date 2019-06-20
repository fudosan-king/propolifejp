<?php 
if(have_posts()):
    while(have_posts()): the_post();
        $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
        ?>

        <h3 class="sub_title"><?php the_title(); ?></h3>

        <div id="main-content">
            <div>
                <a href="#" class="date_post"><?php the_time(); ?></a>
            </div>
            <div class="img_feature">
                <?php if(!empty($thumnailImage)): ?>
                    <img class="img-fluid" src="<?php echo $thumnailImage; ?>"></img>
                <?php endif; ?>
            </div>
            <?php the_excerpt(); ?>
            
        </div>

        <?php
    endwhile;
    
    ?>
    <div class="d-flex justify-content-center"><?php sgvink_pagination(); ?></div>
    <?php
else:
    ?>
    <p>Posts not found.</p>
    <?php
endif;
?>