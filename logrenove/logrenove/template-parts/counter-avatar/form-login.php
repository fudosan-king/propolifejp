<form method="post" class="frm_avatar_login">
	<?php include 'form-pardot.php'; ?>
	<input type="hidden" name="status" value="login-booking">
	<div class="form-group">
		<p>メールアドレス（半角英数字）</p>
		<div class="row">
			<div class="col-2 col-md-1">
				<label class="title">必 須</label>
			</div>
			<div class="col-10 col-md">
				<input placeholder="例：xxxxxxx@logrenove.jp" class="form-control required" type="text" name="user_email" value="">
			</div>
		</div>
	</div>

	<div class="form-group">
		<p>パスワード</p>
		<div class="row">
			<div class="col-2 col-md-1">
				<label class="title">必 須</label>
			</div>
			<div class="col-10 col-md">
				<input placeholder="例：password1234" class="form-control required" type="password" name="user_password" value="">
			</div>
		</div>
	</div>
	
	<button type="submit" class="btn btn-lp-turquoise btnAgree" title="" href="#">ログインして相談予約する
	<i class="circle-arrow-right"></i>
	</button>
</form>
