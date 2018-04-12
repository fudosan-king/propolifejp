<?php /* Smarty version 2.6.27, created on 2017-04-03 14:48:56
         compiled from internals/admin/comment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/comment.html', 4, false),array('modifier', 'count_characters', 'internals/admin/comment.html', 24, false),array('modifier', 'cat', 'internals/admin/comment.html', 24, false),array('modifier', 'date_format', 'internals/admin/comment.html', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>コメント管理</h2>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="attention">
			<li>不正なアクセスです。</li>
		</ul>
		<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<ul class="complete">
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'approve'): ?>-->
			<li>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のコメントを承認しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'update'): ?>-->
			<li>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のコメントを編集しました。</li>
			<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['freo']['query']['exec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'delete'): ?>-->
			<li>No.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のコメントを削除しました。</li>
			<!--<?php endif; ?>-->
		</ul>
		<!--<?php endif; ?>-->
		<ul>
			<!--<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>キーワード「<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li>ユーザー「<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
」の検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><!--<?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'yes'): ?>-->承認済み<!--<?php elseif (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->未承認<!--<?php endif; ?>-->コメントの検索結果は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 4): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '0101000000') : smarty_modifier_cat($_tmp, '0101000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 6): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '01000000') : smarty_modifier_cat($_tmp, '01000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;%m&#x6708;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;%m&#x6708;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 8): ?>--><li><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, '000000') : smarty_modifier_cat($_tmp, '000000')))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y&#x5E74;%m&#x6708;%d&#x65E5;') : smarty_modifier_date_format($_tmp, '%Y&#x5E74;%m&#x6708;%d&#x65E5;')); ?>
の記事は以下のとおりです。</li><!--<?php endif; ?>-->
			<!--<?php else: ?>-->
			<li>登録されたコメントは以下のとおりです。</li>
			<!--<?php endif; ?>-->
		</ul>
		<div id="search">
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment" method="get">
				<fieldset>
					<legend>コメント検索フォーム</legend>
					<dl>
						<dt>キーワード</dt>
							<dd><input type="text" name="word" size="50" value="<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['comment']['approve'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->
						<dt>状態</dt>
							<dd>
								<input type="checkbox" name="approved" id="label_approved_no" value="no"<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?> checked="checked"<?php endif; ?> /> <label for="label_approved_no">未承認のみ</label>
							</dd>
						<!--<?php endif; ?>-->
					</dl>
					<p><input type="submit" value="検索する" /></p>
				</fieldset>
			</form>
		</div>
		<ul>
			<li><em><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em>件のコメント。全<em><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em>ページ中<em><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em>ページ目を表示しています。</li>
		</ul>
		<table summary="コメント">
			<thead>
				<tr>
					<th>No</th>
					<th>日時</th>
					<th>名前</th>
					<th>IPアドレス</th>
					<th>状態</th>
					<th>作業</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>日時</th>
					<th>名前</th>
					<th>IPアドレス</th>
					<th>状態</th>
					<th>作業</th>
				</tr>
			</tfoot>
			<tbody>
				<!--<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>-->
				<tr>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d')) == ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y%m%d') : smarty_modifier_date_format($_tmp, '%Y%m%d'))): ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S') : smarty_modifier_date_format($_tmp, '%H:%M:%S')); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['created'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
<!--<?php endif; ?>--></td>
					<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['ip'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
					<td><!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->未承認<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'admin'): ?>-->管理者に公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['comment']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?>-->登録ユーザーに公開<!--<?php else: ?>-->公開<!--<?php endif; ?>--></td>
					<td>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php if (((is_array($_tmp=$this->_tpl_vars['comment']['entry_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>view/<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['entry_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['comment']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>page/<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">確認</a>
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root' || ((is_array($_tmp=$this->_tpl_vars['freo']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['comment']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['freo']['refer']['users'][$this->_tpl_vars['comment']['user_id']]['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest'): ?>-->
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment_form?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">編集</a>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment_delete?freo%5Btoken%5D=<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="delete">削除</a>
						<!--<?php endif; ?>-->
					</td>
				</tr>
				<!--<?php endforeach; endif; unset($_from); ?>-->
			</tbody>
		</table>
		<div id="page">
			<h2>ページ移動</h2>
			<ul class="order">
				<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > 1): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page']-1)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;approved=<?php echo ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">前のページ</a><!--<?php else: ?>-->前のページ<!--<?php endif; ?>--></li>
				<li><!--<?php if (((is_array($_tmp=$this->_tpl_vars['comment_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/comment?page=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page']+1)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;approved=<?php echo ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">次のページ</a><!--<?php else: ?>-->次のページ<!--<?php endif; ?>--></li>
			</ul>
			<ul class="direct">
				<li>ページ</li>
				<!--<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['comment_page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
/admin/comment?page=<?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;word=<?php echo ((is_array($_tmp=$_GET['word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;user=<?php echo ((is_array($_tmp=$_GET['user'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;approved=<?php echo ((is_array($_tmp=$_GET['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>&amp;date=<?php echo ((is_array($_tmp=$_GET['date'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!--<?php else: ?>--><?php echo ((is_array($_tmp=$this->_sections['loop']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php endif; ?>--></li>
				<!--<?php endfor; endif; ?>-->
			</ul>
		</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>