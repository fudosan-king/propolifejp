<?php
//add_image_size('ppl_plan_item',480,300,true); /* image for slideshow */
function show_ppl_plan($count = "-1", $ignore_slug = "", $only_info = '')
{
	$exclude_ids = array();

	if(!empty($ignore_slug))
	{
		$ignore_slug = explode(',', $ignore_slug);

		foreach ($ignore_slug as $slug)
		{
			$_post = get_page_by_path($slug, OBJECT, 'ppl_plan');
			$exclude_ids[] = $_post->ID;
		}
	}

	$query = new WP_Query( array( 
							'post_type' => 'ppl_plan', 
							'posts_per_page' => $count,
							'post__not_in' => $exclude_ids,
							'orderby'	=> 'meta_value_num',
							'meta_key'  => 'ppl-plan-url',
							'order'		=> 'ASC'
						));
	ob_start();
	if($query->have_posts()) : 
		while($query->have_posts()) : $query->the_post(); 
			global $post, $wp_query;
			$thumb = get_post_thumbnail_id($post->ID);
			$thumburl = wp_get_attachment_image_src($thumb,'portfolio_image');
			$codeApartment = get_post_meta($post->ID, 'ppl-plan', true);
		switch ($only_info):
			case 'plan-page':
			$post_title   = get_the_title($post->ID);
			$post_content = get_the_content($post->ID);
		?>
			<div class="col-12 col-lg-5 <?= $codeApartment; ?>" style="display:none" >
                <h1><?= $post_title; ?></h1>
                <h2><?= $post_content; ?></h2>
            </div>
		<?php 
			break; 
			case 'plan-detail-page':
		?>
			<div class="col-12 col-lg-5 <?= $codeApartment; ?>" style="display: none;">
                <div class="box_plan_detail_footer_content">
					<h1><?= get_the_title($post->ID)?></h1>
					<h2><?= get_the_content($post->ID) ?></h2>
					<p>ご覧になりたいプランをタップしてください。<br>
                            プラン詳細をご覧いただけます</p>
			    </div>
            </div>
		<?php 
			break;
			default: 
		?>
		 	<div class="box_normal_item">
		 		<a href="<?= esc_url(get_permalink($post->ID)) ?>" >
			        <div class="box_premium">
			            <span class="label_new"><i>New</i></span>
			            <ul class="list_view">
			                <li><span>眺望</span></li>
			                <li><span>３Dモデルルーム画像</span></li>
			            </ul>
			            <h2><?= get_the_title($post->ID)?></h2>
			            <h3><?= $post->post_excerpt ?></h3>
			            <div class="box_premium_list-img">
			            	<div class="box_premium_img">
			                	<img src="<?= $thumburl[0] ?>" alt="" class="img-fluid">
			            	</div>
			            </div>
			        </div>
		        </a>
	   		 </div>			
		<?php
			endswitch;		
		
		endwhile;
									
	endif;

	wp_reset_postdata();

	return ob_get_contents();
}

function show_item_ppl_plan($id = '', $slug = '', $style= 'feature')
{
	if( absint($id) > 0 )
	{
		$query = new WP_Query( array( 'post_type' => 'ppl_plan', 'post__in' => array($id )) );
	}
	elseif( strlen(trim($slug)) > 0 )
	{
		$_post = get_page_by_path($slug, OBJECT, 'ppl_plan');
		if( !is_null($_post) ){
			$query = new WP_Query( array( 'post_type' => 'ppl_plan', 'post__in' => array($_post->ID )) );
		}
	}
	
	if($query->have_posts()) : 
		while($query->have_posts()) : $query->the_post();
			global $post;
			$post_title   = get_the_title($post->ID);
			$post_excerpt = $post->post_excerpt;
			$post_url     = esc_url(get_permalink($post->ID));
			$thumb        = get_post_thumbnail_id($post->ID);
			$thumburl     = wp_get_attachment_image_src($thumb,'ppl_plan_item');
			$codeApartment = get_post_meta($post->ID, 'ppl-plan', true);

		 	if ($style == 'special'): ?>
	                <div class="col-12 col-lg-5 <?= $codeApartment; ?>">
	                    <h1><?= $post_title; ?></h1>
	                    <h2><?= get_the_content($post->ID); ?></h2>
	                </div>
	        <?php elseif($style == 'plan-detail-page'): ?>
	        <div class="col-12 col-lg-5 <?= $codeApartment; ?> js_info-default">
                <div class="box_plan_detail_footer_content">
					<h1><?= get_the_title($post->ID)?></h1>
					<h2><?= get_the_content($post->ID) ?></h2>
					<p>ご覧になりたいプランをタップしてください。<br>プラン詳細をご覧いただけます</p>
			    </div>
            </div>
	        <?php else: ?>
	        	<a href="<?= $post_url ?>">
		        	<div class="box_premium">
			        	<span class="label_new"><i>New</i></span>               
		                <ul class="list_view">
		                    <li><span>眺望</span></li>
		                    <li><span>３Dモデルルーム画像</span></li>
		                </ul>
		                <h2><?= $post_title ?></h2>
		                <h3><?= $post_excerpt ?></h3>
		                <div class="box_premium_list-img">
		                	<div class="box_premium_img">
		                    	<img src="<?= $thumburl[0] ?>" alt="" class="img-fluid">
		                	</div>
		                </div>
	            	</div>
            	</a>
			<?php endif ?>
			  		
		<?php
		endwhile;
	endif;
}

