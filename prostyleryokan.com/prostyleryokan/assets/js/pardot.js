$(function() {

    demo = () => {
        $('input[name="family_name"]').val('Nguyen');
        $('input[name="first_name"]').val('Khanh');
        $('input[name="family_name_kana"]').val('グエン');
        $('input[name="first_name_kana"]').val('カン');

        $('input[name="company_name"]').val('Propolife Vietnam');
        $('input[name="phone_number"]').val('+84 97 422 6440');

        $('input[name="email"]').val('khanh@propolife.co.jp');
        $('input[name="re_email"]').val('khanh@propolife.co.jp');
    }

    function invalidCheck() {

        var isValid = true;

        // EMPTY CHECK

        var elemsChk = [
            $('input[name="family_name"]'),
            $('input[name="first_name"]'),

            $('input[name="family_name_kana"]'),
            $('input[name="first_name_kana"]'),

            $('input[name="company_name"]'),
            $('input[name="phone_number"]'),

            $('input[name="email"]'),
            $('input[name="re_email"]'),

        ];

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'select-one': {
                    }break;
                    case 'email':
                    case 'text': {
                        if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {
                            elem.addClass('validate-error');
                            isValid = false;
                        }else{
                            elem.removeClass('validate-error');
                        }
                    }break;
                }
            }

        });

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').addClass('validate-error');
            isValid = false;
        } else {
            $('input[name="email"]').removeClass('validate-error');
        }

        if (typeof($('input[name="email"]').val()) !== 'undefined' && $('input[name="email"]').val() != "" && $('input[name="email"]').val() != "null") {
            if($('input[name="email"]').val() !== $('input[name="re_email"]').val()){
                $('input[name="email"]').addClass('validate-error');
                $('input[name="re_email"]').addClass('validate-error');
                isValid = false;
            } else {
                $('input[name="email"]').removeClass('validate-error');
                $('input[name="re_email"]').removeClass('validate-error');
            }
        }

        if(!isValid){
            $('html, body').animate({
                scrollTop: $($('.validate-error')[0]).offset().top - 200
            }, 300);
        }

        return isValid;
    }

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function(event) {
        event.preventDefault();

        if (invalidCheck()) {
            $('.defaultForm').fadeOut();
            $('.confirmForm').fadeIn();
            $('.cfr_name').html($('input[name="family_name"]').val() + ' ' + $('input[name="first_name"]').val());
            $('.cfr_name_kana').html($('input[name="family_name_kana"]').val() + $('input[name="first_name_kana"]').val());
            $('.cfr_company_name').html($('input[name="company_name"]').val());
            $('.cfr_phone_number').html($('input[name="phone_number"]').val());
            $('.cfr_email').html($('input[name="email"]').val());
        }
    });

    $('#goBack').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.defaultForm').fadeIn();
        $('.confirmForm').hide();
    });

    $('#goSubmit').click(function(event) {
        /* Act on the event */
        if(!checkValidate()){
            return false;
        }
    });

});