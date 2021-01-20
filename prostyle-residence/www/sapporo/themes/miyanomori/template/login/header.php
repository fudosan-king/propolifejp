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
                <?php if($lang === 'ja') : ?>
                    ログイン
                <?php elseif($lang === 'en') : ?>
                    Login
                <?php elseif($lang === 'zh') : ?>
                    登录
                <?php elseif($lang === 'tw') : ?>
                    登入
                <?php endif; ?>
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

<?php if($lang === 'ja') :  ?>
<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">物件エントリー者様限定サイト ログイン</h5>
        </div>
        <div class="modal-body">
            <form  method="post" class="frm_login" id="frm_login" >
                <div class="frm_login_top">
                    <h4>メールアドレスでログイン</h4>
                    <p class="status"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="メールアドレス" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="パスワード" name="password" id="password">
                    </div>
                    <div class="form-group mb-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( 'ログインする', 'miyanomori' ); ?></button>
                                <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <button class="btn btn-link btn_forgotpass" type="button" data-toggle="collapse" data-target="#forgot_password" aria-expanded="false" aria-controls="forgot_password">パスワードをお忘れの方はこちら</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" class="frm_login" id="form_forgot_password">
                <div class="frm_login_top collapse" id="forgot_password">
                    <h4>パスワードをお忘れの方</h4>
                     <p class="status"></p>
                    <div class="form-group confirm-email">
                        <input class="form-control" type="text" name="forgot_email"  id="forgot_email" placeholder="メールアドレスをご入力ください">
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                    <button type="submit" class="btn w-100 btn_brown" name="" /><?php esc_attr_e( 'パスワードを再設定する', 'miyanomori' ); ?></button>
                </div>
            </form>
            <form  method="post" class="frm_login" id="frm_regiter" >
                <div class="frm_login_bottom">
                    <h4>まだ物件エントリーされていない方は<span>下記よりエントリーください。</span>
                    <span>限定サイトへのログインパスワードをお送りします。</span></h4>
                    <p class="status"></p>
                    <div class="frm_login_bottom_content">
                        <p>物件エントリー者様限定サイトでは、<br>
                        未公開プランなど物件エントリー者様だけの「限定情報」を公開中です。</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="メールアドレス" name="useremail" id='useremail'>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="パスワード" name="userlogin" id='userlogin' style="display: none;">
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

<?php elseif($lang === 'en') :  ?>

