<?php /* Smarty version 2.6.27, created on 2017-03-16 12:32:01
         compiled from iphones/internals/admin/media_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/admin/media_form.html', 3, false),array('modifier', 'cat', 'iphones/internals/admin/media_form.html', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h2><!--<?php if (((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ディレクトリ名変更<!--<?php else: ?>-->ディレクトリ作成<!--<?php endif; ?>--></h2>
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
		<!--<?php if (((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul>
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> 内にある<!--<?php endif; ?>-->ディレクトリ <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> の名前を変更します。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->この階層の<!--<?php endif; ?>-->メディアを一欄表示する</a>。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?directory=1&amp;name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ディレクトリ名変更フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="rename_directory" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[directory_org]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>ディレクトリ名</dt>
						<dd><input type="text" name="media[directory]" size="50" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="変更する" /></p>
			</fieldset>
		</form>
		<h2>ディレクトリ移動</h2>
		<ul>
			<li>移動先を選択してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_move?directory=1&amp;name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>メディア移動フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>移動先</dt>
						<dd>
							<select name="media[path]">
								<option value="">メディア管理ディレクトリ直下</option>
								<!--<?php $_from = $this->_tpl_vars['directories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['directory']):
?>-->
								<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) : smarty_modifier_cat($_tmp, ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))))) ? $this->_run_mod_handler('cat', true, $_tmp, '/') : smarty_modifier_cat($_tmp, '/')) != ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endif; ?>-->
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
				</dl>
				<p><input type="submit" value="移動する" /></p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ( ((is_array($_tmp=$this->_tpl_vars['freo']['config']['media']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['config']['media']['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) )): ?>-->
		<h2>閲覧制限</h2>
		<ul>
			<li>ディレクトリの閲覧制限を設定します。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?directory=1&amp;name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>閲覧制限設定フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="restrict_directory" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[directory]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['media']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<dl>
					<dt>制限</dt>
						<dd>
							<select name="media[restriction]" id="article_restriction">
								<option value="">制限なし</option>
								<option value="user"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?> selected="selected"<?php endif; ?>>ユーザー登録で制限</option>
								<option value="group"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'group'): ?> selected="selected"<?php endif; ?>>グループで制限</option>
								<option value="password"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'password'): ?> selected="selected"<?php endif; ?>>パスワードで制限</option>
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
								<li><input type="checkbox" name="media[group][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['group'][$this->_tpl_vars['refer_group']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
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
						<dd><input type="text" name="media[password]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['media']['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<dl>
					<dt>フィルターで制限</dt>
						<dd class="list">
							<ul>
								<!--<?php $_from = $this->_tpl_vars['freo']['refer']['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_filter']):
?>-->
								<li><input type="checkbox" name="media[filter][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_filter_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['filter'][$this->_tpl_vars['refer_filter']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_filter_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_filter']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></li>
								<!--<?php endforeach; else: ?>-->
								<li>フィルターが登録されていません。</li>
								<!--<?php endif; unset($_from); ?>-->
							</ul>
						</dd>
				</dl>
				<!--<?php endif; ?>-->
				<p><input type="submit" value="設定する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<h2>ディレクトリ削除</h2>
		<ul>
			<li>このディレクトリを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_delete" method="get" class="delete">
			<fieldset>
				<legend>ディレクトリ削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="directory" value="1" />
				<input type="hidden" name="name" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/" />
				<input type="hidden" name="path" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="削除する" /></p>
			</fieldset>
		</form>
		<!--<?php else: ?>-->
		<ul>
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> 内に<!--<?php endif; ?>-->ディレクトリを作成します。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->この階層の<!--<?php endif; ?>-->メディアを一欄表示する</a>。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?directory=1&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ディレクトリ作成フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="insert_directory" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>ディレクトリ名</dt>
						<dd><input type="text" name="media[directory]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="作成する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<!--<?php else: ?>-->
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ファイル差し替え<!--<?php else: ?>-->ファイル登録<!--<?php endif; ?>--></h2>
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
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> に登録された<!--<?php endif; ?>-->ファイル <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> を差し替えます。</li>
			<li>差し替えたいファイルを選択してください。</li>
			<!--<?php else: ?>-->
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> に<!--<?php endif; ?>-->登録したいファイルを選択してください。</li>
			<!--<?php endif; ?>-->
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->この階層の<!--<?php endif; ?>-->メディアを一欄表示する</a>。</li>
		</ul>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['file_image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/file/media/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/file/media/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?width=100&amp;height=100" alt="現在の画像" width="100" /></a></p><!--<?php endif; ?>-->
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>メディア登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="insert" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<input type="hidden" name="media[file_org]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php endif; ?>-->
				<dl id="media_file">
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>アップロード先 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="media[path]">
								<option value="">メディア管理ディレクトリ直下</option>
								<!--<?php $_from = $this->_tpl_vars['directories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['directory']):
?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['input']['media']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
					<!--<?php endif; ?>-->
					<dt>ファイル <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="file" name="media[file][]" size="30" /></dd>
				</dl>
				<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<dl id="media_template">
					<dt>ファイル</dt>
						<dd><input type="file" name="media[file][]" size="30" /></dd>
				</dl>
				<p><a href="javascript:void(0)" id="media_add">ファイル選択欄を追加</a></p>
				<!--<?php endif; ?>-->
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['media']['thumbnail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<dl>
					<dt>サムネイル画像の最大横幅 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="media[thumbnail_width]" size="4" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['thumbnail_width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /> px</dd>
					<dt>サムネイル画像の最大縦幅 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="media[thumbnail_height]" size="4" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['thumbnail_height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /> px</dd>
				</dl>
				<!--<?php endif; ?>-->
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'edit_thumbnail'): ?>-->
		<h2>サムネイル画像登録</h2>
		<ul>
			<li>ファイル <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> のサムネイル画像のみを登録します。</li>
			<li>登録したい画像を選択してください。</li>
		</ul>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['thumbnail_image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><p><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/file/media/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?type=thumbnail&amp;name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/file/media/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?type=thumbnail&amp;width=50&amp;height=50" alt="現在の画像" width="50" /></a></p><!--<?php endif; ?>-->
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>サムネイル画像登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="edit_thumbnail" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[file_org]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>画像</dt>
						<dd><input type="file" name="media[thumbnail]" size="30" /></dd>
				</dl>
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['media']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'edit_file'): ?>-->
		<h2>ファイル書き換え</h2>
		<ul>
			<li>ファイル <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> の内容を書き換えます。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ファイル書き換えフォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="freo[trim]" value="keep" />
				<input type="hidden" name="media[exec]" value="edit_file" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[file]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>内容</dt>
						<dd><textarea name="media[text]" cols="50" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
				</dl>
				<p><input type="submit" value="書き換える" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<h2>ファイルの説明登録</h2>
		<ul>
			<li>ファイル <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> の説明を登録できます。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ファイルの説明登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="edit_memo" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[file]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>ファイルの説明</dt>
						<dd><input type="text" name="media[memo]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="登録する" /></p>
			</fieldset>
		</form>
		<h2>ファイル名変更</h2>
		<ul>
			<li>ファイル <code><?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> の名前を変更します。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ファイル名変更フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="rename_file" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[file_org]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>ファイル名</dt>
						<dd><input type="text" name="media[file]" size="50" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="変更する" /></p>
			</fieldset>
		</form>
		<h2>ファイル移動</h2>
		<ul>
			<li>移動先を選択してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_move?name=<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>メディア移動フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[file]" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>移動先</dt>
						<dd>
							<select name="media[path]">
								<option value="">メディア管理ディレクトリ直下</option>
								<!--<?php $_from = $this->_tpl_vars['directories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['directory']):
?>-->
								<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
								<!--<?php endif; ?>-->
								<!--<?php endforeach; endif; unset($_from); ?>-->
							</select>
						</dd>
				</dl>
				<p><input type="submit" value="移動する" /></p>
			</fieldset>
		</form>
		<h2>ファイル削除</h2>
		<ul>
			<li>このファイルを削除するには、<em>削除ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_delete" method="get" class="delete">
			<fieldset>
				<legend>ファイル削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="name" value="<?php echo ((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="path" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="削除する" /></p>
			</fieldset>
		</form>
		<!--<?php else: ?>-->
		<h2>ファイル作成</h2>
		<ul>
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> 内に<!--<?php endif; ?>-->ファイルを作成します。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post">
			<fieldset>
				<legend>ファイル作成フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="media[exec]" value="insert_file" />
				<input type="hidden" name="media[path]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>ファイル名</dt>
						<dd><input type="text" name="media[file]" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['media']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
				</dl>
				<p><input type="submit" value="作成する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<!--<?php endif; ?>-->
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>