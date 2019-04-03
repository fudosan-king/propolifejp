<?php 
/* Template Name: Purchase - Page Template */
?>

<?php get_header();?>

<main>
	<section class="content-page purchase">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>

							<h2 class="sub_title"><?php the_title(); ?></h2>
							
							<div id="main-content">
								<?php the_content(); ?>
								
								
								
								<section class="extra-content">

									<div id="section_title">
							            <h2><img src="<?php SGVinK::the_images_uri(); ?>/img_title_h2.png" alt="仕入不動産募集"></h2>
							            <p class="ruby">PURCHASE</p>
							            <p class="line"></p>
							        </div>

									<div id="contents_inner">
									    
									    <?php get_template_part('template-parts/purchase/content', 'telephone'); ?>

									    <div id="section_buy">
									        
									        <?php get_template_part('template-parts/purchase/content', 'purchase-list'); ?>

									        <?php get_template_part('template-parts/purchase/content', 'settlement'); ?>

											<?php //get_template_part('template-parts/purchase/content', 'area'); ?>
											
											<?php get_template_part('template-parts/purchase/content', 'estate-records'); ?>
									        
									    </div><!-- // #section_buy -->


									    <?php get_template_part('template-parts/purchase/content', 'telephonebtm'); ?>

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