<?php /* Smarty version 2.6.27, created on 2017-03-29 19:13:30
         compiled from plugins/form/admin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/form/admin.html', 4, false),array('modifier', 'mb_truncate', 'plugins/form/admin.html', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>フォーム管理</h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<li>不正なアクセスです。</li>
		</ul>
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="complete">
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
			<li>フォームを新規に登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のフォームを編集しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のフォームを削除しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'sort'): ?>-->
			<li>フォームを並び替えました。</li>
			<!--<?php endif; ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li>登録されたフォームは以下のとおりです。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_form">フォームを登録する</a>。</li>
		</ul>
		<table summary="フォーム">
			<thead>
				<tr>
					<th>ID</th>
					<th>名前</th>
					<th>説明</th>
					<th>状態</th>
					<th>作業</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>名前</th>
					<th>説明</th>
					<th>状態</th>
					<th>作業</th>
				</tr>
			</tfoot>
			<tbody>
				<!--<?php $_from = $this->_tpl_vars['plugin_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin_form']):
?>-->
				<tr>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugin_form']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, '...') : smarty_modifier_mb_truncate($_tmp, 20, '...')); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['plugin_form']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?>-->非公開<!--<?php endif; ?>--></td>
					<td>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['record'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?>-->
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_record?form_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">表示</a>
						<!--<?php endif; ?>-->
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_view?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">確認</a>
						<!--<?php endif; ?>-->
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/form/admin_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
					</td>
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