<?php /* Smarty version 2.6.27, created on 2017-03-29 19:26:05
         compiled from internals/admin/config.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/config.html', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>設定管理</h2>
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
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
		<ul class="complete">
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['config_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
を編集しました。</li>
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li>設定できる項目は以下のとおりです。</li>
		</ul>
		<h3>本体の設定</h3>
		<ul>
			<!--<?php $_from = $this->_tpl_vars['internals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['internal']):
?>-->
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/config?type=internal&amp;file=<?php echo ((is_array($_tmp=$this->_tpl_vars['internal']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['internal']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
			<!--<?php endforeach; else: ?>-->
			<li>設定項目はありません。</li>
			<!--<?php endif; unset($_from); ?>-->
		</ul>
		<h3>プラグインの設定</h3>
		<ul>
			<!--<?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>-->
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/config?type=plugin&amp;file=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
			<!--<?php endforeach; else: ?>-->
			<li>設定項目はありません。</li>
			<!--<?php endif; unset($_from); ?>-->
		</ul>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['freo']['query']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['config_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h2>
		<ul>
			<li>設定内容は以下のとおりです。</li>
		</ul>
		<div id="config">
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/config?type=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;file=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post" class="config">
				<fieldset>
					<legend>設定フォーム</legend>
					<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<input type="hidden" name="config[type]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<input type="hidden" name="config[file]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<!--<?php $_from = $this->_tpl_vars['configs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['config']):
        $this->_foreach['loop']['iteration']++;
?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['config']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'section'): ?>-->
					<!--<?php if (! ((is_array($_tmp=($this->_foreach['loop']['iteration'] <= 1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					</dl>
					<!--<?php endif; ?>-->
					<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['config']['data'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
					<dl>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['config']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'comment'): ?>-->
						<dt><?php echo $this->_tpl_vars['config']['data']; ?>
</dt>
					<!--<?php else: ?>-->
							<dd><?php echo $this->_tpl_vars['config']['data']; ?>
</dd>
					<!--<?php endif; ?>-->
					<!--<?php endforeach; endif; unset($_from); ?>-->
					</dl>
					<p>
						<input type="submit" value="設定する" />
						<input type="reset" value="リセット" />
					</p>
				</fieldset>
			</form>
		</div>
		<!--<?php endif; ?>-->
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>