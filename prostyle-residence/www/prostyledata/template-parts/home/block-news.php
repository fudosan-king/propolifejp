<?php 
	
	$args = array(
			

		// Type & Status Parameters
		'post_type'   => 'news',
		'post_status' => 'publish',

		// Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',

		// Pagination Parameters
		'posts_per_page'         => -1,

		// Permission Parameters -
		'perm' => 'readable',

		// Parameters relating to caching
		// 'no_found_rows'          => false,
		// 'cache_results'          => true,
		// 'update_post_term_cache' => true,
		// 'update_post_meta_cache' => true,
	
	);
	

	$query = new WP_Query( $args );

	// print_r($query);

	if($query->have_posts()):
		echo '
		<div class="container">
			<div class="block_news">
				<div class="row">
					<div class="col col-12 col-sm-1">
						<h4>NEWS</h4>
					</div>
					<div class="col col-12 col-sm-11">';
		while($query->have_posts()): $query->the_post();	
			echo '<p><time datetime="'.get_the_date('Y-m-d').'">'.get_the_date('Y-m-d').'</time><a href="'.get_permalink().'">'.get_the_title().'</a></p>';
		endwhile;
		echo '		</div>
				</div>
			</div>
		</div>';

		wp_reset_postdata();
		wp_reset_query();
	endif;

?>
