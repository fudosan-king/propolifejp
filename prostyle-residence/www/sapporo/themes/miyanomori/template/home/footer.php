
<section class="section_info_contact">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-lg-4">
                <div class="info_contact_item">
                    <p>
                        <i class="i_circle"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_email.svg" alt="" class="img-fluid" width="17"></i>
                    </p>
                    <h5 class="mb-2"><?php the_field('contact_text','option'); ?></h5>
                    <a href="<?= home_url(); ?>/contactus" class="btn btncontactus"><span><?php the_field('contact_button_text','option'); ?></span></a>
                </div>
            </div>
<!--             <div class="col-12 col-lg-4">
                <div class="info_contact_item">
                    <p>
                        <i class="i_circle"><img src="<?php //bloginfo('template_directory');?>/assets/images/SVG/i_chat.svg" alt="" class="img-fluid" width="23"></i>
                    </p>
                    <h5>チャットサポート</h5>
                    <p>スタッフ受付 10:00 - 19:00</p>
                </div>
            </div> -->
            <div class="col-12 col-lg-4">
                <div class="info_contact_item last_child">
                    <p>
                        <i class="i_circle"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_tel.svg" alt="" class="img-fluid" width="17"></i>
                    </p>
                    <?php the_field('contact_info','option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
	<div class="container">
		<div class="row">
    		<div class="col-12 col-lg-12">
                <a href="<?= home_url() ?>"><img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/logo-y-v-en.png" alt="" class="img-fluid mb-3" width="110"></a>
                <!-- <ul>
                    <li><a href="<?php echo home_url('/news/'); ?>">新着情報</a></li>
                    <li><a href="<?= home_url('/aboutus/'); ?> ">PROSTYLEについて</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/terms/">利用規約</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></li>
                    <li><a href="<?= home_url('/privacypolicy/'); ?>">プライバシーポリシー</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></li>
                </ul> -->

                <ul>
                    <?php if ( have_rows('footer_menu', 'option') ) {
                        while ( have_rows('footer_menu', 'option') ) { the_row();
                            $text = get_sub_field('text');
                            $url = get_sub_field('url');
                            ?>
                                <li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
                            <?php
                        }
                    } ?>
                </ul>
                
                <ul class="my-brand mb-0">
                    <li><a href="https://www.chronicle-web.com" target="blank_"><?= _e('【売主・共同事業主】','miyanomori'); ?><img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/chronicle-logo-en.svg" alt="" width="120"></a></li>
                    <li><a href="https://www.prostyle-residence.com" target="blank_"><?= _e('【共同事業主】','miyanomori'); ?><img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/prostyle-logo-en.svg" alt="" width="116"> </a></li>
                </ul>
            </div>
		</div>
	</div>
    <div class="footer_bottom">
        <address>
            <p class="mb-0">Copyright © <a target="_blank" href="https://www.prostyle-residence.com/">PROSTYLE INC.</a> All Rights Reserved.</p>
        </address>
    </div>
</footer>


<div class="bsnav-mobile-overlay"></div>



<section class="video-miyanomori after-logged js-popup-video">
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
</section>


