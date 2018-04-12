<?php /* Smarty version 2.6.27, created on 2017-03-16 18:05:46
         compiled from plugins/form/preview.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/form/preview.html', 8, false),array('modifier', 'nl2br', 'plugins/form/preview.html', 9, false),array('modifier', 'default', 'plugins/form/preview.html', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/form/iframe_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<h2>確認</h2>
	<ul>
		<li>以下の内容で送信します。よろしければ、ページ下部の送信ボタンを押してください。</li>
	</ul>
	<dl>
		<!--<?php $_from = $this->_tpl_vars['plugin_form']['__label']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['label']):
?>-->
		<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
			<dd><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugin_form'][$this->_tpl_vars['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</dd>
		<!--<?php endforeach; endif; unset($_from); ?>-->
	</dl>
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
		<form action="<?php if (((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'off'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>/form/send/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post" id="plugin_form_post">
			<fieldset>
				<legend>メール送信フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="送信する" /></p>
			</fieldset>
		</form>
	</div>
	<script type="text/javascript">
	<?php echo '
	//エラーメッセージを削除
	window.parent.$(\'.plugin_form_error\').html(\'\');

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