<?php

/*
    Template Name: JSON Page - Get Data
*/

?>

<?php

    $result = array();
    $data = array();
    $dataType = (isset($_GET['data-type']) && !empty($_GET['data-type'])) ? $_GET['data-type'] : '';

    /* WORDPRESS DATA PROCESS */

    if ($dataType != ''){
        if ($dataType == 'works'){

            /**
            * The WordPress Query class.
            * @link http://codex.wordpress.org/Function_Reference/WP_Query
            *
            */
            $args = array(

                //Type & Status Parameters
                'post_type'   => 'works',
                'post_status' => 'publish',

                //Order & Orderby Parameters
                // 'order'               => 'DESC',
                // 'orderby'             => 'date',

                //Pagination Parameters
                'posts_per_page'         => -1,
                // 'posts_per_archive_page' => 10,
                // 'nopaging'               => false,
                // 'paged'                  => get_query_var('paged'),
                // 'offset'                 => 3,

            );

            $query = new WP_Query( $args );

            // print_r($query);

            if ($query->have_posts()): while($query->have_posts()): $query->the_post();

                // print_r($post);
                // echo '<hr>';
                // $tag = get_current_term();
                // print_r($tag);
                // echo '<hr>';
                // $terms = get_terms('renovation','orderby=id','hide_empty=0');
                // print_r($terms);
                // echo '<hr>';

                $photo1 = get_post_custom_values('photo1',$post_id);
                $list01 = get_post_meta($post->ID,'list01',true); //物件名
                $list02 = get_post_meta($post->ID,'list02',true); //専有面積
                $spec02 = get_post_meta($post->ID,'spec02',true); //間取り
                $spec04 = get_post_meta($post->ID,'spec04',true); //築年数

                $is_new = false;
                $days = 7; //Newを表示させたい期間の日数
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $kiji = date('U',($today - $entry)) / 86400 ;
                if( $days > $kiji ){
                    $is_new = true;
                }

                $arrTerms = array();
                $terms = wp_get_object_terms($post->ID, 'renovation');
                foreach ( $terms as $term ){
                    // print_r($term);
                    array_push($arrTerms, array(
                        'term_id' => $term->term_id,
                        'name' => $term->name,
                        'slug' => $term->slug,
                        'term_taxonomy_id' => $term->term_taxonomy_id,
                        'taxonomy' => $term->taxonomy,
                        'term_link' => get_term_link($term->slug, 'renovation'),
                    ));
                }

                $props = array(
                    'ID' => $post->ID,
                    'post_title' => $post->post_title,
                    'post_date' => $post->post_date,
                    'post_date_gmt' => $post->post_date_gmt,
                    'post_type' => $post->post_type,
                    'post_link' => get_permalink($post->ID),
                    'post_modified' => $post->post_modified,
                    'post_modified_gmt' => $post->post_modified_gmt,
                    'pics' => wp_get_attachment_image_src($photo1[0], 'full')[0],
                    'list01' => $list01,
                    'list02' => $list02,
                    'spec02' => $spec02,
                    'spec04' => $spec04,
                    'is_new' => $is_new,
                    'terms' => $arrTerms,
                );

                array_push($data, $props);

                endwhile;
                wp_reset_query();
            endif;
        }

        if ($dataType == 'event'){

            /**
            * The WordPress Query class.
            * @link http://codex.wordpress.org/Function_Reference/WP_Query
            *
            */
            $args = array(

                //Type & Status Parameters
                'post_type'   => 'event',
                'post_status' => 'publish',

                //Taxquery Parameters
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kind', //タクソノミーを指定
                        'field' => 'slug', //ターム名をスラッグで指定する
                        'terms' => 'kobetsu'
                    ),
                ),

                //Order & Orderby Parameters
                // 'order'               => 'DESC',
                // 'orderby'             => 'date',

                //Pagination Parameters
                // 'posts_per_page'         => -1,
                // 'posts_per_archive_page' => 10,
                // 'nopaging'               => false,
                // 'paged'                  => get_query_var('paged'),
                // 'offset'                 => 3,

            );

            $query = new WP_Query( $args );

            // print_r($query);

            if ($query->have_posts()): while($query->have_posts()): $query->the_post();

                print_r($post);
                echo '<hr>';
                // $tag = get_current_term();
                // print_r($tag);
                // echo '<hr>';
                // $terms = get_terms('renovation','orderby=id','hide_empty=0');
                // print_r($terms);
                // echo '<hr>';

                // $props = array(
                //     'ID' => $post->ID,
                //     'post_title' => $post->post_title,
                //     'post_date' => $post->post_date,
                //     'post_date_gmt' => $post->post_date_gmt,
                //     'post_type' => $post->post_type,
                //     'post_link' => get_permalink($post->ID),
                //     'post_modified' => $post->post_modified,
                //     'post_modified_gmt' => $post->post_modified_gmt,
                //     'pics' => wp_get_attachment_image_src($photo1[0], 'full')[0],
                //     'list01' => $list01,
                //     'list02' => $list02,
                //     'spec02' => $spec02,
                //     'spec04' => $spec04,
                //     'is_new' => $is_new,
                //     'terms' => $arrTerms,
                // );

                // array_push($data, 'sdf');

                endwhile;
                wp_reset_query();
            endif;

        }

        array_push($result, array('data'=> $data, 'status'=> 'success'));

    }else{
        array_push($result, array('status'=> 'failed'));
    }




    header('Content-Type: application/json');
    // header("Content-Type: text/json");

    echo json_encode($data);

?>
