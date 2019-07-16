
//---------------------------------------------------

// KHANH NGUYEN PROCESS CODE

var ERROR_NO_INPUT = '値を入力してください';
var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

// GET QUERY STRING
function getQueryStr(){
    var res = {};
    var strSearch = window.location.search;
    strSearch = strSearch.substr(1, strSearch.length);
    var arrQParams = strSearch.split('&');

    $.each(arrQParams, function(index, el) {
        var tmp = el.split('=');
        res[tmp[0]] = tmp[1];
    });

    return res;
}
var queryString = getQueryStr();

// VALIDATE FORM DATA
function invalidCheck(){

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        
        $('select[name="shiire_pref"]'),

        $('input[name="first-name"]'),
        $('input[name="last-name"]'),

        $('input[name="myouji"]'),
        $('input[name="namae"]'),

        $('select[name="pref"]'),

        $('input[name="phone-number"]'),

        $('input[name="email"]'),
        $('input[name="email-confirm"]'),

    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){

            if ($(this).length > 0) {
                 if(!$(this).is(':checked')){
                    $('.error-text.shiire_latest').html(ERROR_NO_INPUT);
                    $('.error-text.shiire_latest').css('display', 'block');
                 }else{
                    $('.error-text.shiire_latest').css('display', 'none');
                 }
            }else{

                if(!$(this).is(':checked')){
                    $(this).closest('.checkbox').css('background-color', invalidColor);
                    $(this).closest('.checkbox').css('padding', '2px 4px');
                    isValid = false;

                }else{
                    $(this).closest('.checkbox').css('background-color', 'initial');
                    $(this).closest('.checkbox').css('padding', 'initial');
                }
            }
        }else{
            if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
                elem.css('background-color', invalidColor);
                isValid = false;

                // Set error text

                // ■査定対象物件の情報をご入力ください。
                if(elem.prop('name') == 'shiire_pref'){
                    $('.error-text.shiire_address').html(ERROR_NO_INPUT);
                    $('.error-text.shiire_address').css('display', 'block');
                }

                // ■連絡先をご入力ください
                if(elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name'){
                    $('.error-text.name').html(ERROR_NO_INPUT);
                    $('.error-text.name').css('display', 'block');
                }

                if(elem.prop('name') == 'myouji' || elem.prop('name') == 'namae'){
                    $('.error-text.phonetic').html(ERROR_NO_INPUT);
                    $('.error-text.phonetic').css('display', 'block');
                }

                if(elem.prop('name') == 'pref'){
                    $('.error-text.address').html(ERROR_NO_INPUT);
                    $('.error-text.address').css('display', 'block');
                }

                if(elem.prop('name') == 'phone-number'){
                    $('.error-text.phone-number').html(ERROR_NO_INPUT);
                    $('.error-text.phone-number').css('display', 'block');
                }

                if(elem.prop('name') == 'email' || elem.prop('name') == 'email-confirm'){
                    $('.error-text.email').html(ERROR_NO_INPUT);
                    $('.error-text.email').css('display', 'block');
                }


            }else{
                elem.css('background-color', 'initial');
            }
        }

    });

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    console.log(emailPattern.test($('input[name="email"]').val()));
    if (!emailPattern.test($('input[name="email"]').val())){
        $('input[name="email"]').css('background-color', invalidColor);
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_FORMAT);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email"]').css('background-color', 'initial');
    }


    if($('input[name="email-confirm"]').val() != $('input[name="email"]').val()){
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_NOTSAME);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email-confirm"]').css('background-color', 'initial');
    }

    return isValid;
}

