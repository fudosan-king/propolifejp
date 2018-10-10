<?php
    $point_page = get_page_by_path('point/point5');
    $point_id = $point_page->ID;
?>
<?php 
$point_05_top_title = get_field('point_05_top_title', $point_id);
$point_05_main_text = get_field('point_05_main_text', $point_id);
?>

        <div id="point05" class="section">
            <p class="img_title"><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_point05.png" alt="POINT 5"></p>
            <h4><?php echo $point_05_top_title; ?></h4>
            <div class="section_inner" style="height:auto;">
                <div class="desc"><?php echo $point_05_main_text; ?></div>
            </div><!-- // .section_inner -->
            <!-- <p class="btn_detail on"></p> -->
        </div><!-- // #point05 -->