<?php get_header(); ?>



<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>event/">セミナー・イベント情報<span>Seminar & Event</span></a></h2>
	</div>
</div><!-- #main -->


		<?php
			query_posts($query_string.'&post_type=event');
			while ( have_posts() ) : the_post();
				$date = get_post_meta($post->ID,'date',true);
				$time1 = get_post_meta($post->ID,'time1',true);
				$time1_1 = get_post_meta($post->ID,'time1_1',true);
				$time2 = get_post_meta($post->ID,'time2',true);
				$time2_1 = get_post_meta($post->ID,'time2_1',true);
				$time3 = get_post_meta($post->ID,'time3',true);
				$time3_1 = get_post_meta($post->ID,'time3_1',true);
				$access = get_post_meta($post->ID,'access',true);
				$photo = get_post_custom_values('photo',$post_id);

				global $wpdb;
				$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
				$cf = $wpdb->get_results($query, ARRAY_A);

				$title = array();
				$text = array();

				foreach( $cf as $row ){
					if( $row['meta_key'] == "title" ){
						array_push( $title, $row['meta_value'] );
					}
					if( $row['meta_key'] == "text" ){
						array_push( $text, $row['meta_value'] );
					}
				}

				$length = count( $title );

				$terms = wp_get_object_terms($post->ID, 'kind');

				foreach ( $terms as $term ){
					$kind = $term->name;
				}
		?>
<div id="container">
	<div id="detail">
		<h3 class="ttl"><?php echo $kind; ?></h3>
		<div class="wrap clearfix">
			<div class="dataBox clearfix">
				<div class="data">
					<h4><?php the_title(); ?></h4>
					<dl>
						<dt>日時</dt>
						<dd><?php echo $date." "; ?><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?>　<?php if(!empty($time3)) echo "※受付開始 ".$time3.":".$time3_1."～"; ?></dd>
						<dt>会場</dt>
						<dd><?php echo $access; ?></dd>
					</dl>
				</div>
				<div class="imgBox"><?php echo wp_get_attachment_image($photo[0], 'event'); ?></div>
			</div><!-- .dataBox -->

			<div class="content">
			<?php
				for( $i = 0; $i < $length; $i ++ ) {
			?>
				<h4><?php echo $title[$i]; ?></h4>
				<p><?php echo nl2br($text[$i]); ?></p>
			<?php
				}
			?>
			</div>

			<div class="contact">
				<h4>物件詳細・周辺環境・お住み替え・住宅ローンなどお気軽にご相談ください！</h4>
				<div class="table">
					<div class="tel pc">0120-966-492</div>
					<p class="pc">OPEN 10:00-19:00 / CLOSE 水曜日<br>
					携帯電話・PHSからもご利用いただけます。</p>

					<a href="tel:0120-966-492" class="btn btn02 sp">
						<span class="tel">0120-966-492</span>
						<span>OPEN 10:00-19:00<br>
						CLOSE 水曜日</span>
					</a>
					<a href="" class="btn"><span>メールフォームからお問い合わせ</span></a>
				</div>
			</div>

			<div class="pageList"><a href="<?php echo esc_url( home_url('/') ); ?>event/">一覧に戻る</a></div>
		</div><!-- .wrap -->
	</div><!-- #detail -->
</div><!-- #container -->
		<?php endwhile; ?>

<?php get_footer(); ?>
