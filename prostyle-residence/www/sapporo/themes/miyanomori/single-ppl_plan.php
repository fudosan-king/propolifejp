<?php
/* 
Template Name: Plan Detail
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header2'); ?>
<main>
   <section class="section_plan_detail">
        <div class="container">
            <div class="box_plan_detail_top">
                <h1><?= get_the_title($post->ID)?></h1>
                <div class="row no-gutters">
                    <div class="col-12 col-lg-5 align-self-center">
                        <h2 class="title">おだやかに、解き放たれる</h2>
                    </div>
                    <div class="col-12 col-lg-7 align-self-center">
                        <p>大きなガラス越しに望む自然の大借景、清々しく空に抜けていくガラスの吹き抜け。<br>｢プロスタイル宮の森｣でもっとも贅を尽くした一室は、<br>
                            どこにいても開放感溢れる極上の空間です。</p>
                    </div>
                </div>
            </div>
            <div class="box_plan_detail_body">
                <div class="box_plan_detail_body_top">
                    <div class="box_infoview_content">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6 align-self-center">
                                <h2><?= get_the_content($post->ID) ?></h2>
                            </div>
                            <div class="col-12 col-lg-6 align-self-center">
                                <div class="box_infoview_img">
                                    <img src="<?php echo get_field('design_apartment') ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <a href="#modal_video" data-toggle="modal" class="see_video hide-mobile">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/3D_img.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="tabs-center-u-shaped">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="plandesign-tab" data-toggle="tab" href="#plandesign" role="tab" aria-controls="plandesign" aria-selected="true"><i class="i-house-plan"></i>間取り</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="plandetail-tab" data-toggle="tab" href="#plandetail" role="tab" aria-controls="plandetail" aria-selected="false"><i class="i-armchair"></i>家具の配置イメージ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="planvr-tab" data-toggle="tab" href="#planvr" role="tab" aria-controls="planvr" aria-selected="false"><i class="i-webcam"></i>室内VR</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="plandesign" role="tabpanel" aria-labelledby="plandesign-tab">
                            <?php echo get_field('design_plan') ?>
                        </div>
                        <div class="tab-pane fade" id="plandetail" role="tabpanel" aria-labelledby="plandetail-tab">
                             <?php echo get_field('design_furnitures') ?>
                        </div>
                        <div class="tab-pane fade" id="planvr" role="tabpanel" aria-labelledby="planvr-tab">
                            <?php echo get_field('design_planvr_view') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box_plan_detail_footer">
                <div class="vr-3d show-mobile hide-pc">
                    <div class="vr-3d_img">
                        <a href="#" title="">
                            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/main/3r-vr-img.jpg" alt="" title="">
                        </a>
                    </div>
                    <a class="btn btn-find"><i class="i-find-zoom"></i>テラスからの眺望を体験する</a>
                </div>
                <div class="box_infoview_content">
                    <div class="row no-gutters hide-mobile">
                        <?php 
                           $post_url = $post_slug = $post->post_name; 
                           echo do_shortcode("[ppl-plan only_info='plan-detail-page' ignore_slug ='ppl_plan_feature,".$post_url."']"); 
                        ?>
                        <?php echo do_shortcode("[ppl-plan-item slug='".$post_url."' style='plan-detail-page']"); ?>
                       
                        <div class="col-12 col-lg-7 js_img-map">
                            <div class="box_infoview_img">
                                <?php $codeApartment = get_post_meta($post->ID, 'ppl-plan', true); ?>
                                <?php echo do_shortcode("[".$codeApartment."]"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="box_normal show-mobile hide-pc">
                        <?php echo do_shortcode("[ppl-plan ignore_slug ='ppl_plan_special,ppl_plan_feature' ignore_slug ='ppl_plan_feature,".$post_url."']"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>