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
			$noticeContent = '<p>【営業再開のお知らせ】</p>
				<p>PROSTYLE旅館東京浅草は、新型コロナウイルスの影響により<br>
				4月1日より休館とさせて頂いておりましたが、この度6月1日より営業再開とさせて頂きます。<br>
				<br>
				営業再開にあたり、お客様にはより安全・安心にご利用頂く為、引き続き感染防止策を徹底してまいります。</p';
		}
	}
?>

<section class="section_banner">
	<div class="owl-carousel owl-theme owl_banner <?=$currentLanguage;?>">
		<div class="item">
			<?php _generateTag_image($data->pc_image, 'd-none d-md-block'); ?>
			<?php _generateTag_image($data->sp_image, 'd-block d-md-none'); ?>
			<div class="caption">
				<div class="caption_content <?=$currentLanguage;?>">
					<?php _echo($data->caption); ?>
				</div>
				<!-- <div class="box_notice"> -->
            		<?php //echo $noticeContent; ?>
            	<!-- </div> -->
            	<a target="_blank" class="banner_goto_asakusa d-none d-md-block" href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/index.aspx?hi_id=2&lang=ja-JP"><img src="<?php echo ASSETS_IMG_PATH; ?>/1x/goto_asakusa.png" alt="" class="img-fluid"></a>

				<a target="_blank" class="banner_goto_asakusa d-block d-md-none" href="https://advance.reservation.jp/prostyleryokan/s_sp/rsv/search.aspx?hi_id=2&lang=ja-JP&sm=opt"><img src="<?php echo ASSETS_IMG_PATH; ?>/1x/goto_asakusa.png" alt="" class="img-fluid"></a>
			</div>
		</div>
	</div>
</section>

<section class="section_note">
    <div class="container">
        <div class="row">
            <div class="col-12">
            	<div class="box_note">
	            	<?php echo $noticeContent; ?>
            	</div>
            </div>
        </div>
    </div>
</section>