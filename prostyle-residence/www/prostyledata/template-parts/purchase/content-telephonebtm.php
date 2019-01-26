<?php 
	if(is_page('purchase')):
?>
		<div class="section_telephone btm">
			<h3>まずはお電話ください(法人専用)</h3>
			<div class="telephone_list">

				<?php 
					if(have_rows('contact_control')):
						// echo '<ul>';
						while(have_rows('contact_control')): the_row();
							?>
								<div>
									<h4><?php echo get_sub_field('region'); ?>：</h4>
									<span><?php echo get_sub_field('phone'); ?></span>
								</div>
							<?php
						endwhile;
						// echo '</ul>';
					endif;
				?>
				
			</div><!-- // .telephone_list -->
			<p class="hours"><?php echo get_field('working_hour', 'option') ?></p>

			<?php 
				$requestLink = get_field('request_link');

				if(!empty($requestLink)):
					?>
						<p class="btn_request"><a href="<?php echo $requestLink['url']; ?>" target="<?php echo $requestLink['target']; ?>"><?php echo $requestLink['title']; ?></a></p>
					<?php
				endif;
			?>
			<p class="txt">査定のご依頼お待ち申し上げております。</p>
		</div><!-- // .section_telephone -->
<?php 
	endif;
?>