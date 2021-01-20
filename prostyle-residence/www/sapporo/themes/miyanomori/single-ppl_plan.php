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
                        <a href="#videoPopup" data-toggle="modal" class="see_video hide-mobile">
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
                                            <p class="equip-spec_box-title">ダイニングテーブル</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-1.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">飛騨産業<br>
                                            クマヒダ　ダイニングテーブル<br>
                                            W2400 × D900 × H700<br>
                                            ウォルナット　WA<br>
                                            ¥660,000（税別）</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ダイニングチェア</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-2.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">飛騨産業<br>
                                            クマヒダ　アームチェア張り座<br>
                                            W590 × D540 × H720<br>
                                            SH410　AH630<br>
                                            ウォルナット　WA<br>
                                            ¥261,000（税別）</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ペンダントライト</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-3.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">LASVIT( 日本代理店YAMAGIWA)<br>
                                            AKISUGI LARGE<br>
                                            W120 × H500　12kg<br>
                                            手吹きガラス<br>
                                            ¥572,000（税込）</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ソファ</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-4.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Time & Style<br>
                                            MA Sofa<br>
                                            W2400 × D1024 × H727　SH380<br>
                                            背/座：ファブリック張り<br>
                                            脚：ステンレスバイブレーション仕上<br>
                                            オープン価格</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ローテーブル</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-5.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Time & Style<br>
                                            FL Low Table<br>
                                            W1800 × D700 × H300<br>
                                            天板：タモスノーホワイト<br>
                                            脚：ステンレスバイブレーション仕上<br>
                                            オープン価格</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">TV台</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-6.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Time & Style<br>
                                                特注<br>
                                                W2400 × D500 × H300<br>
                                                天板：タモスノーホワイト<br>
                                                脚：ステンレスバイブレーション仕上<br>
                                                オープン価格</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ペンダントライト</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-7.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Herman Miller<br>
                                            NELSON CIGAR LOTUS FLOOR LAMP<br>
                                            H1460　φ330<br>
                                            鋼ニッケルメッキ<br>
                                            ¥147,400（税込）</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ラグ</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-8.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">山形緞通<br>
                                            KOKE<br>
                                            1400 × 2000<br>
                                            ¥715,000( 税込)</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">ベッド</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-9.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Time & Style<br>
                                            FU Bed<br>
                                            背/座：ファブリック張り<br>
                                            脚：ステンレスバイブレーション仕上<br>
                                            オープン価格</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="equip-spec_box-title">サイドテーブル</p>
                                            <div class="equip-spec_box_img">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/main/detail-furniture-10.png" alt="" title="">
                                            </div>
                                            <p class="equip-spec_box-des">Time & Style<br>
                                            PE<br>
                                            φ450 × H420<br>
                                            ステンレスバイブレーション仕上<br>
                                            オープン価格</p>
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
                <div class="vr-3d show-mobile hide-pc">
                    <div class="vr-3d_img">
                        <a href="#videoPopup" data-toggle="modal" title="">
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
                       
                        <div class="col-12 col-lg-7 img-map_single js_img-map">
                            <div class="box_infoview_img">
                                <?php $codeApartment = get_post_meta($post->ID, 'ppl-plan', true); ?>
                                <?php echo do_shortcode("[".$codeApartment."]"); ?>
                                <p>ご覧になりたいプランをタップしてください。<br>
                            プラン詳細をご覧いただけます</p>
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
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>