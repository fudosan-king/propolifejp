<?php 
$termObj = get_queried_object();
$strPage = "accommodation-".$termObj->slug;
$pageObj = get_page_by_path($strPage);

?>
<section class="section_top">
    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
    <div class="jarallax bg_top" style="background: #a6bcd4;">
         <img class="jarallax-img bg-scale" src="<?php echo get_field('background_image', $pageObj)['url']; ?>" alt="">
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
            <h2><?php echo get_the_title( $pageObj ); ?></h2>
            <h4><?php echo get_field('page_sub_title', $pageObj); ?></h4>
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
          <p><?php echo get_field('short_intro', $pageObj); ?></p>
        </div>

    </div>
</section>

<?php 

	/*
	 * The WordPress Query class.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/WP_Query
	 */
	$args = array(

		// Type & Status Parameters
		'post_type'   => 'accommodation',
		'post_status' => 'publist',

		// Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',

		// Pagination Parameters
		'posts_per_page'         => -1,
		// 'posts_per_archive_page' => 10,
		// 'nopaging'               => false,
		// 'paged'                  => get_query_var( 'paged' ),
		// 'offset'                 => 3,

		// Taxonomy Parameters
		'tax_query' => array(
			array(
				'taxonomy'         => 'accommodation_type',
				'field'            => 'slug',
				'terms'            => array( 'regular' ),
				'include_children' => true,
				'operator'         => 'IN',
			),
		),

		// Permission Parameters -
		'perm' => 'readable',

		// Parameters relating to caching
		'no_found_rows'          => false,
		'cache_results'          => true,
		'update_post_term_cache' => true,
		'update_post_meta_cache' => true,

	);

$query = new WP_Query( $args );


if ($query->have_posts()):
	?>
	<section class="section_subAccomodation">
	<div class="container">
		<span class="line_yellow line_yellow_reverse"><img class="img-fluid" src="<?php echo TEMPLATE_DIR; ?>/images/1x/line_yellow_reverse.svg" alt=""></span>
		<?php
		$index = 0;
		while($query->have_posts()): $query->the_post();
			$featureImgUrl = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );
			$extraClass = ($index % 2 == 0) ? 'mt-5' : 'box_horizontal_2';
			?>
			<div class="box_horizontal <?php echo $extraClass; ?>">
				<div class="row">
					<div class="col col-12 col-sm-12 col-md-5">
						<div class="box_content_left clearfix">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>

							<?php 
								if (have_rows('attributes_list')):
									echo '<p>';
									while (have_rows('attributes_list')): the_row();
										echo '<span>'.get_sub_field('name').'：'.get_sub_field('value').'</span>&nbsp;';
									endwhile;
									echo '</p>';
								endif;
							?>

							<a href="<?php the_permalink(); ?>" class="more_container">
								<div class="more">
									<p class="more_text">More<span class="line more_loop no_width"></span></p>
								</div>
							</a>
						</div>
					</div>
					<div class="col col-12 col-sm-12 col-md-7">
						<img src="<?php echo $featureImgUrl; ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<?php
			$index++;
		endwhile;
		wp_reset_postdata();
		wp_reset_query();
		?>

		</div>
	</section>
	<?php
endif;
 ?>