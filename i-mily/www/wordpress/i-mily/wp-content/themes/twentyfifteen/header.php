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
                <li><img src="https://www.i-mily.co.jp/static/images/navi-about.png" height="27" width="150" alt="アイミリーのミッション">
                    <ul>
                        <li><a href="https://www.i-mily.co.jp/mission">ミッション</a></li>
                        <li><a href="https://www.i-mily.co.jp/staff">スタッフ紹介</a></li>
                        <li><a href="https://www.i-mily.co.jp/message">代表者メッセージ </a></li>
                        <li><a href="https://www.i-mily.co.jp/company">会社概要</a></li>
                        <li class="last"><img src="https://www.i-mily.co.jp/static/images/subnavi-foot.png" height="14" width="160" alt=""></li>
                    </ul>
                </li>
                <li><img src="https://www.i-mily.co.jp/static/images/navi-company.png" height="27" width="150" alt="会社紹介">
                    <ul class="company">
                        <li><a href="https://www.i-mily.co.jp/josei">女性の皆様へ </a></li>
                        <li><a href="https://www.i-mily.co.jp/josei/index.html#reason">女性に選ばれる理由</a></li>
                        <li><a href="https://www.i-mily.co.jp/josei/index.html#koma4">こんな会社♪</a></li>
                        <li><a href="https://www.i-mily.co.jp/present">ご機嫌家探しBOOK</a></li>
                        <li><a href="https://www.i-mily.co.jp/voice">お客様の声</a></li>
                        <li class="last"><img src="https://www.i-mily.co.jp/static/images/subnavi-foot-company.png" height="14" width="160" alt=""></li>
                    </ul>
                </li>
                <li><a href="https://www.i-mily.co.jp/search"><img src="https://www.i-mily.co.jp/static/images/navi-find.png" height="27" width="150" alt="物件を探す"></a></li>
                <li><a href="https://www.i-mily.co.jp/staff/index.html"><img src="https://www.i-mily.co.jp/static/images/navi-kodawari.png" height="27" width="150" alt="アイミリーのこだわり"></a></li>
                <li><a href="https://www.i-mily.co.jp/contact"><img src="https://www.i-mily.co.jp/static/images/navi-contact.png" height="27" width="150" alt="お問い合わせ"></a></li>
            </ul>
        </nav><!-- #globalnavi -->
    </header><!-- #header -->

    <div id="mainvisual">
        <div class="inner">
            <img class="mainvisual-img sp" src="https://www.i-mily.co.jp/static/images/mainvisual.jpg" alt="キャッチコピー">
            <img class="mainvisual-text" src="https://www.i-mily.co.jp/static/images/mainvisual-text.png" alt="キャッチコピー">
        </div>
        <!-- .inner -->

        <!-- add box overlay -->
        <div class="box_overlay clearfix add_fixed">
            <div class="inner overlay_pc">
                <a href="https://www.i-mily.co.jp/contact?inquiry_opt=まずは相談してみたい"><img src="https://www.i-mily.co.jp/static/images/btn_soudan.png" alt=""></a>
                <a href="https://www.i-mily.co.jp/contact?inquiry_opt=一緒に物件を探してほしい"><img src="https://www.i-mily.co.jp/static/images/btn_bukken-shokai.png" alt=""></a>
                <div class="call_us">
                    <div class="content_l"><img src="https://www.i-mily.co.jp/static/images/tel-icon.png" alt="" width="45"></div>
                    <div class="content_r">
                        <span>お電話はこちらまで</span> <br>
                        <a href="tel:03-5459-2322">03-5459-2322</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="inner overlay_mobile">
                <a class="btn_pink" href="https://www.i-mily.co.jp/contact">まずは相談 <br> してみる</a>
            <a class="btn_pink" href="https://www.i-mily.co.jp/contact">物件紹介 <br> して欲しい</a>
                <a class="btn_blue" href="tel:03-5459-2322">電話する</a>
            </div>
        </div>

    </div>

    <div id="wrap">
        <div id="contents">
