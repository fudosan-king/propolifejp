$(function($) {

    // $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}</style>');

    today = new Date();
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var meetday = moment();

    switch(today.getDay()){
        case 2: meetday = moment(today).add(2, 'day'); break;
        case 3: meetday = moment(today).add(1, 'day'); break;
        default: meetday = moment(today).add(1, 'day'); break;
    }

    $('.datepicker').datepicker({
        // todayHighlight: true,
        format: 'yyyy年mm月dd日',
        language: 'ja',
        autoclose:true,
        todayHighlight: true,
        ignoreReadonly: true,
        beforeShowDay: function (date) {

            if(date.getDate() == (new Date()).getDate() )
                return false;

            if(date.getTime() < (new Date()).getTime() )
                return false;

            if (date.getDay() == 2 || date.getDay() == 3)
                return false;

            return true;
        },

    });
    $('.datepicker').prop('readonly', true);


    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.data-confirm').fadeIn();

            $('.cfr_name').html($('input[name="name"]').val());
            $('.cfr_email').html($('input[name="email"]').val());
            $('.cfr_date_time_1').html($('input[name="datepicker1"]').val() + ' ' + $('select[name="time1"] option:selected').val());
            $('.cfr_date_time_2').html($('input[name="datepicker2"]').val() + ' ' + $('select[name="time2"] option:selected').val());
            $('.cfr_date_time_3').html($('input[name="datepicker3"]').val() + ' ' + $('select[name="time3"] option:selected').val());
            $('.cfr_request_online').html($('input[name="request_online[]"]:checked').val());
            $('.cfr_inquiry_content').html($('textarea[name="inquiry_content"]').val());
        }else{
            $("html, body").animate({ scrollTop: $($('#pardotForm .validate-error')[0]).offset().top - 50 }, 300);
        }
    });

    $('#btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-input').fadeIn();
        $('.data-confirm').hide();
    });

    $('#btn_send').click(function(event) {
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

        var elemsChk = [];
        $.each($('form[name="pardotForm"]').find('[data-require="true"]'), function(index, el) {
            elemsChk.push(el);
        });

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'checkbox':{
                        if ($(elem).is(':checked') == false){
                            isValidate = false;
                            $(elem).siblings('label').css('color', '#ff0000');
                        }else{
                            $(elem).siblings('label').css('color', '#514736');
                        }
                    }break;
                    case 'select-one': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            $(elem).removeClass('validate-error');
                        }
                    }break;
                    case 'email': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            // EMAIL CHECK
                            var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
                            if (!emailPattern.test($(elem).val())) {
                                isValidate = false;
                                $(elem).addClass('validate-error');
                            } else {
                                $(elem).removeClass('validate-error');
                            }
                        }
                    }break;
                    case 'text': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            $(elem).removeClass('validate-error');
                        }
                    }break;
                }
            }

        });

        return isValidate;
    }

    demo = (name='') => {
        switch(name){
            case 'luu': {
                $('input[name="name"]').val('Luu Nguyen');
                $('input[name="email"]').val('luund@propolife.co.jp');
                $('input[name="datepicker1"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                $('select[name="time1"]').val('11:00');
                $('input[name="request_online[]"]')[1].checked = true;
                $('textarea[name="inquiry_content"]').val('Propolife VN Dev Team testing form. LUU NGUYEN');
            }break;
            case '': {
                $('input[name="name"]').val('Khanh Nguyen');
                $('input[name="email"]').val('khanh@propolife.co.jp');
                $('input[name="datepicker1"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                $('select[name="time1"]').val('11:00');
                $('input[name="request_online[]"]')[1].checked = true;
                $('textarea[name="inquiry_content"]').val('Propolife VN Dev Team testing form. KHANH NGUYEN');
            }break;
        }
        
    }

});