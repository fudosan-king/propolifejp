<?php 
	$data = ACFTermsFields::_sectionNotice();

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
					</div>',$selfCenterClass, $obj->title, $selfCenterClass, $obj->content);
            }
        }

        echo $html;
    }
?>

<div class="main_content">
	<section class="section_termofuse mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="box_outline">
						<div class="row">
							<?php 
							$list_item = json_decode(json_encode(get_field('list_item')));
							_display_outline($list_item);
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>