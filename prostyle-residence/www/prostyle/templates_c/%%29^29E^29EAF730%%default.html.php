<?php /* Smarty version 2.6.27, created on 2015-03-18 15:37:34
         compiled from iphones/internals/view/default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/view/default.html', 4, false),array('modifier', 'default', 'iphones/internals/view/default.html', 14, false),array('modifier', 'nl2br', 'iphones/internals/view/default.html', 51, false),array('modifier', 'date_format', 'iphones/internals/view/default.html', 58, false),array('modifier', 'count', 'iphones/internals/view/default.html', 70, false),array('modifier', 'nl2p', 'iphones/internals/view/default.html', 89, false),array('modifier', 'autolink', 'iphones/internals/view/default.html', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<section>
			<article>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>
				<div class="content">
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user' && ! ((is_array($_tmp=$this->_tpl_vars['entry_security'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p class="attention">このエントリーは、登録ユーザーのみに公開されています。</p>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'group' && ! ((is_array($_tmp=$this->_tpl_vars['entry_security'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p class="attention">このエントリーは、一部のグループのみに公開されています。</p>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'password' && ! ((is_array($_tmp=$this->_tpl_vars['entry_security'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p class="attention">このエントリーは、パスワードで認証した人のみに公開されています。</p>
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_images/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_image']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_image']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></p>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry_thumbnail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_thumbnails/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_thumbnail']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_thumbnail']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></p>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['entry_file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['entry_file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></p>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_files/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))); ?>
</a></p>
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_text']['excerpt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<?php echo $this->_tpl_vars['entry_text']['excerpt']; ?>

					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_text']['more'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['continue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<div id="continue">
							<?php echo $this->_tpl_vars['entry_text']['more']; ?>

						</div>
						<!--<?php else: ?>-->
						<p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>?continue=1#continue" title="No.<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
の続き">続きを読む</a></p>
						<!--<?php endif; ?>-->
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'password' && ! ((is_array($_tmp=$_SESSION['security']['entry'][$this->_tpl_vars['entry']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'root' && ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'author'): ?>-->
						<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
							<fieldset>
								<legend>認証フォーム</legend>
								<dl>
									<dt>パスワード</dt>
										<dd><input type="text" name="entry[password]" size="20" value="" /></dd>
								</dl>
								<p><input type="submit" value="認証する" /></p>
							</fieldset>
						</form>
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dl>
						<!--<?php $_from = $this->_tpl_vars['freo']['refer']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>-->
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != ''): ?>-->
						<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
							<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'file'): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
entry_options/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<!--<?php endif; ?>--></dd>
						<!--<?php endif; ?>-->
						<!--<?php endforeach; endif; unset($_from); ?>-->
					</dl>
					<!--<?php endif; ?>-->
				</div>
				<ul>
					<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M')); ?>
</li>
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<li>カテゴリー：<!--<?php $_from = $this->_tpl_vars['entry_associate']['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['entry_category'] => $this->_tpl_vars['entry_category']):
        $this->_foreach['loop']['iteration']++;
?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/category/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['categories'][$this->_tpl_vars['entry_category']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!--<?php if (! ((is_array($_tmp=($this->_foreach['loop']['iteration'] == $this->_foreach['loop']['total']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->,&nbsp;<!--<?php endif; ?>--><!--<?php endforeach; endif; unset($_from); ?>--></li>
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_tags'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<li>タグ：<!--<?php $_from = $this->_tpl_vars['entry_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['entry_tag']):
        $this->_foreach['loop']['iteration']++;
?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/entry?tag=<?php echo ((is_array($_tmp=$this->_tpl_vars['entry_tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!--<?php if (! ((is_array($_tmp=($this->_foreach['loop']['iteration'] == $this->_foreach['loop']['total']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->,&nbsp;<!--<?php endif; ?>--><!--<?php endforeach; endif; unset($_from); ?>--></li>
					<!--<?php endif; ?>-->
				</ul>
			</article>
			<ul class="menu">
				<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" title="No.<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
の固定URL">この記事のURL</a></li>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'closed'): ?>-->
				<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>#comment" title="No.<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のコメント">コメント(<?php echo count($this->_tpl_vars['comments']); ?>
)</a></li>
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'closed'): ?>-->
				<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>#trackback" title="No.<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のトラックバック">トラックバック(<?php echo count($this->_tpl_vars['trackbacks']); ?>
)</a></li>
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['entry']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a></li>
				<!--<?php endif; ?>-->
			</ul>
		</section>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'closed'): ?>-->
		<section id="trackback">
			<h1>トラックバック</h1>
			<!--<?php $_from = $this->_tpl_vars['trackbacks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['trackback']):
?>-->
			<article>
				<h1><!--<?php if (((is_array($_tmp=$this->_tpl_vars['trackback']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no' && ((is_array($_tmp=$this->_tpl_vars['trackback_securities'][$this->_tpl_vars['trackback']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['trackback']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php else: ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['trackback']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['trackback']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> from <?php echo ((is_array($_tmp=$this->_tpl_vars['trackback']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></h1>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['trackback']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no' && ! ((is_array($_tmp=$this->_tpl_vars['trackback_securities'][$this->_tpl_vars['trackback']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<p class="attention">このトラックバックは、管理者の承認待ちです。</p>
				<!--<?php endif; ?>-->
				<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2p', true, $_tmp) : smarty_modifier_nl2p($_tmp)))) ? $this->_run_mod_handler('autolink', true, $_tmp) : smarty_modifier_autolink($_tmp)); ?>

				<ul class="information">
					<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
</li>
				</ul>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'author'): ?>-->
				<ul class="menu">
					<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/trackback_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['trackback']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a></li>
				</ul>
				<!--<?php endif; ?>-->
			</article>
			<!--<?php endforeach; else: ?>-->
			<ul>
				<li>トラックバックはまだありません。</li>
			</ul>
			<!--<?php endif; unset($_from); ?>-->
		</section>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'view'): ?>-->
		<section id="trackback_url">
			<h1>トラックバックURL</h1>
			<p><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/trackback/<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code></p>
		</section>
		<!--<?php endif; ?>-->
		<!--<?php endif; ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'closed'): ?>-->
		<section id="comment">
			<h1>コメント</h1>
			<!--<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>-->
			<article>
				<h1><!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></h1>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no' && ! ((is_array($_tmp=$this->_tpl_vars['comment_securities'][$this->_tpl_vars['comment']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<p class="attention">このコメントは、管理者の承認待ちです。</p>
				<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user' && ! ((is_array($_tmp=$this->_tpl_vars['comment_securities'][$this->_tpl_vars['comment']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<p class="attention">このコメントは、登録ユーザーのみに公開されています。</p>
				<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'admin' && ! ((is_array($_tmp=$this->_tpl_vars['comment_securities'][$this->_tpl_vars['comment']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<p class="attention">このコメントは、管理者のみに公開されています。</p>
				<!--<?php endif; ?>-->
				<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2p', true, $_tmp) : smarty_modifier_nl2p($_tmp)))) ? $this->_run_mod_handler('autolink', true, $_tmp) : smarty_modifier_autolink($_tmp)); ?>

				<ul class="information">
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><a href="mailto:<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">メールアドレス</a></li><!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">URL</a></li><!--<?php endif; ?>-->
					<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
</li>
				</ul>
				<!--<?php if (( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'author' && ( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest' ) ) ) || ( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest' && ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) )): ?>-->
				<ul class="menu">
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'author' && ( ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest' ) )): ?>-->
					<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a></li>
					<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest' && ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/user/comment_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a></li>
					<!--<?php endif; ?>-->
				</ul>
				<!--<?php endif; ?>-->
			</article>
			<!--<?php endforeach; else: ?>-->
			<ul>
				<li>コメントはまだありません。</li>
			</ul>
			<!--<?php endif; unset($_from); ?>-->
		</section>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'view'): ?>-->
		<section id="comment_form">
			<h1>コメント登録</h1>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'open' || ((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user' && ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
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
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
			<ul class="complete">
				<li>コメントを登録しました。</li>
			</ul>
			<!--<?php endif; ?>-->
			<ul>
				<li>コメントを入力してください。</li>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?>--><li>コメントは登録ユーザーからのみ受け付けています。</li><!--<?php endif; ?>-->
			</ul>
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/view/<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>#comment_form" method="post">
				<fieldset>
					<legend>登録フォーム</legend>
					<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<input type="hidden" name="comment[entry_id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<dl>
						<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<dt>名前</dt>
							<dd><input type="text" name="comment[name]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['comment']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
						<dt>メールアドレス</dt>
							<dd><input type="text" name="comment[mail]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['comment']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
						<dt>URL</dt>
							<dd><input type="text" name="comment[url]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['comment']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
						<!--<?php endif; ?>-->
						<dt>コメント</dt>
							<dd><textarea name="comment[text]" cols="50" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['comment']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
						<dt>閲覧制限</dt>
							<dd>
								<select name="comment[restriction]">
									<option value="">全体に公開</option>
									<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><option value="user"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?> selected="selected"<?php endif; ?>>登録ユーザーに公開</option><!--<?php endif; ?>-->
									<option value="admin"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'admin'): ?> selected="selected"<?php endif; ?>>管理者に公開</option>
								</select>
							</dd>
					</dl>
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<ul>
						<li><input type="checkbox" name="comment[session]" id="label_session" value="keep"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['comment']['session'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_session">登録者情報を記憶する</label></li>
					</ul>
					<!--<?php endif; ?>-->
					<p>
						<input type="submit" name="preview" value="確認する" />
						<input type="submit" value="登録する" />
					</p>
				</fieldset>
			</form>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user' && ! ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<ul>
				<li>コメントを登録するには<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/login">ログイン</a>してください。</li>
			</ul>
			<!--<?php endif; ?>-->
		</section>
		<!--<?php endif; ?>-->
		<!--<?php endif; ?>-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'iphones/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>