<?php
/**
 * gakugeidai functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gakugeidai
 */

if ( ! function_exists( 'gakugeidai_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gakugeidai_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gakugeidai, use a find and replace
	 * to change 'gakugeidai' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gakugeidai', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	require_once 'class/class.utilities.php';
	require_once 'class/class.shortcode.php';
	require_once 'class/class.custom-post-types.php';
	require_once 'class/class.custom-taxonomies.php';

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	// add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary', 'gakugeidai' ),
		'footer'    => esc_html__( 'Footer', 'gakugeidai' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gakugeidai_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/**
	 * Values settings for Information.
	 */
	$pt_args[] = array(
		'slug' => 'info',
		'args' => array(
			'label'               => __( 'インフォメーション', 'gakugeidai' ),
			'description'         => __( 'インフォメーション', 'gakugeidai' ),
			'labels'              => '',
			'supports'            => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'page-attributes',
				'post-formats',
			),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-info',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		)
	);

	/**
	 * Values setting for Information category.
	 */
	$tax_args[] = array(
		'post_type_slug'    => 'info',
		'slug'              => 'cat-info',
		'args'              => array(
			'labels'            => array(
				'name'      => __( 'カテゴリ', 'gakugeidai' ),
				'menu_name' => __( 'カテゴリ', 'gakugeidai' ),
			),
			'hierarchical'      => true,
			'label'             => __( 'カテゴリ', 'gakugeidai' ),
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'info/category', 'with_front' => false ),
			'show_admin_column' => false,
		)
	);

	/**
	 * Values setting for Information tag.
	 */
	$tax_args[] = array(
		'post_type_slug'    => 'info',
		'slug'              => 'tag-info',
		'args'              => array(
			'labels'            => array(
				'name'      => __( 'タグ', 'gakugeidai' ),
				'menu_name' => __( 'タグ', 'gakugeidai' ),
			),
			'hierarchical'      => false,
			'label'             => __( 'タグ', 'gakugeidai' ),
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'info/tags', 'with_front' => false ),
			'show_admin_column' => false,
		)
	);
	CoCustomPostTypes::create_custom_post_types( $pt_args );
	CoCustomTaxonomies::create_taxonomies( $tax_args );
}
endif;
add_action( 'after_setup_theme', 'gakugeidai_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gakugeidai_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gakugeidai_content_width', 640 );
}
add_action( 'after_setup_theme', 'gakugeidai_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gakugeidai_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gakugeidai' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gakugeidai' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gakugeidai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gakugeidai_scripts() {
	wp_enqueue_script( 'jquery' );

	if ( is_front_page() ) {
		wp_enqueue_style( 'gakugeidai-movie-style', get_template_directory_uri() . '/canvas_movie/canvas.css' );

		wp_enqueue_style( 'gakugeidai-bxslider-style', get_template_directory_uri() . '/assets/js/libs/bxslider/jquery.bxslider.min.css' );
		
		wp_enqueue_script( 'gakugeidai-bxslider-js', get_template_directory_uri() . '/assets/js/libs/bxslider/jquery.bxslider.min.js', array(), '', true );
	}

	wp_enqueue_style( 'gakugeidai-style',                   get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_style( 'gakugeidai-style-static',                   get_template_directory_uri() . '/assets/css/style_static.css' );

	wp_enqueue_script( 'gakugeidai-navigatiosn',             get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gakugeidai-skip-link-focus-fix',    get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'gakugeidai-createjs',               'https://code.createjs.com/createjs-2015.11.26.min.js', array(), '', true );

	// wp_enqueue_script( 'gakugeidai-movie-js',               get_template_directory_uri() . '/canvas_movie/movie.js', array(), '', true );

	// wp_enqueue_script( 'gakugeidai-movie-init',             get_template_directory_uri() . '/canvas_movie/init.js', array(), '', true );

	wp_enqueue_script( 'gakugeidai-scripts',                get_template_directory_uri() . '/assets/js/scripts.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gakugeidai_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function disable_emoji() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );

function show_outline1() {
	ob_start();
  	get_template_part( 'template-parts/content', 'outline1' );
	return ob_get_clean();
}
add_shortcode( 'outline1', 'show_outline1' );

function show_outline2() {
	ob_start();
  	get_template_part( 'template-parts/content', 'outline2' );
	return ob_get_clean();
}
add_shortcode( 'outline2', 'show_outline2' );

function show_outline3() {
	ob_start();
  	get_template_part( 'template-parts/content', 'outline3' );
	return ob_get_clean();
}
add_shortcode( 'outline3', 'show_outline3' );

function show_outline_ad() {
	ob_start();
  	get_template_part( 'template-parts/content', 'outline-ad2' );
	return ob_get_clean();
}
add_shortcode( 'outline_ad', 'show_outline_ad' );


function custom_menu_image_link_attributes( $attributes_array ) {
	foreach ( $attributes_array as $key => $value ) {
		if ( 'href' == $key && preg_match( '/^\/.*?$/', $value ) ) {
			$attributes_array[$key] = home_url( $value  );
		}
	}
	return $attributes_array;
}
add_filter( 'menu_image_link_attributes', 'custom_menu_image_link_attributes' );


