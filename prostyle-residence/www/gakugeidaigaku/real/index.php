<?php
require( '../wp-load.php' );

add_filter( 'body_class', 'add_body_class' );
function add_body_class( $classes ) {
	$classes[] = "page-real";
	return $classes;
}
wp_enqueue_style( 'style_real', home_url( '/real/style_real.css' ) );
get_header(); ?>
	<article class="content">
	  <div id="title-area">
			<h2>
					<span>完成後販売</span>のプロスタイル学芸大学は<br>
					<span>実物</span>を確認できます
			</h2>
			<p class="read">完成済み物件は、実際にお住まいになるお部屋や、<br>
							建物内モデルルームで現物を見ることができますので、ご入居の前と後のイメージのギャップが少なくなります。<br>
							また、陽当りの良さやお部屋からの眺めなどをあらかじめ確認できることも完成済み物件最大の魅力となります。</p>
		</div>
		<div class="container">
			<div class="sec sec01">
	        <div class="point-tit"><img src="img/tit01.png" style="width:690px;" alt="完成済み物件の魅力 1"/></div>
			<div class="sec-contents">
			　<div class="sec-txt">
			   <p class="catch">使い勝手を確認できるので、<br>実際の生活をイメージできます。</p>
			   <p class="description">お部屋の雰囲気や住居内の寸法を確認できますので、どのような家具が似合うか、手持ちの家具が置けるかといった空間の活用方法を考えられます。また、生活動線やお部屋の使い勝手、収納や設備などの機能面も、実生活に近いイメージで体感できます。</p>
				</div>
			  <div class="sec-img"><img src="img/img01.jpg" alt="sec01 image"/></div>
			</div>
	      </div>
			
			<div class="sec sec02">
	        <div class="point-tit"><img src="img/tit02.png" style="width:690px;" alt="完成済み物件の魅力 1"/></div>
			<div class="sec-contents">
			　<div class="sec-txt">
			   <p class="catch">共用施設や管理体制の良し悪しを<br>考慮することができます。</p>
			   <p class="description">駐車場、エントランスといった部屋以外の共用施設は、未完成物件では、パースや模型を見て想像することしかできません。けれど実物を見ることができれば、その広さや使い勝手もチェックできます。ゴミ置き場の管理状態やセキュリティが行き届いているかどうかなどを確かめられるのも安心材料に。</p>
				</div>
			  <div class="sec-img"><img src="img/img02.jpg" alt="sec02 image"/></div>
			</div>
	      </div>
			
			<div class="sec sec03">
	        <div class="point-tit"><img src="img/tit03.png" style="width:690px;" alt="完成済み物件の魅力 1"/></div>
			<div class="sec-contents">
			　<div class="sec-txt mb35">
			   <p class="catch">低金利の今だからこそ完成済み物件を選ぶべき利点があります。</p>
			   <p class="description">住宅ローンを組む場合には、住まいの引渡しを受ける月の金利が適用されます。そのため契約時には低金利でも、ローン実行時（引渡し時）には金利が上昇していることも。引渡しまでの期間が短い完成済み物件なので、こうしたリスクを低減できます。</p>
			  <div class="sec-img"><img src="img/img03.jpg" alt="sec01 image"/></div>
				</div>
				　<div class="sec-content02">
					　<p class="sec-content02_tit01"><span class="bg-white">ご契約から入居までが<span class="color01" style="	padding-left: 10px;">短期間  </span></span></p>
					　<p class="sec-content02_tit02 mb20"><span class="color02">金利上昇のリスクに強い</span></p>
					 <div class="float_box clearfix">
					　<p class="left"><img src="img/img04.jpg" alt="ご契約後、引き渡しまでの期間が短い"/></p>
					　<p class="right"><img src="img/img05.jpg" alt="ご契約後、引き渡しまでの期間が短い仮に金利が1％上昇すると…"/></p>
					</div>
				　</div>
				　<div class="sec-content02_otoku">
					 <p class="otoku_icon"><img src="img/img06.jpg" alt="お得"/></p>
					  <div class="box">
					   <div class="sec-content02_txt">
				　	   <p class="sec-content02_otoku_catch"><span class="color01">引っ越しまでの家賃など、無駄な出費を抑えられます。</span></p>
				　	   <p class="sec-content02_otoku_description">未完成物件の場合、建設期間があるため、ご契約から入居まで長期間になる場合も。完成済み物件は完成を待つ間に発生する家賃の支払いを最小限に抑えることができます。</p>
					   </div>
				　    </div>
					</div>
				  </div>
				</div>
			
			<div class="sec sec04">
	        <div class="point-tit"><img src="img/tit04.png" style="width:690px;" alt="完成済み物件の魅力 1"/></div>
			<div class="sec-contents">
			　<div class="sec-txt">
			   <p class="catch">早期にローン返済に移行できる。</p>
			   <p class="description">さらに現在賃貸住宅に住んでいる方の場合、完成を待つ必要がない竣工済み物件は、家賃をローン返済にまわせる点も嬉しい。現在家賃が15万円の賃貸に住んでいると仮定して、竣工まで一年待つとしたら、180万円の家賃を払わなければいけません。即入居できてしまえば、それがそのままローン返済に充てられるためこの差は大きいといえます。いずれ買うなら早いタイミングの方が将来設計もしやすくなります。</p>
				</div>
			  <div class="sec-img"><img src="img/img07.jpg" alt="sec01 image"/></div>
				<p class="now"><img src="img/img08.jpg" alt="今なら"/></p>
				<div class="bg_red">
				 <div class="bnr">
				 <p class="bnr_img"><img src="img/imp09.png" alt="住宅控除ローンが受けられます　消費税8％の住宅⇒最大400万円の控除"/></p>
				    <p class="bnr_txt">消費税8％の住宅の場合、1年間の最大控除額は「4,000万円×1％」で40万円なので、10年間の最大控除額は400万円になります。この制度が適用されるのは2021年12月31日までとなります。</p>
					<p class="bnr_cap">※自己住居のための住宅取得であること。 ※返済期間10年以上の住宅ローンを組んでいること。<br>
					※対象の住宅の床面積は登記簿面積50㎡以上で半分以上を住居用にしていること。 ※取得後6ヶ月以内に入居し、引き続き住んでいること。<br>
					※控除を受ける年の合計所得金額が3,000万円以下であること。  ※入居した年とその前後の2年ずつの5年間に、長期譲渡所得の課税の特例などを受けていないこと。</p>
				 </div>
				</div>
			</div>
	      </div>
</div>
      </article>
<?php get_footer();