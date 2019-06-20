<main>
	<section class="content-page news">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							setPostViews(get_the_ID());
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>
							
							<div class="more-info">
								<div class="date-post"><?php echo date('Y-m-d ', get_post_time()); ?>
								<?php 
									echo get_taxonomy_custom_post_string( $post, 'news-cat' );
								?>
								</div>
							</div>
							<h3 class="sub_title"><?php the_title(); ?></h3>

							<?php 
								// $list_category = get_the_category($post->ID);
								// foreach ($list_category as $cat) {
								// 	# code...
								// 	echo '<a class="btn_tab" href="'.get_term_link($cat).'">'.$cat->name.'</a>&nbsp;';
								// }
							?>

							<div id="main-content">

								<div class="img_feature">
									<img class="img-fluid" src="<?php echo $thumnailImage; ?>"></img>
								</div>
								<?php the_content(); ?>
								
							</div>

							<div class="back-page"><a href="<?php echo get_post_type_archive_link('news'); ?>"><< NEWS一覧に戻る</a></div>			
							

							<?php
						endwhile;
					else:
						?>
							<p>404 Post not found.</p>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>
