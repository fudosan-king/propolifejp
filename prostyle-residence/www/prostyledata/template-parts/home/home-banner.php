<?php 
	if (is_home()):
		if( have_rows( 'global_banner', 'option' ) ):
			echo '<section class="banner">';
			echo '<div class="carousel carousel_banner" data-flickity>';

			
		    while( have_rows( 'global_banner', 'option') ): the_row();
		    	$contentType = get_sub_field('content_type');
		    	$backgroundContent = get_sub_field('background_content');
		    	$backgroundPost = get_sub_field('background_post');

		    	if ($contentType == 'post_object'):
		    		$imgBackground = wp_get_attachment_image_url( get_post_thumbnail_id( $backgroundPost->ID ), $size = 'full', $icon = false );
		    	endif;

		    	if (get_sub_field('background_image'))
		    		$imgBackground = wp_get_attachment_image_url( get_sub_field('background_image')['ID'], $size = 'full', $icon = false );
		    	
		        echo '<div class="carousel-cell bannerGlobal" style="background-image:url('.$imgBackground.');">';
		        	// echo '<img class="bannerGlobal" src="'.$imgBackground.'" alt="">';
		        	echo '<div class="w_banner_content">';
						echo '<div class="banner_content">';
							if ($contentType == 'post_object'):
								// print_r($backgroundPost);

					    		echo '<p class="date">'.get_post_time( 'l, F j, Y', $gmt = false, $backgroundPost, $translate = false ).'</p>';
								echo '<p class="text_content">'.$backgroundPost->post_title.'</p>';
								echo '<a href="'.get_the_permalink( $backgroundPost ).'" class="btn btnReadmore"><span>read more</span></a>';
					    	else:
					    		echo '<p class="text_content">'.$backgroundContent.'</p>';
					    	endif;
							
						echo '</div>';
					echo '</div>';
		        echo '</div>';
		    endwhile;
		    echo '</div>';
			echo '</section>';
		endif;
	endif;
?>