<?php 

    define('ASSETS_PATH', get_stylesheet_directory_uri() . '/assets');
    define('STYLESHEET_PATH', ASSETS_PATH . '/css');
    define('SCRIPT_PATH', ASSETS_PATH . '/js');
    define('IMAGE_PATH', ASSETS_PATH . '/images');
    define('FAVICON_PATH', ASSETS_PATH . '/favicon');

    define('SERVICE_PATH', ASSETS_PATH . '/service');
    define('SERVICE_STYLESHEET_PATH', SERVICE_PATH . '/css');
    define('SERVICE_SCRIPT_PATH', SERVICE_PATH . '/js');
    define('SERVICE_IMAGE_PATH', SERVICE_PATH . '/images');
    define('SERVICE_FAVICON_PATH', SERVICE_PATH . '/favicon');

    define('EVENTS_PATH', ASSETS_PATH . '/events');
    define('EVENTS_STYLESHEET_PATH', EVENTS_PATH . '/css');
    define('EVENTS_SCRIPT_PATH', EVENTS_PATH . '/js');
    define('EVENTS_IMAGE_PATH', EVENTS_PATH . '/images');
    define('EVENTS_FAVICON_PATH', EVENTS_PATH . '/favicon');


    $header_posts = null;
    $header_ids = null;

    require_once 'includes/mobile_detect.php';
    require_once 'includes/api.php';

    $detect = new Mobile_Detect;

    function logrenove_setup() {

        load_theme_textdomain( 'logrenove' );

        add_theme_support( 'title-tag' );
        add_theme_support( 'editor-styles' );

        register_nav_menus(
            array(
                'side'    => __( 'Side Menu', 'logrenove' ),
                'social' => __( 'Social Links Menu', 'logrenove' ),
                'bottom' => __( 'Bottom Menu', 'logrenove' ),
            )
        );
    }
    add_action( 'after_setup_theme', 'logrenove_setup' );

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        
     
        wp_deregister_script('jquery');
        wp_register_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, null);
        wp_enqueue_script('jquery');

    }

    add_action( 'admin_enqueue_scripts', 'my_admin_theme_enqueue_styles' );
    function my_admin_theme_enqueue_styles() {
     
        wp_enqueue_style( 'admin-style',
            get_stylesheet_directory_uri() . '/admin.css',
            array(),
            wp_get_theme()->get('Version')
        );
        wp_enqueue_script( 'admin-script', get_stylesheet_directory_uri() . '/admin.js', array('jquery'), $ver = false, $in_footer = true );

        $args = array(
            'default_category_id' => get_option('default_category'),
            'default_category_name' => get_the_category_by_ID( get_option('default_category') ),
        );
        wp_localize_script( 'admin-script', 'php_obj', $args );
    }

    function my_site_WI_dequeue_script() {
        wp_dequeue_script( 'twentyseventeen-global' );
    }

    add_action( 'wp_print_scripts', 'my_site_WI_dequeue_script', 100 );

    if( function_exists('acf_add_options_page') ) {
    
        acf_add_options_page(array(
            'page_title'    => 'Logrenove\'s Theme Settings',
            'menu_title'    => 'Logrenove',
            'menu_slug'     => 'theme-logrenove-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));    
    }

    if( !function_exists('get_query_pagination') ) {
    
        function get_query_pagination($args = array()){
            global $wp_query;
            global $paged;

            $total = $wp_query->max_num_pages;
            $cpaged = max(1, $paged);

            $paginationHTML = ' <nav><ul class="pagination justify-content-center">';
            $pagination = paginate_links( 
                array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $total,
                    'current'      => $cpaged,
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'array',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo;', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '&raquo;', 'text-domain' ) ),
                    'add_args'     => $args,
                    'add_fragment' => '',
                ) 
            );

            if (!empty($pagination)):
                foreach($pagination as $page){
                    $paginationHTML .='<li class="page-item">'.$page.'</li>';
                }
            endif;

            return $paginationHTML .= ' </ul></nav>';
        } 
    }


    if( !function_exists('get_custom_query_pagination') ) {
    
        function get_custom_query_pagination($paged, $total, $args = array()){
            $paginationHTML = ' <nav><ul class="pagination justify-content-center">';
            $pagination = paginate_links( 
                array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $total,
                    'current'      => $paged,
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'array',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo;', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '&raquo;', 'text-domain' ) ),
                    'add_args'     => $args,
                    'add_fragment' => '',
                ) 
            );

            if (!empty($pagination)):
                foreach($pagination as $page){
                    $paginationHTML .='<li class="page-item">'.$page.'</li>';
                }
            endif;

            return $paginationHTML .= ' </ul></nav>';
        } 
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

    function the_breadcrumb()
    {
        $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
        // $delimiter = '&raquo;'; // delimiter between crumbs
        $delimiter = ''; // delimiter between crumbs

        $home = 'TOP'; // text for the 'Home' link
        $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
        $before = '<li class="breadcrumb-item active" aria-current="page">'; // tag before the current crumb
        $after = '</li>'; // tag after the current crumb

        global $post;
        $homeLink = get_bloginfo('url');
        $shortTitle = get_the_title();

        if (is_home() || is_front_page()) {
            if ($showOnHome == 1) {
                echo '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="' . $homeLink . '">' . $home . '</a></li></ol></nav>';
            }
        } else {
            echo '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="' . $homeLink . '">' . $home . '</a></li> ' . $delimiter . ' ';
            if (is_search()) {
                echo $before . 'Search results for "' . get_search_query() . '"' . $after;
            } elseif (is_day()) {
                echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
                echo '<li class="breadcrumb-item"><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
                echo $before . get_the_time('d') . $after;
            } elseif (is_month()) {
                echo '<li class="breadcrumb-item"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
                echo $before . get_the_time('F') . $after;
            } elseif (is_year()) {
                echo $before . get_the_time('Y') . $after;
            } elseif (is_single() && !is_attachment()) {
                if (get_post_type() != 'post') {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    echo '<li class="breadcrumb-item"><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
                    if ($showCurrent == 1) {
                        echo ' ' . $delimiter . ' ' . $before . $shortTitle . $after;
                    }
                } else {
                    // here
                    $cat = get_the_category();
                    $cat = $cat[0];

                    $cats = '<li class="breadcrumb-item breadcrumb-cat">' . get_category_parents($cat, true, '  /  '). '</li>';
                    $cats = preg_replace('/\s\s\/\s\s(<\/li>)$/', "$1", $cats, 1);
                    if ($showCurrent == 0) {
                        $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                    }
                    if($cat->slug != 'uncategorized'){
                        echo $cats;
                    }
                    if ($showCurrent == 1) {
                        echo $before . $shortTitle . $after;
                    }
                    
                   
                }
            } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
                $post_type = get_post_type_object(get_post_type());
                echo $before . $post_type->labels->singular_name . $after;
            } elseif (is_attachment()) {
                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID);
                $cat = $cat[0];
                echo '<li class="breadcrumb-item">' . get_category_parents($cat, true, ' ' . $delimiter . ' '). '</li>';
                echo '<li class="breadcrumb-item"><a href="' . get_permalink($parent) . '">' . $parent->post_title. '</a></li>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . $shortTitle . $after;
                }
            } elseif (is_page() && !$post->post_parent) {
                if ($showCurrent == 1) {
                    echo $before . $shortTitle . $after;
                }
            } elseif (is_page() && $post->post_parent) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
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
                    echo ' ' . $delimiter . ' ' . $before . $shortTitle . $after;
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
            if (get_query_var('paged')) {
                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                    echo ' (';
                }
                echo __('Page') . ' ' . get_query_var('paged');
                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                    echo ')';
                }
            }
            echo '</ol></nav>';
        }
    } // end the_breadcrumb()

    // function custom_excerpt_length( $length ) {
    //     return 20;
    // }
    // add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    // function max_title_length( $title ) {
    //     return mb_strimwidth($title, 0, 44, '...');
    // }
    // add_filter( 'the_title', 'max_title_length');

    function trim_post_trailing_whitespace( $content ) {
        return preg_replace('/[\p{Z}\s]{2,}/u', ' ', $content);
    }
    add_filter( 'the_content', 'trim_post_trailing_whitespace', 0 );

    function load_init(){
        global $header_posts;
        global $header_ids;
        global $post;

        $headerBanner = get_field('header_banner', 'option');
        $display_type = $headerBanner['display_type'];

        switch ($display_type) {
            case 'manual': {
                $header_ids = array();
                $sticky_ids = get_option( 'sticky_posts' );
                $args = array(
                    'post__in'     => $sticky_ids,
                    'post_status' => 'publish',
                    'order'               => 'DESC',
                    'orderby'             => 'date',
                    'ignore_sticky_posts' => true,
                    'posts_per_page'         => 3,

                    // Permission Parameters -
                    'perm' => 'readable',

                    // Parameters relating to caching
                    'no_found_rows'          => false,
                    'cache_results'          => true,
                    'update_post_term_cache' => true,
                    'update_post_meta_cache' => true,
                );
                $query = new WP_Query( $args );
                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();
                        array_push($header_ids, $post->ID);
                    endwhile;
                endif;
                wp_reset_postdata();
                wp_reset_query();

                /* WRONG LOGIC BUT JP TEAM NEED */
                if ( count(get_option( 'sticky_posts' )) > 0 && count(get_option( 'sticky_posts' )) < 3){
                    $times = 3 - count(get_option( 'sticky_posts' ));

                    $args = array(
                        'post__not_in'     => $header_ids,
                        'post_status' => 'publish',
                        'order'               => 'DESC',
                        'orderby'             => 'date',
                        'ignore_sticky_posts' => true,
                        'posts_per_page'         => $times,

                        // Permission Parameters -
                        'perm' => 'readable',

                        // Parameters relating to caching
                        'no_found_rows'          => false,
                        'cache_results'          => true,
                        'update_post_term_cache' => true,
                        'update_post_meta_cache' => true,
                    );
                    $query = new WP_Query( $args );
                    if($query->have_posts()):
                        while($query->have_posts()): $query->the_post();
                            array_push($header_ids, $post->ID);
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    wp_reset_query();
                }

                // echo 'INIT: ';
                // print_r($header_ids);
            }break;
            
            case 'auto':{
                $number_display = $headerBanner['number_display'];
                $header_posts = wp_get_recent_posts( $args = array(
                    'numberposts' => $number_display,
                    'post_status' => 'publish',
                ), $output = 'ARRAY_A' );

                $header_ids = array_column($header_posts, 'ID');
            }break;
        }        
    }
    add_action( 'init', 'load_init' );

    // Alter search posts per page
    function myprefix_search_posts_per_page($query) {
        if ( $query->is_search() ) {
            $query->set( 'posts_per_page', get_option( 'posts_per_page' ) );
            $query->set( 'post_type', array('post','event'));
        }

        if (  $query->is_main_query() && $query->is_home() ) {
            global $header_ids;

            $headerBanner = get_field('header_banner', 'option');
            $display_type = $headerBanner['display_type'];

            $query->set( 'post__not_in', $header_ids );
            $query->set( 'ignore_sticky_posts', true );
        }
        return $query;
    }
    add_action( 'pre_get_posts','myprefix_search_posts_per_page' );

    function logrenove_login_logo() { 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        // $image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
        $image = IMAGE_PATH."/1x/ico.png";
        ?> 
            <style type="text/css"> 
                body.login div#login h1 a {
                    background-image: url(<?php echo $image; ?>);
                    background-size: cover;
                    width: 130px;
                    height: 130px;
                    margin-bottom: 50px;
                } 
            </style>
        <?php 
    } 
    add_action( 'login_enqueue_scripts', 'logrenove_login_logo' );

    function add_extra_header_script(){
        echo get_field('header_extend_script', 'option');
    }
    add_action( 'header_extra_script', 'add_extra_header_script');

    function add_extra_body_script(){
        echo get_field('body_extend_script', 'option');
    }
    add_action( 'body_extra_script', 'add_extra_body_script');

    function add_extra_footer_script(){
        echo get_field('footer_extend_script', 'option');
    }
    add_action( 'footer_extra_script', 'add_extra_footer_script');

    add_filter( 'wpseo_breadcrumb_links', 'wpseo_breadcrumb_add_woo_shop_link' );
    function wpseo_breadcrumb_add_woo_shop_link( $links ) {
        global $post;

        if (is_single()){
            $term = $links[1]['term'];
            if($term->slug == 'uncategorized'){
                unset($links[1]);
            }
        }

        return $links;
    }

    /**
     * 
     */
    class ThumbnailItem
    {
        public $title, $caption, $alt, $url;

        function __construct($post_id, $size='full')
        {
            if(!empty($post_id)){
                $this->size = $size;
                $meta = !empty(wp_get_attachment_metadata($post_id, false )['image_meta'])?wp_get_attachment_metadata($post_id, false )['image_meta']:array();
                $this->title = !empty($meta['title'])?$meta['title']:'';
                $this->caption = !empty($meta['caption'])?$meta['caption']:'';
                $this->alt = get_post_meta( $post_id, '_wp_attachment_image_alt', true );
                $this->url = wp_get_attachment_image_url( $post_id, $size, false );
            }
            
        }
    }

    //SmartNewsフィード追加
    add_action('init', function (){
        add_feed('smartnews', function () {
            get_template_part('smartnews');
        });
    });
     
    //SmartNewsのHTTP header for Content-type
    add_filter( 'feed_content_type', function ( $content_type, $type ) {
        if ( 'smartnews' === $type ) {
            return feed_content_type( 'rss2' );
        }
        return $content_type;
    }, 10, 2 );

    //Antenna RSS
    add_action('init', function (){
        add_feed('antenna', function () {
            get_template_part('antenna');
        });
    });
     
    //Antenna RSS
    add_filter( 'feed_content_type', function ( $content_type, $type ) {
        if ( 'antenna' === $type ) {
            return feed_content_type( 'rss2' );
        }
        return $content_type;
    }, 10, 2 );

    // Feed customize
    remove_action ('do_feed_rss2','do_feed_rss2',10,1);
    add_action( 'do_feed_rss2', 'do_feed_rss2_customize', 10, 1 );

    function do_feed_rss2_customize( $for_comments ) {
        if ( $for_comments ) {
            load_template( ABSPATH . WPINC . '/feed-rss2-comments.php' );
        } else {
            get_template_part('feed-rss2');
        }
    }

    function get_the_content_feed_customize( $feed_type = null ) {
        if ( ! $feed_type ) {
            $feed_type = get_default_feed();
        }

        /** This filter is documented in wp-includes/post-template.php */

        $get_the_content = preg_replace('/<div class="wp-block-uagb-table-of-contents.*?目次.*<\/div>/', '', get_the_content());
        // $get_the_content = preg_replace('/◆こちらもおすすめ◆(.*)<\/p>$/sm','</p>', $get_the_content);
        $get_the_content = str_replace('<p></p>', '', $get_the_content);
        
        // if (preg_match_all( '/wp:block {"ref":\d+}/', $get_the_content, $matches )) {
        //     foreach ($matches[0] as $wp_block) {
        //         $postId = filter_var($wp_block, FILTER_SANITIZE_NUMBER_INT);
        //         $postTitle = strtolower(get_post($postId)->post_title);
        //         if(preg_match( '/internal.*?/', $postTitle))
        //         {
        //             $get_the_content = str_replace('<!-- wp:block {"ref":'.$postId.'} /-->', '</span></p>', $get_the_content );
        //         }
        //     }
        // }

        $content = apply_filters( 'the_content', $get_the_content );
        $content = str_replace( ']]>', ']]&gt;', $content );

        return apply_filters( 'the_content_feed', $content, $feed_type );
    }

    // Get recommend posts from current post

    function get_recommend_posts($post_type='post')
    {
        global $detect;
        $articles_ids = get_recommend_articles_ids($post_type);
        $articles_ids =$articles_ids;
        $posts = array();
        foreach ($articles_ids as $key => $articles_id) {
            $obj = new stdClass();
            $obj->permalink = get_permalink($articles_id);
            $obj->title = get_the_title($articles_id);
            $_size = $detect->isMobile() ? 'full' : 'full' ;
            $thumbnails = new ThumbnailItem(get_post_thumbnail_id($articles_id), $_size);
            $obj->thumbails_url = !empty($thumbnails)?$thumbnails->url:'';
            $obj->firstCat = (!empty(get_the_category($articles_id)) && count(get_the_category($articles_id))) ?get_the_category($articles_id)[0]->name :'';
            $posts[] = $obj;
        }

        if(count($posts)) return $posts;
        else return false;

        // $args = array(
        //     'post__in'    => $articles_ids,
        //     // Type & Status Parameters
        //     'post_type'   => 'post',
        //     'post_status' => 'publish',
        //     // Order & Orderby Parameters
        //     // 'order'               => 'DESC',
        //     // 'orderby'             => 'date',
        //     'ignore_sticky_posts' => true,
        //     // Pagination Parameters
        //     'posts_per_page'         => -1,
        //     // Permission Parameters -
        //     'perm' => 'readable',
        //     // Parameters relating to caching
        //     'no_found_rows'          => false,
        //     'cache_results'          => true,
        //     'update_post_term_cache' => true,
        //     'update_post_meta_cache' => true,
        // );
        
        // $query = new WP_Query( $args );
        
        // if($query->have_posts()) return $query;
        // else return false;
    }

    function get_recommend_articles_ids($post_type='post')
    {
        global $wp_query;
        $articles_ids = [];
        // if(is_single())
        // {
        //     $field = 'articles';
        //     $post_id = get_queried_object_id();

        // }
        // else
        if(is_home())
        {
            $field = 'home_recommend_articles';
            $post_id = 'option';
        }
        else
        {
            $field = 'category_articles';
            if(is_single())
            {
                $post_cat_id = wp_get_post_categories($wp_query->post->ID)[0];
                $post_id = 'category_'.$post_cat_id;
            }
            else 
            {
                $post_id = get_queried_object();
            }
        }
        for($i=1;$i<=5;$i++)
        {
            $articles = get_field($field.'_'.$i, $post_id);
            $articles_url = !empty($articles['url'])?$articles['url']:'';
            if(!empty($articles_url))
            {
                $articles_ids[] = intval(filter_var($articles_url, FILTER_SANITIZE_NUMBER_INT));
            }
        }
        $count_articles_ids = is_array($articles_ids)?count($articles_ids):0;

        $numberposts = 5-$count_articles_ids;

        if($count_articles_ids<5)
        {
            $recent_posts = get_recent_posts($numberposts, $articles_ids, $post_type);
            $articles_ids = is_array($articles_ids)?array_merge($articles_ids, array_column($recent_posts, 'ID')):array_column($recent_posts, 'ID');
        }
        // var_dump($articles_ids);die;
        return $articles_ids;
    }

    function get_recent_posts($numberposts=5, $exclude=array(), $post_type='post', $args=array())
    {
        $exclude[] = get_queried_object_id();
        $recent_args = array(
            'numberposts' => $numberposts,
            'post_status' => 'publish',
            'exclude'     => $exclude,
            'post_type'   => $post_type,
        );

        $recent_args = count($args) ? array_merge($recent_args, $args): $recent_args;

        $recent_posts = wp_get_recent_posts( $recent_args, $output = 'ARRAY_A' );

        return $recent_posts;
    }

    function get_post_tags()
    {
        // if(is_single()) $tags = get_the_tags(get_queried_object_id());
        // else $tags = get_tags(array( 'hide_empty' => false ));
        $args = array( 'hide_empty' => false );
        $args['include'] = get_field('taxonomy_tags', 'option');
        $tags = get_tags($args);
        return wp_list_sort($tags, 'count', 'DESC');
    }

    function get_section_cookie()
    {
        global $wp_query;
        $post_cat_id = wp_get_post_categories($wp_query->post->ID)[0];
        $section_cookie_text = get_field('section_cookie_text','category_'.$post_cat_id);
        $section_cookie_url = get_field('section_cookie_url','category_'.$post_cat_id);
        $section_cookie_description = get_field('section_cookie_description','category_'.$post_cat_id);
        $section_cookie = array();
        $session_cookie['description'] = $section_cookie_description ? $section_cookie_description : get_field('section_cookie_description','option');;
        $session_cookie['text'] = !empty($section_cookie_text) ? $section_cookie_text : get_field('section_cookie_text','option');
        $session_cookie['url'] = !empty($section_cookie_url) ? $section_cookie_url : get_field('section_cookie_url','option');
        return $session_cookie;
    }

    function get_footer_banner()
    {
        global $wp_query;
        $post_cat_id = wp_get_post_categories($wp_query->post->ID)[0];
        $category_footer_banner = get_field('footer_banner', 'category_'.$post_cat_id);
        $footer_banner = get_field('footer_banner', 'option');
        $result = array();
        $result['left_url'] = (!empty($category_footer_banner['left_url']) && count($category_footer_banner['left_url'])) ? $category_footer_banner['left_url'] : $footer_banner['left_url'];
        $result['left_banner'] = (!empty($category_footer_banner['left_banner']) && count($category_footer_banner['left_banner'])) ? $category_footer_banner['left_banner'] : $footer_banner['left_banner'];
        $result['right_url'] = (!empty($category_footer_banner['right_url']) && count($category_footer_banner['right_url'])) ? $category_footer_banner['right_url'] : $footer_banner['right_url'];
        $result['right_banner'] = (!empty($category_footer_banner['right_banner']) && count($category_footer_banner['right_banner'])) ? $category_footer_banner['right_banner'] : $footer_banner['right_banner'];
        return $result;
    }

    function get_sidebar_banner()
    {
        global $wp_query;
        $post_cat_id = wp_get_post_categories($wp_query->post->ID)[0];
        $category_sidebar_banner = get_field('sidebar_banner', 'category_'.$post_cat_id);
        $sidebar_banner = get_field('sidebar_banner', 'option');
        $result = array();
        $result['url'] = (!empty($category_sidebar_banner['url']) && count($category_sidebar_banner['url'])) ? $category_sidebar_banner['url'] : $sidebar_banner['url'];
        $result['banner'] = (!empty($category_sidebar_banner['banner']) && count($category_sidebar_banner['banner'])) ? $category_sidebar_banner['banner'] : $sidebar_banner['banner'];
        return $result;
    }

    # Events

    function set_posts_per_page_for_events_cpt( $query ) {
        if ( !is_admin() && $query->is_main_query() && (is_post_type_archive( 'events' ) || is_tax('event_category') || is_tax('event_tags'))) {
            $query->set( 'posts_per_page', '10' );
        }
    }
    add_action( 'pre_get_posts', 'set_posts_per_page_for_events_cpt' );

    function get_event_datetime()
    {
        $post_id = get_the_ID();
        $event_date = get_field('event_date', $post_id);
        $event_time = get_field('event_time', $post_id);
        // $result = array();
        // $result['date'] = (!empty($event_datetime['date']) && count($event_datetime['date'])) ? $event_datetime['date'] : '';
        // $hour = (!empty($event_datetime['hour']) && count($event_datetime['hour'])) ? $event_datetime['hour'] : '09';
        // $minute = (!empty($event_datetime['minute']) && count($event_datetime['minute'])) ? $event_datetime['minute'] : '00';
        // $result['time'] = $hour.':'.$minute;
        $event_datetime = array();
        $event_datetime['date'] = !empty($event_date) && is_array($event_date) && count($event_date) ? $event_date : array();
        $event_datetime['time'] = !empty($event_time) && is_array($event_time) && count($event_time) ? $event_time : array();
        return $event_datetime;
    }

    if( !function_exists('get_query_pagination_events') ) {
    
        function get_query_pagination_events($max_num_pages = '', $args = array()){
            global $wp_query, $paged;
            $total = !empty($max_num_pages) ? $max_num_pages : $wp_query->max_num_pages;
            $cpaged = max(1, $paged);
            $paginationHTML = ' <nav><ul class="pagination justify-content-center">';
            $pagination = paginate_links( 
                array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $total,
                    'current'      => $cpaged,
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'array',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '◀︎', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '▶︎', 'text-domain' ) ),
                    'add_args'     => $args,
                    'add_fragment' => '',
                ) 
            );

            if (!empty($pagination)):
                foreach($pagination as $page){
                    $paginationHTML .='<li class="page-item">'.$page.'</li>';
                }
            endif;

            return $paginationHTML .= ' </ul></nav>';
        } 
    }

    function get_events($args = array()) {
        // $date_diff_events = date_diff_events('', '+2 days');
        $current_term = get_queried_object();
        // $d = isset($_GET['d'])?$_GET['d']:'';
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args_post = array(
                    'post_type' => 'events',
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'perm' => 'readable',
                    'no_found_rows'          => false,
                    'cache_results'          => true,
                    'update_post_term_cache' => true,
                    'update_post_meta_cache' => true,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    // 'meta_query' => array(
                    //     array(
                    //         'key' => 'event_datetime_date',
                    //         'value' => $date_diff_events,
                    //         'compare' => '>=',
                    //         'type' => 'DATE',
                    //     ),
                    //     'relation'  => 'AND',
                    //     'event_datetime_date' => array(
                    //         'key'       => 'event_datetime_date',
                    //         'compare'   => 'EXISTS',
                    //         'type'      => 'DATE'
                    //     ),
                    //     'event_datetime_hour' => array(
                    //         'key'       => 'event_datetime_hour',
                    //         'compare'   => 'EXISTS',
                    //         'type'      => 'NUMERIC'
                    //     ),
                    //     'event_datetime_minute' => array(
                    //         'key'       => 'event_datetime_minute',
                    //         'compare'   => 'EXISTS',
                    //         'type'      => 'NUMERIC'
                    //     ),
                    // ),
                    // 'orderby'   => array(
                    //     'event_datetime_date' => 'ASC',
                    //     'event_datetime_hour' => 'ASC',
                    //     'event_datetime_minute' => 'ASC',
                    // ),
                );
        if(is_term($current_term->term_id) != NULL)
        {
            $args_term = array('tax_query' => array(
                array(
                'taxonomy' => get_query_var('taxonomy'),
                'field' => 'term_id',
                'terms' => array($current_term->term_id),
                 )
              ));
            $args_post = array_merge($args_post, $args_term);
        }
        // if($d!='')
        // {
        //     $posts_by_date_of_week = get_posts_by_date_of_week($d);
        //     if(!count($posts_by_date_of_week)) return false;
        //     $args_post_by_date_of_week = array('post__in' => $posts_by_date_of_week);
        //     $args_post = array_merge($args_post, $args_post_by_date_of_week);
        // }
        $args_post = count($args)?array_merge($args_post, $args):$args_post;
        $event_posts = new WP_Query( $args_post );
        return $event_posts;
    }
 
    function get_posts_by_date_of_week($d) {
        $current_term = get_queried_object();
        $args_post = array(
            'numberposts'      => -1,
            'post_type'        => 'events',
        );
        if(is_term($current_term->term_id) != NULL)
        {
            $args_term = array('tax_query' => array(
                array(
                'taxonomy' => get_query_var('taxonomy'),
                'field' => 'term_id',
                'terms' => $current_term->term_id,
                 )
              ));
            $args_post = array_merge($args_post, $args_term);
        }
        $events = get_posts($args_post);
        switch ($d) {
            case 'sat':
            case 'sun':
                $post_ids = array();
                foreach ($events as $key => $post) {
                    $post_id = $post->ID;
                    $event_date = get_post_meta($post_id, 'event_datetime_date', true);
                    $date_of_week = $event_date ? strtolower(date('D', strtotime($event_date))) :'';
                    if($date_of_week==$d) {
                        $post_ids[] = $post_id;
                    }
                }
                break;
            case 'week':
                $post_ids = array();
                foreach ($events as $key => $post) {
                    $post_id = $post->ID;
                    $event_date = get_post_meta($post_id, 'event_datetime_date', true);
                    $date_of_week = $event_date ? strtolower(date('D', strtotime($event_date))) :'';
                    if(!in_array($date_of_week, ['sat', 'sun'])) {
                        $post_ids[] = $post_id;
                    }
                }
                break;
            default:
                $post_ids = array();
                break;
        }
        return $post_ids;
    }

    function date_diff_events($date = '', $days = '-2 days') 
    {
        // $timezone = get_option('timezone_string');
        // $date_2 = !empty($date_2) ? date('Y-m-d H:i', strtotime($date_2)) : date('Y-m-d H:i');
        // $date_1 = date('Y-m-d H:i', strtotime($date_1));
        // $origin = date_create($date_1, timezone_open($timezone));
        // $target = date_create($date_2, timezone_open($timezone));
        // $interval = date_diff($origin, $target);
        // return $interval->format('%R%a');
        $date = !empty($date)?date('Y-m-d', strtotime($date)):date('Y-m-d');
        $date = date('Ymd', strtotime($date . $days));
        return $date;
    }

    function get_event_description()
    {
        $post_id = get_queried_object_id();
        $description = get_field('event_description', $post_id);
        return $description;
    }

    function limit_event_content($content='', $limit=180, $strip_tags='<br>')
    {
        global $detect;
        if($detect->isMobile()) {
            $content = wp_trim_words($content, $limit, '...');
        }
        else {
            $content_arr = explode('<br />', $content, 3);
            if(is_array($content_arr) && count($content_arr) >= 3) {
                $content_arr[2] = mb_strimwidth($content_arr[2], 0, $limit, '...');
                $content = implode('<br>', $content_arr);
            }
            else return $content;
            /* $content = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $content );
            $content = strip_tags( $content, $strip_tags);
            $content = mb_strimwidth($content, 0, $limit, '...'); */
        }
        return $content;
    }

    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Secondary Image',
                'id' => 'secondary-image',
                'post_type' => 'events',
             )
        );
    }

    # Event schema
    function event_detail_schema() {
        global $post;
        if(is_single() && get_post_type($post->ID) == 'events') {
            $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
            $metas = get_post_meta($post->ID);
            $event_date = array();
            foreach ($metas as $key => $val) {
                if(preg_match('/^event_date_[0-9]_date$/', $key)) {
                    $event_date[] = $val[0];
                }
            }
            $startDate = reset($event_date);
            $endDate = end($event_date);
            $startDate = count($event_date)?date('Y-m-d', strtotime($startDate)):'';
            $endDate = count($event_date)?date('Y-m-d', strtotime($endDate)):'';
    ?>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "<?php echo the_title(); ?>",
      "startDate": "<?php echo $startDate; ?>",
      "endDate": "<?php echo $endDate; ?>",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "表参道ショールーム",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "北青山3-6-23",
          "addressLocality": "港区",
          "postalCode": "107-0061",
          "addressRegion": "東京都",
          "addressCountry": "日本"
        }
      },
      "image": [
        "<?php echo $thumbnails->url; ?>"
       ],
      "description": "<?php echo get_event_description(); ?>",
      "offers": {
        "@type": "Offer",
        "url": "<?php the_permalink(); ?>",
        "price": "0",
        "priceCurrency": "JPY",
        "availability": "https://schema.org/InStock",
        "validFrom": "<?php echo $endDate; ?>"
      },
      "performer": {
        "@type": "PerformingGroup",
        "name": "LogRenove Staff"
      },
      "organizer": {
        "@type": "Organization",
        "name": "LogRenove",
        "url": "<?php echo get_site_url(); ?>"
      }
    }
