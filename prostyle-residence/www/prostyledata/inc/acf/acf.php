<?php 

// class SGVinK_ACF
// {
	
// 	function __construct()
// 	{
		
// 	}

// 	function get_acf_field($FieldName = "", $IsSubField = false) {
// 		if (!$IsSubField) {

// 		}else{
			
// 		}
// 	}

// }

// SGVinK::init();



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Prostyle Theme',
		'menu_slug' 	=> 'sgvink-theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => false,
		'redirect'		=> true,

	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings Page',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'sgvink-theme-settings',
		'update_button'		=> __('Update', 'acf'),
		'updated_message'	=> __("Prostyle Theme Options Updated", 'acf'),
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Extras Settings Page',
		'menu_title'	=> 'Extras',
		'parent_slug'	=> 'sgvink-theme-settings',
		'update_button'		=> __('Update', 'acf'),
		'updated_message'	=> __("Prostyle Theme Options Updated", 'acf'),
	));
	
}

// Remove ACF inline styles for WYSIWYG
function my_acf_input_admin_footer() { ?>
	<script type="text/javascript">
		(function($) {
			acf.add_action('wysiwyg_tinymce_init', function( ed, id, mceInit, $field ){
				$(".acf-field .acf-editor-wrap iframe").removeAttr("style");
			});
		})(jQuery);	
	</script>
<?php }
add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');

function sgvink_addition_header () {
	echo get_field('header_scripts', 'option');
}
add_action( 'wp_head', 'sgvink_addition_header' );

function sgvink_addition_body () {
	echo get_field('body_scripts', 'option');

	// FACEBOOK SDK
	echo '<!-- Load Facebook SDK for JavaScript -->';
	echo '<div id="fb-root"></div>';
	echo "<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>";
}
add_action( 'wp_body', 'sgvink_addition_body' );

function sgvink_addition_footer () {
	echo get_field('footer_scripts', 'option');
}
add_action( 'wp_footer', 'sgvink_addition_footer' );

?>