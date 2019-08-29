$(function() {
    /*
        Developer: Khanh Nguyen PPL
        Fuction: Contact From scropt handler
    */

    var ERROR_NO_INPUT = '値を記入してください。';
    var ERROR_MAIL_FORMAT = '無効な形式。';

	// Bootstrap Datepicker configuration
	var date = new Date();
	var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var strToday = `${date.getFullYear()}/${date.getMonth()}/${date.getDate()}`;



    $('#icancellation_notice_date').datepicker({
        language: 'ja',
        autoclose: true,
        todayHighlight: true,
    });

    $('#icancellation_date').datepicker({
    	language: 'ja',
        autoclose: true,
        todayHighlight: true,
    });

    $('#icancellation_notice_date').datepicker('setDate', today);
    $('#icancellation_notice_date_display').html($('#icancellation_notice_date').val());

    $('#ibtnSearch_address_1').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('#ipost').keyup();
    });
    $('#ibtnSearch_address_2').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('#imoved_post').keyup();
    });
    $('#ibtnSearch_address').click(function(event) {
    	/* Act on the event */
    	event.preventDefault();
    	$('#iemergency_post').keyup();
    });

    // BUTTON HANDLER
    $('#ibtnConfirm').click(function(event){
        event.preventDefault();
        if (invalidCheck()){
            $('.frm_contact .table_info').fadeOut();
            $('.frm_contact .table_confirm').fadeIn();

            // SET CONFIRM INFO
            $('#cfrm_cancellation_notice_date').html($('#icancellation_notice_date').val());

            var collectInputText = $('input[type="text"]');
            $.each(collectInputText, function(i, e){
                var cfrmPrefix = `#cfrm_${$(e).attr('name')}`;
                $(cfrmPrefix).html($(e).val());
            });

            var collectSelect = $('select');
            $.each(collectSelect, function(i, e){
                var cfrmPrefix = `#cfrm_${$(e).attr('name')}`;
                $(cfrmPrefix).html($(e).val());
            });

            var collectTextArea = $('textarea');
            $.each(collectTextArea, function(i, e){
                var cfrmPrefix = `#cfrm_${$(e).attr('name')}`;
                $(cfrmPrefix).html($(e).val());
            });

            var cfrm_bank_type =  $('input[name="bank_type[]"]:checked').val();
            $('#cfrm_bank_type').html(cfrm_bank_type);

            var cfrm_hope_attend = '';
            $('input[name="hope_attend[]"]:checked').each(function(i, e){
                var seperate = i == 0 ? '' : '、';
                cfrm_hope_attend += seperate + $(e).val();
            });
            $('#cfrm_hope_attend').html(cfrm_hope_attend);

            var cfrm_restration_fee = '';
            $('input[name="restration_fee[]"]:checked').each(function(i, e){
                var seperate = i == 0 ? '' : '、';
                cfrm_restration_fee += seperate + $(e).val();
            });
            $('#cfrm_restration_fee').html(cfrm_restration_fee);
        }else{
            // $('html').animate({scrollTop: $('.error-required:first').offset().top - 100}, 1000, function(){});
            $('html').scrollTop($('.error-required:first').offset().top - 100);
        }

    });

    $('#ibtnGoBack').click(function(event){
        $('.frm_contact .table_info').fadeIn();
        $('.frm_contact .table_confirm').fadeOut();
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
        var htmlError = `<section class="error-box">
            <div class="icon"></div>
            <p>${message}</p>
        </section>`
        var formGroup = $(elem).closest('.form-group');
        formGroup.append(htmlError);
    }
    function removeErrorMessage(elem){
        var formGroup = $(elem).closest('.form-group');
        formGroup.find('.error-box').remove();
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
            var disable_bukkenmei = $('input[name="disable_bukkenmei"]');
            var disable_living = $('input[name="disable_living"]');
            if (disable_bukkenmei.is(":checked") && ($(e).attr('name') == 'bukkenmei' || $(e).attr('name') == 'roomnumber')) {
                removeErrorClass($(e));
                removeErrorMessage($(e));
            } else if (disable_living.is(":checked") && ($(e).attr('name') == 'name_living') || $(e).attr('name') == 'kana_living') {
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
            else if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass(e);
                callErrorMessage($(e), ERROR_NO_INPUT);
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
                callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });

        if ($('input[name="hope_attend[]"]:checked').val() == '無し'){
            if(typeof($('input[name="restration_fee[]"]:checked').val()) === 'undefined' || $('input[name="restration_fee[]"]:checked').val() == "" || $('input[name="restration_fee[]"]:checked').val() == "null"){
                setErrorClass($('input[name="restration_fee[]"]'));
                callErrorMessage($('input[name="restration_fee[]"]'), ERROR_NO_INPUT);
                isValid = false;
            }else{
                removeErrorClass($('input[name="restration_fee[]"]'));
                removeErrorMessage($('input[name="restration_fee[]"]'));
            }
        }else{
            removeErrorClass($('input[name="restration_fee[]"]'));
            removeErrorMessage($('input[name="restration_fee[]"]'));
        }


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

                // $('.error-text.email').html(ERROR_MAIL_FORMAT);
                // $('.error-text.email').css('display', 'block');

            } else {
                removeErrorClass($('input[name="email"]'));
                removeErrorMessage($('input[name="email"]'));
            }
        }

        return isValid;
    }

    var requireInputText = $('input[type="text"][required]');
    $.each(requireInputText, function(i, e){
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

    var requireSelect = $('select[required]');
    $.each(requireSelect, function(i, e){

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

    $('input[name="email"]').on('mouseover mouseenter focus touchmove touchstart', function(event) {
        /* Act on the event */
        var formGroup = $(this).closest('.form-group');
        var errorBox = formGroup.find('.error-box');
        if (errorBox.length > 0){
            errorBox.fadeOut('400', function() {
                $(this).remove();
            });
        }
    });

    $('input[name="restration_fee[]"]').on('mouseover mouseenter focus touchmove touchstart', function(event) {
        /* Act on the event */
        var formGroup = $(this).closest('.form-group');
        var errorBox = formGroup.find('.error-box');
        if (errorBox.length > 0){
            errorBox.fadeOut('400', function() {
                $(this).remove();
            });
        }
    });

    $(window).scroll(function(event) {
        /* Act on the event */
        var errorBoxElem = $('.error-box');
        $.each(errorBoxElem, function(i, e){
            setTimeout(function(){
                if ($(window).scrollTop() + 150 >= $(e).offset().top){
                    $(e).fadeOut('400', function() {
                        $(e).remove();
                    });
                }
            }, 0);

        });
    });

});

/* SCRIPT GENERATE DATA TO TEST FORM CONTACT

var collectInputText = $('input[type="text"]');
$.each(collectInputText, function(i, e){
    var cfrmPrefix = `#cfrm_${$(e).attr('name')}`;
    $(e).val(`TEST ${cfrmPrefix}`);
});
var collectTextArea = $('textarea');
$.each(collectTextArea, function(i, e){
    var cfrmPrefix = `#cfrm_${$(e).attr('name')}`;
    $(e).val(`TEST ${cfrmPrefix}`);
});
$('input[name="email"]').val('khanh@fudosan-king.jp');
$('#ipost').val('1000003');
$('#ipost').keyup();
$('#imoved_post').val('1000004');
$('#imoved_post').keyup();
$('#iemergency_post').val('1000005');
$('#iemergency_post').keyup();
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
$('#icancellation_notice_date').datepicker('setDate', today);
$('#icancellation_date').datepicker('setDate', today);

*/