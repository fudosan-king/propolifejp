<?php
require( '../wp-load.php' );

add_filter( 'body_class', 'add_body_class' );
function add_body_class( $classes ) {
	$classes[] = "page-re_service";
	return $classes;
}
wp_enqueue_style( 'style-service', home_url( '/re_service/style_service.css' ) );
get_header(); ?>
	<article class="content">
		<div class="container">
			<div class="re_service01">
				<div class="title-img">
					<img src="img/img01.png" alt="キャンペーン1 住宅購入資金100万円分プレゼント！">
				</div>
				<div class="flex">
					<div><img src="img/img02.png" alt="購入資金の使い道はお任せします!!"></div>
					<div><img src="img/img03.png" alt="最新の家電に"></div>
				</div>
			</div>

			 <div class="re_service02">
				 <div class="title-img">
					<img src="img/img06.jpg" alt="キャンペーン2 家具付きモデルルーム住戸販売">
				 </div>
				 <div class="flex">
					 <div><img src="img/img07.jpg" alt="家具付き住戸のメリット 家具付き住戸のメリット 家具を揃える手間が省ける 入居した日から快適な生活 初期費用が抑えられる"></div>
					 <div><img src="img/img08.jpg" alt="image"></div>
				 </div>
			</div>

		  <div class="re_service03">
			  <div><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-rfqam-ebcc891d92cfc4b60e119e0fb33404d7" target="_blank"><img src="img/img09.jpg" alt="来場予約はこちら"></a></div>
		  </div>
		</div>
    </article>
<?php get_footer();
