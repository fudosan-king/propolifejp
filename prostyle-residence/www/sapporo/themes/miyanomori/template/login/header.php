<header>
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand" href="index.php">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="" class="img-fluid logo_white" width="246">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_black.svg" alt="" class="img-fluid logo_black" width="246">
        </a>

        <div class="btn-action">
            <button class="user-login class="nav-link" href="#modal_login" data-toggle="modal">
                <span class="user-login_icon"></span>
            </button>
            <button class="navbar-toggler toggler-spring menu hide-mobile">
                <span class="menuLine"></span>
                <span class="menuLine"></span>
                <!-- <span class="menuLine"></span> -->
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="#modal_login" data-toggle="modal"><span>ログイン</span></a></li>
                 <li class="nav-item js-menuAnimation dropdown dropdown-right hide-mobile fade">
                    <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0 lang hide-pc show-mobile">
                 <li class="nav-item js-menuAnimation dropdown dropdown-right fade">
                    <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0 hide-pc show-mobile">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="#modal_login" data-toggle="modal"><span>ログアウト</span></a></li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0  hide-pc show-mobile"></ul>
            
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
                                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="btn btn-link btn_forgotpass">パスワードをお忘れの方はこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form  method="post" class="frm_login" id="frm_regiter" >
                <div class="frm_login_bottom">
                    <h4>まだ物件エントリーされていない方は<span>下記よりエントリーください。</span><br>
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