<?php 
	$data = ACFHomeFields::_sectionConcept();
?>
<section id="section_concept" class="section_concept">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="box_concept">
					<div class="row flex-column-reverse flex-md-row">
						<div class="col-12 col-md-7">
							<img src="<?php _echo($data->background->url); ?>" alt="" class="w-100 h-100" style="object-fit: cover;">
						</div>
						<div class="col-12 col-md-5 align-self-center">
							<div class="box_concept_content">
								<h2 class="title mb-0"><?php _echo($data->title); ?></h2>
								<!-- <h6><?php _echo($data->description); ?></h6> -->
								<?php _echo($data->content); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>