
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
        $('input[name="shiire_sqm"]'),
        $('input[name="shiire_latest[]"]'),

        $('input[name="first-name"]'),
        $('input[name="last-name"]'),

        $('input[name="myouji"]'),
        $('input[name="namae"]'),

        $('select[name="pref"]'),

        $('input[name="phone-number"]'),

        $('input[name="email"]'),
        $('input[name="email-confirm"]'),

        $('textarea[name="free_detail_contact"]'),

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

                // ■用地情報をご入力ください
                if(elem.prop('name') == 'shiire_pref'){
                    $('.error-text.shiire_address').html(ERROR_NO_INPUT);
                    $('.error-text.shiire_address').css('display', 'block');
                }

                if(elem.prop('name') == 'shiire_sqm'){
                    $('.error-text.shiire_sqm').html(ERROR_NO_INPUT);
                    $('.error-text.shiire_sqm').css('display', 'block');
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


                if(elem.prop('name') == 'free_detail_contact'){
                    $('.error-text.iken').html(ERROR_NO_INPUT);
                    $('.error-text.iken').css('display', 'block');
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

            var cfrm_shiire_address = $('input[name="shiire_post"]').val() + '<br>' +
                $('select[name="shiire_pref"]').val() + '<br>' + $('input[name="shiire_city"]').val() + '<br>' +
                $('input[name="shiire_aza"]').val() + '<br>' + $('input[name="shiire_building_roomnumber"]').val();
            $('.cfrm_shiire_address').html(cfrm_shiire_address);

             var cfrm_shiire_sqm = $('input[name="shiire_sqm"]').val();
            $('.cfrm_shiire_sqm').html(cfrm_shiire_sqm);

            var cfrm_shiire_latest = "";
            $.each($('input[name="shiire_latest[]"]:checked'), function(i, e){
                cfrm_shiire_latest = (cfrm_shiire_latest == "") ? $(e).val() : cfrm_shiire_latest + '<br>' +  $(e).val();
            });
            $('.cfrm_shiire_latest').html(cfrm_shiire_latest);


            var cfrm_name = $('input[name="last-name"]').val() + $('input[name="first-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_companyname = $('input[name="company_name"]').val();
            $('.cfrm_companyname').html(cfrm_companyname);

            var cfrm_address = $('input[name="post"]').val() + '<br>' +
                $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
                $('input[name="aza"]').val() + '<br>' + $('input[name="building-roomnumber"]').val();
            $('.cfrm_address').html(cfrm_address);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);


            var cfrm_comments = $('textarea[name="free_detail_contact"]').val();
            $('.cfrm_comments').html(cfrm_comments);

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
