<?php 
	if(is_page('purchase')):
		$groupSettlement = get_field('settlement');
		$quickSettlement = $groupSettlement['quick_settlement'];
		$refLink = $groupSettlement['ref_link'];

		if(!empty($groupSettlement)):
			echo '
			<div id="point">
				<h3>最短1日で査定！迅速決済</h3>';
				if(!empty($quickSettlement)):
					echo '<ul>';
					foreach($quickSettlement as $img){
						$imgURL = wp_get_attachment_image_url( $img['ID'], $size = 'medium', $icon = false );
						?>
							<li><img src="<?php echo $imgURL; ?>" width="190" alt="<?php echo $img['title']; ?>"></li>
						<?php
					}
					echo '</ul>';
				endif;

				if(!empty($refLink)):
					echo '
					<div class="linkRef">
						<a href="'.$refLink['url'].'" target="'.$refLink['target'].'">'.$refLink['title'].'</a>	
					</div>';
				endif;
				
			echo '
			</div>';
		endif;		
	endif;
?>