function renderHTML(idElem){
    idElem = idElem || '';
    var arrControls = [];

    arrControls['madori'] = '\
        <div class="row">\
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">\
                間取り\
            </div>\
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">\
                <div class="form-inline">\
                    <select name="number_of_room" id="input" class="form-control">\
                        <option selected="selected" value="">部屋数</option>\
                        <option value="1">1</option>\
                        <option value="2">2</option>\
                        <option value="3">3</option>\
                        <option value="4">4</option>\
                        <option value="5">5</option>\
                        <option value="6">6</option>\
                        <option value="7">7</option>\
                        <option value="8">8</option>\
                        <option value="9">9</option>\
                    </select>\
                    <select name="room_type" id="input" class="form-control">\
                        <option selected="selected" value="">タイプ</option>\
                        <option value="ワンルーム">ワンルーム</option>\
                        <option value="Ｋ">Ｋ</option>\
                        <option value="ＤＫ">ＤＫ</option>\
                        <option value="ＬＫ">ＬＫ</option>\
                        <option value="ＬＤＫ">ＬＤＫ</option>\
                        <option value="ＳＫ">ＳＫ</option>\
                        <option value="ＳＤＫ">ＳＤＫ</option>\
                        <option value="ＳＬＫ">ＳＬＫ</option>\
                        <option value="ＳＬＤＫ">ＳＬＤＫ</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
    ';

    arrControls['etc_estate_type'] = '\
        <div class="row">\
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">\
                種類\
            </div>\
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">\
                <div class="form-inline">\
                    <select name="etc_estate_type" id="etc_estate_type" class="form-control">\
                        <option selected="selected" value="">--- 選択してください ---</option>\
                        <option value="ビル一棟">ビル一棟</option>\
                        <option value="ビル（区分）">ビル（区分）</option>\
                        <option value="アパート一棟">アパート一棟</option>\
                        <option value="マンション一棟">マンション一棟</option>\
                        <option value="店舗">店舗</option>\
                        <option value="倉庫">倉庫</option>\
                        <option value="その他">その他</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
    ';


    arrControls['shiire_exclusive_area'] = '\
        <div class="row">\
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">\
                専有面積\
            </div>\
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">\
                <div class="form-inline">\
                    <input type="text" name="occupied_area_text" id="occupied_area_text" class="form-control" value="" required="required" pattern="" title="">\
                    <div class="radio">\
                        <label>\
                            <input type="radio" name="occupied_area_unit[]" id="occupied_area_unit_1" value="m2" checked="checked">\
                            &nbsp; m<sup>2</sup>\
                        </label>\
                    </div>\
                    <div class="radio">\
                        <label>\
                            <input type="radio" name="occupied_area_unit[]" id="occupied_area_unit_2" value="坪">\
                            &nbsp; 坪\
                        </label>\
                    </div>\
                    <span>※おおよそで結構です。</span>\
                </div>\
            </div>\
        </div>\
    ';

    arrControls['shiire_sqm'] = '\
        <div class="row">\
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">\
                土地面積\
            </div>\
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">\
                <div class="form-inline">\
                    <input type="text" name="land_area_text" id="land_area_text" class="form-control" value="" required="required" pattern="" title="">\
                    <div class="radio">\
                        <label>\
                            <input type="radio" name="land_area_unit[]" id="land_area_unit_1" value="m2" checked="checked">\
                            &nbsp; m<sup>2</sup>\
                        </label>\
                    </div>\
                    <div class="radio">\
                        <label>\
                            <input type="radio" name="land_area_unit[]" id="land_area_unit_2" value="坪">\
                            &nbsp; 坪\
                        </label>\
                    </div>\
                    <span>※おおよそで結構です。</span>\
                </div>\
            </div>\
        </div>\
    ';

    arrControls['birthyear'] = '\
        <div class="row">\
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">\
                築年\
            </div>\
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">\
                <div class="form-inline">\
                    <select name="birthyear" id="birthyear" class="form-control">\
                        <option value="1925年（大正14年）以前">1925年（大正14年）以前</option>\
                        <option value="1926年（昭和元年）">1926年（昭和元年）</option>\
                        <option value="1927年（昭和2年）">1927年（昭和2年）</option>\
                        <option value="1928年（昭和3年）">1928年（昭和3年）</option>\
                        <option value="1929年（昭和4年）">1929年（昭和4年）</option>\
                        <option value="1930年（昭和5年）">1930年（昭和5年）</option>\
                        <option value="1931年（昭和6年）">1931年（昭和6年）</option>\
                        <option value="1932年（昭和7年）">1932年（昭和7年）</option>\
                        <option value="1933年（昭和8年）">1933年（昭和8年）</option>\
                        <option value="1934年（昭和9年）">1934年（昭和9年）</option>\
                        <option value="1935年（昭和10年）">1935年（昭和10年）</option>\
                        <option value="1936年（昭和11年）">1936年（昭和11年）</option>\
                        <option value="1937年（昭和12年）">1937年（昭和12年）</option>\
                        <option value="1938年（昭和13年）">1938年（昭和13年）</option>\
                        <option value="1939年（昭和14年）">1939年（昭和14年）</option>\
                        <option value="1940年（昭和15年）">1940年（昭和15年）</option>\
                        <option value="1941年（昭和16年）">1941年（昭和16年）</option>\
                        <option value="1942年（昭和17年）">1942年（昭和17年）</option>\
                        <option value="1943年（昭和18年）">1943年（昭和18年）</option>\
                        <option value="1944年（昭和19年）">1944年（昭和19年）</option>\
                        <option value="1945年（昭和20年）">1945年（昭和20年）</option>\
                        <option value="1946年（昭和21年）">1946年（昭和21年）</option>\
                        <option value="1947年（昭和22年）">1947年（昭和22年）</option>\
                        <option value="1948年（昭和23年）">1948年（昭和23年）</option>\
                        <option value="1949年（昭和24年）">1949年（昭和24年）</option>\
                        <option value="1950年（昭和25年）">1950年（昭和25年）</option>\
                        <option value="1951年（昭和26年）">1951年（昭和26年）</option>\
                        <option value="1952年（昭和27年）">1952年（昭和27年）</option>\
                        <option value="1953年（昭和28年）">1953年（昭和28年）</option>\
                        <option value="1954年（昭和29年）">1954年（昭和29年）</option>\
                        <option value="1955年（昭和30年）">1955年（昭和30年）</option>\
                        <option value="1956年（昭和31年）">1956年（昭和31年）</option>\
                        <option value="1957年（昭和32年）">1957年（昭和32年）</option>\
                        <option value="1958年（昭和33年）">1958年（昭和33年）</option>\
                        <option value="1959年（昭和34年）">1959年（昭和34年）</option>\
                        <option value="1960年（昭和35年）">1960年（昭和35年）</option>\
                        <option value="1961年（昭和36年）">1961年（昭和36年）</option>\
                        <option value="1962年（昭和37年）">1962年（昭和37年）</option>\
                        <option value="1963年（昭和38年）">1963年（昭和38年）</option>\
                        <option value="1964年（昭和39年）">1964年（昭和39年）</option>\
                        <option value="1965年（昭和40年）">1965年（昭和40年）</option>\
                        <option value="1966年（昭和41年）">1966年（昭和41年）</option>\
                        <option value="1967年（昭和42年）">1967年（昭和42年）</option>\
                        <option value="1968年（昭和43年）">1968年（昭和43年）</option>\
                        <option value="1969年（昭和44年）">1969年（昭和44年）</option>\
                        <option value="1970年（昭和45年）">1970年（昭和45年）</option>\
                        <option value="1971年（昭和46年）">1971年（昭和46年）</option>\
                        <option value="1972年（昭和47年）">1972年（昭和47年）</option>\
                        <option value="1973年（昭和48年）">1973年（昭和48年）</option>\
                        <option value="1974年（昭和49年）">1974年（昭和49年）</option>\
                        <option value="1975年（昭和50年）">1975年（昭和50年）</option>\
                        <option value="1976年（昭和51年）">1976年（昭和51年）</option>\
                        <option value="1977年（昭和52年）">1977年（昭和52年）</option>\
                        <option value="1978年（昭和53年）">1978年（昭和53年）</option>\
                        <option value="1979年（昭和54年）">1979年（昭和54年）</option>\
                        <option value="1980年（昭和55年）">1980年（昭和55年）</option>\
                        <option value="1981年（昭和56年）">1981年（昭和56年）</option>\
                        <option value="1982年（昭和57年）">1982年（昭和57年）</option>\
                        <option value="1983年（昭和58年）">1983年（昭和58年）</option>\
                        <option value="1984年（昭和59年）">1984年（昭和59年）</option>\
                        <option value="1985年（昭和60年）">1985年（昭和60年）</option>\
                        <option value="1986年（昭和61年）">1986年（昭和61年）</option>\
                        <option value="1987年（昭和62年）">1987年（昭和62年）</option>\
                        <option value="1988年（昭和63年）">1988年（昭和63年）</option>\
                        <option value="1989年（平成元年）">1989年（平成元年）</option>\
                        <option value="1990年（平成2年）">1990年（平成2年）</option>\
                        <option value="1991年（平成3年）">1991年（平成3年）</option>\
                        <option value="1992年（平成4年）">1992年（平成4年）</option>\
                        <option value="1993年（平成5年）">1993年（平成5年）</option>\
                        <option value="1994年（平成6年）">1994年（平成6年）</option>\
                        <option value="1995年（平成7年）">1995年（平成7年）</option>\
                        <option value="1996年（平成8年）">1996年（平成8年）</option>\
                        <option value="1997年（平成9年）">1997年（平成9年）</option>\
                        <option value="1998年（平成10年）">1998年（平成10年）</option>\
                        <option value="1999年（平成11年）">1999年（平成11年）</option>\
                        <option value="正確に覚えていない">正確に覚えていない</option>\
                        <option selected="selected" value="">--- 選択してください ---</option>\
                        <option value="2000年（平成12年）">2000年（平成12年）</option>\
                        <option value="2001年（平成13年）">2001年（平成13年）</option>\
                        <option value="2002年（平成14年）">2002年（平成14年）</option>\
                        <option value="2003年（平成15年）">2003年（平成15年）</option>\
                        <option value="2004年（平成16年）">2004年（平成16年）</option>\
                        <option value="2005年（平成17年）">2005年（平成17年）</option>\
                        <option value="2006年（平成18年）">2006年（平成18年）</option>\
                        <option value="2007年（平成19年）">2007年（平成19年）</option>\
                        <option value="2008年（平成20年）">2008年（平成20年）</option>\
                        <option value="2009年（平成21年）">2009年（平成21年）</option>\
                        <option value="2010年（平成22年）">2010年（平成22年）</option>\
                        <option value="2011年（平成23年）">2011年（平成23年）</option>\
                        <option value="2012年（平成24年）">2012年（平成24年）</option>\
                        <option value="2013年（平成25年）">2013年（平成25年）</option>\
                        <option value="2014年（平成26年）">2014年（平成26年）</option>\
                        <option value="2015年（平成27年）">2015年（平成27年）</option>\
                        <option value="2016年（平成28年）">2016年（平成28年）</option>\
                        <option value="2017年（平成29年）">2017年（平成29年）</option>\
                        <option value="2018年（平成30年）">2018年（平成30年）</option>\
                        <option value="2019年（平成31年）">2019年（平成31年）</option>\
                        <option value="正確に覚えていない">正確に覚えていない</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
    ';

    var contentHTML = '';
    
    switch(idElem) {
        case 'estate_type_1': {

            contentHTML = '\
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 groupCollapse" data-collapse="'+ idElem +'">\
                    <div class="card input">\
                        <div class="card-block">' + 
                            arrControls['madori'] +
                            arrControls['shiire_exclusive_area'] +
                            arrControls['birthyear'] +
                        '</div>\
                    </div>\
                </div>\
            ';

        }break;

        case 'estate_type_2': {

            contentHTML = '\
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 groupCollapse" data-collapse="'+ idElem +'">\
                    <div class="card input">\
                        <div class="card-block">' +
                            arrControls['madori'] +
                            arrControls['shiire_exclusive_area'] +
                            arrControls['shiire_sqm'] +
                            arrControls['birthyear'] +
                        '</div>\
                    </div>\
                </div>\
            ';

        }break;

        case 'estate_type_3': {
            
            contentHTML = '\
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 groupCollapse" data-collapse="'+ idElem +'">\
                    <div class="card input">\
                        <div class="card-block">' + 
                            arrControls['shiire_sqm'] +
                        '</div>\
                    </div>\
                </div>\
            ';

        }break;

        case 'estate_type_4': {
            
            contentHTML = '\
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 groupCollapse" data-collapse="${idElem}">\
                    <div class="card input">\
                        <div class="card-block">' +
                            arrControls['etc_estate_type'] +
                            arrControls['shiire_exclusive_area'] +
                            arrControls['shiire_sqm'] +
                            arrControls['birthyear'] +
                        '</div>\
                    </div>\
                </div>\
            ';

        }break;
    }

    return contentHTML;
}

