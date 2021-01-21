<?php
      $point_page03 = get_page_by_path('point/point3');
      $point_id03 = $point_page03->ID;
      ?>
      <?php 
      $point_03_top_title = get_field('point_03_top_title', $point_id03);
      $point_03_top_desc = get_field('point_03_top_desc', $point_id03);
      ?>
      <div id="point03" class="section">
        <p class="img_title"><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_point03.png" alt="POINT 3"></p>
        <h4><?php echo $point_03_top_title; ?></h4>
        <div class="section_inner" style="height:auto;">
          <p class="top_desc"><?php echo $point_03_top_desc; ?></p>
          <div class="group_list">
            <?php
            while(have_rows('point_03_group_repeater_field', $point_id03)): the_row();
            $point_03_group_name_img = wp_get_attachment_image_src(get_sub_field('point_03_group_name_img'), 'large');
            $point_03_group_name_img_sp = wp_get_attachment_image_src(get_sub_field('point_03_group_name_img_sp'), 'large');
            ?>
            <div class="group_section">
              <p class="img_name"><img src="<?php echo $point_03_group_name_img[0]; ?>" alt="" class="pc"><img src="<?php echo $point_03_group_name_img_sp[0]; ?>" alt="" class="sp"></p>
              <div class="pic_group img_slider">
                <div class="img_inner">
                  <ul>
                    <?php
                    while(have_rows('point_03_group_pic_repeater_field', $point_id03)): the_row();
                    $point_03_group_pic = wp_get_attachment_image_src(get_sub_field('point_03_group_pic'), 'large');
                    ?>
                    <li><img src="<?php echo $point_03_group_pic[0]; ?>" alt=""></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div><!-- // .section_inner -->
	<!-- <p class="btn_detail on"></p> -->
      </div><!-- // #point03 -->