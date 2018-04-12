<?php /* Smarty version 2.6.27, created on 2015-03-17 20:01:21
         compiled from utility_category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'utility_category.html', 2, false),array('modifier', 'default', 'utility_category.html', 5, false),)), $this); ?>
<!--<?php $_from = $this->_tpl_vars['freo']['refer']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_category']):
?>-->
	<!--<?php if (((is_array($_tmp=$this->_tpl_vars['refer_category']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['refer_category']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->
	<!--<?php if (!$flag) : ?>--><ul><!--<?php endif; ?>-->
	<li>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/category/<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugin_category_counts'][$this->_tpl_vars['refer_category']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
)
		<!--<?php $this->assign('pid', ((is_array($_tmp=$this->_tpl_vars['refer_category']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'utility_category.html', 'smarty_include_vars' => array()));
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