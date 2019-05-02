<?php
global $current_lang;
$dir_name = 'home';
?>
<?php include_once('header.php'); ?>

<div id="background">
    <div id="animal">
        <p class="rino"><span><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_bg_rino.gif" alt=""></span></p>
        <p class="lion"><span><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_bg_lion.gif" alt=""></span></p>
        <p class="animal_sp"></p>
    </div>
    <div id="pic"></div>
</div>

<div id="contents">
    <div id="main_visual">
        <div id="main_visual_inner">
            <?php
            $main_copy = get_page_data(get_page_by_path('company/message'));
            $main_copy_url = $main_copy['url'];
            ?>
            <p class="main_copy"><span><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_main_copy_<?php echo $current_lang; ?>.png" alt="わたしは、ここがいい。" class="pc"><?php if($current_lang == 'en'): ?><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_main_copy_<?php echo $current_lang; ?>_sp.png" alt="わたしは、ここがいい。" class="sp"><?php endif; ?></span></p>
        </div>
    </div>

    <div id="contents_inner">

        <div id="section06" class="section">
            <div class="section_inner">
                <a href="https://www.chronicle-web.com/showroom/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec06_title.png" width="302" height="236" alt="Interior Show Room"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec06_pic_<?php echo $current_lang; ?>.jpg" width="330" height="425" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec06_pic_sp_<?php echo $current_lang; ?>.jpg" width="175" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section04" class="section">
            <div class="section_inner">
                <a href="https://www.chronicle-web.com/plus/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec04_title.png" width="402" height="150" alt="Chronicle Reform"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec04_pic_<?php echo $current_lang; ?>.jpg" width="370" height="405" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec04_pic_sp_<?php echo $current_lang; ?>.jpg" width="156" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section01" class="section">
            <div class="section_inner">
                <a href="https://www.chronicle-web.com/logmansion/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec01_title.png" width="515" height="76" alt="Logmansion"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec01_pic_<?php echo $current_lang; ?>.jpg" width="370" height="405" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec01_pic_sp_<?php echo $current_lang; ?>.jpg" width="156" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section02" class="section">
            <div class="section_inner">
                <a href="https://www.chronicle-web.com/order_renove/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec03_title.png" width="317" height="151" alt="Order Renove"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec03_pic_<?php echo $current_lang; ?>.jpg" width="370" height="405" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec03_pic_sp_<?php echo $current_lang; ?>.jpg" width="156" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section03" class="section">
            <div class="section_inner">
                <a href="https://www.prostyle-villa.com/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec08_title.png" width="375" height="150" alt="Prostyle Villa"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec08_pic_<?php echo $current_lang; ?>.jpg" width="370" height="405" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec08_pic_sp_<?php echo $current_lang; ?>.jpg" width="156" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section04" class="section">
            <div class="section_inner">
                <a href="https://www.chronicle-web.com/reform/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec07_title.png" width="402" height="151" alt="Chronicle Reform"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec07_pic_<?php echo $current_lang; ?>.jpg" width="330" height="425" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec07_pic_sp_<?php echo $current_lang; ?>.jpg" width="175" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

        <div id="section05" class="section">
            <div class="section_inner">
                <a href="http://www.chro-residence.com/aobadai/" target="_blank">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec05_title.png" width="426" height="151" alt="Chronicle Residencs"></h3>
                    <p class="pic">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec05_pic_<?php echo $current_lang; ?>.jpg" width="370" height="405" alt="" class="pc">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_sec05_pic_sp_<?php echo $current_lang; ?>.jpg" width="156" alt="" class="sp">
                    </p>
                    <p class="btn_more">
                        <img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more.png" width="200" height="50" alt="MORE" class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/btn_more_sp.png" width="100" alt="MORE" class="sp">
                    </p>
                </a>
            </div>
        </div>

    </div><!-- // #contents_inner -->


    <div id="btm_section">
        <div id="btm_section_inner">
            <?php if($current_lang == 'ja'): ?>
            <div id="btm_information">
                <ul class="col_parents">
                    <li class="col information">
                        <?php
                        global $posts;
                        $posts = get_posts(array(
                            'post_type' => array('information', 'pressrelease', 'media'),
                            'numberposts' => 3
                        ));
                        $page = get_page_data(get_page_by_path('news/information'));
                        $page_url = $page['url'];
                        ?>
                        <h3><span>新着情報</span><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_btm_info_topics.png" width="101" height="20" alt="TOPICS"></h3>
                        <ul>
                            <?php foreach($posts as $post) : setup_postdata($post); ?>
                            <?php
                            $post_id = $post -> ID;
                            $post_name = $post -> post_title;
                            $post_type = $post->post_type;
                            $post_date = date('Y.m.d', strtotime($post -> post_date));
                            $post_name = mb_strimwidth($post_name, 0, 48, '...');
                            $post_content = mb_strimwidth(strip_tags($post->post_content), 0, 146, '...');
                            ?>
                            <li>
                                <h4><?php echo $post_date; ?><?php echo get_topics_icon($post_type); ?></h4>
                                <a href="/news/<?php echo $post_type; ?>">
                                    <?php if($post_type != 'pressrelease'): ?><p class="title"><?php echo $post_name; ?></p><?php endif; echo "\n";?>
                                    <p><?php echo $post_content; ?></p>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </li>
                    <li class="col news">
                        <?php
                        global $posts;
                        $posts = get_posts(array(
                            'post_type' => 'news',
                            'numberposts' => 4
                        ));
                        $page = get_page_data(get_page_by_path('news/news'));
                        $page_url = $page['url'];
                        ?>
                        <h3><span><?php echo $page['title']; ?></span><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_btm_info_news.png" width="81" height="20" alt="INFORMATION"></h3>
                        <ul>
                            <?php foreach($posts as $post) : setup_postdata($post); ?>
                            <?php
                            $post_id = $post -> ID;
                            $post_name = $post -> post_title;
                            $post_date = date('Y.m.d', strtotime($post -> post_date));
                            $post_content = strip_tags($post->post_content);
                            $post_content = mb_strimwidth($post_content, 0, 94, '...');
                            ?>
                            <li>
                                <h4><?php echo $post_date; ?></h4>
                                <a href="<?php echo $page_url; ?>">
                                    <p><?php echo $post_content; ?></p>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </li>
                </ul>
                <div class="col_fb">
                    <div class="fb-page" data-href="https://www.facebook.com/chronicle.web.official/" data-tabs="timeline" data-width="<?php echo $$fbSize; ?>" data-height="403" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/chronicle.web.official/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/chronicle.web.official/">リノベーションならクロニクル</a></blockquote></div>
                </div>
            </div><!-- // #btm_information -->
            <?php endif; ?>
            <?php
            $home = get_page_data(get_page_by_path('home'));
            $args = array(
                'post_type' => 'page',
                'include' =>$home['id']
            );
            $home_post = get_pages($args);
            ?>
            <div id="btm_recommend">
                <h3><img src="<?php bloginfo('template_directory'); ?>/common/images/home/img_btm_info_recommend.png" width="135" height="14" alt="RECOMMEND"></h3>

                <div id="btm_banner">
                    <div align="left">
                        <a href="https://www.instagram.com/chronicle_web.official/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/bnr-chronicle-Instagram.jpg" alt="" class="img-responsive line-pc"></a>
                        <a href="https://www.instagram.com/chronicle_web.official/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/bnr-chronicle-Instagram-sp.jpg" alt="" class="img-responsive line-sp"></a>
                    </div>
                    <div align="left">
                        <a href="https://www.prostyle-villa.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/villa-bannerPC.png" alt="" class="img-responsive line-pc"></a>
                        <a href="https://www.prostyle-villa.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/home/villa-bannnerSP.png" alt="" class="img-responsive line-sp"></a>
                    </div>
                    <ul>
                        <?php foreach($home_post as $post) : setup_postdata($post); ?>
                        <?php
                        while(the_repeater_field('footer_banner_list')):
                        $banner_title = get_sub_field('footer_banner_title');
                        $banner_img = wp_get_attachment_image_src(get_sub_field('footer_banner_img'), 'large');
                        $banner_url = get_sub_field('footer_banner_url');
                        ?>
                        <li><a href="<?php echo $banner_url; ?>" target="_blank"><img src="<?php echo $banner_img[0]; ?>" width="235" height="74" alt="<?php echo $banner_title; ?>"></a></li>
                        <?php endwhile; ?>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div><!-- // #btm_section_inner -->
    </div><!-- // #btm_section -->
</div><!-- // #contents -->

<?php get_footer(); ?>
