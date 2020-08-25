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
    })

    $('form.frm_general').on('submit',function(e) {
        var frm_data = $(this).serializeArray();
        var isValid = check_valid(frm_data);
        if(isValid === false) {
            $('html').animate({
                scrollTop: $('.frm_general').offset().top
            }, 1000, function() {});
        }
        else {
            var btn_id = $(":focus", this).attr('id');
            if(btn_id == 'btnBack') goBack();
            else if(btn_id == 'btnSubmit') return true;
            else goConfirm(frm_data);
        }
        e.preventDefault();
        return false;
    })

    function goConfirm(data)
    {
        $('.frm-input').fadeOut();
        $('.frm-confirm').fadeIn(function() {
            $('html').scrollTop($('.frm_general').offset().top);
        });
        $($('.steps li')[0]).removeClass('active');
        $($('.steps li')[1]).addClass('active');

        $.each(data, function(key, value) {
            var name = value.name;
            var val = value.value;
            if (name.includes('[]') === false) 
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
        $('.frm-confirm').fadeOut();

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
                key = key.includes('[]') ? key.replace('[]','') : key;
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