<?php 

function sgvink_login_logo() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	// $image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
	$image = SGVINK_IMAGES_URI."/1x/ico.png";
	?> 
		<style type="text/css"> 
			body.login div#login h1 a {
				background-image: url(<?php echo $image; ?>);
				background-size: cover;
				width: 130px;
				height: 130px;
				margin-bottom: 50px;
			} 
		</style>
	<?php 
} 
add_action( 'login_enqueue_scripts', 'sgvink_login_logo' );

function sgvink_admin_style(){
    // wp_register_style( 'custom_wp_admin_css', TEMPLATE_DIR.'/css_ex/style_admin_ex.css', false, '1.0.0' );
    // wp_enqueue_style( 'custom_wp_admin_css' );

    wp_enqueue_style( 'custom-admin-styles', SGVinK::get_css_uri()."sgvink_admin.css", array(), $ver = false, $media = 'all' );
	wp_enqueue_script( 'custom-admin-scripts', SGVinK::get_js_uri()."sgvink_admin.js", array(), $ver = false, $in_footer = false );
}
add_action('admin_enqueue_scripts', 'sgvink_admin_style');

show_admin_bar( false );

?>