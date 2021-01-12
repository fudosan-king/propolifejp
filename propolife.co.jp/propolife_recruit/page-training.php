<?php
global $temp_dir;
$dir_name = 'training';
?>
<?php
    $post_id = $post->ID;
    $page_title = get_the_title();
    $top_text = get_field('training_top_text');
    $btm_text = get_field('training_btm_text');
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/training/img_title_h2.png" alt="TRAINING" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/training/img_title_h2_sp.png" alt="TRAINING" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
    <div id="page_training">
        <h3>研修制度</h3>
        <p class="top_txt"><?php echo $top_text; ?></p>
        
        <div id="training_list">
            <ul>
<?php
while(the_repeater_field('training_repeater_field')):
    $list_title = get_sub_field('training_list_title');
    $list_text = get_sub_field('training_list_text');
    $list_image = wp_get_attachment_image_src(get_sub_field('training_list_image'), 'medium');
?>
                <li>
                    <div class="col_right">
                        <p><img src="<?php echo $list_image[0]; ?>" alt=""></p>
                    </div>
                    <div class="col_left">
                        <h4><?php echo $list_title; ?></h4>
                        <p><?php echo $list_text; ?></p>
                    </div>
                </li>
<?php endwhile; ?>
            </ul>
        </div><!-- // #training_list -->
        
        <p class="btm_txt"><?php echo $btm_text; ?></p>
    </div><!-- // #page_training -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>