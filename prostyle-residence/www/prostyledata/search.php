<?php get_header();?>

<main>
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php 
					global $wp_query;
					?>
					<div align="right">
						<i><u>Result</u>: (<?php echo $wp_query->found_posts; ?>)</i>
					</div>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>

							<h3 class="sub_title"><?php the_title(); ?></h3>
							<?php 
								$list_category = get_the_category($post->ID);
								foreach ($list_category as $cat) {
									# code...
									echo '<a class="btn_tab" href="'.get_term_link($cat).'">'.$cat->name.'</a>&nbsp;';
								}
							?>

							<!-- FACEBOOK BUTTON SHARE -->
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

							<div class="img_feature">
								<img class="img-fluid" src="<?php echo $thumnailImage; ?>"></img>
							</div>
							<?php the_excerpt(); ?>
							<div class="post_footer">
								<div class="row">
									<div class="col col-sm-6">
										<a href="#" class="date_post"><?php the_time(); ?></a>
									</div>
									<div class="col col-sm-6">
										<a href="#" class="post_counters_item">
											<span class="post_counters_number"><?php echo $number_of_comment = "<fb:comments-count href=" . get_permalink($post->ID) . " ></fb:comments-count>"; ?></span>
											<span class="post_counters_label">Comments</span>
										</a>
									</div>
								</div>
							</div>

							<?php
						endwhile;
						sgvink_pagination();
					else:
						?>
							<p align="center">No posts found.</p>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer();?>