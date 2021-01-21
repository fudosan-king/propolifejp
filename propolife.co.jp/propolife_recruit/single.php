<!-- SE: Khanh Nguyen -->
<?php
global $temp_dir;

$arrPostType = array('newgraduate', 'newgraduate-limit', 'career', 'career-limit', 'part-time', 'part-time-limit');

$obj = get_queried_object();

$dir_name = 'recruit';

if (array_search($post->post_type, $arrPostType)):
	$dir_category = $post->post_type;
endif;

?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<?php

if($post->post_type == 'newgraduate'){
    include_once('template-parts/single-newgraduate.php');
}else{
    include_once('template-parts/single-recruit.php');
}


?>

<p class="img_btm_animal"></p>
<?php get_footer(); ?>
