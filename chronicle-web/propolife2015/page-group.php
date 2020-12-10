<?php
$dir_name = 'group';
$dir_category = 'business';
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/group/img_title_h2.png" alt="GROUP"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        
        <div id="section_group">
            <ul>
                <?php
                    $row_num = 0;
                    while(the_repeater_field('group_table')):
                    $main_image = wp_get_attachment_image_src(get_sub_field('main_image'), 'large');
                    $title = get_sub_field('title');
                    $title_etc = get_sub_field('title_etc');
                    $description = get_sub_field('description');
                    $more_link = get_sub_field('more_link');

                    $img_alt = str_replace('  ', ' ', str_replace(array("\r\n","\n","\r", "<br />"), ' ', $title));
                    $col_direction = ($row_num % 2 == 1)? true: false;
                ?>
                <li<?php if($col_direction): echo ' class="right"'; endif; ?>>
                    <div class="col_left">
                        <p class="pic"><img src="<?php echo $main_image[0]; ?>" width="280" height="280" alt="<?php echo $img_alt; ?>"></p>
                    </div>
                    <div class="col_right">
                        <?php if(!empty($title)): ?><h3><?php echo $title; ?><span class="type"><?php echo $title_etc; ?></span></h3><?php endif; echo "\n"; ?>
                        <?php if(!empty($description)): ?>
                            <div class="desc">
                                <p><?php echo $description; ?></p>
                                <?php if(!empty($more_link)): ?><p class="btn_more"><a href="<?php echo $more_link; ?>" target="_blank">MORE</a></p><?php endif; echo "\n"; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
                <?php $row_num += 1; endwhile; ?>
            </ul>
        </div>
    </div>
 </div><!-- // #contents -->
<?php get_footer(); ?>