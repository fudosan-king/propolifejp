<?php 

if (have_posts()):
	while(have_posts()): the_post();
		if (is_singular( $post_types = 'product' )){
			get_template_part('template-parts/single/product', 'single');
		}else{
			
		}
	endwhile;
endif;


 ?>