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
            'top-mobile'    => __( 'Top Mobile Menu', 'sgvink' ),
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

function get_taxonomy_custom_post_string($post, $tax_name){
    $res = "";
    $arr = get_the_terms( $post, $tax_name );
    if(!empty($arr)){
        foreach($arr as $i => $obj){
            $res .= "<span class='news-tag'>".$obj->name."</span>";
        }
    }else{
        $res .= "<span class='news-tag empty'>&nbsp;</span>";
    }
    
    return $res;
}

function get_taxonomy_custom_post($post, $tax_name){
    $res = array();
    $arr = get_the_terms( $post, $tax_name );
    if(!empty($arr)){
        foreach($arr as $i => $obj){
            array_push($res, $obj->name);
        }
    }
    
    return $res;
}

/*=============================================
                BREADCRUMBS
=============================================*/
//  to include in functions.php
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = 'TOP'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . strtoupper(get_the_title()) . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . strtoupper(get_the_title()) . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . strtoupper($post_type->labels->singular_name) . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . strtoupper(get_the_title()) . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . strtoupper(get_the_title()) . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . strtoupper(get_the_title($page->ID)) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . strtoupper(get_the_title()) . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        // if (get_query_var('paged')) {
        //     if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
        //         echo ' (';
        //     }
        //     echo __('Page') . ' ' . get_query_var('paged');
        //     if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
        //         echo ')';
        //     }
        // }
        echo '</div>';
    }
}

?>
