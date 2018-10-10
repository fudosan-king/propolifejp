<?php
    $point_page = get_page_by_path('point/point4');
    $point_id = $point_page->ID;
?>
<?php 
$point_04_top_title = get_field('point_04_top_title', $point_id);
$point_04_top_desc = get_field('point_04_top_desc', $point_id);

$point_04_age_title = get_field('point_04_age_title', $point_id);
$point_04_age_desc = get_field('point_04_age_desc', $point_id);

$point_04_age_sub_01_title = get_field('point_04_age_sub_01_title', $point_id);
$point_04_age_sub_01_img_pc = wp_get_attachment_image_src(get_field('point_04_age_sub_01_img_pc', $point_id), 'large');
$point_04_age_sub_01_img_sp = wp_get_attachment_image_src(get_field('point_04_age_sub_01_img_sp', $point_id), 'large');

$point_04_age_sub_02_title = get_field('point_04_age_sub_02_title', $point_id);
$point_04_age_sub_02_img_pc = wp_get_attachment_image_src(get_field('point_04_age_sub_02_img_pc', $point_id), 'large');
$point_04_age_sub_02_img_sp = wp_get_attachment_image_src(get_field('point_04_age_sub_02_img_sp', $point_id), 'large');

$point_04_age_sub_03_title = get_field('point_04_age_sub_03_title', $point_id);
$point_04_age_sub_03_img_pc = wp_get_attachment_image_src(get_field('point_04_age_sub_03_img_pc', $point_id), 'large');
$point_04_age_sub_03_img_sp = wp_get_attachment_image_src(get_field('point_04_age_sub_03_img_sp', $point_id), 'large');
$point_04_age_sub_03_inner_title = get_field('point_04_age_sub_03_inner_title', $point_id);
$point_04_age_sub_03_inner_desc = get_field('point_04_age_sub_03_inner_desc', $point_id);
?>
        <div id="point04" class="section">
            <p class="img_title"><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_point04.png" alt="POINT 4"></p>
            <h4><?php echo $point_04_top_title; ?></h4>
            
            <div class="section_inner" style="height:auto;">
                <p class="top_desc"><?php echo $point_04_top_desc; ?></p>
                
                <div class="section_age_top">
                    <h4 class="line"><span><?php echo $point_04_age_title; ?></span></h4>
                    <div class="age_top_desc"><?php echo $point_04_age_desc; ?></div>
                </div>
                
                <div class="section_age">
                    <h3><?php echo $point_04_age_sub_01_title; ?></h3>
                    <div class="age_content">
                        <p class="img"><img src="<?php echo $point_04_age_sub_01_img_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $point_04_age_sub_01_img_sp[0]; ?>" alt="" class="sp"></p>
                    </div>
                </div>
                
                <div class="section_age">
                    <h3><?php echo $point_04_age_sub_02_title; ?></h3>
                    <div class="age_content">
                        <p class="img"><img src="<?php echo $point_04_age_sub_02_img_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $point_04_age_sub_02_img_sp[0]; ?>" alt="" class="sp"></p>
                    </div>
                </div>
                
                <div class="section_age">
                    <h3><?php echo $point_04_age_sub_03_title; ?></h3>
                    <div class="age_content">
                        <p class="img"><img src="<?php echo $point_04_age_sub_03_img_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $point_04_age_sub_03_img_sp[0]; ?>" alt="" class="sp"></p>
                        <div class="age_content_inner">
                            <h4 class="line"><span><?php echo $point_04_age_sub_03_inner_title; ?></span></h4>
                            <div class="desc"><?php echo $point_04_age_sub_03_inner_desc; ?></div>
                        </div>
                    </div>
                </div>
                
            </div><!-- // .section_inner -->
            <!-- <p class="btn_detail on"></p> -->
        </div><!-- // #point04 -->