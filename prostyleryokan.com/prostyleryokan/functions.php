<?php

define('TEMPLATE_ASSETS_PATH', get_stylesheet_directory_uri().'/assets');

function kpropvn_theme_support() {

	show_admin_bar( false );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	// global $content_width;
	// if ( ! isset( $content_width ) ) {
	// 	$content_width = 580;
	// }

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'kpropvn-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'kpropvn' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kpropvn' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}

add_action( 'after_setup_theme', 'kpropvn_theme_support' );


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function kpropvn_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'kpropvn' ),
		// 'expanded' => __( 'Desktop Expanded Menu', 'kpropvn' ),
		// 'mobile'   => __( 'Mobile Menu', 'kpropvn' ),
		'footer'   => __( 'Footer Menu', 'kpropvn' ),
		// 'social'   => __( 'Social Menu', 'kpropvn' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'kpropvn_menus' );


/**
 * Register and Enqueue Styles.
 */
function kpropvn_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'kpropvn-style', get_stylesheet_uri(), array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'kpropvn_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
// function kpropvn_register_scripts() {

// 	$theme_version = wp_get_theme()->get( 'Version' );

// 	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}

// 	wp_enqueue_script( 'kpropvn-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
// 	wp_script_add_data( 'kpropvn-js', 'async', true );

// }

// add_action( 'wp_enqueue_scripts', 'kpropvn_register_scripts' );




