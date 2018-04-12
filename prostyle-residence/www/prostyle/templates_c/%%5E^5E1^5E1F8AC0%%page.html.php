<?php /* Smarty version 2.6.27, created on 2017-04-03 14:50:45
         compiled from internals/admin/page.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/page.html', 4, false),array('modifier', 'count_characters', 'internals/admin/page.html', 28, false),array('modifier', 'cat', 'internals/admin/page.html', 28, false),array('modifier', 'date_format', 'internals/admin/page.html', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>ページ管理</h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<li>不正なアクセスです。</li>
		</ul>
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="complete">
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'insert'): ?>-->
			<li>ページを新規に登録しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のページを編集しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete'): ?>-->
			<li>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のページを削除しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'sort'): ?>-->
			<li>ページを並び替えました。</li>
			<!--<?php endif; ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<!--<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>キーワード「<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>ユーザー「<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><!--<?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?>-->承認済み<!--<?php elseif (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->未承認<!--<?php endif; ?>-->ページの検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>ステータス「<!--<?php if (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->公開<!--<?php elseif (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?>-->未公開<!--<?php elseif (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'future'): ?>-->予約公開<!--<?php endif; ?>-->」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>タグ「<?php echo ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 4): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '0101000000') : smarty_modifier_cat($_tmp, '0101000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 6): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '01000000') : smarty_modifier_cat($_tmp, '01000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;%m&#x6708;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;%m&#x6708;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 8): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '000000') : smarty_modifier_cat($_tmp, '000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;%m&#x6708;%d&#x65E5;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;%m&#x6708;%d&#x65E5;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php else: ?>-->
			<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><code><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</code> に<!--<?php endif; ?>-->登録されたページは以下のとおりです。</li>
			<!--<?php endif; ?>-->
			<li>IDをクリックすると、そのページに属するページを表示できます。</li>
			<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page_form?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">この階層にページを登録する</a>。</li>
		</ul>
		<div id="search">
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page" method="get">
				<fieldset>
					<legend>ページ検索フォーム</legend>
					<dl>
						<dt>キーワード</dt>
							<dd><input type="text" name="word" size="50" value="<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
						<dt>状態</dt>
							<dd>
								<input type="checkbox" name="status" id="label_status_private" value="private"<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?> checked="checked"<?php endif; ?> /> <label for="label_status_private">未公開のみ</label>
								<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['page']['approve'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->
								&nbsp;
								<input type="checkbox" name="approved" id="label_approved_no" value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> checked="checked"<?php endif; ?> /> <label for="label_approved_no">未承認のみ</label>
								<!--<?php endif; ?>-->
							</dd>
					</dl>
					<p><input type="submit" value="検索する" /></p>
				</fieldset>
			</form>
		</div>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page_update" method="post">
			<fieldset>
				<legend>ページ並び替えフォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="pid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<table summary="ページ">
					<thead>
						<tr>
							<th>ID</th>
							<th>日時</th>
							<th>タイトル</th>
							<th>状態</th>
							<th>並び順</th>
							<th>作業</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>日時</th>
							<th>タイトル</th>
							<th>状態</th>
							<th>並び順</th>
							<th>作業</th>
						</tr>
					</tfoot>
					<tbody>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['parent']['pid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">上の階層へ</a></td>
						</tr>
						<!--<?php endif; ?>-->
						<!--<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>-->
						<tr>
							<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page?pid=<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
							<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['page']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->未承認<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['page']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['page']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?>-->未公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['page']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'future'): ?>-->予約公開<!--<?php endif; ?>--></td>
							<td class="number"><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' && ! ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><input type="text" name="sort[<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" size="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /><!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></td>
							<td>
								<!--<?php if (((is_array($_tmp=$this->_tpl_vars['page']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes' && ( ((is_array($_tmp=$this->_tpl_vars['page']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish' || ( ((is_array($_tmp=$this->_tpl_vars['page']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'future' && ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d%H%M%S') : smarty_modifier_date_format($_tmp, '%Y%m%d%H%M%S')) <= ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d%H%M%S') : smarty_modifier_date_format($_tmp, '%Y%m%d%H%M%S')) ) ) && ( ! ((is_array($_tmp=$this->_tpl_vars['page']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d%H%M%S') : smarty_modifier_date_format($_tmp, '%Y%m%d%H%M%S')) >= ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d%H%M%S') : smarty_modifier_date_format($_tmp, '%Y%m%d%H%M%S')) )): ?>-->
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/page/<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">確認</a>
								<!--<?php endif; ?>-->
								<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['page']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
								<!--<?php endif; ?>-->
							</td>
						</tr>
						<!--<?php endforeach; endif; unset($_from); ?>-->
					</tbody>
				</table>
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' && ! ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) && ! ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
				<p><input type="submit" value="並び順を編集する" /></p>
				<!--<?php endif; ?>-->
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<div id="page">
			<h2>ページ移動</h2>
			<ul class="order">
				<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > 1): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page']-1)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;status=<?php echo ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;tag=<?php echo ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">前のページ</a><!--<?php else: ?>-->前のページ<!--<?php endif; ?>--></li>
				<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['page_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page']+1)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;status=<?php echo ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;tag=<?php echo ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">次のページ</a><!--<?php else: ?>-->次のページ<!--<?php endif; ?>--></li>
			</ul>
			<ul class="direct">
				<li>ページ</li>
				<!--<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['page_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>-->
				<li><!--<?php if (((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/page?page=<?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;status=<?php echo ((is_array($_tmp=$_GET['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;tag=<?php echo ((is_array($_tmp=$_GET['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></li>
				<!--<?php endfor; endif; ?>-->
			</ul>
		</div>
		<!--<?php endif; ?>-->
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>