function initDataFORM(){
    /* INIT FORM */

    if($('select[name="number_of_room"]').length){
        $('input[name="madori"]').val($('select[name="number_of_room"]').val() + $('select[name="room_type"]').val());
    }else{
        $('input[name="madori"]').val('');
    }
   
    // $('input[name="satei_type"]').val( $('input[name="assessment_type[]"]:checked').val());
    if($('input[name="occupied_area_text"]').length){
        $('input[name="shiire_exclusive_area"]').val($('input[name="occupied_area_text"]').val() + $('input[name="occupied_area_unit[]"]:checked').val());
    }else{
        $('input[name="shiire_exclusive_area"]').val('');
    }
    
    if($('input[name="land_area_text"]').length){
        $('input[name="shiire_sqm"]').val($('input[name="land_area_text"]').val() + $('input[name="land_area_unit[]"]:checked').val());
    }else{
        $('input[name="shiire_sqm"]').val('');
    }
    

    /* EVENT FORM */
     $('select[name="number_of_room"], select[name="room_type"]').on('change', function(){
        var number = $('select[name="number_of_room"]').val();
        var type = $('select[name="room_type"]').val();
        $('input[name="madori"]').val(number + type);
    })

    // $('input[name="assessment_type[]"]').on('change', function(){
    //     $('input[name="satei_type"]').val($(this).val());
    // });

    $('input[name="occupied_area_text"], input[name="occupied_area_unit[]"]').on('change keyup', function(){
        var txt = $('input[name="occupied_area_text"]').val();
        var unit = $('input[name="occupied_area_unit[]"]:checked').val();
        $('input[name="shiire_exclusive_area"]').val(txt + unit);
    })

    $('input[name="land_area_text"], input[name="land_area_unit[]"]').on('change keyup', function(){
        var txt = $('input[name="land_area_text"]').val();
        var unit = $('input[name="land_area_unit[]"]:checked').val();
        $('input[name="shiire_sqm"]').val(txt + unit);
    })
}

