<?php
global $current_lang;
$dir_name = 'main';
$dir_category = 'business';
?>
<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/main/img_title_h2.png" alt="BUSINESS"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">

        <?php
            $loop_num = 0;
            while(the_repeater_field('business_table')):
            $business_type = get_sub_field('type_name');
        ?>
        <div id="main<?php echo $loop_num; ?>" class="section">
            <h3 class="type"><?php echo $business_type; ?></h3>
            <ul>
                <?php
                    $row_num = 0;
                    $loop_num += 1;
                    while(the_repeater_field('type_table')):
                    $main_image = wp_get_attachment_image_src(get_sub_field('main_image'), 'large');
                    $logo_image = wp_get_attachment_image_src(get_sub_field('logo_image'), 'large');
                    $title_en = get_sub_field('title_en');
                    $title_ja = get_sub_field('title_ja');
                    $title02 = get_sub_field('title02');
                    $description = get_sub_field('description');
                    $more_link = get_sub_field('more_link');
                    $logo_alt = str_replace('  ', ' ', str_replace(array("\r\n","\n","\r", "<br />"), ' ', $title_en));
                    $col_direction = ($row_num % 2 == 1)? true: false;
                ?>
                <li id="main<?php echo $loop_num; ?>"<?php if($col_direction): echo ' class="right"'; endif; ?>>
                    <div class="col_left">
                        <?php if(!empty($main_image)): ?><p class="pic"><img src="<?php echo $main_image[0]; ?>" alt="<?php echo $title_ja; ?>"></p><?php endif; echo "\n"; ?>
                        <?php if(!empty($logo_image)): ?><p class="logo"><img src="<?php echo $logo_image[0]; ?>" alt="<?php echo $logo_alt; ?>"></p><?php endif; echo "\n"; ?>
                    </div>
                    <div class="col_right">
                        <?php if(!empty($title_en)): ?><h3><?php echo $title_en; ?></h3><?php endif; echo "\n"; ?>
                        <?php if(!empty($title_ja)): ?><p class="title"><span class="title_ja"><?php echo $title_ja; ?></span><span class="ruby"><?php echo $title02; ?></span><?php endif; echo "\n"; ?>
                        <?php if(!empty($description)): ?>
                            <div class="desc">
                                <p><?php echo $description; ?></p>
                                <?php if(!empty($more_link)): ?><p class="btn_more"><a href="<?php echo $more_link; ?>" target="_blank">MORE</a></p><?php endif; echo "\n"; ?>
                            </div>
                        <?php endif; echo "\n"; ?>
                    </div>
                    <div class="more_link">
                    <?php if(!empty($more_link)): ?><p class="btn_more_sp hidden"><a href="<?php echo $more_link; ?>" target="_blank">MORE</a></p><?php endif; echo "\n"; ?>
                    </div>
                </li>
                <?php $row_num += 1; $loop_num += 1; endwhile; ?>
            </ul>
        </div>
        <?php endwhile; ?>

        <!--
         <div class="section_other">
            <ul>
                <?php
                    $row_num = 0;
                    while(the_repeater_field('business_table_etc')):
                    $etc_title = get_sub_field('etc_title');
                    $etc_title02 = get_sub_field('etc_title02');
                    $etc_description = get_sub_field('etc_description');
                    $more_link = get_sub_field('more_link');
                ?>
                <li id="main<?php echo $loop_num; ?>">
                    <?php if(!empty($etc_title)): ?><h3><?php echo $etc_title; ?><span><?php echo $etc_title02; ?></span></h3><?php endif; echo "\n"; ?>
                    <?php if(!empty($etc_description)): ?>
                        <div class="desc">
                            <p><?php echo $etc_description; ?></p>
                            <?php if(!empty($more_link)): ?><p class="btn_more"><a href="<?php echo $more_link; ?>" target="_blank">MORE</a></p><?php endif; echo "\n"; ?>
                        </div>
                    <?php endif; echo "\n"; ?>

                </li>
                <?php $row_num += 1; $loop_num += 1; endwhile; ?>
            </ul>
        </div>
        -->

    </div>
 </div><!-- // #contents -->
<?php get_footer(); ?>