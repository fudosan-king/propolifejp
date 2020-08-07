<?php get_header(); ?>

<?php 
// $termObj = get_queried_object();

// switch ($termObj->slug) {
// 	case 'premium':
// 		get_template_part( 'template-parts/page/accommodation', 'premium' );
// 	break;

// 	case 'regular':
// 		get_template_part( 'template-parts/page/accommodation', 'regular' );
// 	break;
	
// 	default:
// 	echo 'lorem ispum';
// 	break;
// }

get_template_part( 'template-parts/archive-'.get_post_type(), null );


?>

<?php get_footer(); ?>
