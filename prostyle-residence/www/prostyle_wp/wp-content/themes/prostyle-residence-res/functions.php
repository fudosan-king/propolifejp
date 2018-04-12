<?php

    require_once('library/multipostthumbnails/multi-post-thumbnails.php');
    // require_once('library/tinymce-advanced/tinymce-advanced.php');
    require_once(get_template_directory()."/library/flexslider/slider_post_type.php");
    require_once(get_template_directory()."/library/flexslider/slider.php");

    function theme_prefix_setup(){
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));
    }

    add_action('after_setup_theme', 'theme_prefix_setup');

    function theme_prefix_the_custom_logo() {

        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }

    }



    if(!function_exists('register_custom_menu')):

        function register_custom_menu(){
            register_nav_menus(
                array(
                  'header-menu' => __( 'Header Menu' ),
                  'footer-menu' => __( 'Footer Menu' )
                )
              );
        }

        add_action( 'init', 'register_custom_menu' );

    endif;


    add_theme_support('post-thumbnails');

    add_action('init', 'create_custom_type_about');
    if(!function_exists('create_custom_type_about')):

        function create_custom_type_about(){
            $labels = array(
                'name' => 'Abouts',
                'singular_name' => 'About',
                'add_new' => 'Add New About',
                'add_new_item' => 'Add New About',
                'all_items' => 'All Abouts',
                'view_item' => 'View About',
                'edit_item' => 'Edit About',
                'search_items' => 'Search Abouts',
                'not_found' => 'No abouts found',
                'not_found_in_trash' => 'No abouts found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Abouts',
            );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'hierarchical' => true,
                'page-attributes' => true,
                'supports' => array('title', 'author', 'editor', 'custom-fields', 'post-formats', 'thumbnail'),
                'menu_icon' => get_template_directory_uri()."/img/icons/wp-about-icon.png"
            );

            register_post_type('abouts', $args);
        }
    endif;

    add_action('init', 'create_custom_type_entry');
    if(!function_exists('create_custom_type_entry')):

        function create_custom_type_entry(){
            $labels = array(
                'name' => 'Entries',
                'singular_name' => 'Entry',
                'add_new' => 'Add New Entry',
                'add_new_item' => 'Add New Entry',
                'all_items' => 'All Entries',
                'view_item' => 'View Entry',
                'edit_item' => 'Edit Entry',
                'search_items' => 'Search Entries',
                'not_found' => 'No entries found',
                'not_found_in_trash' => 'No entries found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Entries',
            );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'hierarchical' => false,
                'page-attributes' => true,
                'supports' => array('title', 'author', 'editor', 'custom-fields', 'post-formats', 'thumbnail'),
                'menu_icon' => get_template_directory_uri()."/img/icons/wp-entry-icon.png"
            );

            register_post_type('entries', $args);
        }
    endif;

    // Define additional "post thumbnails". Relies on MultiPostThumbnails to work
    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(array(
            'label' => 'Title Image',
            'id' => 'abouts-title-image',
            'post_type' => 'abouts'
            )
        );
        new MultiPostThumbnails(array(
            'label' => 'Status Image',
            'id' => 'entris-status-image',
            'post_type' => 'entries'
            )
        );
    };

?>
