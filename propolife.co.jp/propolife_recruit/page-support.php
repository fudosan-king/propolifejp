<?php
global $temp_dir;
$dir_name = 'support';
?>
<?php
    $post_id = $post->ID;
    $page_title = get_the_title();
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/support/img_title_h2.png" alt="SUPPORT" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/support/img_title_h2_sp.png" alt="SUPPORT" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
    
    
    <div id="page_support">
        <div class="support_desc">
            <div><img src="<?php echo $temp_dir; ?>/common/images/support/img_logo_ok_mom.png" alt="OK, MOM"><?php echo get_field('support_top_desc'); ?></div>
        </div>
        <h3>OK, MOM!制度</h3>
        <p class="list_copy"><?php echo get_field('support_list_top_copy'); ?></p>
        <div class="support_list">
            <ul>
<?php
$row_num = 0;
while(the_repeater_field('support_list_repeater_field')):
    $support_list_title = get_sub_field('support_list_title');
    $support_list_desc = get_sub_field('support_list_desc');
    $support_list_voice = get_sub_field('support_list_voice');
    $support_list_image = wp_get_attachment_image_src(get_sub_field('support_list_image'), 'medium');;
    $support_list_image_sp = wp_get_attachment_image_src(get_sub_field('support_list_image_sp'), 'medium');
    $support_list_old = get_sub_field('support_list_old');
?>
<?php if(!$support_list_old): ?>
                <li<?php if($row_num % 2 == 1): ?> class="left"<?php endif; ?>>
                    <div class="description">
                        <h4><?php echo $support_list_title; ?></h4>
                        <div class="pic">
                            <p><img src="<?php echo $support_list_image[0]; ?>" alt="<?php echo $support_list_title; ?>" class="pc"><img src="<?php echo $support_list_image_sp[0]; ?>" alt="<?php echo $support_list_title; ?>" class="sp"></p>
                        </div>
                        <p class="desc"><?php echo $support_list_desc; ?></p>
                        <div class="voice">
                            <p><?php echo $support_list_voice; ?></p>
                        </div>
                    </div>
                </li>
<?php endif; ?>
<?php $row_num += 1; endwhile; ?>
            </ul>
            <p class="old_system">※2015年11月の新制度導入以前からある子育て支援制度がこちらです。</p>
<?php
while(the_repeater_field('support_list_repeater_field')):
    $support_list_title = get_sub_field('support_list_title');
    $support_list_desc = get_sub_field('support_list_desc');
    $support_list_voice = get_sub_field('support_list_voice');
    $support_list_image = wp_get_attachment_image_src(get_sub_field('support_list_image'), 'medium');
    $support_list_image_sp = wp_get_attachment_image_src(get_sub_field('support_list_image_sp'), 'medium');
    $support_list_old = get_sub_field('support_list_old');
?>
<?php if($support_list_old): ?>
                <li<?php if($row_num % 2 == 1): ?> class="left"<?php endif; ?>>
                    <div class="description">
                        <h4><?php echo $support_list_title; ?></h4>
                        <div class="pic">
                            <p><img src="<?php echo $support_list_image[0]; ?>" alt="<?php echo $support_list_title; ?>" class="pc"><img src="<?php echo $support_list_image_sp[0]; ?>" alt="<?php echo $support_list_title; ?>" class="sp"></p>
                        </div>
                        <p class="desc"><?php echo $support_list_desc; ?></p>
                        <div class="voice">
                            <p><?php echo $support_list_voice; ?></p>
                        </div>
                    </div>
                </li>
<?php endif; ?>
<?php $row_num += 1; endwhile; ?>
        </div>
    </div><!-- // #page_support -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>