<section class="top_trending">
	<div class="container">
		<div class="row">
			<div class="col col-12 col-md-8">
				<div class="row no-gutters">
					<?php 
						$query = new WP_Query( array(
						    'meta_key' => 'post_views_count',
						    'orderby' => 'meta_value_num',
						    'posts_per_page' => 3
						) );
						if ($query->have_posts()):
							$index = 1;
							while($query->have_posts()): $query->the_post();
								$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'medium-large', $icon = false );
								if ($index%2!=0):
								?>
								<div class="col col-12 col-sm-4 col-md-4">
									<div class="box_top_item box_top_item_image" style="background-image: url(<?php echo $thumnailImage; ?>)">
										<a class="item_link" href="<?php the_permalink(); ?>">&nbsp;</a>
									</div>
									<div class="box_top_item">
										<div class="box_top_item_content">
											<p class="date"><?php the_time(); ?></p>
											<p class="text_content"><?php the_title(); ?></p>
											<a href="<?php the_permalink(); ?>" class="btn btnReadmore"><span>read more</span></a>
										</div>
									</div>
								</div>
								<?php
								else:
								?>
								<div class="col col-12 col-sm-4 col-md-4 d-none d-sm-block">
									<div class="box_top_item">
										<div class="box_top_item_content">
											<p class="date"><?php the_time(); ?></p>
											<p class="text_content"><?php the_title(); ?></p>
											<a href="<?php the_permalink(); ?>" class="btn btnReadmore"><span>read more</span></a>
										</div>
									</div>
									<div class="box_top_item arrow_top box_top_item_image" style="background-image: url(<?php echo $thumnailImage; ?>)">
										<a class="item_link" href="<?php the_permalink(); ?>">&nbsp;</a>
									</div>
								</div>

								<div class="col col-12 col-sm-4 col-md-4 d-block d-sm-none">
									<div class="box_top_item box_top_item_image" style="background-image: url(<?php echo $thumnailImage; ?>)">
										<a class="item_link" href="<?php the_permalink(); ?>">&nbsp;</a>
									</div>
									<div class="box_top_item">
										<div class="box_top_item_content">
											<p class="date"><?php the_time(); ?></p>
											<p class="text_content"><?php the_title(); ?></p>
											<a href="<?php the_permalink(); ?>" class="btn btnReadmore"><span>read more</span></a>
										</div>
									</div>
								</div>
								<?php
								endif;
								$index++;
							endwhile;
							wp_reset_query();
							wp_reset_postdata();
						endif;
					?>
				</div>
			</div>

			<div class="col col-12 col-md-4">
				<div class="box_trending clearfix">
					<h2>Trending This Week</h2>
					<ul>

						<?php 
						$query = new WP_Query( array(
						    'meta_key' => 'post_views_count',
						    'orderby' => 'meta_value_num',
						    'posts_per_page' => 3
						) );

						if ($query->have_posts()):
							$index = 1;
							while($query->have_posts()): $query->the_post();
								?>
								<li>
									<a class="clearfix" href="<?php the_permalink(); ?>">
										<span class="number"><?php echo $index; ?></span>
										<span class="trending_text"><?php the_title(); ?></span>
										<span class="trending_date"><?php the_time(); ?></span>
									</a>
								</li>
								<?php
								$index++;
							endwhile;
							wp_reset_query();
							wp_reset_postdata();
						endif;
						?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>