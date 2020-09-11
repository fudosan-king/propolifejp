<?php 
/*
    Template Name: Register
*/
?>

<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $email_exist = false;
    $user_email = '';
    if ( isset( $_POST['user_email'] ) && is_string( $_POST['user_email'] ) ) {
        $user_email = wp_unslash( $_POST['user_email'] );
    }
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_received = isset($_POST['user_received']) ? filter_var($_POST['user_received'], FILTER_VALIDATE_BOOLEAN)  : false ;
    $home_url = get_home_url();
    if(isset($_POST['login_register'])){
        if(!empty($user_email)){    
            $isExisted = email_exists( $user_email );
            if(!$isExisted){
                wp_create_user($user_email, $user_password, $user_email);
                wp_redirect($home_url.'/login/');
            }else{
                $email_exist = true;
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
            <!-- <div class="login_body_top">
                <h3>新規会員登録</h3>
                <a href="#" class="btn btn_social btnlogin_google">Googleでログイン</a>
                <a href="#" class="btn btn_social btnlogin_yahoo">Yahoo!JAPANでログイン</a>
                <a href="#" class="btn btn_social btnlogin_facebook mb-0">Facebookでログイン</a>
                <?php // echo get_social_login_button(); ?>
            </div> -->
            <div class="login_body_bottom">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="メールアドレス" name="user_email" value="<?php echo esc_attr($user_email); ?>" size="20" autocapitalize="off">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="パスワード（半角英数6文字以上）" name="user_password">
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="keeplogin" name="user_received">
                    <label class="custom-control-label" for="keeplogin">週刊ログリノベを受け取る</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn_login" name="login_register" value="register">入力を確認</button>
                </div>
                <?php if (!$invalid): ?>
                    <div class="form-group text-center">
                        <label class="login_error">メールアドレスまたはパスワードが無効です</label>
                    </div>
                <?php elseif($email_exist): ?>
                    <div class="form-group text-center">
                        <label class="login_error">電子メールアドレスはすでに存在しています</label>
                    </div>
                <?php endif; ?>
                <p class="mb-0 termofuse">登録することで、<a href="https://www.propolife.co.jp/terms/" target="_tbank">利用規約</a>と<a href="https://www.propolife.co.jp/privacypolicy/" target="_tbank">プライバシーポリシー</a>に同意したものとみなされます。</p>
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
