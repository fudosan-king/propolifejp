<!-- ABOUT ME -->
<?php 
	global $post;
	$tmp = $post;
	$post = get_page_by_path( 'about-me' );
	$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'medium', $icon = false );
	$aboutTitle = sprintf("More %s", $post->post_title);
	$aboutMePermalink = get_permalink( $post->ID, $leavename = false );
	$aboutExcerpt = get_the_excerpt(get_page_by_path( 'about-me' ));
	wp_reset_postdata();
	$post = $tmp;
?>
<div class="box_post aboutme">
	<h2><?php echo $aboutTitle; ?></h2>
	<div class="img_box_post">
		<a href="<?php echo $aboutMePermalink; ?>">
			<img src="<?php echo $thumnailImage; ?>" alt="" class="img-fluid">
		</a>
	</div>
	<!-- <h4>Rosie Simmons</h4>
	<p>Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut
	aliquip ex sint occaecat cupidatat non.</p> -->
	<?php echo $aboutExcerpt; ?>
</div>

<!-- FEATURED POST -->
<?php 
	/*
	 * The WordPress Query class.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 */
	$args = array(

		// Type & Status Parameters
		'post_type'   => 'post',
		'post_status' => 'publish',

		// Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',
		'ignore_sticky_posts' => false,

		// Pagination Parameters
		'posts_per_page'         => -1,

		// Custom Field Parameters
		'meta_query'     => array(
			array(
				'key'     => 'featured',
				'value'   => 'yes',
				'compare' => 'LIKE',
			),
		),

		// Permission Parameters -
		'perm' => 'readable',

		// Parameters relating to caching
		// 'no_found_rows'          => false,
		// 'cache_results'          => true,
		// 'update_post_term_cache' => true,
		// 'update_post_meta_cache' => true,

	);

	$query = new WP_Query( $args );

	if($query->have_posts()):
		echo '<div class="box_post featuredPosts">
			<h2>Featured Posts</h2>';
		while($query->have_posts()): $query->the_post();
			// print_r($post);
			$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'medium', $icon = false );
			?>

			<div class="featuredPosts_item">
				<div class="img_box_post">
					<a href="<?php the_permalink(); ?>" title=""><img src="<?php echo $thumnailImage; ?>" alt="" class="img-fluid"></a>
				</div>
				<a class="link_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<div class="row">
					<div class="col col-sm-6">
						<a href="#" class="date_post"><?php the_time(); ?></a>
					</div>
					<div class="col col-sm-6">
						<a href="#" class="post_counters_item">
							<span class="post_counters_number"><?php echo $number_of_comment = "<fb:comments-count href=" . get_permalink($post->ID) . " ></fb:comments-count>"; ?></span>
							<span class="post_counters_label">Comments</span>
						</a>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		echo '</div>';
		wp_reset_query();
		wp_reset_postdata();
	endif;
?>