<div id="main-content">
    <section class="extra-content">
        <div id="section_title">
            <h2>
                <?php if (file_exists(SGVinK::get_images_path().'/archive/'.$post->post_type.'.png')): ?>
                    <img style="height: 30px;" src="<?php echo SGVinK::get_images_uri().'/archive/'.$post->post_type.'.png'; ?>">
                <?php endif; ?>

                <?php if (file_exists(SGVinK::get_images_path().'/archive/'.$post->post_type.'-long.png')): ?>
                    <img class="spec" src="<?php echo SGVinK::get_images_uri().'/archive/'.$post->post_type.'-long.png'; ?>">
                <?php endif; ?>
            </h2></h2>
            <!-- <p class="ruby"><?php //the_title(); ?></p> -->
            <p class="line"></p>
        </div>

        <div id="contents_inner">

            <section class="news-content">

                <?php 
                if(have_posts()):
                    while(have_posts()): the_post();
                        $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
                        ?>
                            
                            <div class="news-data">
                                <div class="xcol dt-1">
                                    <?php echo date('Y-m-d ', get_post_time()); ?>
                                </div>
                                <div class="xcol dt-2">
                                    <?php echo get_taxonomy_custom_post_string( $post, 'news-cat' ); ?>
                                </div>
                                <div class="xcol dt-3">
                                    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title();  ?></a>
                                </div>
                            </div>               

                        <?php
                    endwhile;

                    ?>
                    <br>
                    <div class="d-flex justify-content-center"><?php sgvink_pagination(); ?></div>
                    <?php
                else:
                    ?>
                    <p>Posts not found.</p>
                    <?php
                endif;
                ?>
            </section>
        </div>
    </section>
</div>