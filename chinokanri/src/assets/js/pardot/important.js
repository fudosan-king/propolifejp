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
        $('.section_content_top .steps li').removeClass('active');
        $('.section_content_top .steps li.finish').addClass('active');
    }

    $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}.form-control.datepicker:disabled, .form-control.datepicker[readonly] {background-color: initial;}.datepicker .datepicker-days .day.disabled:not(.today) {background: #efefef;border-radius: 0;}</style>');

    $('input[name="building_license[]"]').on('change', function(event) {
        event.preventDefault();

        $('input[name="governor_opt1_first"]').val(''); $('input[name="governor_opt1_number"]').val('');
        $('input[name="governor_custom_text"]').val('');
        $('input[name="governor_opt2_first"]').val(''); $('input[name="governor_opt2_number"]').val('');
        $('input[name="governor_other_text"]').val('');

        $('input[data-group="' + $(this).attr('id') + '"]').attr('readonly', false);

        switch($(this).val()){
            case '国土交通大臣': {
                $('input[data-group="building_license_governor"]').attr('readonly', true);
                $('input[data-group="building_license_other"]').attr('readonly', true);
            }break;
            case '知事': {
                $('input[data-group="building_license_minister"]').attr('readonly', true);
                $('input[data-group="building_license_other"]').attr('readonly', true);
            }break;
            case 'その他': {
                $('input[data-group="building_license_minister"]').attr('readonly', true);
                $('input[data-group="building_license_governor"]').attr('readonly', true);
            }break;
        }
    });

    $('#cb_surveyreport').change(function(event) {
        /* Act on the event */
        $('input[name="request_unit"]').val('');
        switch($(this).is(':checked')){
            case true: {
                $('input[name="request_unit"]').attr('readonly', false);
                $('input[name="request_unit"]').val('1');
            }break;
            default: {
                $('input[name="request_unit"]').attr('readonly', true);
            }
        }
    });

    $('input[name="purpose_of_use[]"]').on('change', function(event) {
        event.preventDefault();
        $('input[name="purpose_of_text"]').val('');
        switch($(this).val()){
            case 'その他': {
                $('input[name="purpose_of_text"]').attr('readonly', false);
            }break;
            default: {
                $('input[name="purpose_of_text"]').attr('readonly', true);
            }
        }
    });

    $('#btn_confirm').click(function(event) {
        /* Act on the event */
        if(checkValidate()){
            $('.data-input').hide();
            $('.section_content_top .steps li').removeClass('active');
            $('.section_content_top .steps li.confirm').addClass('active');
            $("html, body").animate({ scrollTop: $($('.section_content_top .steps')).offset().top - 50 }, 0);
            $('.data-confirm').fadeIn();


            $('.cfr.company_name').html($('input[name="company_name"]').val());
            $('.cfr.branch_name').html($('input[name="branch_name"]').val());

            $('.cfr.building_address').html('〒' +
                $('input[name="building_post"]').val().substr(0, 3) + '-' + $('input[name="building_post"]').val().substr(3) +
                $('select[name="building_pref"]').val() +
                $('input[name="building_city"]').val() +
                $('input[name="building_aza"]').val() +
                $('input[name="building_room_name"]').val()
            );

            /* 0:国土交通大臣, 1:知事, 2:その他  */
            var building_license = $('input[name="building_license[]"]:checked').val();
            var license_value = ''
            switch(building_license){
                case '国土交通大臣': {
                    license_value = $('input[name="building_license[]"]:checked').val() + '（' + $('input[name="governor_opt1_first"]').val() + '第' + $('input[name="governor_opt1_number"]').val() + '号）';
                    
                }break;
                case '知事': {
                    license_value = $('input[name="governor_custom_text"]').val() + $('input[name="building_license[]"]:checked').val() + '（' + $('input[name="governor_opt2_first"]').val() + '第' + $('input[name="governor_opt2_number"]').val() + '号）';
                }break;
                case 'その他': {
                    license_value = $('input[name="governor_other_text"]').val();
                }break;
            }
            $('.cfr.building_license').html(license_value);
            $('input[name="license"]').val(license_value);

            $('.cfr.representative_office').html($('input[name="representative_office"]').val());
            $('.cfr.name').html($('input[name="last_name"]').val() + $('input[name="first_name"]').val());
            $('.cfr.phone').html($('input[name="phone"]').val());
            $('.cfr.fax').html($('input[name="fax"]').val());
            $('.cfr.email').html($('input[name="email"]').val());

            
            
            $('.cfr.kondo_name').html($('input[name="kondo_name"]').val());

            $('.cfr.kondo_address').html('〒' +
                $('input[name="kondo_post"]').val().substr(0, 3) + '-' + $('input[name="kondo_post"]').val().substr(3) +
                $('select[name="kondo_pref"]').val() +
                $('input[name="kondo_city"]').val() +
                $('input[name="kondo_aza"]').val() +
                $('input[name="kondo_building_name"]').val() +
                $('input[name="kondo_building_room"]').val()
            );

            $('.cfr.unit_number_sale').html($('input[name="unit_number_sale"]').val());
            $('.cfr.unit_name_sale').html($('input[name="unit_name_sale"]').val());
            
            // // /* 0:調査報告書, 1:管理規約（コピー） */
            var request_document = '';
            $('input[name="request_document[]"]:checked').each(function(index, el) {
                request_document += index != 0 ? '\n' : '';
                
                switch($(el).val()){
                    case '調査報告書': {
                        var request_unit = $('input[name="request_unit"]').val() == '' ? 0 : $('input[name="request_unit"]').val();
                        request_document += '・重要事項' + $(el).val() + '　' + request_unit + '戸/11000円（税込）';
                    }break;
                    case '管理規約（コピー）': {
                        request_document += '・' + $(el).val() + '　3300円（税込）';
                    }break;
                }
            });
            $('.cfr.request_document').html(request_document);
            $('input[name="request_document"]').val(request_document.replace('<br>', '\n'));
            // ・重要事項調査報告書　　　1戸/11000（税込）
            // 管理規約（コピー）　3300円（税込）
            
            /* 0:売買仲介, 1:賃貸仲介, 2:その他  */
            var purpose_of_use = $('input[name="purpose_of_use[]"]:checked').val();
            var purpose_of_use_value = '';
            switch(purpose_of_use){
                case 'その他': {
                    purpose_of_use_value = $('input[name="purpose_of_text"]').val();
                }break;
                default: {
                    purpose_of_use_value = $('input[name="purpose_of_use[]"]:checked').val();
                }break;
            }
            $('.cfr.purpose_of_use').html(purpose_of_use_value);
            $('input[name="purpose_of_use"]').val(purpose_of_use_value)

            // // /* 0:メールデータ受取り（PDF）, 1:郵送, 2:メールでのデータ受取及び郵送  */
            $('.cfr.receive_method').html($('input[name="receive_method[]"]:checked').val());
            $('input[name="receive_method"]').val($('input[name="receive_method[]"]:checked').val());

        }else{
            $("html, body").animate({ scrollTop: $($('#pardotForm .validate-error')[0]).offset().top - 50 }, 300);
        }
    });

    $('#btn_return').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('.data-confirm').hide();
        $('.section_content_top .steps li').removeClass('active');
        $('.section_content_top .steps li.input').addClass('active');
        $("html, body").animate({ scrollTop: $($('.section_content_top .steps')).offset().top - 250 }, 0);
        $('.data-input').fadeIn();
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
                        var groupCheck = $('form[name="pardotForm"]').find('[name="' + $(elem).attr('name') + '"]');
                        if ($(groupCheck).is(':checked') == false){
                            isValidate = false;
                            $(elem).addClass('validate-error');
                            $(elem).siblings('label').css('color', '#ff0000');
                        }else{
                            $(elem).removeClass('validate-error');
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
                                if($(elem).attr('data-confirm') == 'true'){
                                    var e_name_compare = $(elem).attr('data-confirm-name');
                                    if($(elem).val() != $('input[name="' + e_name_compare + '"]').val()){
                                        isValidate = false;
                                        $(elem).addClass('validate-error');
                                    }else{
                                        $(elem).removeClass('validate-error');
                                    }
                                }else{
                                    $(elem).removeClass('validate-error');
                                }
                                
                            }
                        }
                    }break;
                    case 'text': {
                        if (typeof($(elem).val()) === 'undefined' || $(elem).val() == "" || $(elem).val() == "null") {
                            isValidate = false;
                            $(elem).addClass('validate-error');
                        }else{
                            if($(elem).attr('data-confirm') == 'true'){
                                var e_name_compare = $(elem).attr('data-confirm-name');
                                if($(elem).val() != $('input[name="' + e_name_compare + '"]').val()){
                                    isValidate = false;
                                    $(elem).addClass('validate-error');
                                }else{
                                    $(elem).removeClass('validate-error');
                                }
                            }else{
                                $(elem).removeClass('validate-error');
                            }
                            
                        }
                    }break;
                }
            }

        });

        return isValidate;
    }

    demo = (name='') => {
        switch(name){
            case '': {
                $('input[name="company_name"]').val('プロポライフ');
                $('input[name="branch_name"]').val('ベトナム');

                $('input[name="building_post"]').val('1000013');
                AjaxZip3.zip2addr('building_post', '', 'building_pref','building_city','building_aza');
                $('input[name="building_room_name"]').val('U1904 - CJ Building');

                // /* 0:国土交通大臣, 1:None, 2:その他  */
                $('input[name="building_license[]"]')[1].checked = true;
                $('input[name="governor_custom_text"]').val('ABC Hideaki');
                $('input[name="governor_opt2_first"]').val('ABC First');
                $('input[name="governor_opt2_number"]').val('ABC #1');

                $('input[name="representative_office"]').val('TEST Representative Office');

                $('input[name="last_name"]').val('Nguyen');
                $('input[name="first_name"]').val('Khanh');
                $('input[name="phone"]').val('+84-97-422-6440');
                $('input[name="fax"]').val('03-6897-8561');
                $('input[name="fax_confirm"]').val('03-6897-8561');
                $('input[name="email"]').val('khanh@propolife.co.jp');
                $('input[name="email_confirm"]').val('khanh@propolife.co.jp');
                
                
                $('input[name="kondo_name"]').val('VINHOMES');

                setTimeout(function(){
                    $('input[name="kondo_post"]').val('1020072');
                    AjaxZip3.zip2addr('kondo_post', '', 'kondo_pref','kondo_city','kondo_aza');
                },1000);  
                
                $('input[name="kondo_building_name"]').val('Vinhomes Riverside');
                $('input[name="kondo_building_room"]').val('Apt. 205');

                $('input[name="unit_number_sale"]').val('CLI#1331');
                $('input[name="unit_name_sale"]').val('LUX');
                
                // /* 0:調査報告書, 1:管理規約（コピー） */
                $('input[name="request_document[]"]')[0].checked = true;
                $('input[name="request_unit"]').val('2');
                $('input[name="request_document[]"]')[1].checked = true;
                
                // /* 0:売買仲介, 1:賃貸仲介, 2:その他  */
                $('input[name="purpose_of_use[]"]')[2].checked = true;
                $('input[name="purpose_of_text"]').val('TEST Purpose');

                // /* 0:メールデータ受取り（PDF）, 1:郵送, 2:メールでのデータ受取及び郵送  */
                $('input[name="receive_method[]"]')[2].checked = true;

                
                setTimeout(function(){
                    // $('#btn_confirm').click();
                },2000);
            }break;
        }
        
    }

    // Test confirm
    // demo();
    // setTimeout(function(){
    //     $('#btn_confirm').click();
    // },2000);
    

});