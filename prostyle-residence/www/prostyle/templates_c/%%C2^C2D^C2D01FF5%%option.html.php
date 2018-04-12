<?php /* Smarty version 2.6.27, created on 2015-04-02 13:29:15
         compiled from iphones/internals/admin/option.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/admin/option.html', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<section>
			<h1>オプション管理</h1>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<ul class="attention">
				<li>不正なアクセスです。</li>
			</ul>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<ul class="complete">
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
				<li>オプションを新規に登録しました。</li>
				<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
				<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のオプションを編集しました。</li>
				<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete'): ?>-->
				<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のオプションを削除しました。</li>
				<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'sort'): ?>-->
				<li>オプションを並び替えました。</li>
				<!--<?php endif; ?>-->
			</ul>
			<!--<?php endif; ?>-->
			<ul>
				<li>登録されたオプションは以下のとおりです。</li>
				<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_form">オプションを登録する</a>。</li>
			</ul>
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_update" method="post">
				<fieldset>
					<legend>オプション並び替えフォーム</legend>
					<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<table summary="オプション">
						<thead>
							<tr>
								<th>ID</th>
								<th>オプション名</th>
								<th>利用対象</th>
								<th>並び順</th>
								<th>作業</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>オプション名</th>
								<th>利用対象</th>
								<th>並び順</th>
								<th>作業</th>
							</tr>
						</tfoot>
						<tbody>
							<!--<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>-->
							<tr>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['option']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'entry'): ?>-->エントリー<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'page'): ?>-->ページ<!--<?php else: ?>-->すべて<!--<?php endif; ?>--></td>
								<td class="number"><input type="text" name="sort[<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" size="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
								<td>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/option_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" rel="delete">削除</a>
								</td>
							</tr>
							<!--<?php endforeach; endif; unset($_from); ?>-->
						</tbody>
					</table>
					<p><input type="submit" value="並び順を編集する" /></p>
				</fieldset>
			</form>
		</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>