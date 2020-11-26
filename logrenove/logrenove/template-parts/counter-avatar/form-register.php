<form action="" method="">
	<?php include 'form-pardot.php'; ?>

	<div class="form-group">
		<p>メールアドレス（半角英数字）</p>
		<div class="row">
			<div class="col-2 col-md-1">
				<label class="title">必 須</label>
			</div>
			<div class="col-10 col-md">
				<input placeholder="例：xxxxxxx@logrenove.jp" class="form-control datepicker" type="text" name="" value="">
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
				<input placeholder="例：password1234" class="form-control datepicker" type="text" name="" value="">
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
				<input placeholder="例：password1234" class="form-control datepicker" type="text" name="" value="">
			</div>
		</div>
	</div>

	<div class="form-group">
		<p>メールマガジンのご登録</p>
		<div class="row">
			<div class="col-2 col-md-1"></div>
			<div class="col-10 col-md">
				<div class="custom-checkbox">
					<label>メルマガに登録する
					  <input type="checkbox" name="" value="">
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
			<label>同意する
			  <input type="checkbox" name="" value="">
			  <span class="checkmark"></span>
			</label>
        </div>
	</div>

	<button type="submit" class="btn btn-lp-turquoise" title="" href="#">
	予約する
	<i class="circle-arrow-right"></i>
	</button>

</form>