function show_carousel_ppl_plan($limit = -1){
	ob_start();
	$query = new WP_Query( array( 'post_type' => 'ppl_plan', 'posts_per_page' => $limit) );
	if($query->have_posts()) : ?>
		<div class="owl-carousel owl-theme" id= 'ppl_plan-slider'>
		<?php	while($query->have_posts()) : $query->the_post();
				global $post;
				$post_title = esc_html(get_the_title($post->ID));
				$post_description = substr(strip_tags($post->post_content),0,60);
				$post_url =  esc_url(get_permalink($post->ID));
				$url_video = esc_url(get_post_meta($post->ID,THEME_SLUG.'video_ppl_plan',true));
				$thumb=get_post_thumbnail_id($post->ID);
				$thumburl=wp_get_attachment_image_src($thumb,'ppl_plan_image');
			?>
			<div class="ppl_plan_sc item">
				<div class="ppl_plan_thumbnail">
					<a class="image" href="<?php echo $post_url; ?>">
						<?php if($thumburl[0]) { ?>
							<img alt="<?php echo $post_title?>" title="<?php echo $post_title;?>" class="opacity_0" src="<?php echo  esc_url($thumburl[0]);?>"/>																
							<?php } else { ?>
							<img alt="<?php echo $post_title?>" title="<?php echo $post_title;?>" class="opacity_0" src="<?php echo get_template_directory_uri(); ?>/images/no-gallery-830x494.gif"/>
							<?php } ?>
						<div  class="hover-default"></div>
					</a>
					<a class="post-title heading-title list-title ppl_plan-grid-title" href="<?php echo $post_url; ?>">
						<?php echo $post_title; ?>
					</a>
				</div>
				<!-- <div class="thumb-tag">
					<div class="wd_pl_des"><?php echo $post_description; ?></div>
					<div class="wd_pf_readmore"><a alt="<?php echo $post_title; ?>" title="<?php echo $post_title; ?>" href="<?php echo $post_url; ?>" ><?php _e('Learn more','wpdance'); ?></a></div>
				</div> -->
			</div>   				
		<?php endwhile; ?>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
			  jQuery("#ppl_plan-slider").owlCarousel({
			    navigation : true,
			    //autoplay:true,
			     loop:true,
			    autoplayTimeout:2000,
			    autoplayHoverPause:true,
			    responsive:{
        			0:{
            			items:1
        				},
        			600:{
            			items:3
       					 },
        			1000:{
            				items:4
        				}
    				}
			  });
			});
  
		</script>
	<?php
	endif;
	wp_reset_postdata();
	$content = ob_get_contents();
	return $content;
}
function show_item_ppl_plan_imag($id = '',$type_image='thumbnail',$number_word='60',$id_image='',$height='',$width='', $slug = ''){
	if( absint($id) > 0 ){
		$query = new WP_Query( array( 'post_type' => 'ppl_plan', 'post__in' => array($id )) );
	}elseif( strlen(trim($slug)) > 0 ){
		$_post = get_page_by_path($slug, OBJECT, 'ppl_plan');
		if( !is_null($_post) ){
			$query = new WP_Query( array( 'post_type' => 'ppl_plan', 'post__in' => array($_post->ID )) );
		}
	}
	ob_start();
	if($query->have_posts()) : 
		while($query->have_posts()) : $query->the_post();
			global $post;
			if($type_image === 'thumbnail'){
				$id_image = get_post_thumbnail_id($post->ID);
			}
			$post_title = esc_html(get_the_title($post->ID));
			$post_description = substr(strip_tags($post->post_content),0,$number_word);
			$post_url =  esc_url(get_permalink($post->ID));
			$url_video = esc_url(get_post_meta($post->ID,THEME_SLUG.'video_ppl_plan',true));
			$thumb=get_post_thumbnail_id($post->ID);
			$thumburl=wp_get_attachment_url($id_image);
		?>
		<div class="ppl_plan_sc">
			<div class="ppl_plan_thumbnail">
				<a class="image" href="<?php echo $post_url; ?>">
					<?php if($thumburl) { ?>
						<img alt="<?php echo $post_title?>" title="<?php echo $post_title;?>" class="opacity_0" src="<?php echo  esc_url($thumburl);?>" style='width:<?php echo esc_attr($width); ?>;height:<?php echo esc_attr($height); ?>'/>														
						<?php } else { ?>
						<img alt="<?php echo $post_title?>" title="<?php echo $post_title;?>" class="opacity_0" src="<?php echo get_template_directory_uri(); ?>/images/no-gallery-830x494.gif"/>
						<?php } ?>
					<div  class="hover-default"></div>
				</a>
				
			</div>
			<div class="thumb-tag">
				<div class="wd_thumb-tag">
					<h2><a class="post-title heading-title list-title ppl_plan-grid-title" href="<?php echo $post_url; ?>">
						<?php echo $post_title; ?>
					</a></h2>
					<div class="wd_pl_des"><?php echo $post_description; ?></div>
					<div class="wd_pf_readmore"><a alt="<?php echo $post_title; ?>" title="<?php echo $post_title; ?>" href="<?php echo $post_url; ?>" ><?php _e('Learn more','wpdance'); ?></a></div>
				</div>
			</div>
		</div>   				
		<?php
		endwhile;
	endif;
	wp_reset_postdata();
	return ob_get_contents();
}
?>