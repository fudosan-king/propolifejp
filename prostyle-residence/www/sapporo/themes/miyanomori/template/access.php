<?php
/* 
Template Name: Location
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<section class="section_subbanner">
    <div class="subbanner_img access-img"></div>
<!-- <img src="<?php //bloginfo('template_url'); ?>/assets/images/1x/bg_access.jpg" alt="" class="img-fluid"> -->
</section>
<main>
    <section class="section_access">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="box_map">
                        <h2 class="title"><?php the_field('access_heading'); ?></h2>
                        <div class="box_map_img"></div>
                        <div class="row">

                            <div class="box_map_info-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/info-img.jpg" alt="" title="">
                            </div>

                            <div class="info_location">
                                <?php $acc_location_1 = get_field('acc_location_1'); ?>
                                <div class="info_location-box">
                                    <?php echo $acc_location_1['location_info']; ?>
                                </div>
                                <a class="btn btnCheckgoogle" target="_blank" href="https://goo.gl/maps/VhfZv7pSYdjR51QbA"><span><?php echo $acc_location_1['button_text'] ?></span></a>
                            </div>

                            <div class="box_map_info-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/info-img1.jpg" class="img-fluid" alt="" title="">
                            </div>

                            <div class="info_location">
                                <?php $acc_location_2 = get_field('acc_location_2'); ?>
                                <div class="info_location-box">
                                    <?php echo $acc_location_2['location_info']; ?>
                                </div>
                                <a class="btn btnCheckgoogle" target="_blank" href="https://g.page/SAPPOROGRAND?share"><span><?php echo $acc_location_2['button_text']; ?></span></a>
                            </div>

                        </div>
                        <div class="box_schedule">
                            <div class="row">
                                <!-- Table 1 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_1 = get_field('acc_table_1'); $table_content = $acc_table_1['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_1['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Table 2 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_2 = get_field('acc_table_2'); $table_content = $acc_table_2['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_2['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Table 3 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_3 = get_field('acc_table_3'); $table_content = $acc_table_3['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_3['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Table 4 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_4 = get_field('acc_table_4'); $table_content = $acc_table_4['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_4['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Table 5 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_5 = get_field('acc_table_5'); $table_content = $acc_table_5['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_5['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Table 6 -->
                                <div class="col-12 col-lg-4">
                                    <?php $acc_table_6 = get_field('acc_table_6'); $table_content = $acc_table_6['table_content']; ?>
                                    <p class="title-utilities"><?php echo $acc_table_6['title']; ?></p>
                                    <table class="table">
                                        <tbody>
                                            <?php 
                                            foreach ($table_content as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $value['head_text']; ?></th>
                                                        <td><?php echo $value['data']; ?></td>
                                                    </tr>
                                                <?php
                                            }

                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 
 
                    <h2 class="title"><?php the_field('box_station_title_1') ?></h2>
                    <h3><?php the_field('box_station_title_2') ?></h3>
                    <div class="box_station">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/img_routemap.png" alt="" class="img-fluid w-100">
                                <p class="note"><?php the_field('note_route_map'); ?></p>
                            </div>
                            <div class="col-12 col-lg-5">

                                <?php $box_station_item_1 = get_field('box_station_item_1'); ?>
                                <div class="box_station_item">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-6">
                                            <h4><?php echo $box_station_item_1['title']; ?></h4>
                                            <p><?php echo $box_station_item_1['description'] ?></p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/odori_station.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>

                                <?php $box_station_item_2 = get_field('box_station_item_2'); ?>
                                <div class="box_station_item">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-6">
                                            <h4><?php echo $box_station_item_2['title']; ?></h4>
                                            <p><?php echo $box_station_item_2['description'] ?></p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/odori_station1.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>

                                <?php $box_station_item_3 = get_field('box_station_item_3'); ?>
                                <div class="box_station_item">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-6">
                                            <h4><?php echo $box_station_item_3['title']; ?></h4>
                                            <p><?php echo $box_station_item_3['description'] ?></p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/airport_chitose.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="access_sightseeing">
                <?php $access_section = get_field('access_section'); $table_access = $access_section['table_content']; ?>
                <h3><?php echo $access_section['title']; ?></h3>
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="access_table">
                            <p><?php echo $access_section['table_title']; ?></p>
                            <table class="table">
                                <tbody>
                                    <?php 
                                    foreach ($table_access as $key => $value) {
                                        ?>
                                            <tr>
                                                <th><span><?php echo $value['head_text']; ?></span></th>
                                                <td><span><?php echo $value['data']; ?></span></td>
                                            </tr>
                                        <?php
                                    }

                                     ?>
                                </tbody>
                            </table>
                            <p class="note"><?php echo $access_section['table_note']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="access_block-img">
                            <div class="access_img">
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/main/access-cool-1.jpg" alt="" title="">
                            </div>
                            <div class="access_img">
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/main/access-cool-2.jpg" alt="" title="">
                            </div>
                            <div class="access_img">
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/main/access-cool-3.jpg" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>