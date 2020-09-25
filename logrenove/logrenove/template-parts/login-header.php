<div class="box_top_user_md">
    <?php $home_url = get_home_url(); 
        if (is_user_logged_in()): ?>
        <a href="<?php echo wp_logout_url($home_url); ?>" class="btn btnSignup float-right"><span>ログアウト</span></a>
    <?php else: ?>
        <a href="<?php echo esc_url(network_site_url('login')); ?>" class="btn btnSignup float-right ml-2"><span>ログイン</span></a>
        <a href="<?php echo esc_url(network_site_url('signup')); ?>" class="btn btnRegistration float-right"><span>新規会員登録</span></a>
    <?php endif; ?>
</div>
