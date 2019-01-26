<?php 

class TEMPLATE_ARGS 
{
	/* ARGS QUERY TEMPLATE */
	function args_posts ($post_type="magazine", $post_per_page=-1, $paged=1, $ignore_sticky=true) {
		
		$post_type = isset($post_type) && !empty($post_type) ? $post_type : "magazine";
		$post_per_page = isset($post_per_page) && !empty($post_per_page) ? $post_per_page : -1;
		$paged = isset($paged) && !empty($paged) ? $paged : 1;
		$ignore_sticky = isset($ignore_sticky) && !empty($ignore_sticky) ? $ignore_sticky : true;

		$args = array(
	
			// Type & Status Parameters
			'post_type'   => "magazine",
			'post_status' => 'publish',
	
			// Order & Orderby Parameters
			'order'               => 'DESC',
			'orderby'             => 'ID',
			'ignore_sticky_posts' => $ignore_sticky,
	
			// Pagination Parameters
			'posts_per_page'         => $post_per_page,
			// 'posts_per_archive_page' => 10,
			// 'nopaging'               => false,
			'paged'                  => $paged,
			// 'offset'                 => 3,
				
	
			// Permission Parameters -
			'perm' => 'readable',
	
			// Parameters relating to caching
			'no_found_rows'          => false,
			'cache_results'          => true,
			'update_post_term_cache' => true,
			'update_post_meta_cache' => true,
	
		);

		return $args;
	}
}
	

?>