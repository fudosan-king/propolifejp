<?php 
	$data = ACFTableOutlineFields::_sectionOutline();
	
	function _display_outline($repeater){
        $html = '';
        if(_isNotNull($repeater)){
            foreach($repeater as $i => $obj){
                $selfCenterClass = ($i != 7) ? ' align-self-center' : '';
				$html .= sprintf('
					<div class="col-12 col-md-4 %s">
						<h5>%s</h5>
					</div>
					<div class="col-12 col-md-8 %s">
						<p>%s</p>
					</div>',$selfCenterClass, $obj->title, $selfCenterClass, $obj->value);
            }
        }

        echo $html;
    }
?>

<div class="main_content bg-white">
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
</div>