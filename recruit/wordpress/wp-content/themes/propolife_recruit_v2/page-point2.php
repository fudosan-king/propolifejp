<?php
    $point_page = get_page_by_path('point/point2');
    $point_id = $point_page->ID;
?>
<?php
$point_02_top_title = get_field('point_02_top_title', $point_id);
$point_02_top_text = get_field('point_02_top_text', $point_id);
?>

<div id="point02" class="section">
            <p class="img_title"><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_point02.png" alt="POINT 2"></p>
            <h4><?php echo $point_02_top_title; ?></h4>
            <div class="section_inner" style="height:auto;">
                <p class="top_desc"><?php echo $point_02_top_text; ?></p>
                
                <div id="point02_brand">
<?php
while(have_rows('point_02_brand_repeater_field', $point_id)): the_row();
$point_02_brand_name = get_sub_field('point_02_brand_name');
$point_02_brand_name_img_pc = wp_get_attachment_image_src(get_sub_field('point_02_brand_name_img_pc'), 'large');
$point_02_brand_name_img_sp = wp_get_attachment_image_src(get_sub_field('point_02_brand_name_img_sp'), 'large');
$point_02_brand_desc = get_sub_field('point_02_brand_desc');
?>
                    <div class="section_brand">
                        <div class="col_desc">
                            <p class="brand_title"><?php echo $point_02_brand_name; ?></p>
                            <p class="name"><img src="<?php echo $point_02_brand_name_img_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $point_02_brand_name_img_sp[0]; ?>" alt="" class="sp"></p>
                            <p class="desc"><?php echo $point_02_brand_desc; ?></p>
                        </div>
                        <div class="col_img">
                            <div class="img_slider">
                                <div class="img_inner">
                                    <ul>
<?php
while(have_rows('point_02_brand_img_repeater_field', $point_id)): the_row();
$point_02_brand_img = wp_get_attachment_image_src(get_sub_field('point_02_brand_img'), 'large');
?>
                                        <li><img src="<?php echo $point_02_brand_img[0]; ?>" alt=""></li>
<?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="brand_detail">
                            <ul>
<?php
while(have_rows('point_02_brand_detail_repeater_field', $point_id)): the_row();
$point_02_brand_detail_desc = get_sub_field('point_02_brand_detail_desc');
$point_02_brand_detail_url = get_sub_field('point_02_brand_detail_url');
?>
                                <li>
                                    <a href="<?php echo $point_02_brand_detail_url; ?>" target="_blank">
                                        <p class="desc"><?php echo $point_02_brand_detail_desc; ?></p>
                                        <p class="btn_more"></p>
                                    </a>
                                </li>
<?php endwhile; ?>
                            </ul>
                        </div>
                    </div><!-- // .section_brand -->
<?php endwhile; ?>
                </div><!-- // #point02_brand -->

<?php
$point_02_btm_title = get_field('point_02_btm_title', $point_id);
?>
                <div id="point02_reason">
                    <h4 class="line"><span><?php echo $point_02_btm_title ;?></span></h4>
                    <div class="reason_list">
                        <ul>
<?php
while(have_rows('point_02_reason_repeater_field', $point_id)): the_row();
$point_02_reason_content_title = get_sub_field('point_02_reason_content_title');
$point_02_reason_content_desc = get_sub_field('point_02_reason_content_desc');
?>
                            <li>
                                <h5><?php echo $point_02_reason_content_title; ?></h5>
                                <p class="desc"><?php echo $point_02_reason_content_desc; ?></p>
                            </li>
<?php endwhile; ?>
                        </ul>
                    </div><!-- // .reason_list -->
                </div><!-- // #point02_reason -->
                
                <div id="point02_btm_img">
                    <div class="img_slider">
                        <div class="img_inner">
                            <ul>
<?php
while(have_rows('point_02_img_slide_repeater_field', $point_id)): the_row();
$point_02_img_slide_image = wp_get_attachment_image_src(get_sub_field('point_02_img_slide_image'), 'large');
?>
                                <li><img src="<?php echo $point_02_img_slide_image[0]; ?>" alt=""></li>
<?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div><!-- // .section_inner -->
            <!-- <p class="btn_detail on"></p> -->
        </div><!-- // #point02 -->