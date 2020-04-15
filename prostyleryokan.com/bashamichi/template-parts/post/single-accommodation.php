<?php get_header(); ?>

<?php 
	if (have_posts()):
		while(have_posts()): the_post();
			$termName = wp_get_post_terms( $post->ID, $taxonomy = 'accommodation_type', array ('fields' => 'names') )[0];
			$gallery_images = get_field('gallery_images');
		?>
			<main>
	            <section class="section_room">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-12">
	                            <div class="box_main_photos carousel_photos">
	                                <div class="label_main_photos">
	                                    <h2><?php the_title(); ?></h2>
	                                    <h3><?php echo $termName; ?></h3>
	                                </div>
									
									<div class="carousel carousel-main" data-flickity='{ "prevNextButtons": false, "pageDots": false}'>
	                                	<?php 
											if (!empty($gallery_images)):
												foreach ($gallery_images as $img){
													echo '<div class="carousel-cell">
				                                        <img src="'.$img['url'].'" alt="" class="img-fluid">
				                                    </div>';
												}
											endif;
										?>
	                                </div>

	                                <div class="carousel carousel-nav"
	                                  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
	                                  	<?php 
											if (!empty($gallery_images)):
												foreach ($gallery_images as $img){
													echo '<div class="carousel-cell">
				                                        <img src="'.$img['url'].'" alt="" class="img-fluid">
				                                    </div>';
												}
											endif;
										?>
	                                </div>
	                            </div>

	                            <div class="box_detail_room">
	                                <div class="row">
	                                    <div class="col-12 col-md-8 mx-auto">
	                                    	<!-- ATTRIBUTES LIST -->
                                    	 	<table class="table">
												<?php 
												if (have_rows('attributes_list')):
													$i=0;
													while (have_rows('attributes_list')): the_row();
														echo $i == 0 ? '<tr>' : '';
														?>
														<th><?php echo get_sub_field('name'); ?></th>
														<td><?php echo get_sub_field('value'); ?></td>
														<?php
														$i++;

														if($i >=2 ){
															echo '</tr>';
															$i=0;
														}
													endwhile;
												endif;
												if (have_rows('description_list')):
													while (have_rows('description_list')): the_row();
														?>
														<tr>
			                                                <td colspan="4">
			                                                    <h4><?php echo get_sub_field('title'); ?></h4>
			                                                    <p><?php echo get_sub_field('description'); ?></p>
			                                                </td>
			                                            </tr>
														<?php
													endwhile;
												endif;
												?>
											</table>	
												
											<?php 
												if (have_rows('button_link') && !empty(get_field('button_link'))):
												$button_link = get_field('button_link');
												?>
													<a class="btnMore btn_viewplan" href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>">
			                                            <span class="more">
			                                                <p class="more_text"><?php echo $button_link['title']; ?><span class="line more_loop no_width"></span></p>
			                                            </span>
			                                        </a>
												<?php
												endif;
											?>

	                                        
	                                        
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </section>
		<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>