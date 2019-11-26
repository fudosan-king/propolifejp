<?php 
    $featureIMG = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );
?>
<div class="spacing"></div>
<section class="section_banner_sub">
	<h2><?php the_title(); ?></h2>
    <?php if (_isNotNull($featureIMG)): ?>
	   <img src="<?=$featureIMG;?>" class="img-fluid" alt="Responsive image">
    <?php endif; ?>
</section>