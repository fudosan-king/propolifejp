<?php 

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function real_estate_register() {

	$labels = array(
		'name'               => __( 'Real Estates', 'sgvink' ),
		'singular_name'      => __( 'Real Estate', 'sgvink' ),
		'add_new'            => _x( 'Add New Real Estate', 'sgvink', 'sgvink' ),
		'add_new_item'       => __( 'Add New Real Estate', 'sgvink' ),
		'edit_item'          => __( 'Edit Real Estate', 'sgvink' ),
		'new_item'           => __( 'New Real Estate', 'sgvink' ),
		'view_item'          => __( 'View Real Estate', 'sgvink' ),
		'search_items'       => __( 'Search Real Estates', 'sgvink' ),
		'not_found'          => __( 'No Real Estates found', 'sgvink' ),
		'not_found_in_trash' => __( 'No Real Estates found in Trash', 'sgvink' ),
		'parent_item_colon'  => __( 'Parent Real Estate:', 'sgvink' ),
		'menu_name'          => __( 'Real Estates', 'sgvink' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'Real Estate - Prostyle Res',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			// 'author',
			'thumbnail',
			// 'excerpt',
			'custom-fields',
			// 'trackbacks',
			// 'comments',
			// 'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'real-estates', $args );
}
add_action( 'init', 'real_estate_register' );

function news_register() {

	$labels = array(
		'name'               => __( 'News', 'sgvink' ),
		'singular_name'      => __( 'News', 'sgvink' ),
		'add_new'            => _x( 'Add New News', 'sgvink', 'sgvink' ),
		'add_new_item'       => __( 'Add New News', 'sgvink' ),
		'edit_item'          => __( 'Edit News', 'sgvink' ),
		'new_item'           => __( 'New News', 'sgvink' ),
		'view_item'          => __( 'View News', 'sgvink' ),
		'search_items'       => __( 'Search News', 'sgvink' ),
		'not_found'          => __( 'No News found', 'sgvink' ),
		'not_found_in_trash' => __( 'No News found in Trash', 'sgvink' ),
		'parent_item_colon'  => __( 'Parent News:', 'sgvink' ),
		'menu_name'          => __( 'News', 'sgvink' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'News - Prostyle Res',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			// 'trackbacks',
			// 'comments',
			// 'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'news_register' );
?>