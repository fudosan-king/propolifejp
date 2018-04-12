<?php /* Smarty version 2.6.27, created on 2017-03-29 19:25:34
         compiled from plugins/sitemap/default.xml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/sitemap/default.xml', 6, false),array('modifier', 'date_format', 'plugins/sitemap/default.xml', 7, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</loc>
		<lastmod><!--<?php if (((is_array($_tmp=$this->_tpl_vars['sitemap_update'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != null): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sitemap_update'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user_update'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<!--<?php endif; ?>--></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<!--<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>-->
	<url>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
page/<?php echo ((is_array($_tmp=$this->_tpl_vars['article']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</loc>
		<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']['modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<!--<?php endforeach; endif; unset($_from); ?>-->
	<!--<?php if ($this->_tpl_vars['entry_articles']): ?>-->
	<!--<?php $_from = $this->_tpl_vars['entry_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry_article']):
?>-->
	<url>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry_article']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_article']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_article']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></loc>
		<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_article']['modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</lastmod>
		<changefreq>always</changefreq>
		<priority>0.6</priority>
	</url>
	<!--<?php endforeach; endif; unset($_from); ?>-->
	<!--<?php endif; ?>-->
</urlset>


