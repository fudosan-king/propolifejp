    </main>
    
    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav_footer">
                            <li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>" target="_blank">会社概要</a></li>
                            <li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
                            <li><a href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ); ?>" target="_blank">利用規約</a></li>
                            <li><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>" target="_blank">プライバシーポリシー</a></li>
                            <li><a href="https://www.propolife.co.jp/socialpolicy/" target="_blank">ソーシャルメディアポリシー</a></li>
                        </ul>
                        <p class="my-5"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="btn btn_contactus">お問い合わせ</a></p>
                        <a href="<?php echo get_home_url(); ?>" class="logo_footer"><img src="<?php echo TEMPLATE_ASSETS_PATH; ?>/img/1x/prostyle_ryokan.png" alt="" class="img-fluid" width="336"></a>
                    </div>
                </div>
            </div>
        </div>
         <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Copyright © PROSTYLE RYOKAN All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/js/common.js"></script>
    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/jquery.ripples/jquery.ripples-min.js"></script>
    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/lib/slick/slick.min.js"></script>
    <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/js/home.js%3Fdate=191124"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <?php if(is_page( 'contact' )): ?>
        <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
        <script src="<?php echo TEMPLATE_ASSETS_PATH; ?>/js/contact.js"></script>
    <?php endif; ?>
    
    </body>

</html>