<?php
/*Template Name: Experience 1 - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">
    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<div class="jarallax bg_top">
		 <img class="jarallax-img bg-scale" src="<?php echo get_field('background_image')['url']; ?>" alt="">
        <a href="/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
        <div class="accomodation_content">
          <span class="box_line">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 200 169" style="enable-background:new 0 0 200 169;" xml:space="preserve">
            <style type="text/css">
              .st0{fill:tranperant; fill-opacity: 0;}
            </style>
            <g>
              <rect x="0.5" y="0.5" class="st0" width="199" height="168"/>
              <path class="path" stroke="#f8ba00" stroke-width="2" d="M199,1v167H1V1H199 M200,0H0v169h200V0L200,0z"/>
            </g>
            </svg>
          </span>
          <span class="box_line box_line_step">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 200 169" style="enable-background:new 0 0 200 169;" xml:space="preserve">
            <style type="text/css">
              .st0{fill:tranperant; fill-opacity: 0;}
            </style>
            <g>
              <rect x="0.5" y="0.5" class="st0" width="199" height="168"/>
              <path class="path" stroke="#f8ba00" stroke-width="2" d="M199,1v167H1V1H199 M200,0H0v169h200V0L200,0z"/>
            </g>
            </svg>
          </span>
          <div class="box_line_content bg_white">
            <h2><?php the_title(); ?></h2>
			<h5><?php echo get_field('page_sub_title'); ?></h5>
          </div>
        </div>


        <div id="scroll_down" class="scroll_down_sub">
        	<div class="vertical_elem">
        		<div class="line white only vertical t_b hidden scroll_loop"></div>
        		<div class="start_square has_transition_600"></div>
        	</div>
        </div>

        <span class="line_yellow"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow.svg" alt=""></span>
        <span class="line_yellow"></span>
        <div class="text_footer">                  
          <p><?php echo get_field('short_intro'); ?></p>
        </div>
    </div>
</section>

<!-- CONTENT -->

<section class="section_journey">
	<div class="container">
		<span class="line_yellow line_yellow_reverse"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow_reverse.svg" alt=""></span>

		<h3 class="text-center"><?php echo get_field('title'); ?></h3>
		<div class="row mb-5 no-gutters">
		<?php 
		if (have_rows('block_content')):
			$index = 0;
			while (have_rows('block_content')): the_row();
				$titleClass = ($index%2==0) ? 'box_village' : 'box_university';
				$linkClass = ($index%2==0) ? 'box_walking' : 'box_walkinghere';
				$linkClassLine = ($index%2==0) ? '' : '<span class="line_walkinghere"></span>';
			?>
			<div class="col col-12 col-sm-6">
				<div class="box_intro">
					<div class="jarallax">
						<span class="box_intro_cover"></span>
						<img class="jarallax-img" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="">
						<div class="<?php echo $titleClass; ?>"><?php echo get_sub_field('tag_title'); ?></div>
						<?php the_sub_field('content'); ?>

						<?php 
						if (!empty(get_sub_field('button_link'))){
							$str = substr(get_sub_field('button_link')['url'], 1);
							// echo '<div class="'.$linkClass.'" data-walk="'.$str.'">'.$linkClassLine.get_sub_field('button_link')['title'].'</div>';
							?>
							<a href="#" class="<?php echo $linkClass; ?>" data-walk="<?php echo $str; ?>">
		                      <?php echo get_sub_field('button_link')['title']; ?>
		                      <div id="scroll_down" class="line_down">
		                        <div class="vertical_elem">
		                            <div class="line only vertical t_b hidden scroll_loop"></div>
		                        </div>
		                      </div>
		                    </a>
							<?php
						}
						?>
						
					</div>
				</div>
			</div>
			<?php
			$index++;
			endwhile;
		endif;
		?>
		</div>
	</div>
</section>

<?php 
$travelArray = array();
$travel_location = get_field('travel_location');
foreach ($travel_location as $cpost){
	$termArray = wp_get_post_terms( $cpost->ID, $taxonomy = 'travel_type', array('fiels' => 'names') );

	foreach($termArray as $term){
		if (empty($travelArray[$term->name]))
			$travelArray[$term->name] = array();
		array_push($travelArray[$term->name], $cpost);
	}
	
}

if (!empty($travelArray)){
	foreach ($travelArray as $key => $loc){
		echo '<section class="section_location">';
		echo '<h3 class="title_sub" id="'.$key.'">'.$key.'</h3>
		<div class="container">';
		foreach ($loc as $i => $cpost){
			$thumbnailImage = wp_get_attachment_image_url( get_post_thumbnail_id( $cpost->ID ), $size = 'large', $icon = false );
			echo '<article class="view_location_item">
				<div class="row">';
			if ($i % 2 ==0):
				?>
				<div class="col col-12 col-sm-6">
					<div class="view_location_item_text">
						<h2><?php echo get_the_title( $cpost ); ?></h2>
						<?php echo $cpost->post_content; ?>
					</div>
				</div>
				<div class="col col-12 col-sm-6">
					<div class="view_location_item_img">
						<img src="<?php echo $thumbnailImage; ?>" alt="" class="img-fluid">
					</div>
				</div>
				<?php
			else:
				?>
				<div class="col col-12 col-sm-6">
					<div class="view_location_item_img">
						<img src="<?php echo $thumbnailImage; ?>" alt="" class="img-fluid">
					</div>
					
				</div>
				<div class="col col-12 col-sm-6">
					<div class="view_location_item_text">
						<h2><?php echo get_the_title( $cpost ); ?></h2>
						<?php echo $cpost->post_content; ?>
					</div>
				</div>
				<?php
			endif;

			echo '</div>
			</article>';
		}
		echo '</div>';
		echo '</section>';
	}
}


?>

<?php get_footer(); ?>