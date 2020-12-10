<?php
/* 
Template Name: Plan
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<section class="section_subbanner">
    <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" width="100%" height="700" src="https://my.matterport.com/show/?m=VHEQdZ6QNAh" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
<main>
    <section class="section_plan">
        <div class="container">
            <div class="tabs-center-u-shaped">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="plandesign-tab" data-toggle="tab" href="#plandesign" role="tab" aria-controls="plandesign" aria-selected="true">プランデザイン</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false">眺望</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="plandesign" role="tabpanel" aria-labelledby="plandesign-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">

                            <div class="box_infoview_top">
                                <h2 class="title hide-mobile">大きなガラス越しに望む自然の大借景を愉しむ<br>
                                リゾートコンドミニアムのような集合邸宅</h2>
                                <h2 class="hide-pc show-mobile">理想の都市居住に応える<br>
                                    プランニング。</h2>
                                <p class="hide-pc show-mobile">シングルやディンクス、ファミリー、セカンドユースまで、ライフスタイルなどに合わせてお選びいただける、住居専有面積約39㎡～130㎡超までをご用意。</p>                                            
                            </div>

                            <div class="box_infoview_content">
                                <?php echo do_shortcode("[ppl-plan-item slug='ppl_plan_special' style='special']"); ?>
                            </div>

                            <div class="box_premium">
                                <?php echo do_shortcode("[ppl-plan-item slug='ppl_plan_feature' style='feature']"); ?>
                            </div>

                            <div class="box_normal">
                                <?php echo do_shortcode("[ppl-plan , ignore_slug ='ppl_plan_special,ppl_plan_feature' ]"); ?>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="view" role="tabpanel" aria-labelledby="view-tab">
                <div class="box_infoview_top mb-3">
                    <h2 class="title hide-mobile">視界を遮るもののない開放感溢れる眺望</h2>
                    <h2 class="hide-pc show-mobile">キャッチコピーが<br>入ります</h2>
                    <p>30F VIEW30階相当の眺望</p>
                </div>
                <div class="carousel_view">
                    <div id="block_carousel_view" class="day carousel_view_day"></div>
                    <div class="carousel_view_control">
                        <p class="carousel_view_control_left" id="btn_control_left"><i class="chevron-left"></i></p>
                        <p class="carousel_view_control_right" id="btn_control_right"><i class="chevron-right"></i></p>
                    </div>
                </div>
                <ul class="list_view_time">
                    <li class="list_view_time_day active" id="btn_day"><i class="i_sun"></i>昼景</li>
                    <li class="list_view_time_night" id="btn_night"><i class="i_moon"></i>夜景</li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>