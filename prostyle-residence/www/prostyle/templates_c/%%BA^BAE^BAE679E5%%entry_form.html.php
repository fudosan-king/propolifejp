<?php /* Smarty version 2.6.27, created on 2017-03-21 11:10:36
         compiled from internals/admin/entry_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/entry_form.html', 3, false),array('modifier', 'explode', 'internals/admin/entry_form.html', 51, false),array('modifier', 'in_array', 'internals/admin/entry_form.html', 53, false),array('modifier', 'date_format', 'internals/admin/entry_form.html', 100, false),array('modifier', 'default', 'internals/admin/entry_form.html', 179, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のエントリーを編集<!--<?php else: ?>-->エントリー登録<!--<?php endif; ?>--></h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<!--<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>-->
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
			<!--<?php endforeach; endif; unset($_from); ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li>エントリーを入力してください。</li>
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>エントリー登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="entry[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>タイトル <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="entry[title]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>本文 <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?type=iframe" class="colorbox" title="メディア"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/media.png" alt="メディア管理" title="メディア管理" width="16" height="16" /></a> <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?type=iframe" class="colorbox" title="メディア"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/media_add.png" alt="メディア登録" title="メディア登録" width="16" height="16" /></a></dt>
						<dd><textarea name="entry[text]" cols="65" rows="30" id="tiny_mce"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<!--<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>-->
					<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['option']['required'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?>--> <abbr class="attention" title="入力必須">*</abbr><!--<?php endif; ?>--></dt>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'text'): ?>-->
						<dd><input type="text" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" size="50" value="<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['query']['session'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_SERVER['REQUEST_METHOD'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'POST'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" /></dd>
						<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'textarea'): ?>-->
						<dd><textarea name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" cols="50" rows="5"><?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['query']['session'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_SERVER['REQUEST_METHOD'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'POST'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></textarea></dd>
						<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'select'): ?>-->
						<dd>
							<select name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]">
								<option value="">選択してください</option>
								<!--<?php $_from = $this->_tpl_vars['option_texts'][$this->_tpl_vars['option']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option_text']):
?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> selected="selected"<?php endif; ?> ><?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
						<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'radio'): ?>-->
						<dd>
							<!--<?php if (((is_array($_tmp=$this->_tpl_vars['option']['required'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->
							<input type="radio" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value=""<?php if (! ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">選択なし</label>
							<!--<?php endif; ?>-->
							<!--<?php $_from = $this->_tpl_vars['option_texts'][$this->_tpl_vars['option']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_text']):
        $this->_foreach['loop']['iteration']++;
?>-->
							<input type="radio" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['loop']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['loop']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label>
							<!--<?php endforeach; endif; unset($_from); ?>-->
						</dd>
						<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'checkbox'): ?>-->
						<dd>
							<!--<?php $this->assign('options', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('explode', true, $_tmp, "\n") : smarty_modifier_explode($_tmp, "\n"))); ?>-->
							<!--<?php $_from = $this->_tpl_vars['option_texts'][$this->_tpl_vars['option']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_text']):
        $this->_foreach['loop']['iteration']++;
?>-->
							<input type="checkbox" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
][]" id="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['loop']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('in_array', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : in_array($_tmp, ((is_array($_tmp=$this->_tpl_vars['options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))))): ?> checked="checked"<?php endif; ?> /> <label for="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
_<?php echo ((is_array($_tmp=($this->_foreach['loop']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['option_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label>
							<!--<?php endforeach; endif; unset($_from); ?>-->
						</dd>
						<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['option']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'file'): ?>-->
						<dd>
							<input type="file" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" size="30" />
							<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<input type="checkbox" name="entry_associate[option_remove][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option_remove'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_option_<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
を削除</label>
								<input type="hidden" name="entry_associate[option][<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
							<!--<?php endif; ?>-->
						</dd>
						<!--<?php endif; ?>-->
					<!--<?php endforeach; endif; unset($_from); ?>-->
				</dl>
				<p>
					<input type="submit" name="preview" value="確認する" />
					<input type="submit" value="登録する" />
				</p>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<h3>添付ファイル</h3>
				<dl>
					<dt>ファイル</dt>
						<dd>
							<input type="file" name="entry[file]" size="30" />
							<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<input type="checkbox" name="entry[file_remove]" id="label_file" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['file_remove'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_file"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
を削除</label>
								<input type="hidden" name="entry[file]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
							<!--<?php endif; ?>-->
						</dd>
					<dt>ファイルのイメージ</dt>
						<dd>
							<input type="file" name="entry[image]" size="30" />
							<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<input type="checkbox" name="entry[image_remove]" id="label_image" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['image_remove'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_image"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
を削除</label>
								<input type="hidden" name="entry[image]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
							<!--<?php endif; ?>-->
						</dd>
					<dt>ファイルの説明</dt>
						<dd><input type="text" name="entry[memo]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<!--<?php else: ?>-->
				<input type="hidden" name="entry[memo]" value="" />
				<!--<?php endif; ?>-->
				<h3>エントリー情報</h3>
				<dl>
					<dt>日時 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<input type="text" name="entry[datetime][year]" size="4" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
" />
							年
							<input type="text" name="entry[datetime][month]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m') : smarty_modifier_date_format($_tmp, '%m')); ?>
" />
							月
							<input type="text" name="entry[datetime][day]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%d') : smarty_modifier_date_format($_tmp, '%d')); ?>
" />
							日
							<input type="text" name="entry[datetime][hour]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H') : smarty_modifier_date_format($_tmp, '%H')); ?>
" />
							時
							<input type="text" name="entry[datetime][minute]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%M') : smarty_modifier_date_format($_tmp, '%M')); ?>
" />
							分
							<input type="text" name="entry[datetime][second]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%S') : smarty_modifier_date_format($_tmp, '%S')); ?>
" />
							秒
						</dd>
					<dt>エントリーの状態 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[status]">
								<option value="publish"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?> selected="selected"<?php endif; ?>>公開</option>
								<option value="private"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?> selected="selected"<?php endif; ?>>未公開</option>
								<option value="future"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'future'): ?> selected="selected"<?php endif; ?>>予約公開</option>
							</select>
						</dd>
					<dt>エントリーの表示 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[display]">
								<option value="publish"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?> selected="selected"<?php endif; ?>>初期画面に表示する</option>
								<option value="private"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?> selected="selected"<?php endif; ?>>初期画面に表示しない</option>
							</select>
						</dd>
					<dt>コメントの受付 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[comment]">
								<option value="open"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'open'): ?> selected="selected"<?php endif; ?>>受け付ける</option>
								<option value="closed"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'closed'): ?> selected="selected"<?php endif; ?>>受け付けない</option>
								<option value="view"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'view'): ?> selected="selected"<?php endif; ?>>表示のみ</option>
								<option value="user"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?> selected="selected"<?php endif; ?>>登録ユーザーから受け付ける</option>
							</select>
						</dd>
					<dt>トラックバックの受付 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[trackback]">
								<option value="open"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'open'): ?> selected="selected"<?php endif; ?>>受け付ける</option>
								<option value="closed"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'closed'): ?> selected="selected"<?php endif; ?>>受け付けない</option>
								<option value="view"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'view'): ?> selected="selected"<?php endif; ?>>表示のみ</option>
							</select>
						</dd>
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>カテゴリー</dt>
						<dd class="list">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/entry_form_category.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</dd>
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>タグ</dt>
						<dd><input type="text" name="entry[tag]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php else: ?>-->
					<input type="hidden" name="entry[tag]" value="" />
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>コード</dt>
						<dd><input type="text" name="entry[code]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php else: ?>-->
					<input type="hidden" name="entry[code]" value="" />
					<!--<?php endif; ?>-->
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>エントリーの公開終了 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[close_set]" id="article_close_set">
								<option value="1">指定する</option>
								<option value="0"<?php if (! ((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> selected="selected"<?php endif; ?>>指定しない</option>
							</select>
						</dd>
					<!--<?php else: ?>-->
					<input type="hidden" name="entry[close_set]" value="" />
					<!--<?php endif; ?>-->
				</dl>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<dl id="article_close">
					<dt>公開終了日時</dt>
						<dd>
							<input type="text" name="entry[close][year]" size="4" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
" />
							年
							<input type="text" name="entry[close][month]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m') : smarty_modifier_date_format($_tmp, '%m')); ?>
" />
							月
							<input type="text" name="entry[close][day]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%d') : smarty_modifier_date_format($_tmp, '%d')); ?>
" />
							日
							<input type="text" name="entry[close][hour]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H') : smarty_modifier_date_format($_tmp, '%H')); ?>
" />
							時
							<input type="text" name="entry[close][minute]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%M') : smarty_modifier_date_format($_tmp, '%M')); ?>
" />
							分
							<input type="text" name="entry[close][second]" size="2" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['input']['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%S') : smarty_modifier_date_format($_tmp, '%S')); ?>
" />
							秒
						</dd>
				</dl>
				<!--<?php else: ?>-->
				<input type="hidden" name="entry[close]" value="" />
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<h3>通知</h3>
				<dl>
					<dt>トラックバック送信先</dt>
						<dd><textarea name="entry[trackback_url]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['trackback_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
				</dl>
				<!--<?php else: ?>-->
				<input type="hidden" name="entry[trackback_url]" value="" />
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<h3>閲覧制限</h3>
				<dl>
					<dt>制限 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="entry[restriction]" id="article_restriction">
								<option value="">制限なし</option>
								<option value="user"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?> selected="selected"<?php endif; ?>>ユーザー登録で制限</option>
								<option value="group"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'group'): ?> selected="selected"<?php endif; ?>>グループで制限</option>
								<option value="password"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'password'): ?> selected="selected"<?php endif; ?>>パスワードで制限</option>
							</select>
						</dd>
				</dl>
				<dl id="article_group">
					<dt>グループで制限</dt>
						<dd class="list">
							<ul>
								<!--<?php $_from = $this->_tpl_vars['freo']['refer']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_group']):
?>-->
								<li><input type="checkbox" name="entry_associate[group][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['group'][$this->_tpl_vars['refer_group']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></li>
								<!--<?php endforeach; else: ?>-->
								<li>グループが登録されていません。</li>
								<!--<?php endif; unset($_from); ?>-->
							</ul>
						</dd>
				</dl>
				<dl id="article_password">
					<dt>パスワードで制限</dt>
						<dd><input type="text" name="entry[password]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<!--<?php else: ?>-->
				<input type="hidden" name="entry[restriction]" value="" />
				<input type="hidden" name="entry[password]" value="" />
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<h3>フィルター</h3>
				<dl>
					<dt>フィルターで制限</dt>
						<dd class="list">
							<ul>
								<!--<?php $_from = $this->_tpl_vars['freo']['refer']['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_filter']):
?>-->
								<li><input type="checkbox" name="entry_associate[filter][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_filter_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry_associate']['filter'][$this->_tpl_vars['refer_filter']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_filter_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></li>
								<!--<?php endforeach; else: ?>-->
								<li>フィルターが登録されていません。</li>
								<!--<?php endif; unset($_from); ?>-->
							</ul>
						</dd>
				</dl>
				<!--<?php endif; ?>-->
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root'): ?>-->
		<h2>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のエントリーの詳細</h2>
		<table summary="エントリーの詳細">
			<tr>
				<th>登録ユーザー</th><td><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['entry']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			</tr>
			<tr>
				<th>新規投稿日時</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M')); ?>
</td>
			</tr>
			<tr>
				<th>最終編集日時</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['entry']['modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M')); ?>
</td>
			</tr>
		</table>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['entry']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->
		<h2>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のエントリーを承認</h2>
		<ul>
			<li>このエントリーは<em>未承認</em>です。</li>
			<li>このエントリーを承認するには、<em>承認ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_approve" method="get" class="approve">
			<fieldset>
				<legend>エントリー承認フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="承認する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<!--<?php endif; ?>-->
		<h2>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のエントリーを削除</h2>
		<ul>
			<li>このエントリーを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_delete" method="get" class="delete">
			<fieldset>
				<legend>エントリー削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="削除する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>