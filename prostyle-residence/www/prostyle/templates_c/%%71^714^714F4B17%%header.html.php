<?php /* Smarty version 2.6.27, created on 2017-04-03 14:49:31
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.html', 11, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title><?php if (((is_array($_tmp=$this->_tpl_vars['plugin_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?> | <?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 | <?php elseif (((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 | <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['config']['basis']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</title>
<!--<?php if (((is_array($_tmp=$_REQUEST['freo']['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'entry' && ((is_array($_tmp=$_REQUEST['freo']['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) != 'view'): ?>-->
<meta name="description" content="<?php if (((is_array($_tmp=$this->_tpl_vars['plugin_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['query']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?> | <?php elseif (((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 | <?php elseif (((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 | <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['config']['basis']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta name="keywords" content="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'keywords.txt', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>">
<!--<?php endif; ?>-->
<link rel="canonical" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<link rel="alternate" media="handheld" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/favicon.ico" >

<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
common.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
default.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
colorbox.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.subwindow.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_CSS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.bxslider.css">
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.subwindow.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
common.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
default.js"></script>

<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
smartsticky.js"></script>
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
jquery.bxslider.min.js"></script>
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
slide.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script><!--住所自動入力用JSファイル-->


<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@FREO_JS_DIR)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
ga.js"></script>

</head>

<body>

<a id="top"></a>
<div id="container">



<div id="header">

<h1><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/logo.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['config']['basis']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></h1>


<div class="header_right">
<p class="head_tel">
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
files/medias/common/tel_blown.png" alt="tel:0800-111-1678" />
受付時間／10:00〜19:00　定休日／水曜日※祝日を除く<br />
携帯電話・PHSからもご利用いただけます。
</p>
<ul class="menu">
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/page/about">プロスタイルとは</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['freo']['core']['http_file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/page/company">企業情報</a></li>
<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab" target="_blank">お問い合わせ</a></li>
</ul>
</div>

<br style="clear: both;" />
</div>



