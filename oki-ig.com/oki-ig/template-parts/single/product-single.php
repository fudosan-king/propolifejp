
<?php get_header(); ?>

<section class="section_sub_banner">      
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-12">
				<h2><?php the_title(); ?></h2>
				<p><?php echo $post->post_excerpt; ?></p>
			</div>
		</div>
	</div>
</section>


<?php 
 	$product = wc_get_product($post->ID);
	$attachment_ids = $product->get_gallery_image_ids();
	if (count($attachment_ids)>0):
		?>
		<section class="section_banner_img">
			<ul class="bxslider">
		<?php
    	foreach($attachment_ids as $img_id){
    		$img_origin = wp_get_attachment_url( $img_id );
    		?>
    			<li>
			  		<img src="<?php echo $img_origin; ?>" alt="" class="img-fluid">
			  	</li>
    		<?php
    	}?>
    			</ul>
			</section>
    	<?php
	endif;
 ?>


<main>
	<section class="section_products">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-sm-12">
					<h2 class="title">特徴</h2>
					<?php echo $post->post_content; ?>
				</div>
				<ul class="list_Kokutan">
					<?php if(!empty($product->get_attribute('distribution'))): ?>
					<li>
						<img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/icon_globe_s.png"></img>
						<p>◯ 分布</p>
						<p><?php echo !empty($product->get_attribute('distribution')) ? $product->get_attribute('distribution') : "N/a"; ?></p>
					</li>
					<?php endif; ?>
					
					<?php if(!empty($product->get_attribute('species'))): ?>
					<li>
						<img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/icon_plant_s.png"></img>
						<p>◯ 樹種</p>
						<p><?php echo !empty($product->get_attribute('species')) ? $product->get_attribute('species') : "N/a"; ?></p>
					</li>
					<?php endif; ?>
					
					<?php if(!empty($product->get_attribute('tree'))): ?>
					<li>
						<img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/icon_tree_s.png"></img>
						<p>◯ 樹木</p>
						<p><?php echo !empty($product->get_attribute('tree')) ? $product->get_attribute('tree') : "N/a"; ?></p>
					</li>
					<?php endif; ?>

				</ul>

				<div class="col col-12 col-sm-8 offset-sm-2">
					<table class="table table-hover table-striped table_infoPro">
						<tbody>
							<?php if(!empty($product->get_price())): ?>
							<tr>
								<th>価格</th>
								<td><?php echo $product->get_price_html(); ?></td>
							</tr>
							<?php endif; ?>
							
							<?php if(!empty($product->get_attribute('size'))): ?>
							<tr>
								<th>大きさ</th>
								<td><?php echo $product->get_attribute('size'); ?></td>
							</tr>
							<?php endif; ?>

						</tbody>
					</table>
				</div>

			</div>
		</div>
	</section>
</main>

<script>
	jQuery(document).ready(function(){
		jQuery('.bxslider').bxSlider({
			mode: 'fade',
			moveSlides: 1,
			auto: true,
			responsive: true,
			infiniteLoop: true,
			adaptiveHeight: false,
			pager: false,
			controls: true,
			slideHeight: 386,
			slideMargin: 0,
			easing: 'swing',
			speed: 800,
		});
	});
</script>


<?php get_footer(); ?>