jQuery(function($) {
    $(".navbar-toggle").on("click", function() {
        $(this).toggleClass("active");
    });

    //matchHeight columm
    $('.boxmH').matchHeight();

});

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.scroll_to_top').fadeIn();
    } else {
        $('.scroll_to_top').fadeOut();
    }
});



$('.scroll_to_top').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 800);
});

//---------------------------------------------------



//---------------------------------------------------

// KHANH NGUYEN PROCESS CODE

var ERROR_NO_INPUT = '値を入力してください';
var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

// GET QUERY STRING
function getQueryStr() {
    var res = {};
    var strSearch = window.location.search;
    strSearch = strSearch.substr(1, strSearch.length);
    var arrQParams = strSearch.split('&');

    $.each(arrQParams, function(index, el) {
        var tmp = el.split('=');
        res[tmp[0]] = tmp[1];
    });

    return res;
}
var queryString = getQueryStr();

// VALIDATE FORM DATA
function invalidCheck() {

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';
    var validFlagColor = '#F8B102';

    $.each($('.require-flag'), function(index, val) {
        /* iterate through array or object */
        $(val).css('background-color', validFlagColor);
    });

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        $('input[name="first-name"]'),
        $('input[name="last-name"]'),
        
        $('input[name="company"]'),
        $('input[name="phone-number"]'),

        $('input[name="email"]'),


        $('input[name="showroom"]'),


        $('input[name="secret-info"]'),


    ];

    $.each(elemsChk, function(key, elem) {

        if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'checkbox') {
            if (!$(this).is(':checked')) {
                $(this).closest('.checkbox').css('color', '#ff0700');
                isValid = false;


                if (elem.prop('name') == 'secret-info') {

                    $('.require-flag.secret-info').css('background-color', '#ff0700');
                }

            } else {
                $(this).closest('.checkbox').css('color', 'initial');

            }
        } else {
            if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'radio') {

                if (elem.prop('name') == 'showroom') {

                    if (!$(this).is(':checked')) {
                        $(this).closest('.radio').css('color', '#ff0700');

                        isValid = false;


                        $('.require-flag.showroom').css('background-color', '#ff0700');
                    } else {
                        $(this).closest('.radio').css('color', 'initial');

                    }
                }

            } else {
                if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {

                    // if(elem.prop('name') != 'job-style-desc' && elem.prop('name') != 'showroom-etc'){
                    if (elem.prop('name') != 'showroom-etc') {
                        elem.css({
                            'background-color': invalidColor,
                            'border-color': '#ff0700'
                        });
                        isValid = false;

                        // Set error text
                        if (elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name') {

                            $('.require-flag.name').css('background-color', '#ff0700');
                        }
                        
                        if (elem.prop('name') == 'company') {
                            $('.require-flag.company').css('background-color', '#ff0700');
                        }

                        if (elem.prop('name') == 'phone-number') {
                            $('.require-flag.phone-number').css('background-color', '#ff0700');
                        }

                        if (elem.prop('name') == 'email') {
                            $('.require-flag.email').css('background-color', '#ff0700');
                        }
                    }

                } else {
                    elem.css({
                        'background-color': 'initial',
                        'border-color': '#ccc'
                    });

                }
            }
        }

    });

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    if (!emailPattern.test($('input[name="email"]').val())) {
        $('input[name="email"]').css({
            'background-color': invalidColor,
            'border-color': '#ff0700'
        });

        isValid = false;


        $('.require-flag.email').css('background-color', '#ff0700');

    } else {
        $('input[name="email"]').css({
            'background-color': 'initial',
            'border-color': '#ccc'
        });
    }

    return isValid;
}

$(document).ready(function() {

    // CONDITION TO DISPLAY FORM TYPE
    $('.form-title').html('パース制作のお問い合わせ');

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function() {

        if (invalidCheck()) {

            $('.form_info.input').fadeOut();
            $('.form_info.confirm').fadeIn(function() {
                $('html').scrollTop(0);
            });
            $($('.step ol li')[0]).removeClass('active');
            $($('.step ol li')[1]).addClass('active');

            var cfrm_name = $('input[name="first-name"]').val() + $('input[name="last-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_company = $('input[name="company"]').val();
            $('.cfrm_company').html(cfrm_company);

            var cfrm_phonenumber = $('input[name="phone-number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_showroom = $('input[name="showroom"]:checked').val();
            $('.cfrm_showroom').html(cfrm_showroom);

            var cfrm_comments = $('textarea[name="iken"]').val();
            $('.cfrm_comments').html(cfrm_comments);

            dataLayer.push({
                'event': 'inquiry-confirm-nakanotetsugakudo-reservation'
            });

        } else {
            $('html').animate({
                scrollTop: $('form').offset().top
            }, 1000, function() {});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function() {
        $('.form_info.input').fadeIn(function() {
            $('html').scrollTop($('form').offset().top);
        });
        $('.form_info.confirm').fadeOut();
        $($('.step ol li')[1]).removeClass('active');
        $($('.step ol li')[0]).addClass('active');
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function() {
        if (invalidCheck()) {

            // RE-SET VALUE ON FINAL TURN
            $('form input[type="text"]').each(function() {
                if ($(this).val() == '')
                    $(this).val('null');
            });

            $('form textarea').each(function() {
                if ($(this).val() == '')
                    $(this).val('null');
            });

            $('.frm_contact').submit();
        } else {
            $('#goBack').click();
        }
    });

    // BUTTON TEST ACTION
    $('#goTest').click(function() {
        console.log(queryString['reservation']);
    });
});