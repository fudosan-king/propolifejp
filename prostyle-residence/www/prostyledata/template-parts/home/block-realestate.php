<?php 
	
	$args = array(
			

		// Type & Status Parameters
		'post_type'   => 'real-estates',
		'post_status' => 'publish',

		// Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'ID',

		// Pagination Parameters
		'posts_per_page'         => -1,

		// Permission Parameters -
		'perm' => 'readable',

		// Parameters relating to caching
		// 'no_found_rows'          => false,
		// 'cache_results'          => true,
		// 'update_post_term_cache' => true,
		// 'update_post_meta_cache' => true,
	
	);
	
	$query = new WP_Query( $args );

	if($query->have_posts()):
		$index = 1;
		echo '<section class="section_statusselling">';
		while($query->have_posts()): $query->the_post();
			$rowReverseClass = $index % 2 == 0 ? 'flex-sm-row-reverse' : '';
			$divRightClass = $index % 2 != 0 ? 'right' : '';

			$thumbnailURL = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), $size = 'origin', $icon = false );

			$soldoutText = '' ;
			switch (get_field('status')) {
				case 'sale':
					$soldoutText = __('販売中', 'sgvink');
					break;
				case 'predict':
					$soldoutText = __('販売予告', 'sgvink');
					break;
				default:
					$soldoutText = __('完売御礼', 'sgvink');
					break;
			}
			$soldoutClass = get_field('status') == 'sold' ? 'soldout' : '' ;

			
			?>
				<div class="statusselling_pro bg_common">
					<div class="statusselling_pro_item">
						<div class="container">
							<div class="row <?php echo $rowReverseClass; ?>">
								<div class="col col-12 col-sm-12 col-md-12 col-lg-8">
									<div class="img_statusselling">
										<img src="<?php echo $thumbnailURL; ?>" alt="" class="img-fluid">
									</div>
								</div>
								<div class="col col-12 col-sm-12 col-md-12 col-lg-4">
									<div class="box_infoproducts <?php echo $divRightClass; ?>">
										<div class="row no-gutters">
											<div class="col col-9 col-sm-9">
												<div class="proname">
													<h3><?php echo get_the_title(); ?></h3>
													<p><?php echo get_field('short_message'); ?></p>
												</div>
											</div>
											<div class="col col-3 col-sm-3">
												<p class="prosales <?php echo $soldoutClass; ?>"><?php echo $soldoutText; ?></p>
											</div>
										</div>
										<div class="infoproducts_content">
											<?php 
												if (have_rows('description')):
													$requestLink = !empty(get_field('request_link')) ? get_field('request_link') : '';
													$visitLink = !empty(get_field('visit_link')) ? get_field('visit_link') : '';
													$websiteURL = !empty(get_field('website_url')) ? get_field('website_url') : '';

													echo '<div class="row">';
													while(have_rows('description')): the_row();
														?>
														<div class="col col-3 col-sm-3">
															<p class="location"><?php echo get_sub_field('title'); ?></p>
														</div>
														<div class="col col-9 col-sm-9">
															<p class="address"><?php echo get_sub_field('content'); ?></p>
														</div>
														<?php
													endwhile;
													echo '</div>';
												endif;
											?>
											
											<?php if (get_field('status') == 'sale' || get_field('status') == 'predict'): 
												echo '<div class="text-center">';

												if (!empty($requestLink)){
													echo '<a href="'.$requestLink.'" class="btn btnDocument">資料請求 <i class="i_right"></i></a>';
												}

												if (!empty($visitLink)){
													echo '<a href="'.$visitLink.'" class="btn btnDocument">来場予約 <i class="i_right"></i></a>';
												}											

												echo '</div>'

											?>											
													
											<?php endif; ?>
										</div>

										<?php 
											if (!empty($websiteURL)){
												echo '<a href="'.$websiteURL.'" target="_blank" class="btn btnProperty">物件公式サイトへ <i class="i_right_white"></i></a>';
											}	
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			$index++;
		endwhile;
		echo '</section>';

		wp_reset_postdata();
		wp_reset_query();
	endif;

?>