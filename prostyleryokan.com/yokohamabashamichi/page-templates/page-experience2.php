<?php
/*Template Name: Experience 2 - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">
    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
    <div class="jarallax bg_top">
        <img class="jarallax-img bg-scale" src="<?php echo get_field('background_image')['url']; ?>" alt="">
        <a href="/yokohamabashamichi/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
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
        <div class="text_footer bg_pattern">                  
          <p><?php echo get_field('short_intro'); ?></p>
        </div>
    </div>
</section>

<!-- CONTENT -->

<section class="section_journey bg_pattern">
	<div class="container">
		<span class="line_yellow line_yellow_reverse"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow_reverse.svg" alt=""></span>
		<h3 class="text-center"><?php echo get_field('title'); ?></h3>


		<div class="row w_customers_voice ">
			<?php get_template_part( 'template-parts/page/experience2', 'posts' ); ?>			
		</div>            
	</div>
</section>

<?php get_footer(); ?>