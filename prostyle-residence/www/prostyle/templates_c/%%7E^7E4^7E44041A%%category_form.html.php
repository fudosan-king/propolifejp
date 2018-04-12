<?php /* Smarty version 2.6.27, created on 2015-03-30 16:01:13
         compiled from internals/admin/category_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/category_form.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のカテゴリーを編集<!--<?php else: ?>-->カテゴリー登録<!--<?php endif; ?>--></h2>
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
			<li>カテゴリーを入力してください。</li>
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
			<fieldset>
				<legend>カテゴリー登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<input type="hidden" name="category[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php endif; ?>-->
				<dl>
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>カテゴリーID <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="category[id]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php endif; ?>-->
					<dt>親ID</dt>
						<dd>
							<select name="category[pid]">
								<option value="">なし</option>
								<!--<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> selected="selected"<?php endif; ?> ><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
					<dt>カテゴリー名 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="category[name]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>説明</dt>
						<dd><textarea name="category[memo]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['category']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<dt>カテゴリーの表示 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="category[display]">
								<option value="publish"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['category']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?> selected="selected"<?php endif; ?>>一覧に表示する</option>
								<option value="private"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['category']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?> selected="selected"<?php endif; ?>>一覧に表示しない</option>
							</select>
						</dd>
					<dt>並び順 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="category[sort]" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['category']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h2>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のカテゴリーを削除</h2>
		<ul>
			<li>このカテゴリーを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_delete" method="get" class="delete">
			<fieldset>
				<legend>カテゴリー削除フォーム</legend>
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