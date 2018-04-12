<?php /* Smarty version 2.6.27, created on 2017-03-31 13:51:48
         compiled from plugins/form/admin_view.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/form/admin_view.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のフォームを確認</h2>
		<ul>
			<li><a href="<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>/form/<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>-->/form/<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> にアクセスするとフォームが表示されます。</li>
			<li>もしくは、以下のコードを任意のページに貼り付けてください。</li>
		</ul>
		<h3>headタグ内に追加</h3>
		<pre><code>&lt;link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.subwindow.css" /&gt;
&lt;script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.subwindow.js"&gt;&lt;/script&gt;</code></pre>
		<h3>bodyタグ内に追加</h3>
		<pre><code>&lt;form action="<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>/form/send?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post"<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['attachment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?> enctype="multipart/form-data"<?php endif; ?> id="plugin_form"&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;送信フォーム&lt;/legend&gt;
    &lt;input type="hidden" name="plugin_form[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_form']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /&gt;

    &lt;input type="hidden" name="plugin_form[__label][subject]" value="件名" /&gt;
    &lt;input type="hidden" name="plugin_form[__label][name]" value="名前" /&gt;
    &lt;input type="hidden" name="plugin_form[__label][mail]" value="メールアドレス" /&gt;
    &lt;input type="hidden" name="plugin_form[__label][message]" value="メッセージ" /&gt;

    &lt;input type="hidden" name="plugin_form[__require][name]" value="1" /&gt;
    &lt;input type="hidden" name="plugin_form[__require][mail]" value="1" /&gt;
    &lt;input type="hidden" name="plugin_form[__require][message]" value="1" /&gt;

    &lt;input type="hidden" name="plugin_form[__type][subject]" value="line" /&gt;
    &lt;input type="hidden" name="plugin_form[__type][name]" value="line" /&gt;
    &lt;input type="hidden" name="plugin_form[__type][mail]" value="mail" /&gt;

    &lt;dl&gt;
      &lt;dt&gt;件名&lt;/dt&gt;
        &lt;dd&gt;&lt;input type="text" name="plugin_form[subject]" size="30" value="" /&gt;&lt;/dd&gt;
      &lt;dt&gt;名前 &lt;abbr class="attention" title="入力必須"&gt;*&lt;/abbr&gt;&lt;/dt&gt;
        &lt;dd&gt;&lt;input type="text" name="plugin_form[name]" size="30" value="" /&gt;&lt;/dd&gt;
      &lt;dt&gt;メールアドレス &lt;abbr class="attention" title="入力必須"&gt;*&lt;/abbr&gt;&lt;/dt&gt;
        &lt;dd&gt;&lt;input type="text" name="plugin_form[mail]" size="30" value="" /&gt;&lt;/dd&gt;
      &lt;dt&gt;メッセージ &lt;abbr class="attention" title="入力必須"&gt;*&lt;/abbr&gt;&lt;/dt&gt;
        &lt;dd&gt;&lt;textarea name="plugin_form[message]" cols="50" rows="10"&gt;&lt;/textarea&gt;&lt;/dd&gt;
    &lt;/dl&gt;
    &lt;p&gt;&lt;input type="submit" value="確認する" /&gt;&lt;/p&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
&lt;script src="<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_form']['secure'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
plugins/form.js"&gt;&lt;/script&gt;</code></pre>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>