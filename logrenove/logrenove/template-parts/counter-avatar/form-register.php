<form method="post" class="frm_avatar_register">
	<?php include 'form-pardot.php'; ?>
	<input type="hidden" name="status" value="wait-confirm">
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


	<div class="form-group">
		<p>パスワードを確認する</p>
		<div class="row">
			<div class="col-2 col-md-1">
				<label class="title">必 須</label>
			</div>
			<div class="col-10 col-md">
				<input placeholder="例：password1234" class="form-control required" type="password" name="user_password2" value="">
			</div>
		</div>
	</div>

	<div class="form-group">
		<p>メールマガジンのご登録</p>
		<div class="row">
			<div class="col-2 col-md-1"></div>
			<div class="col-10 col-md">
				<div class="custom-checkbox">
					<label>リノベ情報を受け取る
					  <input type="checkbox" name="mail_magazine" value="1" checked>
					  <span class="checkmark"></span>
					</label>
                </div>
            </div>
        </div>
	</div>

	<div class="rules-lp">
		<p class="text-center">個人情報の取扱に関しましては<span>プライバシーポリシー</span> をご覧ください。</p>
		<p class="text-center">ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
		<div class="custom-checkbox">
			<label class="ck_agree">同意する
			  <input type="checkbox" class="required" name="ck_agree" value="1" checked>
			  <span class="checkmark"></span>
			</label>
        </div>
	</div>

	<button type="submit" class="btn btn-lp-turquoise btnAgree" title="" href="#">
	予約する
	<i class="circle-arrow-right"></i>
	</button>

</form>