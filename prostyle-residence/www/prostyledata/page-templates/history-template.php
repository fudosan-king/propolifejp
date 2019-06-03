<?php 
/* Template Name: History - Page Template */
?>

<?php get_header();?>

<main>
	<section class="content-page company">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>

							<!-- <h2 class="sub_title"><?php //the_title(); ?></h2> -->
							
							<div id="main-content">
								<?php the_content(); ?>

								<section class="extra-content">

									<div id="section_title">
							            <h2>
							            	<?php if (file_exists(SGVinK::get_images_path().'/page/'.$post->post_name.'.png')): ?>
												<img src="<?php echo SGVinK::get_images_uri().'/page/'.$post->post_name.'.png'; ?>">
											<?php endif; ?>

							            	<?php if (file_exists(SGVinK::get_images_path().'/page/'.$post->post_name.'-long.png')): ?>
												<img class="spec" src="<?php echo SGVinK::get_images_uri().'/page/'.$post->post_name.'-long.png'; ?>">
							            	<?php endif; ?>
							            </h2>
							            <!--<p class="ruby"><?php //echo strtoupper(str_replace('-', ' ', $post->post_name)); ?></p>-->
							            <!-- <p class="sapphire">株式会社プロスタイルでは、分譲マンション建設用地を募集し購入を積極的に行っております。</p> -->
							            <p class="line"></p>
							        </div>

									<div id="contents_inner">
									    
									    <?php 
											if (have_rows('info_control')):
												echo '
													<dl class="company">
												';

												while(have_rows('info_control')): the_row();
													echo '
														<dt>'.get_sub_field('title').'</dt>
														<dd>
															'.get_sub_field('content').'
														</dd>
													';
												endwhile;

												echo '
													</dl>
												';
											endif;
										?>

									</div>
								</section>

								

								
							</div>

							<?php
						endwhile;
					else:
						?>
							<p align="center">404 Page not found.</p>
						<?php
					endif;
					?>
					
				</div>
			</div>
		</div>
	</section>
</main>


<?php get_footer();?>