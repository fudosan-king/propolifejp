<?php
/**
Template Name: JsonPage
*/
header("Content-Type: text/json");
?>
<?php
  $topic = get_field('topic', 11);
  $json_data = array();

  foreach($topic as $t) {
    $json_data[] = $t;
  }
  echo json_encode($json_data);
?>
