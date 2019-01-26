<?php
/*Template Name: Concept - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">
    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
	<div class="jarallax bg_top">
		<img class="jarallax-img bg-scale" src="<?php echo get_field('background_image')['url']; ?>" alt="">
        <a href="/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
        <div class="accomodation_content">
          <span class="box_line">
            <svg width="200" height="200" viewBox="0 0 100 100">
              <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
            </svg>
          </span>
          <span class="box_line box_line_step">
            <svg width="200" height="200" viewBox="0 0 100 100">
              <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="1" fill="none"></polyline>
              <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="1" fill="none"></polyline>
            </svg>
          </span>
          <div class="box_line_content bg_black">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>

        <div id="scroll_down" class="scroll_down_sub">
        	<div class="vertical_elem">
        		<div class="line white only vertical t_b hidden scroll_loop"></div>
        		<div class="start_square has_transition_600"></div>
        	</div>
        </div>
        
        <span class="line_yellow"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow.svg" alt=""></span>
        <div class="text_footer">
          <p><?php echo get_field('short_intro'); ?></p>
        </div>
    </div>
</section>

<section class="section_concept section_feelings">
	<div class="container">
		<span class="line_yellow line_yellow_reverse"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow_reverse.svg" alt=""></span>
		<?php 
			if (have_rows('block_content')):
				while (have_rows('block_content')): the_row();
				?>
				<h3><?php echo get_sub_field('title'); ?></h3>
				<div data-jarallax data-speed="0.2" class="jarallax">
					<img class="jarallax-img" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="">
					<div class="concept_content_text" data-jarallax-element="-140">
						<?php the_sub_field('content') ?>
					</div>
				</div>
				<!-- <div class="line_concept2"></div> -->
				<?php
				endwhile;
			endif;
		?>
		
	</div>
</section>

<?php 
	if (have_rows('service_content')):
		while (have_rows('service_content')): the_row();
		?>
		
		<section class="section_services">
			<div data-jarallax data-speed="0.2" class="jarallax">
				<img class="jarallax-img" src="<?php echo get_sub_field('background_content')['url']; ?>" alt="">
				<div class="box_services">
					<!-- <div class="line_box_services"></div> -->
					<h2>Service</h2>
				</div>
				<div class="box_services_content">
					<?php the_sub_field('content_intro'); ?>
				</div>
			</div>
		</section>

		<section class="section_digitalEnvironment">
			<!-- <span class="line_digitalEnvironment"></span> -->
			<div class="container">
				<div class="row">
					<div class="col col-12 text-center">
						<h3 class="mt-0"><?php echo get_sub_field('service_title'); ?></h3>
					</div>

					<?php 
						if (!empty(get_sub_field('service_gallery'))):
							foreach(get_sub_field('service_gallery') as $img){
								?>
								<div class="col col-12 col-sm-6">
									<img src="<?php echo  $img['url']; ?>" alt="" class="img-fluid w-100 mb-2">
								</div>
								<?php
							}
						endif;
					?>
					
				</div>
				
				<?php 
					if (have_rows('sub_content')):
						while (have_rows('sub_content')): the_row();
							$imgSection = get_sub_field('image');
							if (empty($imgSection)){
								?>
								<div class="row">
									<div class="col col-12 col-sm-8 offset-sm-2">
										<h3><?php echo get_sub_field('sub_title'); ?></h3>
										<?php the_sub_field('content'); ?>
									</div>
								</div>
								<?php
							}
							else
							{
								?>
								<div class="row">
									<div class="col col-12">
										<h3><?php echo get_sub_field('sub_title'); ?></h3>
									</div>
									<div class="col col-12 col-sm-7 col-md-9">
										<img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid w-100">
									</div>
									<div class="col col-12 col-sm-5 col-md-3">
										 <div class="text_Robby">
										 	<?php the_sub_field('content'); ?>
										 </div>
									</div>
								</div>

								<?php
							}
						endwhile;
					endif;
				?>

			</div>
		</section>

		<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>