<?php if(is_front_page()): ?>
    <?php 
        $currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

        $noticeContent = '';
        switch($currentLanguage){
            case 'en':{
                $noticeContent = '<p>[Notice of business resumption]</p>
                    <p>PROSTYLE Ryokan Yokohama Bashamichi is affected by the new coronavirus<br>
                    It was closed from April 1st, but it will be restarted from June 1st.<br>
                    <br>
                    Upon restarting business, we will continue to thoroughly implement infection prevention measures so that customers can use our products more safely and securely.</p>';
            }break;
            case 'zh':{
                $noticeContent = '<p>【恢复正常营业的通知】</p>
                    <p>PROSTYLE旅馆横滨马车道店于6月1日开始正式恢复营业。<br>
                    为保证顾客的安全与健康，我们将继续采取措施防止感染。<br>
                    <br>
                    期待您的光临。</p>';
            }break;
            case 'tw':{
                $noticeContent = '<p>【恢複正常營業的通知】</p>
                    <p>PROSTYLE旅館橫濱馬車道店於6月1日開始正式恢複營業。<br>
                    為保證顧客的安全與健康，我們將繼續采取措施防止感染。<br>
                    <br>
                    期待您的光臨。</p>';
            }break;
            default:{
                $noticeContent = '
                                  <p class="d-block d-md-none">
                                        <img src="'.IMAGES_PATH.'/1x/stay_hotel_test.jpg" alt="Search" data-tripla-booking-widget="search" class="img-fluid" width="480px">
                                  </p>
                                  <p class="d-none d-md-block">
                                        <img src="'.IMAGES_PATH.'/1x/stay_hotel_test.jpg" alt="Search" data-tripla-booking-widget="search" class="img-fluid" width="480px">
                                  </p>';
            }
        }
    ?>
    <section class="section_banner p-0">
        <div id="P_masterslider" class="master-slider-parent ms-parent-id-27" >
            <div id="masterslider" class="master-slider ms-skin-default" >
                <div class="ms-overlay-layers" data-delay="5" data-fill-mode="fill" >
                    <div class="ms-layer d-none d-md-block"
                    style=""
                    data-effect="t(true,n,90,n,n,n,n,n,0.5,0.5,n,n,n,n,n)"
                    data-duration="2000"
                    data-delay="200"
                    data-ease="easeOutQuint"
                    data-masked="true"
                    data-offset-x="0"
                    data-offset-y="-100"
                    data-origin="mc"
                    data-position="normal"
                    data-mask-width="230"><h1><img src="<?php echo IMAGES_PATH; ?>/1x/logo_banner.png" alt="PROSTYLE旅館 横浜馬車道" width="214"></h1>
                    </div>
                    <h2 class="ms-layer msp-cn-136-5"
                    style=""
                    data-effect="t(true,n,30,n,n,n,n,n,n,n,n,n,n,n,n)"
                    data-duration="4000"
                    data-delay="400"
                    data-ease="easeOutQuint"
                    data-offset-x="-3"
                    data-offset-y="80"
                    data-origin="mc"
                    data-position="normal"
                    data-masked="true"
                    data-mask-width="1300">文明開化の地で心地よい安らぎを
                    </h2>

                    <!-- <div class="ms-layer d-none d-md-block "
                    style=""
                    data-effect="t(true,n,30,n,n,n,n,n,n,n,n,n,n,n,n)"
                    data-duration="4000"
                    data-delay="400"
                    data-ease="easeOutQuint"
                    data-offset-x="0"
                    data-offset-y="150"
                    data-origin="mc"
                    data-position="normal"
                    data-masked="true"
                    data-mask-width="900"><p class="d-block" style="text-align: center;"><a href="#"><img src="<?php // echo IMAGES_PATH; ?>/1x/goto_prostyle_r.jpg"  alt='Search' data-tripla-booking-widget='search' ></a></p>
                    </div>

                    <div class="ms-layer d-block d-md-none"
                    style=""
                    data-effect="t(true,n,30,n,n,n,n,n,n,n,n,n,n,n,n)"
                    data-duration="4000"
                    data-delay="400"
                    data-ease="easeOutQuint"
                    data-offset-x="0"
                    data-offset-y="350"
                    data-origin="mc"
                    data-position="normal"
                    data-masked="true"
                    data-mask-width="900"><p class="d-block" style="text-align: center;"><a href="#"><img src="<?php // echo IMAGES_PATH; ?>/1x/goto_prostyle_r.jpg"  alt='Search' data-tripla-booking-widget='search' ></a></p>
                    </div> -->

                

                    <!-- <div class="ms-layer "
                    style=""
                    data-effect="t(true,n,30,n,n,n,n,n,n,n,n,n,n,n,n)"
                    data-duration="4000"
                    data-delay="400"
                    data-ease="easeOutQuint"
                    data-offset-x="0"
                    data-offset-y="250"
                    data-origin="mc"
                    data-position="normal"
                    data-masked="true"
                    data-mask-width="500"><?php //echo $noticeContent; ?>
                    </div> -->
                    
                </div>



                <?php
                    $banner_gallery = get_field('banner_gallery');
                    if(!empty($banner_gallery)){
                        foreach($banner_gallery as $banner){
                            ?>
                                <div class="ms-slide" data-delay="5" data-fill-mode="fill" >
                                    <img src="<?php echo IMAGES_PATH; ?>/1x/blank.gif" alt="" title="" data-src="<?php echo $banner['url']; ?>">
                                </div>
                            <?php
                        }
                    } 
                ?>
            </div>
        </div>
    </section>
<?php else:
    $featureImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );

    $extraClass = '';
    if((is_page_template( 'default' ) || is_page( 'faqs' ) || is_page( 'outline' )) && !is_single()){
        $extraClass = 'section_subbanner_article';
    }

    if(is_page_template( 'page-templates/how-to-sauna.php' )){
        $extraClass = 'banner_sauna';
    }
?>
    <section class="section_subbanner p-0 <?php echo $extraClass; ?>">
        <img src="<?php echo $featureImage; ?>" alt="" class="img-fluid">
        <h2><?php the_title(); ?></h2>
    </section>
<?php endif; ?>
