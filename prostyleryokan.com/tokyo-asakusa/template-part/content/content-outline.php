<?php 
	$data = ACFOutlineFields::_sectionOutline();

	function _display_outline($repeater){
        $html = '';
        if(_isNotNull($repeater)){
            foreach($repeater as $i => $obj){
                $html .= sprintf('
					<div class="col-12 col-md-4 align-self-center">
						<h5>%s</h5>
					</div>
					<div class="col-12 col-md-8 align-self-center">
						<p>%s</p>
					</div>',$obj->title, $obj->value);
            }
        }

        echo $html;
    }
?>
<div class="main_content">
	<section class="section_outline mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="box_outline">
						<div class="row">
							<?php _display_outline($data->repeater_info); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_map mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php _echo($data->google_iframe); ?>
				</div>
			</div>
		</div>
	</section>
</div>