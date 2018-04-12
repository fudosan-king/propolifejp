<?php /* Smarty version 2.6.27, created on 2017-04-03 14:49:10
         compiled from internals/admin/plugin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/plugin.html', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>プラグイン一覧</h2>
		<ul>
			<li>現在導入されているプラグインは以下のとおりです。</li>
		</ul>
		<table summary="プラグイン">
			<thead>
				<tr>
					<th>プラグインの名前</th>
					<th>バージョン</th>
					<th>管理ページ</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>プラグインの名前</th>
					<th>バージョン</th>
					<th>管理ページ</th>
				</tr>
			</tfoot>
			<tbody>
				<!--<?php $_from = $this->_tpl_vars['freo']['plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>-->
				<tr>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']['version'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['plugin']['admin'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']['admin'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">管理ページ</a><!--<?php endif; ?>--></td>
				</tr>
				<!--<?php endforeach; endif; unset($_from); ?>-->
			</tbody>
		</table>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>