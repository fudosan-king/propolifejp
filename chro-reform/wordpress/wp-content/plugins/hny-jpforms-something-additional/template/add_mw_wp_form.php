<?php global $post; ?>
<style type="text/css">
.preview_button_image{position:relative;margin: 0 10px;}
.preview_button_delete_button{font: 400 12px/1 dashicons;vertical-align:middel;position:absolute;top:0;right:0px;border:1px solid #59524C;background:#F1F1F1;color:#59524C;font-weight:bold;padding:3px;border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;cursor:pointer;}


.preview_button_image img{max-width: 100px;max-height: 100px;border: 1px solid #cccccc;}
</style>
<p><strong>郵便番号</strong><br />
<input type="text" name="hny_jsa_zip" value="<?php echo $post->hny_jsa_zip; ?>" /></p>
<p><strong>住所</strong><br />
<input type="text" name="hny_jsa_address" value="<?php echo $post->hny_jsa_address; ?>" /></p>
<p><span class="mwf_note">各項目のキーを入力してください。{ }は不要です。</span></p>
<br />
<p><strong>確認スクロール</strong><br />
<input type="checkbox" name="hny_jsa_confirm_scroll" value="1"<?php if($post->hny_jsa_confirm_scroll)echo ' checked'; ?> /></p>
<br />
<p><strong>お問い合せ番号キー</strong><br />
<input type="text" name="hny_jsa_additional_number_key" value="<?php echo $post->hny_jsa_additional_number_key; ?>" /><br />
<strong>お問い合せ番号</strong><br />
<input type="text" name="hny_jsa_additional_number_value" value="<?php echo ($post->hny_jsa_additional_number_value)?$post->hny_jsa_additional_number_value:0; ?>" /></p>
</p>

<?php
$methods = array('confirm' => '確認', 'send' => '送信', 'back' => '戻る');
foreach ($methods as $k => $v):
	$_name = 'hny_jsa_'.$k.'_button';
	$_on_name = 'hny_jsa_'.$k.'_on_button';
	if(! empty($post->$_name))
		$$_name = '<img src="'.$this->getImageUrlById($post->$_name,'full').'" />';
	if(! empty($post->$_on_name))
		$$_on_name = '<img src="'.$this->getImageUrlById($post->$_on_name,'full').'" />';

?>
<div class="clear clearfix">
<p><strong><?php echo $v ?>ボタン画像</strong></p>
<div class="clearfix" style="float:left;">
  <input id="<?php echo $_name; ?>" type="hidden" name="<?php echo $_name; ?>" value="<?php echo $post->$_name; ?>" />
  <button id="set_<?php echo $k; ?>_button" <?php if($post->$_name ): ?>style="display:none;"<?php endif; ?>><?php echo $v; ?>ボタンを選択</button>
  <div id="<?php echo $k; ?>_button_image" class="preview_button_image"><?php echo $$_name; ?></div>
</div>
<div class="clearfix" style="float:left;">
  <input id="<?php echo $_on_name; ?>" type="hidden" name="<?php echo $_on_name; ?>" value="<?php echo $post->$_on_name; ?>" />
  <button id="set_<?php echo $k; ?>_on_button" <?php if($post->$_on_name): ?>style="display:none;"<?php endif; ?>>onボタンを選択</button>
  <div id="<?php echo $k; ?>_on_button_image" class="preview_button_image"><?php echo $$_on_name; ?></div>
</div>
</div>
<?php endforeach; ?>
