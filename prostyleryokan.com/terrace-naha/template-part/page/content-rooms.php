<?php 
	$sectionRelaxing = ACFRoomsFields::_sectionRelaxing();
	$sectionRoomsDetail = ACFRoomsFields::_sectionRoomsDetail();

	function _display_flex_content($flex){
		if(_isNotNull($flex)){
			foreach($flex as $i => $obj){
				switch ($obj->acf_fc_layout) {
					case 'multi_rooms':
						_display_multi_rooms($obj->room_instances);
						break;
					
					default:
						_display_single_room($obj->room_instance);
						break;
				}
			}
		}
	}

	function _display_repeater_content($repeater){
		$html = '';
		if(_isNotNull($repeater)){
			foreach($repeater as $i => $obj){
				$html .= '<p>'.$obj->title.'<span>'.$obj->value.'</span></p>';
			}
		}
		return $html;
	}

	function _getTagSlickSlider_Gallery($gallery, $id){
		$html = '';
		if(_isNotNull($gallery)){
            $mainSlider = '<section class="rooms-gallery slick-for id-'.$id.'">';
            foreach($gallery as $i => $obj){
                $mainSlider .= '
                <div class="slick-item">
                    <a href="'.$obj->url.'" data-fancybox="images"><img data-lazy="'.$obj->url.'" alt="" class="img-fluid"></a>
                </div>';
            }
            $mainSlider .= '</section>';
            $navSlider = '<section class="rooms-gallery slick-nav id-'.$id.'">';
            foreach($gallery as $i => $obj){
                $navSlider .= '
                <div class="slick-nav-item" >
                    <img data-lazy="'.$obj->url.'" alt="" class="img-fluid">
                </div>';
            }
            $navSlider .= '</section>';
        }
        $html.=$mainSlider.$navSlider;
		return $html;
	}

	function _display_single_room($room){
		$html = '';
		$script = '<script> $(function() {';
		$thumbnail = _getPostThumbnail($room->ID);
		$roomData = ACFRoomsCPTFields::_data($room->ID);
		$boxContent = $roomData->box_content;
	 	$gallery = $roomData->gallery;

		$leftContentLine = $roomData->box_content->lcontent_repeater;
		$rightContentLine = $roomData->box_content->rcontent_repeater;

		$html = sprintf('
		<div class="box_rooms_detail m-0">
			<div class="box_rooms_detail_img">
				%s
			</div>
			<h2 class="title">%s</h2>
			<p class="sub_header">%s</p>
			<div class="w_box_rooms_content">
				<div class="row">
					<div class="col-6 col-md-6 align-self-center">
						<div class="box_rooms_content">
							%s
						</div>
					</div>
					<div class="col-6 col-md-6 align-self-center">
						<div class="box_rooms_content box_rooms_content_right">
							%s
						</div>
					</div>
				</div>
				<a href="%s" class="btn btn_detail" target="_blank">%s <i class="fal fa-long-arrow-right fa-2x"></i></a>
			</div>
		</div>', _getTagSlickSlider_Gallery($gallery, $room->ID), _get($roomData->post->post_title), _get($roomData->description), _display_repeater_content($leftContentLine), _display_repeater_content($rightContentLine), get_post_permalink($room->ID), __('詳しく見る', 'uniquek'));

		$script .= "
		    $('.rooms-gallery.slick-for.id-".$room->ID."').slick({
		        asNavFor: '.rooms-gallery.slick-nav.id-".$room->ID."',
		        lazyLoad: 'ondemand',
		        arrows: true,
		    });
		    $('.rooms-gallery.slick-nav.id-".$room->ID."').slick({
		    	lazyLoad: 'ondemand',
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.rooms-gallery.slick-for.id-".$room->ID."',
				centerMode: true,
				focusOnSelect: true,
				arrows: false,
		    });
		";

		$script .= "});</script>";


		add_action( 'execute_slick_slider', function($arguments) use ($script) {
			echo $script;
		});

		echo sprintf('
			<div class="row">
				<div class="col-12">
					%s
				</div>
			</div>', $html);
	}

	function _display_multi_rooms($list){
		$html = '';
		$script = '<script> $(function() {';
		foreach($list as $i => $room){

			$thumbnail = _getPostThumbnail($room->ID);
			$roomData = ACFRoomsCPTFields::_data($room->ID);
			$boxContent = $roomData->box_content; 

			$gallery = $roomData->gallery;

			$leftContentLine = $roomData->box_content->lcontent_repeater;
			$rightContentLine = $roomData->box_content->rcontent_repeater;

			$html .= sprintf('
			<div class="col-12 col-md-6 w_box_rooms_detail">
				<div class="box_rooms_detail">
					<div class="box_twin_img">
						%s
					</div>
					<h2 class="title">%s</h2>
					<p class="sub_header">%s</p>
					<div class="w_box_rooms_content">
  					<div class="row">
  						<div class="col-6 col-md-6">
  							<div class="box_rooms_content">
  								%s
  							</div>
  						</div>
  						<div class="col-6 col-md-6">
  							<div class="box_rooms_content box_rooms_content_right">
								%s
							</div>
  						</div>
  					</div>
  					<a href="%s" class="btn btn_detail" target="_blank">%s <i class="fal fa-long-arrow-right fa-2x"></i></a>
  				</div>
				</div>
			</div>', _getTagSlickSlider_Gallery($gallery, $room->ID), _get($roomData->post->post_title), _get($roomData->description), _display_repeater_content($leftContentLine), _display_repeater_content($rightContentLine), get_post_permalink($room->ID), __('詳しく見る', 'uniquek'));

			$script .= "
			    $('.rooms-gallery.slick-for.id-".$room->ID."').slick({
			        asNavFor: '.rooms-gallery.slick-nav.id-".$room->ID."',
			        lazyLoad: 'ondemand',
			        arrows: true,
			    });
			    $('.rooms-gallery.slick-nav.id-".$room->ID."').slick({
			    	lazyLoad: 'ondemand',
					slidesToShow: 3,
					slidesToScroll: 1,
					asNavFor: '.rooms-gallery.slick-for.id-".$room->ID."',
					centerMode: true,
					focusOnSelect: true,
					arrows: false,
			    });
			";

		}
		$script .= "});</script>";

		add_action( 'execute_slick_slider', function($arguments) use ($script) {
			echo $script;
		});
		echo sprintf('
		<div class="row no-gutters">
  			%s		
  		</div>', $html);
	}

?>
<section class="section_relaxing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title"><?php _echo($sectionRelaxing->description); ?></h2>
				<?php _echo($sectionRelaxing->content); ?>
			</div>
		</div>
	</div>
</section>
<div class="main_content">
	<section class="section_rooms_detail">
		<div class="container">
			<?php _display_flex_content($sectionRoomsDetail->flex_content); ?>
		</div>
	</section>
</div>