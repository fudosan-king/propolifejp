<?php /* Smarty version 2.6.27, created on 2017-03-21 11:10:36
         compiled from internals/admin/entry_form_category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/entry_form_category.html', 2, false),)), $this); ?>
<!--<?php $_from = $this->_tpl_vars['freo']['refer']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_category']):
?>-->
	<!--<?php if (((is_array($_tmp=$this->_tpl_vars['refer_category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
	<!--<?php if (!$flag) : ?>--><ul><!--<?php endif; ?>-->
	<li>
		<input type="checkbox" name="entry_associate[category][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_category_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['category'][$this->_tpl_vars['refer_category']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_category_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label>
		<!--<?php $this->assign('pid', ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/entry_form_category.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<!--<?php $this->assign('pid', ((is_array($_tmp=$this->_tpl_vars['refer_category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>-->
	</li>
	<!--<?php $flag = 1; ?>-->
	<!--<?php endif; ?>-->
<!--<?php endforeach; else: ?>-->
<ul>
	<li>カテゴリーが登録されていません。</li>
</ul>
<!--<?php endif; unset($_from); ?>-->
<!--<?php if ($flag) : ?>--></ul><!--<?php endif; ?>-->