<?php get_header(); ?>



<script src="<?php bloginfo('template_url') ?>/common/js/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_url') ?>/<?php echo get_post_type( $post ); ?>/js/script.js"></script>
<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>works/">リノベーション実例<span>Renovation Works</span></a></h2>
	</div>
</div><!-- #main -->


		<?php
			query_posts($query_string.'&post_type=works');
			while ( have_posts() ) : the_post();
				$photo1 = get_post_custom_values('photo1',$post_id);
				$photo2 = get_post_custom_values('photo2',$post_id);
				$photo3 = get_post_custom_values('photo3',$post_id);
				$photo4 = get_post_custom_values('photo4',$post_id);
				$photo5 = get_post_custom_values('photo5',$post_id);
				$photo6 = get_post_custom_values('photo6',$post_id);
				$photo7 = get_post_custom_values('photo7',$post_id);
				$photo8 = get_post_custom_values('photo8',$post_id);
				$caption1 = get_post_meta($post->ID,'caption1',true);
				$caption2 = get_post_meta($post->ID,'caption2',true);
				$caption3 = get_post_meta($post->ID,'caption3',true);
				$caption4 = get_post_meta($post->ID,'caption4',true);
				$caption5 = get_post_meta($post->ID,'caption5',true);
				$caption6 = get_post_meta($post->ID,'caption6',true);
				$caption7 = get_post_meta($post->ID,'caption7',true);
				$caption8 = get_post_meta($post->ID,'caption8',true);

				$catch = get_post_meta($post->ID,'catch',true);

				$title01 = get_post_meta($post->ID,'title01',true);
				$text01 = get_post_meta($post->ID,'text01',true);
				$img01 = get_post_custom_values('img01',$post_id);
				$title02 = get_post_meta($post->ID,'title02',true);
				$text02 = get_post_meta($post->ID,'text02',true);
				$img02 = get_post_custom_values('img02',$post_id);

				$madori01 = get_post_custom_values('madori01',$post_id);
				$madori02 = get_post_custom_values('madori02',$post_id);

				$spec01 = get_post_meta($post->ID,'spec01',true);
				$spec02 = get_post_meta($post->ID,'spec02',true);
				$spec03 = get_post_meta($post->ID,'spec03',true);
				$spec04 = get_post_meta($post->ID,'spec04',true);
				$spec05 = get_post_meta($post->ID,'spec05',true);
				$spec06 = get_post_meta($post->ID,'spec06',true);
				$spec07 = get_post_meta($post->ID,'spec07',true);
				$spec08 = get_post_meta($post->ID,'spec08',true);
				$spec09 = get_post_meta($post->ID,'spec09',true);

				$price = get_post_meta($post->ID,'price',true);

				$voice_name01 = get_post_meta($post->ID,'voice_name01',true);
				$voice_text01 = get_post_meta($post->ID,'voice_text01',true);
				$voice_img01 = get_post_custom_values('voice_img01',$post_id);
				$voice_name02 = get_post_meta($post->ID,'voice_name02',true);
				$voice_text02 = get_post_meta($post->ID,'voice_text02',true);
				$voice_img02 = get_post_custom_values('voice_img02',$post_id);
		?>

