<?php /* Smarty version 2.6.27, created on 2017-01-05 11:37:11
         compiled from iphones/internals/default/gallery.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/default/gallery.html', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>





<div id="top_gallery">
<h2><span class="f30">P</span>ROSTYLE GALLERY</h2>




<!--<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['gallery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div class="top_gallery">
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>


<div class="mod_thumbnail">
<!-- メイン画像start -->
<div class="mainimglist">
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_01']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
</div>
<!-- メイン画像end -->

<!-- サムネイルstart -->
<div class="thumbnaillist">
<ul class="ex_clearfix">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_01']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_01']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_02']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_02']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_03']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_03']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_04']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_04']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_05']; ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/gallery/<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_05']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></li>
</ul>
</div>
<!-- サムネイルend -->
<br style="clear: both;" />
</div>

<h4><?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['midashi']; ?>
</h4>
<a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['g_s_url']; ?>
" target="_blank"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/bt_shousai.jpg" class="bt_right" /></a>


<p>
<?php echo $this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt']; ?>

</p>

<br style="clear: both;" />
</div>

<!--<?php endif; ?>-->
<!--<?php endforeach; endif; unset($_from); ?>-->


</div>








<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>