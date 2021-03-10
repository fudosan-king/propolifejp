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

    define('COUNTER_PATH', ASSETS_PATH . '/counter');
    define('COUNTER_STYLESHEET_PATH', COUNTER_PATH . '/css');
    define('COUNTER_SCRIPT_PATH', COUNTER_PATH . '/js');
    define('COUNTER_IMAGE_PATH', COUNTER_PATH . '/images');

    define('BRANDING_PATH', ASSETS_PATH . '/branding');
    define('BRANDING_STYLESHEET_PATH', BRANDING_PATH . '/css');
    define('BRANDING_SCRIPT_PATH', BRANDING_PATH . '/js');
    define('BRANDING_IMAGE_PATH', BRANDING_PATH . '/images');

    define('SELL_PATH', ASSETS_PATH . '/sell');
    define('SELL_STYLESHEET_PATH', SELL_PATH . '/css');
    define('SELL_SCRIPT_PATH', SELL_PATH . '/js');
    define('SELL_IMAGE_PATH', SELL_PATH . '/images');

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

        add_image_size( 'banner-pc', 750, 350, false );
        add_image_size( 'thumbnail-pc', 350, 260, false );
        add_image_size( 'sidebar-pc', 106, 80, false );

        add_image_size( 'banner-sp', 345, 259, false );
        add_image_size( 'subbanner-sp', 167, 125, false );
        add_image_size( 'thumbnail-sp', 143, 108, false );

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
            // $query->set( 'post_type', array('post','event'));
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
        global $post;
        $header_extend_script = get_field('header_extend_script', 'option');
        $mdsmaf_m_v_condition = (
            is_page('booking-completed') || 
            (is_page('signup') && isset($_GET['action']) && ($_GET['action']=='confirm' || $_GET['action']=='active')) || 
            is_page('events/thanks')
        );
        if($mdsmaf_m_v_condition) {
            $header_extend_script .= "\n<script>";
            if(is_page('events/thanks')) {
                $logrenove_customer_id = $_POST['logrenove_customer_id']?:'';
                $header_extend_script .= 'var msmaf_m_v = '.$logrenove_customer_id.';';
                $header_extend_script .= 'var a8_affiliate_id = '.$logrenove_customer_id.';';
            }
            else {
                $logrenove_customer_id = random_logrenove_customer_id();
                $header_extend_script .= 'var msmaf_m_v = '.$logrenove_customer_id.';';
            }
            $header_extend_script .= "</script>\n";
            
        }
        echo $header_extend_script;
    }
    add_action( 'header_extra_script', 'add_extra_header_script');

    function add_extra_body_script(){
        global $post;
        $body_extend_script = '';
        $mdsmaf_m_v_condition = (
            is_page('booking-completed') || 
            (is_page('signup') && isset($_GET['action']) && ($_GET['action']=='confirm' || $_GET['action']=='active')) || 
            is_page('events/thanks')
        );
        $body_extend_script .= get_field('body_extend_script', 'option');
        echo $body_extend_script;
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
            $term = get_term($links[1]['term_id']);
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
            $_size = $detect->isMobile() ? 'thumbnail-pc' : 'thumbnail-pc' ;
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

    function get_event_datetime($event_id = false)
    {
        $post_id = $event_id?$event_id:get_the_ID();
        $event_date = get_event_date($post_id); //get_field('event_date', $post_id);
        $event_date = array_slice($event_date, 0, 6);
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

    # Event date http://redmine.fudosan-king.jp/issues/7562

    function get_event_date($event_id = false, $order_days = 365) {
        global $post;
        $event_id = $event_id?$event_id:$post->ID;
        $event_date_option = get_field('event_date', $event_id);
        $holydays = get_event_holydays();
        $event_excluded_days = get_event_excluded_days();
        $today = date('Y-m-d');
        $event_date = array();
        $i = 1;
        while ($i <= $order_days) {
            $date_diff = date_diff_events($today, '+'.$i.' days');
            $date_unix = strtotime($date_diff);
            $date = date('D Y-m-d', $date_unix);
            $week_day = explode(' ', $date, 2);
            switch ($event_date_option) {
                case 'date_2':
                    $condition = !in_array($week_day[0], array('Tue', 'Wed', 'Sat', 'Sun')) && !in_array($week_day[1], $holydays);
                    break;
                case 'date_3':
                    $condition = in_array($week_day[0], array('Sat', 'Sun')) || in_array($week_day[1], $holydays);
                    break;
                default: # default date_1
                    $condition = !in_array($week_day[0], array('Tue', 'Wed')) && !in_array($week_day[1], $holydays);
                    break;
            }
            if($condition && !in_array($week_day[1], $event_excluded_days)) $event_date[] = $date;
            $i++;
        }
        return $event_date;
    }

    function get_event_excluded_days() {
        $event_excluded_days = get_field('event_excluded_days', 'option');
        $event_excluded_days = (is_array($event_excluded_days) && count($event_excluded_days))?array_column($event_excluded_days, 'date'):array();
        return $event_excluded_days;
    }

    # End event date

    # Event holydays

    function get_event_holydays() {
        $data_holydays_file_url = __DIR__.'/assets/data/jp_national_holidays_min.json';
        $f = fopen($data_holydays_file_url, "r");
        $data = fread($f,filesize($data_holydays_file_url));
        fclose($f);
        $current_year = date('Y');
        $month = date('m');
        $day = date('d');
        $data = json_decode($data);
        $holydays = array();
        foreach ($data as $key => $month) {
            $year = $key;
            if(in_array($year, array($current_year, $current_year+1)))
            {
                foreach ($month as $key => $days) {
                    $month = $key;
                    foreach ($days as $key => $day) {
                        $holyday = $year.'-'.sprintf("%02d", $month).'-'.sprintf("%02d", $day);
                        $holyday_unix = strtotime($holyday);
                        if($holyday_unix >= time())
                        {
                            $holydays[] = $holyday;
                        }
                    }
                }
            }
        }
        return $holydays;
    }

    # End event holydays

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
                    'orderby' => 'modified',
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

    function date_diff_events($date = '', $days = '-2 days', $format='Y-m-d') 
    {
        // $timezone = get_option('timezone_string');
        // $date_2 = !empty($date_2) ? date('Y-m-d H:i', strtotime($date_2)) : date('Y-m-d H:i');
        // $date_1 = date('Y-m-d H:i', strtotime($date_1));
        // $origin = date_create($date_1, timezone_open($timezone));
        // $target = date_create($date_2, timezone_open($timezone));
        // $interval = date_diff($origin, $target);
        // return $interval->format('%R%a');
        $date = !empty($date)?date($format, strtotime($date)):date($format);
        $date = date($format, strtotime($date . $days));
        return $date;
    }

    function get_event_description($event_id=false)
    {
        global $post;
        $post_id = $event_id?$event_id:$post->ID;
        $description = get_field('event_description', $post_id);
        return $description;
    }

    function limit_event_content($content='', $limit=180, $remove_line = false, $strip_tags='<br>')
    {
        global $detect;
        if($detect->isMobile()) {
            $content = wp_trim_words($content, $limit, '...');
        }
        else {
            $content_arr = explode('<br />', $content, 3);
            if(is_array($content_arr) && count($content_arr) >= 3) {
                if($remove_line) {
                    unset($content_arr[$remove_line-1]);
                    $content_arr[$remove_line-2] = mb_strimwidth($content_arr[$remove_line-2], 0, $limit, '...');
                }
                else $content_arr[2] = mb_strimwidth($content_arr[2], 0, $limit, '...');
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
    function event_detail_schema($event_id=false) {
        global $post;
        $event_id=$event_id?$event_id:$post->ID;
        if(get_post_type($event_id) == 'events') {
            $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
            $event_date = get_event_date($event_id);
            $event_date = array_slice($event_date, 0, 6);
            $startDate = reset($event_date);
            $endDate = end($event_date);
            $startDate = count($event_date)?date('Y-m-d', strtotime($startDate)):'';
            $endDate = count($event_date)?date('Y-m-d', strtotime($endDate)):'';
    ?>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "<?php echo get_the_title($event_id); ?>",
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
      "description": "<?php echo preg_replace( "/\r|\n/", "", strip_tags(get_event_description($event_id))); ?>",
      "offers": {
        "@type": "Offer",
        "url": "<?php echo get_permalink($event_id); ?>",
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
            $_size = $detect->isMobile() ? 'sidebar-pc' : 'sidebar-pc' ;
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
        if(!is_home() && get_post_type() != 'page')
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

    # Login and register

    function set_cookie_redirect_post_url() {
        $redirect_cookie = 'wp-signup_redirect_to';
        list( $cookie_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
        if(!empty($_GET['redirect_to'])) {
            $redirect_value = sprintf( '%s', wp_unslash( $_GET['redirect_to'] ) );
            setcookie( $redirect_cookie, $redirect_value, 0, $cookie_path, COOKIE_DOMAIN, is_ssl(), true );
            wp_safe_redirect(remove_query_arg( array( 'redirect_to' )));
            exit;
        }
    }

    function auto_login_user_active($user_id) {
        wp_clear_auth_cookie();
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
    }

    function block_login_user_pending($login, $user) {
        if( $user->roles && in_array('pending',(array) $user->roles)) {
            $logout_url = esc_url(network_site_url('login'));
            wp_destroy_current_session();
            wp_logout();
            wp_redirect( $logout_url, 302 );
            exit();
        }
    }

    add_action('wp_login', 'block_login_user_pending',10,2);

    function is_member() {
        $user = wp_get_current_user();
        if (in_array( 'subscriber', (array) $user->roles)) return true;
        return false;
    }

    add_action('after_setup_theme', 'remove_admin_bar');
 
    function remove_admin_bar() {
        if (is_member()) show_admin_bar(false);
    }

    function send_mail_reset_password($user_email='') {
        $invalid = true;
        if(empty($user_email)) {
            $msg = '正しいメールアドレスを入力してください ';
        }
        else {
            $user_data = get_user_by( 'email', $user_email  );
            if(!$user_data) {
                $msg = '正しいメールアドレスを入力してください';
            }
            else {
                $user_login = $user_data->user_login;
                $user_email = $user_data->user_email;
                $key        = get_password_reset_key( $user_data );

                $message = __( 'パスワード再発行申請を受け付けました。' ) . "\r\n";
                $message .= __( '以下のURLにアクセスして、新しいパスワードを設定してください。' ) . "\r\n";
                $message .= '【' . network_site_url( "password-forgot?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . "】\r\n";
                $message .= __( 'LogRenove' ) . "\r\n";
                $message .= $home_url . "\r\n";
                $title = '【LogRenove】パスワードの再発行';
                // var_dump($key);
                $mail_result = wp_mail( $user_email, $title , $message );
                $invalid = false;
            }
        }
        return array('invalid'=> $invalid, 'msg'=> $msg);
    }

    function verify_reset_password() {
        global $wp;
        $invalid = true;
        $msg = '';
        $rp_key = isset($_GET['key'])?$_GET['key']:'';
        $rp_login = isset($_GET['login'])?$_GET['login']:'';
        list( $rp_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
        $rp_cookie       = 'wp-resetpass-' . COOKIEHASH;
        if ( isset( $_GET['key'] ) ) {
            $value = sprintf( '%s:%s', wp_unslash( $_GET['login'] ), wp_unslash( $_GET['key'] ) );
            setcookie( $rp_cookie, $value, 0, $rp_path, COOKIE_DOMAIN, is_ssl(), true );

            wp_safe_redirect( remove_query_arg( array( 'key', 'login' ) ) );
            exit;
        }
        if ( isset( $_COOKIE[ $rp_cookie ] ) && 0 < strpos( $_COOKIE[ $rp_cookie ], ':' ) ) {
            list( $rp_login, $rp_key ) = explode( ':', wp_unslash( $_COOKIE[ $rp_cookie ] ), 2 );

            $user = check_password_reset_key( $rp_key, $rp_login );
        } else {
            $user = false;
        }

        if ( ! $user || is_wp_error( $user ) ) {
            setcookie( $rp_cookie, ' ', time() - YEAR_IN_SECONDS, $rp_path, COOKIE_DOMAIN, is_ssl(), true );

            if ( $user && $user->get_error_code() === 'expired_key' ) {
                wp_redirect( site_url( 'password-forgot?error=expiredkey' ) );
            } else {
                wp_redirect( site_url( 'password-forgot?error=invalidkey' ) );
            }

            exit;
        }
        if($user) {
            if(isset($_POST['pass1']) && isset($_POST['pass2'])) {
                if($_POST['pass1'] == '') wp_redirect( site_url( 'password-forgot?action=rp&error=passempty' ) );
                elseif(strlen($_POST['pass1']) < 6) wp_redirect( site_url( 'password-forgot?action=rp&error=passmin6' ) );
                elseif(jpn_zenkaku_only($_POST['pass1'])) wp_redirect( site_url( 'password-forgot?action=rp&error=passhalfwidth' ) );
                elseif($_POST['pass1'] != $_POST['pass2']) wp_redirect( site_url( 'password-forgot?action=rp&error=passnotmatch' ) );
                else {
                    reset_password( $user, $_POST['pass1'] );
                    setcookie( $rp_cookie, ' ', time() - YEAR_IN_SECONDS, $rp_path, COOKIE_DOMAIN, is_ssl(), true );
                    wp_redirect( site_url( 'password-forgot?action=finish' ) );
                }
                exit;
            }
        }
    }

    function signup_user($user_email='', $pass1='', $pass2='', $direct_url = 'signup?action=confirm') {
        $invalid = true;
        $msg = '';
        $mail_magazine = isset($_POST['mail_magazine']) ? filter_var($_POST['mail_magazine'], FILTER_VALIDATE_BOOLEAN)  : false ;
        if($user_email == '' || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) $msg = '正しいメールアドレスを入力してください';
        elseif($pass1 == '') $msg = '正しいパスワードを入力してください';
        elseif(strlen($pass1) < 6) $msg = '正しいパスワードを入力してください';
        elseif(jpn_zenkaku_only($pass1)) $msg = '半角文字のパスワード';
        elseif($pass1 != $pass2) $msg = 'パスワードが一致しません';
        else {
            $isExisted = email_exists( $user_email );
            if(!$isExisted){
                $invalid = false;
                $user_id = wp_create_user($user_email, $pass1, $user_email);
                if($user_id) {
                    send_activation_link($user_id, $user_email);
                    if($mail_magazine) {
                        $pardot_data = array();
                        $pardot_data['email'] = $user_email;
                        $pardot_data['mail_magazine'] = 1;
                        $pardot_url = 'https://form.run/api/v1/r/na87k3dtv1m6cp7wdcsr81x6';//'http://go.pardot.com/l/185822/2020-11-12/qpj6kj';
                        send_pardot_form($pardot_url, $pardot_data);
                    }
                }
                wp_redirect(site_url($direct_url));
                exit;
            } else {
                $user = get_userdata($isExisted);
                if(in_array( 'pending', (array) $user->roles)) $msg = 'こちらメールアドレスは、登録が完了しておりません。<span class="resend-activation">こちら</span>から再度メール認証を行って、会員登録を完了してください。';
                else $msg = 'このメールアドレスは既に登録済みです';
            }
        }
        return array('invalid'=> $invalid, 'msg'=> $msg);
    }

    function send_activation_link($user_id, $user_email, $link_active = 'signup?action=active'){
        global $wp_hasher;
        $home_url = get_home_url();
        $signup_redirect_to = !empty($_COOKIE['wp-signup_redirect_to'])?$_COOKIE['wp-signup_redirect_to']:$home_url;
        $key = wp_generate_password( 20, false );
        if ( empty( $wp_hasher ) ) {
            require_once ABSPATH . WPINC . '/class-phpass.php';
            $wp_hasher = new PasswordHash( 8, true );
        }
        $hashed = $wp_hasher->HashPassword( $key );
        $activation_code = get_user_meta($user_id, 'activation_code', true);
        if($activation_code=='') {
            delete_user_meta($user_id, 'activation_code');
            add_user_meta( $user_id, 'activation_code', $hashed );
        }
        else update_user_meta( $user_id, 'activation_code', $hashed );
        $signup_redirect_to_meta = get_user_meta($user_id, 'signup_redirect_to', true);
        if($signup_redirect_to_meta == '') {
            delete_user_meta($user_id, 'signup_redirect_to');
            add_user_meta( $user_id, 'signup_redirect_to', $signup_redirect_to );
        }
        else update_user_meta( $user_id, 'signup_redirect_to', $signup_redirect_to );
        $user_info = get_userdata($user_id);
        $user_login = $user_info->user_login;
        $message = __( '※このメールにお心当たりのない場合は、URLにアクセスせずメールを破棄してください。' ) . "\r\n\r\n";
        $message .= __( 'この度は、LogRenove Web会員にご登録いただきありがとうございます。' ) . "\r\n";
        $message .= __( '登録はまだ完了しておりません。 以下のURLに接続して、本登録をおこなってください。' ) . "\r\n\r\n";
        $message .= '【' . network_site_url($link_active.'&activation_code='.$key.'&login='.rawurlencode($user_login), 'activation_link' ) . "】\r\n\r\n";
        $message .= __( '※URLが改行されてしまう場合は、1行につなげてブラウザのアドレスバーにご入力ください。' ) . "\r\n\r\n";
        $message .= __( 'LogRenove' ) . "\r\n";
        $message .= $home_url . "\r\n";
        $title = '【LogRenove】本登録のお願い';
        $mail_result = wp_mail( $user_email, $title , $message );
    }

    function resend_activation_link_ajax() {
        $user_email = isset($_POST['user_email'])?$_POST['user_email']:'';
        $user = get_user_by( 'email', $user_email );
        if(in_array( 'pending', (array) $user->roles)) {
            send_activation_link($user->ID, $user_email);
            echo 'ok';die; 
        }
        echo 'fail';die; 
    }
    add_action('wp_ajax_nopriv_resend_activation_link_ajax', 'resend_activation_link_ajax');

    function send_mail_confirm($user_email) {
        $home_url = get_home_url();
        $template_file = 'register_confirm.txt';
        $template = get_email_template($template_file);
        $message = preg_replace('/{email}/', $user_email, $template);
        $title = '【LogRenove】登録完了のお知らせ';
        $mail_result = send_wp_mail( $user_email, $title , $message );
    }

    function active_user($page = 'signup') {
        $activation_code = isset($_GET['activation_code'])?$_GET['activation_code']:'';
        $login = isset($_GET['login'])?$_GET['login']:'';
        list( $rp_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
        $rp_cookie       = 'wp-activation-' . COOKIEHASH;
        if ( isset( $_GET['activation_code'] ) ) {
            $value = sprintf( '%s:%s', wp_unslash( $_GET['login'] ), wp_unslash( $_GET['activation_code'] ) );
            setcookie( $rp_cookie, $value, 0, $rp_path, COOKIE_DOMAIN, is_ssl(), true );

            wp_safe_redirect( remove_query_arg( array( 'activation_code', 'login' ) ) );
            exit;
        }
        if ( isset( $_COOKIE[ $rp_cookie ] ) && 0 < strpos( $_COOKIE[ $rp_cookie ], ':' ) ) {
            list( $login, $activation_code ) = explode( ':', wp_unslash( $_COOKIE[ $rp_cookie ] ), 2 );

            $user = check_activation_code( $activation_code, $login );
        } else {
            $user = false;
        }
        $user_data = get_user_by( 'login', $login );
        if (!in_array( 'subscriber', (array) $user_data->roles)) {
            if($user) {
                $user_meta = get_user_meta($user_data->ID);
                $signup_redirect_to = $user_meta['signup_redirect_to'][0];
                setcookie( $rp_cookie, ' ', time() - YEAR_IN_SECONDS, $rp_path, COOKIE_DOMAIN, is_ssl(), true );
                $u = new WP_User($user_data->ID);
                $u->remove_role( 'pending' );
                $u->add_role( 'subscriber' );
                auto_login_user_active($user_data->ID);
                if($page == 'signup') send_mail_confirm($user_data->user_email);
                else if($page == 'avatar') send_mail_confirm_avatar($user_data->user_email);
                return $signup_redirect_to;
            }
        }
        return false;
    }

    function check_activation_code($activation_code, $login) {
        global $wp_hasher;
        $activation_code = preg_replace( '/[^a-z0-9]/i', '', $activation_code );
        $user = get_user_by( 'login', $login );
        $user_meta = get_user_meta($user->ID);
        if ( ! $user ) {
            return new WP_Error( 'invalid_key', __( 'Invalid key.' ) );
        }
        $user_activation_code = $user_meta['activation_code'][0];
        if ( empty( $wp_hasher ) ) {
            require_once ABSPATH . WPINC . '/class-phpass.php';
            $wp_hasher = new PasswordHash( 8, true );
        }
        $hash_is_correct = $wp_hasher->CheckPassword( $activation_code, $user_activation_code );
        if($hash_is_correct) return true;
        else return false;
    }

    # Check full-width
    function jpn_zenkaku_only($str) {

        $encoding = "UTF-8";
        
        // Get length of string
        $len = mb_strlen($str, $encoding);

                
        // Check each character 
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($str, $i, 1, $encoding);
        
            // Check for non-printable characters
            if (ctype_print($char)) {
                return false;
            } else return true;
                    
            // Convert to SHIFT-JIS to include kana characters
            $char = mb_convert_encoding($char, 'SJIS', $encoding);
        
            // Check if string lengths match
            if (strlen($char) === mb_strlen($char, 'SJIS')) {
                return false;
            } else return true;
        }
    }

    function send_pardot_form($pardot_url, $pardot_data) {
        $data = http_build_query($pardot_data);
        $referer = 'https://www.logrenove.jp/';//wp_get_referer()?:home_url();
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => array(
                    "Content-Type: application/x-www-form-urlencoded", 
                    "Referer: ".$referer,
                ),
                'content' => $data
            ),
            'ssl' => ['verify_peer' => false, 'verify_peer_name' => false],
        );
        $context  = stream_context_create($opts);
        $result = file_get_contents($pardot_url, false, $context);
        return $result;
    }

    function get_email_template($template_file) {
        $template_file_url = __DIR__.'/assets/email-templates/'.$template_file;
        $f = fopen($template_file_url, "r");
        $data = fread($f,filesize($template_file_url));
        fclose($f);
        return $data;
    }

    function send_wp_mail($to, $subject, $message, $attachments = array()) {
        $headers = array('Content-Type: text/html;');
        $result = wp_mail($to, $subject, $message, $headers);
        return $result;
    }

    # Counter Avatar

    function send_pardot_avatar($status=''){
        $pardot_data = array();
        $pardot_data['date'] = isset($_POST['date'])?$_POST['date']:'';
        $pardot_data['time'] = isset($_POST['time'])?$_POST['time']:'';
        if (is_user_logged_in()){
            $user = wp_get_current_user();
            $pardot_data['email'] = $user->user_email;
            $pardot_url = 'https://form.run/api/v1/r/mcfggys1usrhdi33o0wtn46m';//'https://go.pardot.com/l/185822/2020-11-12/qpj5x8';
        }
        else {
            $email = isset($_POST['user_email'])?$_POST['user_email']:'';
            $mail_magazine = isset($_POST['mail_magazine']) ? filter_var($_POST['mail_magazine'], FILTER_VALIDATE_BOOLEAN)  : false ;
            $pardot_data['email'] = $email;
            $pardot_data['mail_magazine'] = $mail_magazine?1:0;
            $pardot_url = 'https://form.run/api/v1/r/rkkol6l72qmcu1qlovu08y3k';//'http://go.pardot.com/l/185822/2020-11-12/qpj61l';
        }
        $result = send_pardot_form($pardot_url, $pardot_data);
        $direct_url = 'booking-completed';
        if($status!='') $direct_url .= '?status='.$status;
        if($result) wp_redirect(site_url($direct_url));exit;
    }

    function user_login_ajax_avatar() {
        $data = array();
        $data['user_email'] = false;
        $data['user_password'] = false;
        $user_email = isset($_POST['user_email'])?$_POST['user_email']:'';
        $user_password = isset($_POST['user_password'])?$_POST['user_password']:'';
        if(!empty($user_email)){
            $user = get_user_by( 'email', $user_email  );
            if($user && $user->roles && !in_array('pending',(array) $user->roles)) {
                $data['user_email'] = true;
                $auth = wp_check_password( $user_password, $user->user_pass, $user->ID );
                if($auth) {
                    $data['user_password'] = true;
                    $creds = array(
                        'user_login'    => $user->user_login,
                        'user_password' => $user_password,
                    );
                    $user_ = wp_signon( $creds, false );
                    $error = !empty($user_->errors)?$user_->errors:false;
                }
            }
        }
        echo json_encode($data);die;
    }

    function user_signup_ajax_avatar() {
        $data = array();
        $data['user_email'] = false;
        $date = isset($_POST['date'])?$_POST['date']:'';
        $time = isset($_POST['time'])?$_POST['time']:'';
        $user_email = isset($_POST['user_email'])?$_POST['user_email']:'';
        $user_password = isset($_POST['user_password'])?$_POST['user_password']:'';
        $mail_magazine = isset($_POST['mail_magazine']) ? filter_var($_POST['mail_magazine'], FILTER_VALIDATE_BOOLEAN)  : false ;
        $isExisted = email_exists( $user_email );
        if(!$isExisted){
            $data['user_email'] = true;
            $user_id = wp_create_user($user_email, $user_password, $user_email);
            if($user_id) {
                $template_file = 'counter/register_confirm.txt';
                $booking_data = array();
                $booking_data['date'] = $date;
                $booking_data['time'] = $time;
                add_user_meta( $user_id, 'booking_data', json_encode($booking_data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) );
                send_activation_link_avatar($user_id, $user_email, $template_file);
            }
        }
        echo json_encode($data);die;
    }

    function send_activation_link_avatar($user_id, $user_email, $template_file, $link_active = 'booking-completed/?status=confirm'){
        global $wp_hasher;
        $key = wp_generate_password( 20, false );
        if ( empty( $wp_hasher ) ) {
            require_once ABSPATH . WPINC . '/class-phpass.php';
            $wp_hasher = new PasswordHash( 8, true );
        }
        $hashed = $wp_hasher->HashPassword( $key );
        add_user_meta( $user_id, 'activation_code', $hashed );
        $user_info = get_userdata($user_id);
        $user_login = $user_info->user_login;
        $template = get_email_template($template_file);
        $active_link = network_site_url($link_active.'&activation_code='.$key.'&login='.rawurlencode($user_login), 'activation_link' );
        $message = preg_replace('/{active_link}/', $active_link, $template);
        $title = '【スマートリノベカウンター】予約を確定してください。';
        $mail_result = send_wp_mail( $user_email, $title , $message );
    }

    function send_mail_confirm_avatar($user_email) {
        $home_url = get_home_url();
        $template_file = 'counter/booking_completed.txt';
        $template = get_email_template($template_file);
        $user = get_user_by( 'email', $user_email);
        $booking_data = get_usermeta($user->ID, 'booking_data');
        $booking_data = json_decode($booking_data);
        $booking_date = $booking_data->date;
        $booking_time = $booking_data->time;
        $date_time = $booking_date.$booking_time;
        $message = preg_replace('/{date_time}/', $date_time, $template);
        $title = '【スマートリノベカウンター】ご予約ありがとうございます。';
        $mail_result = send_wp_mail( $user_email, $title , $message );
    }

    add_action('wp_ajax_user_login_ajax_avatar', 'user_login_ajax_avatar');
    add_action('wp_ajax_nopriv_user_login_ajax_avatar', 'user_login_ajax_avatar');
    add_action('wp_ajax_user_signup_ajax_avatar', 'user_signup_ajax_avatar');
    add_action('wp_ajax_nopriv_user_signup_ajax_avatar', 'user_signup_ajax_avatar');
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

    /* http://redmine.fudosan-king.jp/issues/7700 */

    function check_member_status_post() {
        global $post;
        if(is_page() || is_single()) {
            $category = get_the_category( $post->ID )[0];
            $parent = get_term( $category->category_parent, 'category' );
            $category_parent_status = get_field('member_post_status', $parent);
            $category_status = get_field('member_post_status', $category);
            $status = get_field('member_post_status', $post->ID);
            if(($category_parent_status == 'member_only' || $category_status == 'member_only' || $status == 'member_only') && !is_user_logged_in()) {
                wp_redirect(site_url('login'));
                exit;
            }
        }
    }
    add_action( 'wp_head', 'check_member_status_post');

    function func_insert_short_code_login(){
        global $post;
        $permalink = get_permalink($post->ID);
        $insertContent = '<div class="btn-only-member">
            <div class="btn-only-member_ct">
                <p><i class="btn-only-member_i-clock"></i>この記事は会員限定です。</p>
                <p>会員登録（無料）すると続きをお読みいただけます。</p>
                <div class="row">
                    <div class="col-6 col-md-6">
                        <p>新規登録の方はこちら</p>
                        <a class="btn btn-only-member_brown" href="'.site_url('signup/?redirect_to='.$permalink).'" target="_tbank">今すぐ登録</a>
                    </div>
                    <div class="col-6 col-md-6">
                        <p>会員の方はこちら</p>
                        <a class="btn btn-only-member_blue" href="'.site_url('login/?redirect_to='.$permalink).'">ログイン</a>
                    </div>
                </div>
            </div>
        </div>';
        $content = $insertContent;
        return $content;
    }
    add_shortcode( 'insert_short_code_login', 'func_insert_short_code_login' );

    add_filter( 'the_content', 'filter_the_content_login' );

    function filter_the_content_login($content) {
        if( is_single() || is_page() ) {
            $has_short_code_login = has_shortcode($content, 'insert_short_code_login');
            if($has_short_code_login && !is_user_logged_in()) {
                $content = preg_replace('/\[insert_short_code_login\].*/sm', '', $content);
                $content .= '[insert_short_code_login]';
            }
            else $content = preg_replace('/\[insert_short_code_login\]/', '', $content);
        }
        return $content;
    }

    add_filter('jpeg_quality', function($arg){return 100;});
    add_filter( 'wp_editor_set_quality', function($arg){return 100;} );

    function get_recommend_events_ids($post_type = 'events')
    {
        $articles_ids = [];
        for($i=1;$i<=5;$i++)
        {
            $articles = get_field('recommend_event_'.$i, 'option');
            $articles_url = !empty($articles['url'])?$articles['url']:'';
            if(!empty($articles_url))
            {
                $articles_ids[] = intval(filter_var($articles_url, FILTER_SANITIZE_NUMBER_INT));
            }
            
        }

        $count_articles_ids = is_array($articles_ids)?count($articles_ids):0;
        $numberposts = 5 - $count_articles_ids;

        if($count_articles_ids < 5)
        {
            $recent_posts = get_mostviewed_event($numberposts, $articles_ids, $post_type);
            // $articles_ids = is_array($articles_ids)?array_merge($articles_ids, array_column($post_ids, 'ID')):array_column($post_ids, 'ID');
            $articles_ids = array_merge($articles_ids, $recent_posts);
        }

        return $articles_ids;


    }

    function get_mostviewed_event($numberposts = 5, $list_id = array(), $post_type = "events") {
        $args = array(
            'post_type'             =>      'events',
            'posts_per_page'        =>      $numberposts,
            'meta_key'              =>      'wpb_post_views_count',
            'orderby'               =>      'meta_value',
            'exclude'               =>      $list_id,
        );

        $get_id = new WP_Query($args);
        if ( $get_id->have_posts() ) {
            while ($get_id->have_posts()) {
                $get_id->the_post();
                $post_ids = wp_list_pluck( $get_id->posts, 'ID' );
            }
        }

        return $post_ids;
    }

    /* http://redmine.fudosan-king.jp/issues/7753 */

    function get_homepage_posts($homepage_setting = 'useful_content') {
        global $detect;
        $homepage_posts = get_field($homepage_setting, 'option');
        if(count($homepage_posts)) {
            $posts = array();
            foreach ($homepage_posts as $key => $homepage_post) {
                $homepage_post = $homepage_post['post'];
                $obj = new stdClass();
                $obj->ID = $homepage_post->ID;
                $obj->title = $homepage_post->post_title;
                $_size = $detect->isMobile() ? 'thumbnail-pc' : 'thumbnail-pc' ;
                $thumbnails = new ThumbnailItem(get_post_thumbnail_id($homepage_post), $_size);
                $obj->thumbails_url = !empty($thumbnails)?$thumbnails->url:'';
                $obj->permalink = get_permalink($homepage_post);
                if($homepage_setting=='homepage_events') {
                    $obj->categories = get_the_terms($obj->ID, 'event_category');
                }
                else {
                    $obj->categories = (!empty(get_the_category($homepage_post)) && count(get_the_category($homepage_post))) ?get_the_category($homepage_post) :array();
                }
                $obj->description = $homepage_setting=='homepage_events'?get_field('event_description', $obj->ID):'';
                $posts[] = $obj;
            }
            $posts = $detect->isMobile()&&$homepage_setting=='useful_content'?array_slice($posts, 0, 10):$posts;
            return $posts;
        }
        return false;
    }

    /* http://redmine.fudosan-king.jp/issues/7804 */

    function get_event_terms($taxonomy = 'event_category') {
        $args = array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            );
        $terms = get_terms($args);
        return $terms;
    }

    function get_popular_seminar() {
        global $detect;
        $popular_seminars = get_field('popular_seminar', 'option');
        if(count($popular_seminars)) {
            $posts = array();
            foreach ($popular_seminars as $key => $popular_seminar) {
                $popular_seminar = $popular_seminar['post'];
                $obj = get_event_detail($popular_seminar->ID);
                $obj->rank = $key+1;
                $posts[$key] = $obj;
            }
            $posts = $detect->isMobile()?array_slice($posts, 0, 3):$posts;
            return $posts;
        }
        return false;
    }

    function event_popular_seminar_schema() {
        if((is_page( 'events' ) || is_tax('event_category') || is_tax('event_tags'))) {
            $popular_seminar = get_popular_seminar();
            if($popular_seminar) {
                foreach ($popular_seminar as $key => $event) {
                    $event_id = $event->ID;
                    event_detail_schema($event_id);
                }
            }
        }
    }

    function get_event_detail($event_id) {
        global $detect;
        $event_id = is_object($event_id)?$event_id->ID:$event_id;
        $event_datetime = get_event_datetime($event_id);
        $obj = new stdClass();
        $obj->ID = $event_id;
        $obj->title = get_the_title($event_id);
        $_size = $detect->isMobile() ? 'thumbnail-pc' : 'thumbnail-pc' ;
        $thumbnails = new ThumbnailItem(get_post_thumbnail_id($event_id), $_size);
        $obj->thumbails_url = !empty($thumbnails)?$thumbnails->url:'';
        $obj->permalink = get_permalink($event_id);
        $obj->categories = get_the_terms($obj->ID, 'event_category');
        $obj->tags = get_the_terms($obj->ID, 'event_tags');
        $obj->description = get_field('event_description', $obj->ID);
        $obj->date_rand = date_i18n('Fj日 (D)', strtotime($event_datetime['date'][0]));
        $obj->time_rand = is_array($event_datetime['time'])&&count($event_datetime['time'])?$event_datetime['time'][array_rand($event_datetime['time'], 1)]['hour']:'';
        return $obj;
    }

    function get_event_list_by_date($date, $posts_per_page=30, $args=array()) {
        $current_term = get_queried_object();
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args_post = array(
                    'post_type' => 'events',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'perm' => 'readable',
                    'no_found_rows'          => false,
                    'cache_results'          => true,
                    'update_post_term_cache' => true,
                    'update_post_meta_cache' => true,
                    'posts_per_page' => $posts_per_page,
                    'orderby' => 'rand',
                    'meta_query' => array(
                        array(
                            'key'       => 'event_date_list',
                            'value'     => preg_quote($date),
                            'compare'   => 'REGEXP',
                        )
                    )
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
        $args_post = count($args)?array_merge($args_post, $args):$args_post;
        $event_posts = new WP_Query( $args_post );
        if($event_posts->have_posts()) {
            $event_ids = wp_list_pluck( $event_posts->posts, 'ID' );
            $event_detail = array($event_detail);
            foreach ($event_ids as $key => $event_id) {
                $event_detail[$key] = get_event_detail($event_id);
            }
            return $event_detail;
        }
        return false;
    }

    function get_event_date_list($fromdate=false, $limit=30, $args=array()) {
        $timezone = get_option('timezone_string');
        $fromdate = $fromdate?$fromdate:date('Y-m-d');
        $d = isset($_REQUEST['d'])?$_REQUEST['d']:'';
        $holydays = get_event_holydays();
        $event_excluded_days = get_event_excluded_days();
        $count_post = 0;
        $events = array();
        $i = 1;
        while ($count_post < $limit) {
            $limit_by_date = 0;
            $next_day = date_diff_events($fromdate, '+'.$i.' days', 'D Y-m-d');
            $week_day = explode(' ', $next_day, 2);
            if(!in_array($week_day[1], $event_excluded_days)) {
                switch ($d) {
                    case 'sat':
                    case 'sun':
                        if($d==strtolower($week_day[0])) $limit_by_date = 10;
                        break;
                    case 'week':
                        if(!in_array($week_day[0], array('Sat', 'Sun', 'Fri')) && !in_array($week_day[1], $holydays)) $limit_by_date = 2;
                        elseif(in_array($week_day[0], array('Fri')) && !in_array($week_day[1], $holydays)) $limit_by_date = 6;
                        elseif(!in_array($week_day[0], array('Sat', 'Sun')) && in_array($week_day[1], $holydays)) $limit_by_date = 10;
                        break;
                    default:
                        if(in_array($week_day[0], array('Mon', 'Thu')) && !in_array($week_day[1], $holydays)) $limit_by_date = 2;
                        elseif (in_array($week_day[0], array('Fri')) && !in_array($week_day[1], $holydays)) $limit_by_date = 6;
                        elseif (in_array($week_day[0], array('Sat', 'Sun')) || in_array($week_day[1], $holydays)) $limit_by_date = 10;
                        break;
                }
                if($limit_by_date) {
                    $event_list_by_date = get_event_list_by_date($next_day, $limit_by_date, $args);
                    if($event_list_by_date) $events[$next_day] = $event_list_by_date;
                }
            }
            $count_post = $count_post+$limit_by_date;
            $i++;
        }
        return $events;
    }

    function get_event_date_list_ajax() {
        $fromdate = isset($_REQUEST['fromdate'])?$_REQUEST['fromdate']:date('Y-m-d');
        $term_id = isset($_REQUEST['term_id'])?intval($_REQUEST['term_id']):'';
        $taxonomy = isset($_REQUEST['taxonomy'])?$_REQUEST['taxonomy']:'';
        $args = array();
        if(is_term($term_id) != NULL) {
            $args = array('tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => $term_id,
                 )
            ));
        }
        $event_lists = get_event_date_list($fromdate, 30, $args);
        $event_html = '';
        foreach ($event_lists as $date => $event_list):
            $date_format = date_i18n('Fj日 (D)', strtotime($date));
            $event_html .= '<div class="event-lists" data-date="'.$date.'">
                <h2>'.$date_format.'</h2>';
                foreach ($event_list as $key => $event):
                $event_html .= '<div class="box_list_services_item">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-12">
                            <h3 class="d-block d-lg-none"><a href="'.$event->permalink.'">'.$event->title.'</a></h3>
                        </div>
                        <div class="col-4 col-lg-4 align-self-center">
                            <div class="box_list_services_item_img">
                                <a href="'.$event->permalink.'"><img src="'.$event->thumbails_url.'" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 align-self-center">
                            <div class="box_list_services_item_body">
                                <h3 class="d-none d-lg-block"><a href="'.$event->permalink.'">'.$event->title.'</a></h3>
                                <p>'.$event->description.'</p>
                                <ul>
                                    <li><img src="'.IMAGE_PATH.'/i_date.svg" alt="" class="img-fluid" width="10"> '.$date_format.' '.$event->time_rand.'〜</li>
                                    <li><img src="'.IMAGE_PATH.'/i_map.svg" alt="" class="img-fluid" width="10"> オンライン</li>
                                </ul>
                                <ul>';
                                        if(is_array($event->categories) && count($event->categories)) { 
                                            foreach ($event->categories as $key => $cat) { 
                                                $cat_link = get_category_link($cat);
                                                $event_html .= '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>';
                                            }
                                        }
                                $event_html .= '</ul>
                            </div>
                        </div>
                    </div>
                </div>';
            endforeach;
            $event_html .= '</div>';
        endforeach;
        echo $event_html;die;
    }

    add_action('wp_ajax_event_date_list', 'get_event_date_list_ajax');
    add_action('wp_ajax_nopriv_event_date_list', 'get_event_date_list_ajax');

    function send_pardot_event() {
        $pardot_url = 'https://form.run/api/v1/r/e3qw48e2wxr4o6wdi8tebekk';//'https://go.pardot.com/l/185822/2020-09-01/qh62y3';
        $pardot_data = array();
        $pardot_data['logrenove_customer_id'] = $_POST['logrenove_customer_id']?:'';
        $pardot_data['date'] = $_POST['date']?:'';
        $pardot_data['time'] = $_POST['time']?:'';
        // $pardot_data['seminer_method'] = $_POST['seminer_method']?:'';
        $pardot_data['name'] = $_POST['full_name']?:'';
        $pardot_data['email'] = $_POST['email']?:'';
        $pardot_data['phone-number'] = $_POST['phone-number']?:'';
        $pardot_data['inquiry_content'] = $_POST['inquiry_content']?:'';
        if(empty($pardot_data['logrenove_customer_id']) && empty($pardot_data['date']) && empty($pardot_data['time']) && empty($pardot_data['name']) && empty($pardot_data['email']) && empty($pardot_data['phone-number'])) {
            return;
        }
        return send_pardot_form($pardot_url, $pardot_data);
    }

    function random_logrenove_customer_id() {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random = '';
        for ( $i = 0; $i < 10; $i++ ) {
            $random .= substr( $chars, wp_rand( 0, strlen( $chars ) - 1 ), 1 );
        }
        return $random;
    }

    function update_event_date_list($event_id) {
        if(get_post_type($event_id) == 'events') {
            $event_date = get_event_date($event_id, 2000);
            $event_date_key = 'event_date_list';
            $check = get_post_meta($event_id, $event_date_key, true);
            $date_list = json_encode($event_date, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
            if($check==''){
                delete_post_meta($event_id, $event_date_key);
                add_post_meta($event_id, $event_date_key, $date_list);
            }else{
                update_post_meta($event_id, $event_date_key, $date_list);
            }
        }
    }

    function update_event_date_all_events() {
        $args_post = array(
                    'post_type' => 'events',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'perm' => 'readable',
                    'no_found_rows'          => false,
                    'cache_results'          => true,
                    'update_post_term_cache' => true,
                    'update_post_meta_cache' => true,
                    'posts_per_page' => -1,
                );

        $event_posts = new WP_Query( $args_post );
        if ( $event_posts->have_posts() ) $event_ids = wp_list_pluck( $event_posts->posts, 'ID' );
        foreach ($event_ids as $key => $event_id) {
            update_event_date_list($event_id);
        }
    }
    add_action( 'save_post', 'update_event_date_list', 10, 2 );

    /* WARNING: update_event_date_all_events run only first time and one time when event exclude days setting has change */
    // add_action( 'after_setup_theme', 'update_event_date_all_events' );
?>
