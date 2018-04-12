<?php /* Smarty version 2.6.27, created on 2017-03-16 19:30:25
         compiled from iphones/internals/default/default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/default/default.html', 7, false),array('modifier', 'default', 'iphones/internals/default/default.html', 50, false),array('modifier', 'nl2br', 'iphones/internals/default/default.html', 72, false),array('modifier', 'autolink', 'iphones/internals/default/default.html', 238, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>




<!--<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['slide'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->

<div id="slide">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<?php echo $this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt']; ?>

<!--<?php endif; ?>-->
</div>

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['entry']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div style="text-align: right;">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/edit.png" alt="編集" title="編集" width="16" height="16" /></a>
</div>
<!--<?php endif; ?>-->

<!--<?php endif; ?>-->
<!--<?php endforeach; endif; unset($_from); ?>-->





<div id="entry">
<!--<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['property'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->

<div class="entry">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['sell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/icon_sell.jpg" width="85" alt="販売中" title="販売中" />
<!--<?php endif; ?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['sold'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/icon_sold.jpg" width="85" alt="完売御礼" title="完売御礼" />
<!--<?php endif; ?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['category']['soon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/icon_soon.jpg" width="85" alt="販売予定" title="販売予定" />
<!--<?php endif; ?>-->

<h3><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite']; ?>
" target="_blank"><!--<?php endif; ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--></a><!--<?php endif; ?>--></h3>

<div class="content">


<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div class="image_center">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite']; ?>
" target="_blank"><!--<?php endif; ?>--><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="entry_img" alt="<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" /><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--></a><!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite']; ?>
" target="_blank"><!--<?php endif; ?>--><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_images/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="entry_img" alt="<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" /><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--></a><!--<?php endif; ?>-->
</div>
<!--<?php endif; ?>-->
</div>
<!--<?php endif; ?>-->



<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div class="content_text">
<?php echo $this->_tpl_vars['entry_texts'][$this->_tpl_vars['entry']['id']]['excerpt']; ?>

</div>
<!--<?php endif; ?>-->


<div class="shousai">
<dl>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['schedule'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt>販売<br />スケジュール</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['schedule'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['add'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['add']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['add'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['traffic'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['traffic']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['traffic'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['access'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div style="padding-top: 5px;">
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['access'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank">現地案内図</a></div>
<!--<?php endif; ?>-->
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['classification'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['classification']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['classification'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['usage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt>用途地域/<br />高度地区</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['usage'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['unit'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['unit']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['unit'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['units'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['units']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['units'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['price'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['price']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['price'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['madori'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['madori']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['madori'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['shikichimenseki'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['shikichimenseki']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['shikichimenseki'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['enshoumnseki'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['enshoumnseki']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['enshoumnseki'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['menseki'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['menseki']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['menseki'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kenri'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt>土地の<br />権利形態</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kenri'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kouzou'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['kouzou']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kouzou'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kansei'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt>完成時期<br />（築年月）</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['kansei'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['nyuukyo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['nyuukyo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['nyuukyo'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['eigyouannnai'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['options']['eigyouannnai']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['eigyouannnai'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
<!--<?php endif; ?>-->

</dl>

</div>

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['seikyu_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['seikyu_url']; ?>
" target="_blank"><div class="bt_seikyuu">資料請求</div></a>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['no_bt_left'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<!--
<div class="bt_seikyuu_no"><?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['no_bt_left']; ?>
</div></a>
-->
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['raijou_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['raijou_url']; ?>
" target="_blank"><div class="bt_reservation">来場予約</div></a>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['no_bt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<!--
<div class="bt_reservation_no"><?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['no_bt']; ?>
</div>
-->
<!--<?php endif; ?>-->

<br style="clear: both;" />
<div class="bt_site"><a href="<?php echo $this->_tpl_vars['entry_associates'][$this->_tpl_vars['entry']['id']]['option']['officialsite']; ?>
" target="_blank">物件公式サイト</a></div>



</div>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['entry']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<ul class="link">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/edit.png" alt="編集" title="編集" width="16" height="16" /></a></li>
</ul>
<!--<?php endif; ?>-->

</div>
<!--<?php endif; ?>-->
<!--<?php endforeach; endif; unset($_from); ?>-->
</div>




<div class="bt_top">
<a href="#top">▲TOPへ</a>
</div>




<a id="news"></a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/utility.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<div class="bt_top">
<a href="#top">▲TOPへ</a>
</div>
<br />



<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['view']['information'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div id="information">

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div class="page">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
page_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
page_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['information_page']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['information_page']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page_image']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page_image']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information_page']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
page_images/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
page_images/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['information_page']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['information_page']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['information_page']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page_image']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page_image']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information_page_text']['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<?php echo ((is_array($_tmp=$this->_tpl_vars['information_page_text']['excerpt'])) ? $this->_run_mod_handler('autolink', true, $_tmp) : smarty_modifier_autolink($_tmp)); ?>

<!--<?php endif; ?>-->
</div>
<!--<?php endif; ?>-->

<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<div class="text">
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['information_text']['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
<?php echo $this->_tpl_vars['information_text']['excerpt']; ?>

<!--<?php endif; ?>-->
</div>
<!--<?php endif; ?>-->
</div>
<!--<?php endif; ?>-->





<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>