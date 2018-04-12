<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gakugeidai
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if ( is_front_page() || is_home() ) : ?>
	<title>【公式】プロスタイル学芸大学｜プロスタイルの新築マンション　都立大学駅</title>
	<meta name="description" content="プロスタイル学芸大学の公式サイトです。東急東横線「学芸大学」駅「都立大学」駅徒歩11分。都心に横浜にダイレクトアクセス。東京都目黒区に誕生するプロスタイルの新築マンション。（ぷろすたいるがくげいだいがく）">
	<meta name="keywords" content="プロスタイル学芸大学,東横線,学芸大学駅,都立大学駅,目黒区,新築マンション,分譲マンション,プロスタイル">
	<?php elseif ( is_page( 'outline' ) ) : ?>
	<title>物件概要 | 【公式】プロスタイル学芸大学｜東急東横線「学芸大学」駅徒歩11分｜東京都目黒区の新築マンション</title>
	<meta name="description" content="「プロスタイル学芸大学」の物件概要です">
	<meta name="keywords" content="物件概要,プロスタイル学芸大学,東横線,学芸大学駅,目黒区,新築マンション,分譲マンション,プロスタイル">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/favicon.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_404() ) : ?>
	<meta http-equiv="refresh" content="3; URL=<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gakugeidai' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="inner">
			<div class="row">
				<?php if ( is_front_page() || is_home() ) : ?>
				<h1>【公式】プロスタイル学芸大学｜東急東横線「学芸大学」駅徒歩11分｜東京都目黒区の新築マンション</h1>
				<?php elseif ( is_page( 'outline' ) ) : ?>
				<h1>物件概要 | 【公式】プロスタイル学芸大学｜プロスタイルの新築マンション</h1>
				<?php else : ?>
				<h1>【公式】プロスタイル学芸大学｜東急東横線「学芸大学」駅徒歩11分｜東京都目黒区の新築マンション</h1>
				<?php endif; ?>
				<div class="left-header">
					<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/site-logo.png" alt="プロスタイル学芸大学"></a></div>
				</div>
				<?php if ( false ) : ?>
				<button class="button-toggle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-toggle.png" alt="MENU"></button>
				<div class="sp-tel"><a href="tel:0120-033-020"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ico-tel.png"></a></div>
				<?php endif; ?>
				<div class="right-header">
					<div class="header-contact"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/img-header-contact.png" alt=""></div>
					<div class="sp-tel"><a href="tel:0120-033-020"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ico-tel.png"></a></div>
					<div class="btn">
						<ul class="text-link link">
							<li>▶<a href="javascript:newWindown_map()">現地案内図</a></li>
							<li>▶<a href="<?php echo esc_url( home_url( '/outline/' ) ); ?>">物件概要</a></li>
						</ul>
						<ul class="button-link link">
							<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqaq-1410600a8fca125fd7401c5af01f2b7e" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-request.jpg" alt="資料請求" class="fadeImg"></a></li>
							<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-reserve.jpg" alt="来場予約" class="fadeImg"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php if ( ! is_front_page() && ! is_home() ) : ?>
			<div class="upper-text-wrap">
				<div class="upper-text">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/txt-header.png" alt="東急東横線「学芸大学」駅・「都立大学」駅徒歩11分　2LDK（65m2超）LDK 17帖 6,500万円台～">
					<span class="sp-text">東急東横線<em>「学芸大学」</em>駅・<em>「都立大学」</em>駅徒歩<em>11</em>分 <em>2LDK</em>（65m<sup>2</sup>）LDK 17帖<em>6,500</em>万円台～</span>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php if ( is_front_page() || is_home() ) : ?>
		<div class="main-visual-wrap">
			<h2><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/ttl-main-visual01.png" alt="おかげさまで残り3邸となりました"></h2>
			<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/ttl-main-visual02.png" alt="東急東横線 学芸大学駅 都立大学駅 徒歩11分 × イオンスタイル碑文谷 徒歩1分（約10m） × 天然無垢材フローリング採用"></h3>
			<?php if ( false ) : ?>
			<div class="bn-mv-modelroom"><a href="<?php echo esc_url( home_url( '/re_service/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/bn-main-visual-present02.jpg" alt="締め切り間近!! ご成約特典 決算キャンペーン 住宅購入資金 100万円プレゼント！3/11（日）まで"></a></div>
			<div class="bn-mv-campaign2"><a href="<?php echo esc_url( home_url( '/re_service/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/bn-main-visual02.png" alt="期間限定 Wキャンペーン 新生活応援ご来場キャンペーン 特典1 初めてのご来場で「イオン商品券」1,000円分プレゼント！ 特典2 2回目のご来場で「イオン商品券」2,000円分プレゼント！ 2LDK(65m2超)〜3LDK(70m2超) 6,500万円台"></a></div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<nav id="site-navigation" class="navigation" role="navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu'
				)
			);
		?>
		</nav>
	</header>

	<div id="content" class="site-content">
