
<section class="section_info_contact">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-lg-4">
                <div class="info_contact_item">
                    <p>
                        <i class="i_circle"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_email.svg" alt="" class="img-fluid" width="17"></i>
                    </p>
                    <h5 class="mb-2">お問い合わせフォーム</h5>
                    <a href="<?= home_url(); ?>/contactus" class="btn btncontactus"><span>お問い合わせ</span></a>
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
                    <h5>お電話でのお問い合わせ</h5>
                    <h3>Tel. <a href="tel:0120853133">0120-853-133</a></h3>
                    <p>スタッフ受付 10:00 ～ 18:00</p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
	<div class="container">
		<div class="row">
    		<div class="col-12 col-lg-12">
                <a href="<?= home_url() ?>"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_footer.svg" alt="" class="img-fluid mb-3" width="110"></a>
                <ul>
                    <li><a href="<?php echo home_url('/news/'); ?>">新着情報</a></li>
                    <li><a href="<?= home_url('/aboutus/'); ?> ">PROSTYLEについて</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/terms/">利用規約</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></li>
                    <li><a href="<?= home_url('/privacypolicy/'); ?>">プライバシーポリシー</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></li>
                </ul>
                
                <ul class="my-brand mb-0">
                    <li><a href="https://www.chronicle-web.com" target="blank_">【販売】<img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_chronicle.svg" alt="" width="120"></a></li>
                    <li><a href="https://www.prostyle-residence.com" target="blank_">【売主】 <img src="<?php bloginfo('template_directory');?>/assets/images/1x/logo_small.png" alt="" width="116"> </a></li>
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


<div class="modal fade" id="modal_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://my.matterport.com/show/?m=VHEQdZ6QNAh" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
  </div>
</div>
