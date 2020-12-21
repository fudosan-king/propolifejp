<?php 
	$sectionContent = ACFGalleryFields::_sectionContent();

	function _generateGalleryContent($gallery){
		$html='';
		if(_isNotNull($gallery)){
			echo '<div class="gallery">';
			foreach($gallery as $i => $obj){
				?>
				<a data-fancybox="images" class="gallery-img" href="<?php echo $obj->url; ?>">
					<?php _generateTag_image($obj); ?>
					<?php if(_isNotNull($obj->caption)): ?>
					<span class="gallerys_title"><?php echo $obj->caption; ?></span>
					<?php endif; ?>
				</a>
				<?php
			}
			echo '</div>';
		}
		return $html;
	}

?>

<div class="main_content">
	<section class="section_gallerys">
		<div class="container-fluid">
			<?php echo _generateGalleryContent($sectionContent->photo_gallery); ?>
		</div>
	</section>
</div>