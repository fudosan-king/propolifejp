<?php 

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

?>