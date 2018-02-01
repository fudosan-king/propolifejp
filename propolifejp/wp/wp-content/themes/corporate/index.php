<?php
/*
Template Name:index_temp
 */
get_header(); ?>
	<section id="mainVisual">
		<h2 class="headLine01">&nbsp;</h2>
	</section>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>&gt;</li>
			<li>&nbsp;</li>
		</ul>
	</div>
	<div id="main">
<div class="hidden">
		<div id="maximage">
			<!--<div class="item"></div>-->
			<div class="item item02"></div>
	    </div>
		<div class="topInner">
			<p><img src="<?php bloginfo('template_directory'); ?>/common/img/index/imgtext.png" width="486" height="42" alt="「住」に自由とロマンを。"></p>
			<div class="link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/president/"><span>メッセージ</span></a></div>
	    </div>
		<section id="new">
			<div class="bg"></div>
			<div class="whiteBox">
				<h2 class="headLine03">News</h2>
				<div class="newsBox">
					<dl class="clearfix">
	<?php
	$paged = get_query_var('paged');
	query_posts("cat=2,3,5&showposts=10"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<dt><?php the_time('Y/m/d'); ?></dt>

<dd>
<?php if( in_category('2') ): ?>
<span class="news_ico">企業からのお知らせ</span>
<?php endif; ?>
<?php if( in_category('3') ): ?>
<span class="news_ico">プレスリリース</span>
<?php endif; ?>
<?php if( in_category('5') ): ?>
<span class="news_ico">メディア掲載情報</span>
<?php endif; ?>

<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</dd>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

					</dl>
			    </div>
		    </div>
	    </section>
	  </div>
		<section id="propolife">
			<h2 class="headLine03">グループ企業</h2>
		</section>
		<div class="business">
			<div class="linkBox">
			<h4 class="h4Ttl"><span><img src="<?php bloginfo('template_directory'); ?>/common/img/group/h4_img.jpg" alt="PROPOLIFE GROUP 「住」に自由とロマンを。"></span></h4>

			<div class="subBox">
				<ul class="clearfix">
					<li>
						<a href="https://www.chronicle-web.com/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link01.jpg" width="356" height="101" alt="CHRONICLE リノベーションならクロニクル">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link01.jpg" width="100%" alt="CHRONICLE リノベーションならクロニクル">
						</a>
						<span><a href="https://www.chronicle-web.com/" target="_blank">株式会社クロニクル</a></span>
				    </li>

					<li>
						<a href="http://www.chronicle-kensetsu.co.jp/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link02.jpg" width="356" height="101" alt="CHRONICLE">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link02.jpg" width="100%" alt="CHRONICLE">
						</a>
						<span><a href="https://www.chronicle-web.com/reform/" target="_blank">株式会社クロニクル建設</a></span>
				    </li>
						
					<li>
						<a href="https://www.prostyle-residence.com/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link03.jpg" width="356" height="101" alt="PROSTYLE">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link03.jpg" width="100%" alt="PROSTYLE">
						</a>
						<span><a href="https://www.prostyle-residence.com/" target="_blank">株式会社プロスタイル</a></span>
				    </li>
					<li>
						<a href="https://www.prostyle-villa.com/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link04.jpg" width="356" height="101" alt="PROSTYLE VILLA">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link04.jpg" width="100%" alt="PROSTYLE VILLA">
						</a>
						<span><a href="https://www.prostyle-villa.com/" target="_blank">株式会社プロスタイルヴィラ</a></span>
				    </li>
						
					<li>
						<a href="http://chinokanri.co.jp/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link05.jpg" width="356" height="101" alt="CHINO 千野建物管理">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link05.jpg" width="100%" alt="CHINO 千野建物管理">
						</a>
						<span><a href="http://chinokanri.co.jp/" target="_blank">千野建物管理株式会社</a></span>
				    </li>
						
					<li>
						
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link06.jpg" width="356" height="101" alt="">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link06.jpg" width="100%" alt="">
						
						<span>煙台提案生活木業有限公司</span>
				    </li>
					<li>
						<a href="http://www.propolifevietnam.com/" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link07.jpg" width="356" height="101" alt="">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link07.jpg" width="100%" alt="">
						</a>
						<span><a href="http://www.propolifevietnam.com/" target="_blank">PROPOLIFE VIETNAM</a></span>
				    </li>					
					<li>
						
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/group/link09.jpg" width="356" height="101" alt="PROPOLIFE SHINGAPORE">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/group/sp_link09.jpg" width="100%" alt="PROPOLIFE SHINGAPORE">
						
						<span>PROPOLIFE SINGAPORE</span>
				    </li>
				    
					<li>
						<a href="http://kotakino.wpblog.jp" target="_blank">
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/com_link10.jpg" width="356" height="98" alt="株式会社小滝野">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/sp_com_link10.jpg" width="100%" alt="株式会社小滝野">
						</a>
						<span><a href="http://kotakino.wpblog.jp" target="_blank">株式会社小滝野</a></span>
					</li>
				    <li>
						
							<img class="pc" src="<?php bloginfo('template_directory'); ?>/common/img/com_link11.jpeg" width="356" height="101" alt="PROPOLIFE HOTELS">
							<img class="sp" src="<?php bloginfo('template_directory'); ?>/common/img/sp_com_link11.jpeg" width="100%" alt="PROPOLIFE HOTELS">
						
						<span>株式会社プロポライフホテルズ</span>
				    </li>



			    </ul>
		    </div>
			</div>
			<div class="btmLink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>group/"><span>プロポライフグループについて</span></a></div>
		</div>
		</div>
	<!-- /#main -->

<?php get_footer(); ?>
