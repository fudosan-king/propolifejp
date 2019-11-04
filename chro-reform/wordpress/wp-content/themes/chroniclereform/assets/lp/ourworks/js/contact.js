$(function() {

    /*
        Developer: Khanh Nguyen PPL
        Fuction: Contact From script handler
    */

    var ERROR_NO_INPUT = '※ ご入力ください。';
    var ERROR_NO_SELECT = '※ ご選択ください。';
    var ERROR_MAIL_FORMAT = '※ 無効な形式。';
    var ERROR_MAIL_DIFFERENT = '※ 確認メールは一致する必要があります。';

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    var LIST_SHOWROOM_INFO = {
        '表参道本店' : new SHOWROOM(
                'クロニクル<br>表参道本店ショールーム',
                '住所：東京都港区北⻘⼭3-6-23 \
                    <br> フリーコール：0120-991-658 \
                    <br> 営業時間：10:00~19:00（⽕・⽔曜⽇定休 祝⽇を除く）',
                'http://www.chronicle-web.com/showroom/tokyo_omotesando/',
                'https://my.matterport.com/show/?m=kADWBSviwid&brand=0',
            ),
        '東京日本橋' : new SHOWROOM(
                'クロニクル<br>東京日本橋ショールーム',
                '住所：東京都中央区八重洲1-5-17 \
                    <br> 八重洲香川ビルディング2F \
                    <br> フリーコール：0120-602-423 \
                    <br> 営業時間：10:00~19:00（火・水曜日定休 祝日を除く）',
                'http://www.chronicle-web.com/showroom/tokyo_yaesu/',
                'https://my.matterport.com/show/?m=VHEQdZ6QNAh',
            ),
        '吉祥寺' : new SHOWROOM(
                'クロニクル<br>吉祥寺ショールーム',
                '住所：東京都武蔵野市吉祥寺本町 1 丁目 4 -18 \
                    <br> ジョージフォーラムビル 3F \
                    <br> フリーコール：0120-974-694 \
                    <br> 営業時間：10:00~19:00（火・水曜日定休 祝日を除く）',
                'http://www.chronicle-web.com/showroom/kichijoji/',
                'https://www.chronicle-web.com/showroom/static/assets/pc/images/pic_kichijoji-omiya.jpg',
                false
            ),
        '埼玉大宮' : new SHOWROOM(
                'クロニクル<br>埼玉大宮ショールーム',
                '住所：埼玉県さいたま市大宮区桜木町 1-7-5 \
                    <br> ソニックシティビル 16F \
                    <br> フリーコール：0120-990-566 \
                    <br> 営業時間：10:00~19:00（火・水曜日定休 祝日を除く）',
                'http://www.chronicle-web.com/showroom/saitama_omiya/',
                'https://www.chronicle-web.com/showroom/static/assets/pc/images/pic_kichijoji-omiya.jpg',
                false
            ),
        '横浜⻄⼝' : new SHOWROOM(
                'クロニクル<br>横浜⻄⼝ショールーム',
                '住所：神奈川県横浜市神奈川区鶴屋町2-23-2 TSプラザビルディング4F \
                    <br> フリーコール：0120-964-582 \
                    <br> 営業時間：10:00~19:00（⽕・⽔曜⽇定休 祝⽇を除く）',
                'http://www.chronicle-web.com/showroom/yokohama/',
                'https://my.matterport.com/show/?m=RoX8y5q3BS4',
            ),
        '名古屋伏見' : new SHOWROOM(
                'クロニクル<br>名古屋伏見ショールーム',
                '住所：愛知県名古屋市中区錦⼀丁⽬17番26号ラウンドテラス伏⾒ビル1F \
                    <br> フリーコール：0800-111-2758 \
                    <br> 営業時間：10:00~19:00（火・水曜日定休 祝日を除く）',
                'http://www.chronicle-web.com/showroom/nagoya_fushimi/',
                'https://my.matterport.com/show/?model=StMUHsrBco9&brand=0',
            ),
        '京都四条' : new SHOWROOM(
                'クロニクル<br>京都四条ショールーム',
                '住所：京都府京都市下京区四条通柳馬場西入立売中之町99 四条SETビル1F \
                    <br> フリーコール：0120-917-697 \
                    <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
                'https://www.chronicle-web.com/showroom/kyoto/',
                'https://my.matterport.com/show/?model=1pQPahYhq7p',
            ),
        '大阪梅田' : new SHOWROOM(
                'クロニクル<br>大阪梅田ショールーム',
                '住所：大阪府大阪市北区曽根崎2-12-7 \
                    <br> 清和梅田ビル5F \
                    <br> フリーコール：0120-957-953 \
                    <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
                'http://www.chronicle-web.com/showroom/osaka/',
                'https://my.matterport.com/show/?model=utuVeEZ8giT',
            ),
        '神戸元町' : new SHOWROOM(
                'クロニクル<br>神戸元町ショールーム',
                '〒650-0024 \
                    <br> 神戸市中央区海岸通3 シップ神戸海岸ビル1F \
                    <br> フリーコール：0120-948-301 \
                    <br> 営業時間: 10:00~19:00（火・水曜日定休 祝日を除く）',
                'https://www.chronicle-web.com/showroom/kobe/',
                'https://my.matterport.com/show/?m=iQfNoNcSASx&brand=0',
            ),
        '福岡天神' : new SHOWROOM(
                'クロニクル<br>福岡天神ショールーム',
                '住所：福岡県福岡市中央区天神2-4-11 \
                    <br> パシフィーク天神2F \
                    <br> フリーコール：0120-981-779 \
                    <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
                'https://www.chronicle-web.com/showroom/fukuoka_tenjin/',
                'https://my.matterport.com/show/?m=PGFv4MSTTLw&brand=0',
            ),
    }

    $('#datepicker').on('keypress', function(e){
        e.preventDefault();
    });
    $('#datepicker').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: 'ja',
        minDate: today,
        daysOfWeekDisabled: [2, 3],
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-arrow-up',
            down: 'fa fa-arrow-down',
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            close: 'fa fa-times'
        }
    });
    $('#datepicker').data("DateTimePicker").dayViewHeaderFormat('YYYY年 MMM');
    $('.i_calendar').click(function(){
        var dpk = $(this).closest('.box_datepicker').find('.dpk');
        var idpk = '#' + dpk.prop('id');
        $(idpk).data('DateTimePicker').toggle();
    })

    var requireInput = $('input[type="text"][required], textarea[required], select[required]');
    $.each(requireInput, function(i, e){
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

    $('select[name="show_room"]').change(function(val) {
        if ($(this).val() !== ''){
            var obj = LIST_SHOWROOM_INFO[$(this).val()];
            $('#showRoomInfo').html(obj.generateHTML());
        }else{
            $('#showRoomInfo').html('');
        }
    });

    function requireCondition(){
        if ($('input[name="category_contact[]"]:checked').val() == 'ショールーム来場予約')
        {
            $('textarea[name="free_detail_contact"]').removeAttr('required')
            $('textarea[name="free_detail_contact"]').val('');
            $('#w_inquiry').fadeOut();
            $('#w_inquiry_cfrm').addClass('force-hide');

            
            $('#datepicker').attr('required',true);
            $('select[name="visit_hour"]').attr('required',true);
            $('select[name="show_room"]').attr('required',true);
            $('#w_visit').fadeIn();
            $('#w_visit_cfrm').removeClass('force-hide');
            
        }else{
            $('textarea[name="free_detail_contact"]').attr('required',true);
            $('#w_inquiry').fadeIn();
            $('#w_inquiry_cfrm').removeClass('force-hide');

            $('#datepicker').removeAttr('required');
            $('select[name="visit_hour"]').removeAttr('required');
            $('select[name="show_room"]').removeAttr('required');
            $('#datepicker').val('');
            $('select[name="visit_hour"]').val('');
            $('select[name="show_room"]').val('');
            $('#w_visit').fadeOut();
            $('#w_visit_cfrm').addClass('force-hide');
            $('#showRoomInfo').html('');
        }
    }

    requireCondition();

    $('input[name="category_contact[]"]').on('change', function(){
        requireCondition();
    })

    // BUTTON HANDLER
    $('#ibtnConfirm').click(function(event){
        event.preventDefault();
        if (invalidCheck()){
            $('.frm_contact .box_register').fadeOut();
            $('.frm_contact .box_confirm').fadeIn();

            // SET CONFIRM INFO

            var collectInputText = $('input[type="text"]');
            $.each(collectInputText, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var collectSelect = $('select');
            $.each(collectSelect, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var collectTextArea = $('textarea');
            $.each(collectTextArea, function(i, e){
                var cfrmPrefix = '#cfrm_' + $(e).attr('name');
                $(cfrmPrefix).html($(e).val());
            });

            var cfrm_name =  $('input[name="last_name"]').val() + $('input[name="first_name"]').val();
            $('#cfrm_name').html(cfrm_name);

            var cfrm_visit_info =  $('input[name="visit_date"]').val() + ' '  + $('select[name="visit_hour"]').val()+ '</br>'  + $('select[name="show_room"]').val();
            $('#cfrm_visit_info').html(cfrm_visit_info);

            var cfrm_category_contact =  $('input[name="category_contact[]"]:checked').val();
            $('#cfrm_category_contact').html(cfrm_category_contact);

            var obj = LIST_SHOWROOM_INFO[$('select[name="show_room"]').val()];
            $('#cfrm_showRoomInfo').html(obj.generateHTML());

        }else{
            // $('html').animate({scrollTop: $('.error-required:first').offset().top - 100}, 1000, function(){});
            $('html').scrollTop($('.error-required:first').offset().top - 100);
        }

    });

    $('#ibtnGoBack').click(function(event){
        $('.frm_contact .box_register').fadeIn();
        $('.frm_contact .box_confirm').fadeOut();
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
        var htmlError = '<section class="error-box"><div class="icon"></div><p>' + message + '</p></section>';
        var formGroup = $(elem).closest('.form-group');
        formGroup.append(htmlError);
    }
    function removeErrorMessage(elem){
        var formGroup = $(elem).closest('.form-group');
        formGroup.find('.error-box').remove();
    }
    function callErrorMessageLine(elem, message){
        removeErrorMessageLine(elem);
        var htmlError = '<section class="error-box-line"><div class="icon"></div><p>' + message + '</p></section>';
        var formCheck = $(elem).closest('.form-check');
        formCheck.append(htmlError);
    }
    function removeErrorMessageLine(elem){
        var formCheck = $(elem).closest('.form-check');
        formCheck.find('.error-box-line').remove();
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
            if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass(e);
                callErrorMessage($(e), $(e).attr('id') == 'datepicker' ? ERROR_NO_SELECT : ERROR_NO_INPUT);
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
                callErrorMessage($(e), ERROR_NO_SELECT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });

        var requireTextarea = $('textarea[required]');
        $.each(requireTextarea, function(i, e){
            if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass($(e));
                callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }else{
                removeErrorClass($(e));
                removeErrorMessage($(e));
            }
        });


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

            } else {
                removeErrorClass($('input[name="email"]'));
                removeErrorMessage($('input[name="email"]'));

                if ($('input[name="email"]').val() != $('input[name="email_confirm"]').val()) {
                    setErrorClass($('input[name="email"]'));
                    callErrorMessage($('input[name="email"]'), ERROR_MAIL_DIFFERENT);
                    isValid = false;
                } else {
                    removeErrorClass($('input[name="email"]'));
                    removeErrorMessage($('input[name="email"]'));
                }
            }
        }

        if (!$('#iagree').is(':checked')) {
            setErrorClass($('#iagree'));
            callErrorMessageLine($('#iagree'), ERROR_NO_SELECT);
            isValid = false;
        }else{
            removeErrorClass($('#iagree'));
            removeErrorMessageLine($('#iagree'));
        }

        return isValid;
    }

    // $(window).scroll(function(event) {
    //     /* Act on the event */
    //     var errorBoxElem = $('.error-box');
    //     $.each(errorBoxElem, function(i, e){
    //         setTimeout(function(){
    //             if ($(window).scrollTop() + 150 >= $(e).offset().top){
    //                 $(e).fadeOut('400', function() {
    //                     $(e).remove();
    //                 });
    //             }
    //         }, 0);

    //     });
    // });

    

});

