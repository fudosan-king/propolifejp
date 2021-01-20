 <section class="slide-main">
    <div class="slides">
        <div class="slideContent">
            <div class="slide slide-init js-slide" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main/bg_top.jpg)">
            </div>
            <div class="slide js-slide" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main/places.jpg)">
            </div>
            <div class="slide js-slide" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/main/img_view.jpg)">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a href="<?= home_url('message'); ?>" class="box_designsupervision" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            <div class="row no-gutters">
                <div class="col-8">
                    <div class="box_designsupervision_content">
                        <p>宮の森レジデンス 設計・監修</p>
                        <div class="box_designsupervision_img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/logo-interview-2x.png" alt="" class="img-fluid" >
                        </div>
                    </div>
                </div>
                <div class="col-4 align-self-center">
                    <div class="box_designsupervision_img_right">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/mr_kengo.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="scroll_down">
        <a href="#section_living" data-scroll class="scroll_title">Scroll</a>
    </div>
    <div class="slide-main_video">
        <a href="#videoPopup" data-toggle="modal"><p><i class="i-video"></i>プロスタイル札幌 宮の森　ブランド動画はこちら</p></a>
    </div>

    <div class="news news_afterlogin">
        <a href="<?= home_url('/news'); ?>">
            <div class="row">
                <div class="col-12 col-lg-2">
                    <h2>新着情報</h2>
                </div>
                <div class="col-12 col-lg-10">
                    <div class="carousel carousel_news">
                        <?php 
                           echo do_shortcode("[Miyanomori_Blogs  page='home_logged' ]");
                        ?>
                    </div>
                </div>
            </div>
        </a>
    </div>

</section>
<section id="section_living" class="section_living">
        <?php $living_section = get_field('living_section'); ?>
        <div class="container">
            <div class="row living">
                <div class="col-12 col-lg-6">
                    <div class="living_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/img01.jpg" data-aos="fade-up" data-aos-duration="3000" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="living_content" data-aos="fade-down" data-aos-duration="3000">
                        <ul class="list_global">
                            <li><span>PROSTYLE </span></li>
                            <li><span>MIYANOMORI</span></li>
                            <li class="active"><span>STORY</span></li>
                        </ul>
                        <h2 class="title"><?php echo $living_section['title']; ?></h2>
                        <p class="subtitle"><?php echo $living_section['sub_title']; ?></p>
                        <div class="mb-0"><?php echo $living_section['content']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_spring_summer">
        <?php $spring_summer_section = get_field('spring_summer_section'); ?>
        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/bg_spring_summer.png" alt="" class="img-fluid hide-mobile">
        <img src="<?php bloginfo('template_directory');?>/assets/images/main/sp/spring-summer-3x.jpg" alt="" class="img-fluid hide-pc show-mobile">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="spring_summer_content" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <ul class="list_global">
                            <li><span>PROSTYLE</span></li>
                            <li><span>MIYANOMORI</span></li>
                            <li class="active"><span>LOCATION.01</span></li>
                        </ul>
                        <h2 class="title"><?php echo $spring_summer_section['title']; ?></h2>
                        <p class="subtitle"><?php echo $spring_summer_section['sub_title']; ?></p>
                        <div class="mb-0"><?php echo $spring_summer_section['content']; ?></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                </div>
                <div class="col-12">
                    <div class="spring_summer_pictures">
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/ss01.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/ss02.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/ss03.jpg" alt="" class="img-fluid">
                        </span>
                    </div>
                    <h3 class="seasons ml-auto"><img src="<?php bloginfo('template_directory');?>/assets/images/1x/spring_simmer_2x.png" alt="" class="img-fluid"></h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section_autmun_winter">
        <?php $autumn_winter_section = get_field('autumn_winter_section'); ?>
        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/bg_autmun_winter.jpg" alt="" class="img-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3"></div>
                <div class="col-12 col-lg-9">
                    <div class="autmun_winter_content" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <ul class="list_global">
                            <li><span>PROSTYLE</span></li>
                            <li><span>MIYANOMORI</span></li>
                            <li class="active"><span>LOCATION.02</span></li>
                        </ul>
                        <h2 class="title"><?php echo $autumn_winter_section['title']; ?></h2>
                        <p class="subtitle"><?php echo $autumn_winter_section['sub_title']; ?></p>
                        <div class="mb-0"><?php echo $autumn_winter_section['content']; ?></div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="spring_summer_pictures">
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/aw01.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/aw02.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/aw03.jpg" alt="" class="img-fluid">
                        </span>
                    </div>
                    <h3 class="seasons"><img src="<?php bloginfo('template_directory');?>/assets/images/1x/autumn_winter_2x.png" alt="" class="img-fluid"></h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section_area_minyanomori">
        <?php $area_miyanomori_section = get_field('area_miyanomori_section'); ?>
        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/miyanomori_area.jpg" alt="" class="img-fluid hide-mobile">
        <img src="<?php bloginfo('template_directory');?>/assets/images/main/area-view-2x.jpg" alt="" class="img-fluid hide-pc show-mobile m-auto">
        <div class="area_minyanomori_content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 align-self-center">
                        <h1><?php echo $area_miyanomori_section['heading']; ?></h1>
                    </div>
                    <div class="col-12 col-lg-7 align-self-center">
                        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <ul class="list_global">
                                <li><span>PROSTYLE</span></li>
                                <li><span>MIYANOMORI</span></li>
                                <li class="active"><span>LOCATION.03</span></li>
                            </ul>
                            <h2 class="title"><?php echo $area_miyanomori_section['title']; ?></h2>
                            <div class="mb-0"><?php echo $area_miyanomori_section['content']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="area_minyanomori_pictures d-flex">
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/area01.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/area02.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/area03.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="item" >
                            <span class="overlay"></span>
                            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/area04.jpg" alt="" class="img-fluid">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_interview">
        <?php $interview_section = get_field('interview_section'); ?>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-lg-6">
                    <div class="interview_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/mr_kengokuma01.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="box_interview_info">
                        <h4>PROFILE</h4>
                        <p><?php echo $interview_section['profile']; ?></p>
                        <a href="https://kkaa.co.jp" target="_blank" class="btn-link"><?php echo $interview_section['profile_button_text']; ?></a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="interview_content">
                        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="interview_content_img">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/1x/kengokuma.png" alt="" class="img-fluid" width="466">
                            </div>
                            <ul class="list_global">
                                <li><span>PROSTYLE</span></li>
                                <li><span>MIYANOMORI</span></li>
                                <li class="active"><span>INTERVIEW/ KENGO KUMA</span></li>
                            </ul>
                            <h2 class="title"><?php echo $interview_section['title']; ?></h2>
                            <?php echo $interview_section['content']; ?>
                            <a href="<?= home_url('/message'); ?>" class="btn btn-itv"> <span><?php echo $interview_section['message_button']; ?></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--     <section class="video-miyanomori after-logged js-popup-video">
        <div class="modal fade" id="videoPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <video id="video_miyanomori" loop playsinline>
                  <source src="https://pardot-s3.s3-ap-northeast-1.amazonaws.com/miyanomori/210129_%E7%B4%8D%E5%93%81%E3%83%86%E3%82%99%E3%83%BC%E3%82%BF.mp4" type="video/mp4">
                </video>
              </div>
            </div>
          </div>
        </div>
    </section> -->
