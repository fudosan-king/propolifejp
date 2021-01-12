<!-- SE: Khanh Nguyen -->
<?php
global $temp_dir;

$arrPostType = array('newgraduate', 'newgraduate-limit', 'career', 'career-limit', 'part-time', 'part-time-limit');

$obj = get_queried_object();

if (array_search($obj->query_var, $arrPostType)>=0):
	$dir_name = 'recruit';
	$dir_category = $obj->query_var;
endif;
?>

<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<?php
	if (array_search($obj->query_var, $arrPostType)):
		get_template_part( 'template-parts/archive', $dir_name );
	endif;
?>

<p class="img_btm_animal"></p>
<?php get_footer(); ?>
