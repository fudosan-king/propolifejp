<?php /* Smarty version 2.6.27, created on 2017-03-23 12:35:57
         compiled from iphones/internals/admin/default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/internals/admin/default.html', 5, false),array('modifier', 'date_format', 'iphones/internals/admin/default.html', 32, false),array('modifier', 'intval', 'iphones/internals/admin/default.html', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>ステータス</h2>
		<ul>
			<li>現在 <em><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em> としてログインしています。権限は <em><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root'): ?>-->管理者<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'author'): ?>-->投稿者<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest'): ?>-->ゲスト<!--<?php endif; ?>--></em> です。</li>
			<li>本体のバージョンは <em><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['version'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em> です。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">サイトを確認する</a>。</li>
		</ul>
		<h3>登録データ</h3>
		<table summary="登録データ">
			<thead>
				<tr>
					<th>項目</th>
					<th>登録件数</th>
					<th>未承認</th>
					<th>更新日時</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>項目</th>
					<th>登録件数</th>
					<th>未承認</th>
					<th>更新日時</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>エントリー</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry_count']-$this->_tpl_vars['entry_approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
				</tr>
				<tr>
					<td>ページ</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['page_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['page_count']-$this->_tpl_vars['page_approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
				</tr>
				<tr>
					<td>コメント</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_count']-$this->_tpl_vars['comment_approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
				</tr>
				<tr>
					<td>トラックバック</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['trackback_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['trackback_count']-$this->_tpl_vars['trackback_approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
				</tr>
				<tr>
					<td>ユーザー</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['user_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td class="number"><?php echo ((is_array($_tmp=$this->_tpl_vars['user_count']-$this->_tpl_vars['user_approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user_modified'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
				</tr>
			</tbody>
		</table>
		<h3>ファイルサイズ</h3>
		<table summary="ファイルサイズ">
			<thead>
				<tr>
					<th>項目</th>
					<th>ファイルサイズ</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>項目</th>
					<th>ファイルサイズ</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>エントリーファイル</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_file_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>エントリーイメージ</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_image_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>エントリーオプションファイル</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_option_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>ページファイル</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_file_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>ページイメージ</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_image_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>ページオプションファイル</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_option_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
				<tr>
					<td>メディアファイル</td>
					<td class="number"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['media_size']/1024)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
KB</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>