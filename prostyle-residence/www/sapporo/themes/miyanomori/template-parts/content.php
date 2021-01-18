
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<p class="date"><?= the_date('Y/m/d'); ?></p>
	<a href="<?= get_the_permalink(); ?>" ><h3 class="title"><?= the_title(); ?></h3></a>
	<div class="content">
		<?= the_content(); ?>
	</div>
<?php //the_excerpt(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
