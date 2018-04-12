<style type="text/css">
	table#hny_cf7in{border-collapse: collapse;}
	table#hny_cf7in th,table#hny_cf7in td{padding:3px 8px;border:1px solid #cccccc;}
	table#hny_cf7in th{witch:100px;}
</style>
<div class="wrap">
<h2>JPForms 通し番号オプション</h2>
<p></p>
 
<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<table id="hny_cf7in">
	<tr><th>番号</th><td>
		<input type="radio" name="hny_cf7in_numkind" value="1" <?php if (get_option('hny_cf7in_numkind') == 1 || !get_option('hny_cf7in_numkind')) echo 'checked'; ?> />通し番号<span style="padding-left:20px;"></span><br />
		<input type="radio" name="hny_cf7in_numkind" value="2" <?php if (get_option('hny_cf7in_numkind') == 2) echo 'checked'; ?> />タイムスタンプ(ms)
	</td></tr>
	<tr class="odd"><th>桁数</th><td><input type="text" name="hny_cf7in_len" value="<?php echo get_option('hny_cf7in_len'); ?>" /><br />番号に通し番号を選択した時のみ有効</td></tr>
	<tr><th>接頭語</th><td><input type="text" name="hny_cf7in_prefix" value="<?php echo get_option('hny_cf7in_prefix'); ?>" /></td></tr>
</table>

<input type="hidden" name="hny_cf7in_num" value="<?php echo (get_option('hny_cf7in_num'))?intval(get_option('hny_cf7in_num')):0; ?>" />
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="hny_cf7in_len,hny_cf7in_numkind,hny_cf7in_prefix,hny_cf7in_num" />

 
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>

<p>メールの本文テンプレートの表示したい位置に <input type="text" value="[cf7increment_number]"> を入れてください</p>
</form>
</div>
