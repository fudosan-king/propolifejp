<?php 
/*Template Name: Door & Fittings Page*/
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

<section class="section_banner_img">
	<?php 
		$imgFeature = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'large', $icon = false );
	?>
	<img src="<?php echo $imgFeature; ?>" alt="" class="img-fluid">
</section>


<main>
	<section class="section_products">
		<div class="container">
			<div class="row">

				<?php 
				if (have_rows('block_content')):
					while(have_rows('block_content')): the_row(); 
						switch (get_row_layout()) {
							case 'flf_intro':
							flf_intro_content(get_row_layout());
							break;
							
							case 'flf_on_sale':
							flf_on_sale_content(get_row_layout());
							break;
						}
					endwhile;
				endif;
				?>

			</div>
		</div>
	</section>
<main>

<?php 
	function flf_intro_content($layout_name){
		?>
			<div class="col col-12 col-sm-12">
                <h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name); ?></h2>
                <?php echo get_sub_field('flf_intro_content'); ?>
          	</div>
		<?php
	}

	function flf_on_sale_content($layout_name){
		global $post;
		$args = woo_agr_get_all_product_with_taxonomy(array('door', 'fittings'));
				
		$query = new WP_Query( $args );
		?>
			<h2 class="title mt-lg-5 mb-lg-5"><?php echo acf_get_layout_label('block_content', $layout_name); ?></h2>
		<?php
		if($query->have_posts()):
			while($query->have_posts()): $query->the_post();
				$product = wc_get_product($post->ID);
				$image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'large', $icon = false );

				?>
		          	<div class="col col-12 col-sm-3">
		                <div class="box_doorFitting_item">
		                  <!-- <a href="<?php //the_permalink(); ?>" title=""> -->
		                  	<img src="<?php echo $image; ?>" alt="" class="img-fluid">
		                  <!-- </a> -->
		                  <h3><?php the_title(); ?></h3>
							
							<?php if (!empty($product->get_attribute('size'))): ?>
		                  	<p class="size">樹木 <span><?php echo !empty($product->get_attribute('size'))?$product->get_attribute('size'):__('N/a','okiig'); ?></span></p>
							<?php endif; ?>
							
	                 	 	<?php if (!empty($product->get_attribute('color'))): ?>
		                  	<p class="color">カラー <span><?php echo !empty($product->get_attribute('color'))?$product->get_attribute('color'):__('N/a','okiig'); ?></span></p>
							<?php endif; ?>

							<?php if (!empty($product->get_price_html())): ?>
		                  	<p class="price">価格 <span><?php echo !empty($product->get_price_html())?$product->get_price_html():__('N/a','okiig'); ?></span></p>
		              		<?php endif; ?>
		                  
		                </div>
	              	</div>
				<?php
			endwhile;
			wp_reset_postdata();
			wp_reset_query();
		endif;
	}
?>

<?php get_footer(); ?>