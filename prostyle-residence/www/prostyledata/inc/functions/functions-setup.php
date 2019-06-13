<?php 

if (!function_exists('sgvink_setup_theme')):
	function sgvink_setup_theme () {

		// Make theme available for translation.
		load_theme_textdomain( 'sgvink' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'sgvink-featured-image', 2000, 1200, true );
		add_image_size( 'sgvink-thumbnail-avatar', 100, 100, true );

		// Set the default content width.
		// $GLOBALS['content_width'] = 525;

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'sgvink' ),
            'footer' => __( 'Footer Menu', 'sgvink' ),
			'bottom' => __( 'Bottom Menu', 'sgvink' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		// add_theme_support( 'html5', array(
		// 	'comment-form',
		// 	'comment-list',
		// 	'gallery',
		// 	'caption',
		// ) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		// add_theme_support( 'post-formats', array(
		// 	'aside',
		// 	'image',
		// 	'video',
		// 	'quote',
		// 	'link',
		// 	'gallery',
		// 	'audio',
		// ) );

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'sgvink_setup_theme' );

function sgvink_scripts () {
	wp_enqueue_style( 'styles', SGVinK::get_css_uri()."styles.css", array(), $ver = false, $media = 'all' );
	wp_enqueue_style( 'mobile', SGVinK::get_css_uri()."mobile.css", array(), $ver = false, $media = 'all' );
	wp_enqueue_script( 'scripts', SGVinK::get_js_uri()."scripts.js", array(), $ver = false, $in_footer = false );

	// Content Extras HERE

	wp_enqueue_style( 'custom-styles', SGVinK::get_css_uri()."sgvink.css", array('styles'), $ver = false, $media = 'all' );
	wp_enqueue_script( 'custom-scripts', SGVinK::get_js_uri()."sgvink.js", array('scripts'), $ver = false, $in_footer = false );
}
add_action( 'wp_enqueue_scripts', 'sgvink_scripts' );

function sgvink_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'sgvink' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'sgvink' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'sgvink' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sgvink' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'sgvink' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sgvink' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
// add_action( 'widgets_init', 'sgvink_widgets_init' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function sgvink_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'sgvink_front_page_template' );

// FUNCTONS CUSTOMIZE

    /* Excerpt Support */

    add_post_type_support( 'page', 'excerpt' );

    function sgvink_custom_short_excerpt($excerpt){
    	global $post;

    	// Fetch the content with filters applied to get <p> tags
    	$content = apply_filters( 'the_content', $post->post_content );
                
        // Stop after the first </p> tag
        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );

        if (is_home() || is_archive()){
            if ($post->post_type == 'post' || $post->post_type == 'news'){
                $link = sprintf( '<p class="link-more"><a href="%1$s" class="btn btnReadmore"><span>READ MORE</span></a></p>',
            esc_url( get_permalink( $post->ID ) ));
            }

            if ($post->post_type == 'page'){
                $link = sprintf( '<p><a href="%1$s" class="btn btnReadmore"><span>READ MORE</span></a></p>',
            esc_url( get_permalink( $post->ID ) ));
            }

            $text.=$link;
            return $text;
        }
        
        return $excerpt;
    }
    add_filter('get_the_excerpt', 'sgvink_custom_short_excerpt');

    // function sgvink_excerpt_more( $link ) {
    //     if ( is_admin() ) {
    //         return $link;
    //     }

    //     $link = sprintf( '<p class="link-more"><a href="%1$s" class="btn btnReadmore"><span>READ MORE</span></a></p>',
    //         esc_url( get_permalink( get_the_ID() ) ));
    //     return ' &hellip; ' . $link;
    // }
    // add_filter( 'excerpt_more', 'sgvink_excerpt_more' );

    // function sgvink_custom_excerpt_length( $length ) {
    //     return $length;
    // }
    // add_filter( 'excerpt_length', 'sgvink_custom_excerpt_length', 999 );

    // function wpshout_excerpt( $text ) {
    //     if( is_admin() ) {
    //         return $text;
    //     }
    //     // Fetch the content with filters applied to get <p> tags
    //     $content = apply_filters( 'the_content', get_the_content() );
        
    //     // Stop after the first </p> tag
    //     $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
    //     return $text;
    // }
    // // Leave priority at default of 10 to allow further filtering
    // add_filter( 'wp_trim_excerpt', 'wpshout_excerpt', 10, 1 );

    /* End Excerpt Support */

add_filter('the_time', 'dynamictime');
function dynamictime() {
    global $post;
    $date = $post->post_date;
    $time = get_post_time('G', true, $post);
    $mytime = time() - $time;
    if($mytime > 0 && $mytime < 2*24*60*60)
        $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
    else
        $mytimestamp = date(get_option('date_format'), strtotime($date));
    return $mytimestamp;
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

function sgvink_pagination(){
	global $wp_query;
	if ($wp_query->max_num_pages >= 2) {
		echo '<nav class="pagination__custom">';
        echo '<ul class="pagination pagination-sm">';
        
        $firstDisabled = (get_query_var('paged') >= 2) ? '' : 'disabled';
        $previousUrl = (get_query_var('paged') >= 2) ? get_pagenum_link(0) : '#';

        $endDisabled = (get_query_var('paged') < 2) ? '' : 'disabled';
        $nextUrl = (get_query_var('paged') < 2) ? get_pagenum_link($wp_query->max_num_pages) : '#';

        echo '<li class="page-item '.$firstDisabled.'">
        <a class="page-link" href="'.$previousUrl.'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
        </a>
        </li>';

        for($i = 1; $i <= $wp_query->max_num_pages; $i++){
            $tmpPage = get_query_var('paged') != 0 ? get_query_var('paged') : 1;

            if ($tmpPage == $i)
                echo '<li class="page-item active"><a class="page-link" href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
            else
                echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
        }


        echo '<li class="page-item '.$endDisabled.'">
        <a class="page-link" href="'.$nextUrl.'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
        </a>
        </li>';

        echo '</ul>';
        echo '</nav>';
	}
}

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function fb_comment_count($url)
{
	$json = json_decode(file_get_contents('https://graph.facebook.com/?ids=' . $url));
	return isset($json->$url->share) ? $json->$url->share->comment_count : 0;
}

?>
