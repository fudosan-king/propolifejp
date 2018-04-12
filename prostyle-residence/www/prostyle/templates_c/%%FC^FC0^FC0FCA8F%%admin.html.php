<?php /* Smarty version 2.6.27, created on 2017-03-29 20:35:43
         compiled from plugins/export/admin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/export/admin.html', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>エクスポート</h2>
		<ul>
			<li>データベースの内容をSQLファイルに出力します。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/export/admin_post" method="post">
			<fieldset>
				<legend>エクスポート実行フォーム</legend>
				<dl>
					<dt>対象</dt>
						<dd>
							<select name="target">
								<option value="">すべて</option>
								<!--<?php $_from = $this->_tpl_vars['plugin_exports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin_export']):
?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_export'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_export'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
				</dl>
				<p><input type="submit" value="出力する" /></p>
			</fieldset>
		</form>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>