<?php /* Smarty version 2.6.27, created on 2017-04-03 08:09:43
         compiled from internals/reissue/default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/reissue/default.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<h2>パスワード再発行</h2>
	<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
	<ul class="attention">
		<li>不正なアクセスです。</li>
	</ul>
	<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
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
		<li>パスワードを忘れた場合、以下のフォームから再発行することができます。</li>
		<li>登録済みのメールアドレスを入力すると、登録されているメールアドレスにパスワード取得用のURLが送信されます。</li>
	</ul>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/reissue" method="post">
		<fieldset>
			<legend>パスワード再発行フォーム</legend>
			<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<dl>
				<dt>メールアドレス</dt>
					<dd><input type="text" name="reissue[mail]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['reissue']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
			</dl>
			<p><input type="submit" value="再発行する" /></p>
		</fieldset>
	</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>