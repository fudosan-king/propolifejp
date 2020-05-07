$(function($) {

    today = new Date();
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var meetday = moment();

    if(today.getDay() == 2)
        meetday = moment(today).add(2, 'day');
    if(today.getDay() == 3)
        meetday = moment(today).add(1, 'day');

    $('#datepicker').datepicker({
        // todayHighlight: true,
        format: 'yyyy年mm月dd',
        language: 'ja',
        autoclose:true,
        beforeShowDay: function (date) {
            if(date.getTime() < (new Date()).getTime() )
                return false;
            if (date.getDay() == 2 || date.getDay() == 3)
                return false;

            return true;
        }
    });
    $('#datepicker').datepicker('setDate', meetday.format('YYYY/MM/DD'));

    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.data-confirm').fadeIn();

            $('.cfr_name').html($('input[name="name"]').val());
            $('.cfr_email').html($('input[name="email"]').val());
            $('.cfr_date').html($('input[name="datepicker"]').val());
            $('.cfr_hour').html($('select[name="time"]').val());

            $('input[name="pd_name"]').val($('input[name="name"]').val());
            $('input[name="pd_email"]').val($('input[name="email"]').val());
            $('input[name="pd_appointment_date"]').val($('input[name="datepicker"]').val());
            $('input[name="pd_appointment_hour"]').val($('select[name="time"]').val());


        }else{
            // $('.data-input').hide();
            // $('.data-confirm').fadeOut();
        }
    });

    $('.btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-input').fadeIn();
        $('.data-confirm').hide();
    });

    $('.btn_send').click(function(event) {
        /* Act on the event */
        if(!checkValidate()){
            return false;
        }
    });


    function checkValidate(){
        var isValidate = true;

        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        if(typeof($('input[name="name"]')) === 'undefined' || $('input[name="name"]').val() == ''){
            isValidate = false;
            $('input[name="name"]').addClass('validate-error');
        }else{
            $('input[name="name"]').removeClass('validate-error');
        }

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').addClass('validate-error');
            isValidate = false;
        } else {
            $('input[name="email"]').removeClass('validate-error');
        }

        return isValidate;
    }
});