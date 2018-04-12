<div class="content_about">
    <div class="about">
        <div class="about_title">
            <h3>
                <?php
                    if(class_exists('MultiPostThumbnails')){
                        $image_name = 'abouts-title-image';
                        if(MultiPostThumbnails::has_post_thumbnail('abouts', $image_name)){
                            $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'abouts', $image_name, $post->ID );
                            $image = wp_get_attachment_image( $image_id, 'full');
                            echo $image;
                        }
                    }

                    $front_title = get_post_meta($post->ID, 'about_front_title', true);
                    echo !empty($front_title)?"<span>".$front_title."</span>":"";
                    the_title();
                ?>
            </h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <?php
                    $intoTitle = get_post_meta($post->ID, 'about_intro_title', true);
                    echo !empty($intoTitle)?"<br><br><br><br><h3>".$intoTitle."</h3><br><br><br><br>":"";

                 ?>

                <p>
                    <?php the_content(); ?>
                </p>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

                <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
                <img src="<?php echo $img[0]; ?>" alt="" align="right" >
            </div>
        </div>
    </div>

</div>
