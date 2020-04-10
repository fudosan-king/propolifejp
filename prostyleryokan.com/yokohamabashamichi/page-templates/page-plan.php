<?php
/*Template Name: Plan - Page Template*/
?>

<?php get_header(); ?>

<div class="sub_page">

	<?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<a href="/yokohamabashamichi/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_gray.svg" alt="" class="img-fluid" width="150"></a>

	<!-- PLAN CONTENT -->

	<?php 
	if (have_rows('plan_content')):
		echo '<section class="section_planpage">
		<div class="container">';
		while (have_rows('plan_content')): the_row();
			?>
			<article>
				<div class="row no-gutters">
					<div class="col col-12 col-sm-5">
						<div class="box_black_left">
							<h2><?php echo get_sub_field('title'); ?></h2>
							<p><?php echo get_sub_field('content'); ?></p>
						</div>
					</div>
					<div class="col col-12 col-sm-7">
						<img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
					</div>
				</div>

				<?php
				if (have_rows('plan_options')):
					echo '<div class="box_black_footer">
					<div class="row">
					<div class="col col-12 col-md-8 offset-md-2">
					<div class="box_black_footer_content pb5">';
					while (have_rows('plan_options')): the_row();
						?>
						<div class="row mb-2">
							<div class="col col-12 col-sm-2">
								<p class="txt_uptodate"><?php echo get_sub_field('name'); ?></p>
							</div>
							<?php 
							if (have_rows('options')):
								while (have_rows('options')): the_row();
									if (!empty(get_sub_field('choice'))):
										echo '<div class="col col-12 col-sm-5">';
										echo '<a href="'.get_sub_field('choice')['url'].'" class="btn" target="'.get_sub_field('choice')['target'].'">'.get_sub_field('choice')['title'].'</a>';
										echo '</div>';
									endif;
									
								endwhile;
							endif;
							?>
						</div>
						<?php
					endwhile;
					echo '</div>
					</div>
					</div>
					</div>';
				endif;
				?>

			</article>
<?php
endwhile;
echo '</div>
</section>';
endif;
?>

</div>

<?php get_footer(); ?>