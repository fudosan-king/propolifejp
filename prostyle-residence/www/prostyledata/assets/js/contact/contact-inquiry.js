$(function($) {

    var queryString = function(){

        var search = window.location.search;
        var res = {};
        var str = search.substr(1);
        var params = str.split("&");
        params.forEach(function(data){
            var obj = data.split("=");
            res[obj[0]] = obj[1];
        });
        return res;
    }

    if (typeof queryString()['finish'] !== 'undefined' && queryString()['finish'] == '1'){
        $('.breadcrumb_reservation .flex-fill').removeClass('active');
        $('.breadcrumb_reservation .flex-fill.finish').addClass('active');
    }

    if (typeof queryString()['from'] !== 'undefined'){
        switch(queryString()['from']){
            case 'nakano':{
                $('select[name="property_name"]').append('<option value="プレシス中野哲学堂パークフロント" selected>プレシス中野哲学堂パークフロント</option>');
            }break;
            case 'ichigao':{
                $('select[name="property_name"]').append('<option value="プロスタイル市ヶ尾" selected>プロスタイル市ヶ尾</option>');
            }break;
            case 'sakura':{
                $('select[name="property_name"]').append('<option value="プレシス淵野辺 桜レジデンス" selected>プレシス淵野辺 桜レジデンス</option>');
            }break;
        }
        
    }else{
        $('select[name="property_name"]').append('<option value="">物件を選択</option>');
        $('select[name="property_name"]').append('<option value="プレシス中野哲学堂パークフロント">プレシス中野哲学堂パークフロント</option>');
        $('select[name="property_name"]').append('<option value="プロスタイル市ヶ尾">プロスタイル市ヶ尾</option>');
        $('select[name="property_name"]').append('<option value="プレシス淵野辺 桜レジデンス">プレシス淵野辺 桜レジデンス</option>');
    }

    $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}.form-control.datepicker:disabled, .form-control.datepicker[readonly] {background-color: initial;}.datepicker .datepicker-days .day.disabled:not(.today) {background: #efefef;border-radius: 0;}</style>');

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
        // format: 'yyyy年mm月dd日',
        language: 'ja',
        autoclose:true,
        todayHighlight: true,
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


    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.breadcrumb_reservation .flex-fill').removeClass('active');
            $('.breadcrumb_reservation .flex-fill.confirm').addClass('active');
            $("html, body").animate({ scrollTop: $($('.breadcrumb_reservation')).offset().top - 250 }, 0);
            $('.data-confirm').fadeIn();

            $('.cfr_property_name').html($('select[name="property_name"]').val());

            $('.cfr_name').html($('input[name="last_name"]').val() + ' ' + $('input[name="first_name"]').val());
            $('.cfr_name_kana').html($('input[name="myouji"]').val() + $('input[name="namae"]').val());

            $('.cfr_address').html('〒' +
                $('input[name="post"]').val().substr(0, 3) + '-' + $('input[name="post"]').val().substr(3) +
                $('select[name="pref"]').val() +
                $('input[name="city"]').val() +
                $('input[name="aza"]').val() + 
                $('input[name="building"]').val()
            );

            $('.cfr_email').html( $('input[name="email"]').val());

            $('.cfr_budget').html($('select[name="budget"]').val());
            
            $('.cfr_request_online').html($('input[name="request_online[]"]:checked').val());
            $('.cfr_request_document').html($('input[name="request_document[]"]:checked').val());

            $('.cfr_date_time').html($('input[name="datepicker"]').val() + ' ' + $('select[name="time"] option:selected').val());

            $('.cfr_inquiry_content').html($('textarea[name="inquiry_content"]').val());
        }else{
            $("html, body").animate({ scrollTop: $($('#pardotForm .validate-error')[0]).offset().top - 150 }, 300);
        }
    });

    $('#btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-confirm').hide();
        $('.breadcrumb_reservation .flex-fill').removeClass('active');
        $('.breadcrumb_reservation .flex-fill.input').addClass('active');
        $("html, body").animate({ scrollTop: $($('.breadcrumb_reservation')).offset().top - 250 }, 0);
        $('.data-input').fadeIn();
    });

    // $('#btn_send').click(function(event) {
    //     /* Act on the event */
    //     if(!checkValidate()){
    //         return false;
    //     }
    // });


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
                $('select[name="property_name"]').val('プロスタイル市ヶ尾');

                $('input[name="last_name"]').val('Nguyen');
                $('input[name="first_name"]').val('Khanh');
                $('input[name="myouji"]').val('グエン');
                $('input[name="namae"]').val('カン');

                $('input[name="post"]').val('1000013');
                AjaxZip3.zip2addr('post', '','pref','city','aza');

                $('input[name="email"]').val('khanh@propolife.co.jp');
                $('select[name="budget"]').val('～6000万円');

                /* 0: Zoom, 1: Googlemeet, 2: Calling, 3: どれでも可 */
                $('input[name="request_online[]"]')[1].checked = true;

                /* 0: する, 1: しない */
                $('input[name="request_document[]"]')[1].checked = true;

                $('input[name="datepicker"]').datepicker('setDate', meetday.format('YYYY/MM/DD'));
                $('select[name="time"]').val('11:00');

                $('textarea[name="inquiry_content"]').val('Propolife VN Dev Team testing form. KHANH NGUYEN');
            }break;
        }
        
    }

});