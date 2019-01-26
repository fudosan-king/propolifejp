<?php
global $temp_dir;
$dir_name = 'faq';
?>
<?php
    $page_title = get_the_title();
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/faq/img_title_h2.png" alt="FAQ" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/faq/img_title_h2_sp.png" alt="FAQ" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
        <div class="title_copy">
            <?php echo get_field('faq_top_copy'); ?>
        </div>
    </div>
    
    <div id="page_faq">
<?php
$row_num = 1;
while(the_repeater_field('faq_repeater_field')):
    $faq_title = get_sub_field('faq_title');
?>
        <div class="section">
            <h3><?php echo $faq_title; ?></h3>
            <ul>
<?php
while(the_repeater_field('faq_repeater_sub_field')):
    $faq_sub_title = get_sub_field('faq_sub_title');
    $faq_sub_text = get_sub_field('faq_sub_text');
    $faq_sub_image = wp_get_attachment_image_src(get_sub_field('faq_sub_image'), 'medium');
?>
                <li>
                    <dl<?php if($row_num >= 10): ?> class="o10"<?php endif; ?>>
                        <dt class="ques"><p class="num"><?php echo $row_num; ?></p><p class="title"><?php echo $faq_sub_title; ?></p></dt>
                        <dt class="ans"><p class="num"><?php echo $row_num; ?></p></dt><dd class="ans"><p><?php echo $faq_sub_text; ?></p><?php if(!empty($faq_sub_image)): ?><p class="img"><img src="<?php echo $faq_sub_image[0]; ?>" alt=""></p><?php endif; ?></dd>
                    </dl>
                </li>
<?php $row_num += 1; endwhile; ?>
            </ul>
        </div>
<?php endwhile; ?>
    </div><!-- // #page_faq -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>

<?php get_footer(); ?>