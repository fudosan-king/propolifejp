
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

        $('input[name="estate_name"]'),

        $('input[name="first-name"]'),
        $('input[name="last-name"]'),   

        $('select[name="brand_type"]'),
        $('select[name="age"]'),
        $('select[name="number_people"]'),

        $('input[name="pet[]"]'),

        $('select[name="pref"]'),
        $('input[name="city"]'),
        $('input[name="aza"]'),

        $('input[name="phone-number"]'),
        $('input[name="email"]'),
        $('input[name="email-confirm"]'),

        $('select[name="job_type"]'),
        $('select[name="income_1"]'),
        $('select[name="move_in_date"]'),

        $('input[name="madori[]"]'),

        $('select[name="sqm"]'),
        $('select[name="budget"]'),     

        $('input[name="secret-info"]'),

    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){
            if(!$(this).is(':checked')){
                $(this).closest('.checkbox').css('background-color', invalidColor);
                $(this).closest('.checkbox').css('padding', '2px 4px');
                isValid = false;

                if(elem.prop('name') == 'pet[]'){
                    $('.error-text.pet').html(ERROR_NO_INPUT);
                    $('.error-text.pet').css('display', 'block');
                }

                if(elem.prop('name') == 'madori[]'){
                    $('.error-text.madori').html(ERROR_NO_INPUT);
                    $('.error-text.madori').css('display', 'block');
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

                if(elem.prop('name') == 'estate_name'){
                    $('.error-text.estate_name').html(ERROR_NO_INPUT);
                    $('.error-text.estate_name').css('display', 'block');
                }

                if(elem.prop('name') == 'brand_type'){
                    $('.error-text.brand_type').html(ERROR_NO_INPUT);
                    $('.error-text.brand_type').css('display', 'block');
                }

                if(elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name'){
                    $('.error-text.name').html(ERROR_NO_INPUT);
                    $('.error-text.name').css('display', 'block');
                }

                if(elem.prop('name') == 'age'){
                    $('.error-text.age').html(ERROR_NO_INPUT);
                    $('.error-text.age').css('display', 'block');
                }

                if(elem.prop('name') == 'number_people'){
                    $('.error-text.number_people').html(ERROR_NO_INPUT);
                    $('.error-text.number_people').css('display', 'block');
                }


                if(elem.prop('name') == 'pref' || elem.prop('name') == 'city' || elem.prop('name') == 'aza'){
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

                if(elem.prop('name') == 'job_type'){
                    $('.error-text.job_type span').html(ERROR_NO_INPUT);
                    $('.error-text.job_type').css('display', 'block');
                }

                if(elem.prop('name') == 'income_1'){
                    $('.error-text.income_1 span').html(ERROR_NO_INPUT);
                    $('.error-text.income_1').css('display', 'block');
                }

                if(elem.prop('name') == 'move_in_date'){
                    $('.error-text.move_in_date').html(ERROR_NO_INPUT);
                    $('.error-text.move_in_date').css('display', 'block');
                }

                if(elem.prop('name') == 'sqm'){
                    $('.error-text.sqm').html(ERROR_NO_INPUT);
                    $('.error-text.sqm').css('display', 'block');
                }

                if(elem.prop('name') == 'budget'){
                    $('.error-text.budget').html(ERROR_NO_INPUT);
                    $('.error-text.budget').css('display', 'block');
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
    $('.form-title').html('お客様アンケート');

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

            var cfrm_estate_name = $('input[name="estate_name"]').val();
            $('.cfrm_estate_name').html(cfrm_estate_name);
            
            var cfrm_brand_type =  $('select[name="brand_type"]').val();
            $('.cfrm_brand_type').html(cfrm_brand_type);

            var cfrm_name = $('input[name="last-name"]').val() + $('input[name="first-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_age =  $('select[name="age"]').val();
            $('.cfrm_age').html(cfrm_age);

            var cfrm_number_people =  $('select[name="number_people"]').val();
            $('.cfrm_number_people').html(cfrm_number_people);

            var cfrm_pet =  $('input[name="pet[]"]:checked').val();
            $('.cfrm_pet').html(cfrm_pet);

            var cfrm_address = $('input[name="post"]').val() + '<br>' +
                $('select[name="pref"]').val() + '<br>' + $('input[name="city"]').val() + '<br>' +
                $('input[name="aza"]').val() + '<br>' + $('input[name="building_name"]').val();
            $('.cfrm_address').html(cfrm_address);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_which_media = '';
            $('input[name="which_media[]"]:checked').each(function(){
                cfrm_which_media += $(this).val() + '<br>';
            });
            $('.cfrm_which_media').html(cfrm_which_media);


            var cfrm_job = `職種: ${$('select[name="job_type"]').val()}、業種: ${$('select[name="job_industry"]').val()}` ;
            $('.cfrm_job').html(cfrm_job);


            var cfrm_company = $('input[name="company"]').val();
            $('.cfrm_company').html(cfrm_company);

            var cfrm_length_service = `約${$('input[name="length_service_year"]').val()}年${$('input[name="length_service_month"]').val()}ヶ月` ;
            $('.cfrm_length_service').html(cfrm_length_service);

            var cfrm_business_location = $('input[name="business_location"]').val();
            $('.cfrm_business_location').html(cfrm_business_location);

            var cfrm_business_station = $('input[name="business_station"]').val();
            $('.cfrm_business_station').html(cfrm_business_station);

            var cfrm_income = `世帯主：${$('select[name="income_1"]').val()} 、配偶者${$('select[name="income_2"]').val()}` ;
            $('.cfrm_income').html(cfrm_income);

            var cfrm_move_in_date = $('select[name="move_in_date"]').val();
            $('.cfrm_move_in_date').html(cfrm_move_in_date);

            var cfrm_expected_area1 = $('input[name="expected_area1"]').val();
            $('.cfrm_expected_area1').html(cfrm_expected_area1);

            var cfrm_expected_area2 = $('input[name="expected_area2"]').val();
            $('.cfrm_expected_area2').html(cfrm_expected_area2);

            var cfrm_railway_station1 = `${$('input[name="RwLine1"]').val()}線${$('input[name="RwStation1"]').val()}駅` ;
            $('.cfrm_railway_station1').html(cfrm_railway_station1);

            var cfrm_railway_station2 = `${$('input[name="RwLine2"]').val()}線${$('input[name="RwStation2"]').val()}駅` ;
            $('.cfrm_railway_station2').html(cfrm_railway_station2);

            var cfrm_madori = '';
            $('input[name="madori[]"]:checked').each(function(){
                cfrm_madori += $(this).val() + '<br>';
            });
            $('.cfrm_madori').html(cfrm_madori);

            var cfrm_sqm = $('select[name="sqm"]').val();
            $('.cfrm_sqm').html(cfrm_sqm);

            var cfrm_carpark = $('input[name="carpark[]"]:checked').val();
            $('.cfrm_carpark').html(cfrm_carpark);

            var cfrm_bike = $('input[name="bike[]"]:checked').val();
            $('.cfrm_bike').html(cfrm_bike);

            var cfrm_budget = $('select[name="budget"]').val();
            $('.cfrm_budget').html(cfrm_budget);

            var cfrm_resources = $('input[name="resources[]"]:checked').val();
            $('.cfrm_resources').html(cfrm_resources);

            var cfrm_payment_amount = `月々${$('input[name="payment_everymonth"]').val()}万円以内、ボーナス支払い希望：${$('input[name="bonus_request[]"]:checked').val()}` ;
            $('.cfrm_payment_amount').html(cfrm_payment_amount);

            var cfrm_priority_matter = `1：${$('select[name="priority_1"]').val()}, 2：${$('select[name="priority_2"]').val()}, 3：${$('select[name="priority_3"]').val()}` ;
            $('.cfrm_priority_matter').html(cfrm_priority_matter);

            var cfrm_oppotunity_examination = `1：${$('select[name="oppotunity_1"]').val()}, 2：${$('select[name="oppotunity_2"]').val()}, 3：${$('select[name="oppotunity_3"]').val()}` ;
            $('.cfrm_oppotunity_examination').html(cfrm_oppotunity_examination);

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
