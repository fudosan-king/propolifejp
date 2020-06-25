$(function() {

    $('input[name="reason[]"]').change(function(event) {
        /* Act on the event */
        $('textarea[name="content_inquiry"]').val('');
        if($(this).val() == 'その他'){
            $('textarea[name="content_inquiry"]').prop('readonly', false);
        }else{
            $('textarea[name="content_inquiry"]').prop('readonly', true);
        }
    });

    demo = () => {
        $('input[name="suspension_type[]"]')[1].checked = true;
        $('input[name="family_name"]').val('Nguyen');
        $('input[name="first_name"]').val('Khanh');
        $('input[name="family_name_kana"]').val('グエン');
        $('input[name="first_name_kana"]').val('カン');

        $('input[name="post_1"]').val('102');
        $('input[name="post_2"]').val('0072');
        AjaxZip3.zip2addr('post_1', 'post_2','pref','city','town','aza');

        $('input[name="email"]').val('khanh@propolife.co.jp');
        $('input[name="re_email"]').val('khanh@propolife.co.jp');
        $('input[name="reason[]"]')[3].checked = true;
        $('textarea[name="content_inquiry"]').val('Propolife VN Dev Team testing form.');
    }

    function invalidCheck() {

        var isValid = true;

        // EMPTY CHECK

        var elemsChk = [
            $('input[name="family_name"]'),
            $('input[name="first_name"]'),

            $('input[name="family_name_kana"]'),
            $('input[name="first_name_kana"]'),

            $('input[name="post_1"]'),
            $('input[name="post_2"]'),
            $('select[name="pref"]'),
            $('input[name="city"]'),
            $('input[name="town"]'),

            $('input[name="email"]'),
            $('input[name="re_email"]'),

        ];

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'select-one': {
                        if (elem.val() == 'null'){
                            elem.addClass('validate-error');
                            isValid = false;
                        }else{
                            elem.removeClass('validate-error');
                        }
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
            $('.cfr_suspension_type').html($('input[name="suspension_type[]"]:checked').val());
            $('.cfr_name').html($('input[name="family_name"]').val() + ' ' + $('input[name="first_name"]').val());
            $('.cfr_name_kana').html($('input[name="family_name_kana"]').val() + $('input[name="first_name_kana"]').val());
            $('.cfr_address').html('〒' +
                $('input[name="post_1"]').val() + '-' + $('input[name="post_2"]').val() + '<br>' +
                $('select[name="pref"]').val() +
                $('input[name="city"]').val() +
                $('input[name="town"]').val() +
                $('input[name="aza"]').val() +
                $('input[name="building"]').val()
            );
            $('.cfr_email').html($('input[name="email"]').val());
            $('.cfr_reason').html($('input[name="reason[]"]:checked').val());
            $('.cfr_content_inquiry').html($('textarea[name="content_inquiry"]').val());

            $('input[name="post"]').val('〒' + $('input[name="post_1"]').val() + '-' + $('input[name="post_2"]').val());
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