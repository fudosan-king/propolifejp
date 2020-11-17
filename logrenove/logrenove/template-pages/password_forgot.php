<?php 
/*
    Template Name: Password Forgot
*/
?>
<?php get_header( 'login' ); ?>

<?php 
    $invalid = true;
    $msg = '';
    $user_email = '';
    $pass1 = isset($_POST['pass1'])?$_POST['pass1']:'';
    $pass2 = isset($_POST['pass2'])?$_POST['pass2']:'';
    if ( isset( $_POST['user_email'] ) && is_string( $_POST['user_email'] ) ) {
        $user_email = wp_unslash( $_POST['user_email'] );
    }
    $home_url = get_home_url();
    if(isset($_POST['action']) && $_POST['action']=='reset-password') {
    	$result = send_mail_reset_password($user_email);
    	$invalid = $result['invalid'];
    	$msg = $result['msg'];
    }
    elseif(isset($_GET['action']) && $_GET['action']=='rp') {
    	$result = verify_reset_password();
    	$invalid = $result['invalid'];
    	$msg = $result['msg'];
    }
    if(isset($_REQUEST['error'])) {
    	$error = $_REQUEST['error'];
    	if($error == 'expiredkey') $msg = 'パスワードリセット用リンクの期限が切れています。以下から新しいリンクをリクエストしてください。';
    	elseif($error == 'invalidkey') $msg = 'パスワードリセット用リンクが無効のようです。以下から新しいリンクをリクエストしてください。';
    	elseif($error == 'passempty') $msg = 'パスワードを空白のままにすることはできません';
    	elseif($error == 'passnotmatch') $msg = 'パスワードの確認が一致しません';
    	elseif($error == 'passmin6') $msg = 'パスワードは6文字以上である必要があります';
    	elseif($error == 'passhalfwidth') $msg = '半角文字のパスワード';
    }
?>
<?php if(!is_user_logged_in()): ?>

<div class="login_page">
    <div class="login_header">
        <a href="<?php echo $home_url; ?>" class=""><img src="<?php echo IMAGE_PATH; ?>/1x/logo.svg" alt="" class="img-fluid" width="250"></a>
    </div>
    <div class="login_body">
        <form method="post" class="frm_main_login" action="<?php echo esc_url(network_site_url(add_query_arg('action', $_GET['action']))); ?>">
        	<?php if(isset($_POST['action']) && $_POST['action']=='reset-password' && !$invalid) { ?>
	        	<div class="login_body_bottom">
	                <p class="text">ご入力いただいたメールアドレスに、パスワード再設定用のURLをお送りしました。</p>
	                <p class="text">
	                メールをご確認いただき、記載されたURLからパスワードの再発行を行ってください。</p>
	         		<div class="form-group">
	                    <a href="<?php echo $home_url; ?>" class="btn btn_social btn_member mb-0">ログリノベTOPへ戻る</a>
	                </div>
	        	</div>
        	<?php } elseif(isset($_GET['action']) && $_GET['action']=='rp') { ?>
        		<div class="register-pass">
	        		<div class="login_body_top">
	                	<p class="text" style="text-align: center;">新しいパスワードを入力してください。</p>
	                    <div class="form-group">
	                        <input type="password" class="form-control" name="pass1" placeholder="パスワード（半角英数6文字以上）" value="<?php echo esc_attr($pass1); ?>">
	                    </div>
	                      <div class="form-group">
	                        <input type="password" class="form-control" name="pass2" placeholder="パスワード確認（半角英数6文字以上）" value="<?php echo esc_attr($pass2); ?>">
	                    </div>
	                    <div class="form-group mt-4">
	                        <button type="submit" class="btn btn_login" name="action" value="reset">設定する</button>
	                    </div>
	                    <?php if (!empty($msg)): ?>
		                    <div class="form-group text-center">
		                        <label class="login_error"><?php echo $msg; ?></label>
		                    </div>
		                <?php endif; ?>
	                </div>
	            </div>
	        <?php } elseif(isset($_GET['action']) && $_GET['action'] == 'finish') { ?>
	        	<div class="go-login">
	        		<div class="login_body_top">
	                	<p class="text">新しいパスワードに変更いたしました。</p>
	                    <p class="text">ログインページより新しいパスワードでログインを行ってください。</p>
	                    <div class="form-group mt-4">
	                        <a href="<?php echo $home_url; ?>" class="btn btn_login">ログインページへ</a>
	                    </div>
	                </div>
	        	</div>
        	<?php } else { ?>
        		<div class="register-email">
		            <div class="login_body_top">
		            	<p class="text">LogRenoveにご登録済みのメールアドレスを入力してください。メールにパスワード再設定用のURLをお送りします。</p>
		                <div class="form-group">
		                	<label>メールアドレス</label>
		                    <input type="text" class="form-control" placeholder="例：logrenove@gmail.com" name="user_email" value="<?php echo esc_attr($user_email); ?>" size="20" autocapitalize="off">
		                </div>
		                <div class="form-group mt-4">
		                    <button type="submit" class="btn btn_login" name="action" value="reset-password">送信</button>
		                </div>
		                <?php if ($invalid): ?>
		                    <div class="form-group text-center">
		                        <label class="login_error"><?php echo $msg; ?></label>
		                    </div>
		                <?php endif; ?>
		            </div>
		            <div class="login_body_bottom">
		                <p class="text-center mb-2">初めての方はこちら</p>
		                <a href="<?php echo esc_url(network_site_url('signup')); ?>" class="btn btn_social btn_member mb-0">新規会員登録</a>
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
