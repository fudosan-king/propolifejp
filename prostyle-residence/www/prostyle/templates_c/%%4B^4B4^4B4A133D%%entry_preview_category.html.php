<?php /* Smarty version 2.6.27, created on 2017-03-16 12:48:33
         compiled from internals/admin/entry_preview_category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/entry_preview_category.html', 2, false),)), $this); ?>
<!--<?php $_from = $this->_tpl_vars['freo']['refer']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_category']):
?>-->
	<!--<?php if (((is_array($_tmp=$this->_tpl_vars['refer_category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
	<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['category'][$this->_tpl_vars['refer_category']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li><!--<?php endif; ?>-->
	<!--<?php $this->assign('pid', ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>-->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/entry_preview_category.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!--<?php $this->assign('pid', ((is_array($_tmp=$this->_tpl_vars['refer_category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>-->
	<!--<?php endif; ?>-->
<!--<?php endforeach; endif; unset($_from); ?>-->