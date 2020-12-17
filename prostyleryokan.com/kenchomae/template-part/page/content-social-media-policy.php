<?php 
	$data = ACFTermsFields::_sectionNotice();
?>
<section class="section_notice">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php _echo($data->content); ?>
			</div>
		</div>
	</div>
</section>

<div class="main_content">
	<section class="section_social_media_policy mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php 
						if(have_posts()):
							while(have_posts()): the_post();
								the_content();
							endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>
</div>
