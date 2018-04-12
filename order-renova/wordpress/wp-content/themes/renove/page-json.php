<?php
/**
Template Name: JsonPage
*/
header("Content-Type: text/json");
?>
<?php
  $page = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
  $total_item = 6;
  $cat = 2;
  $args = array(
    'cat'              => $cat,
    'posts_per_page'   => $total_item,
    'offset'           => $total_item * ($page - 1),
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'       => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
  );

  $posts_arrays = get_posts( $args );
  $class_arrays = array();
  $json_data = array();
  if($posts_arrays){
    foreach (range(1, count($posts_arrays)) as $number) {
      foreach($posts_arrays as $posts_array){
        $order = get_field('order', $posts_array->ID);
        $show = get_field('show', $posts_array->ID);
        if ($show) {
          $top_page = $show[0]['top_page'];
        }
        if ($number == $order and $top_page){
          array_push($class_arrays, $posts_array);
        }
      }
    }
    $colum = count($class_arrays);
    $index = 0;
    foreach($class_arrays as $posts_array) {
      $url = wp_get_attachment_url(get_post_thumbnail_id($posts_array->ID), 'thumbnail');
      $show = get_field('show', $posts_array->ID);
      $new = false;
      if ($show) {
        $new = $show[0]['new'];
      }
      $json_data[] = array(
      	'title' => $posts_array->post_title,
      	'url' => $url,
      	'new' => $new,
      	'href' => get_permalink($posts_array->ID)
      );
      $index ++;
    }
  }
  echo json_encode($json_data);
?>
