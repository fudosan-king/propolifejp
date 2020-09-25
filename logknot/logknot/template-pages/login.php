<?php 
/*
    Template Name: Login
*/
?>

<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '' ;
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_remember = isset($_POST['user_remember']) ? filter_var($_POST['user_remember'], FILTER_VALIDATE_BOOLEAN)  : false ;

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
                header('Location:'.get_home_url());
            }else{
                $invalid = false;
            }
        }else{
            $invalid = false;
        }
    }
    
    
?>


<?php if(!is_user_logged_in()): ?>
<main>
    <section class="section_login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <h1><a href="<?php echo get_home_url(); ?>"><img src="<?php echo IMAGE_PATH; ?>/1x/logo.svg" alt="logrenove_logo" class="img-fluid" width="257"></a></h1>
                    <form method="post" class="frm_login">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h2>ログイン</h2>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="user_email" placeholder="メールアドレス" value="<?php echo $user_email; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="user_password" placeholder="パスワード">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="user_remember" <?php echo $user_remember ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="defaultCheck1">
                                        次回から自動的にログインする
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btnLogin" name="login_request">ログイン</button>
                                </div>
                                <?php if (!$invalid): ?>
                                    <div class="form-group text-center">
                                        <label class="login_error">ユーザー名もしくはパスワードが無効です。</label>
                                    </div>
                                <?php endif; ?>
                                <p class="my-4 text-center text_forgotpass"><a href="#">パスワードをお忘れの方</a></p>
                                <p>初めてご利用になるかたはこちらから新規登録をお願いいたします。</p>
                                <a href="signin.php" class="btn btnSignin d-block">新規登録</a>
                            </div>
                            <div class="col-12 col-md-6">
                                <h2 class="mb-1">SNSを使用してログイン</h2>
                                <p>SNSアカウントを使って会員登録をされた方はこちらからログインしていただけます。</p>
                                <a href="#" class="btn d-block btnfb">フェイスブックでログイン <i class="fab fa-facebook-f fa-lg ml-1"></i></a>
                                <a href="#" class="btn d-block btntw">ツイッターでログイン <i class="fab fa-twitter fa-lg ml-1"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
<?php 
    else:
        header('Location:'.get_home_url());
    endif;
 ?>
<?php get_footer(); ?>