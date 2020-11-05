<?php 
	$data = ACFHomeFields::_sectionGallery();
?>
<section id="section_gallery" class="section_gallery mb-0">
	<div class="container-fluid no-gutters p-0">
		<div class="row no-gutters">
			<div class="col-12 text-center">
				<?php _generateTag_image($data->background); ?>
				<h2 class="title"><?php _echo($data->title); ?></h2>
				<?php _generateTag_link($data->button_link, 'mt-auto'); ?>
			</div>
		</div>
	</div>
</section>