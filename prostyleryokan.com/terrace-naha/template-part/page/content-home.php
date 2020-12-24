
	<?php 
		$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';
		//include_once 'home/booking.php'; 
		
		// if ($currentLanguage == 'ja'){
		// 	include_once 'home/booking.php'; 
		// }else{
		// 	if (is_user_logged_in()){
		// 		include_once 'home/booking.php';
		// 	}
		// }
	?>
	
	<div class="main_content">
		
		<?php 
			include_once 'home/concept.php';
			// include_once 'home/feature.php';
			include_once 'home/rooms.php';
			include_once 'home/access.php';
			// include_once 'home/location.php';
			// include_once 'home/outline.php';
			// include_once 'home/gallery.php';
		?>

	</div>
