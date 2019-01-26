<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/jquery/css/smoothness/jquery-ui-1.10.4.custom.css" />
<!-- <script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/jquery/js/jquery-1.10.2.js"></script> -->
<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/jquery/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/jquery/js/jquery.ui.datepicker-ja.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/jquery/js/gcalendar-holidays.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/booking/js/smart_form.js"></script>
<style>
  .ui-datepicker {
      font-size: 70%;
  }
</style>

<?php 
    $currentLang = qtrans_getLanguage();
    $langMap = array(
        "ja" => "ja-JP",
        "en" => "en-US",
        "zh" => "zh-CN",
        "tw" => "zh-TW"
    );
    $dataTranslate = array(
        "ja" => '{ "optionYM": {"年 ":"年 ", "月":"月"}, "optionDay": {"日":"日"} }',
        "en" => '{ "optionYM": {"年 ":"/", "月":""}, "optionDay": {"日":" days"} }',
        "zh" => '{ "optionYM": {"年 ":"年 ", "月":"月"}, "optionDay": {"日":"日"} }',
        "tw" => '{ "optionYM": {"年 ":"年 ", "月":"月"}, "optionDay": {"日":"日"} }',
    );
?>

<script type="text/javascript">
    $(document).ready(function() {
        function translateSmartForm($lang="ja", $dataMap = null){
           
            translateField($('#dt_yyyymm option'), $dataMap.optionYM);
            translateField($('#dt_dd option'), $dataMap.optionDay);
            translateField($('#dt_yyyymm_to option'), $dataMap.optionYM);
            translateField($('#dt_dd_to option'), $dataMap.optionDay);
        }

        function translateField(elem, fieldMap){
            elem.each(function(i, e){
                var $keys = Object.keys(fieldMap);
                $keys.forEach(function(val){
                    e.text = e.text.replace(val, fieldMap[val]);
                });
            });
        }
        translateSmartForm('<?php echo $currentLang; ?>', $dataMap = <?php echo $dataTranslate[$currentLang]; ?>);
    });
</script>

<div class="w_booking">
    <a href="#" class="btn btnBooking"><span><?php echo __('Book now', 'prostyleryokan'); ?></span> <i class="i_chevronRight"></i></a>
    <div class="box_booking">
        <form method="get" action="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/htl_redirect_ser.aspx" id="form1" name="form1" target="smart()" onSubmit="return send()" class="frm_booking">
            <!-- 言語（日本語"ja-JP",英語"en-US",韓国語"ko-KR",中国語(簡体字)"zh-CN",中国語(繁体字)"zh-TW"）-->
            <input type="hidden" value="<?php echo $langMap[$currentLang]; ?>" name="lang">
            <input type="hidden" name="std" id="std" value="" />

            <!-- 単体ホテルの場合 -->
            <input type="hidden" value="1" name="hi_id">

            <div class="row box_borb">
                <div class="col col-12 col-md-9 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 form-group">
                            <label class="date_stay" for=""><?php echo __('ご宿泊日', 'prostyleryokan'); ?></label>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-5 form-group">
                            <script type="text/javascript">date_dropdown_from_make();</script>
                            <input type="text" id="dp_from" name="dp_from" style="display:none;"/>
                            <span class="text_s"><?php echo __('から', 'prostyleryokan'); ?></span>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-2 form-group">
                            <select id="le" name="le" size="1">
                                <option value="1" selected="selected">1<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="2">2<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="3">3<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="4">4<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="5">5<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="6">6<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="7">7<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="8">8<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="9">9<?php echo __('泊', 'prostyleryokan'); ?></option>
                                <option value="10">10<?php echo __('泊', 'prostyleryokan'); ?></option>
                            </select>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-5 form-group">
                            <script type="text/javascript">date_dropdown_to_make();</script>
                            <input type="text" id="dp_to" name="dp_to" style="display:none;"/>
                            <span class="text_s"><?php echo __('まで', 'prostyleryokan'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-3 d-none d-sm-block ">
                     <input type="submit" name="Search_A" alt="<?php echo __('検索', 'prostyleryokan'); ?>" class="rsvbtn btn btn_checkAvailability" value="<?php echo __('空室検索', 'prostyleryokan'); ?>" onclick="document.getElementById('std').value = '';">
                </div>
            </div>


            

            <div class="row">
                <div class="col col-12 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 col-sm-6">
                            <div class="num_people">
                                <label class="d-sm-inline-block" for=""><?php echo __('人数', 'prostyleryokan'); ?></label>
                                <select name="mc" size="1">
                                    <option value="1">1<?php echo __('名', 'prostyleryokan'); ?></option>
                                    <option selected="selected" value="2">2<?php echo __('名', 'prostyleryokan'); ?></option>
                                    <option value="3">3<?php echo __('名', 'prostyleryokan'); ?></option>
                                    <option value="4">4<?php echo __('名', 'prostyleryokan'); ?></option>
                                </select>
                                <span class="text_s">/<?php echo __('室', 'prostyleryokan'); ?></span>
                            </div>
                        </div>
                        <div class="col col-12 col-sm-6">
                            <div class="row box_option">
                                <div class="col co-3 col-sm-4">
                                    <label class="d-sm-inline-block cus_label" for=""><?php echo __('検索方法', 'prostyleryokan'); ?></label>
                                </div>
                                <div class="col col-9 col-sm-8">
                                    <div class="w_radio">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="0" name="st" checked="checked"><?php echo __('宿泊プラン別', 'prostyleryokan'); ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="1" name="st"><?php echo __('部屋タイプ別', 'prostyleryokan'); ?>  
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="mb-0">
                                               <input type="radio" value="3" name="st"><?php echo __('価格順に検索', 'prostyleryokan'); ?> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>          
                </div>
                <div class="col col-12 col-sm-3 d-block d-sm-none">
                     <input type="submit" name="Search_A" alt="<?php echo __('検索', 'prostyleryokan'); ?>" class="rsvbtn btn btn_checkAvailability" value="<?php echo __('空室検索', 'prostyleryokan'); ?>" onclick="document.getElementById('std').value = '';">
                </div>
                <div class="col col-12 col-sm-3">
                    <a class="btn btn_comfirm" href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/cnf_rsv_ent.aspx?lang=ja-JP&hi_id=1" target="smart"><?php echo __('予約確認・変更', 'prostyleryokan'); ?><br><?php echo __('キャンセル', 'prostyleryokan'); ?></a>
                </div>
            </div>
        </form>

        <div class="booking-transporter" onclick="window.open('https://www.tabipon.jp/dp/htl/AD025.html', '_blank');">
            <img src="<?php echo TEMPLATE_DIR; ?>/images/1x/booking-icon-airplan.png" alt="" class="img-fluid">
            <p><?php echo __('航空券、高速バス付きプランはこちら', 'prostyleryokan'); ?></p>
            <img src="<?php echo TEMPLATE_DIR; ?>/images/1x/booking-icon-bus.png" alt="" class="img-fluid">
        </div>

    </div>
</div>