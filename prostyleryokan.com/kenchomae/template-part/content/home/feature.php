<?php 
	$data = ACFHomeFields::_sectionFeature();

	function _display_feature_images($data){
		$html = '';
		if(_isNotNull($data->feature_images)){
			foreach($data->feature_images as $i => $row){
				$thumbnail = $row->thumbnail->url;
				$background = $row->background->url;

				$html .= sprintf('
				<div class="feature-type column-item">
                    <a href="#">
                        <div class="feature-bg" style="background-image:url(\'%s\')">
                            <div class="feature-bg-change" data-src="\'%s\'" style="background-image:url(\'%s\')"></div>
                        </div>
                    </a>
                </div>', $thumbnail, $background, $background);				
			}
		}
		echo $html;
	}
	
?>
<section class="section_feature">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title"><?php _echo($data->title); ?></h2>
				<div class="row">
					<div class="col-12 col-md-10 mx-auto">
						<p class="mb-5"><?php _echo($data->description); ?></p>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="column">
								<div id="feature" class="feature no-touch">
									<?php _display_feature_images($data); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>