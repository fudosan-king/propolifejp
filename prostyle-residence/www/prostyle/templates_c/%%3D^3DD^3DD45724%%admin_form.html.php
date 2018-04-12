<?php /* Smarty version 2.6.27, created on 2017-03-31 13:51:51
         compiled from plugins/form/admin_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/form/admin_form.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のフォームを編集<!--<?php else: ?>-->新規登録<!--<?php endif; ?>--></h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<!--<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>-->
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
			<!--<?php endforeach; endif; unset($_from); ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li>フォームを入力してください。</li>
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
			<fieldset>
				<legend>フォーム登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<input type="hidden" name="plugin_form[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php endif; ?>-->
				<dl>
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>フォームID <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[id]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php endif; ?>-->
					<dt>フォームの名前 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[name]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>送信完了時のリダイレクト先</dt>
						<dd><input type="text" name="plugin_form[complete]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['complete'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>送信済み回数 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[count]" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /> 回</dd>
					<!--<?php if (((is_array($_tmp=@FREO_HTTPS_URL)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>SSLの使用 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[secure]">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>使用する</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>使用しない</option>
							</select>
						</dd>
					<!--<?php else: ?>-->
					<input type="hidden" name="plugin_form[secure]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<!--<?php endif; ?>-->
					<dt>添付ファイル <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[attachment]">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['attachment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>許可する</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['attachment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>許可しない</option>
							</select>
						</dd>
					<dt>メールの送信 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[mail]" id="form_mail">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>送信する</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>送信しない</option>
							</select>
						</dd>
				</dl>
				<dl id="form_mail_content">
					<dt>メールの送信：送信先（改行区切りで複数指定可能） <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><textarea name="plugin_form[mail_to]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail_to'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>メールの送信：Cc（改行区切りで複数指定可能）</dt>
						<dd><textarea name="plugin_form[mail_cc]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail_cc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>メールの送信：Bcc（改行区切りで複数指定可能）</dt>
						<dd><textarea name="plugin_form[mail_bcc]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail_bcc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>メールの送信：本文 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><textarea name="plugin_form[mail_text]" cols="50" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['mail_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
				</dl>
				<dl>
					<dt>メールの自動返信 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[reply]" id="form_reply">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>送信する</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>送信しない</option>
							</select>
						</dd>
				</dl>
				<dl id="form_reply_content">
					<dt>メールの自動返信：件名 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[reply_subject]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply_subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>メールの自動返信：送信者名 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[reply_name]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>メールの自動返信：送信元アドレス <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="plugin_form[reply_from]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply_from'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>メールの自動返信：本文 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><textarea name="plugin_form[reply_text]" cols="50" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['reply_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
				</dl>
				<dl>
					<dt>送信内容の記録 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[record]" id="form_record">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['record'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>記録する</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['record'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>記録しない</option>
							</select>
						</dd>
				</dl>
				<dl id="form_record_content">
					<dt>送信内容の記録：本文 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><textarea name="plugin_form[record_text]" cols="50" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['record_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
				</dl>
				<dl>
					<dt>フォームの説明</dt>
						<dd><textarea name="plugin_form[memo]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>状態 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="plugin_form[status]">
								<option value="publish"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?> selected="selected"<?php endif; ?>>公開</option>
								<option value="private"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['plugin_form']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?> selected="selected"<?php endif; ?>>非公開</option>
							</select>
						</dd>
				</dl>
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h2>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のフォームを削除</h2>
		<ul>
			<li>このフォームを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_delete" method="get" class="delete">
			<fieldset>
				<legend>フォーム削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="削除する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
	</div>
	<script type="text/javascript">
	<?php echo '
	//メールの送信
	if ($(\'#form_mail\').val() == \'no\') {
		$(\'#form_mail_content\').hide();
	}
	$(\'#form_mail\').change(function() {
		if ($(this).val() == \'yes\') {
			$(\'#form_mail_content\').show();
		} else {
			$(\'#form_mail_content\').hide();
		}
	});

	//メールの自動返信
	if ($(\'#form_reply\').val() == \'no\') {
		$(\'#form_reply_content\').hide();
	}
	$(\'#form_reply\').change(function() {
		if ($(this).val() == \'yes\') {
			$(\'#form_reply_content\').show();
		} else {
			$(\'#form_reply_content\').hide();
		}
	});

	//送信内容の記録
	if ($(\'#form_record\').val() == \'no\') {
		$(\'#form_record_content\').hide();
	}
	$(\'#form_record\').change(function() {
		if ($(this).val() == \'yes\') {
			$(\'#form_record_content\').show();
		} else {
			$(\'#form_record_content\').hide();
		}
	});
	'; ?>

	</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>