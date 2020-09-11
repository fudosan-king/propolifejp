<?php 
	header('Content-Type: application/json');
	
	$json = array('response' => 'OK');

	if(isset($_REQUEST['name'])){
		switch ($_REQUEST['name']) {
			case 'recaptcha':{
				$google_reCaptcha_is_valid = 'https://www.google.com/recaptcha/api/siteverify';
				$secret = '6LdPxMoZAAAAAN29J1-9X40u8-D-0bhzRGNoXVA1';
				$token = $_POST['token'];
				$google_reCaptcha_is_valid .= '?secret='.$secret.'&response='.$token.'&remoteip='.$_SERVER['REMOTE_ADDR'];
				$res = file_get_contents($google_reCaptcha_is_valid);
				$json = json_decode( $res );
			}break;
			
			default:
				# code...
				break;
		}
	}
	echo json_encode($json);
?>