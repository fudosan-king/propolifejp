<?php /* Smarty version 2.6.27, created on 2017-04-03 14:48:53
         compiled from internals/admin/category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/category.html', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>カテゴリー管理</h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<li>不正なアクセスです。</li>
		</ul>
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="complete">
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
			<li>カテゴリーを新規に登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のカテゴリーを編集しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のカテゴリーを削除しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'sort'): ?>-->
			<li>カテゴリーを並び替えました。</li>
			<!--<?php endif; ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> に<!--<?php endif; ?>-->登録されたカテゴリーは以下のとおりです。</li>
			<li>IDをクリックすると、そのカテゴリーに属するカテゴリーを表示できます。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_form?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">この階層にカテゴリーを登録する</a>。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_update" method="post">
			<fieldset>
				<legend>カテゴリー並び替えフォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="pid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<table summary="カテゴリー">
					<thead>
						<tr>
							<th>ID</th>
							<th>カテゴリー名</th>
							<th>並び順</th>
							<th>作業</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>カテゴリー名</th>
							<th>並び順</th>
							<th>作業</th>
						</tr>
					</tfoot>
					<tbody>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['parent']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">上の階層へ</a></td>
						</tr>
						<!--<?php endif; ?>-->
						<!--<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>-->
						<tr>
							<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td class="number"><input type="text" name="sort[<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" size="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
							<td>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/category/<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">確認</a>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/category_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
							</td>
						</tr>
						<!--<?php endforeach; endif; unset($_from); ?>-->
					</tbody>
				</table>
				<p><input type="submit" value="並び順を編集する" /></p>
			</fieldset>
		</form>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>