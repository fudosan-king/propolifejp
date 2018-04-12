<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <title>東京で自分らしく暮らしたい女性のための不動産情報サイト</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://www.i-mily.co.jp/static/common/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://www.i-mily.co.jp/static/common/css/jquery.jscrollpane.css">
	<link href="https://www.i-mily.co.jp/static/common/css/common.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://www.i-mily.co.jp/static/common/css/dropdownmenu.css">
  <link rel="stylesheet" type="text/css" href="https://www.i-mily.co.jp/static/common/css/blog.css">
  <link rel="stylesheet" type="text/css" href="https://www.i-mily.co.jp/static/common/css/sp.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
	<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script type="text/javascript" src="https://www.i-mily.co.jp/static/common/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="https://www.i-mily.co.jp/static/common/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="https://www.i-mily.co.jp/static/common/js/jquery.common.js"></script>
	<script type="text/javascript" src="https://www.i-mily.co.jp/static/common/js/scrollback.js"></script>
  <script type="text/javascript">
  $(function () {
      $('#menubtn').click(function (e) {
          e.preventDefault();

          var cls = $(".dropdown-menu").attr("class");

          if(cls.match(/open/)){
            $(".dropdown-menu").removeClass("open");
          }
          else{
            $(".dropdown-menu").addClass("open");
          }
      });
  });
  </script>
</head>

<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1426028427630277";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header id="header">
        <h1>東京で自分らしく暮らしたい女性のための不動産情報サイト</h1>
        <div class="logo"><a href="https://www.i-mily.co.jp/"><img src="https://www.i-mily.co.jp/static/images/logo.png" height="51" width="139" alt="imily"></a></div>
        <a href="https://www.i-mily.co.jp/contact"><img src="https://www.i-mily.co.jp/static/images/header-contact.png" height="48" width="256" alt="電話番号" class="contact"></a>
        <a href="#toggle" class="menubtn sp" id="menubtn"><img src="https://www.i-mily.co.jp/static/img/common/sp/menu_open.png"></a>
        <ul class="dropdown-menu sp">
          <li><a href="https://www.i-mily.co.jp/"><img src="https://www.i-mily.co.jp/static/images/navi-home.png" alt=""/></a></li>
          <li><a href="https://www.i-mily.co.jp/mission/index.html"><img src="https://www.i-mily.co.jp/static/images/navi-about.png" alt=""/></a></li>
          <li><a href="https://www.i-mily.co.jp/search"><img src="https://www.i-mily.co.jp/static/images/navi-find.png" alt=""/></a></li>
          <li><a href="https://www.i-mily.co.jp/login"><img src="https://www.i-mily.co.jp/static/images/navi-kodawari.png" alt=""/></a></li>
          <li><a href="https://www.i-mily.co.jp/company/index.html"><img src="https://www.i-mily.co.jp/static/images/navi-company.png" alt=""/></a></li>
          <li><a href="https://www.i-mily.co.jp/contact"><img src="https://www.i-mily.co.jp/static/images/navi-contact.png" alt=""/></a></li>
        </ul>
        <nav id="globalnavi">
            <ul class="clearfix">
                <li><a href="https://www.i-mily.co.jp/"><img src="https://www.i-mily.co.jp/static/images/navi-home.png" height="27" width="150" alt="HOME"></a></li>
                <li><a href="https://www.i-mily.co.jp/mission/index.html"><img src="https://www.i-mily.co.jp/static/images/navi-about.png" height="27" width="150" alt="アイミリーのミッション"></a></li>
                <li><a href="https://www.i-mily.co.jp/search"><img src="https://www.i-mily.co.jp/static/images/navi-find.png" height="27" width="150" alt="物件を探す"></a></li>
                <li><a href="https://www.i-mily.co.jp/login"><img src="https://www.i-mily.co.jp/static/images/navi-kodawari.png" height="27" width="150" alt="アイミリーのこだわり"></a></li>
                <li><a href="https://www.i-mily.co.jp/company/index.html"><img src="https://www.i-mily.co.jp/static/images/navi-company.png" height="27" width="150" alt="会社紹介"></a></li>
                <li><a href="https://www.i-mily.co.jp/contact"><img src="https://www.i-mily.co.jp/static/images/navi-contact.png" height="27" width="150" alt="お問い合わせ"></a></li>
            </ul>
        </nav><!-- #globalnavi -->
    </header><!-- #header -->


    <div id="wrap">
        <div id="contents">
