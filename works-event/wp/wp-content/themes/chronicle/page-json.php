<?php

/*
    Template Name: JSON Page - Get Data
*/

?>



<?php

$result = array();

/*
 * The WordPress Query class.
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Query
 */
$args = array(

    // Type & Status Parameters
    'post_type'   => 'works',
    'post_status' => 'publish',

    // Order & Orderby Parameters
    'order'               => 'DESC',
    'orderby'             => 'date',

    // Pagination Parameters
    'posts_per_page'         => -1,
    // 'posts_per_archive_page' => 10,
    // 'nopaging'               => false,
    // 'paged'                  => get_query_var( 'paged' ),
    // 'offset'                 => 3,

    // Taxonomy Parameters
    'tax_query' => array(
        array(
            'taxonomy'         => 'renovation',
            'field'            => 'slug',
            'terms'            => 'order_renovation',
            'operator'         => 'IN',
        )
    ),

    // Permission Parameters -
    'perm' => 'readable',

);

$query = new WP_Query( $args );

if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();

    // print_r($post);

    $photo1_itemID = get_post_meta( $post->ID, 'photo1', true );
    $photo1_url = wp_get_attachment_image_src($photo1_itemID, 'full')[0];

    $array = array(
        'ID'            => $post->ID,
        'post_title'    => $post->post_title,
        'post_date'     => $post->post_date,
        'post_modified' => $post->post_modified,
        'post_status'   => $post->post_status,
        'post_date'     => $post->post_date,
        'guid'          => $post->guid,
        'post_type'     => $post->post_type,
        'feature_image' => $photo1_url,
    );

    array_push($result, $array);

    // echo "<br/><br/>";
    // print_r(get_post_meta( $post->ID ));

    // echo "<br/><br/><br/>";

    // $photo1_itemID = get_post_meta( $post->ID, 'photo1', true );
    // $photo1_url = wp_get_attachment_image_src($photo1_itemID, 'full')[0];
    // print_r($photo1);

    endwhile;
endif;

wp_reset_postdata();

header("Content-type: application/json; charset=utf-8");
echo json_encode($result);

?>

