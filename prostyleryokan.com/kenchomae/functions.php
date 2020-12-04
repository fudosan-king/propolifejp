<?php 
include_once 'inc/inc.php';
include_once 'inc/acf-object/acf-home.php';
include_once 'inc/acf-object/acf-outline.php';
include_once 'inc/acf-object/acf-rooms.php';
include_once 'inc/acf-object/acf-cpt-rooms.php';
include_once 'inc/acf-object/acf-table-outline.php';
include_once 'inc/acf-object/acf-terms.php';
include_once 'inc/acf-object/acf-restaurant.php';
include_once 'inc/acf-object/acf-gallery.php';

if (!function_exists('uniquek_setup_theme')){
	function uniquek_setup_theme(){
		load_theme_textdomain( 'uniquek', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'top' => __( 'Primary', 'uniquek' ),
				'footer' => __( 'Footer Menu', 'uniquek' ),
				// 'social' => __( 'Social Links Menu', 'uniquek' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		add_theme_support( 'responsive-embeds' );

	}
}
add_action( 'after_setup_theme', 'uniquek_setup_theme' );

if (!function_exists('display_nav_menus')){
	function display_nav_menus(){
		global $post;

		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['top'];
		$topNav = wp_get_nav_menu_items($menuID);
		if (count($topNav)>0){
			$active = is_front_page() ? 'active' : "";
			echo '<ul class="navbar-nav navbar-mobile mr-0">';
			echo '<li class="nav-item box_logo_sm">
			<a class="logo_sm" href="'.home_url().'"><img src="'.ASSETS_IMG_PATH.'/nahakenchomae.png" alt="" class="img-responsive" width="186"></a>
			</li>';
			foreach ($topNav as $nav){
				/* Action here */
				$active = $nav->object_id == $post->ID ? 'active' : "";
				
				if(strtolower($nav->post_title) == 'gallery' && !is_user_logged_in())
					continue;

				if ($nav->menu_item_parent == 0){
					$childMenu = get_nav_child_menu($topNav, $nav->ID);
					$isDropdown = (count($childMenu)>0) ? 'dropdown fadeup': '';
					$arrowDropdown = (count($childMenu)>0) ? ' <i class="fal fa-angle-down fa-lg"></i>' : '';
					?>
					<li class="nav-item <?php echo $active.' '.$isDropdown; ?>" >
						<a class="nav-link" href="<?php echo $nav->url; ?>" target="<?php echo $nav->target; ?>" id="navbar-<?php echo $nav->ID; ?>"><?php echo $nav->title.$arrowDropdown; ?> </a>
						<?php
						if (count($childMenu)>0){

							echo '<ul class="navbar-nav" id="navbar-'.$nav->ID.'">';
							foreach($childMenu as $cmenu){
								?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $cmenu->url; ?>" target="<?php echo $cmenu->target; ?>"><?php echo $cmenu->title; ?></a>
								</li>
								<?php
							}

							echo '</ul>';
						}
						?>
					</li>
					<?php

				}else{

				}

			}

			// get_nav_lang();

			echo '<li class="nav-item d-none d-md-block"><a class="nav-link btnBooking" href="#" data-tripla-booking-widget="search">'.__('Booking', 'uniquek').' <i class="fal fa-angle-right fa-lg"></i></a></li>';

			echo '<li class="nav-item d-block d-md-none"><a class="nav-link btnBooking" href="#" data-tripla-booking-widget="search" >'.__('Booking', 'uniquek').' <i class="fal fa-angle-right fa-lg"></i></a></li>';

			echo '<li class="nav-item"><a class="nav-link btnBooking btn_locationtohotel mt-0" href="https://goo.gl/maps/w4LWooKFUsoipf1v5" target="_blank">'.__('最寄り駅からホテルまでのルート', 'uniquek').'<i class="fal fa-angle-right fa-lg"></i></a></li>';

			// get_nav_lang(true);
			
			
			echo '</ul>';

		}
	}	
}
add_action( 'nav_generate_top', 'display_nav_menus');

if (!function_exists('display_footer_menus')){
	function display_footer_menus(){
		global $post;

		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['footer'];
		$footerMenu = wp_get_nav_menu_items($menuID);
		if (count($footerMenu)>0){

			echo ' <div class="row">';

			$count = 0;
			foreach ($footerMenu as $nav){
				/* Action here */
			

				if ($nav->menu_item_parent == 0){
					$childMenu = get_nav_child_menu($footerMenu, $nav->ID);
					// $classOffset = $count == 0 ? 'offset-md-1' : '';
					echo '
					<div class="col-12 col-md-3">
                    	<div class="row">
		                    <div class="col-4 col-md-12">
		                        <h6>'.$nav->title.'</h6>
		                    </div>';
					
						if (count($childMenu)>0){

							echo '<div class="col-8 col-md-12">
                            <ul class="list_footer_bottom '.$nav->classes[0].'">';
							foreach($childMenu as $cmenu){
								?>
								<li><a href="<?=$cmenu->url;?>" class="<?=implode(" ", $cmenu->classes);?>" target="<?=$cmenu->target;?>"><?=$cmenu->title;?></a></li>
								<?php
							}

							echo '</div>
							</ul>';
						}

					echo '</div>
					</div>';
					$count++;
				}

				

			}		
			
			echo '</div>';

		}
	}	
}
add_action( 'footer_generate_menus', 'display_footer_menus');

function uniquek_head_plus_scripts() {
    print_r(get_field('header_scripts', 'option'));
}
add_action( 'wp_head_plus', 'uniquek_head_plus_scripts');

function uniquek_body_plus_scripts() {
    print_r(get_field('body_scripts', 'option'));
}
add_action( 'wp_body_plus', 'uniquek_body_plus_scripts');

function uniquek_footer_plus_scripts() {
    print_r(get_field('footer_scripts', 'option'));
}
add_action( 'wp_footer_plus', 'uniquek_footer_plus_scripts');

function uniquek_scripts() {

    wp_enqueue_style( 'uniquek-style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    // wp_enqueue_script('uniquek-js-ex', get_template_directory_uri().'/assets/js_ex/script_ex.js', array(), '1.2');

    $langRegionStr = '';

    if(function_exists('qtranxf_getLanguage')){
    	$currentLanguage = qtranxf_getLanguage();

	    switch ($currentLanguage) {
	    	case 'en':
	    		$langRegionStr = '&language=en&region=US';
	    		break;

	    	case 'zh':
	    		$langRegionStr = '&language=zh-CN&region=CN';
	    		break;

	    	case 'tw':
	    		$langRegionStr = '&language=zh-TW&region=CN';
	    		break;
	    	
	    	
	    	default:
	    		$langRegionStr = '&language=ja&region=JP';
	    		break;
	    }
    }

 //    wp_enqueue_script('uniquek-js-google-api', 'https://maps.googleapis.com/maps/api/js?key='.get_field( 'google_api', 'option' ).$langRegionStr, array(), '1.1');
	// wp_enqueue_script('uniquek-js-google-map', get_theme_file_uri( '/assets/js_ex/google_map_opt.js' ), array(), '1.1');
}
add_action( 'wp_enqueue_scripts', 'uniquek_scripts');

function my_custom_fonts() {
  echo '<style>
    @media screen and (max-width: 420px){
	    html {margin-top: 0px!important;}
	    #wpadminbar {display: none;}
	}
  </style>';
}
add_action('wp_footer', 'my_custom_fonts'); 

if (!function_exists('set_content_banner')){
	function set_content_banner(){
		global $post;
		$page_name = $post->post_name;

		if (is_page()){
			if(is_front_page()){
				get_template_part('template-part/banner/page/banner', 'home');
			}
			else{
				get_template_part('template-part/banner/page/banner', 'default');
			}
		} else{
			get_template_part('template-part/banner/post/banner', $post->post_type);
		}
		
		
	}
}
add_action('content_banner', 'set_content_banner');

if (!function_exists('set_smooth_script')){
	function set_smooth_script(){
		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>';
	}
}
add_action('wp_footer', 'set_smooth_script');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

function login_logo_one() { 
	// $custom_logo_id = get_theme_mod( 'custom_logo' );
	// $image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
	$image = get_template_directory_uri().'/assets/images/1x/asakusa-wide_logo_black@2x@2x.png';
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(<?php echo $image; ?>);
background-size: 100%;
width: 320px;
height: 100px;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'login_logo_one' );

?>