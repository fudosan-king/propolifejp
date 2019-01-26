<?php get_template_part( 'template-parts/home/home', 'banner' ); ?>

<main>
	<?php 
		if(is_home() || is_front_page()){
			get_template_part( 'template-parts/home/top', 'trending' );
			get_template_part( 'template-parts/post/main', 'content' );
		}

		if (is_singular()){
			get_template_part( 'template-parts/post/single', 'content' );
		}
	?>
</main>