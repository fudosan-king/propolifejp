<?php get_header(); ?>

<div id="main">
	<div class="wrap">
		<h2><a href="<?php echo esc_url( home_url('/') ); ?>works/">リノベーション実例<span>Renovation Works</span></a></h2>
	</div>
</div><!-- #main -->


		<?php
			$totalPost = isset($_GET['list-all']) && $_GET['list-all'] == -1 ? -1 : 9;
			query_posts($query_string.'&post_type=works&posts_per_page='.$totalPost);
			if ( have_posts() ) :
		?>
<div id="container" class="clearfix">
	<div class="catch">クロニクルが提供する全てのサービスの施行事例をご覧いただけます。</div>
	<div id="localNav">
		<ul class="wrap clearfix">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>works/"<?php if(get_post_type( $post ) == 'works') echo ' class="on"'; ?>>全て表示</a></li>
		<?php
		$tag = get_current_term();

		$catName = $tag->name;
		if($catName == "ログマンション") {
			$current[1] = ' class="on"';
		} else if($catName == "オーダーリノベ") {
			$current[2] = ' class="on"';
		} else if($catName == "クロニクルプラス") {
			$current[3] = ' class="on"';
		} else if($catName == "クロニクルリフォーム") {
			$current[4] = ' class="on"';
		} else if($catName == "クロニクルレジデンス") {
			$current[5] = ' class="on"';
		}

		$n = 1;
		$subname = "";
		$terms = get_terms('renovation','orderby=id','hide_empty=0');
		foreach ( $terms as $term ){
			if($term->name == "ログマンション") {
				$subname = "<span>リノベーションマンション</span>";
			} else if($term->name == "オーダーリノベ") {
				$subname = "<span>販売価格内で自由にリノベーション</span>";
			} else if($term->name == "クロニクルプラス") {
				$subname = "<span>中古物件探し+リノベーション</span>";
			} else if($term->name == "クロニクルリフォーム") {
				$subname = "<span>ご自宅・店舗・オフィスをリフォーム</span>";
			} else if($term->name == "クロニクルレジデンス") {
				$subname = "<span>一棟リノベーションマンション</span>";
			}
			echo '<li><a href="'.get_term_link($term->slug, 'renovation').'"'.$current[$n].'>'.$subname.$term->name.'</a></li>';
			$n++;
		}
		?>
		</ul>
	</div>

	<div id="listBox" class="wrap">
		<ul>
			<?php
				while ( have_posts() ) : the_post();
					$photo1 = get_post_custom_values('photo1',$post_id);
					$list01 = get_post_meta($post->ID,'list01',true); //物件名
					$list02 = get_post_meta($post->ID,'list02',true); //専有面積
					$spec02 = get_post_meta($post->ID,'spec02',true); //間取り
					$spec04 = get_post_meta($post->ID,'spec04',true); //築年数

					$vr360MTP = get_post_meta($post->ID,'vr360_url',true); //VR360マターポートURL
					$vr360IMG = get_post_meta($post->ID,'vr360_gif',true); //VR360 Gif画像のURL

					echo $list01;
			?>
			<li>

				<div class="imgBox">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($photo1[0], 'list'); ?></a>
					<?php 
						if(!empty($vr360MTP)):
							?>
							<img class="vr360" src="<?php echo get_template_directory_uri()."/common/images/VR_logo.jpg"; ?>" alt="">
							<?php
						endif;
					 ?>
				</div>
				<div class="tag">
				<?php
					$days = 7; //Newを表示させたい期間の日数
					$today = date_i18n('U');
					$entry = get_the_time('U');
					$kiji = date('U',($today - $entry)) / 86400 ;
					if( $days > $kiji ){
						echo '<span class="new">NEW</span>';
					}
				?>
				<?php $terms = wp_get_object_terms($post->ID, 'renovation');
				foreach ( $terms as $term ){
					$tagType = 'tag-type-';
					switch ($term->name) {
						case 'クロニクルプラス':
							$tagType .= '01';
							break;
						case 'ログマンション':
							$tagType .= '02';
							break;
						case 'オーダーリノベ':
							$tagType .= '03';
							break;
						case 'クロニクルリフォーム':
							$tagType .= '04';
							break;
					}
					echo '<a href="'.get_term_link($term->slug, 'renovation').'" class="'.$tagType.'">'.$term->name.'</a>';
				} ?>
				</div>

				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

				<dl>
				<?php if(!empty($list01)) { ?>
					<dt>物件名</dt>
					<dd><?php echo $list01; ?></dd>
				<?php } ?>
				<?php if(!empty($list02)) { ?>
					<dt>専有面積</dt>
					<dd><?php echo $list02; ?></dd>
				<?php } ?>
				<?php if(!empty($spec04)) { ?>
					<dt>築年数</dt>
					<dd><?php echo $spec04; ?></dd>
				<?php } ?>
				<?php if(!empty($spec02)) { ?>
					<dt>間取り</dt>
					<dd><?php echo $spec02; ?></dd>
				<?php } ?>
				</dl>
			</li>
			<?php endwhile; ?>
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
	</div>
</div><!-- #container -->
		<?php
		endif;
		// クエリをリセット
		wp_reset_query();
		?>

<?php get_footer(); ?>
