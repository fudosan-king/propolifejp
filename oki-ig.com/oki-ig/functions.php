<?php 

define('TEMPLATE_DIR',get_template_directory_uri()."/assets");

function okiig_setup(){



	load_theme_textdomain( 'okiig');

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'okiig-featured-image', 2000, 1200, true );
	add_image_size( 'okiig-thumbnail-avatar', 100, 100, true );

	register_nav_menus( array(
		'top' => __('Top Menu', 'okiig'),
		'bottom' => __('Bottom Menu', 'okiig'),
		'footer' => __('Footer Menu', 'okiig'),
	) );

	add_theme_support(
		'custom-logo', array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	add_filter('show_admin_bar', '__return_false');
}
add_action( 'after_setup_theme', 'okiig_setup' );

function okiig_scripts(){
	wp_enqueue_style( 'okiig-style', get_stylesheet_uri() );

	wp_enqueue_style( 'okiig-common-style', get_theme_file_uri( 'assets/css/styles.css' ), array('okiig-style') );
	wp_enqueue_style( 'okiig-mobile-style', get_theme_file_uri( 'assets/css/mobile.css' ), array('okiig-style') );

	// BxSlider 4 Master
	wp_enqueue_script( 'okiig-bxslider', get_theme_file_uri( '/assets/bxslider-4-master/jquery.bxslider.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'okiig-bxslider-easing', get_theme_file_uri( '/assets/bxslider-4-master/jquery.easing.1.3.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_style( 'okiig-bxslider-style', get_theme_file_uri( 'assets/bxslider-4-master/jquery.bxslider.css' ), array('okiig-style') );
}
add_action( 'wp_enqueue_scripts', 'okiig_scripts' );

add_action( 'admin_init', 'bb_remove_yoast_seo_admin_filters', 20 );
function bb_remove_yoast_seo_admin_filters() {
    global $wpseo_meta_columns ;
    if ( $wpseo_meta_columns  ) {
        remove_action( 'restrict_manage_posts', array( $wpseo_meta_columns , 'posts_filter_dropdown' ) );
        remove_action( 'restrict_manage_posts', array( $wpseo_meta_columns , 'posts_filter_dropdown_readability' ) );
    }
}

function okiig_login_logo_one() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(<?php echo $image; ?>);
background-size: 100%;
width: 90px;
height: 90px;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'okiig_login_logo_one' );

require_once 'inc/functions_extra.php';

?>