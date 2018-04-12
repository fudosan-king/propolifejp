<?php /* Smarty version 2.6.27, created on 2016-12-15 14:15:54
         compiled from internals/admin/option_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/option_form.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のオプションを編集<!--<?php else: ?>-->オプション登録<!--<?php endif; ?>--></h2>
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
			<li>オプションを入力してください。</li>
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
			<fieldset>
				<legend>オプション登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<input type="hidden" name="option[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php endif; ?>-->
				<dl>
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>オプションID <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="option[id]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php endif; ?>-->
					<dt>オプション名 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="option[name]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>利用対象 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="option[target]">
								<option value="">すべて</option>
								<option value="entry"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'entry'): ?> selected="selected"<?php endif; ?>>エントリー</option>
								<option value="page"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'page'): ?> selected="selected"<?php endif; ?>>ページ</option>
							</select>
						</dd>
					<dt>種類 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="option[type]" id="option_type">
								<option value="text"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'text'): ?> selected="selected"<?php endif; ?>>一行入力</option>
								<option value="textarea"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'textarea'): ?> selected="selected"<?php endif; ?>>複数行入力</option>
								<option value="select"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'select'): ?> selected="selected"<?php endif; ?>>セレクトボックス</option>
								<option value="radio"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'radio'): ?> selected="selected"<?php endif; ?>>ラジオボタン</option>
								<option value="checkbox"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'checkbox'): ?> selected="selected"<?php endif; ?>>チェックボックス</option>
								<option value="file"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'file'): ?> selected="selected"<?php endif; ?>>アップロード</option>
							</select>
						</dd>
					<dt>必須 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="option[required]">
								<option value="yes"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['required'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> selected="selected"<?php endif; ?>>入力必須</option>
								<option value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['required'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> selected="selected"<?php endif; ?>>任意</option>
							</select>
						</dd>
					<dt>説明</dt>
						<dd><textarea name="option[memo]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>初期値</dt>
						<dd><textarea name="option[text]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>並び順 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="option[sort]" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['option']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<dl id="option_validate">
					<dt>検証</dt>
						<dd>
							<select name="option[validate]">
								<option value="">なし</option>
								<option value="numeric"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['validate'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'numeric'): ?> selected="selected"<?php endif; ?>>数値のみ</option>
								<option value="alphabet"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['option']['validate'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'alphabet'): ?> selected="selected"<?php endif; ?>>英数字のみ</option>
							</select>
						</dd>
				</dl>
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h2>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のオプションを削除</h2>
		<ul>
			<li>このオプションを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_delete" method="get" class="delete">
			<fieldset>
				<legend>オプション削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="削除する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>