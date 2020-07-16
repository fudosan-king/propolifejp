<?php 
/* Template Name: TOP - Page Template */
?>

<?php get_header(); ?>

<?php 

if (have_posts()):
	while (have_posts()): the_post();
?>

<section class="banner"></section>    		

<main>
	<section class="section_news bg_common">

		<?php get_template_part( 'template-parts/home/block', 'news' ); ?>

		<div class="block_valuable">
			<div class="title">プロスタイルとは…。</div>
			<?php the_content(); ?>

			<br>

			<?php if (have_rows('brands_control')): ?>
				<a href="#" class="btn btn_brand_commitment" data-toggle="modal" data-target="#modal_brands">
					<!-- 新築マンションブランドのご紹介 <i class="i_down"></i> -->
					<!-- <img src="<?php //SGVinK::the_images_uri(); ?>/syoukai_button.png" class="img-responsive" alt="syoukai"> -->
					プロスタイルのブランド展開
				</a><br>
			<?php endif; ?>

			<?php if (have_rows('commitment_control')): ?>
				<a href="#" class="btn btn_brand_commitment" data-toggle="modal" data-target="#modal_commitment">
					<!-- こだわり <i class="i_down"></i> -->
					<!-- <img src="<?php //SGVinK::the_images_uri(); ?>/kodawari_button.png" class="img-responsive" alt="kodawari"> -->
					こだわり
				</a>
			<?php endif; ?>

			<div class="ad-banner-gooddesign">
				<img src="<?php echo SGVinK::get_images_uri();?>1x/g_type2019_f@2x.png" alt="" class="img-fluid"><br>

				<?php 
					$newGoodPost = get_post('718');
					if (isset($newGoodPost)):
						?>
							<a href="<?php echo get_the_permalink($newGoodPost); ?>" target="_blank" ><?php echo $newGoodPost->post_title; ?></a>
						<?php
					endif;
				?>
				
			</div>

		</div>



	</section>

	<?php get_template_part( 'template-parts/home/block', 'realestate' ); ?>
	<?php //get_template_part( 'template-parts/home/block', 'gallery' ); ?>
	<?php //get_template_part( 'template-parts/home/block', 'distribution' ); ?>
	<?php get_template_part( 'template-parts/home/block', 'ryokan' ); ?>
	<?php get_template_part( 'template-parts/home/block', 'videos' ); ?>


</main>

<?php 
		
	endwhile;
endif;

?>

<?php get_footer(); ?>