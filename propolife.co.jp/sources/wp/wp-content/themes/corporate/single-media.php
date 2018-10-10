<?php
/*
Template Name:メディア掲載情報用single
 */
get_header('2'); ?>
<section id="mainVisual">
<h2 class="headLine01">メディア掲載情報</h2>
</section>
<div id="pagePath">
<div class="inner">
<span><a href="/">ホーム</a></span> > <span><a href="/news/">ニュース</a> > <span><a href="/news/media/">メディア掲載情報</a></span> > <?php the_title(); ?>
</div>
</div>
	<div id="main">
<section id="pressrelease">
<h3 class="headLine02">&ldquo;<?php the_title(); ?>&rdquo;</h3>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<dl class="clearfix" style="margin-bottom: 70px">
			<dt><?php the_time('Y/m/d'); ?></dt>
			<dd>
				<p class="title"><?php the_title(); ?></p>
				<div class="pBox">
			<?php if(has_post_thumbnail()): ?>
			<div class="media_img">
			<?php
			    if ( has_post_thumbnail() ) {
			        the_post_thumbnail(array( 164,174 ));
			    } 
			?>
			</div>
			<?php endif; ?>
			<?php the_content(); ?></div>
			</dd>
	    </dl>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<div class="btmLink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/media/"><span>一覧にもどる</span></a></div>
	  </section>
		</div>
	<!-- /#main -->
<?php get_footer(); ?>