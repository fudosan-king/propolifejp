<?php /* Smarty version 2.6.27, created on 2017-03-16 12:48:33
         compiled from internals/admin/entry_preview.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/entry_preview.html', 9, false),array('modifier', 'nl2br', 'internals/admin/entry_preview.html', 17, false),array('modifier', 'date_format', 'internals/admin/entry_preview.html', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2>エントリー登録</h2>
		<ul>
			<li>以下の内容で登録します。</li>
		</ul>
		<dl>
			<dt>タイトル</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>本文</dt>
				<dd><?php echo $this->_tpl_vars['entry']['text']; ?>
</dd>
			<!--<?php endif; ?>-->
			<!--<?php $_from = $this->_tpl_vars['freo']['refer']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dt>
				<dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry_associate']['option'][$this->_tpl_vars['option']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
			<!--<?php endif; ?>-->
			<!--<?php endforeach; endif; unset($_from); ?>-->
		</dl>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h3>添付ファイル</h3>
		<dl>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>ファイル</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['file_remove'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->（削除）<!--<?php endif; ?>--></dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>ファイルのイメージ</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['image_remove'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->（削除）<!--<?php endif; ?>--></dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>ファイルの説明</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['memo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
			<!--<?php endif; ?>-->
		</dl>
		<!--<?php endif; ?>-->
		<h3>エントリー情報</h3>
		<dl>
			<dt>日時</dt>
				<dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['datetime'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
</dd>
			<dt>エントリーの状態</dt>
				<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?>-->未公開<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'future'): ?>-->予約公開<!--<?php endif; ?>--></dd>
			<dt>エントリーの表示</dt>
				<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'publish'): ?>-->初期画面に表示する<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'private'): ?>-->初期画面に表示しない<!--<?php endif; ?>--></dd>
			<dt>コメントの受付</dt>
				<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'open'): ?>-->受け付ける<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'closed'): ?>-->受け付けない<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'view'): ?>-->表示のみ<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?>-->登録ユーザーから受け付ける<!--<?php endif; ?>--></dd>
			<dt>トラックバックの受付</dt>
				<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'open'): ?>-->受け付ける<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'closed'): ?>-->受け付けない<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['trackback'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'view'): ?>-->表示のみ<!--<?php endif; ?>--></dd>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>カテゴリー</dt>
				<dd class="list">
					<ul>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/entry_preview_category.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</ul>
				</dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>タグ</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>コード</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>公開終了日時</dt>
				<dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['close'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y/%m/%d %H:%M:%S')); ?>
</dd>
			<!--<?php endif; ?>-->
		</dl>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['trackback_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h3>通知</h3>
		<dl>
			<dt>トラックバック送信先</dt>
				<dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['trackback_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</dd>
		</dl>
		<!--<?php endif; ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h3>閲覧制限</h3>
		<dl>
			<dt>制限</dt>
				<dd><!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'user'): ?>-->ユーザー登録で制限<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'group'): ?>-->グループで制限<!--<?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'password'): ?>-->パスワードで制限<!--<?php else: ?>-->制限なし<!--<?php endif; ?>--></dd>
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['group'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>グループで制限</dt>
				<dd class="list">
					<ul>
						<!--<?php $_from = $this->_tpl_vars['freo']['refer']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refers_group']):
?>-->
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['group'][$this->_tpl_vars['refers_group']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><?php echo ((is_array($_tmp=$this->_tpl_vars['refers_group']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li><!--<?php endif; ?>-->
						<!--<?php endforeach; endif; unset($_from); ?>-->
					</ul>
				</dd>
			<!--<?php endif; ?>-->
			<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
			<dt>パスワードで制限</dt>
				<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
			<!--<?php endif; ?>-->
		</dl>
		<!--<?php endif; ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<h3>フィルター</h3>
		<dl>
			<dt>フィルターで制限</dt>
				<dd class="list">
					<ul>
						<!--<?php $_from = $this->_tpl_vars['freo']['refer']['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refers_filter']):
?>-->
						<!--<?php if (((is_array($_tmp=$this->_tpl_vars['entry_associate']['filter'][$this->_tpl_vars['refers_filter']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><li><?php echo ((is_array($_tmp=$this->_tpl_vars['refers_filter']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li><!--<?php endif; ?>-->
						<!--<?php endforeach; endif; unset($_from); ?>-->
					</ul>
				</dd>
		</dl>
		<!--<?php endif; ?>-->
		<div id="action">
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_form" method="get">
				<fieldset>
					<legend>エントリー編集フォーム</legend>
					<input type="hidden" name="session" value="1" />
					<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<p><input type="submit" value="戻る" /></p>
				</fieldset>
			</form>
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/entry_preview<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
				<fieldset>
					<legend>エントリー登録フォーム</legend>
					<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<p><input type="submit" value="登録する" /></p>
				</fieldset>
			</form>
		</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>