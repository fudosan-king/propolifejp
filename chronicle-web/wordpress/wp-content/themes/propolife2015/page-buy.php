<?php
$dir_name = 'buy';
// $current_lang = qtrans_getLanguage();
// if($current_lang != 'ja'){ header('location: /'); exit();}
?>
<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/buy/img_title_h2.png" alt="仕入不動産募集"></h2>
        <p class="ruby">PURCHACE</p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        <div class="section_telephone">
            <h3>まずはお電話ください(法人専用)</h3>
            <div class="telephone_list">
                <ul>
                    <?php
                        while(the_repeater_field('tel_table')):
                        $tel_city = get_sub_field('tel_city');
                        $tel_number = get_sub_field('tel_number');
                    ?>
                    <li>
                        <h4><?php echo $tel_city; ?>：</h4>
                        <p><?php echo $tel_number; ?></p>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div><!-- // .telephone_list -->
            <p class="hours">営業時間 10：00〜19：00　担当部署定休日：火・水曜日</p>
            <p class="btn_request"><a href="<?php echo get_post_meta($post->ID, 'btn_request_url', true); ?>" target="_blank">WEBでの査定依頼はこちら</a></p>
        </div><!-- // .section_telephone -->

        <?php
            $buy_table_title = array();
            $buy_table_content = array();
            while(the_repeater_field('buy_table')):
            $buy_table_title[] = get_sub_field('buy_table_title');
            $buy_table_content[] = get_sub_field('buy_table_content');
            endwhile;
        ?>
        <div id="section_buy">
            <div id="purchase_list">
                <ul>
                    <li>
                        <div class="bg01">
                            <h3><span><?php echo $buy_table_title[0]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[0]; ?></span></p>
                        </div>
                    </li>
                    <li class="sp_border_none">
                        <div class="bg02">
                            <h3><span><?php echo $buy_table_title[1]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[1]; ?></span></p>
                        </div>
                    </li>
                    <li class="border_none">
                        <div class="bg01 sp_bg">
                            <h3><span><?php echo $buy_table_title[2]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[2]; ?></span></p>
                        </div>
                    </li>
                    <li class="sp_border_none">
                        <div class="bg02 sp_bg">
                            <h3><span><?php echo $buy_table_title[3]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[3]; ?></span></p>
                        </div>
                    </li>
                    <li>
                        <div class="bg01">
                            <h3><span><?php echo $buy_table_title[4]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[4]; ?></span></p>
                        </div>
                    </li>
                    <li class="border_none sp_border_none">
                        <div class="bg02">
                            <h3><span><?php echo $buy_table_title[5]; ?></span></h3>
                            <p><span><?php echo $buy_table_content[5]; ?></span></p>
                        </div>
                    </li>
                </ul>
            </div><!-- // #purchase_list -->

            <?php
                $point_title = get_post_meta($post->ID, 'point_title', true);
            ?>
            <div id="point">
                <h3><?php echo $point_title; ?></h3>
                <ul>
                    <?php
                        while(the_repeater_field('point_table')):
                        $point_image = wp_get_attachment_image_src(get_sub_field('point_table_img'), 'large');
                        $point_img_meta = get_post_meta(get_sub_field('point_table_img'));
                        $point_image_alt = $point_img_meta['_wp_attachment_image_alt'][0];
                    ?>
                    <li><img src="<?php echo $point_image[0]; ?>" width="190" alt="<?php echo $point_image_alt; ?>"></li>
                    <?php endwhile; ?>
                </ul>
            </div><!-- // #point -->

            <div id="purchase_area">
                <?php
                    $purchase_area_title = get_post_meta($post->ID, 'purchase_area_title', true);
                    $purchase_area_content = get_post_meta($post->ID, 'purchase_area_content', true);
                    $purchase_area_img_pc = wp_get_attachment_image_src(get_post_meta($post->ID, 'purchase_area_img_pc', true), 'full');
                    $purchase_area_img_sp = wp_get_attachment_image_src(get_post_meta($post->ID, 'purchase_area_img_sp', true), 'full');
                ?>
                <h3><?php echo $purchase_area_title; ?></h3>
                <p class="area"><?php echo $purchase_area_content; ?></p>
                <p class="map">
                    <span class="pc"><img src="<?php echo $purchase_area_img_pc[0]; ?>" alt=""></span>
                    <span class="sp"><img src="<?php echo $purchase_area_img_sp[0]; ?>" alt=""></span>
                </p>
            </div><!-- // #purchase_area -->

            <div id="estate_list">
                <h3>仕入開発実績</h3>
                <ul>
                    <?php
                        while(the_repeater_field('estate_table')):
                        $estate_img = wp_get_attachment_image_src(get_sub_field('estate_img'), 'large');
                        $estate_title = get_sub_field('estate_title');
                        $estate_address = get_sub_field('estate_address');
                    ?>
                    <li>
                        <p class="pic"><img src="<?php echo $estate_img[0]; ?>" width="205" alt="<?php echo $estate_title; ?>"></p>
                        <?php if(!empty($estate_title)): ?><h4><span><?php echo $estate_title; ?></span></h4><?php endif; echo "\n"; ?>
                        <p><?php echo $estate_address; ?></p>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div><!-- // #estate_list -->
        </div><!-- // #section_buy -->


        <div class="section_telephone btm">
            <h3>まずはお電話ください(法人専用)</h3>
            <div class="telephone_list">
                <ul>
                    <?php
                        while(the_repeater_field('tel_table')):
                        $tel_city = get_sub_field('tel_city');
                        $tel_number = get_sub_field('tel_number');
                    ?>
                    <li>
                        <h4><?php echo $tel_city; ?>：</h4>
                        <p><?php echo $tel_number; ?></p>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div><!-- // .telephone_list -->
            <p class="hours">営業時間 10：00〜19：00　担当部署定休日：火・水曜日</p>
            <p class="btn_request"><a href="<?php echo get_post_meta($post->ID, 'btn_request_url', true); ?>" target="_blank">WEBでの査定依頼はこちら</a></p>
            <p class="txt">査定のご依頼お待ち申し上げております。</p>
        </div><!-- // .section_telephone -->

    </div>
</div><!-- // #contents -->
<?php get_footer(); ?>
