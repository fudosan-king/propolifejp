<div class="login_footer text-center">
    <p>
        <a class="btn" href="https://www.propolife.co.jp/privacypolicy/" target="_tbank">プライバシーポリシー</a>
        <a class="btn" href="https://www.propolife.co.jp/terms/" target="_tbank">ログリノベ利用規約</a>
    </p>
    <p class="mt-4"><a href="<?php echo $home_url; ?>" class=""><img src="<?php echo IMAGE_PATH; ?>/1x/logo_gray.svg" alt="" class="img-fluid" width="163"></a></p>
    <p class="copyright"><?php echo get_field('footer_copyright', 'option'); ?></p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.pkgd.min.js"></script>
<?php wp_enqueue_script( 'login-script', SCRIPT_PATH.'/login-social.js'); ?>
