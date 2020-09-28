<?php
/**
 * Ichiago functions and definitions
 */

add_theme_support( 'post-thumbnails' );
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
function trim_text( $content, int $max_length) {
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
    return get_field('banner_manager', 'widget_cta_widget-2');
}

function misha_loadmore_ajax_handler(){

    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );

    if( have_posts() ) :

        // run the loop
        while( have_posts() ): the_post();

            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part( 'template-parts/post/content', get_post_format() );
            // for the test purposes comment the line above and uncomment the below one
            // the_title();


        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function misha_my_load_more_scripts() {

    global $wp_query;

    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery') );

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function get_ajax_posts() {
    // Query Arguments
    $args = array(
        'post_type' => array('post'),
        'post_status' => array('publish'),
        'posts_per_page' => 6,
        'nopaging' => true,
        'order' => 'DESC',
        'orderby' => 'date',
        'cat' => 1,
    );

    // The Query
    $ajaxposts = get_posts( $args ); // changed to get_posts from wp_query, because `get_posts` returns an array

    echo json_encode( $ajaxposts );

    exit; // exit ajax call(or it will return useless information to the response)
}

// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');