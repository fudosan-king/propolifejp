$(function() {

    /*
        Developer: Khanh Nguyen PPL
        Fuction: Contact From script handler
    */

    var ERROR_NO_INPUT = '※ ご入力ください。';
    var ERROR_NO_SELECT = '※ ご選択ください。';
    var ERROR_MAIL_FORMAT = '※ 無効な形式。';
    var ERROR_MAIL_DIFFERENT = '※ 確認メールは一致する必要があります。';

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());


    $('#datepicker').on('keypress', function(e){
        e.preventDefault();
    });
    $('#datepicker').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: 'ja',
        minDate: today,
        daysOfWeekDisabled: [2, 3],
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-arrow-up',
            down: 'fa fa-arrow-down',
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            close: 'fa fa-times'
        }
    });
    $('#datepicker').data("DateTimePicker").dayViewHeaderFormat('YYYY年 MMM');
    $('.i_calendar').click(function(){
        var dpk = $(this).closest('.box_datepicker').find('.dpk');
        var idpk = '#' + dpk.prop('id');
        $(idpk).data('DateTimePicker').toggle();
    })

    var requireInput = $('input[type="text"][required], textarea[required], select[required]');
    $.each(requireInput, function(i, e){
        $(e).on('mouseover mouseenter focus touchmove touchstart', function(event) {
            /* Act on the event */
            var formGroup = $(e).closest('.form-group');
            var errorBox = formGroup.find('.error-box');
            if (errorBox.length > 0){
                errorBox.fadeOut('400', function() {
                    $(this).remove();
                });
            }
        });
    });

    function requireCondition(){
        if ($('input[name="category_contact[]"]:checked').val() == 'ショールーム来場予約')
        {
            $('textarea[name="free_detail_contact"]').removeAttr('required')
            $('textarea[name="free_detail_contact"]').val('');
            $('#w_inquiry').fadeOut();
            $('#w_inquiry_cfrm').addClass('force-hide');

            
            $('#datepicker').attr('required',true);
            $('select[name="visit_hour"]').attr('required',true);
            $('select[name="show_room"]').attr('required',true);
            $('#w_visit').fadeIn();
            $('#w_visit_cfrm').removeClass('force-hide');
            
        }else{
            $('textarea[name="free_detail_contact"]').attr('required',true);
            $('#w_inquiry').fadeIn();
            $('#w_inquiry_cfrm').removeClass('force-hide');

            $('#datepicker').removeAttr('required');
            $('select[name="visit_hour"]').removeAttr('required');
            $('select[name="show_room"]').removeAttr('required');
            $('#datepicker').val('');
            $('select[name="visit_hour"]').val('');
            $('select[name="show_room"]').val('');
            $('#w_visit').fadeOut();
            $('#w_visit_cfrm').addClass('force-hide');
        }
    }

    requireCondition();

    $('input[name="category_contact[]"]').on('change', function(){
        requireCondition();
    })

    // BUTTON HANDLER
    $('#ibtnConfirm').click(function(event){
        event.preventDefault();
        if (invalidCheck()){
            $('.frm_contact .box_register').fadeOut();
            $('.frm_contact .box_confirm').fadeIn();

            // SET CONFIRM INFO

            var collectInputText = $('input[type="text"]');
            $.each(collectInputText, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var collectSelect = $('select');
            $.each(collectSelect, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var collectTextArea = $('textarea');
            $.each(collectTextArea, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var cfrm_name =  $('input[name="last_name"]').val() + $('input[name="first_name"]').val();
            $('#cfrm_name').html(cfrm_name);

            var cfrm_visit_info =  $('input[name="visit_date"]').val() + ' '  + $('select[name="visit_hour"]').val()+ '</br>'  + $('select[name="show_room"]').val();
            $('#cfrm_visit_info').html(cfrm_visit_info);

            var cfrm_category_contact =  $('input[name="category_contact[]"]:checked').val();
            $('#cfrm_category_contact').html(cfrm_category_contact);

        }else{
            // $('html').animate({scrollTop: $('.error-required:first').offset().top - 100}, 1000, function(){});
            $('html').scrollTop($('.error-required:first').offset().top - 100);
        }

    });

    $('#ibtnGoBack').click(function(event){
        $('.frm_contact .box_register').fadeIn();
        $('.frm_contact .box_confirm').fadeOut();
    });

    $('#ibtnGoSubmit').click(function(event){
        if(invalidCheck()){
            $('.frm_contact').submit();
        }else{
            $('#ibtnGoBack').click();
        }
    });

    // VALIDATE FORM DATA
    function callErrorMessage(elem, message){
        var htmlError = '<section class="error-box"><div class="icon"></div><p>' + message + '</p></section>';
        var formGroup = $(elem).closest('.form-group');
        formGroup.append(htmlError);
    }
    function removeErrorMessage(elem){
        var formGroup = $(elem).closest('.form-group');
        formGroup.find('.error-box').remove();
    }
    function callErrorMessageLine(elem, message){
        removeErrorMessageLine(elem);
        var htmlError = '<section class="error-box-line"><div class="icon"></div><p>' + message + '</p></section>';
        var formCheck = $(elem).closest('.form-check');
        formCheck.append(htmlError);
    }
    function removeErrorMessageLine(elem){
        var formCheck = $(elem).closest('.form-check');
        formCheck.find('.error-box-line').remove();
    }
    function setErrorClass(elem){
        $(elem).addClass('error-required');
    }
    function removeErrorClass(elem){
        $(elem).removeClass('error-required');
    }
    function invalidCheck() {

        var isValid = true;

        $('.error-text').css('display', 'none');

        // EMPTY CHECK

        var requireInputText = $('input[type="text"][required]');
        $.each(requireInputText, function(i, e){
            if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass(e);
                callErrorMessage($(e), $(e).attr('id') == 'datepicker' ? ERROR_NO_SELECT : ERROR_NO_INPUT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });

        var requireSelect = $('select[required]');
        $.each(requireSelect, function(i, e){
            if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass($(e));
                callErrorMessage($(e), ERROR_NO_SELECT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });

        var requireTextarea = $('textarea[required]');
        $.each(requireTextarea, function(i, e){
            if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass($(e));
                callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });


        // EMAIL CHECK
        if(typeof($('input[name="email"]').val()) === 'undefined' || $('input[name="email"]').val() == "" || $('input[name="email"]').val() == "null"){
            setErrorClass($('input[name="email"]'));
            callErrorMessage($('input[name="email"]'), ERROR_NO_INPUT);
            isValid = false;
        }else{
            removeErrorClass($('input[name="email"]'));
            removeErrorMessage($('input[name="email"]'));

            var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
            if (!emailPattern.test($('input[name="email"]').val())) {
                setErrorClass($('input[name="email"]'));
                callErrorMessage($('input[name="email"]'), ERROR_MAIL_FORMAT);
                isValid = false;

            } else {
                removeErrorClass($('input[name="email"]'));
                removeErrorMessage($('input[name="email"]'));

                if ($('input[name="email"]').val() != $('input[name="email_confirm"]').val()) {
                    setErrorClass($('input[name="email"]'));
                    callErrorMessage($('input[name="email"]'), ERROR_MAIL_DIFFERENT);
                    isValid = false;
                } else {
                    removeErrorClass($('input[name="email"]'));
                    removeErrorMessage($('input[name="email"]'));
                }
            }
        }

        if (!$('#iagree').is(':checked')) {
            setErrorClass($('#iagree'));
            callErrorMessageLine($('#iagree'), ERROR_NO_SELECT);
            isValid = false;
        }else{
            removeErrorClass($('#iagree'));
            removeErrorMessageLine($('#iagree'));
        }

        return isValid;
    }

    // $(window).scroll(function(event) {
    //     /* Act on the event */
    //     var errorBoxElem = $('.error-box');
    //     $.each(errorBoxElem, function(i, e){
    //         setTimeout(function(){
    //             if ($(window).scrollTop() + 150 >= $(e).offset().top){
    //                 $(e).fadeOut('400', function() {
    //                     $(e).remove();
    //                 });
    //             }
    //         }, 0);

    //     });
    // });

});


// SCRIPT GENERATE DATA TO TEST FORM CONTACT
function demo(){
    var collectInputText = $('input[type="text"]');
    $.each(collectInputText, function(i, e){
        if ($(e).attr('name')!='visit_date'){
            var cfrmPrefix = '#cfrm_' + $(e).attr('name');
            $(e).val('TEST ' + cfrmPrefix);
        }
    });
    var collectTextArea = $('textarea');
    $.each(collectTextArea, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    $('input[name="email"]').val('khanh@fudosan-king.jp');
    $('input[name="email_confirm"]').val('khanh@fudosan-king.jp');
    $('select[name="visit_hour"]').val('10:00');
    $('select[name="show_room"]').val('表参道本店');
    console.log('Generate data successfully ...');
    return false;
}