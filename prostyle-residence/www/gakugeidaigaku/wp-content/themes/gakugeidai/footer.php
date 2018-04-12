<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gakugeidai
 */

$info_args = array(
	'post_type' 	=> 'info',
	'post_status' => 'publish',
);

$i = new WP_Query( $info_args );
?>

	<footer class="site-footer" role="contentinfo">
		<div class="smp-naviagtion-wrap">
			<nav id="smp-navigation" class="navigation" role="navigation">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id' => 'primary-menu'
						)
					);
				?>
			</nav>
			<ul>
				<li class="btn-reserve"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-footer-reserve.png" alt="来場予約" class="fadeImg"></a></li>
				<li class="btn-request"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqaq-1410600a8fca125fd7401c5af01f2b7e" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-footer-request.png" alt="資料請求" class="fadeImg"></a></li>
				<li class="btn-tel"><a href="tel:0120-033-020"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-footer-tel.png"></a></li>
				<li class="btn-map"><a href="javascript:newWindown_map()"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-footer-map.png" alt="現地案内図"></a></li>
				<li class="btn-menu"><button class="button-toggle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-footer-menu.png" alt="MENU"></button></li>
			</ul>
		</div>

		<div class="inner">
			<nav class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
			</nav>
			<div class="footer-contact">
			<?php if ( is_front_page() ) : ?>
				<!-- <div class="footer-information">
					<h4><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ttl-information.jpg" alt="Information"></h4>
					<div class="inner">
						<ul>
							<?php if ( $i->have_posts() ) : while ( $i->have_posts() ) : $i->the_post(); ?>
							<li><?php the_title(); ?></li>
							<?php endwhile; wp_reset_postdata(); else : ?>
							<li>お知らせはありません。</li>
							<?php endif; ?>
						</ul>
					</div>
				</div> -->
				<div class="contact tel">
					<div class="left">
						<p>お問い合わせは「プロスタイル学芸大学現地販売センター」まで</p>
						<?php if ( wp_is_mobile() ) : ?>
							<a href="tel:0120-033-020" class="TBLINKS" onclick="ga('send','event','click','tel-tap');"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/img-footer-contact02.png" alt="0120-033-020 受付時間/平日 午前10時〜午後7時 土・日祝 午前10時〜午後6時<定休日/水・木曜日※祝日を除く携帯電話・PHSからもご利用いただけます。"></a>
						<?php else : ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/img-footer-contact02.png" alt="0120-033-020 受付時間/平日 午前10時〜午後7時 土・日祝 午前10時〜午後6時<定休日/水・木曜日※祝日を除く携帯電話・PHSからもご利用いただけます。">
						<?php endif; ?>
					</div>
					<div class="right">
						<p>受付時間/平日 午前10時〜午後7時<br>
						土・日祝 午前10時〜午後6時<br>
						定休日/水曜日※祝日を除く<br>
						携帯電話・PHSからもご利用いただけます。</p>
					</div>
				</div>

				<ul class="button-link link">
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqaq-1410600a8fca125fd7401c5af01f2b7e" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-request02.jpg" alt="資料請求" class="fadeImg"></a></li>
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-reserve02.jpg" alt="来場予約" class="fadeImg"></a></li>
				</ul>
			</div>
			<?php else : ?>

			<div class="bn bn-footer">
				<a href="https://www.prostyle-residence.com/nihonbashibakurocho/" target="_blank">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/bn-bakurotyou.jpg" alt="プロスタイル日本橋馬喰町 公式ホームページはこちら">
				</a>

				<a href="<?php echo esc_url( home_url( '/real/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/bn-real.jpg" alt="完成物件購入の魅力 実物が見学できる安心の販売形式です"></a>
			</div>
			<div class="contact tel">
				<?php if ( wp_is_mobile() ) : ?>
					<a href="tel:0120-033-020" class="TBLINKS" onclick="ga('send','event','click','tel-tap');"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/img-footer-contact02.png" alt="0120-033-020 受付時間/平日 午前10時〜午後7時 土・日祝 午前10時〜午後6時<定休日/水・木曜日※祝日を除く携帯電話・PHSからもご利用いただけます。"></a>
				<?php else : ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/img-footer-contact02.png" alt="0120-033-020 受付時間/平日 午前10時〜午後7時 土・日祝 午前10時〜午後6時<定休日/水・木曜日※祝日を除く携帯電話・PHSからもご利用いただけます。">
				<?php endif; ?>
				</div>
				<ul class="button-link link">
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqaq-1410600a8fca125fd7401c5af01f2b7e" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-request02.jpg" alt="資料請求" class="fadeImg"></a></li>
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/btn-reserve02.jpg" alt="来場予約" class="fadeImg"></a></li>
				</ul>
			<?php endif; ?>
		</div>
		<?php if ( is_front_page() || is_home() ) : ?>

		<?php endif; ?>
		<!-- <div class="notice">年始は1月5日から営業いたします。12月25日から1月4日は休業となります。</div> -->
		<div class="corporate">
			<div class="logo">
				<p class="logo-propolife"><a href="https://www.prostyle-residence.com/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ft-propolife-logo.png" alt="<売主>株式会社プロスタイル"></a></p>
				<!-- <p class="logo-tatemono"><a href="http://www.tatemono.com/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ft-toutate-logo.png" alt="<販売提携（代理）>東京建物株式会社"></a></p> -->
			</div>
		</div>
		<p class="copyright">Copyright c PROSTYLE.INC. All rights reserved.</p>
		<ul class="gototop">
			<li><a href="#top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/pagetop.png" alt="PAGE TOP"></a></li>
		</ul>
	</footer>
	<?php if ( is_front_page() || is_home() ) : ?>
		<div class="modal">
			<div class="inner">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/img-campaign2.png" alt="新生活 応援キャンペーン">
				<div class="btn"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/btn-reserve-r.png" alt="来場予約はこちら"></a></div>
				<div class="btn-close"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/btn-close.png" alt="閉じる"></a></div>
			</div>
		</div>

		<div class="popup-campaign-banner">
            <a href="<?php echo esc_url( home_url( '/re_service/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/popup-banner.png" alt="株式会社プロスタイル 決算キャンペーン 締め切り間近!! プロスタイルマンションシリーズ 期間限定 2018.1.29（月）〜3.11（日） 期間中のご契約で住宅購入資金100万円分プレゼント!!"></a>
            <!-- <p>3月21日（水）は現地モデルルームを開いております。お気軽にお立ち寄りください。</p> -->
            <div class="btn-close"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/btn-close2.png" alt="CLOSE"></a></div>

        </div>
        <div class="layer"></div>
	<?php endif; ?>
</div>
<?php wp_footer(); ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-89362437-1', 'auto');
	ga('send', 'pageview');
</script>

<!--20170113-->
<!-- Google Code for propolife_GoogleRM -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 863091684;
var google_conversion_label = "9fn4CLOJrm0Q5PfGmwM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/863091684/?value=1.00&amp;currency_code=JPY&amp;label=9fn4CLOJrm0Q5PfGmwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Yahoo Code for your Target List -->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = '7U3S9QNFP4';
var yahoo_retargeting_label = '';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!--/20170113-->
</body>
</html>
