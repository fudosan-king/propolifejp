<?php /* Smarty version 2.6.27, created on 2017-03-16 19:30:26
         compiled from iphones/utility.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/utility.html', 9, false),array('modifier', 'date_format', 'iphones/utility.html', 12, false),)), $this); ?>
<div id="utility">
<h2>ユーティリティ</h2>

<div class="utility">
<h3>NEWS</h3>
<div class="content">
<dl>
<!--<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['entry']):
        $this->_foreach['news']['iteration']++;
?>-->
<!--<?php if (((is_array($_tmp=($this->_foreach['news']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) < 10): ?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['news'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->

<dt><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y.%m.%d') : smarty_modifier_date_format($_tmp, '%Y.%m.%d')); ?>
</dt>

<dd>
<div style="font-weight: bold;">
<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

</div>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<?php echo $this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt']; ?>

<!--<?php endif; ?>-->
<div style="float: right;">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['entry']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/edit.png" alt="編集" title="編集" width="16" height="16" /></a>
<!--<?php endif; ?>-->
</div>
<br style="clear: both;" />
</dd>
<!--<?php endif; ?>-->
<!--<?php endif; ?>-->
<!--<?php endforeach; endif; unset($_from); ?>-->
</dl>
</div>
</div>




</div>