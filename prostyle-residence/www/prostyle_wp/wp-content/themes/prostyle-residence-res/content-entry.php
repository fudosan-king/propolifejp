
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 entry">
    <div class="entry_inside">
<?php
    $entry_link = get_post_meta($post->ID, 'entry_link', true);
    $entry_reservation_link = get_post_meta($post->ID, 'entry_reservation_link', true);
    $entry_seikyuu_link = get_post_meta($post->ID, 'entry_seikyuu_link', true);
    $entry_desc = get_post_meta($post->ID, 'entry_description', true);

    if(class_exists('MultiPostThumbnails')){
        $image_name = 'entris-status-image';
        if(MultiPostThumbnails::has_post_thumbnail('entries', $image_name)){
            $image_id = MultiPostThumbnails::get_post_thumbnail_id('entries', $image_name, $post->ID);
            $image = wp_get_attachment_image_src($image_id, 'full');
            ?>
                <img src="<?php echo $image[0]; ?>" width="100" style="margin-bottom: 10px;" alt="販売中" title="販売中">
            <?php
        }else{
            ?>
                <div style="margin-bottom: 10px; heigth: 29.62px;">&nbsp;</div>
            <?php
        }
    }

    if(class_exists('MultiPostThumbnails')){
        $image_name = 'abouts-title-image';
        if(MultiPostThumbnails::has_post_thumbnail('abouts', $image_name)){
            $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'abouts', $image_name, $post->ID );
            $image = wp_get_attachment_image( $image_id, 'full');
            echo $image;
        }
    }

 ?>



    <h3><a href="<?php echo $entry_link; ?>" target="_blank"><?php the_title(); ?></a></h3>

    <div class="content">

        <div class="entry_img extra">
            <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
            <a href="<?php echo $entry_link; ?>" target="_blank"><img src="<?php echo $img[0]; ?>" class="entry_img01" alt="<?php the_title(); ?>"></a>
        </div>

        <div class="content_text">
            <?php the_content(); ?>
        </div>
        <div class="entry_img pri">
            <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
            <a href="<?php echo $entry_link; ?>" target="_blank"><img src="<?php echo $img[0]; ?>" class="entry_img01" alt="<?php the_title(); ?>"></a>
        </div>

        <div class="shousai">
            <?php echo $entry_desc; ?>
        </div>

        <?php
            if(!empty($entry_seikyuu_link)){
                ?>
                    <a href="<?php echo $entry_seikyuu_link; ?>" target="_blank"><div class="bt_seikyuu">資料請求</div></a>
                <?php
            }

            if(!empty($entry_reservation_link)){
                ?>
                    <a href="<?php echo $entry_reservation_link; ?>" target="_blank"><div class="bt_reservation">来場予約</div></a>
                <?php
            }
         ?>


        <br style="clear: both;">
        <?php
            if(!empty($entry_link)){
                ?>
                    <a href="<?php echo $entry_link; ?>" target="_blank"><div class="bt_site">物件公式サイトへ</div></a>
                <?php
            }
         ?>

    </div>
    </div>
</div>
