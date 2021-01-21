<?php
/* 
Template Name: Plan
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<section class="section_subbanner">
    <div class="subbanner_img embed-responsive">
        <!-- <div class="embed-responsive_bg-img"></div> -->
        <!-- <img class="<?php //bloginfo('template_url'); ?>/assets/images/1x/plan-bg-top.jpg" alt="plan bg"> -->

        <!-- <iframe class="embed-responsive-item" width="100%" height="700" src="https://my.matterport.com/show/?m=VHEQdZ6QNAh" frameborder="0" allowfullscreen></iframe> -->
    </div>
</section>
<main>
    <section class="section_plan">
        <div class="container">
            <div class="tabs-center-u-shaped">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="plandesign-tab" data-toggle="tab" href="#plandesign" role="tab" aria-controls="plandesign" aria-selected="true">
                            <!-- <span>プランデザイン</span> -->
                            <span><?php the_field('planft_tab_title'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false">
                            <!-- <span>眺望</span> -->
                            <span><?php the_field('plansc_tab_title'); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tab 1 Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="plandesign" role="tabpanel" aria-labelledby="plandesign-tab">
                <div class="container">
                   
                    <div class="box_infoview_top">
                        <!-- <h2 class="title">大きなガラス越しに望む自然の大借景を愉しむ<br>
                        リゾートコンドミニアムのような集合邸宅</h2> -->
                        <h2 class="title"><?php the_field('planft_box_title'); ?></h2>
                    </div>

                    <div class="box_infoview_content">
                        <div class="row no-gutters">
                            <?php echo do_shortcode("[ppl-plan only_info='plan-page' ignore_slug ='ppl_plan_special,ppl_plan_feature' ]"); ?>
                            <?php echo do_shortcode("[ppl-plan-item slug='ppl_plan_special' style='special']"); ?>
                            <div class="col-12 col-lg-7 js_img-map">
                                <div class="box_infoview_img">
                                    <div class="hide-mobile">
                                        <?php echo do_shortcode("[apartment-plan]"); ?>
                                    </div>
                                    <div class="show-mobile hide-pc">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/s301-origin.png" class="imp-main-image">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <p class="text-center">※ご覧になりたいプランをタップしてください。プラン詳細をご覧いただけます。</p> -->
                    </div>
                    <div class="box-feature">
                         <?php echo do_shortcode("[ppl-plan-item slug='ppl_plan_special' style='feature']"); ?>
                    </div>

                    <div class="box_normal">
                        <?php echo do_shortcode("[ppl-plan ignore_slug ='ppl_plan_special,ppl_plan_feature' ]"); ?>
                    </div>          
                </div>
               
            </div>

            <!-- Tab 2 Content -->
            <div class="tab-pane fade " id="view" role="tabpanel" aria-labelledby="view-tab">
                <div class="box_infoview_top mb-3">
                    <!-- <h2 class="title">視界を遮るもののない開放感溢れる眺望</h2> -->
                    <h2 class="title"><?php the_field('plansc_box_title'); ?></h2>
                </div>
                <div class="carousel_view">
                    <div id="block_carousel_view" class="day carousel_view_day"></div>
                    <div class="carousel_view_control">
                        <p class="carousel_view_control_left" id="btn_control_left"><i class="chevron-left"></i></p>
                        <p class="carousel_view_control_right" id="btn_control_right"><i class="chevron-right"></i></p>
                    </div>
                </div>
                <ul class="list_view_time">
                    <!-- <li class="list_view_time_day active" id="btn_day"><i class="i_sun"></i>昼景</li> -->
                    <li class="list_view_time_day active" id="btn_day"><i class="i_sun"></i><?php the_field('plan_day_button'); ?></li> 
                    <!-- <li class="list_view_time_night" id="btn_night"><i class="i_moon"></i>夜景</li> -->
                    <li class="list_view_time_night" id="btn_night"><i class="i_moon"></i><?php the_field('plan_night_button'); ?></li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>