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
