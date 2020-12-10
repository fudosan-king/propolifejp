
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
        $('input[name="estate_type[]"]'),
        $('textarea[name="shiire_address"]'),
        $('input[name="first-name"]'),
        $('input[name="last-name"]'),

        $('input[name="company_name"]'),

        $('input[name="myouji"]'),
        $('input[name="namae"]'),

        $('select[name="pref"]'),

        $('input[name="phone-number"]'),

        $('input[name="email"]'),
        $('input[name="email-confirm"]'),

        $('input[name="secret-info"]'),

    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){
            if(!$(this).is(':checked')){
                $(this).closest('.checkbox').css('background-color', invalidColor);
                $(this).closest('.checkbox').css('padding', '2px 4px');
                isValid = false;

                if(elem.prop('name') == 'estate_type[]'){
                    $('.error-text.estate_type').html(ERROR_NO_INPUT);
                    $('.error-text.estate_type').css('display', 'block');
                }

                if(elem.prop('name') == 'secret-info'){
                    $('.error-text.secret-info').html(ERROR_NO_INPUT);
                    $('.error-text.secret-info').css('display', 'block');
                }

            }else{
                $(this).closest('.checkbox').css('background-color', 'initial');
                $(this).closest('.checkbox').css('padding', 'initial');
            }
        }else{
            if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
                elem.css('background-color', invalidColor);
                isValid = false;

                // Set error text
                if(elem.prop('name') == 'shiire_address'){
                    $('.error-text.shiire_address').html(ERROR_NO_INPUT);
                    $('.error-text.shiire_address').css('display', 'block');
                }

                if(elem.prop('name') == 'company_name'){
                    $('.error-text.company_name').html(ERROR_NO_INPUT);
                    $('.error-text.company_name').css('display', 'block');
                }

                
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

$(document).ready(function(){

    var reservation = typeof(queryString['reservation'])!=='undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material'])!=='undefined' ? queryString['material'] : null;



    // Bootstrap Datepicker configuration
    $("#building_age").datepicker( {
        language: 'ja',
        autoclose: true,
        format: "yyyy-mm",
        startView: "months", 
        minViewMode: "months"
    });
    // $('#iraijo-date').datepicker({
    //     language: 'ja',
    //     autoclose: true,
    //     todayHighlight: true,
    //     beforeShowDay: function (date){
    //     var toDay = (new Date());
    //     toDay.setDate(toDay.getDate() - 1);
    //     if (date.getTime() < toDay.getTime()){
    //                     return false;
    //             }
    //         // if (date.getMonth() == (new Date()).getMonth())
    //         //     switch (date.getDate()){
    //         //         case 4:
    //         //             return {
    //         //               tooltip: 'Example tooltip',
    //         //               classes: 'active'
    //         //             };
    //         //         case 8:
    //         //             return false;
    //         //         case 12:
    //         //             return "green";
    //         // }
    //     },
    //     // datesDisabled: ['09/06/2017', '09/21/2017']

    // });


    // CONDITION TO DISPLAY FORM TYPE
    $('.form-title').html('事業用不動産の買取り査定・お問い合わせ（法人専用）');

    // BUTTON SET AJAXZIP2ADDRESS
    $('.mt5').click(function(){

        $('input[name="post"]').keyup();
    });

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function(){

        if(invalidCheck()){

            $('.table_register').fadeOut();
            $('.table_confirm').fadeIn(function(){
                 $('body').scrollTop(0);
            });



            var cfrm_estate_type = '';
            $('input[name="estate_type[]"]:checked').each(function(){
                cfrm_estate_type += $(this).val() + '<br>';
            });
            $('.cfrm_estate_type').html(cfrm_estate_type);

            var cfrm_shiire_address = $('textarea[name="shiire_address"]').val();
            $('.cfrm_shiire_address').html(cfrm_shiire_address);

            var cfrm_room_sqm = $('input[name="room_sqm"]').val() + 'm2';
            $('.cfrm_room_sqm').html(cfrm_room_sqm);

            var cfrm_building_sqm = $('input[name="building_sqm"]').val() + 'm2';
            $('.cfrm_building_sqm').html(cfrm_building_sqm);

            var cfrm_lot_sqm = $('input[name="lot_sqm"]').val() + 'm2';
            $('.cfrm_lot_sqm').html(cfrm_lot_sqm);

            var cfrm_room_type = $('input[name="room_type"]').val();
            $('.cfrm_room_type').html(cfrm_room_type);

            var cfrm_building_age = $('input[name="building_age"]').val();
            $('.cfrm_building_age').html(cfrm_building_age);
            
            var cfrm_comment = $('textarea[name="comment"]').val();
            $('.cfrm_comment').html(cfrm_comment);

            var cfrm_name = $('input[name="last-name"]').val() + $('input[name="first-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_companyname = $('input[name="company_name"]').val();
            $('.cfrm_companyname').html(cfrm_companyname);

            var cfrm_address = $('input[name="post"]').val() + '<br>' +
                $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
                $('input[name="aza"]').val() + '<br>' + $('input[name="building_name"]').val();
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
        $('.table_register').fadeIn(function(){
            $('html').scrollTop(0);
        });
        $('.table_confirm').fadeOut();
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
        console.log(queryString['reservation']);
    });
});
