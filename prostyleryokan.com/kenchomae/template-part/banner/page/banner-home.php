<?php 
	$data = ACFHomeFields::_sectionBanner();

	$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

	$noticeContent = '';
	switch($currentLanguage){
		case 'en':{
			$noticeContent = '<p>[Notice of business resumption]</p>
				<p>PROSTYLE Ryokan Tokyo Asakusa is affected by the new coronavirus<br>
				It was closed from April 1st, but it will be restarted from June 1st.<br>
				<br>
				Upon restarting business, we will continue to thoroughly implement infection prevention measures so that customers can use our products more safely and securely.</p>';
		}break;
		case 'zh':{
	        $noticeContent = '<p>【恢复正常营业的通知】</p>
	            <p>PROSTYLE旅馆东京浅草店于6月1日开始正式恢复营业。<br>
	            为保证顾客的安全与健康，我们将继续采取措施防止感染。<br>
	            <br>
	            期待您的光临。</p>';
	    }break;
		case 'tw':{
			$noticeContent = '<p>【恢複正常營業的通知】</p>
				<p>PROSTYLE旅館東京淺草店於6月1日開始正式恢複營業。<br>
				為保證顧客的安全與健康，我們將繼續采取措施防止感染。<br>
				<br>
				期待您的光臨。</p>';
		}break;
		default:{
			$noticeContent = '<p>【Go To浅草キャンペーンのお知らせ】</p>
				<p>政府による観光需要喚起策「Go Toトラベル」において、東京都発着の旅行が対象外とされたことを受け、さらなる感染拡大の防止に努めつつ、浅草エリアの経済活性化も同時に推進することを目的に、当社独自の取り組みとして、東京都在住の方を対象に宿泊料金が50%OFFとなる「Go To浅草キャンペーン」を開始することとなりました。<br>
				<br>
				■実施期間：2020年7月22日～2020年9月30日 <br>
				※期間中は何度でもキャンペーンが適用となります。また実施期間は予告なく終了する場合がございます。</p>';
		}
	}
?>

<section class="section_banner">
	<div class="owl-carousel owl-theme owl_banner <?=$currentLanguage;?>">
		<div class="item">

			<div class="w-100 d-none d-md-block" style="background: url(<?php echo $data->pc_image->url; ?>); height: 719px; background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

			<div class="w-100 d-block d-md-none" style="background: url(<?php echo $data->pc_image->url; ?>); height: 560px; background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

			<div class="caption">
				<div class="caption_content <?=$currentLanguage;?>">
					<?php _echo($data->caption); ?>
				</div>
				<!-- <div class="box_notice"> -->
            		<?php //echo $noticeContent; ?>
            	<!-- </div> -->
				<!-- <a  class="banner_goto_asakusa " href="#"  ><img src="<?php echo ASSETS_IMG_PATH; ?>/1x/goto_prostyle.jpg" data-tripla-booking-widget='search' alt='Search'></a> -->
			</div>
		</div>
	</div>
</section>

<section class="section_note py-1">
<!--     <div class="container">
        <div class="row">
            <div class="col-12">
            	<div class="wrap_note">           	
	            	<p class="mb-4 d-block d-md-none" ><img src="https://www.prostyleryokan.com/tokyo-asakusa/wp-content/uploads/2020/08/stay_hotel.png" alt="Search" data-tripla-booking-widget="search" class="img-fluid"></p>
	            	<p class="mb-4 d-none d-md-block" ><img src="https://www.prostyleryokan.com/tokyo-asakusa/wp-content/uploads/2020/08/stay_hotel.png" alt="Search" data-tripla-booking-widget="search" class="img-fluid"></p>
	            	<div class="box_note">
	            		<h3>【STAY HOTELのお知らせ】</h3>
	            		<p>昨今の新型コロナウイルス感染症（COVID-19）の防止策として、 国内でのテレワークの普及は急速に拡大している中、自宅以外のホテルに住まう感覚での活用を提案すべく、素泊まり5泊6日で1室最低20,000円～という料金設定の「STAY HOTEL」プランを開始することとなりました。<br>
	            		※清掃およびアメニティ交換のタイミングは宿泊期間中1回となっています。</p>

	            		<h3>【自社ＨＰリニューアルに伴うおしらせ】</h3>
	            		<p>自社ＨＰリニューアルに伴い9月18日までにご予約いただいたお客様は下記ＵＲＬよりキャンセル、変更をお願いいたします。<br>
						 <a href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/cnf_rsv_ent.aspx?hi_id=2&lang=ja-JP" class="link-content">https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/cnf_rsv_ent.aspx?hi_id=2&lang=ja-JP</a></p>
	            	</div>
	            </div>
            </div>
        </div>
    </div> -->
</section>