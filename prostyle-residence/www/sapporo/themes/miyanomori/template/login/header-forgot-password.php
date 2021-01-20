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
       $message =  '<p class="message reset-pass">' . __( 'パスワード再設定リンクが無効です。下記より新たにリクエストを行ってください。' ) . '</p>';

    } else {
        $message =  '<p class="message reset-pass">' . __( 'パスワード再設定リンクの有効期限が切れています。下記より新たにリクエストを行ってください。' ) . '</p>';
    }
}


if ( empty($message) && isset( $_POST['pass1'] ) && ! empty( $_POST['pass1'] )) 
{
    reset_password( $user, $_POST['pass1'] );
 
    $message = '<p class="message reset-pass">パスワードをリセットしました。</p>';
}
?>

<?php if($lang === 'ja') :  ?>
<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <?php if(!empty($message)) { ?> 
                <div class="reset-password-success">
                    <?php echo $message; ?>
                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>トップページに戻る</p></a>
                </div>
            <?php }else{ ?> 
                <form action="<?php echo home_url('/lostpassword'); ?>?key=<?= $_GET['key'] ?>&login=<?= $_GET['login'] ?>" method="post" class="frm_login" id="frm_forgot_new_password" name="resetpassform" >
                    <div class="frm_login_top">
                        <h4>パスワード更新</h4>
                        <p class="status"></p>
                        <div class="form-group forgot_new-password">
                            <input autocomplete="off" type="passsword" class="form-control" size="24" placeholder="新しいパスワードをご入力ください" name="pass1" id="pass1" value="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>">
                            <span class="dashicons dashicons-hidden i-password"></span>
                        </div>

                        <div class="form-group" >
                            <p class="note-pass" style="display: none;">STRONG</p>
                            <p>パスワードは12文字以上の長さで大文字、小文字数字、<br>記号を含めてください。　※　記号の例（ ! - / $ % ^ & )</p>
                        </div>
                          
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" />
                                    <button type="submit" class="btn w-100 btn_brown" name="wp-submit" value=""/><?php esc_attr_e( 'パスワードをリセット', 'miyanomori' ); ?></button>
                                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>トップページに戻る</p></a>
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

<?php elseif($lang === 'en') :  ?>
<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <?php if(!empty($message)) { ?> 
                <div class="reset-password-success">
                    <?php echo $message; ?>
                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>Return to Top Page</p></a>
                </div>
            <?php }else{ ?> 
                <form action="<?php echo home_url('/lostpassword'); ?>?key=<?= $_GET['key'] ?>&login=<?= $_GET['login'] ?>" method="post" class="frm_login" id="frm_forgot_new_password" name="resetpassform" >
                    <div class="frm_login_top">
                        <h4>Renew Password</h4>
                        <p class="status"></p>
                        <div class="form-group forgot_new-password">
                            <input autocomplete="off" type="passsword" class="form-control" size="24" placeholder="Please key in new password" name="pass1" id="pass1" value="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>">
                            <span class="dashicons dashicons-hidden i-password"></span>
                        </div>

                        <div class="form-group" >
                            <p class="note-pass" style="display: none;">STRONG</p>
                            <p>Your password must be 12 characters long or more, consisting of both higher and lower cases, and symbols. *Symbol examples (! - / $ % ^ &)</p>
                        </div>
                          
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" />
                                    <button type="submit" class="btn w-100 btn_brown" name="wp-submit" value=""/><?php esc_attr_e( 'Reset Password', 'miyanomori' ); ?></button>
                                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>Return to Top Page</p></a>
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

<?php elseif($lang === 'zh') :  ?>
<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <?php if(!empty($message)) { ?> 
                <div class="reset-password-success">
                    <?php echo $message; ?>
                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>返回主页</p></a>
                </div>
            <?php }else{ ?> 
                <form action="<?php echo home_url('/lostpassword'); ?>?key=<?= $_GET['key'] ?>&login=<?= $_GET['login'] ?>" method="post" class="frm_login" id="frm_forgot_new_password" name="resetpassform" >
                    <div class="frm_login_top">
                        <h4>密码更新</h4>
                        <p class="status"></p>
                        <div class="form-group forgot_new-password">
                            <input autocomplete="off" type="passsword" class="form-control" size="24" placeholder="请输入新密码" name="pass1" id="pass1" value="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>">
                            <span class="dashicons dashicons-hidden i-password"></span>
                        </div>

                        <div class="form-group" >
                            <p class="note-pass" style="display: none;">STRONG</p>
                            <p>设置的密码必须超过12个字符且包含大写文字、小写文字数字和符号。※　符号的示例（ ! - / $ % ^ & )</p>
                        </div>
                          
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" />
                                    <button type="submit" class="btn w-100 btn_brown" name="wp-submit" value=""/><?php esc_attr_e( '重设密码', 'miyanomori' ); ?></button>
                                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>返回主页</p></a>
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

<?php elseif($lang === 'tw') :  ?>
<div class="modal fade show" id="modal_forgot_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <?php if(!empty($message)) { ?> 
                <div class="reset-password-success">
                    <?php echo $message; ?>
                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>返回首頁</p></a>
                </div>
            <?php }else{ ?> 
                <form action="<?php echo home_url('/lostpassword'); ?>?key=<?= $_GET['key'] ?>&login=<?= $_GET['login'] ?>" method="post" class="frm_login" id="frm_forgot_new_password" name="resetpassform" >
                    <div class="frm_login_top">
                        <h4>更新密碼</h4>
                        <p class="status"></p>
                        <div class="form-group forgot_new-password">
                            <input autocomplete="off" type="passsword" class="form-control" size="24" placeholder="請輸入新的密碼" name="pass1" id="pass1" value="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>">
                            <span class="dashicons dashicons-hidden i-password"></span>
                        </div>

                        <div class="form-group" >
                            <p class="note-pass" style="display: none;">STRONG</p>
                            <p>密碼請輸入 12 字元以上，並包含大寫、小寫、數字、符號。　※　符號範例（ ! - / $ % ^ & )</p>
                        </div>
                          
                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET['key'] ); ?>" />
                                    <button type="submit" class="btn w-100 btn_brown" name="wp-submit" value=""/><?php esc_attr_e( '重設密碼', 'miyanomori' ); ?></button>
                                    <a href="<?= get_site_url(); ?>" ><p class="link-back"><span class="dashicons dashicons-arrow-left-alt"></span>返回首頁</p></a>
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

<?php endif; ?>