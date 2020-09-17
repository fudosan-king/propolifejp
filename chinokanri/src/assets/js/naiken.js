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

    $('input:checkbox[name=contact-method]').on('click',function(){
      if($('input:checkbox[name=contact-method]:checked').length > 1) $(this).prop('checked', false);
    });

    $('#btnAgree').on('click',function(e){
        var frm_data = $('form.frm_general').serializeArray();
        var isValid = check_valid(frm_data);
        if(isValid === false) {
            $('html').animate({
                scrollTop: $('.frm_general').offset().top
            }, 1000, function() {});
        }
        else
        {
            goConfirm(frm_data);
        }
        e.preventDefault();
        return false;
    });

    $('#btnBack').on('click',function(e){
        goBack();
        return false;
    });

    function goConfirm(data)
    {
        $('.frm-input').fadeOut();
        $('.frm_confirm').fadeIn(function() {
            $('html').scrollTop($('.frm_general').offset().top);
        });
        $($('.steps li')[0]).removeClass('active');
        $($('.steps li')[1]).addClass('active');

        $.each(data, function(key, value) {
            var name = value.name;
            var val = value.value;
            if (name.indexOf('[]') != -1) 
            {
                $("#"+name).html(val);
            }
            else 
            {
                name = name.replace('[]','');
                $("#"+name).append(val + '<br>');
            }
        })
    }

    function goBack()
    {
        $('.frm-input').fadeIn(function() {
            $('html').scrollTop($('.frm_general').offset().top);
        });
        $('.frm_confirm').fadeOut();

        $($('.steps li')[1]).removeClass('active');
        $($('.steps li')[0]).addClass('active');
        $('.frm-input').find('input, select').removeClass('is-invalid');
    }

    function isEmail(email) {
      var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
      return emailPattern.test(email);
    }

    function check_valid() {
        var ERROR_NO_INPUT = '値を入力してください';
        var data = $('.frm-input input.required,select.required').map(function() {
            key = $(this).attr('name');
            val = $(this).val();
            type_elem = $(this).attr('type');
            if(['radio'].indexOf(type_elem) != -1) {
                checked = $('input[name='+key+']:checked');
                val = checked.length > 0 ? checked.val() : '';
            }
            else if(['checkbox'].indexOf(type_elem) != -1) {
                key = key.indexOf('[]') != -1 ? key.replace('[]','') : key;
                val = $('input[name^='+key+']:checked').map(function() {
                    return $(this).val();
                });
            }
            var obj = {};
            obj['name'] = key;
            obj['value'] = val;
            return obj;
        });
        var invalid = $();
        $.each(data, function(key, value) {
            var name = value.name;
            var val = value.value;
            var element = $('[name^='+name+']');
            var required = element.hasClass('required');
            if(required) {
                if(val == '' || val.length == 0) {
                    element.addClass('is-invalid');
                    invalid.push(name);

                }
                else if(name == 'email') {
                    if(!isEmail(val))
                    {
                        element.addClass('is-invalid');
                        invalid.push(name);
                    }
                    else {
                        element.removeClass('is-invalid');
                        element.addClass('is-valid');
                    }
                }
                else {
                    element.removeClass('is-invalid');
                    element.addClass('is-valid');
                }
            }
        });
        if(invalid.length > 0) return false;
        else return true;
    }
})

var demo = function(){
    $('input[name="property-name"]').val('プロポライフ');
    $('input[name="room-number"]').val('ベトナム');
    $('input[name="visit-date"]').val('2020/08/28');
    $('select[name="visit-hour"]').val('10:00');
    $('input[name="company-name"]').val('プロポライフ');
    $('input[name="branch-name"]').val('ベトナム');
    $('input[name="postal-code"]').val('1000013');
    AjaxZip3.zip2addr('postal-code','','pref','city')
    
    
    $('input[name="phone-number"]').val('+84-97-422-6440');
    $('input[name="mobile-number"]').val('03-6897-8561');
    $('input[name="email"]').val('khiemtq@propolife.co.jp');
    
    $('input[name="kanji_familyname"]').val('プロポライフ');
    $('input[name="kanji_name"]').val('ベトナム');
    $('input[name="kata_familyname"]').val('プロポライフ');
    $('input[name="kata_name"]').val('ベトナム');
    $('input[name="address"]').val('U1904 - CJ Building');
    $('input[id="customRadioInline1"]').prop('checked', true);
    $('input[id="customRadio1"]').prop('checked', true);

    setTimeout(function(){
        // $('#btn_confirm').click();
    },2000);
}