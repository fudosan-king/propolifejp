<?php /* Smarty version 2.6.27, created on 2017-04-03 14:51:02
         compiled from internals/admin/media.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/media.html', 4, false),array('modifier', 'date_format', 'internals/admin/media.html', 94, false),array('modifier', 'intval', 'internals/admin/media.html', 95, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>メディア管理</h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<li>不正なアクセスです。</li>
		</ul>
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="complete">
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
			<li>ファイルを新規に登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'edit_thumbnail'): ?>-->
			<li>サムネイル画像を登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'edit_file'): ?>-->
			<li>ファイルを編集しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'edit_memo'): ?>-->
			<li>ファイルの説明を登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert_file'): ?>-->
			<li>ファイルを新規に作成しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'rename_file'): ?>-->
			<li>ファイル名を変更しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'move_file'): ?>-->
			<li>ファイルを移動しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete_file'): ?>-->
			<li>ファイルを削除しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert_directory'): ?>-->
			<li>ディレクトリを新規に作成しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'restrict_directory'): ?>-->
			<li>ディレクトリの閲覧制限を設定しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'rename_directory'): ?>-->
			<li>ディレクトリ名を変更しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'move_directory'): ?>-->
			<li>ディレクトリを移動しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete_directory'): ?>-->
			<li>ディレクトリを削除しました。</li>
			<!--<?php endif; ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul>
			<li><strong>このディレクトリには、閲覧制限が設定されています。</strong></li>
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> に<!--<?php endif; ?>-->登録されたメディアは以下のとおりです。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->この階層に<!--<?php endif; ?>-->メディアを登録する</a>。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?directory=1<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->この階層に<!--<?php endif; ?>-->ディレクトリを作成する</a>。</li>
		</ul>
		<table summary="メディア" id="media" class="tablesorter">
			<thead>
				<tr>
					<th>メディア</th>
					<th>更新日時</th>
					<th>サイズ</th>
					<th>画像</th>
					<th>作業</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>メディア</th>
					<th>更新日時</th>
					<th>サイズ</th>
					<th>画像</th>
					<th>作業</th>
				</tr>
			</tfoot>
			<tbody>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<tr>
					<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/directory.png" alt="ディレクトリ" width="16" height="16" /> <code>..</code></td>
					<td></td>
					<td></td>
					<td></td>
					<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['parent'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">上の階層へ</a></td>
				</tr>
				<!--<?php endif; ?>-->
				<!--<?php $_from = $this->_tpl_vars['directories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['directory']):
?>-->
				<tr>
					<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/<?php if (((is_array($_tmp=$this->_tpl_vars['directory']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>directory_restricted.png<?php else: ?>directory.png<?php endif; ?>" alt="ディレクトリ" width="16" height="16" /> <code><?php echo ((is_array($_tmp=$this->_tpl_vars['directory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media?path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['directory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/">開く</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?directory=1&amp;name=<?php echo ((is_array($_tmp=$this->_tpl_vars['directory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;directory=1&amp;name=<?php echo ((is_array($_tmp=$this->_tpl_vars['directory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
					</td>
				</tr>
				<!--<?php endforeach; endif; unset($_from); ?>-->
				<!--<?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>-->
				<tr>
					<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
images/icons/file.png" alt="ファイル" width="16" height="16" /> <code<?php if (((is_array($_tmp=$this->_tpl_vars['file']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> title="<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code></td>
					<td><span title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
"><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></span></td>
					<td class="number"><span title="<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['size'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 byte"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['file']['size'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) >= 1024): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file']['size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['file']['size'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > 0): ?>-->1KB<!--<?php else: ?>-->0KB<!--<?php endif; ?>--></span></td>
					<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$this->_tpl_vars['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
medias/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['file']['thumbnail']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['file']['thumbnail']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>media_thumbnails<?php else: ?>medias<?php endif; ?>/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
（<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
px × <?php echo ((is_array($_tmp=$this->_tpl_vars['file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
px）" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
（<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
px × <?php echo ((is_array($_tmp=$this->_tpl_vars['file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
px）" width="30" /></a><!--<?php endif; ?>--></td>
					<td>
						<a href="<?php if (((is_array($_tmp=$this->_tpl_vars['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/file/media/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_FILE_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
medias/<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"<?php if (! ((is_array($_tmp=$this->_tpl_vars['file']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ! ((is_array($_tmp=$this->_tpl_vars['file']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> class="colorbox"<?php endif; ?>>確認</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_form?name=<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/media_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;name=<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;path=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
					</td>
				</tr>
				<!--<?php endforeach; endif; unset($_from); ?>-->
			</tbody>
		</table>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>