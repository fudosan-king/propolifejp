<?php 
	if(is_page('purchase')):
		$quickSettlement = get_field('quick_settlement');

		if(!empty($quickSettlement)):
			echo '
			<div id="point">
			    <h3>最短1日で査定！迅速決済</h3>
			    <ul>
			';
			foreach($quickSettlement as $img){
				$imgURL = wp_get_attachment_image_url( $img['ID'], $size = 'medium', $icon = false );
				?>
					<li><img src="<?php echo $imgURL; ?>" width="190" alt="<?php echo $img['title']; ?>"></li>
				<?php
			}
			echo '
			    </ul>
			</div><!-- // #point -->
			';
		endif;
	endif;
?>