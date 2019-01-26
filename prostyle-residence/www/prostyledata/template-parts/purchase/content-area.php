<?php 
	if(is_page('purchase')):
		$areaGroup = get_field('area_available');

		if(!empty($areaGroup)):
			echo '
			<div id="purchase_area">
			    <h3>応募対象エリア</h3>
			    <p class="area">'.$areaGroup['short_description'].'</p>
			    <p class="map">
			';

			$imgPCURL = wp_get_attachment_image_url( $areaGroup['image_for_pc']['ID'], $size = 'origin', $icon = false );
			$imgSPURL = wp_get_attachment_image_url( $areaGroup['image_for_sp']['ID'], $size = 'origin', $icon = false );;

			?>
				<span class="pc"><img src="<?php echo $imgPCURL; ?>" alt=""></span>
        		<span class="sp"><img src="<?php echo $imgSPURL; ?>" alt=""></span>
			<?php

			echo '
				</p>
		    </div><!-- // #purchase_area -->
			';
		endif;
	endif;
?>


    
        
    