<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Property Entry Members Site Login</h5>
        </div>
        <div class="modal-body">
            <form  method="post" class="frm_login" id="frm_login" >
                <div class="frm_login_top">
                    <h4>Login with Email Address</h4>
                    <p class="status"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    </div>
                    <div class="form-group mb-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( 'Login', 'miyanomori' ); ?></button>
                                <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <button class="btn btn-link btn_forgotpass" type="button" data-toggle="collapse" data-target="#forgot_password" aria-expanded="false" aria-controls="forgot_password">Please click here if you forgot your password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" class="frm_login" id="form_forgot_password">
                <div class="frm_login_top collapse" id="forgot_password">
                    <h4>Please click here if you forgot your password</h4>
                     <p class="status"></p>
                    <div class="form-group confirm-email">
                        <input class="form-control" type="text" name="forgot_email"  id="forgot_email" placeholder="Please key in your email address">
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                    <button type="submit" class="btn w-100 btn_brown" name="" /><?php esc_attr_e( 'Reset Password', 'miyanomori' ); ?></button>
                </div>
            </form>
            <form  method="post" class="frm_login" id="frm_regiter" >
                <div class="frm_login_bottom">
                    <h4>If you have not submitted your expression of interest to purchase the property, please submit it below.</span>
                    <span>We will send you a login password to the exclusive site after your submission.</span></h4>
                    <p class="status"></p>
                    <div class="frm_login_bottom_content">
                        <p>The Property Entry Members Exclusive Site <br>
                        has "Exclusive Information" for Property Entry members only, such as non-public plans.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" name="useremail" id='useremail'>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password" name="userlogin" id='userlogin' style="display: none;">
                        </div>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                        <button type="submit"  class="btn w-100 btn_brown d-block"><?php esc_attr_e('Submit expression of interest to purchase property'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<?php elseif($lang === 'zh') : ?>
<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">楼盘登记者限定网站 登录</h5>
        </div>
        <div class="modal-body">
            <form  method="post" class="frm_login" id="frm_login" >
                <div class="frm_login_top">
                    <h4>用邮箱地址登录</h4>
                    <p class="status"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="邮箱地址" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="密码" name="password" id="password">
                    </div>
                    <div class="form-group mb-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( '登录', 'miyanomori' ); ?></button>
                                <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <button class="btn btn-link btn_forgotpass" type="button" data-toggle="collapse" data-target="#forgot_password" aria-expanded="false" aria-controls="forgot_password">忘记密码的用户由此处</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" class="frm_login" id="form_forgot_password">
                <div class="frm_login_top collapse" id="forgot_password">
                    <h4>忘记密码的用户</h4>
                     <p class="status"></p>
                    <div class="form-group confirm-email">
                        <input class="form-control" type="text" name="forgot_email"  id="forgot_email" placeholder="请输入邮箱地址">
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                    <button type="submit" class="btn w-100 btn_brown" name="" /><?php esc_attr_e( '重新设置密码', 'miyanomori' ); ?></button>
                </div>
            </form>
            <form  method="post" class="frm_login" id="frm_regiter" >
                <div class="frm_login_bottom">
                    <h4>尚未登记到楼盘的各位请由下方登记。</span>
                    <span>发送专用网站的登录密码。</span></h4>
                    <p class="status"></p>
                    <div class="frm_login_bottom_content">
                        <p>在楼盘登记者的专用网站，<br>
                        公布尚未发布的方案等针对楼盘登记者的“限定信息”。</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="邮箱地址" name="useremail" id='useremail'>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="密码" name="userlogin" id='userlogin' style="display: none;">
                        </div>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                        <button type="submit"  class="btn w-100 btn_brown d-block"><?php esc_attr_e('楼盘登记'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<?php elseif($lang === 'tw') :  ?>
<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">建案報名者限定網站 登入</h5>
        </div>
        <div class="modal-body">
            <form  method="post" class="frm_login" id="frm_login" >
                <div class="frm_login_top">
                    <h4>以電子郵件信箱登入</h4>
                    <p class="status"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="電子郵件信箱" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="密碼" name="password" id="password">
                    </div>
                    <div class="form-group mb-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( '登入', 'miyanomori' ); ?></button>
                                <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <button class="btn btn-link btn_forgotpass" type="button" data-toggle="collapse" data-target="#forgot_password" aria-expanded="false" aria-controls="forgot_password">忘記密碼請至此</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" class="frm_login" id="form_forgot_password">
                <div class="frm_login_top collapse" id="forgot_password">
                    <h4>忘記密碼者</h4>
                     <p class="status"></p>
                    <div class="form-group confirm-email">
                        <input class="form-control" type="text" name="forgot_email"  id="forgot_email" placeholder="請輸入電子郵件信箱">
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                    <button type="submit" class="btn w-100 btn_brown" name="" /><?php esc_attr_e( '重設密碼', 'miyanomori' ); ?></button>
                </div>
            </form>
            <form  method="post" class="frm_login" id="frm_regiter" >
                <div class="frm_login_bottom">
                    <h4>若您尚未報名建案，請至下方報名。我們將會發送登入密碼以登入限定網站。</h4>
                    <p class="status"></p>
                    <div class="frm_login_bottom_content">
                        <p>建案報名者限定網站中，<br>
                        會發佈未公開方案等建案報名者專屬的「限定資訊」。</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="電子郵件信箱" name="useremail" id='useremail'>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="密碼" name="userlogin" id='userlogin' style="display: none;">
                        </div>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                        <button type="submit"  class="btn w-100 btn_brown d-block"><?php esc_attr_e('報名建案'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php endif; ?>