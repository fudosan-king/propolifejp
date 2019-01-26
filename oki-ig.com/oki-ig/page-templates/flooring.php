<?php 
/*Template Name: Flooring Page*/
?>

<?php get_header(); ?>

<section class="section_sub_banner">      
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-12">
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_field('description'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section_flooring">
	<div class="container">
		<div class="row">
			

			<?php 

				$args = woo_agr_get_all_product_with_taxonomy(array('flooring'));
				
				$query = new WP_Query( $args );

				if($query->have_posts()):
					while($query->have_posts()): $query->the_post();
						
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $size = 'large', $icon = false );
						?>
							<div class="col col-6 col-sm-4">
				                <div class="box_flooring_item">
				                  <a href="<?php the_permalink(); ?>" title=""><img src="<?php echo $image[0]; ?>" alt="placeholder+image" class="img-fluid"></a>
				                  <h3><?php the_title(); ?></h3>
				                  <p><?php the_excerpt(); ?></p>
				                </div>
				          	</div>
						<?php
					endwhile;
					wp_reset_postdata();
					wp_reset_query();
				endif;
				
			?>

		</div>
	</div>
</section>

<?php get_footer(); ?>