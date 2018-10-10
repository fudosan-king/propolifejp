<?php
global $temp_dir;
$dir_name = 'benefit';
?>
<?php
    $page_title = get_the_title();
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/benefit/img_title_h2.png" alt="FAMILY BENEFIT" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/benefit/img_title_h2_sp.png" alt="FAMILY BENEFIT" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
    
    <div id="page_benefit">
        <div class="benefit_content">
            <?php echo get_field('benefit_content'); ?>
        </div>
        <div id="employ"></div>
        <div id="benefit_list">
            <ul>
                <?php
                while(the_repeater_field('benefit_repeater_field')):
                $list_title = get_sub_field('benefit_list_title');
                $list_text = get_sub_field('benefit_list_text');
                $list_image = wp_get_attachment_image_src(get_sub_field('benefit_list_image'), 'medium');
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
        </div><!-- // #benefit_list -->
        
    </div><!-- // #page_benefit -->


</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>