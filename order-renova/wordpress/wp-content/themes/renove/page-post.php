<?php
/**
Template Name: JsonOfPost
*/
header("Content-Type: text/json");
$post_id = $_GET['post_id'];
$categories = get_field('categories', $post_id);
$order_details = get_field('order_details', $post_id);
$description_order = get_field('description_order', $post_id);
$titel_order = get_field('titel_order', $post_id);

$json_data = array();
$json_data[] = array(
	'categories' => $categories,
	'order_details' => $order_details,
	'description_order' => $description_order,
	'titel_order' => $titel_order
);

echo json_encode($json_data);
?>

