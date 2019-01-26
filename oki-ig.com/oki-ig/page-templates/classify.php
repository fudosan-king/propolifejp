<?php 
/*Template Name: Classify Page*/
?>

<?php get_header(); ?>

<section class="section_sub_banner">      
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-12">
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_field('description'); ?></p>
			</div>
		</div>
	</div>
</section>


<main>
<?php 
			
	if (have_rows('block_content')):
		while(have_rows('block_content')) : the_row();
				switch (get_row_layout()) {
					case 'hardness_flooring':
						hardness_flooring_content(get_row_layout());
						break;
					
					case 'comparison_flooring':
						comparison_flooring_content(get_row_layout());
						break;
				}
		endwhile;
	endif;
?>
</main>

<?php get_footer(); ?>

<?php 

function hardness_flooring_content($layout_name){
	?>
	<section class="section_hardness">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-sm-12">
					<h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name); ?></h2>
					<?php echo get_sub_field('hardness_flooring_content'); ?>
					<div class="text-center">
						<?php if (!empty(get_sub_field('hardness_flooring_link'))): ?>
						<a href="<?php echo get_sub_field('hardness_flooring_link')['url']; ?>" class="btn btn-sm btn_listSale" target="<?php echo get_sub_field('hardness_flooring_link')['target']; ?>"><?php echo get_sub_field('hardness_flooring_link')['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}

function comparison_flooring_content($layout_name){
	echo '<section class="section_typeFlooring">
		<div class="container">';

	if (have_rows('comparison_flooring_repeater')):
		while (have_rows('comparison_flooring_repeater')): the_row();
		?>

				<div class="box_typeFlooring">
					<div class="row">
						<div class="col col-12 col-sm-12">
							<h2 class="title"><?php echo get_sub_field('comparison_flooring_block_title'); ?></h2>
							<div class="row">
								<?php 
									foreach (get_sub_field('comparison_flooring_block_gallery') as $img){
										$img_url = wp_get_attachment_image_url( $img['ID'], 'large');
										?>
											<div class="col col-12 col-sm-6 DivtypeFlooring">
												<a href="<?php echo $img_url; ?>" data-fancybox="images" title=""><img src="<?php echo $img_url; ?>" alt="" class="img-fluid"></a>
											</div>
										<?php
									}
								?>
							</div>
							<p>
								<?php echo get_sub_field('comparison_flooring_block_content'); ?>
							</p>

							<?php if (!empty(get_sub_field('comparison_flooring_material_table'))): ?>
							<div class="row mt-sm-5 text-center">
								<p class="trees"><i class="i_leaves"></i> <span><?php echo get_sub_field('comparison_flooring_material_text'); ?></span></p>
								<div class="col col-12 offset-0">
									<div align="center">
										
									
									<table class="table table-condensed">
									<?php 
										
											$table = get_sub_field('comparison_flooring_material_table');
											$table_header = $table['header'];
											$table_body = $table['body'];

											echo '<thead><tr>';
											foreach ($table_header as $col){
												echo '<th>'.$col['c'].'</th>';
											}
											echo '</tr></thead>';

											echo '<tbody><tr>';
											foreach ($table_body as $col){
												for ($i=0; $i< count($table_header); $i++){
													echo '<td>'.$col[$i]['c'].'</td>';
												}
											}
											
											echo '</tr></tbody>';
									?>
									</table>
									</div>
								</div>
							</div>
							<?php endif; ?>
							
						</div>
					</div>
				</div>

		<?php
		endwhile;
	endif;

	if (!empty(get_sub_field('hardness_flooring_link'))):
	echo '<div class="text-center">
				<a href="'.get_sub_field('comparison_flooring_link')['url'].'" class="btn btn-sm btn_listSale" target="'.get_sub_field('comparison_flooring_link')['target'].'">'.get_sub_field('comparison_flooring_link')['title'].'</a>
			</div>';
	endif;
	
	echo '</div>
	</section>';
}

?>