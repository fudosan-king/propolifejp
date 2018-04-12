<?php /* Smarty version 2.6.27, created on 2017-03-24 19:22:06
         compiled from iphones/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iphones/footer.html', 6, false),)), $this); ?>


<div class="foot_tel">
<h3>お問い合わせ</h3>
<p>
<a href="tel:0800-111-1678"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/tel_blown.png" alt="tel:0800-111-1678" / ></a><br />
受付時間／10:00〜19:00　定休日／水曜日※祝日を除く<br />
携帯電話・PHSからもご利用いただけます。</p>
</div>



<div id="footer">
<h2><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/logo.jpg" class="bt_center" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['config']['basis']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></h2>

<ul class="menu_foot">
<li><a href="https://www.propolife.co.jp/" target="_blank">グループ会社</a></li>
<li><a href="https://www.propolife.co.jp/recruit/index.html" target="_blank">採用情報</a></li>
<li><a href="https://www.propolife.co.jp/policy/" target="_blank">プライバシーポリシー</a></li>
<li><a href="https://www.propolife.co.jp/terms/" target="_blank">利用規約</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/page/contact">お問い合わせ</a></li>
</ul>




<div class="bt_top">
<a href="#top">▲TOPへ</a>
</div>

<address>Copyright &copy; PROSTYLE INC. All rights reserved.</address>
</div>




</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tagmanager.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>