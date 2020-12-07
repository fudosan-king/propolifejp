$(function($) {

    $('form.frm_avatar .btnAgree').on('click',function(e){
        var form = $('form.frm_avatar'),
            isValid = check_valid(form);
        if(isValid === false) {
            $('html').animate({
                scrollTop: $('.form-lp').offset().top
            }, 1000, function() {});
        }
        else
        {
            form.submit();
        }
        e.preventDefault();
        return false;
    });

    $('form.frm_avatar_login .btnAgree').on('click',function(e){
        var form = $('form.frm_avatar_login'),
            isValid = check_valid(form),
            isValidLogin = isValid?check_login(form):false,
            scrollToForm = $('html').animate({scrollTop: $('.form-lp').offset().top}, 1000);
        if(isValid === false) scrollToForm;
        else if(isValidLogin === false) scrollToForm;
        else form.submit();
        e.preventDefault();
        return false;
    });

    $('form.frm_avatar_register .btnAgree').on('click',function(e){
        var form = $('form.frm_avatar_register'),
            isValid = check_valid(form),
            isValidRegister = isValid?check_register(form):false,
            scrollToForm = $('html').animate({scrollTop: $('.form-lp').offset().top}, 1000);
        console.log(isValidRegister);
        if(isValid === false) scrollToForm;
        else if(isValidRegister === false) scrollToForm;
        else form.submit();
        e.preventDefault();
        return false;
    });

    function isEmail(email) {
      var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
      return emailPattern.test(email);
    }

    function check_valid(form) {
        var ERROR_NO_INPUT = '値を入力してください';
        var data = form.find('input.required,select.required').map(function() {
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
            var element = form.find('[name^='+name+']');
            var required = element.hasClass('required');
            if(required) {
                if(val == '' || val.length == 0) {
                    element.addClass('validate-error');
                    invalid.push(name);
                    if(name == 'ck_agree') {
                        $('label.ck_agree').css('color', '#ff0000');
                    }

                }
                else if(name == 'user_email') {
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
                else if(name == 'user_password') {
                    if(val.length < 6) {
                        element.addClass('validate-error');
                        invalid.push(name);
                    }
                    else {
                        element.removeClass('validate-error');
                    }
                }
                else {
                    element.removeClass('validate-error');
                    if(name == 'ck_agree') {
                        $('label.ck_agree').removeAttr('style');
                    }
                    // element.addClass('is-valid');
                }
            }
        });
        if(invalid.length > 0) return false;
        else return true;
    }

    function check_login(form) {
        var url = '/wp-admin/admin-ajax.php?action=user_login_ajax_avatar',
        user_email = form.find('input[name=user_email]').val(),
        user_password = form.find('input[name=user_password]').val();
        var invalid = $();
        $.ajax({
            'async': false,
            'type': "POST",
            'url': url,
            'data': {'user_email': user_email, 'user_password': user_password},
            'success': function (data) {
                data = JSON.parse(data)
                $.each(data, function(key, value) {
                    var element = form.find('[name^='+key+']');
                    if(value === false) {
                        element.addClass('validate-error');
                        invalid.push(key);
                    }
                });
            }
        })
        if(invalid.length > 0) return false;
        else return true;
    }
    function check_register(form) {
        var url = '/wp-admin/admin-ajax.php?action=user_signup_ajax_avatar',
        date = form.find('input[name=date]').val(),
        time = form.find('select[name=time]').val(),
        user_email = form.find('input[name=user_email]').val(),
        user_password = form.find('input[name=user_password]').val(),
        user_password2 = form.find('input[name=user_password2]').val();
        var invalid = $();
        if(user_password != user_password2) {
            form.find('input[name=user_password]').addClass('validate-error');
            form.find('input[name=user_password2]').addClass('validate-error');
            invalid.push('user_password');
            invalid.push('user_password2');
        }
        $.ajax({
            'async': false,
            'type': "POST",
            'url': url,
            'data': {'user_email': user_email, 'user_password': user_password, 'date': date, 'time': time},
            'success': function (data) {
                data = JSON.parse(data)
                $.each(data, function(key, value) {
                    var element = form.find('[name^='+key+']');
                    if(value === false) {
                        element.addClass('validate-error');
                        invalid.push(key);
                    }
                });
            }
        })
        if(invalid.length > 0) return false;
        else return true;
    }
})
