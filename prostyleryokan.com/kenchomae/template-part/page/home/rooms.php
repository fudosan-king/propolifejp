<?php 
	$data = ACFHomeFields::_sectionRooms();
?>
<section id="section_room" class="section_room mb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title"><?php _echo($data->title); ?></h2>
				<img src="<?php _echo($data->background->url); ?>" alt="" class="img-fluid">
				<h4><?php _echo($data->description); ?></h4>
				<?php _echo($data->content); ?>
				<?php _generateTag_link($data->button_link) ?>
			</div>
		</div>
	</div>
</section>