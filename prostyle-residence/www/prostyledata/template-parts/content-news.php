<main>
	<?php 
		if (is_singular()){
			get_template_part( 'template-parts/post/single', 'news' );
		}
	?>
</main>