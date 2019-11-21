<?php get_header();?>

<?php 
if (is_archive()){

	?>

	<main>
		<section class="content-page archive-<?php echo $post->post_type; ?>">
			<div class="container">
				<!-- <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php //if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
					</div>
					
				</div> -->
				<div class="row">
					<div class="col col-12">
						<?php get_template_part( 'template-parts/archive/list', $post->post_type ); ?>
					</div>
				</div>
			</div>
		</section>
	</main>


	<?php
}
?>

<?php get_footer();?>