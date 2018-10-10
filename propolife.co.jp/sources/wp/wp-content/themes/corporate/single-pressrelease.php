<?php
/*
Template Name:プレスリリースsingle
 */
get_header('2'); ?>
<section id="mainVisual">
<h2 class="headLine01">プレスリリース</h2>
</section>
<div id="pagePath">
<div class="inner">
<span><a href="/">ホーム</a></span> > <span><a href="/news/">ニュース</a> > <span><a href="/news/pressrelease/">プレスリリース</a></span> > <?php the_title(); ?>
</div>
</div>
	<div id="main">
<section id="pressrelease">
<h3 class="headLine02">&ldquo;<?php the_title(); ?>&rdquo;</h3>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<dl class="clearfix" style="margin-bottom: 70px">
			<dt><span class="date"><?php the_time('Y/m/d'); ?></span><span class="news_ico">プレスリリース</span></dt>
			<dd>
			<a href="<?php echo wp_get_attachment_url(post_custom('pdf'),'originalImage'); ?>" target="_blank" class="pdf_ico">
			<?php the_title(''); ?>
			</a>
			</dd>
	    </dl>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<div class="btmLink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/pressrelease/"><span>一覧にもどる</span></a></div>
	  </section>
		</div>
	<!-- /#main -->
<?php get_footer(); ?>