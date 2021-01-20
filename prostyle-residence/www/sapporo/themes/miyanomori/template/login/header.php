<header class="header_before-login">
    <div class="navbar navbar-expand-lg">
        
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/logo-y-en.png" alt="" class="img-fluid logo_white">
            <img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/logo-y-en.png" alt="" class="img-fluid logo_black">
        </a>
      
        <?php $lang = qtranxf_getLanguage(); ?>
        <div class="btn-action">
            <button class="user-login" class="nav-link" href="#modal_login" data-toggle="modal">
                <span class="user-login_icon"></span>
            </button>
            <button class="navbar-toggler toggler-spring menu hide-mobile">
                <span class="menuLine"></span>
                <span class="menuLine"></span>
                <!-- <span class="menuLine"></span> -->
            </button>
        </div>

        <div class="collapse navbar-collapse menu-list">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="#modal_login" data-toggle="modal"><span>
                <?= _e('ログイン','miyanomori'); ?>
                </span></a></li>
                <li class="nav-item dropdown">
                    <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav lang menu-mobile"></ul>
            <ul class="navbar-nav menu-mobile"></ul>
            <ul class="navbar-nav menu-mobile"></ul>
        </div>
    </div>
</header>

<div class="bsnav-mobile d-block d-xl-none">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
</div>

<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= _e('物件エントリー者様限定サイト ログイン','miyanomori'); ?></h5>
            </div>
            <div class="modal-body">
                <form  method="post" class="frm_login" id="frm_login" >
                    <div class="frm_login_top">
                        <h4><?= _e('メールアドレスでログイン','miyanomori'); ?></h4>
                        <p class="status"></p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= _e('メールアドレス','miyanomori'); ?>" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="<?= _e('パスワード','miyanomori'); ?>" name="password" id="password">
                        </div>
                        <div class="form-group mb-0">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6">
                                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                    <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( 'ログインする', 'miyanomori' ); ?></button>
                                    <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                                </div>
                                <div class="col-12 col-lg-6 text-center">
                                    <button class="btn btn-link btn_forgotpass" type="button" data-toggle="collapse" data-target="#forgot_password" aria-expanded="false" aria-controls="forgot_password"><?= _e('パスワードをお忘れの方はこちら','miyanomori'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form method="post" class="frm_login" id="form_forgot_password">
                    <div class="frm_login_top collapse" id="forgot_password">
                        <h4><?= _e('パスワードをお忘れの方','miyanomori'); ?></h4>
                         <p class="status"></p>
                        <div class="form-group confirm-email">
                            <input class="form-control" type="text" name="forgot_email"  id="forgot_email" placeholder="<?= _e('メールアドレスをご入力ください','miyanomori'); ?>">
                        </div>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                        <button type="submit" class="btn w-100 btn_brown" name="" /><?php esc_attr_e( 'パスワードを再設定する', 'miyanomori' ); ?></button>
                    </div>
                </form>
                <form  method="post" class="frm_login" id="frm_regiter" >
                    <div class="frm_login_bottom">
                        <h4><?= _e('まだ物件エントリーされていない方は','miyanomori'); ?><span><?= _e('下記よりエントリーください。','miyanomori'); ?></span>
                        <span><?= _e('限定サイトへのログインパスワードをお送りします。','miyanomori'); ?></span></h4>
                        <p class="status"></p>
                        <div class="frm_login_bottom_content">
                            <p><?= _e('物件エントリー者様限定サイトでは、','miyanomori'); ?><br>
                            <?= _e('未公開プランなど物件エントリー者様だけの「限定情報」を公開中です。','miyanomori'); ?></p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= _e('メールアドレス','miyanomori'); ?>" name="useremail" id='useremail'>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= _e('パスワード','miyanomori'); ?>" name="userlogin" id='userlogin' style="display: none;">
                            </div>
                            <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                            <button type="submit"  class="btn w-100 btn_brown d-block"><?php esc_attr_e('物件エントリーする'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
