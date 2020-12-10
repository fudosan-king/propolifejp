<?php 
/*
    Template Name: Register
*/
?>

<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $msg = '';
    $user_email = '';
    if ( isset( $_POST['user_email'] ) && is_string( $_POST['user_email'] ) ) {
        $user_email = wp_unslash( $_POST['user_email'] );
    }
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_password2 = isset($_POST['user_password2']) ? $_POST['user_password2'] : '' ;
    $home_url = get_home_url();
    if(isset($_POST['login_register'])){
        $result = signup_user($user_email, $user_password, $user_password2);
        $invalid = $result['invalid'];
        $msg = $result['msg'];
    }
    elseif(isset($_GET['action']) && $_GET['action']=='active') {
        active_user();
    }
    
?>
<?php if(!is_user_logged_in()): ?>
<div class="login_page">
    <div class="login_header">
        <a href="<?php echo $home_url; ?>" class=""><img src="<?php echo IMAGE_PATH; ?>/1x/logo.svg" alt="" class="img-fluid" width="250"></a>
    </div>
    <div class="login_body">
        <form method="post" class="frm_main_login" action="<?php echo esc_url(network_site_url(add_query_arg('action', $_GET['action']))); ?>">
            <?php if(isset($_GET['action']) && $_GET['action']=='confirm') { ?>
                <div class="login_body_top">
                    <h2>メールアドレスの確認</h2>
                    <p class="cf-head">ご入力メールアドレスに、本登録の方法を記載したメールを送信しました。メールを確認し、本登録を完了させてください。</p>
                    <p class="cf-note">※メールが届くまで、数分かかる場合がございます。<br>
    ※また、メールソフトの迷惑メール機能により、登録確認メールが迷惑メールに分類されてしまうことがございます。</p>
                </div>
                <div class="login_body_bottom">
                    <div class="form-group">
                        <a href="<?php echo $home_url; ?>" class="btn btn_social btn_member mb-0">ログリノベTOPへ戻る</a>
                    </div>
                </div>
            <?php } elseif(isset($_GET['action']) && $_GET['action']=='active') { ?>
                <div class="login_body_top">
                    <h2>会員登録が完了しました</h2>
                    <p class="cf-head">ご登録メールアドレス宛に「会員登録完了のお知らせ」をお送りしました。</p>
                    <p class="cf-note">※メールが届くまで、数分かかる場合がございます。<br>
    ※また、メールソフトの迷惑メール機能により、登録確認メールが迷惑メールに分類されてしまうことがございます。</p>
                </div>
                <div class="login_body_bottom">
                    <div class="form-group">
                        <a href="<?php echo $home_url; ?>/login" class="btn btn_social btn_member mb-0">ログインページへ</a>
                    </div>
                </div>
                <!-- <div class="register-complete">
                    <div class="login_body_top">
                        <p class="text">会員登録が完了しました</p>
                        <p class="img">
                            <img src="<?php echo IMAGE_PATH; ?>/register-complete.png" class="hide-mobile img-fluid" alt="" title="">
                           <img src="<?php echo IMAGE_PATH; ?>/2x/register-complete.png" class="hide-pc show-mobile img-fluid" alt="" title="">
                        </p>
                        <div class="form-group mt-4">
                            <a href="<?php echo $home_url; ?>/login" class="btn btn_social btn_member mb-0">ログインページへ</a>
                        </div>
                    </div>
                </div> -->
            <?php } else { ?>
                <div class="register-page">
                    <div class="login_body_top">
                        <h3>新規会員登録</h3>
                        <!-- <a href="#" class="btn btn_social btnlogin_google">Googleでログイン</a>
                        <a href="#" class="btn btn_social btnlogin_yahoo">Yahoo!JAPANでログイン</a>
                        <a href="#" class="btn btn_social btnlogin_facebook mb-0">Facebookでログイン</a> -->
                        <?php // echo get_social_login_button(); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="メールアドレス" name="user_email" value="<?php echo esc_attr($user_email); ?>" size="20" autocapitalize="off">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="パスワード（半角英数6文字以上）" name="user_password" value="<?php echo esc_attr($user_password); ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="パスワード確認（半角英字6文字以上）" name="user_password2" value="<?php echo esc_attr($user_password2); ?>">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="keeplogin" name="mail_magazine" value="1" checked>
                            <label class="custom-control-label" for="keeplogin">週刊ログリノベを受け取る</label>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn_login" name="login_register" value="register">登録</button>
                        </div>
                        <?php if ($invalid && isset($_POST['login_register'])): ?>
                            <div class="form-group">
                                <label class="login_error"><?php echo $msg; ?></label>
                            </div>
                        <?php endif; ?>
                        <p class="mb-0 termofuse">登録することで、<a href="https://www.propolife.co.jp/terms/" target="_tbank">利用規約</a>と<a href="https://www.propolife.co.jp/privacypolicy/" target="_tbank">プライバシーポリシー</a>に同意したものとみなされます。</p>
                    </div>
                    <div class="login_body_bottom">
                        <p class="text-center mb-2">登録済みの方はこちら</p>
                        <a href="<?php echo site_url('login');?>" class="btn btn_login">ログイン</a>
                    </div>
                </div>
            <?php } ?>
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
