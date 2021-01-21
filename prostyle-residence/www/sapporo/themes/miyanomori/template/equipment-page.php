<?php
/* 
Template Name: Equipment
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<section class="section_subbanner">
    <div class="subbanner_img equipment-img-banner"></div>
</section>
<main>
    <section class="section_equipment">
        <div class="container">
            
            <div class="box_interview_banner">
                <a href="<?= home_url('message'); ?>"><img src="<?php bloginfo('template_directory');?>/assets/images/1x/interview_banner.png" alt="" class="img-fluid"></a>
            </div>
            <!-- Feature Section 1 -->
            <?php $feature_section_1 = get_field('feature_section_1'); ?>
            <div class="box_equipment_info clearfix">
                <div class="box_equipment_info_top">
                    <div class="row">
                        <div class="col-12 col-lg-6 align-self-center">
                            <h2><?php echo $feature_section_1['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-6 align-self-center">
                            <p><?php echo $feature_section_1['sub_title'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="box_equipment_info_img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi01.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <!-- Feature Section 2 -->
            <?php $feature_section_2 = get_field('feature_section_2'); ?>
            <div class="box_equipment_info clearfix">
                <div class="box_equipment_info_top">
                    <div class="row">
                        <div class="col-12 col-lg-6 align-self-center">
                            <h2><?php echo $feature_section_2['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-6 align-self-center">
                            <p><?php echo $feature_section_2['sub_title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="box_equipment_info_img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi02.jpg" alt="" class="img-fluid">
                </div>
                    <p class="mt-5"><?php echo $feature_section_2['description']; ?></p>
            </div>

            <!-- Feature Section 3 -->
            <?php $feature_section_3 = get_field('feature_section_3'); ?>
            <div class="box_equipment_info">
                <div class="box_equipment_info_top">
                    <div class="row">
                        <div class="col-12 col-lg-5 align-self-center">
                            <h2><?php echo $feature_section_3['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-7 align-self-center">
                            <p><?php echo $feature_section_3['sub_title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="box_equipment_info_img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi03.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <!-- Feature Section 4 -->
            <?php $feature_section_4 = get_field('feature_section_4'); ?>
            <div class="box_equipment_info">
                <div class="box_equipment_info_top mb-0">
                    <div class="row">
                        <div class="col-12 col-lg-6 align-self-center">
                            <div class="box_box_equipment_info_top_custom">
                                <h2><?php echo $feature_section_4['title']; ?></h2>
                                <p><?php echo $feature_section_4['sub_title']; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 align-self-center box_equipment_info_img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi04.jpg" alt="" class="img-fluid border-bottom">
                        </div>
                    </div>
                </div>
                <div class="equipment-img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi05.jpg" alt="" class="img-fluid border-bottom">
                </div>
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6 align-self-center">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi06.jpg" alt="" class="img-fluid border-right">
                    </div>
                    <div class="col-12 col-lg-6 align-self-center">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi08.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Feature Section 5 -->
            <?php $feature_section_5 = get_field('feature_section_5'); ?>
            <div class="box_equipment_info">
                <div class="box_equipment_info_top">
                    <div class="row">
                        <div class="col-12 col-lg-5 align-self-center">
                            <h2><?php echo $feature_section_5['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-7 align-self-center">
                            <p><?php echo $feature_section_5['sub_title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="equipment-img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/1x/equi07.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <!-- Feature Section 6 -->
            <?php $feature_section_6 = get_field('feature_section_6'); ?>
            <div class="box_equipment_info">
                <div class="box_equipment_info_top mb-0">
                    <div class="row">
                        <div class="col-12 col-lg-6 align-self-center">
                            <div class="box_box_equipment_info_top_custom">
                                <h2><?php echo $feature_section_6['title']; ?></h2>
                                <p><?php echo $feature_section_6['sub_title']; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 equipment-img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equi05.jpg" alt="" class="img-fluid border-bottom">
                        </div>
                    </div>
                    <a href="<?php echo home_url('/equipment/')?>" class="btn btn-equip"><span><?php echo $feature_section_6['button_text']; ?></span></a>
                </div>
            </div>

            <!-- Feature Section 7 -->
            <?php $feature_section_7 = get_field('feature_section_7'); ?>
            <div class="box_equipment_info">
                <div class="box_equipment_info_top mb-0">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-6 equipment-img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equi06.jpg" alt="" class="img-fluid border-bottom">
                        </div>
                        <div class="col-12 col-lg-6 align-self-lg-center">
                            <div class="box_box_equipment_info_top_custom">
                                <h2 class="mt-4"><?php echo $feature_section_7['title']; ?></h2>
                                <p><?php echo $feature_section_7['sub_title']; ?></p>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <a href="<?php echo home_url('/equipment/')?>" class="btn btn-equip"><span><?php echo $feature_section_7['button_text']; ?></span></a>
=======
                    <a href="<?php echo home_url('/equipment/')?>" class="btn btn-equip"><span><?php echo $feature_section_6['button_text']; ?></span></a>
>>>>>>> No. 125141 新規作成・リニュアル_業務依頼 （プロスタイル宮の森(仮)販売サイト作成) | front& back
                </div>
            </div>


            <!-- Feature Section 8 -->
            <?php $feature_section_8 = get_field('feature_section_8'); ?>
            <div class="box_equipment_info clearfix">
                <div class="box_equipment_info_top">
                    <div class="row">

                        <div class="col-12 col-lg-5 align-self-center">
                            <h2><?php echo $feature_section_8['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-7 align-self-center">
                            <p><?php echo $feature_section_8['sub_title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="equipment-img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/main/equi07.jpg" alt="" class="img-fluid">
                </div>
                <a href="<?php echo home_url('/equipment/')?>" class="btn btn-equip"><span><?php echo $feature_section_8['button_text']; ?></span></a>
            </div>

            <!-- Feature Section 9 -->
            <?php $feature_section_9 = get_field('feature_section_9'); ?>
            <div class="box_equipment_info clearfix">
                <div class="box_equipment_info_top">
                    <div class="row">
                        <div class="col-12 col-lg-5 align-self-center">
                            <h2><?php echo $feature_section_9['title']; ?></h2>
                        </div>
                        <div class="col-12 col-lg-7 align-self-center">
                            <p><?php echo $feature_section_9['sub_title']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="equipment-img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/main/equi08.jpg" alt="" class="img-fluid">
                </div>
                <a href="<?php echo home_url('/equipment/')?>" class="btn btn-equip"><span><?php echo $feature_section_9['button_text']; ?></span></a>
            </div>

        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>