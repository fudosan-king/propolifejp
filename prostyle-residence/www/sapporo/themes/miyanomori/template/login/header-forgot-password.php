<header class="header_before-login">
    <div class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="" class="img-fluid logo_white" width="246">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_black.svg" alt="" class="img-fluid logo_black" width="246">
        </a>
    </div>
</header>

<div class="bsnav-mobile d-block d-xl-none">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
</div>

<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">物件エントリー者様限定サイト ログイン</h5>
        </div>
        <div class="modal-body">
            <form  method="post" class="frm_login" id="frm_forgot_new_password" >
                <div class="frm_login_top">
                    <h4>GET NEW PASSWORD</h4>
                    <p class="status"></p>
                    <div class="form-group forgot_new-password">
                        <input autocomplete="off" type="passsword" class="form-control" placeholder="New Password" name="username" id="username">
                        <span class="dashicons dashicons-visibility i-password"></span>
                    </div>
                    <div class="form-group">
                        <p class="note-pass">STRONG</p>
                        <p>Hint: The password should be at least twelve characters long. To make it stronger, user upper and lower case letters, numbers, and symbold like ! - / $ % ^ & )</p>
                    </div>
                    <div class="form-group">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                                <button type="submit" class="btn w-100 btn_brown" name="login" value=""/><?php esc_attr_e( 'Reset Password', 'miyanomori' ); ?></button>
                                <input type="hidden" name="redirect" value="<?php echo get_home_url(); ?>" />
                                <p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>Back to [name-title-home-page]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>