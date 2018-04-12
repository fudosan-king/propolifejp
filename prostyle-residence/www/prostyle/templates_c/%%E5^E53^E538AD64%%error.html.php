<?php /* Smarty version 2.6.27, created on 2017-03-28 14:27:25
         compiled from plugins/form/error.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/form/error.html', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/form/iframe_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<h2>エラー</h2>
	<p>エラーが発生しました。入力内容を確認してください。</p>
	<ul class="attention">
		<!--<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>-->
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
		<!--<?php endforeach; endif; unset($_from); ?>-->
	</ul>
	<div id="action">
		<form action="<?php if (((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'off'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>/form/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="get" id="plugin_form">
			<fieldset>
				<legend>メール編集フォーム</legend>
				<p><input type="submit" value="編集する" /></p>
			</fieldset>
		</form>
	</div>
	<script type="text/javascript">
	//エラーメッセージを削除
	window.parent.$('.plugin_form_error').html('');

	//エラーメッセージを表示
	var errors = '';
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
	if (window.parent.$('#plugin_form_error_<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
').size()) {
		window.parent.$('#plugin_form_error_<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
').html('<span class="plugin_form_error"><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>');
	} else {
		errors += '<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>';
	}
	<?php endforeach; endif; unset($_from); ?>
	if (errors) {
		window.parent.$('#plugin_form_error').html('<ul class="plugin_form_error">' + errors + '</ul>');
	}

	<?php echo '
	//入力画面へ戻る
	$(\'form#plugin_form\').submit(function() {
		if (window == window.parent) {
			history.back();
		} else {
			window.parent.$.fn.subwindow.close();
		}

		return false;
	});
	'; ?>

	</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/form/iframe_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>