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

<?php 
$user = check_password_reset_key( $_GET['key'], $_GET['login']);

if ( ! $user || is_wp_error( $user ) ) 
{
    if ( $user && $user->get_error_code() === 'expired_key' ) 
    {
       $message =  '<p class="message reset-pass">' . __( 'Your password reset link appears to be invalid. Please request a new link below. ' ) . '</p>';

    } else {
        $message =  '<p class="message reset-pass">' . __( 'Your password reset link has expired. Please request a new link below. ' ) . '</p>';
    }
}


if ( empty($message) && isset( $_POST['pass1'] ) && ! empty( $_POST['pass1'] )) 
{
    reset_password( $user, $_POST['pass1'] );
 
    $message = '<p class="message reset-pass">Your password has been reset. <a href="' .  home_url()  . '">Log in</a></p>';
}
?>
<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">物件エントリー者様限定サイト ログイン</h5>
        </div>
        <div class="modal-body">
            <?php if(!empty($message)) { ?> 
                <?php echo $message; ?>
            <?php }else{ ?> 
                <form action="<?php echo home_url('/lostpassword'); ?>?key=<?= $_GET['key'] ?>&login=<?= $_GET['login'] ?>" method="post" class="frm_login" id="frm_forgot_new_password" name="resetpassform" >
                    <div class="frm_login_top">
                        <h4>GET NEW PASSWORD</h4>
                        <p class="status"></p>
                        <div class="form-group forgot_new-password">
                            <input autocomplete="off" type="passsword" class="form-control" size="24" placeholder="New Password" name="pass1" id="pass1" value="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>">
                            <span class="dashicons dashicons-visibility i-password"></span>
                        </div>

                        <div class="form-group" >
                            <p class="note-pass" style="display: none;">STRONG</p>
                            <p>Hint: The password should be at least twelve characters long. To make it stronger, user upper and lower case letters, numbers, and symbold like ! - / $ % ^ & )</p>
                        </div>
                          
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" />
                                    <button type="submit" class="btn w-100 btn_brown" name="wp-submit" value=""/><?php esc_attr_e( 'Reset Password', 'miyanomori' ); ?></button>
                                    <p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>Back to [name-title-home-page]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
  </div>
</div>