<?php 
/*
    Template Name: Login
*/
?>

<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $user_email = '';
    if ( isset( $_POST['user_email'] ) && is_string( $_POST['user_email'] ) ) {
        $user_email = wp_unslash( $_POST['user_email'] );
    }
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_remember = isset($_POST['user_remember']) ? filter_var($_POST['user_remember'], FILTER_VALIDATE_BOOLEAN)  : false ;
    $home_url = get_home_url();
    if(isset($_POST['login_request'])){
        if(!empty($user_email)){        
            $user = get_user_by( 'email', $user_email  );
            $auth = wp_check_password( $user_password, $user->user_pass, $user->ID );
            
            if($auth){

                $creds = array(
                    'user_login'    => $user->user_login,
                    'user_password' => $user_password,
                    'remember'      => $user_remember
                );
                $user_ = wp_signon( $creds, false );
                wp_redirect($home_url);
                exit;
            }else{
                $invalid = false;
            }
        }else{
            $invalid = false;
        }
    }
?>
<?php if(!is_user_logged_in()): ?>
<div class="login_page">
    <div class="login_header">
        <a href="<?php echo $home_url; ?>" class=""><img src="<?php echo IMAGE_PATH; ?>/1x/logo.svg" alt="" class="img-fluid" width="250"></a>
    </div>
    <div class="login_body">
        <form method="post" class="frm_main_login">
            <div class="login_body_top">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="メールアドレス" name="user_email" value="<?php echo esc_attr($user_email); ?>" size="20" autocapitalize="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="パスワード（半角英数6文字以上）" name="user_password">
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="true" name="user_remember" id="keeplogin" <?php echo $user_remember ? 'checked' : ''; ?>>
                    <label class="custom-control-label" for="keeplogin">週刊ログリノベを受け取る</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn_login" name="login_request" value="login">ログイン</button>
                </div>
                <?php if (!$invalid): ?>
                    <div class="form-group text-center">
                        <label class="login_error">メールアドレスまたはパスワードが無効です</label>
                    </div>
                <?php endif; ?>
                <p class="mb-0"><a class="btn_forgotpass" href="#">パスワードをお忘れの方はこちら</a></p>
            </div>
            <div class="login_body_bottom">
                <?php // echo get_social_login_button(); ?>
                <!-- <a href="#" class="btn btn_social btnlogin_google">Googleでログイン</a>
                <a href="#" class="btn btn_social btnlogin_yahoo">Yahoo!JAPANでログイン</a>

                <a href="#" class="btn btn_social btnlogin_facebook">Facebookでログイン</a> -->
                <p class="mt-5 text-center mb-2">初めての方はこちら</p>
                <a href="<?php echo esc_url(network_site_url('signup')); ?>" class="btn btn_social btn_member mb-0">新規会員登録</a>
            </div>
        </form>
    </div>
    <?php require(dirname( __FILE__ ).'/../includes/login-footer.php'); ?>
</div>
<?php 
    else:
        wp_redirect($home_url);
        exit;
    endif;
 ?>
