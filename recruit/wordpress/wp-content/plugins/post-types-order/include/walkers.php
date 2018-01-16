<?php

    class Post_Types_Order_Walker extends Walker 
        {

            var $db_fields = array ('parent' => 'post_parent', 'id' => 'ID');

            function start_lvl(&$output, $depth = 0, $args = array()) {
                $indent = str_repeat("\t", $depth);
                $output .= "\n$indent<ul class='children'>\n";
            }


            function end_lvl(&$output, $depth = 0, $args = array()) {
                $indent = str_repeat("\t", $depth);
                $output .= "$indent</ul>\n";
            }


            function start_el(&$output, $page, $depth = 0, $args = array(), $id = 0) {
                if ( $depth )
                    $indent = str_repeat("\t", $depth);
                else
                    $indent = '';

                extract($args, EXTR_SKIP);
                
                $_post_type = $_GET['post_type'];
                
                $item_details   =   apply_filters( 'the_title', $page->post_title, $page->ID );
                $item_details   =   apply_filters('cpto/interface_itme_data', $item_details, $page);
                
                if($_post_type == 'job'){
                    $job_thumb = wp_get_attachment_image_src(get_post_meta($page->ID, 'job_image_thumb', true), 'thumbnail');
                    $output .= $indent . '<li id="item_'.$page->ID.'" class="' . $_post_type . '"><img src="' . $job_thumb[0] .'" alt=""><span>'. $item_details .'</span>';
                }
                
                if($_post_type == 'career'){
                    $output .= $indent .'<li id="item_' . $page->ID .'" class="' . $_post_type . '">' . $item_details;
                }
                
                if($_post_type == 'nav_side_banner'){
                    $output .= $indent .'<li id="item_' . $page->ID .'" class="' . $_post_type . '">' . $item_details;
                }
                
                
            }


            function end_el(&$output, $page, $depth = 0, $args = array()) {
                $output .= "</li>\n";
            }

        }



?>