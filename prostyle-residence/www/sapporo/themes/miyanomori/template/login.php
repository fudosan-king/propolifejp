<?php get_template_part( 'template/login/header'); ?>

<section class="slide-main before-login">

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
        <a href="#modal_login" data-toggle="modal" class="box_designsupervision" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            <div class="row no-gutters">
                <div class="col-8">
                    <div class="box_designsupervision_content">
                        <p>宮の森レジデンス 設計・監修</p>
                        <div class="box_designsupervision_img">
                            <img src="<?php bloginfo('template_directory');?>/assets/images/main/logo-interview-2x.png" alt="" class="img-fluid">
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

    <div class="news notlogin">
        <a href="#modal_login" data-toggle="modal">
            <div class="row">
                <div class="col-12 col-lg-2 align-self-center">
                    <h2>物件エントリー</h2>
                </div>
                <div class="col-12 col-lg-10 align-self-center">
                    <p>物件エントリー者様限定サイトでは、未公開プランなど物件エントリー者様だけの「限定情報」を公開中です。</p>
                </div>
            </div>
        </a>
    </div>

</section>