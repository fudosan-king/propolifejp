<?php
/* 
Template Name: Equipment Specification
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
    <section class="slide-dot-slick">
        <div class="slide-dot-slick_item">
            <!-- <img src="<?php //bloginfo('template_directory');?>/assets/images/main/equip-spec-slide.jpg" alt="" title=""> -->
        </div>
    </section>

    <main>
        <section class="section_equip-spec">
            <div class="container">
               <div class="tabs-center-u-shaped">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="plandesign-tab" data-toggle="tab" href="#plandesign" role="tab" aria-controls="plandesign" aria-selected="true">
                                <!-- <span>共用設備</span> -->
                                <span><?php the_field('etab_title_1'); ?></span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="plandesign2-tab" data-toggle="tab" href="#plandesign2" role="tab" aria-controls="plandesign2" aria-selected="false">
                                <span><?php the_field('etab_title_2'); ?></span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="plandesign3-tab" data-toggle="tab" href="#plandesign3" role="tab" aria-controls="plandesign3" aria-selected="false">
                                <!-- <span>設備</span> -->
                                <span><?php the_field('etab_title_3'); ?></span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="plandesign4-tab" data-toggle="tab" href="#plandesign4" role="tab" aria-controls="plandesign4" aria-selected="false">
                                <!-- <span>構造</span> -->
                                <span><?php the_field('etab_title_4'); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab 1 -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="plandesign" role="tabpanel" aria-labelledby="plandesign-tab">
                    <div class="container">
                        <div class="equip-spec">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <!-- <li class="nav-item">
                                    <a rel="#斜行エレベーター" class="nav-link" id=""><span><?php //the_field('etab1_anchor_1'); ?></span></a>
                                </li> -->
                                <li class="nav-item">
                                    <a rel="#フィットネスルーム" class="nav-link" id=""><span><?php the_field('etab1_anchor_2'); ?></span></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#屋内駐車場" class="nav-link" id=""><span><?php the_field('etab1_anchor_3'); ?></span></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#その他" class="nav-link" id=""><span><?php the_field('etab1_anchor_4'); ?></span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Section 1 -->
                        <?php $e1_section_1 = get_field('e1_section_1'); ?>
                        <div id="斜行エレベーター" class="equip-spec_box inclined">
                            <h4><span><?php echo $e1_section_1['title'] ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e1_section_1['sub_title'] ?></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-o-1.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-o-2.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="equip-spec_box-des"><?php echo $e1_section_1['content'] ?></p>
                                </div>
                            </div>    
                        </div>

                        <!-- Section 2 -->
                        <?php $e1_section_2 = get_field('e1_section_2'); ?>
                        <div id="フィットネスルーム" class="equip-spec_box inclined">
                            <h4><span><?php echo $e1_section_2['title'] ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e1_section_2['sub_title'] ?></p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-o-3.jpg" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- <p class="equip-spec_box-des">入居者専用のフィットネスルームでは、備え付けのフィットネスマシンが利用できます。日常的に運動を取り入れ、体力づくりやリフレッシュを、時間や天気を気にすることなく楽しめます。</p> -->
                                    <p class="equip-spec_box-des"><?php echo $e1_section_2['content'] ?></p>
                                </div>
                            </div>
                        </div>


                        <!-- Section 3 -->
                        <?php $e1_section_3 = get_field('e1_section_3'); ?>
                        
                        <!-- Section 4 -->
                        <?php $e1_section_4 = get_field('e1_section_4'); ?>
                        <div id="その他" class="equip-spec_box">
                            <h4><span><?php echo $e1_section_4['title']; ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e1_section_3['sub_title'] ?></p>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <!-- <p class="equip-spec_box-des p-right">本物件にはリモコン自動ゲート付きの屋内平面駐車場を採用しています。天候の影響を受けにくく、北海道の積雪から大切な愛車を守ります。また、自動ゲートの設置によりセキュリティ面でも安心してご利用頂けます。</p> -->
                                    <p class="equip-spec_box-des p-right"><?php echo $e1_section_3['content'] ?></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-o-4.jpg" alt="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="equip-spec_box-title"><?php echo $e1_section_4['box_1_title']; ?></p>
                                    <p class="equip-spec_box-des"><?php echo $e1_section_4['box_1_content']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="equip-spec_box-title"><?php echo $e1_section_4['box_2_title']; ?></p>
                                    <p class="equip-spec_box-des"><?php echo $e1_section_4['box_2_content']; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Tab 2 -->
                <div class="tab-pane fade" id="plandesign2" role="tabpanel" aria-labelledby="plandesign2-tab">
                    <div class="container">
                        <div class="equip-spec">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <!-- <a rel="#コンシェルジュサービス" class="nav-link" id="">コンシェルジュサービス</a> -->
                                    <a rel="#コンシェルジュサービス" class="nav-link" id=""><?php the_field('etab2_anchor_1'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <!-- <a rel="#セキュリティ" class="nav-link" id="">セキュリティ</a> -->
                                    <a rel="#セキュリティ" class="nav-link" id=""><?php the_field('etab2_anchor_2'); ?></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Section 1 -->
                        <?php $e2_section_1 = get_field('e2_section_1'); ?>
                        <div id="コンシェルジュサービス" class="equip-spec_box inclined">
                            <!-- <h4><span>コンシェルジュサービス</span></h4> -->
                            <h4><span><?php echo $e2_section_1['title']; ?></span></h4>
                            <!-- <p class="equip-spec_box-title">毎日の暮らしをサポートする コンシェルジュサービス</p> -->
                            <p class="equip-spec_box-title"><?php echo $e2_section_1['sub_title'] ?></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- <p class="p-right">受付サービスから、宅配便・クリーニング・タクシーの取次サービス、各種代行業者の紹介サービスなど。コンシェルジュが多種多様な暮らしの要望にお応えします。</p> -->
                                    <p class="p-right"><?php echo $e2_section_1['content']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-1.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-2.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>
                            </div>  
                            <div class="equip-spec_ct">
                                <div class="equip-spec_ct_box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="equip-spec_box_img">
                                                 <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-3.jpg" alt="" title="">
                                                 <span><?php the_field('image_ref'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p class="equip-spec_ct_box-title"><?php echo $e2_section_1['title_2'] ?></p>
                                            <p class="equip-spec_ct_box-img">
                                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-14.png" alt="" title="" >
                                            </p>
                                            <?php echo $e2_section_1['content_2']; ?>
                                            <p class="equip-spec_ct_box-note"><?php echo $e2_section_1['note'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Section 2 -->
                        <?php $e2_section_2 = get_field('e2_section_2'); ?>
                        <div id="セキュリティ" class="equip-spec_box equipment-box">
                            <h4><span><?php echo $e2_section_2['title']; ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e2_section_2['sub_title']; ?></p>
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="equip-spec_box_img-alsok">
                                        <img alt="" title="" class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-4.jpg" >
                                    </div>
                                    <?php echo $e2_section_2['content']; ?>
                                    <p class="equip-spec_ct_box-note"><?php echo $e2_section_2['note']; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="equip-spec-box_img">
                                        <img alt="" title="" class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-5.jpg" >
                                    </div>
                                </div>
                            </div>

                            <div class="equip-spec_box_items">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_1']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-6.png" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_1']; ?></p> 
                                    </div>


                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">防犯カメラ</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_2']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-7.png" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des">共用部各所に防犯カメラを設置。24 時間作動し、管理室の記録装置にリアルタイムで送り続けています。長時間録画が可能なため、監視機能としてはもちろん。犯罪等の抑止効果も高まります。</p> -->
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_2']; ?></p> 
                                    </div>


                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">カラーモニター付きインターホン</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_3']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-8.png" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des">各住戸のカラーモニターでエントランスホールにいる来訪者を映像と音声で確認してから解錠できるので安心です。</p> -->
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_3']; ?></p> 
                                    </div>


                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">防犯センサー</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_4']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-9.jpg" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                       <!--  <p class="equip-spec_box-des">玄関ドアには防犯センサーを設置。警戒設定時に扉が開けられるとセンサーが反応し、管理室と管理会社へ異常信号を発信します。</p> -->
                                       <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_4']; ?></p> 
                                    </div>


                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">ダブルロック仕様ディンプルキー</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_5']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-15.png" alt="" title="">
                                        </div>
                                        <!-- <p class="equip-spec_box-des">防犯性を高めるため、玄関ドアには上下2ヶ所で施錠できるダブルロック仕様を採用しました。また、玄関キーはピッキングなどの不正解錠への対応を強化したリバーシブルタイプのディンプルキーを採用しています。不正に解錠しようとしても時間がかかるため、犯罪の未遂率が高まります。</p> -->
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_5']; ?></p> 
                                    </div>


                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">鎌デッド錠</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_6']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-11.png" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des">バールなどのこじ開けを防ぐため、施錠すると鎌状の突起がせり出す鎌デッド錠を採用しています。</p> -->
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_6']; ?></p> 
                                    </div>

                                    <div class="col-md-4">
                                        <!-- <p class="equip-spec_box-title">防犯サムターン</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_7']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-12.png" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des">工具をドアの内側に入れサムターンを回してしまう不正解錠に対応したスイッチ式防犯サムターンを採用しています。</p> -->
                                        <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_7']; ?></p> 
                                    </div>

                                    <div class="col-md-8">
                                        <!-- <p class="equip-spec_box-title">エレベーター安全装置</p> -->
                                        <p class="equip-spec_box-title"><?php echo $e2_section_2['box_title_8']; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- <p class="equip-spec_box-des">エレベーター運転中に、地震管制装置が一定値を超えた地震の初期微動（P 波）・主要動（S波）を感知すると、最寄階に速やかに停止します。<br>
                                                また、停電した際には一旦停止後、停電時自動着床装置により、最寄階に自動停止し、さらに、天井の停電灯が点灯してエレベーター内を照らす他、インターホンが使用できるので、外部との連絡も可能です。</p> -->
                                                <p class="equip-spec_box-des"><?php echo $e2_section_2['box_content_8']; ?></p> 
                                                <!-- <p class="equip-spec_ct_box-note">※エレベーター運転中に急速な大きい地震により、主要動（S 波）［高］を感知した場合は、その瞬間に直ちに休止し、最寄階への移動や扉が開かない場合がございます。</p> -->
                                                <p class="equip-spec_ct_box-note"><?php echo $e2_section_2['box_8_note#1']; ?></p>
                                                <!-- <p class="equip-spec_ct_box-note">※非常用エレベーターは停電時、一旦停止後、非常用発電機が作動し通常の運転に戻ります。</p> -->
                                                <p class="equip-spec_ct_box-note"><?php echo $e2_section_2['box_8_note#2']; ?></p>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="equip-spec_box_img">
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-t-10.png" alt="" title="">
                                                    <span><?php the_field('image_ref'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="plandesign3" role="tabpanel" aria-labelledby="plandesign3-tab">
                    <div class="container">
                        <div class="equip-spec">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a rel="#キッチン" class="nav-link" id=""><?php the_field('etab3_anchor_1') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a rel="#洗面室・浴室" class="nav-link" id=""><?php the_field('etab3_anchor_2') ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#プライベートサウナ" class="nav-link" id=""><?php the_field('etab3_anchor_3') ?></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Section 1 -->
                        <?php $e3_section_1 = get_field('e3_section_1');  ?>
                        <div id="キッチン" class="equip-spec_box">
                            <h4><span><?php echo $e3_section_1['title']; ?></span></h4>
                            <div class="equip-spec_box_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-1.jpg" alt="" title="">
                            </div>

                            <div class="equip-spec_box_items">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_1']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-2.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_2']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_2']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-3.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_2']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_3']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-4.jpg" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_3']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_4']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-5.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_4']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_5']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-6.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_5']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_1['box_title_6']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-7.jpg" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_1['box_content_6']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <?php $e3_section_2 = get_field('e3_section_2');  ?>
                        <div id="洗面室・浴室" class="equip-spec_box">
                            <h4><span><?php echo $e3_section_2['title']; ?></span></h4>
                            <div class="equip-spec_box_img slide-flickity">
                                <div class="carousel" data-flickity data-flickity-options='{ "prevNextButtons": false }'>
                                    <div class="carousel-cell">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-8b.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-cell">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-8c.jpg" alt="" title="">
                                    </div>
                                </div>
                            </div>

                            <div class="equip-spec_box_items">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_1']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-9.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_2['box_content_1']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_2']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-10.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des"><?php //echo $e3_section_2['box_content_1']; ?></p> -->
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_3']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-11.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des"><?php //echo $e3_section_2['box_content_1']; ?></p> -->
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_4']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-12.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_5']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-13.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_2['box_content_5']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_6']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-14.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <!-- <p class="equip-spec_box-des"><?php //echo $e3_section_2['box_content_1']; ?></p> -->
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_7']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-15.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e3_section_2['box_content_1']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_8']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-16.jpg" alt="" title="">
                                            <span><?php the_field('image_ref'); ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_9']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-17.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e3_section_2['box_title_10']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-18.jpg" alt="" title="">
                                            <span class="txt-black"><?php the_field('image_ref'); ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <?php $e3_section_3 = get_field('e3_section_3'); ?>
                        <div id="プライベートサウナ" class="equip-spec_box inclined">
                            <h4><span><?php echo $e3_section_3['title']; ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e3_section_3['sub_title']; ?></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="p-right"><?php echo $e3_section_3['content']; ?></p>
                                </div>

                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-19.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="equip-spec_box_img">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-th-20.jpg" class="img-fluid" alt="" tilte="" >
                                        <span><?php the_field('image_ref'); ?></span>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>

                <!-- Tab 4 -->
                <div class="tab-pane fade" id="plandesign4" role="tabpanel" aria-labelledby="plandesign4-tab">
                    <div class="container">
                        <div class="equip-spec">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a rel="#立面図" class="nav-link" id=""><?php the_field('etab4_anchor_1') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a rel="#敷地配置図" class="nav-link" id=""><?php the_field('etab4_anchor_2') ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#構造" class="nav-link" id=""><?php the_field('etab4_anchor_3') ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#アメニティ" class="nav-link" id=""><?php the_field('etab4_anchor_4') ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a rel="#エコシステム" class="nav-link" id=""><?php the_field('etab4_anchor_5') ?></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Section 1 -->
                        <?php $e4_section_1 = get_field('e4_section_1') ?>
                        <div id="立面図" class="equip-spec_box">
                            <h4><span><?php echo $e4_section_1['title'] ?></span></h4>
                            <div class="equip-spec_box_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-1.jpg" alt="" title="">
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <?php $e4_section_2 = get_field('e4_section_2') ?>
                        <div id="敷地配置図" class="equip-spec_box">
                            <h4><span><?php echo $e4_section_2['title'] ?></span></h4>
                            <div class="floor-plans">
                                <div class="ct-slider_item">
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/main/map-1.png" class="img-fluid" alt="" title="" >
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/main/map-2.png" class="img-fluid" alt="" title="" >
                                </div>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <?php $e4_section_3 = get_field('e4_section_3'); ?>
                        <div id="構造" class="equip-spec_box">
                            <h4><span><?php echo $e4_section_3['title']; ?></span></h4>
                            <div class="equip-spec_box_items">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e4_section_3['box_title_1']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-3.jpg" alt="" title="">
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e4_section_3['box_content_3'] ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e4_section_3['box_title_2']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-4.jpg" alt="" title="">
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e4_section_3['box_content_3'] ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e4_section_3['box_title_3']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-5.jpg" alt="" title="">
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e4_section_3['box_content_3'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="equip-spec_box-title"><?php echo $e4_section_3['box_title_4']; ?></p>
                                <p class="equip-spec_box-des"><?php echo $e4_section_3['box_content_4'] ?></p>
                            </div>
                        </div>

                        <!-- Section 4 -->
                        <?php $e4_section_4 = get_field('e4_section_4'); ?>
                        <div id="アメニティ" class="equip-spec_box">
                            <h4><span><?php echo $e4_section_4['title'] ?></span></h4>
                            <p class="equip-spec_box-title"><?php echo $e4_section_4['sub_title']; ?></p>
                            <div class="equip-spec_box_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-6.jpg" alt="" title="">
                            </div>
                            <p><?php echo $e4_section_4['content']; ?></p>
                        </div>

                        <!-- Section 5 -->
                        <?php $e5_section_5 = get_field('e5_section_5'); ?>
                        <div id="エコシステム" class="equip-spec_box">
                            <h4><span><?php echo $e5_section_5['title']; ?></span></h4>
                             <div class="equip-spec_box_items">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_1']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-7.jpg" alt="" title="">
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_1']; ?></p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_2']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-8.jpg" alt="" title="">
                                            <span class="txt-black">参考写真</span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_2']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_3']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-9.jpg" alt="" title="">
                                            <span class="txt-black">参考写真</span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_3']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_4']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-10.jpg" alt="" title="">
                                            <span class="txt-black">参考写真</span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_4']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_5']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-11.jpg" alt="" title="">
                                            <span class="txt-black">参考写真</span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_5']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_6']; ?></p>
                                        <div class="equip-spec_box_img">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/equip-spec-f-12.jpg" alt="" title="">
                                            <span class="txt-black">参考写真</span>
                                        </div>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_6']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_7']; ?></p>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_7']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="equip-spec_box-title"><?php echo $e5_section_5['box_title_8']; ?></p>
                                        <p class="equip-spec_box-des"><?php echo $e5_section_5['box_content_8']; ?></p>
                                    </div>
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