class SHOWROOM {
    constructor(title='', content='', webURL='', matterportURL='', isMatterport=true) {
        this.title = title;
        this.content = content;
        this.webURL = webURL;
        this.matterportURL = matterportURL;
        this.isMatterport = isMatterport;
    }
    generateHTML(){
        var urlTagHTML = '<iframe src="' + this.matterportURL + '" frameborder="0" width="100%" height="200"></iframe>';
        if (!this.isMatterport)
            urlTagHTML = '<img src="' + this.matterportURL + '" width="100%" height="200">';

        var showRoomHTML = '\
            <div class="row"> \
                <div class="col-12 col-md-6"> \
                    <div class="box_location_vr">' + urlTagHTML + '</div> \
                </div> \
                <div class="col-12 col-md-6">\
                    <div class="box_location_title"> \
                        <div class="row"> \
                            <div class="col-8 col-md-8 align-self-center"> \
                                <h3><a target="_blank" href="' + this.webURL + '">' + this.title + '</a></h3> \
                            </div> \
                            <div class="col-4 col-md-4 align-self-center"> \
                                <a target="_blank" class="btnMap" href="' + this.webURL + '">Map <i class="fal fa-angle-right"></i></a> \
                            </div> \
                        </div> \
                    </div> \
                    <p class="box_location_info">' + this.content + '</p> \
                </div> \
            </div>';
        return showRoomHTML;
    }
}

// SCRIPT GENERATE DATA TO TEST FORM CONTACT
function demo(){
    var collectInputText = $('input[type="text"]');
    $.each(collectInputText, function(i, e){
        if ($(e).attr('name')!='visit_date'){
            var cfrmPrefix = '#cfrm_' + $(e).attr('name');
            $(e).val('TEST ' + cfrmPrefix);
        }
    });
    var collectTextArea = $('textarea');
    $.each(collectTextArea, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    $('input[name="email"]').val('khanh@fudosan-king.jp');
    $('input[name="email_confirm"]').val('khanh@fudosan-king.jp');
    $('select[name="visit_hour"]').val('10:00');
    $('select[name="show_room"]').val('表参道本店');
    console.log('Generate data successfully ...');
    return false;
}