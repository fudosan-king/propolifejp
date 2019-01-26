<?php get_header(); ?>

<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>event/">イベント・セミナー情報<span>EVENT &amp; SEMINAR</span></a></h2>
	</div>
</div><!-- #main -->


<div id="container" class="clearfix">
	<div class="catch">クロニクルが提供するリノベーションのイベントやセミナーをご覧いただけます。</div>
	<div id="localNav">
		<ul class="wrap clearfix">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>event/"<?php if(get_post_type( $post ) == 'event') echo ' class="on"'; ?>>全て表示</a></li>
		<?php
		$tag = get_current_term();

		$catName = $tag->name;
		if($catName == "東京") {
			$current[1] = ' class="on"';
		} else if($catName == "神奈川") {
			$current[2] = ' class="on"';
		} else if($catName == "名古屋") {
			$current[3] = ' class="on"';
		} else if($catName == "大阪") {
			$current[4] = ' class="on"';
		} else if($catName == "福岡") {
			$current[5] = ' class="on"';
		}

		$n = 1;
		$terms = get_terms('event_pref','orderby=id','hide_empty=0');
		foreach ( $terms as $term ){
			echo '<li><a href="'.get_term_link($term->slug, 'event_pref').'"'.$current[$n].'>'.$term->name.'</a></li>';
			$n++;
		}
		?>
		</ul>
	</div>


	<div class="wrap clearfix">
		<div class="box">
			<h3>イベント</h3>
			<div class="imgBox"><img src="<?php bloginfo('template_url') ?>/event/images/img_02.jpg" alt=""></div>
			<p>実際にクロニクルのリノベーションを体感できる住まい見学会などを随時開催しております。<br>
	他とは違う、本物の天然無垢材を、実際に「見て、手を触れて」ご体感してください！（先着順・予約制）</p>

			<ul class="clearfix">
			<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'tax_query' => array( 
							'relation' => 'AND',
						array(
							'taxonomy' => 'kind', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => 'sumai'
						),
						array(
							'taxonomy' => 'event_pref', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array('tokyo', 'kanagawa', 'nagoya', 'oosaka', 'fukuoka')
						),
					),
					'post_type' => 'event', //カスタム投稿名
					'posts_per_page'=> 10, //表示件数（-1で全ての記事を表示）
					'paged' => $paged,
				);
				query_posts( $args );
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						$place = get_post_meta($post->ID,'place',true);
						$list = get_post_meta($post->ID,'list',true);
						$date = get_post_meta($post->ID,'date',true);
						$time1 = get_post_meta($post->ID,'time1',true);
						$time1_1 = get_post_meta($post->ID,'time1_1',true);
						$time2 = get_post_meta($post->ID,'time2',true);
						$time2_1 = get_post_meta($post->ID,'time2_1',true);
						$photo = get_post_custom_values('photo',$post_id);

						$terms = wp_get_object_terms($post->ID, 'event_pref');
						foreach ( $terms as $term ){
							$pref = $term->name;

							if($pref == "東京") {
								$icon = "icon01";
							} else if($pref == "神奈川") {
								$icon = "icon02";
							} else if($pref == "名古屋") {
								$icon = "icon03";
							} else if($pref == "大阪") {
								$icon = "icon04";
							} else if($pref == "福岡") {
								$icon = "icon05";
							}
						}
			?>
				<li><a href="<?php the_permalink(); ?>">
					<div class="data sp"><span class="icon <?php echo $icon; ?>"><?php $terms = wp_get_object_terms($post->ID, 'event_pref');
						foreach ( $terms as $term ){
							echo $term->name;
						} ?></span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
					<div class="table">
						<div class="imgBox"><?php if(!empty($photo[0])) { echo wp_get_attachment_image($photo[0], 'event_list'); } else { ?><img src="<?php bloginfo('template_url') ?>/common/images/noimg.jpg" alt=""><?php } ?></div>
						<div class="dataBox">
						<div class="data pc"><span class="icon <?php echo $icon; ?>"><?php $terms = wp_get_object_terms($post->ID, 'event_pref');
							foreach ( $terms as $term ){
								echo $term->name;
							} ?></span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
							<?php echo $list; ?>
							<span class="btn">詳しくはこちら</span>
						</div>
					</div>
				</a></li>
			<?php
				endwhile;
			?>
			</ul>
			<div class="pager">
				<?php global $wp_rewrite;
				$paginate_base = get_pagenum_link(1);
				if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
					$paginate_format = '';
					$paginate_base = add_query_arg('paged','%#%');
				}
				else{
					$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/','paged');;
					$paginate_base .= '%_%';
				}
				echo paginate_links(array(
					'base' => $paginate_base,
					'format' => $paginate_format,
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4,
					'current' => ($paged ? $paged : 1),
					'prev_next' => false,
				)); ?>
			</div>
			<?php
				endif;
				// クエリをリセット
				wp_reset_query();
			?>
		</div>

		<div class="box">
			<h3>セミナー</h3>
			<div class="imgBox"><img src="<?php bloginfo('template_url') ?>/event/images/img_01.jpg" alt=""></div>
			<p>クロニクルでは、目的やテーマに合わせて様々なセミナーを開催しております。<br>
	リノベーションに関するさまざまな疑問を、解消いたします！（先着順・予約制）</p>

			<ul class="clearfix">
			<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'tax_query' => array( 
							'relation' => 'AND',
						array(
							'taxonomy' => 'kind', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => 'kobetsu'
						),
						array(
							'taxonomy' => 'event_pref', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array('tokyo', 'kanagawa', 'nagoya', 'oosaka', 'fukuoka')
						),
					),
					'post_type' => 'event', //カスタム投稿名
					'posts_per_page'=> 10, //表示件数（-1で全ての記事を表示）
					'paged' => $paged,
				);
				query_posts( $args );
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						$place = get_post_meta($post->ID,'place',true);
						$list = get_post_meta($post->ID,'list',true);
						$date = get_post_meta($post->ID,'date',true);
						$time1 = get_post_meta($post->ID,'time1',true);
						$time1_1 = get_post_meta($post->ID,'time1_1',true);
						$time2 = get_post_meta($post->ID,'time2',true);
						$time2_1 = get_post_meta($post->ID,'time2_1',true);
						$photo = get_post_custom_values('photo',$post_id);

						$terms = wp_get_object_terms($post->ID, 'event_pref');
						foreach ( $terms as $term ){
							$pref = $term->name;

							if($pref == "東京") {
								$icon = "icon01";
							} else if($pref == "神奈川") {
								$icon = "icon02";
							} else if($pref == "名古屋") {
								$icon = "icon03";
							} else if($pref == "大阪") {
								$icon = "icon04";
							} else if($pref == "福岡") {
								$icon = "icon05";
							}
						}
			?>
				<li><a href="<?php the_permalink(); ?>">
					<div class="data sp"><span class="icon <?php echo $icon; ?>"><?php $terms = wp_get_object_terms($post->ID, 'event_pref');
						foreach ( $terms as $term ){
							echo $term->name;
						} ?></span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
					<div class="table">
						<div class="imgBox"><?php if(!empty($photo[0])) { echo wp_get_attachment_image($photo[0], 'event_list'); } else { ?><img src="<?php bloginfo('template_url') ?>/common/images/noimg.jpg" alt=""><?php } ?></div>
						<div class="dataBox">
						<div class="data pc"><span class="icon <?php echo $icon; ?>"><?php $terms = wp_get_object_terms($post->ID, 'event_pref');
							foreach ( $terms as $term ){
								echo $term->name;
							} ?></span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
							<?php echo $list; ?>
							<span class="btn">詳しくはこちら</span>
						</div>
					</div>
				</a></li>
			<?php
				endwhile;
			?>
			</ul>
			<div class="pager">
				<?php global $wp_rewrite;
				$paginate_base = get_pagenum_link(1);
				if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
					$paginate_format = '';
					$paginate_base = add_query_arg('paged','%#%');
				}
				else{
					$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/','paged');;
					$paginate_base .= '%_%';
				}
				echo paginate_links(array(
					'base' => $paginate_base,
					'format' => $paginate_format,
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4,
					'current' => ($paged ? $paged : 1),
					'prev_next' => false,
				)); ?>
			</div>
			<?php
				endif;
				// クエリをリセット
				wp_reset_query();
			?>
		</div>
	</div>
</div><!-- #container -->
<?php get_footer(); ?>
