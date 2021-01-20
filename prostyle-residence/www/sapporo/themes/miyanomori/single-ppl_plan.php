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
                        <h2 class="title"><?php echo get_field('single_plan_title') ?></h2>
                    </div>
                    <div class="col-12 col-lg-7 align-self-center">
                        <p><?php echo get_field('single_plan_description') ?></p>
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
                        <a href="#panoromaPopup" data-toggle="modal" class="see_video hide-mobile">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1x/3D_img.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="tabs-center-u-shaped">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="plandesign-tab" data-toggle="tab" href="#plandesign" role="tab" aria-controls="plandesign" aria-selected="true"><i class="i-house-plan"></i><?= _e('間取り','miyanomori'); ?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="plandetail-tab" data-toggle="tab" href="#plandetail" role="tab" aria-controls="plandetail" aria-selected="false"><i class="i-armchair"></i><?= _e('家具の配置イメージ','miyanomori'); ?></a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link" id="planvr-tab" data-toggle="tab" href="#planvr" role="tab" aria-controls="planvr" aria-selected="false"><i class="i-webcam"></i>室内VR</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="plandesign" role="tabpanel" aria-labelledby="plandesign-tab">
                            <?php echo get_field('design_plan') ?>
                        </div>
                        <div class="tab-pane fade" id="plandetail" role="tabpanel" aria-labelledby="plandetail-tab">
                            <?php echo get_field('design_furnitures') ?>
                            <p>12334</p>
                            <div class="equip-spec_box">
                                <div class="equip-spec_box_items">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ダイニングテーブル','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-1.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('飛騨産業','miyanomori'); ?><br>
                                            <?= _e('クマヒダ　ダイニングテーブル','miyanomori'); ?><br>
                                            <?= _e('W2400 × D900 × H700','miyanomori'); ?><br>
                                            <?= _e('ウォルナット　WA','miyanomori'); ?><br>
                                            <?= _e('¥660,000（税別）','miyanomori'); ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ダイニングチェア','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-2.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('飛騨産業','miyanomori'); ?><br>
                                            <?= _e('クマヒダ　アームチェア張り座','miyanomori'); ?><br>
                                            <?= _e('W590 × D540 × H720','miyanomori'); ?><br>
                                            <?= _e('SH410　AH630','miyanomori'); ?><br>
                                            <?= _e('ウォルナット　WA','miyanomori'); ?><br>
                                            <?= _e('¥261,000（税別）','miyanomori'); ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ペンダントライト','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-3.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('LASVIT( 日本代理店YAMAGIWA)','miyanomori'); ?><br>
                                            <?= _e('AKISUGI LARGE','miyanomori'); ?><br>
                                            <?= _e('W120 × H500　12kg','miyanomori'); ?><br>
                                            <?= _e('手吹きガラス','miyanomori'); ?><br>
                                            <?= _e('¥572,000（税込）','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ソファ','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-4.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Time & Style','miyanomori'); ?><br>
                                            <?= _e('MA Sofa','miyanomori'); ?><br>
                                            <?= _e('W2400 × D1024 × H727　SH380','miyanomori'); ?><br>
                                            <?= _e('背/座：ファブリック張り','miyanomori'); ?><br>
                                            <?= _e('脚：ステンレスバイブレーション仕上','miyanomori'); ?><br>
                                            <?= _e('オープン価格','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ローテーブル','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-5.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Time & Style','miyanomori'); ?><br>
                                            <?= _e('FL Low Table','miyanomori'); ?><br>
                                            <?= _e('W1800 × D700 × H300','miyanomori'); ?><br>
                                            <?= _e('天板：タモスノーホワイト','miyanomori'); ?><br>
                                            <?= _e('脚：ステンレスバイブレーション仕上','miyanomori'); ?><br>
                                            <?= _e('オープン価格','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('TV台','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-6.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Time & Style','miyanomori'); ?><br>
                                                <?= _e('特注','miyanomori'); ?><br>
                                                <?= _e('W2400 × D500 × H300','miyanomori'); ?><br>
                                                <?= _e('天板：タモスノーホワイト','miyanomori'); ?><br>
                                                <?= _e('脚：ステンレスバイブレーション仕上','miyanomori'); ?><br>
                                                <?= _e('オープン価格','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ペンダントライト','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-7.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Herman Miller','miyanomori'); ?><br>
                                            <?= _e('NELSON CIGAR LOTUS FLOOR LAMP','miyanomori'); ?><br>
                                            <?= _e('H1460　φ330','miyanomori'); ?><br>
                                            <?= _e('鋼ニッケルメッキ','miyanomori'); ?><br>
                                            <?= _e('¥147,400（税込）','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('ラグ','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-8.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('山形緞通','miyanomori'); ?><br>
                                            <?= _e('KOKE','miyanomori'); ?><br>
                                            <?= _e('1400 × 2000','miyanomori'); ?><br>
                                            <?= _e('¥715,000( 税込)','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ベッド</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-9.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Time & Style','miyanomori'); ?><br>
                                            <?= _e('FU Bed','miyanomori'); ?><br>
                                            <?= _e('背/座：ファブリック張り','miyanomori'); ?><br>
                                            <?= _e('脚：ステンレスバイブレーション仕上','miyanomori'); ?><br>
                                            <?= _e('オープン価格','miyanomori'); ?></p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title"><?= _e('サイドテーブル','miyanomori'); ?></p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-10.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des"><?= _e('Time & Style','miyanomori'); ?><br>
                                            <?= _e('PE','miyanomori'); ?><br>
                                            <?= _e('φ450 × H420','miyanomori'); ?><br>
                                            <?= _e('ステンレスバイブレーション仕上','miyanomori'); ?><br>
                                            <?= _e('オープン価格','miyanomori'); ?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="planvr" role="tabpanel" aria-labelledby="planvr-tab"> -->
                            <?php //echo get_field('design_planvr_view') ?>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="box_plan_detail_footer">
               <!--  <div class="vr-3d show-mobile hide-pc">
                    <div class="vr-3d_img">
                        <a href="#videoPopup" data-toggle="modal" title="">
                            <img class="img-fluid" src="<?php //bloginfo('template_url'); ?>/assets/images/main/3r-vr-img.jpg" alt="" title="">
                        </a>
                    </div>
                    <a class="btn btn-find"><i class="i-find-zoom"></i>テラスからの眺望を体験する</a>
                </div> -->
                <div class="box_infoview_content">
                    <div class="row no-gutters hide-mobile">
                        <?php 
                           $post_url = $post_slug = $post->post_name; 
                           echo do_shortcode("[ppl-plan only_info='plan-detail-page' ignore_slug ='ppl_plan_feature,".$post_url."']"); 
                        ?>
                        <?php echo do_shortcode("[ppl-plan-item slug='".$post_url."' style='plan-detail-page']"); ?>
                       
                        <div class="col-12 col-lg-7 img-map_single js_img-map">
                            <div class="box_infoview_img">
                                <?php $codeApartment = get_post_meta($post->ID, 'ppl-plan', true); ?>
                                <?php echo do_shortcode("[".$codeApartment."]"); ?>
                                <p><?= _e('ご覧になりたいプランをタップしてください。','miyanomori'); ?><br>
                                    <?= _e('プラン詳細をご覧いただけます','miyanomori'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box_normal show-mobile hide-pc">
                        <?php echo do_shortcode("[ppl-plan ignore_slug ='ppl_plan_feature,".$post_url."']"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="video-miyanomori after-logged js-popup-video">
        <div class="modal fade" id="panoromaPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="carousel_view">
                    <div id="block_carousel_view" data-day="<?php echo get_field('single_plan_img_room_day'); ?>" data-night="<?php echo get_field('single_plan_img_room_night'); ?>" class="day carousel_view_day"></div>
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
          </div>
        </div>
    </section>

</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>