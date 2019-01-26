<?php 
/*Template Name: Company Profile Page*/
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
	<section class="section_products">
		<div class="container">
			<div class="row">
		<?php 
			
			if (have_rows('block_content')):
				while(have_rows('block_content')) : the_row();
						compinfo_description_content();
				endwhile;
			endif;
		?>


		</div> <!-- container end -->
		
	</section>
</main>

<?php get_footer(); ?>

<?php 

function compinfo_description_content(){

	?>
			<div class="col col-12 col-sm-12 mb-4">
	            <h2 class="title"><?php echo acf_get_layout_label('block_content', get_row_layout()); ?></h2>
	        </div>
	        <div class="col col-12 col-sm-12">
	            <?php the_sub_field('compinfo_description_content'); ?>
	          </div>
    	</div> <!-- row end -->
     	
	<?php

	if (!empty(get_sub_field('compinfo_description_table'))):

		echo '<dl class="row mt-5 m-0 company_table">';

		$table = get_sub_field('compinfo_description_table');
		$table_body = $table['body'];

		foreach($table_body as $row){

			?>
				<dt class="col col-2 col-sm-2"><?php echo $row[0]['c']; ?></dt>
	          	<dd class="col col-10 col-sm-10"><?php echo $row[1]['c']; ?></dd>
			<?php
		}

		echo '</dl>';

	endif;
	
}

?>