<?php 
	if(is_page('purchase')):
		if (have_rows('estate_records')):
			echo '
			<div id="estate_list">
			    <h3>仕入開発実績</h3>
			    <ul>
			';
			while(have_rows('estate_records')): the_row();
					$imgURL = wp_get_attachment_image_url( get_sub_field('estate_image')['ID'], $size = 'medium', $icon = false );
				?>
					<li>
			            <p class="pic"><img src="<?php echo $imgURL; ?>" width="205" alt="<?php echo get_sub_field('estate_image')['title'] ?>"></p>
			            <h4><span><?php echo get_sub_field('title'); ?></span></h4>
			            <p><?php echo get_sub_field('content'); ?></p>
			        </li>
				<?php
			endwhile;
			echo '
			    </ul>
			</div><!-- // #estate_list -->
			';
		endif;
	endif;
?>