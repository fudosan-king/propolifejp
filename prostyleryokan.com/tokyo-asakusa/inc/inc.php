<?php 

define('ASSETS_PATH', get_template_directory_uri().'/assets');
define('ASSETS_CSS_PATH', ASSETS_PATH.'/css');
define('ASSETS_SCRIPT_PATH', ASSETS_PATH.'/js');
define('ASSETS_SCRIPTEX_PATH', ASSETS_PATH.'/js_ex');
define('ASSETS_IMG_PATH', ASSETS_PATH.'/images');
define('ASSETS_FAV_PATH', ASSETS_PATH.'/favicon_package_v0.16');
define('ASSETS_BOOKING_PATH', ASSETS_PATH.'/booking');

function the_assets_path(){
	echo ASSETS_PATH;
}
function the_css_path(){
	echo ASSETS_CSS_PATH;
}
function the_script_path(){
	echo ASSETS_SCRIPT_PATH;
}
function the_script_ex_path(){
	echo ASSETS_SCRIPTEX_PATH;
}
function the_booking_script_path(){
	echo ASSETS_BOOKING_PATH.'/js';
}
function the_img_path(){
	echo ASSETS_IMG_PATH;
}
function the_fav_path(){
	echo ASSETS_FAV_PATH;
}

// show_admin_bar(false);

function my_acf_init() {
	// AIzaSyBc5E3kYWk3QVzgzWdBOxOuP7l8lLKmHpE
	$key = get_field( 'google_api', 'option' );
	acf_update_setting('google_api_key', $key);
}

add_action('acf/init', 'my_acf_init');

// User defined function
function get_nav_child_menu($menus, $parent_menu){
    $child_menus = array();
    foreach($menus as $menu){
        if($menu->menu_item_parent == $parent_menu){
            array_push($child_menus, $menu);
        }
    }
    return $child_menus;
}

function get_nav_lang($isMobile=false){
    global $q_config;

    if(function_exists('qtranxf_getLanguage')){
		$currentLanguage = qtranxf_getLanguage();
		$currentLangName = strtoupper(qtranxf_getLanguageNameNative( $currentLanguage ));

		$classBoxLang = (!$isMobile) ? '' : 'sm';
		$classNavLink = (!$isMobile) ? '' : 'btnLang';

		echo ' <li class="nav-item dropdown fadeup box_lang '.$classBoxLang.'">';
		echo '<a class="nav-link '.$classNavLink.'" onclick="return false;">Language <i class="fal fa-angle-down fa-lg"></i></a>';
		echo '<ul class="navbar-nav">';
		foreach ( qtranxf_getSortedLanguages() as $language ) {
			$name 	 = strtoupper(qtranxf_getLanguageNameNative( $language ));
			echo '<li class="nav-item"><a class="nav-link" href="' . qtranxf_convertURL( '', $language, false, true ) . '">' . $name . '</a></li>';
		}
		echo '</ul>';
		echo '</li>';
	}
}


function _isNotNull($obj){
	return (isset($obj) && !empty($obj) && !is_null($obj)) ? true : false;
}

function _get($obj){
	return _isNotNull($obj) ? $obj : '';
}

function _echo($obj){
	echo _get($obj);
}

function _getPostThumbnail($postID, $size="origin"){
	$res = null;
	$thumbnail = wp_get_attachment_image_url( get_post_thumbnail_id( $postID ), $size = $size, $icon = false );
	$res = _isNotNull($thumbnail) ? array('url'=> $thumbnail) : $res;
	return json_decode(json_encode($res)) ;
}

function _getTag_link($objLink, $class=''){
	$html = '';
	if(_isNotNull($objLink))
		$html = sprintf('<a href="%s" target="%s" class="btn btn_detail %s">%s <i class="fal fa-long-arrow-right fa-2x"></i></a>', $objLink->url, $objLink->target, $class, $objLink->title);
	return $html;
}

function _generateTag_link($objLink, $class=''){
	echo _getTag_link($objLink, $class);
}

function _getTag_image($objImg, $class=''){
	$html = '';
	if(_isNotNull($objImg))
		$html = sprintf('<img src="%s" alt="" class="img-fluid %s">', $objImg->url, $class);
	return $html;
}

function _generateTag_image($objImg, $class=''){
	echo _getTag_image($objImg, $class);
}

// ACF function
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'UniqueK Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
?>