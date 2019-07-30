<?php
global $dir_name, $temp_dir, $dir_category, $current_page_url;
$current_page_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$temp_dir = get_stylesheet_directory_uri();

$has_script_page = array('home', 'benefit', 'office', 'news', 'support', 'recruit', 'point', 'job');
if (isset($post->ID) && $post->ID == 663 && $post->post_name=='sales-2'){
    ?>
    <script> window.location="https://www.propolife.co.jp/recruit/career/"; </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <title><?php get_site_title(); ?></title>
        <meta name="keywords" content="PROPOZOO,プロポライフグループ,株式会社プロポライフグループ,PROPOLIFE,採用,リクルート,企業情報,採用情報,社員,インタビュー,新卒採用,中途採用" />
        <meta name="description" content="PROPOZOO プロポライフグループ採用GUIDEMAP。それは個性豊かなプロポライフグループの社員達が活躍する島、”PROPOZOO”。島内を巡り、普段どのように仕事をしているのか、どんな会社なのかを、ご体験ください。" />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/common/favicon.png" type="image/x-icon" />
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/common/favicon.png" type="image/x-icon" />
        <meta property="fb:app_id" content="" />
        <meta property="og:locale" content="ja_JP" />
        <meta property="og:site_name" content="PROPOZOO 株式会社プロポライフグループ　採用GUIDE MAP" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.propolife.co.jp/recruit/" />
        <meta property="og:title" content="PROPOZOO 株式会社プロポライフグループ　採用GUIDE MAP" />
        <meta property="og:description" content="PROPOZOO プロポライフグループ採用GUIDEMAP。それは個性豊かなプロポライフグループの社員達が活躍する島、”PROPOZOO”。島内を巡り、普段どのように仕事をしているのか、どんな会社なのかを、ご体験ください。" />
        <meta property="og:image" content="https://www.propolife.co.jp/recruit/wordpress/wp-content/themes/propolife_recruit/common/ogimage.jpg" />
        <?php 
        if(is_page( 'contact' )):
            ?>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

                <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/contact/styles.css" type="text/css">
                <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/contact/mobile.css" type="text/css">

                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
            <?php
        endif;
        ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/common.css" />
        <?php if($dir_name != 'home'): ?><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/common_sub.css" /><?php endif; echo "\n"; ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/<?php echo $dir_name; ?>.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/common_parts.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/sp/<?php echo $dir_name; ?>.css" />
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.transit.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.smarttouch.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/common.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/common_parts.js"></script>
        <?php foreach($has_script_page as $p): if($p == $dir_name): ?>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/<?php echo $dir_name; ?>.js"></script>
        <?php endif; endforeach; ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-58LD4XD');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body id="<?php echo $dir_name; ?>">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58LD4XD"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="menuBg"></div>
                
        <header id="header" class="contact">
        <div class="hInner clearfix">
            <h1><a href="https://propolife.co.jp/"><img src="<?php bloginfo('template_directory'); ?>/common/img/logo02.png" width="206" height="40" alt="株式会社プロポライフグループ 「住」に自由とロマンを。"></a></h1>
            <nav id="gNavi" class="gNavi">
                <div class="link"><a style="display: none;" href="https://page.line.me/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_03.png" width="20" height="20" alt="LINE"></a></div>
                <div class="link"><a style="display: none;" href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_02.png" width="16" height="16" alt="Instagram"></a></div>
                <div class="link"><a style="display: none;" href="https://ja-jp.facebook.com/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link.png" width="8" height="16" alt="Facebook"></a></div>
                <ul class="clearfix">
                    <li class="sub01"><a href="https://propolife.co.jp/company/">企業情報</a></li>
                    <li class="sub02"><a href="https://propolife.co.jp/group/">グループ企業</a></li>
                    <li class="sub03"><a href="https://propolife.co.jp/news/">ニュース</a></li>
                    <li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
                    <li><a href="https://www.propolife.co.jp/contact/" target="_blank">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header" style="display: none;">
            <div class="hInner clearfix">
                <h1><a href="https://propolife.co.jp/"><img src="<?php bloginfo('template_directory'); ?>/common/img/logo02.png" width="206" height="40" alt="株式会社プロポライフグループ 「住」に自由とロマンを。"></a></h1>
                <nav class="gNavi">
                    <div class="link"><a style="display: none;" href="https://page.line.me/propolifegroup
" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_03_on.png" width="20" height="20" alt="LINE"></a></div>
                    <div class="link"><a style="display: none;" href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_0202_on.png" width="16" height="16" alt="Instagram"></a></div>
                    <div class="link"><a style="display: none;" href="https://ja-jp.facebook.com/propolifegroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/h_link_on.png" width="8" height="16" alt="Facebook"></a></div>
                    <ul class="clearfix">
                        <li class="sub01"><a href="https://propolife.co.jp/company/">企業情報</a></li>
                        <li class="sub02"><a href="https://propolife.co.jp/group/">グループ企業</a></li>
                        <li class="sub03"><a href="https://propolife.co.jp/news/">ニュース</a></li>
                        <li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
                        <li><a href="https://www.propolife.co.jp/contact/" target="_blank">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="menu sp"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/common/img/menu.png" width="18" height="14" alt=""></a></div>
        </div>
        <div class="menu sp"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/common/img/menu.png" width="18" height="14" alt=""></a></div>
        <div class="hBox hBox03">
            <div class="subBox">
                <ul class="clearfix txtbanner">
                    <li><a href="https://propolife.co.jp/news/information/"><span>企業からのお知らせ</span></a></li>
                    <li><a href="https://propolife.co.jp/news/pressrelease/"><span>プレスリリース</span></a></li>
                    <li><a href="https://propolife.co.jp/news/media/"><span>メディア掲載情報</span></a></li>
                </ul>
            </div>
        </div>
        <div class="hBox hBox02">
            <div class="subBox">
                <ul class="clearfix">
                    <li>
                        <a href="https://www.chronicle-web.com/" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link01.jpg" width="356" height="101" alt="CHRONICLE リノベーションならクロニクル">
                        </a>
                        <span><a href="https://www.chronicle-web.com/" target="_blank">株式会社クロニクル</a></span>
                    </li>
                    <li>
                        <a href="http://www.chronicle-kensetsu.co.jp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/com_link02.jpg" width="356" height="101" alt="CHRONICLE"></a><span><a href="https://www.chronicle-web.com/reform/" target="_blank">株式会社クロニクル建設</a></span></li>
                    <li>
                        <a href="https://www.prostyle-residence.com/" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link03.jpg" width="356" height="101" alt="PROSTYLE">
                        </a>
                        <span><a href="https://www.prostyle-residence.com/" target="_blank">株式会社プロスタイル</a></span>
                    </li>
                    <li>
                        <a href="http://chinokanri.co.jp/" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link05.jpg" width="356" height="98" alt="CHINO 千野建物管理">
                        </a>
                        <span><a href="http://chinokanri.co.jp/" target="_blank">千野建物管理株式会社</a></span>
                    </li>
                    <li>

                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link06.jpg" width="356" height="98" alt="">

                        <span>煙台提案生活木業有限公司</span>
                    </li>
                    <li>
                        <a href="http://www.propolifevietnam.com/" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link07.jpg" width="356" height="94" alt="">
                        </a>
                        <span><a href="http://www.propolifevietnam.com/" target="_blank">PROPOLIFE VIETNAM</a></span>
                    </li>
                    <li>
                        <a href="http://nikuan-kotakino.com" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link10.jpg" width="356" height="98" alt="株式会社小滝野">
                        </a>
                        <span><a href="http://nikuan-kotakino.com" target="_blank">株式会社小滝野</a></span>
                    </li>
                    <li>
                        <a href="http://www.propolifehotels.com" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link11.jpg" width="356" height="98" alt="株式会社プロスタイル旅館">
                        </a>
                        <span><a href="http://www.propolifehotels.com" target="_blank">株式会社プロスタイル旅館</a></span>
                    </li>
                    <li>
                        <a href="https://www.oki-ig.com"><img src="<?php bloginfo('template_directory'); ?>/common/img/com_link12.jpg" width="356" height="98" alt="株式会社沖縄イゲトー"></a>
                        <span><a href="https://www.oki-ig.com">株式会社沖縄イゲトー</a></span>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/common/img/com_link_yokohama.jpg" width="356" height="98" alt="株式会社プロスタイル横浜">
                        <span>株式会社プロスタイル横浜</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hBox hBox01">
            <div class="subBox">
                <ul class="clearfix">
                    <li>
                        <a href="https://propolife.co.jp/company/president/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link01.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/president/">代表者挨拶</a></span>
                    </li>
                    <li>
                        <a href="https://propolife.co.jp/company/philosophy/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link02.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/philosophy/">企業理念</a></span>
                    </li>
                    <li>
                        <a href="https://propolife.co.jp/company/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link03.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/">会社概要</a></span>
                    </li>
                    <li>
                        <a href="https://propolife.co.jp/company/history/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link04.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/history/">沿革</a></span>
                    </li>
                    <li>
                        <a href="https://propolife.co.jp/company/officer/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link05.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/officer/">役員一覧</a></span>
                    </li>
                    <li>
                        <a href="https://propolife.co.jp/company/access/">
                            <img src="<?php bloginfo('template_directory'); ?>/common/img/h_link06.jpg" width="356" height="133" alt="">
                        </a>
                        <span><a href="https://propolife.co.jp/company/access/">アクセス</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </header>
        <div class="menuBox">
            <div class="close"><img src="<?php bloginfo('template_directory'); ?>/common/img/close.png" width="16" height="16" alt=""></div>
            <ul>
                <li>
                    <p><a href="https://www.propolife.co.jp/">ホーム</a></p>
                </li>
                <li>
                    <p><a href="javascript:void(0);">ニュース</a></p>
                    <ul>
                        <li><a href="https://www.propolife.co.jp/news/information/">企業からのお知らせ</a></li>
                        <li><a href="https://www.propolife.co.jp/news/pressrelease/">プレスリリース</a></li>
                        <li><a href="https://www.propolife.co.jp/news/media/">メディア掲載情報</a></li>
                        <li><a href="https://www.propolife.co.jp/ir/">電子公告</a></li>
                    </ul>
                </li>
                <li>
                    <p><a href="javascript:void(0);">企業情報</a></p>
                    <ul>
                        <li><a href="https://www.propolife.co.jp/company/president/">代表者挨拶</a></li>
                        <li><a href="https://www.propolife.co.jp/company/philosophy/">経営理念</a></li>
                        <li><a href="https://www.propolife.co.jp/company/">会社概要</a></li>
                        <li><a href="https://www.propolife.co.jp/company/history/">沿革</a></li>
                        <li><a href="https://www.propolife.co.jp/company/officer/">役員一覧</a></li>
                        <li><a href="https://www.propolife.co.jp/company/access/">アクセス</a></li>
                    </ul>
                </li>
				<li>
					<p><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></p>
				</li>
                <li>
                    <p><a href="javascript:void(0);">グループ企業</a></p>
                    <ul>
                        <li><a href="https://www.chronicle-web.com/">株式会社クロニクル</a></li>
                        <li><a href="https://www.chronicle-web.com/reform/">株式会社クロニクル建設</a></li>
                        <li><a href="https://www.prostyle-residence.com/">株式会社プロスタイル</a></li>
                        <li><span>株式会社プロスタイル横浜</span></li>
                        <li><a href="http://chinokanri.co.jp/">千野建物管理株式会社</a></li>
                        <li><span>煙台提案生活木業有限公司</span></li>
                        <li><a href="http://www.propolifevietnam.com/">PROPOLIFE VIETNAM</a></li>
                        <li><a href="http://nikuan-kotakino.com" target="_blank">株式会社小滝野</a></li>
			<li><a href="http://www.propolifehotels.com/" target="_blank">株式会社プロスタイル旅館</a></li>
                        <li><a href="https://www.oki-ig.com">株式会社沖縄イゲトー</a></li>
                    </ul>
                </li>
                <li>
                    <p><a href="https://www.propolife.co.jp/contact/" target="_blank">お問い合わせ</a></p>
                </li>
                <li>
                    <p><a href="https://www.propolife.co.jp/privacypolicy/">プライバシーポリシー</a></p>
                </li>
            </ul>
        </div>
        <!-- /#header -->
        
        <?php if(is_page('finish') || is_page('contact')): ?>
            <div id="wrap" class="wrap-force">
        <?php else: ?>
            <div id="wrap">
        <?php endif; ?>
        
