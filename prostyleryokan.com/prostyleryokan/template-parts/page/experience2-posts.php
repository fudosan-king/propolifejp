<?php 
/*
* The WordPress Query class.
*
* @link https://codex.wordpress.org/Function_Reference/WP_Query
*/
$args = array(

// Type & Status Parameters
	'post_type'   => 'customer_exp',
	'post_status' => 'publish',

// Order & Orderby Parameters
	'order'               => 'DESC',
	'orderby'             => 'date',

// Pagination Parameters
	'posts_per_page'         => -1,
	// 'posts_per_archive_page' => 10,
	// 'nopaging'               => false,
	// 'paged'                  => get_query_var( 'paged' ),
	// 'offset'                 => 3,

// Permission Parameters -
	'perm' => 'readable',

// Parameters relating to caching
	'no_found_rows'          => false,
	'cache_results'          => true,
	'update_post_term_cache' => true,
	'update_post_meta_cache' => true,

);

$query = new WP_Query( $args );

if ($query->have_posts()):
	while ($query->have_posts()): $query->the_post();
		$imgUrl = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'full', $icon = false );
	?>
	<div class="col col-12 col-sm-4 customers_voice_item">
		<div class="box_customers_voice">
			<div class="customers_voice_img">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid"></a>
				<?php 
				if (!empty(get_field('customer_name'))):
					echo '<span class="customers_voice_name">'.get_field('customer_name').'</span>';
				endif;
				?>
				
			</div>
			<h5><?php the_title(); ?></h5>
			<h6><?php the_excerpt(); ?></h6>
			<a href="<?php the_permalink(); ?>" class="more_container">
				<div class="more">
					<p class="more_text">More<span class="line more_loop no_width"></span></p>
				</div>
			</a>
		</div>
	</div>
	<?php
	endwhile;
	wp_reset_query();
	wp_reset_postdata();
endif;

?>

