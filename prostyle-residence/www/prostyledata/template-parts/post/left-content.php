<div class="main_post">

	<?php

	if (have_posts()):
		while (have_posts()): the_post();
			?>

			<div class="post_item">
				<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php 
					$list_category = get_the_category($post->ID);
					foreach ($list_category as $cat) {
						# code...
						echo '<a class="btn_tab" href="'.get_term_link($cat).'">'.$cat->name.'</a>&nbsp;';
					}
				?>

				<!-- FACEBOOK BUTTON SHARE -->
				<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							
				<div class="img_post">
					<?php 
						$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
					?>
					<a href="<?php the_permalink(); ?>" title=""><img src="<?php echo $thumnailImage; ?>" alt="" class="img-fluid"></a>
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
			</div>

			<?php

		endwhile;

		// PAGINATION CUSTOMIZE
		sgvink_pagination();
		
	endif;

	?>
</div>