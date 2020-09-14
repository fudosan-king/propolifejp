<?php
add_action( 'init', 'init_api' );
function init_api(){
    if (isset($_GET['args']) && $_GET['args']['callback'] == 'api'){
    // if (isset($_GET['callback']) && $_GET['callback'] == 'api'){
        header('Content-type:application/json;charset=utf-8');
        
        $data = array();
        $args = $_GET['args'];
        $function = array_key_exists('function', $args) ? $args['function'] : 'default';

        try {
            switch ($function) {
                case 'get_ajax_post_by_showroom_id':{
                    $post_list = array();

                    $paged = max(1, $args['paged']);

                    $args = array(
                    
           
                        // Type & Status Parameters
                        'post_type'   => 'event',
                        'post_status' => 'publish',

                        'meta_key'       => 'showroom',
                        'meta_value' => $args['showroom_id'],
                
                        // Order & Orderby Parameters
                        'order'               => 'DESC',
                        'orderby'             => 'date',
                        'ignore_sticky_posts' => false,

                        // Pagination Parameters
                        'posts_per_page'         => get_option('posts_per_page'),
                        // 'posts_per_page'         => 1,
                        'nopaging'               => false,
                        'paged'                  => $paged,
                
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
                            global $post;

                            $post->customize_img = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );
                            $post->customize_date = get_field('date');
                            $post->customize_stringTime = get_field('visit_time').'〜'.get_field('end_time');

                            $post->customize_showroom_obj = get_field('showroom');
                            $post->customize_are_obj = get_field('area', get_field('showroom'));

                            $post->customize_permalink = get_permalink();

                            array_push($post_list, $post);
                            
                        endwhile;

                        $data['posts'] = $post_list;
                        $data['posts_paged'] = $paged;
                        $data['posts_max_num_pages'] = $query->max_num_pages;

                        wp_reset_query();
                        wp_reset_postdata();
                    endif;
                }break;
                
                default:
                    // ...
                    break;
            }
            $data['status'] = 'OK';
        } catch (Exception $e) {
            $data['status'] = 'FAIL';
        }

        echo json_encode($data);
        exit;
    }
}