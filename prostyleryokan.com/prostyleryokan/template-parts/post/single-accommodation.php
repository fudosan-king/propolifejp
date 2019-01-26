<div class="sub_page">

	<?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<a href="/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_gray.svg" alt="" class="img-fluid" width="150"></a>

	<section class="section_accomodation_detail">
		<?php 
		if (have_posts()):
			while(have_posts()): the_post();
				$termName = wp_get_post_terms( $post->ID, $taxonomy = 'accommodation_type', array ('fields' => 'names') )[0];
				$gallery_images = get_field('gallery_images');
				?>
				<div class="container">
					<div class="row">
						<div class="col col-12">
							<div class="swiper_accomodation">
								<div class="box_label">
									<h2><?php the_title(); ?></h2>
									<h3><?php echo $termName; ?></h3>
								</div>

								<div class="swiper-container gallery-top">
									<div class="swiper-wrapper">
										<?php 
										if (!empty($gallery_images)):
											foreach ($gallery_images as $img){
												echo '<div class="swiper-slide" style="background-image:url('.$img['url'].')"></div>';
											}
										endif;
										?>
									</div>
								</div>

								<div class="swiper-container gallery-thumbs">
									<div class="swiper-wrapper">
										<?php 
										if (!empty($gallery_images)):
											foreach ($gallery_images as $img){
												echo '<div class="swiper-slide" style="background-image:url('.$img['url'].')"></div>';
											}
										endif;
										?>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>

				<div class="head_suiteSpecification">
					<div class="container">
						<div class="row">
							<div class="col col-12 text-center">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="detail_suiteSpecification">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-sm-12 col-md-8 offset-md-2">
								<div class="box_detail_suiteSpecification">
									<div class="row">

										<!-- ATTRIBUTES LIST -->
										<?php 
										if (have_rows('attributes_list')):
											echo '<div class="col col-12 col-sm-12">
											<dl class="row">';
											while (have_rows('attributes_list')): the_row();
												?>
												<dt class="col col-2 col-sm-2 col-md-2"><?php echo get_sub_field('name'); ?></dt>
												<dd class="col col-4 col-sm-4 col-md-4"><?php echo get_sub_field('value'); ?></dd>
												<?php
											endwhile;
											echo '</dl>
											</div>';
										endif;
										?>						


										<!-- DESCRIPTION LIST -->
										<?php 
										if (have_rows('description_list')):
											echo '<div class="col col-12">';
											while (have_rows('description_list')): the_row();
												?>
												<dl class="row">
													
													<dt class="col col-12 border-bottom-0 pb-0"><?php echo get_sub_field('title'); ?></dt>
													<dd class="col col-12"><?php echo get_sub_field('description'); ?></dd>
												</dl>
												<?php
											endwhile;
											echo '</dl>
											</div>';
										endif;
										?>
									</div>
								</div><!-- box_detail_suiteSpecification -->

								<?php 
								if (have_rows('button_link') && !empty(get_field('button_link'))):
									$button_link = get_field('button_link');
									?>
									<div class="w_more_container">
										<a href="<?php echo $button_link['url']; ?>" class="more_container" target="<?php echo $button_link['target']; ?>">
											<div class="more">
												<p class="more_text"><?php echo $button_link['title']; ?><span class="line more_loop no_width"></span></p>
											</div>
										</a>
									</div>
									<?php
								else:
									?>
									<div class="w_more_container">
										<a href="/" class="more_container">
											<div class="more">
												<p class="more_text">この部屋のプランを見る<span class="line more_loop no_width"></span></p>
											</div>
										</a>
									</div>
									<?php
								endif;
								?>

								

							</div>
						</div>

					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
		


	</section>

</div>