<?php
/*Template Name: Photo Gallery - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">
	<?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<div class="jarallax bg_top" style="background: #a6bcd4;">
		<img class="jarallax-img bg-scale" src="<?php echo get_field('background_image')['url']; ?>" alt="">
		<a href="/yokohamabashamichi/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
		<div class="accomodation_content">
			<span class="box_line">
				<svg width="200" height="200" viewBox="0 0 100 100">
					<polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
				</svg>
			</span>
			<span class="box_line box_line_step">
				<svg width="200" height="200" viewBox="0 0 100 100">
					<polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
					<polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
				</svg>
			</span>
			<div class="box_line_content bg_white">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>

		<div id="scroll_down" class="scroll_down_sub">
			<div class="vertical_elem">
				<div class="line white only vertical t_b hidden scroll_loop"></div>
				<div class="start_square has_transition_600"></div>
			</div>
		</div>

		<span class="line_yellow"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow.svg" alt=""></span>
		<div class="text_footer">
			<p><?php echo get_field('short_intro'); ?></p>
		</div>
	</div>
</section>

<?php 
$group = get_field('gallery_content');
$photos_gallery = $group['photos_gallery'];

// print_r($photos_gallery);

?>

<section class="section_gallerys">
	<div class="container-fluid">
		<div class="gallery">
			<?php 
			if (!empty($photos_gallery) && count($photos_gallery)){
				foreach($photos_gallery as $img){
					$imgUrl = wp_get_attachment_image_url( $img['ID'], $size = 'large', $icon = false );
					$imgFigcaption = !empty($img['caption']) ? '<figcaption><span>'.$img['caption'].'</span></figcaption>' : '';
					echo '<a class="boxImgGallery" href="'.$img['url'].'" data-fancybox="images"><img src="'.$imgUrl.'" alt="" class="gallery-img">'.$imgFigcaption.'</a>';
				}
			} 
			?>
		</div> 
	</div>

</section>

<?php get_footer(); ?>