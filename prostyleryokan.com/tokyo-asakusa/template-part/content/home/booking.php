<?php 
	$langRegionStr = 'ja-JP';

    if(function_exists('qtranxf_getLanguage')){
    	$currentLanguage = qtranxf_getLanguage();

	    switch ($currentLanguage) {
	    	case 'en':
	    		$langRegionStr = 'en-US';
	    		break;

	    	case 'zh':
	    		$langRegionStr = 'zh-TW';
	    		break;
	    	
	    	default:
	    		$langRegionStr = 'ja-JP';
	    		break;
	    }
    }
?>
<section id="section_booking" class="section_booking">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="title"><?=__('Booking', 'uniquek');?></h2>
			</div>
			<div class="col-12 col-md-11 mx-auto">
				<form method="get" action="" id="ifrmBooking" name="frmBooking" target="_blank" class="frm_booking" onSubmit="return send()" target="_blank" >
					<div class="row">
						<div class="col-6 col-md-2 align-self-center">
							<div class="form-group">
								<label for=""><?=__('御到着日', 'uniquek');?></label>
								<input id="arrival_date" type="text" name="dt" class="form-control date_picker">
							</div>
						</div>
						<div class="col-6 col-md-2 align-self-center">
							<div class="form-group">
								<label for=""><?=__('御出発日', 'uniquek');?></label>
								<input id="departure_date" type="text" name="dt_to" class="form-control date_picker">
							</div>
						</div>
						<div class="col-6 col-md-2 align-self-center">
							<div class="form-group">
								<label for=""><?=__('人数', 'uniquek');?></label>
								<div class="w_select_custom">
									<select class="form-control select_custom" name="mc" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3 align-self-center">
							<div class="form-group">
								<label for=""><?=__('検索方法', 'uniquek');?></label>
								<div class="w_select_custom">
									<select class="form-control select_custom" name="st" id="">
										<option value="0"><?=__('プラン検索', 'uniquek');?></option>
										<option value="1"><?=__('部屋検索', 'uniquek');?></option>
										<option value="3"><?=__('料金検索', 'uniquek');?></option>
										<option value="4"><?=__('カレンダー検索', 'uniquek');?></option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 align-self-center">
							<button type="submit" class="btn btn_searchroom"><?=__('空室を検索', 'uniquek');?></button>
						</div>
					</div>
					<!-- 言語（日本語"ja-JP",英語"en-US",韓国語"ko-KR",中国語(簡体字)"zh-CN",中国語(繁体字)"zh-TW"）-->
					<input type="hidden" name="lang" value="<?=$langRegionStr;?>" >
					
				</form>
			</div>
		</div>
	</div>
</section>