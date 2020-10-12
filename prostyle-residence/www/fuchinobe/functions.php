<?php
/**
 * Fuchinobe functions and definitions
 */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_image_size( 'category-thumbnails', 665, 300, true );
add_image_size( 'post-thumbnail-homepage', 437, 400, true );
add_image_size( 'post-thumbnail-homepage-posts-slider', 635, 400, true );
add_image_size( 'post-thumbnail-homepage-posts-slider', 635, 400 );
include 'inc/CtaWidget.php';
/**
 * Trim text by character by max length
 *
 * @param string $content
 * @param int $max_length
 */
function trim_text( string $content, int $max_length) {
    if(mb_strlen($content) > $max_length)
    {
        echo mb_substr($content, 0, $max_length) . "...";
    }
    else {
        echo $content;
    }
}

/**
 * Register widget area.
 */
function ichiago_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'sidebar', 'ichiago' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'ichiago' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'ichiago_widgets_init' );

/**
 * Get banner ads data
 *
 * @return mixed
 */
function get_banner_data() {
	return get_field('banner_manager', 'widget_cta_widget-3');
}

function get_banner_footer() {
	return get_field('ft_banner', 'widget_cta_widget-3');
}

function get_ajax_posts() {
	$args_cat = [
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby'   => 'publish_date',
		'order' => 'DESC',
		'cat' => $_POST['cat'],
        'posts_per_page' => -1
	];
	$posts_cat = (new WP_Query($args_cat))->posts;
	$args_other = [
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby'   => 'publish_date',
		'order' => 'DESC',
		'cat' => -$_POST['cat'],
        'posts_per_page' => -1
	];
	$posts_other = (new WP_Query($args_other))->posts;
	$posts = array_merge($posts_cat, $posts_other);
	$home_page_posts = post_paginate($posts, $_POST['pageNumber'], 6);
	$more = (count($home_page_posts['data']) >= 6 && $home_page_posts['is_last_page'] == 0) ? 1 : 0;
	$count = round(count($home_page_posts['data']) / 2);
    $html = '';
    if ($home_page_posts['data']) :
        foreach ($home_page_posts['data'] as $post) :  $current_id = $post->ID;
            $cat   = get_the_category($current_id)[0];
            $title = get_the_title($current_id);
            $url   = get_the_permalink($current_id);
            $html .= '<div class="col-12 col-lg-6">';
            $html .= '<div class="box_item"><div class="box_item_img"><a href="'.$url.'"><img src="'.wp_get_attachment_image_url(get_post_thumbnail_id( $current_id ),'post-thumbnail-homepage').'" class="img-fluid"></a>
                    </div>
                    <p class="tag"><span style="background:'.get_field('color_label', $cat).'">'.get_cat_name($cat->term_id).'</span></p>
                    <p class="box_item_content"><a href="'.$url.'">'.$title.'</a></p>
                    <p class="date">'.get_the_time("Y\.m\.d").'</p>
                </div>
            </div>';
        endforeach; endif; wp_reset_query();
    $data = ['html'=>$html, 'more'=>$more, 'cat'=>$_POST['cat'], 'count' => $count];
    echo json_encode($data);
    exit;
}

/**
 * @param array $posts
 * @param int $page
 * @param int $limit
 *
 * @return array
 */
function post_paginate(array $posts, int $page, int $limit): array {
    $is_last_page = 0;
	$page = $page ? $page : 1;
	$total = count( $posts );
	$totalPages = ceil( $total/ $limit );
	if ($page == $totalPages) $is_last_page = 1;
	if ($page > $totalPages) return [];
	$offset = ($page - 1) * $limit;
	if( $offset < 0 ) $offset = 0;
	$data = array_slice( $posts, $offset, $limit );
	return ['data' => $data, 'is_last_page' => $is_last_page];
}

// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');

add_action('in_widget_form', 'spice_get_widget_id');

function spice_get_widget_id($widget_instance)

{

	// Check if the widget is already saved or not.

	if ($widget_instance->number=="__i__"){

		echo "<p><strong>Widget ID is</strong>: Pls save the widget first!</p>"   ;


	}  else {


		echo "<p><strong>Widget ID is: </strong>" .$widget_instance->id. "</p>";


	}
}