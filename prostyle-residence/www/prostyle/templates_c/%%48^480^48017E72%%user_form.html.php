<?php /* Smarty version 2.6.27, created on 2017-04-07 07:06:09
         compiled from internals/admin/user_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'internals/admin/user_form.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'internals/admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id="content">
		<h2><!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のユーザーを編集<!--<?php else: ?>-->ユーザー登録<!--<?php endif; ?>--></h2>
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
			<li>ユーザーを入力してください。</li>
			<li><abbr class="attention" title="入力必須">*</abbr> の付いた項目は入力必須項目です。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['https_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/user_form<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" method="post">
			<fieldset>
				<legend>ユーザー登録フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>--><input type="hidden" name="user[id]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /><!--<?php endif; ?>-->
				<dl>
					<!--<?php if (! ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>ユーザーID <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="user[id]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>パスワード <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="password" name="user[password]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<!--<?php endif; ?>-->
					<dt>権限 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd>
							<select name="user[authority]">
								<option value="root"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'root'): ?> selected="selected"<?php endif; ?>>管理者</option>
								<option value="author"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'author'): ?> selected="selected"<?php endif; ?>>投稿者</option>
								<option value="guest"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['user']['authority'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'guest'): ?> selected="selected"<?php endif; ?>>ゲスト</option>
							</select>
						</dd>
					<dt>名前 <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="user[name]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>メールアドレス <abbr class="attention" title="入力必須">*</abbr></dt>
						<dd><input type="text" name="user[mail]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['mail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>URL</dt>
						<dd><input type="text" name="user[url]" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></dd>
					<dt>紹介文</dt>
						<dd><textarea name="user[text]" cols="50" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['input']['user']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></dd>
					<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['config']['entry']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['freo']['config']['page']['restriction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
					<dt>グループ</dt>
						<dd class="list">
							<ul>
								<!--<?php $_from = $this->_tpl_vars['freo']['refer']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_group']):
?>-->
								<li><input type="checkbox" name="user_associate[group][<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="1"<?php if (((is_array($_tmp=$this->_tpl_vars['input']['user_associate']['group'][$this->_tpl_vars['refer_group']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?> checked="checked"<?php endif; ?> /> <label for="label_group_<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_group']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></li>
								<!--<?php endforeach; else: ?>-->
								<li>グループが登録されていません。</li>
								<!--<?php endif; unset($_from); ?>-->
							</ul>
						</dd>
					<!--<?php endif; ?>-->
				</dl>
				<p>
					<input type="submit" name="preview" value="確認する" />
					<input type="submit" value="登録する" />
				</p>
			</fieldset>
		</form>
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
		<!--<?php if (((is_array($_tmp=$this->_tpl_vars['input']['user']['approved'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == 'no'): ?>-->
		<h2>ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のユーザーを承認</h2>
		<ul>
			<li>このユーザーは<em>未承認</em>です。</li>
			<li>このユーザーを承認するには、<em>承認ボタン</em>を押してください。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/index.php/admin/user_approve" method="get" class="approve">
			<fieldset>
				<legend>ユーザー承認フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<p><input type="submit" value="承認する" /></p>
			</fieldset>
		</form>
		<!--<?php endif; ?>-->
		<h2 id="user_delete">ID.<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
のユーザーを削除</h2>
		<ul>
			<li>このユーザーを削除するには、<em>削除ボタン</em>を押してください。</li>
			<li>すでに登録された記事は、削除するか所有者を変更することができます。</li>
		</ul>
		<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/admin/user_delete" method="get" class="delete">
			<fieldset>
				<legend>ユーザー削除フォーム</legend>
				<input type="hidden" name="freo[token]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<dl>
					<dt>登録された記事の扱い</dt>
						<dd>
							<ul>
								<li><input type="radio" name="article" id="label_article_delete" value="delete" checked="checked" /> <label for="label_article_delete">ユーザーが登録した記事も一括削除</label></li>
								<li>
									<input type="radio" name="article" id="label_article_alter" value="alter" />
									<label for="label_article_alter">
										ユーザーが登録した記事の所有者を
										<select name="user">
											<!--<?php $_from = $this->_tpl_vars['freo']['refer']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refer_user']):
?>-->
											<!--<?php if (((is_array($_tmp=$this->_tpl_vars['refer_user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['freo']['query']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>-->
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['refer_user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['refer_user']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
											<!--<?php endif; ?>-->
											<!--<?php endforeach; endif; unset($_from); ?>-->
										</select>
										に変更
									</label>
								</li>
							</ul>
						</dd>
				</dl>
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