<?php 
/* Template Name: Purchase - Page Template */
?>

<?php get_header();?>

<?php 
	$purchase_profit_content = get_field('purchase_profit_content');
	$purchase_profit_content_title = $purchase_profit_content['title'];
	$purchase_profit_content_repeater = $purchase_profit_content['content_repeater'];

	$purchase_evaluation_image = get_field('purchase_evaluation_image');
	$evaluationImgURI = wp_get_attachment_image_url( $purchase_evaluation_image['ID'], 'full' );

	$map_image_display = get_field('map_image_display');
	$mapImgURI = wp_get_attachment_image_url( $map_image_display['ID'], 'full' );
?>

<main>
    <section class="section_purchase">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <p class="sub_title"><?php echo get_field('purchase_header_subtitle'); ?></p>
                    <p class="text_left_sm"><?php echo get_field('purchase_text_description'); ?></p>
                </div>
                <div class="col-12 col-md-7 m-auto">
                    <div class="row no-gutters my-4">
                    	<?php
                    		if(have_rows('purchase_intro_repeater')):
                    			while(have_rows('purchase_intro_repeater')): the_row();
                    				?>
                    				<div class="col-3 col-sm-3 align-self-center">
			                            <p class="text-right"><?php echo get_sub_field('title'); ?></p>
			                        </div>
			                        <div class="col-9 col-sm-9 align-self-center">
			                            <p class="border_left"><?php echo get_sub_field('content'); ?>
			                            </p>
			                        </div>
                    				<?php
                    			endwhile;
                    		endif;
                    	?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="box_checkout">
                        <h3><?php echo $purchase_profit_content_title; ?></h3>
                        <div class="row">
                        	<?php 
                        		foreach($purchase_profit_content_repeater as $i => $obj){
                        			?>
                        			<div class="col-12 col-md-4">
		                                <p><?php echo $obj['content']; ?></p>
		                            </div>
                        			<?php
                        		}
	                    	?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <img src="<?php echo $evaluationImgURI; ?>" alt="" class="img-fluid">
                    <div class="box_line">
                        <p><?php echo get_field('purchase_evaluation_description'); ?></p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                	<?php
                		if(have_rows('purchase_evaluation_recommend')):
                			while(have_rows('purchase_evaluation_recommend')): the_row();
                				?>
	                				<div class="card card_buy">
				                        <div class="card-header"><?php echo get_sub_field('title'); ?></div>
				                        <div class="card-body bg_notbuy">
				                            <p class="card-text"><?php echo get_sub_field('content'); ?></p>
				                        </div>
				                    </div>
                				<?php
                			endwhile;
                		endif;
                	?>
                </div>

            </div>

        </div>
    </section>

    <section class="section_map">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo $mapImgURI; ?>" alt="" class="img-fluid w-100 mb-5">
                </div>

                <?php
            		if(have_rows('map_info_flexible')):
            			while(have_rows('map_info_flexible')): the_row();
            				echo '<div class="col-12 col-md-6">
			                    <h5>'.get_sub_field('title').'</h5>
			                </div>';
			                if(get_row_layout() == 'target_purchase_site'):
	            				?>
		            				<div class="col-12 col-md-12">
		            					<table class="table table-bordered table_purchase table_purchase_md">
		            						<thead>
		            							<tr>
		            								<?php 
		            									foreach(get_sub_field('content')['header'] as $i => $col){
		            										echo !empty($col['c']) ? '<th>'.$col['c'].'</th>' : '<td></td>' ;
		            									}
		            								?>
		            							</tr>
		            						</thead>
		            						<tbody>
		            							<?php 
	            									foreach(get_sub_field('content')['body'] as $i => $row){
	            										echo '<tr>';
	            										foreach($row as $j => $col){
		            										echo $j == 0 ? '<th>'.$col['c'].'</th>' : '<td>'.$col['c'].'</td>' ;
		            									}
		            									echo '</tr>';
	            									}
	            								?>
		            						</tbody>
		            					</table>

		            					<table class="table table-bordered table_purchase table_purchase_sm">
					                        <thead>
					                            <tr>
					                               <?php 
		            									foreach(get_sub_field('content_sp')['header'] as $i => $col){
		            										echo !empty($col['c']) ? '<th>'.$col['c'].'</th>' : '<td></td>' ;
		            									}
		            								?>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <?php 
	            									foreach(get_sub_field('content_sp')['body'] as $i => $row){
	            										echo '<tr>';
	            										foreach($row as $j => $col){
		            										echo $j == 0 ? '<th>'.$col['c'].'</th>' : '<td>'.$col['c'].'</td>' ;
		            									}
		            									echo '</tr>';
	            									}
	            								?>
					                        </tbody>
					                    </table>

		            				</div>
	            				<?php

            				else:
            					?>
            					<div class="col-12">
				                    <p class="f14 spacing"><?php echo get_sub_field('content'); ?></p>
				                </div>
            					<?php
            				endif;

            			endwhile;
            		endif;
            	?>
                
            </div>
        </div>
    </section>

    <section class="section_devproject">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><img src="<?php echo SGVinK::get_images_uri(); ?>1x/i_logo.png" alt="" class="img-fluid" width="35"><?php echo get_field('project_header_title'); ?></h2>

                    

					<?php
                		if(have_rows('featured_project_flexible')):
                			while(have_rows('featured_project_flexible')): the_row();
                				?>
                				<div class="box_devproject">
                					<div class="row">
                						<div class="col-12 col-md-6">
                							<h1 class="devproject_title"><?php echo get_sub_field('title'); ?><span><?php echo get_sub_field('subtitle'); ?></span></h1>
                							<?php echo get_sub_field('content'); ?>
                						</div>



                						<div class="col-12 col-md-6">
                							<div class="row no-gutters">
                								<?php
							                		if(have_rows('project_gallery_repeater')):
							                			while(have_rows('project_gallery_repeater')): the_row();
							                				$colClass = 'col-'.get_sub_field('column_size');
							                				$hrefClass = 'box_cate_img ';
							                				$hrefClass .= get_sub_field('column_size') == 12 ? 'box_cate_img_50p mb-2 ' : 'img_haft mb-2 ';
							                				

							                				switch (get_sub_field('column_size')) {
							                					case 5:
							                					case 8:
							                						$hrefClass .= 'mr-2';
							                						break;
							                				}

							                				$imgPJ = wp_get_attachment_image_url(get_sub_field('image')['ID'], 'full');
							                				?>
								                				<div class="<?php echo $colClass; ?>">
				                									<a href="#" class="<?php echo $hrefClass; ?>">
				                										<img src="<?php echo $imgPJ; ?>" alt="" class="img-fluid">
				                										<figcaption>
				                											<span><?php echo get_sub_field('image')['caption']; ?></span>
				                										</figcaption>
				                									</a>
				                								</div>
							                				<?php
							                			endwhile;
							                		endif;
							                	?>

                							</div>
                						</div>
                					</div>
                				</div>
                				<?php
                			endwhile;
                		endif;
                	?>

                            
                	<?php
                		if(have_rows('list_project_flexible')):
                			echo '
                				<div class="footer_devproject">
                        			<div class="row">';
                			while(have_rows('list_project_flexible')): the_row();
                				?>
	                				<div class="col-12 col-md-4">
		                            	<div class="footer_devproject_content">
			                                <h1 class="devproject_title"><?php echo get_sub_field('title'); ?><span><?php echo get_sub_field('subtitle'); ?></span></h1>
			                                <?php echo get_sub_field('content'); ?>
			                            </div>
		                            </div>
                				<?php
                			endwhile;
                			echo '
                					</div>
                				</div>';
                		endif;
                	?>

                    <div class="w_request">
                        <div class="row">
                            
                            	<?php 
                            		if(!empty(get_field('contact_link'))):
                            			$linkContact = get_field('contact_link');                                      
                            			?>
                                            <div class="col-sm-12 col-md-6 text-right">
                            			
                                                <a href="<?php echo $linkContact['url']; ?>" class="btn btn_request" target="<?php echo $linkContact['target']; ?>"><?php echo $linkContact['title']; ?></a>
                                            </div>           		                            
                            			<?php
                            		endif;
                            	?>

                                <?php 
                                    if(!empty(get_field('mail_to_link'))):
                                        $linkMailTo = get_field('mail_to_link');                                        
                                        ?>
                                            <div class="col-sm-12 col-md-6">
                                                <a href="<?php echo $linkMailTo['url']; ?>" class="btn btn_request" target="<?php echo $linkMailTo['target']; ?>"><?php echo $linkMailTo['title']; ?></a>
                                            </div>                                                
                                        <?php
                                    endif;
                                ?>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>