<div id="container">
	<div id="detail">
		<h3 class="ttl"><?php the_title(); ?></h3>
		<div class="wrap clearfix">
			<div id="slider">
				<ul class="imgBox clearfix">
					<?php if(!empty($photo1)) : ?><li><?php echo wp_get_attachment_image($photo1[0], 'work'); ?><?php if(!empty($caption1)) : ?><span><?php echo $caption1; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo2)) : ?><li><?php echo wp_get_attachment_image($photo2[0], 'work'); ?><?php if(!empty($caption2)) : ?><span><?php echo $caption2; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo3)) : ?><li><?php echo wp_get_attachment_image($photo3[0], 'work'); ?><?php if(!empty($caption3)) : ?><span><?php echo $caption3; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo4)) : ?><li><?php echo wp_get_attachment_image($photo4[0], 'work'); ?><?php if(!empty($caption4)) : ?><span><?php echo $caption4; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo5)) : ?><li><?php echo wp_get_attachment_image($photo5[0], 'work'); ?><?php if(!empty($caption5)) : ?><span><?php echo $caption5; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo6)) : ?><li><?php echo wp_get_attachment_image($photo6[0], 'work'); ?><?php if(!empty($caption6)) : ?><span><?php echo $caption6; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo7)) : ?><li><?php echo wp_get_attachment_image($photo7[0], 'work'); ?><?php if(!empty($caption7)) : ?><span><?php echo $caption7; ?></span><?php endif; ?></li><?php endif; ?>
					<?php if(!empty($photo8)) : ?><li><?php echo wp_get_attachment_image($photo8[0], 'work'); ?><?php if(!empty($caption8)) : ?><span><?php echo $caption8; ?></span><?php endif; ?></li><?php endif; ?>
				</ul>
			</div>
			<div id="thumbs" class="imgBox clearfix">
				<?php if(!empty($photo1)) : ?><a data-slide-index="0" href=""><?php echo wp_get_attachment_image($photo1[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo2)) : ?><a data-slide-index="1" href=""><?php echo wp_get_attachment_image($photo2[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo3)) : ?><a data-slide-index="2" href=""><?php echo wp_get_attachment_image($photo3[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo4)) : ?><a data-slide-index="3" href=""><?php echo wp_get_attachment_image($photo4[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo5)) : ?><a data-slide-index="4" href=""><?php echo wp_get_attachment_image($photo5[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo6)) : ?><a data-slide-index="5" href=""><?php echo wp_get_attachment_image($photo6[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo7)) : ?><a data-slide-index="6" href=""><?php echo wp_get_attachment_image($photo7[0], 'thumb'); ?></a><?php endif; ?>
				<?php if(!empty($photo8)) : ?><a data-slide-index="7" href=""><?php echo wp_get_attachment_image($photo8[0], 'thumb'); ?></a><?php endif; ?>
			</div>

			<h3 class="subttl"><?php echo $catch; ?></h3>
			<div class="content clearfix">
				<h4><?php echo $title01; ?></h4>
				<div class="imgBox fL"><?php echo wp_get_attachment_image($img01[0], 'detail'); ?></div>
				<p><?php echo $text01; ?></p>
			</div>
			<div class="content clearfix">
				<h4><?php echo $title02; ?></h4>
				<div class="imgBox fL"><?php echo wp_get_attachment_image($img02[0], 'detail'); ?></div>
				<p><?php echo $text02; ?></p>
			</div>

			<div class="madori clearfix">
				<div class="box fL">
					<div class="ttl">BEFORE</div>
					<div class="imgBox"><?php echo wp_get_attachment_image($madori01[0], 'madori'); ?></div>
				</div>
				<div class="box fR">
					<div class="ttl">AFTER</div>
					<div class="imgBox"><?php echo wp_get_attachment_image($madori02[0], 'madori'); ?></div>
				</div>
			</div>

			<div class="dataBox">
				<h4>スペック情報</h4>
				<table class="type01">
					<tr>
						<th>建物種別</th>
						<td><?php echo $spec01; ?></td>
						<th>間取り</th>
						<td><?php echo $spec02; ?></td>
					</tr>
					<tr>
						<th>工期</th>
						<td><?php echo $spec03; ?></td>
						<th>築年数</th>
						<td><?php echo $spec04; ?></td>
					</tr>
					<tr>
						<th>施工面積</th>
						<td><?php echo $spec05; ?></td>
						<th>物件面積</th>
						<td><?php echo $spec06; ?></td>
					</tr>
					<tr>
						<th>施工先住所</th>
						<td><?php echo $spec07; ?></td>
						<th>家族構成</th>
						<td><?php echo $spec08; ?></td>
					</tr>
					<tr>
						<th>採用した商品</th>
						<td colspan="3"><?php echo nl2br($spec09); ?></td>
					</tr>
				</table>
				<div class="price">施工費用 <span><?php echo $price; ?><span>円</span></span></div>

				<div class="voice">
					<?php if(!empty($voice_name01) || !empty($voice_text01)) : ?>
					<h4>お客様の声</h4>
					<div class="box">
						<?php if(!empty($voice_img01)) : ?>
						<div class="imgBox"><?php echo wp_get_attachment_image($voice_img01[0], 'voice'); ?></div>
						<?php endif; ?>
						<div class="data">
							<div class="name"><?php echo $voice_name01; ?></div>
							<p><?php echo nl2br($voice_text01); ?></p>
						</div>
					</div>
					<?php endif; ?>

					<?php if(!empty($voice_name02) || !empty($voice_text02)) : ?>
					<h4>担当者の声</h4>
					<div class="box">
						<?php if(!empty($voice_img02)) : ?>
						<div class="imgBox"><?php echo wp_get_attachment_image($voice_img02[0], 'voice'); ?></div>
						<?php endif; ?>
						<div class="data">
							<div class="name"><?php echo $voice_name02; ?></div>
							<p><?php echo nl2br($voice_text02); ?></p>
						</div>
					</div>
					<?php endif; ?>
				</div><!-- .voice -->

				<table class="type02">
					<tr>
						<th>タグ</th>
						<td>
							<div class="tag">
							<?php $terms = wp_get_object_terms($post->ID, 'renovation_tag');
							foreach ( $terms as $term ){
								echo '<a href="'.get_term_link($term->slug, 'renovation_tag').'">'.$term->name.'</a>';
							} ?>
							</div>
						</td>
					</tr>
				</table>
			</div><!-- .dataBox -->

			<div class="pageList"><div class="back"><?php previous_post_link('%link', 'BACK'); ?></div><a href="<?php echo esc_url( home_url('/') ); ?>works/">施工事例一覧に戻る</a><div class="next"><?php next_post_link('%link', 'NEXT'); ?></div></div>
		</div><!-- .wrap -->
	</div><!-- #detail -->
</div><!-- #container -->
		<?php endwhile; ?>

<?php get_footer(); ?>
