<?php 
	$data = ACFHomeFields::_sectionRooms();

	function _Rooms_display_feature_images($data){
		$html = '';
		if(_isNotNull($data->feature_images)){
			foreach($data->feature_images as $i => $row) {

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
<section id="section_room" class="section_room mb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title"><?php _echo($data->title); ?></h2>
				
				<!-- <img src="<?php _echo($data->background->url); ?>" alt="" class="img-fluid"> -->

				<!-- Duplicated row from feature.php gallery -->
				<div class="row">
					<div class="column">
						<div id="feature" class="feature no-touch">
							<?php _Rooms_display_feature_images($data); ?>
						</div>
					</div>
				</div>
				<!-- END -->

				<!-- <h4><?php _echo($data->description); ?></h4>
				<?php _echo($data->content); ?>
				<?php _generateTag_link($data->button_link) ?> -->
			</div>
		</div>
	</div>
</section>


