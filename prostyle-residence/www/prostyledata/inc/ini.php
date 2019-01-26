<?php 
define ("SGVINK_INCLUDE_PATH", get_template_directory().'/inc');

define ("SGVINK_LIBRARIES_PATH", get_template_directory().'/lib');
define ("SGVINK_LIBRARIES_URI", get_template_directory_uri().'/lib');

define ("SGVINK_ASSETS_PATH", get_template_directory().'/assets');
define ("SGVINK_ASSETS_URI", get_template_directory_uri().'/assets');
define ("SGVINK_STYLESHEET_URI", SGVINK_ASSETS_URI.'/css');
define ("SGVINK_SCRIPTS_URI", SGVINK_ASSETS_URI.'/js');
define ("SGVINK_IMAGES_URI", SGVINK_ASSETS_URI.'/images');
define ("SGVINK_VIDEOS_URI", SGVINK_ASSETS_URI.'/videos');

define ("SGVINK_VAR_URI", get_template_directory_uri().'/var');
define ("SGVINK_VAR_IMAGES_URI", SGVINK_VAR_URI.'/images');
define ("SGVINK_VAR_VIDEOS_URI", SGVINK_VAR_URI.'/videos');

class SGVinK
{
	
	function __construct()
	{
		
	}

	public static function init() {
		
	}

	/*--- PATH & URI FUNCTIONS ---*/
	
	// Assets URI
	public static function the_assets_uri(){
		echo SGVINK_ASSETS_URI;
	}
	public static function get_assets_uri(){
		return SGVINK_ASSETS_URI."/";
	}

	// Stylesheet URI
	public static function the_css_uri(){
		echo SGVINK_STYLESHEET_URI;
	}
	public static function get_css_uri(){
		return SGVINK_STYLESHEET_URI."/";
	}

	// Scritps URI
	public static function the_js_uri(){
		echo SGVINK_SCRIPTS_URI;
	}
	public static function get_js_uri(){
		return SGVINK_SCRIPTS_URI."/";
	}

	// Images URI
	public static function the_images_uri(){
		echo SGVINK_IMAGES_URI;
	}
	public static function get_images_uri(){
		return SGVINK_IMAGES_URI."/";
	}

	// Images PATH
	public static function the_images_path(){
		echo SGVINK_ASSETS_PATH."/images";
	}
	public static function get_images_path(){
		return SGVINK_ASSETS_PATH."/images/";
	}

	// Videos URI
	public static function the_videos_uri(){
		echo SGVINK_VIDEOS_URI;
	}
	public static function get_videos_uri(){
		return SGVINK_VIDEOS_URI."/";
	}

}

// NOTE: $theme is main Variable;
$theme = new SGVinK();

// -------------------------------------------- //

/* INCLUDE CONTROL */
require_once SGVINK_INCLUDE_PATH."/admin/admin.php";
require_once SGVINK_INCLUDE_PATH."/functions/functions-setup.php";
require_once SGVINK_INCLUDE_PATH."/register/post-type.php";
require_once SGVINK_INCLUDE_PATH."/acf/acf.php";
require_once SGVINK_INCLUDE_PATH."/woocommerce/woocommerce.php";

// require_once SGVINK_LIBRARIES_PATH."/ini.php";


?>