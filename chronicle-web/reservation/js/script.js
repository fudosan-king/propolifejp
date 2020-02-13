/* Author: Khanh Nguyen PPL */
/* Description: Process estimation and contact form */
/* Published: 2020 */

$(function() {

    /* CONTACT PART */

    var SHOWROOM_LIST= [
        '表参道本店', '東京日本橋', '吉祥寺', '埼玉大宮', '横浜西口', 
        '名古屋伏見', '京都四条', '大阪梅田', '神戸元町', '福岡天神'
    ]

    $.each(SHOWROOM_LIST, function(index, el) {
        $('#ishow_room').append('<option value="' + el + '">' + el + '</option>');
    });

    for(var i = 10; i<19; i++){
        var strTime = i + ':00';
        $('#ivisit_hour').append('<option value="' + strTime + '">' + strTime + '</option>');
    }

    $('#ivisit_date').datepicker({
        format: 'yyyy/mm/dd',
        language: 'ja',
        autoclose: true,
        // defaultDate: moment('2020/02/22'),
        // setDate: availableDate,
        todayHighlight: true,
        // startDate: '+31d',
        beforeShowDay: function(date) {
            var toDay = (new Date());
            toDay.setDate(toDay.getDate() - 1);
            if (date.getTime() < toDay.getTime()) {
                return false;
            }

            if (date.getDay() == 2 || date.getDay() == 3) {
                return false;
            }
        },
    });

    $('.visit_date_wrapper .svg-inline--fa').click(function(event) {
        /* Act on the event */
        $('#ivisit_date').focus();
    });

    var ERROR_NO_INPUT = '値を入力してください';
    var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
    var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

    function invalidCheck() {

        var isValid = true;
        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        // EMPTY CHECK

        var elemsChk = [
            $('input[name="last_name"]'),
            $('input[name="first_name"]'),

            $('input[name="category_contact[]"]'),

            $('input[name="phone_number"]'),

            $('input[name="email"]'),

            $('input[name="secret_info"]'),


        ];

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'checkbox': {
                        if (!$(this).is(':checked')) {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', '#ff0000');
                            isValid = false;
                        } else {
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', 'initial');
                        }
                    }break;
                    case 'text': {
                        if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                                'background-color': invalidBackgroundColor,
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#ff0000');
                            isValid = false;
                        }else{
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                                'background-color': 'initial',
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#a40000');
                        }
                    }break;
                }
            }

        });

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').css({
                'box-shadow': invalidBoxShadow,
                'border-color': invalidBorderColor,
            });

            isValid = false;

            $('.require-flag.email').css('background-color', '#ff0000');

        } else {
            $('input[name="email"]').css({
                'box-shadow': 'initial',
                'border-color': 'initial',
            });
            $('.require-flag.email').css('background-color', '#a40000');
        }

        if(!isValid){
            $('html, body').animate({
                scrollTop: $(".frm_consult_shoroom").offset().top
            }, 700);
        }

        return isValid;
    }

    // BUTTON SET CONFIRM ACTION
    $('#ibtnConfirm').click(function(event) {
        event.preventDefault();

        if (invalidCheck()) {

            $('.data-input').fadeOut();
            $('.data-confirm').fadeIn();

            var html_category_contact = '';
            $.each($('input[name="category_contact[]"]:checked'), function(index, el) {
                html_category_contact += $(el).val() + '<br>';
            });
            $('.cfrm_category_contact').html(html_category_contact);

            var cfrm_name = $('input[name="first_name"]').val() + $('input[name="last_name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_phonenumber = $('input[name="phone_number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_location = $('select[name="show_room"]').val() + ' ' + $('input[name="visit_date"]').val() + ' ' + $('select[name="visit_hour"]').val();
            $('.cfrm_location').html(cfrm_location);

            var cfrm_comments = $('textarea[name="free_detail_contact"]').val();
            $('.cfrm_comments').html(cfrm_comments);


        } else {
            // $('html').animate({
            //     scrollTop: $('.frm_consult_shoroom').offset().top
            // }, 1000, function() {});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function() {
        $('.data-input').fadeIn(function() {
            $('html').scrollTop($('.frm_consult_shoroom').offset().top);
        });
        $('.data-confirm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function() {
        if (invalidCheck()) {
            $('.frm_consult_shoroom').submit();
        } else {
            $('#goBack').click();
        }
    });

    
});

function demo(){
    var collectInputText = $('input[type="text"]');
    $.each(collectInputText, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    var collectTextArea = $('textarea');
    $.each(collectTextArea, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    $('input[name="email"]').val('khanh@propolife.co.jp');
    
    $('#ishow_room').val('東京日本橋');
    $('#ivisit_hour').val('10:00');

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#ivisit_date').datepicker('setDate', today);
}