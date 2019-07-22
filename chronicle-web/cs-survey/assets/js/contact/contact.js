
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

    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){
            if(!$(this).is(':checked')){
                $(this).closest('.checkbox').css('background-color', invalidColor);
                $(this).closest('.checkbox').css('padding', '2px 4px');
                isValid = false;



            }else{
                $(this).closest('.checkbox').css('background-color', 'initial');
                $(this).closest('.checkbox').css('padding', 'initial');
            }
        }else{
            if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
                elem.css('background-color', invalidColor);
                isValid = false;

                // Set error text
                
                

            }else{
                elem.css('background-color', 'initial');
            }
        }

    });

    // // EMAIL CHECK
    // var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    // if (!emailPattern.test($('input[name="email"]').val())){
    //     $('input[name="email"]').css('background-color', invalidColor);
    //     $('input[name="email-confirm"]').css('background-color', invalidColor);
    //     isValid = false;

    //     $('.error-text.email').html(ERROR_MAIL_FORMAT);
    //     $('.error-text.email').css('display', 'block');

    // }else{
    //     $('input[name="email"]').css('background-color', 'initial');
    // }


    // if($('input[name="email-confirm"]').val() != $('input[name="email"]').val()){
    //     $('input[name="email-confirm"]').css('background-color', invalidColor);
    //     isValid = false;

    //     $('.error-text.email').html(ERROR_MAIL_NOTSAME);
    //     $('.error-text.email').css('display', 'block');

    // }else{
    //     $('input[name="email-confirm"]').css('background-color', 'initial');
    // }

    return isValid;
}

$(document).ready(function(){

    var reservation = typeof(queryString['reservation'])!=='undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material'])!=='undefined' ? queryString['material'] : null;



    // Bootstrap Datepicker configuration
    // $("#building_age").datepicker( {
    //     language: 'ja',
    //     autoclose: true,
    //     format: "yyyy-mm",
    //     startView: "months", 
    //     minViewMode: "months"
    // });
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
    $('.form-title').html('お客様満足度アンケート');

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


            var cfrm_question1 = $('input[name="question1[]"]:checked').val();
            $('.cfrm_question1').html(cfrm_question1);

            var cfrm_question2 = $('input[name="question2[]"]:checked').val();
            $('.cfrm_question2').html(cfrm_question2);

            var cfrm_question3 = $('input[name="question3[]"]:checked').val();
            $('.cfrm_question3').html(cfrm_question3);

            var cfrm_question4 = $('input[name="question4[]"]:checked').val();
            $('.cfrm_question4').html(cfrm_question4);

            var cfrm_question5 = $('input[name="question5[]"]:checked').val();
            $('.cfrm_question5').html(cfrm_question5);

            var cfrm_question6a = $('input[name="question6a[]"]:checked').val();
            $('.cfrm_question6a').html(cfrm_question6a);

            var cfrm_question6b = $('textarea[name="question6b"]').val();
            $('.cfrm_question6b').html(cfrm_question6b);

            var cfrm_question7a = $('input[name="question7a[]"]:checked').val();
            $('.cfrm_question7a').html(cfrm_question7a);

            var cfrm_question7b = '';
            $('input[name="question7b[]"]:checked').each(function(){
                cfrm_question7b += $(this).val() + '<br>';
            });
            $('.cfrm_question7b').html(cfrm_question7b);

            var cfrm_question7c = $('textarea[name="question7c"]').val();
            $('.cfrm_question7c').html(cfrm_question7c);

            var cfrm_mailmagazine = $('input[name="mailmagazine[]"]:checked').val();
            $('.cfrm_mailmagazine').html(cfrm_mailmagazine);
            

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

            var job = `職種: ${$('select[name="job_type"]').val()}、業種: ${$('select[name="job_industry"]').val()}` ;
            $('input[name="job"]').val(job);

            var length_service = `約${$('input[name="length_service_year"]').val()}年${$('input[name="length_service_month"]').val()}ヶ月` ;
            $('input[name="length_service"]').val(length_service);

            var income = `世帯主：${$('select[name="income_1"]').val()} 、配偶者${$('select[name="income_2"]').val()}` ;
            $('input[name="income"]').val(income);

            var railway_station1 = `${$('input[name="RwLine1"]').val()}線${$('input[name="RwStation1"]').val()}駅` ;
            $('input[name="railway_station1"]').val(railway_station1);

            var railway_station2 = `${$('input[name="RwLine2"]').val()}線${$('input[name="RwStation2"]').val()}駅` ;
            $('input[name="railway_station2"]').val(railway_station2);

            var payment_amount = `月々${$('input[name="payment_everymonth"]').val()}万円以内、ボーナス支払い希望：${$('input[name="bonus_request[]"]:checked').val()}` ;
            $('input[name="payment_amount"]').val(payment_amount);

            var priority_matter = `1：${$('select[name="priority_1"]').val()}, 2：${$('select[name="priority_2"]').val()}, 3：${$('select[name="priority_3"]').val()}` ;
            $('input[name="priority_matter"]').val(priority_matter);

            var oppotunity_examination = `1：${$('select[name="oppotunity_1"]').val()}, 2：${$('select[name="oppotunity_2"]').val()}, 3：${$('select[name="oppotunity_3"]').val()}` ;
            $('input[name="oppotunity_examination"]').val(oppotunity_examination);

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