function setEventFORM(){
    initDataFORM();

    $('input[name="estate_type[]"]').on('change', function(){
        var idElemChecked = $(this).attr('id');

        $('.frm_contact .Rtable-cell .groupCollapse').remove();
        $('#'+idElemChecked).closest('.row').append(renderHTML(idElemChecked));
        
        initDataFORM();
        // $('div[data-collapse="' + idElemChecked + '"]').fadeIn();
    });

}

$(document).ready(function(){

    var reservation = typeof(queryString['reservation'])!=='undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material'])!=='undefined' ? queryString['material'] : null;
    
    $('#estate_type_1').closest('.row').append(renderHTML('estate_type_1'));

    setEventFORM();


    // CONDITION TO DISPLAY FORM TYPE
    $('.form-title').html('お問い合わせ');

    // BUTTON SET AJAXZIP2ADDRESS
    $('.mt5').click(function(){

        $('input[name="post"]').keyup();
    });

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function(){

        if(invalidCheck()){

            $('.defaultForm').fadeOut();
            $('.confirmForm').fadeIn(function(){
                 $('body').scrollTop(0);
            });

            // 査定方法・ご相談内容の種別
            var cfrm_satei_type = $('input[name="satei_type[]"]:checked').val();
            $('.cfrm_satei_type').html(cfrm_satei_type);

            // 査定対象物件の情報をご入力ください。
            
            var cfrm_estate_type = $('input[name="estate_type[]"]:checked').val() + '<br>';
            var idElemChecked = $('input[name="estate_type[]"]:checked').attr('id');
            var contentHTMLConfirm = '';
            switch(idElemChecked) {
                case 'estate_type_1': {

                    contentHTMLConfirm = $('input[name="madori"]').val() +
                    '<br>' + $('input[name="shiire_exclusive_area"]').val() +
                    '<br>' + $('select[name="birthyear"]').val();

                }break;

                case 'estate_type_2': {

                    contentHTMLConfirm = $('input[name="madori"]').val() +
                    '<br>' + $('input[name="shiire_exclusive_area"]').val() +
                    '<br>' + $('input[name="shiire_sqm"]').val() +
                    '<br>' + $('select[name="birthyear"]').val();

                }break;

                case 'estate_type_3': {

                    contentHTMLConfirm = $('input[name="shiire_sqm"]').val();

                }break;

                case 'estate_type_4': {

                    contentHTMLConfirm = $('select[name="etc_estate_type"]').val() +
                    '<br>' + $('input[name="shiire_exclusive_area"]').val() +
                    '<br>' + $('input[name="shiire_sqm"]').val() +
                    '<br>' + $('select[name="birthyear"]').val();

                }break;
            }
            $('.cfrm_estate_type').html(cfrm_estate_type + contentHTMLConfirm);

            var cfrm_shiire_address = $('input[name="shiire_post"]').val() + '<br>' +
                $('select[name="shiire_pref"]').val() + '<br>' + $('input[name="shiire_city"]').val() + '<br>' +
                $('input[name="shiire_aza"]').val() + '<br>' + $('input[name="shiire_building_roomnumber"]').val();
            $('.cfrm_shiire_address').html(cfrm_shiire_address);

            var cfrm_comments = $('textarea[name="free_detail_contact"]').val();
            $('.cfrm_comments').html(cfrm_comments);

            
            // 連絡先をご入力ください
            var cfrm_name = $('input[name="last-name"]').val() + $('input[name="first-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_address = $('input[name="post"]').val() + '<br>' +
                $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
                $('input[name="aza"]').val() + '<br>' + $('input[name="building-roomnumber"]').val();
            $('.cfrm_address').html(cfrm_address);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);


            

            // dataLayer.push({'event': 'inquiry-confirm-nihonbashi-material'});

        }else{
            $('html').animate({scrollTop: 0}, 1000, function(){});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function(){
        $('.defaultForm').fadeIn(function(){
            $('html').scrollTop(0);
        });
        $('.confirmForm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function(){
        if(invalidCheck()){

            // RE-SET VALUE ON FINAL TURN
            $('form input[type="text"]').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            $('form textarea').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            $('.frm_contact').submit();
        }else{
            $('#goBack').click();
        }
    });

    // BUTTON TEST ACTION
    $('#goTest').click(function(){
        
    });
});
