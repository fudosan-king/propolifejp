<?php 

define('TEMPLATE_DIR', get_stylesheet_directory_uri()."/assets");

function prostyleryokan_setup(){

	load_theme_textdomain( 'prostyleryokan' );

	#add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'prostyleryokan-featured-image', 2000, 1200, true );

	add_image_size( 'prostyleryokan-thumbnail-avatar', 100, 100, true );

	register_nav_menus( array (
		'top' => __('Top Menu', 'prostyleryokan'),
		'top-support' => __('Top Support Menu', 'prostyleryokan'),
		'bottom' => __('Bottom Menu', 'prostyleryokan'),
	) );

	add_theme_support(
		'custom-logo', array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	show_admin_bar( false );

}
add_action( 'after_setup_theme', 'prostyleryokan_setup');

function prostyleryokan_scripts(){
	wp_enqueue_style( 'prostyleryokan-style', get_stylesheet_uri() );
	

	wp_enqueue_style( 'prostyleryokan-common', get_theme_file_uri( '/assets/css/styles.css' ), array( 'prostyleryokan-style' ), '1.1' );
	wp_enqueue_style( 'prostyleryokan-mobile', get_theme_file_uri( '/assets/css/mobile.css' ), array( 'prostyleryokan-style' ), '1.1' );

	wp_enqueue_style( 'prostyleryokan-style-ex', get_theme_file_uri( '/assets/css_ex/style_ex.css' ), array( 'prostyleryokan-style' ), '1.1' );

	// wp_enqueue_script('prostyleryokan-js-ex', get_theme_file_uri( '/assets/js_ex/script_ex.js' ), array(), '1.1');
	wp_enqueue_script('prostyleryokan-js-google-api', 'https://maps.googleapis.com/maps/api/js?key='.get_option( 'rgmk_google_map_api_key' ), array(), '1.1');
	wp_enqueue_script('prostyleryokan-js-google-map', get_theme_file_uri( '/assets/js_ex/google_map_opt.js' ), array(), '1.1');


}
add_action( 'wp_enqueue_scripts', 'prostyleryokan_scripts');


// add_filter( 'excerpt_length', 'custom_excerpt_length' );
// function custom_excerpt_length(){
// 	return 50;
// }

function custom_short_excerpt($excerpt){
	$strMax = strlen($excerpt);
	$num = 50;
	
	if ($strMax > $num)
		$excerpt = mb_substr($excerpt, 0, $num).' [...]';
	
	return $excerpt;
}
add_filter('the_excerpt', 'custom_short_excerpt');

add_filter('the_time', 'dynamictime');
function dynamictime() {
  global $post;
  $date = $post->post_date;
  $time = get_post_time('G', true, $post);
  $mytime = time() - $time;
  if($mytime > 0 && $mytime < 2*24*60*60)
    $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
  else
    $mytimestamp = date(get_option('date_format'), strtotime($date));
  return $mytimestamp;
}

// add_filter('wp_title', 'prostyleryokan_title');
// function prostyleryokan_title( $title )
// {

//     // Return my custom title
//     return sprintf("%s %s", $title, get_bloginfo('name'));
// }

// Extras Funcions

function my_acf_init() {
	// AIzaSyBc5E3kYWk3QVzgzWdBOxOuP7l8lLKmHpE
	$key = get_option( 'rgmk_google_map_api_key' );
	
	acf_update_setting('google_api_key', $key);
}
add_action('acf/init', 'my_acf_init');

function acf_get_layout_label($field, $layout_name){
	$layouts = get_field_object($field)['layouts'];
	$key = array_search($layout_name,array_column($layouts, 'name', 'key'));
	return $layouts[$key]['label'];
}

function woo_agr_get_all_product_with_taxonomy($taxonomy){
	return array(
						
						
		// Type & Status Parameters
		'post_type'   => 'product',
		'post_status' => 'publish',


		// Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',



		// Pagination Parameters
		'posts_per_page'         => -1,

		// Taxonomy Parameters
		'tax_query' => array(
			array(
				'taxonomy'         => 'product_cat',
				'field'            => 'slug',
				'terms'            => $taxonomy,
				'operator'         => 'IN',
			),
		),

		// Permission Parameters -
		'perm' => 'readable',

		// Parameters relating to caching
		'no_found_rows'          => false,
		'cache_results'          => true,
		'update_post_term_cache' => true,
		'update_post_meta_cache' => true,

	);
}

function get_nav_child_menu($menus, $parent_menu){
	$child_menus = array();
	foreach($menus as $menu){
		if($menu->menu_item_parent == $parent_menu){
			array_push($child_menus, $menu);
		}
	}
	return $child_menus;
}

add_action( 'ninja_forms_display_js', 'prefix_track_form_submission' );
function prefix_track_form_submission() {
    ?>
    
    <script>
    //<![CDATA[
        $( '.ninja-forms-form' ).on( 'submitResponse', function( e, response ) {
            var errors = response.errors;
            if ( errors == false ) {
                // This is where you put the tracking code. This only fires if form submission is successfull
                dataLayer.push({"event": "inquiry-complete"});
            }
        });
    //]]>
    </script>
    
    <?php
}

// add_action( 'admin_init', 'bb_remove_yoast_seo_admin_filters', 20 );
// function bb_remove_yoast_seo_admin_filters() {
//     global $wpseo_meta_columns ;
//     if ( $wpseo_meta_columns  ) {
//         remove_action( 'restrict_manage_posts', array( $wpseo_meta_columns , 'posts_filter_dropdown' ) );
//         remove_action( 'restrict_manage_posts', array( $wpseo_meta_columns , 'posts_filter_dropdown_readability' ) );
//     }
// }

function prostyleryokan_login_logo_one() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(<?php echo $image; ?>);
background-size: 100%;
width: 135px;
height: 120px;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'prostyleryokan_login_logo_one' );

function load_custom_wp_admin_style(){
    wp_register_style( 'custom_wp_admin_css', TEMPLATE_DIR.'/css_ex/style_admin_ex.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

require_once 'inc/functions_ext.php';

?>