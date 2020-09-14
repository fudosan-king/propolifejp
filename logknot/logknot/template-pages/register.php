<?php 
/*
    Template Name: Register
*/
?>

<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '' ;
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_received = isset($_POST['user_received']) ? filter_var($_POST['user_received'], FILTER_VALIDATE_BOOLEAN)  : false ;

    if(isset($_POST['login_register'])){
        if(!empty($user_email)){        
            $isExisted = email_exists( $user_email );
            
            if(!$isExisted){

                // $creds = array(
                //     'user_login'    => $user->user_login,
                //     'user_password' => $user_password,
                //     'remember'      => $user_received
                // );
                // $user_ = wp_signon( $creds, false );
                header('Location:'.get_home_url());
            }else{
                $invalid = false;
            }
        }else{
            $invalid = false;
        }
    }
    
    
?>

<main>
    <section class="section_login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <h1><a href="<?php echo get_home_url(); ?>"><img src="<?php echo IMAGE_PATH; ?>/1x/logo.svg" alt="logrenove_logo" class="img-fluid" width="257"></a></h1>
                    <form method="post" class="frm_login">
                        <h2>新規登録</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_email" placeholder="メールアドレス">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_password" placeholder="パスワード">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="user_received" <?php echo $user_received ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="defaultCheck1">
                                ログリノベのメルマガを受け取る
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mx-auto">
                                <div class="form-group">
                                    <button type="submit" class="btn btnLogin" name="login_register">仮登録メールを送信する</button>
                                </div>
                                <?php if (!$invalid): ?>
                                    <div class="form-group text-center">
                                        <label class="register_error">ユーザー名もしくはパスワードが無効です。</label>
                                    </div>
                                <?php endif; ?>
                                <p class="register_sns">またはSNSアカウントで登録</p>
                                <p class="link_page"><a href="#">利用規約</a> ・ <a href="#">プライバシー</a>ポリシー に同意の上<br> 会員登録を行ってください。</p>
                                <a href="#" class="btn d-block btnfb">フェイスブックで登録する <i class="fab fa-facebook-f fa-lg ml-1"></i></a>
                                <a href="#" class="btn d-block btntw">ツイッターで登録する <i class="fab fa-twitter fa-lg ml-1"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>