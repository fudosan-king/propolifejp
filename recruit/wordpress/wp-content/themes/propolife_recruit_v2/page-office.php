<?php
global $temp_dir;
$dir_name = 'office';
?>
<?php
    $page_title = get_the_title();
    $office_top_copy = get_field('office_top_copy');
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/office/img_title_h2.png" alt="OFFICE" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/office/img_title_h2_sp.png" alt="OFFICE" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
        <div class="title_copy">
            <?php echo $office_top_copy; ?>
        </div>
    </div>
    
    <div id="page_office">
        <div class="img_slider auto_slide">
            <ul>
<?php
while(the_repeater_field('office_slider_repeater_field')):
$office_slider_image = wp_get_attachment_image_src(get_sub_field('office_slider_image'), 'large');
                $office_slider_caption = get_sub_field('office_slider_caption');
                $office_slider_title = get_sub_field('office_slider_title');
                ?>
                <li>
                    <h3><?php echo $office_slider_title; ?></h3>
                    <p class="pic"><img src="<?php echo $office_slider_image[0]; ?>" alt="<?php echo $office_slider_caption; ?>"></p>
                    <!--<p class="caption"><?php echo $office_slider_caption; ?></p>-->
                </li>
<?php endwhile; ?>
            </ul>
        </div>
        
        <!--
        <div id="other_office">
            <h3>その他オフィス等</h3>
            <div class="office_list">
                <ul>
<?php
$num = 0;
while(the_repeater_field('office_other_repeater_field')):
$office_other_image = wp_get_attachment_image_src(get_sub_field('office_other_image'), 'large');
$office_other_name = get_sub_field('office_other_name');
$office_other_url = get_sub_field('office_other_url');
?>
                    <li<?php if($num % 2 == 1): ?> class="right"<?php endif; ?>>
                        <a href="<?php echo $office_other_url; ?>" target="_blank">
                            <p class="pic"><img src="<?php echo $office_other_image[0]; ?>" alt="<?php echo $office_other_name; ?>"></p>
                            <p class="name"><?php echo $office_other_name; ?></p>
                        </a>
                    </li>
<?php $num += 1; endwhile; ?>
                </ul>
            </div>
        </div>
        -->
        
    </div><!-- // #page_office -->
    
</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>