</script>
    <?php }}
    # End event schema

    # Posts ranking
    function wpb_set_post_views($postID) {
        $count_key = 'wpb_post_views_count';
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

    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    function wpb_track_post_views ($post_id) {
        if ( !is_single() ) return;
        if ( empty ( $post_id) ) {
            global $post;
            $post_id = $post->ID;    
        }
        wpb_set_post_views($post_id);
    }
    add_action( 'wp_head', 'wpb_track_post_views');

    function wpb_get_post_views($postID){
        $count_key = 'wpb_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
        }
        return $count.' Views';
    }

    function get_ranking_posts($numberposts=5, $exclude=array(), $post_type='post')
    {
        global $detect;
        $articles_ids = get_ranking_post_ids();
        $posts = array();
        $i=1;foreach ($articles_ids as $key => $articles_id) {
            $obj = new stdClass();
            $obj->permalink = get_permalink($articles_id);
            $obj->title = get_the_title($articles_id);
            $_size = $detect->isMobile() ? 'full' : 'full' ;
            $thumbnails = new ThumbnailItem(get_post_thumbnail_id($articles_id), $_size);
            $obj->thumbails_url = !empty($thumbnails)?$thumbnails->url:'';
            $obj->firstCat = (!empty(get_the_category($articles_id)) && count(get_the_category($articles_id))) ?get_the_category($articles_id)[0]->name :'';
            $obj->rank = $i;
            $posts[] = $obj;
            $i++;
        }

        if(count($posts)) return $posts;
        else return false;
    }

    function get_ranking_post_ids($numberposts=5, $post_type='post')
    {
        $args_post = array(
            'numberposts'      => 5,
            'post_type'        => $post_type,
            'meta_key' => 'wpb_post_views_count',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'post_status' => 'publish',
        );
        $args_term = array();
        if(!is_home())
        {
            $cat_ID = get_the_category()[0]->cat_ID;
            $args_term = array(
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'terms' => $cat_ID,
                        'include_children' => false,
                    ],
                ],
            );
            $args_post = array_merge($args_post, $args_term);
        }
        
        $posts = get_posts($args_post);
        
        $articles_ids = array();
        foreach ($posts as $key => $post) {
            $articles_ids[] = $post->ID;
        }

        $count_articles_ids = is_array($articles_ids)?count($articles_ids):0;

        $numberposts = 5-$count_articles_ids;

        if($count_articles_ids<5)
        {
            $recent_posts = get_recent_posts($numberposts, $articles_ids, $post_type, $args_term);
            $articles_ids = is_array($articles_ids)?array_merge($articles_ids, array_column($recent_posts, 'ID')):array_column($recent_posts, 'ID');
        }

        return $articles_ids;
    }

    # End posts ranking


    # Customize social login

    // function get_social_login_button()
    // {
    //     $buttons = '';
    //     if(is_plugin_active('accesspress-social-login-lite/accesspress-social-login-lite.php')) {
    //         $options = get_option( APSL_SETTINGS );
    //         $user_login_url = home_url();
    //         $encoded_url = urlencode( $user_login_url );
    //         foreach ( $options['network_ordering'] as $key => $value ):
    //             if ( $options["apsl_{$value}_settings"]["apsl_{$value}_enable"] === 'enable' ) {
    //                 $login_url = wp_login_url().'?apsl_login_id='.esc_attr($value).'_login';
    //                 if ( $encoded_url ) {
    //                     $login_url .= "&state=" . urlencode(base64_encode( "redirect_to=$encoded_url" ));
    //                 }
    //                  switch ($value) {
    //                     case 'facebook':
    //                         $text_label = 'Facebookでログイン';
    //                         break;
    //                     case 'google':
    //                         $text_label = 'Googleでログイン';
    //                         break;
    //                     case 'yahoo':
    //                         $text_label = 'Yahoo!JAPANでログイン';
    //                         break;
    //                     default:
    //                         $text_label = '';
    //                         break;
    //                  }
    //                  $buttons .= "<a href=\"{$login_url}\" class=\"btn btn_social btnlogin_".esc_attr($value)."\">{$text_label}</a>";
                     
    //             }
    //         endforeach;
    //     }
    //     return $buttons;
    // }

    /*  
        #7368: ◇LogRenove目次下設置ウィジェットの開発
        Modify (insert) below Table of Content (if exist) - 1st priority
        Modify (insert) below the seccond h2 tag (if exist) - 2nd priority
    */

    function func_insert_extras_content(){
        global $post;
        $insertContent = get_field('insert_extras_content', get_the_category( $post->ID )[0]);
        $content = isset($insertContent) && !empty($insertContent) ? '<div class="insert-wrapper">'.$insertContent.'</div>' : '';
        return $content;
    }
    add_shortcode( 'insert_extras_content', 'func_insert_extras_content' );
?>
