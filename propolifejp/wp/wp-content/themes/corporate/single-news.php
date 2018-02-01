<?php
/*
Template Name:お知らせ用single
 */
get_header('2'); ?>
<section id="mainVisual">
<h2 class="headLine01">企業からのお知らせ</h2>
</section>
<div id="pagePath">
<div class="inner">
<span><a href="/">ホーム</a></span> > <span><a href="/news/">ニュース</a> > <span><a href="/news/information/">企業からのお知らせ</a></span> > <?php the_title(); ?>
</div>
</div>
	<div id="main">
<section id="pressrelease">
<h3 class="headLine02">&ldquo;<?php the_title(); ?>&rdquo;</h3>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<dl class="clearfix" style="margin-bottom: 70px">
			<dt style="margin: 15px 0"><?php the_time('Y/m/d'); ?></dt>
			<dd>
				
				<div class="pBox"><?php the_content(); ?></div>
		    </dd>
	    </dl>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<div class="btmLink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/information/"><span>一覧にもどる</span></a></div>
	  </section>
		</div>
	<!-- /#main -->
<?php get_footer(); ?>