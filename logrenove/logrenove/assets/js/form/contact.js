$(function($) {

    $('.btnAccept').on('click',function(e){
        var isValid = check_valid();
        if(isValid === false) {
            $('html').animate({
                scrollTop: $('.frm_contact').offset().top
            }, 1000, function() {});
        }
        else $('.frm_contact').submit();
        e.preventDefault();
        return false;
    });

    function isEmail(email) {
      var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
      return emailPattern.test(email);
    }

    function check_valid() {
        var ERROR_NO_INPUT = '値を入力してください';
        var data = $('.frm_contact input.required,select.required').map(function() {
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
                    element.addClass('validate-error');
                    invalid.push(name);

                }
                else if(name == 'email') {
                    if(!isEmail(val))
                    {
                        element.addClass('validate-error');
                        invalid.push(name);
                    }
                    else {
                        element.removeClass('validate-error');
                        // element.addClass('is-valid');
                    }
                }
                else {
                    element.removeClass('validate-error');
                    // element.addClass('is-valid');
                }
            }
        });
        if(invalid.length > 0) return false;
        else return true;
    }
})
