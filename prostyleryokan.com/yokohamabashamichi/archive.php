<?php get_header(); ?>

<?php 
$termObj = get_queried_object();

switch ($termObj->slug) {
	case 'premium':
		get_template_part( 'template-parts/page/accommodation', 'premium' );
	break;

	case 'regular':
		get_template_part( 'template-parts/page/accommodation', 'regular' );
	break;
	
	default:
	echo 'lorem ispum';
	break;
}

if (have_posts()):
	while(have_posts()): the_post();
		
	endwhile;
endif;
?>

<?php get_footer(); ?>
