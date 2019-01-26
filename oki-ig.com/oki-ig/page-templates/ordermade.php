<?php 
/*Template Name: Order Made Page*/
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
						switch (get_row_layout()) {
							case 'mo_description':
								mo_description_content();
								break;
							case 'mo_result':
								mo_result_content();
								break;
							case 'mo_contact':
								mo_contact_content();
								break;
						}
				endwhile;
			endif;
		?>

				
			</div>

		</div>

	</section>
</main>

<?php get_footer(); ?>

<?php 

function mo_description_content(){

	?>
	<div class="col col-12 col-sm-8 offset-0 offset-sm-2 mb-4">
		<h2 class="title"><?php echo acf_get_layout_label('block_content', get_row_layout()); ?></h2>
		<?php the_sub_field('mo_description_content'); ?>
	</div>
	<?php
	$gallery = get_sub_field('mo_description_gallery');
	foreach($gallery as $img){
		?>
		<div class="col col-6 col-sm-6 p-1">
					<div class="img_furniture">
						<!-- <a href="<?php //echo $img['url']; ?>" title=""> -->
							<img src="<?php echo $img['url']; ?>" alt="" class="img-fluid">
						<!-- </a> -->
					</div>
				</div>
		<?php
	}
}

function mo_result_content(){

	echo "<h2 class='title mt-5 mb-5'>".acf_get_layout_label('block_content', get_row_layout())."</h2>";

	$gallery = get_sub_field('mo_result_gallery');
	foreach($gallery as $img){
	?>
		<div class="col col-6 col-sm-6 p-1">
			<div class="results_madeOrder_item">
				<a href="<?php echo $img['url']; ?>" data-fancybox="images" title=""><img src="<?php echo $img['url']; ?>" alt="" class="img-fluid"></a>
				<h3><?php echo $img['title']; ?></h3>
			</div>
		</div>
	<?php
	}
}

function mo_contact_content(){
	if (!empty(get_sub_field('sub_content_link'))):
	?>
		<div class="col col-12 text-center">
			<a href="<?php echo get_sub_field('mo_contact_link')['url'] ?>" class="btn btn-sm btn_listSale"><?php echo get_sub_field('mo_contact_link')['title']; ?></a>
		</div>
	<?php
	endif;
}

?>