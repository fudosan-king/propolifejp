<?php 
	$data = ACFHomeFields::_sectionBanner();

	$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

	$noticeContent = '';
	switch($currentLanguage){
		case 'en':{
			$noticeContent = '<p>[Notice of temporary closure due to emergency declaration]</p>
				<p>Thank you for using PROSTYLE Ryokan Tokyo Asakusa.<br>
				With the declaration of an emergency due to the spread of the new coronavirus infectious disease,
				we will be closed temporarily during the following period.<br>
				<span class="darkred">Closure duration: From Thursday, April 9 to Wednesday, May 6, 2020.</span><br>
				* The duration may be changed depending on future conditions.<br>
				● Nikuan “Kotakino Tokyo Asakusa” restaurant will also be closed temporarily during the above period.</p>
				<p class="mb-0">We apologize for any inconvenience or inconvenience, thank you for your understanding.</p>';
		}break;
		case 'zh':{
			$noticeContent = '<p>【关于紧急事态宣言期间停业的通知】</p>
				<p>感谢您利用PROSTYLE Ryokan Tokyo Asakusa。<br>
				在日本政府宣布紧急事态之后，为了防止新冠病毒的进一步扩散，我们将在以下期间临时停业。<br>
				<span class="darkred">停业时间：2020/4/9（星期四）～2020/5/6（星期三）</span><br>
				※根据国家规定停业时间可能发生变动。<br>
				「小泷野 东京浅草店」也将在这一期间停业。</p>
				<p class="mb-0">对于给您带来的不便，我们深表歉意，请您谅解。</p>';
		}break;
		case 'tw':{
			$noticeContent = '<p>【關於緊急事態宣言期間停業的通知】</p>
				<p>感謝您利用PROSTYLE Ryokan Tokyo Asakusa。<br>
				在日本政府宣布緊急事態之後，為了防止新冠病毒的進一步擴散，我們將在以下期間臨時停業。<br>
				<span class="darkred">停業時間：2020/4/9（星期四）～2020/5/6（星期三）</span><br>
				※根據國家規定停業時間可能發生變動。<br>
				「小瀧野 東京淺草店」也將在這一期間停業。</p>
				<p class="mb-0">對於給您帶來的不便，我們深表歉意，請您諒解。</p>';
		}break;
		default:{
			$noticeContent = '<p>【緊急事態宣言による臨時休業のお知らせ】</p>
        		<p>平素より、PROSTYLE旅館 東京浅草をご利用頂き誠にありがとうございます。<br>
				新型コロナウイルスの感染症拡大による緊急事態宣言に伴い、下記期間にて臨時休業とさせていただきます。<br>
				<span class="darkred">臨時休業期間：令和2年4月9日（木）から5月6日（水）まで</span><br>
				※休業期間につきましては、今後の状況等により変更となる場合がございます。<br>
				●肉庵「小滝野 東京浅草店」も上記期間にて臨時休業とさせていただきます。</p>
				<p class="mb-0">お客様にはご迷惑、ご不便をお掛け致しますが、何卒ご理解を賜りますようお願い申し上げます。</p>';
		}
	}
?>
<section class="section_banner">
	<div class="owl-carousel owl-theme owl_banner">
		<div class="item">
			<?php _generateTag_image($data->pc_image, 'd-none d-md-block'); ?>
			<?php _generateTag_image($data->sp_image, 'd-block d-md-none'); ?>
			<div class="caption">
				<div class="caption_content <?=$currentLanguage;?>">
					<?php _echo($data->caption); ?>
				</div>
				<div class="box_notice">
            		<?php echo $noticeContent; ?>
            	</div>
			</div>
		</div>
	</div>
</section>