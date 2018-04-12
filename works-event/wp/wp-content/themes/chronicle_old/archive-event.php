<?php get_header(); ?>

<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>event/">セミナー・イベント情報<span>Seminar & Event</span></a></h2>
	</div>
</div><!-- #main -->


<div id="container" class="wrap clearfix">
	<p class="read">クロニクルでリノベーションした、住まいの見学会やショールームでの<br>
	無料相談会を開催しております。他とは違う、本物の天然無垢材を、<br>
	実際に「見て、手を触れて」ご体感してください！</p>

	<div class="box fL">
		<h3><span>理想のお住まいさがしに</span>リノベーション相談会</h3>
		<div class="imgBox"><img src="<?php bloginfo('template_url') ?>/<?php echo get_post_type( $post ); ?>/images/img_01.jpg" alt=""></div>
		<p>各地のショールームにて、さまざまな疑問にじっくりお答えするリノベーション相談会のご予約も承っております。参加をご希望の場合には、事前にお申し付け下さいませ。入場無料</p>

		<ul>
		<?php
			$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'kind', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'terms' => 'kobetsu'
					),
				),
				'post_type' => 'event', //カスタム投稿名
				'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
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

					if($place == "北海道" || $place == "青森" || $place == "秋田" || $place == "山形" || $place == "岩手" || $place == "宮城" || $place == "福島") {
						$icon = "icon01";
					} else if($place == "東京") {
						$icon = "icon02";
					} else if($place == "神奈川") {
						$icon = "icon03";
					} else if($place == "千葉") {
						$icon = "icon04";
					} else if($place == "埼玉") {
						$icon = "icon05";
					} else if($place == "群馬" || $place == "栃木" || $place == "茨城" || $place == "新潟" || $place == "石川" || $place == "福井" || $place == "富山" || $place == "徳島" || $place == "香川" || $place == "愛媛" || $place == "高知") {
						$icon = "icon06";
					} else if($place == "愛知" || $place == "三重" || $place == "岐阜" || $place == "静岡" || $place == "山梨" || $place == "長野") {
						$icon = "icon07";
					} else if($place == "大阪" || $place == "京都" || $place == "兵庫" || $place == "滋賀" || $place == "奈良" || $place == "和歌山") {
						$icon = "icon08";
					} else if($place == "広島" || $place == "岡山" || $place == "山口" || $place == "島根" || $place == "鳥取") {
						$icon = "icon09";
					} else if($place == "福岡" || $place == "佐賀" || $place == "長崎" || $place == "熊本" || $place == "大分" || $place == "宮崎" || $place == "鹿児島" || $place == "沖縄") {
						$icon = "icon10";
					}
		?>
			<li><a href="<?php the_permalink(); ?>">
			<div class="data"><span class="icon <?php echo $icon; ?>">【<?php echo $place; ?>】</span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
			<?php echo $list; ?></a></li>
		<?php
			endwhile;
		endif;
		// クエリをリセット
		wp_reset_query();
		?>
		</ul>
	</div>

	<div class="box fR">
		<h3><span>クロニクルのリノベを体感！</span>住まい見学会</h3>
		<div class="imgBox"><img src="<?php bloginfo('template_url') ?>/<?php echo get_post_type( $post ); ?>/images/img_02.jpg" alt=""></div>
		<p>クロニクルでリノベーションした、住まいの見学会を開催しております。他とは違う、本物の天然無垢材を、実際に「見て、手を触れて」ご体感してください！</p>

		<ul>
		<?php
			$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'kind', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'terms' => 'sumai'
					),
				),
				'post_type' => 'event', //カスタム投稿名
				'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
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

					if($place == "北海道" || $place == "青森" || $place == "秋田" || $place == "山形" || $place == "岩手" || $place == "宮城" || $place == "福島") {
						$icon = "icon01";
					} else if($place == "東京") {
						$icon = "icon02";
					} else if($place == "神奈川") {
						$icon = "icon03";
					} else if($place == "千葉") {
						$icon = "icon04";
					} else if($place == "埼玉") {
						$icon = "icon05";
					} else if($place == "群馬" || $place == "栃木" || $place == "茨城" || $place == "新潟" || $place == "石川" || $place == "福井" || $place == "富山" || $place == "徳島" || $place == "香川" || $place == "愛媛" || $place == "高知") {
						$icon = "icon06";
					} else if($place == "愛知" || $place == "三重" || $place == "岐阜" || $place == "静岡" || $place == "山梨" || $place == "長野") {
						$icon = "icon07";
					} else if($place == "大阪" || $place == "京都" || $place == "兵庫" || $place == "滋賀" || $place == "奈良" || $place == "和歌山") {
						$icon = "icon08";
					} else if($place == "広島" || $place == "岡山" || $place == "山口" || $place == "島根" || $place == "鳥取") {
						$icon = "icon09";
					} else if($place == "福岡" || $place == "佐賀" || $place == "長崎" || $place == "熊本" || $place == "大分" || $place == "宮崎" || $place == "鹿児島" || $place == "沖縄") {
						$icon = "icon10";
					}
		?>
			<li><a href="<?php the_permalink(); ?>">
			<div class="data"><span class="icon <?php echo $icon; ?>">【<?php echo $place; ?>】</span><span class="date"><?php echo $date; ?></span><span class="time"><?php echo $time1; ?>:<?php echo $time1_1; ?>～<?php echo $time2; ?>:<?php echo $time2_1; ?></span></div>
			<?php echo $list; ?></a></li>
		<?php
			endwhile;
		endif;
		// クエリをリセット
		wp_reset_query();
		?>
		</ul>
	</div>
</div><!-- #container -->
<?php get_footer(); ?>
