<div class="login_footer text-center">
    <p>
        <a class="btn" href="#">プライバシーポリシー</a>
        <a class="btn" href="#">ログリノベ利用規約</a>
    </p>
    <p class="mt-4"><a href="<?php echo $home_url; ?>" class=""><img src="<?php echo IMAGE_PATH; ?>/1x/logo_gray.svg" alt="" class="img-fluid" width="163"></a></p>
    <p class="copyright"><?php echo get_field('footer_copyright', 'option'); ?></p>
</div>

<?php wp_enqueue_script( 'login-script', SCRIPT_PATH.'/login-social.js'); ?>