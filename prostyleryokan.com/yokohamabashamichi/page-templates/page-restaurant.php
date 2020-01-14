<?php
/*Template Name: Restaurant - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">
	<?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<div class="jarallax bg_top" style="background: #a6bcd4;">
		<img class="jarallax-img bg-scale" src="<?php echo get_field('background_image')['url']; ?>" alt="">
		<a href="/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
		<div class="accomodation_content">
			<span class="box_line">
				<svg width="200" height="200" viewBox="0 0 100 100">
					<polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
				</svg>
			</span>
			<span class="box_line box_line_step">
				<svg width="200" height="200" viewBox="0 0 100 100">
					<polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
				</svg>
			</span>
			<div class="box_line_content bg_white">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>

		<div id="scroll_down" class="scroll_down_sub">
			<div class="vertical_elem">
				<div class="line white only vertical t_b hidden scroll_loop"></div>
				<div class="start_square has_transition_600"></div>
			</div>
		</div>

		<span class="line_yellow"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow.svg" alt=""></span>
		<div class="text_footer">
			<p><?php echo get_field('short_intro'); ?></p>
		</div>
	</div>
</section>

<section class="section_sub_restaurant">
	<div class="container">
		<?php 
			$index = 1;
			if (have_rows('restaurant_content')):
				while (have_rows('restaurant_content')): the_row();
					$section = get_sub_field('section');
					$title = get_sub_field('title');
				?>
					<div class="row mb30">
						<div class="col col-12">
							<?php if (!empty($section)): ?>
							<h2 class="title"><?php echo $section; ?></h2>
							<?php endif; ?>
							<h3 class="title_meal"><?php echo $title; ?></h3>
						</div>

						<?php 
						if (have_rows('repeater')):
							while (have_rows('repeater')): the_row();
								$imgURL = wp_get_attachment_image_url( get_sub_field('image')['ID'], $size = 'medium_large', $icon = false );
								// $hover = $index == 1 ? 'hover' : '';
							?>

							<div class="col col-sm-6">
								<figure class="snip1100 blue <?php //echo $hover; ?>">
									<img src="<?php echo $imgURL; ?>" alt="" class="img-fluid">
									<figcaption>
										<div>
											<?php the_sub_field('description'); ?>
										</div>
									</figcaption>
									<a href="<?php echo $imgURL; ?>" data-fancybox="gallery"></a>
								</figure>
							</div>

							<?php
							$index++;									
							endwhile;
						endif;
						?>
						

						<div class="col col-12">
							<div class="meal_time_option"><?php the_sub_field('description'); ?></div>
						</div>
					</div>
				<?php
				endwhile;
			endif;
		?>
	</div>
</section>

<?php get_footer(); ?>