<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Register Support Theme.
 */
if ( ! function_exists( 'miyanomori_setup' ) ) :
	function miyanomori_setup() {
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'miyanomori_setup' );


/**
 * Register and Enqueue Styles.
 */
function miyanomori_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'miyanomori-style', get_stylesheet_uri(), array(), $theme_version );

	// Add print CSS.
	// wp_enqueue_style( 'miyanomori-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
}
add_action( 'wp_head', 'miyanomori_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function miyanomori_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// wp_enqueue_script( 'miyanomori-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );

}

add_action( 'wp_footer', 'miyanomori_register_scripts' );


function ajax_miyanomori_init() {

    wp_register_script( 'ajax-miyanomori-script', get_template_directory_uri()  . '/assets/js/ajax-miyanomori-script.js', array('jquery') );
    wp_enqueue_script( 'ajax-miyanomori-script' );

    wp_register_style('miyanomori_admin_style',get_template_directory_uri()  . '/assets/admin/css/miyanomori-script.css', 'all');
    wp_enqueue_style( 'miyanomori_admin_style' );

    wp_register_script( 'miyanomori-admin-script', get_template_directory_uri()  . '/assets/admin/js/miyanomori-script.js', array('jquery') );
    wp_enqueue_script( 'miyanomori-admin-script' );
    
    wp_localize_script( 'ajax-miyanomori-script', 'ajax_miyanomori_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'jp_national_holidays_min' => get_template_directory_uri().'/assets/data/jp_national_holidays_min.json',
        'redirecturl' => home_url(),
        'loadingmessage' => __( 'Sending user info, please wait...' )
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
    add_action( 'wp_ajax_nopriv_ajaxregister', 'ajax_register' );
}

add_action( 'init', 'ajax_miyanomori_init' );

// Check if users input information is valid
function ajax_login() {
    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

	//Nonce is checked, get the POST data and sign user on
	$info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

	$user_signon = wp_signon( $info, false );
	if ( is_wp_error( $user_signon )) {
	    echo json_encode( array( 'loggedin'=>false, 'message'=>__( 'Wrong username or password!' )));
	} else {
	    echo json_encode( array( 'loggedin'=>true, 'message'=>__('Login successful, redirecting...' )));
	}

	die();
}

// Check if users input information is valid
function ajax_register()
{
    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

	//Nonce is checked, get the POST data and sign user on
	$user_login = $_POST['userlogin'];
	$user_email = $_POST['useremail'];
	
	$register  = register_new_user( $user_login, $user_email );

	if ( is_wp_error( $register )) {
	    echo json_encode( array( 'loggedin'=>false, 'message'=> $register->errors));
	} else {
	    echo json_encode( array( 'loggedin'=>true, 'message'=>__('Register successful, PLEASE CHECK EMAIL TO GET PASSWORD ...' )));
	}

	die();
}


function get_nav_lang($isMobile=false){
    global $q_config;

    if(function_exists('qtranxf_getLanguage')){
		$currentLanguage = qtranxf_getLanguage();
		$currentLangName = strtoupper(qtranxf_getLanguageNameNative( $currentLanguage ));

		$classBoxLang = (!$isMobile) ? '' : 'sm';
		$classNavLink = (!$isMobile) ? '' : 'btnLang';

		echo ' <li class="nav-item dropdown dropdown-right fade '.$classBoxLang.'">';
		$locale = get_locale();
		$lang = substr( $locale, 3, 4 );
		echo '<a class="nav-link '.$classNavLink.'" onclick="return false;">'.$lang.'<i class="fal fa-angle-down fa-lg"></i></a>';
		echo '<ul class="navbar-nav">';
		foreach ( qtranxf_getSortedLanguages() as $language ) {
			$name 	 = strtoupper(qtranxf_getLanguageNameNative( $language ));
			$locale = $q_config['locale'][ $language ];
			$lang = substr( $locale, 3, 4 );
			echo '<li class="nav-item"><a class="nav-link" href="' . qtranxf_convertURL( '', $language, false, true ) . '">' . $lang . '</a></li>';
		}
		echo '</ul>';
		echo '</li>';
	}
}

add_action('miyanomori_nav_language','get_nav_lang');

add_shortcode( "Miyanomori_Blogs","miyanomori_blogs_type");

function miyanomori_blogs_type($atts){
	extract(shortcode_atts( array(
		'type' => 'small_image',
		"ignore_sticky_posts" => "top",
		"orderby" => "ID",
		"order" => "ASC"
		), $atts));

	if(get_query_var('paged')):
		$paged = get_query_var('paged');
	elseif(get_query_var('page')):
		$paged = get_query_var('page');
	else:
		$paged = 1;
	endif;

	$args = array(
		'post_type' 			=> 'post',
		'orderby' => $orderby,
		'order'   => $order,
		'paged' => $paged,
	);	

	

	$blogs = new WP_Query($args);	
	ob_start();
	$maxpage = $blogs->max_num_pages;
	if($blogs->have_posts()):?>
		<div class="content_blog">
			<?php while ($blogs->have_posts()):?>
				<?php $blogs->the_post(); ?>
				<?php get_template_part( 'template-parts/content'); ?>
			<?php endwhile; ?>
			<?php 
				 $GLOBALS['wp_query']->max_num_pages = $blogs->max_num_pages;
                the_posts_pagination( array(
                   'mid_size' => 1,
                   'prev_text' => __( 'Back', 'green' ),
                   'next_text' => __( 'Onward', 'green' ),
                   'screen_reader_text' => __( 'Posts navigation' )
                ) ); 
			wp_reset_postdata();
			?>
		</div>
		
	<?php endif; /* end if*/ 		
	
	$content=ob_get_contents();
	ob_get_clean();
	return $content;
}




// add_action( 'admin_enqueue_scripts', 'miyanomori_admin_enqueue' );

// /**
//  * Register and enqueue Scripts and Styles
//  */
// function miyanomori_admin_enqueue()
// {
//     wp_register_style(
//         'miyanomori_admin_style', // Style handle
//         get_template_directory_uri()  . '/assets/admin/css/miyanomori-script.css', // Style URL
//         null, // Dependencies
//         null, // Version
//         'all' // Media
//     );
//     wp_enqueue_style( 'miyanomori_admin_style' );

//     wp_register_script(
//         'miyanomori_admin_script', // Script handle
//         get_template_directory_uri()  . '/assets/admin/js/miyanomori-script.js', // Script URL
//         array( 'jquery' ), // Dependencies. jQuery is enqueued by default in admin
//         null, // Version
//         true // In footer
//     );
//     wp_enqueue_script( 'miyanomori_admin_script' );
// }
