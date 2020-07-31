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
        <h2><img src="<?php echo $temp_dir; ?>/common/images/benefit/img_title_h2.png" alt="BENEFITS" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/benefit/img_title_h2_sp.png" alt="BENEFITS" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
    
    <div id="page_benefit">
        <div class="benefit_content">
            <?php echo get_field('benefit_content'); ?>
        </div>
        <div id="employ" style="display: none;"></div>
        <div id="benefit_list">
            <?php
                while(the_repeater_field('benefit_repeater_field')):
                $list_title = get_sub_field('benefit_list_title');
                ?>
            <div class="benefit-are">
                <div class="benefit-title">
                    <h3><?php echo $list_title; ?></h3>
                </div>
                <div class="benefit-notification">
                    <?php 
                        while(the_repeater_field('benefit_list_group')): 
                        $list_subject = get_sub_field('benefit_list_subject');
                        $list_text = get_sub_field('benefit_list_text');
                    ?>
                    <div class="benefit-group">
                        <div class="benefit-subject"><?php echo $list_subject; ?></div>
                        <div class="benefit-text"><?php echo $list_text; ?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div><!-- // #benefit_list -->
        
    </div><!-- // #page_benefit -->


</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>