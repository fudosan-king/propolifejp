<?php 
	if(is_page('purchase')):
		if (have_rows('estate_news')):
			echo '
			<div id="purchase_list">
				<ul>
			';
			while(have_rows('estate_news')): the_row();
				?>
					<li>
						<div class="bg01">
							<h3><span><?php echo get_sub_field('title'); ?></span></h3>
							<p><span><?php echo get_sub_field('content'); ?></span></p>
						</div>
					</li>
				<?php
			endwhile;
			echo '
				</ul>
			</div><!-- // #purchase_list -->
			';
		endif;
	endif;
?>