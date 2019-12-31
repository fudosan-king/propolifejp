<?php 
header('Access-Control-Allow-Origin: *');

include_once "template-args.php";
include_once "template-json.php";

class WP_API 
{

	function __construct(){

		$this-> templArgs = new TEMPLATE_ARGS();
		$this-> templJson = new TEMPLATE_JSON();
		
	}


	/* GET FUNCTIONS */
	function get_all_posts($per_page= -1, $paged=1, $APICallback = false) {
		global $post;

		$args = $this->templArgs->args_posts("", $per_page, $paged);
		
		$query = new WP_Query( $args );

		$res = array();
		$tmp = array();

		if ($query->have_posts()):
			while ($query->have_posts()): $query->the_post();
				// print_r(get_the_category( $post->ID ));
				// echo "<hr>";
				$context = array(
					"thumbnails" => $this->get_thumbnails_by_post($post),
					"terms" => $this->get_terms_by_post($post),
				);
				array_push($tmp, $this->templJson->json_post_template($post, $context));
			endwhile;
			wp_reset_query();
			wp_reset_postdata();

		endif;

		$res['data'] = $tmp;
		$res['max_num_pages'] = $query->max_num_pages;

		return $APICallback ? json_encode($res) : $res;
		
	}

	function get_popular_posts($APICallback = false) {
		global $post;

		$args = $this->templArgs->args_posts("", 4);
		
		$query = new WP_Query( $args );

		$res = array();
		$tmp = array();

		if ($query->have_posts()):
			while ($query->have_posts()): $query->the_post();
				$context = array(
					"thumbnails" => $this->get_thumbnails_by_post($post),
					"terms" => $this->get_terms_by_post($post),
				);
				array_push($tmp, $this->templJson->json_post_template($post, $context));
			endwhile;
			wp_reset_query();
			wp_reset_postdata();

		endif;

		$res['data'] = $tmp;
		$res['max_num_pages'] = $query->max_num_pages;

		return $APICallback ? json_encode($res) : $res;
		
	}

	function get_recent_posts($paged=1, $APICallback = false) {
		global $post;

		$args = $this->templArgs->args_posts("", 4, $paged);
		
		$query = new WP_Query( $args );

		$res = array();
		$tmp = array();

		if ($query->have_posts()):
			while ($query->have_posts()): $query->the_post();
				$context = array(
					"thumbnails" => $this->get_thumbnails_by_post($post),
					"terms" => $this->get_terms_by_post($post),
				);
				array_push($tmp, $this->templJson->json_post_template($post, $context));
			endwhile;
			wp_reset_query();
			wp_reset_postdata();

		endif;

		$res['data'] = $tmp;
		$res['max_num_pages'] = $query->max_num_pages;

		return $APICallback ? json_encode($res) : $res;
		
	}

	function get_post_by_id($post_id, $APICallback = false) {
		$post = get_post($post_id);
		$context = array(
			"thumbnails" => $this->get_thumbnails_by_post($post),
			"terms" => $this->get_terms_by_post($post),
		);
		return json_encode($this->templJson->json_post_template($post, $context));
	}

	function get_post_by_slug($post_slug, $APICallback = false) {
		$post = get_page_by_path( $post_slug, $output = OBJECT, $post_type = 'magazine' );
		$context = array(
			"thumbnails" => $this->get_thumbnails_by_post($post),
			"terms" => $this->get_terms_by_post($post),
		);
		return $APICallback ? json_encode($this->templJson->json_post_template($post, $context)) : $this->templJson->json_post_template($post, $context);
	}

	// Category

	function get_terms_taxonomy($APICallback = false) {
		$args = array(
		    'taxonomy' => 'mgzcategory',
		    'hide_empty' => false,
		);
		$terms = get_terms( $args );

		$res = array();
		foreach($terms as $term) {
			array_push($res, $this->templJson->json_term_template($term));
		}

		return $APICallback ? json_encode($res) : $res;
	}

	function get_terms_by_post($post, $APICallback = false) {
		$terms = get_the_terms($post, 'mgzcategory');
		$res = array();
		foreach($terms as $term) {
			array_push($res, $this->templJson->json_term_template($term));
		}

		return $APICallback ? json_encode($res) : $res;
	}

	function get_thumbnails_by_post($post, $APICallback = false) {

		
		$res = array(
			"basic" => get_post_thumbnail_id( $post->ID ) ? wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'thumbnail', $icon = false, $attr = '' ) : "",
			"medium" => get_post_thumbnail_id( $post->ID ) ? wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'medium', $icon = false, $attr = '' ) : "",
			"mlarge" => get_post_thumbnail_id( $post->ID ) ? wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'medium-large', $icon = false, $attr = '' ) : "",
			"large" => get_post_thumbnail_id( $post->ID ) ? wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'large', $icon = false, $attr = '' ) : "",
			"origin" => get_post_thumbnail_id( $post->ID ) ? wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'full', $icon = false, $attr = '' ) : "",
		);

		return $APICallback ? json_encode($res) : $res;
	}
}

?>