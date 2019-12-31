<?php get_header(); ?>



<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>event/">イベント・セミナー情報<span>Seminar & Event</span></a></h2>
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
				$phone = get_post_meta($post->ID,'phone',true);
				$photo = get_post_custom_values('photo',$post_id);

				global $wpdb;
				$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
				$cf = $wpdb->get_results($query, ARRAY_A);

				$title = array();
				$text = array();
				$img = array();

				foreach( $cf as $row ){
					if( $row['meta_key'] == "title" ){
						array_push( $title, $row['meta_value'] );
					}
					if( $row['meta_key'] == "text" ){
						array_push( $text, $row['meta_value'] );
					}
					if( $row['meta_key'] == "img" ){
						array_push( $img, $row['meta_value'] );
					}
				}

				$length = count( $title );

				$terms = wp_get_object_terms($post->ID, 'kind');

				foreach ( $terms as $term ){
					$kind = $term->name;
				}

				$ep = wp_get_object_terms($post->ID, 'event_pref');

				foreach ( $ep as $pref ){
					$pref = $pref->slug;
				}

				$tel = '';
				if (!isset($phone) || empty($phone)){
					if( $pref == "tokyo" ):
						$tel = "0120-602-423";
					elseif( $pref == "kanagawa" ):
						$tel = "0120-957-186";
					elseif( $pref == "nagoya" ):
						$tel = "0120-964-537";
					elseif( $pref == "oosaka" ):
						$tel = "0120-957-953";
					elseif( $pref == "fukuoka" ):
						$tel = "0120-981-779";
					endif;
				}else{
					$tel = $phone;
				}

				$telLink = isset($tel) && !empty($tel) ? str_replace("-", "", $tel) : '';

		?>
<div id="container">
	<div id="detail">
		<h3 class="ttl"><?php echo $kind; ?></h3>
		<div class="wrap clearfix">
			<div class="imgBox mainImg"><a href="<?php echo wp_get_attachment_url($photo[0]); ?>" target="_blank"><?php echo wp_get_attachment_image($photo[0], 'event_main'); ?></a></div>
			<div class="dataBox">
				<div class="data">
					<h4><?php the_title(); ?></h4>
					<dl>
						<dt>日時</dt>
						<dd><?php echo $date." "; ?><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?>　<?php if(!empty($time3)) echo "※受付開始 ".$time3.":".$time3_1."～"; ?></dd>
						<dt>会場</dt>
						<dd><?php echo $access; ?></dd>
					</dl>
				</div>
				<!-- <div class="imgBox"><img src="<?php bloginfo('template_url'); ?>/event/images/img.png" alt=""></div> -->
			</div><!-- .dataBox -->

			<div class="content clearfix">
			<?php
				for( $i = 0; $i < $length; $i ++ ) {
			?>
				<!-- <h4><?php echo $title[$i]; ?></h4> -->
				<hr size="5">
				<div class="textBox clearfix">
					<div class="imgBox <?php if($i %2 == 0){ echo 'fR'; } else { echo 'fL'; } ?>"><?php echo wp_get_attachment_image($img[$i], 'event'); ?></div>
					<p><?php echo nl2br($text[$i]); ?></p>
				</div>
			<?php
				}
			?>
			</div>

			<div class="contact" align="center">
				<a id="linkSubmit" href="https://www.chronicle-web.com/reform/lp/ourworks/#section_contact" target="_blank" class="btn"><span>予約する</span></a><br><br>
				<p>お電話でのお問い合わせは <a href="tel:<?=$telLink?>"><?=$tel?></a> までご連絡ください。</p>
			</div>

			<div class="pageList"><a href="<?php echo esc_url( home_url('/') ); ?>event/">一覧に戻る</a></div>
		</div><!-- .wrap -->
	</div><!-- #detail -->
</div><!-- #container -->
		<?php endwhile; ?>

<?php get_footer(); ?>
