/* Author: Khanh Nguyen PPL */
/* Description: Process estimation and contact form */
/* Published: 2020 */

$(function() {

    /* CONTACT PART */

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
                                    <a target="_blank" class="btnMap" href="' + this.webURL + '">Map </a> \
                                </div> \
                            </div> \
                        </div> \
                        <p class="box_location_info">' + this.content + '</p> \
                    </div> \
                </div>';
            return showRoomHTML;
        }
    }

    var LIST_SHOWROOM_INFO = {
        '表参道本店' : new SHOWROOM(
                'クロニクル<br>表参道本店ショールーム',
                '住所：東京都港区北⻘⼭3-6-23 \
                    <br> フリーコール：0120-991-657 \
                    <br> 営業時間：10:00~19:00（⽕・⽔曜⽇定休 祝⽇を除く）',
                'http://www.chronicle-web.com/showroom/tokyo_omotesando/',
                'https://my.matterport.com/show/?m=kADWBSviwid&brand=0',
            ),
        '東京日本橋' : new SHOWROOM(
                'クロニクル<br>東京日本橋ショールーム',
                '住所：東京都中央区八重洲1-5-17 \
                    <br> 八重洲香川ビルディング2F \
                    <br> フリーコール：0120-991-657 \
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
        // '埼玉大宮' : new SHOWROOM(
        //         'クロニクル<br>埼玉大宮ショールーム',
        //         '住所：埼玉県さいたま市大宮区桜木町 1-7-5 \
        //             <br> ソニックシティビル 16F \
        //             <br> フリーコール：0120-990-566 \
        //             <br> 営業時間：10:00~19:00（火・水曜日定休 祝日を除く）',
        //         'http://www.chronicle-web.com/showroom/saitama_omiya/',
        //         'https://www.chronicle-web.com/showroom/static/assets/pc/images/pic_kichijoji-omiya.jpg',
        //         false
        //     ),
        '横浜西口' : new SHOWROOM(
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
        // '京都四条' : new SHOWROOM(
        //         'クロニクル<br>京都四条ショールーム',
        //         '住所：京都府京都市下京区四条通柳馬場西入立売中之町99 四条SETビル1F \
        //             <br> フリーコール：0120-917-697 \
        //             <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
        //         'https://www.chronicle-web.com/showroom/kyoto/',
        //         'https://my.matterport.com/show/?model=1pQPahYhq7p',
        //     ),
        // '大阪梅田' : new SHOWROOM(
        //         'クロニクル<br>大阪梅田ショールーム',
        //         '住所：大阪府大阪市北区曽根崎2-12-7 \
        //             <br> 清和梅田ビル5F \
        //             <br> フリーコール：0120-957-953 \
        //             <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
        //         'http://www.chronicle-web.com/showroom/osaka/',
        //         'https://my.matterport.com/show/?model=utuVeEZ8giT',
        //     ),
        // '神戸元町' : new SHOWROOM(
        //         'クロニクル<br>神戸元町ショールーム',
        //         '〒650-0024 \
        //             <br> 神戸市中央区海岸通3 シップ神戸海岸ビル1F \
        //             <br> フリーコール：0120-948-301 \
        //             <br> 営業時間: 10:00~19:00（火・水曜日定休 祝日を除く）',
        //         'https://www.chronicle-web.com/showroom/kobe/',
        //         'https://my.matterport.com/show/?m=iQfNoNcSASx&brand=0',
        //     ),
        // '福岡天神' : new SHOWROOM(
        //         'クロニクル<br>福岡天神ショールーム',
        //         '住所：福岡県福岡市中央区天神2-4-11 \
        //             <br> パシフィーク天神2F \
        //             <br> フリーコール：0120-981-779 \
        //             <br> 営業時間：10:00~19:00 (火・水曜日定休 祝日を除く）',
        //         'https://www.chronicle-web.com/showroom/fukuoka_tenjin/',
        //         'https://my.matterport.com/show/?m=PGFv4MSTTLw&brand=0',
        //     ),
    }

    $.each(LIST_SHOWROOM_INFO, function(label, el) {
        $('#ishow_room').append('<option value="' + label + '">' + label + '</option>');
    });

    $('select[name="show_room"]').change(function(val) {
        if ($(this).val() !== ''){
            var obj = LIST_SHOWROOM_INFO[$(this).val()];
            $('#showRoomInfo').html(obj.generateHTML());
        }else{
            $('#showRoomInfo').html('');
        }
    });

    for(var i = 10; i<19; i++){
        var strTime = i + ':00';
        $('#ivisit_hour').append('<option value="' + strTime + '">' + strTime + '</option>');
    }

    $('#ivisit_date').datepicker({
        format: 'yyyy/mm/dd',
        language: 'ja',
        autoclose: true,
        // defaultDate: moment('2020/02/22'),
        // setDate: availableDate,
        todayHighlight: true,
        // startDate: '+31d',
        beforeShowDay: function(date) {
            var toDay = (new Date());
            toDay.setDate(toDay.getDate() - 1);
            if (date.getTime() < toDay.getTime()) {
                return false;
            }

            if (date.getDay() == 2 || date.getDay() == 3) {
                return false;
            }
        },
    });

    $('.visit_date_wrapper .svg-inline--fa').click(function(event) {
        /* Act on the event */
        $('#ivisit_date').focus();
    });

    var ERROR_NO_INPUT = '値を入力してください';
    var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
    var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

    function invalidCheck() {

        var isValid = true;
        var invalidBackgroundColor = 'rgba(255, 0, 0, 0.02)';
        var validFlagColor = '#F8B102';

        var invalidBoxShadow = '0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)';
        var invalidBorderColor = '#ff0000';

        // EMPTY CHECK

        var elemsChk = [
            $('input[name="last_name"]'),
            $('input[name="first_name"]'),

            $('input[name="category_contact[]"]'),

            $('input[name="phone_number"]'),

            $('input[name="email"]'),

            $('input[name="secret_info"]'),


        ];

        $.each(elemsChk, function(key, elem) {

            if (typeof($(this)) !== 'undefined'){
                switch($(this).prop('type')){
                    case 'checkbox': {
                        if (!$(this).is(':checked')) {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', '#ff0000');
                            isValid = false;
                        } else {
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                            });
                            $(this).closest('.checkbox_wrapper').find('label').css('color', 'initial');
                        }
                    }break;
                    case 'text': {
                        if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {
                            elem.css({
                                'box-shadow': invalidBoxShadow,
                                'border-color': invalidBorderColor,
                                'background-color': invalidBackgroundColor,
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#ff0000');
                            isValid = false;
                        }else{
                            elem.css({
                                'box-shadow': 'initial',
                                'border-color': 'initial',
                                'background-color': 'initial',
                            });
                            $('.require-flag.' + elem.attr('name')).css('background-color', '#a40000');
                        }
                    }break;
                }
            }

        });

        // EMAIL CHECK
        var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        if (!emailPattern.test($('input[name="email"]').val())) {
            $('input[name="email"]').css({
                'box-shadow': invalidBoxShadow,
                'border-color': invalidBorderColor,
            });

            isValid = false;

            $('.require-flag.email').css('background-color', '#ff0000');

        } else {
            $('input[name="email"]').css({
                'box-shadow': 'initial',
                'border-color': 'initial',
            });
            $('.require-flag.email').css('background-color', '#a40000');
        }

        if(!isValid){
            $('html, body').animate({
                scrollTop: $(".frm_consult_shoroom").offset().top
            }, 700);
        }

        return isValid;
    }

    // BUTTON SET CONFIRM ACTION
    $('#ibtnConfirm').click(function(event) {
        event.preventDefault();

        if (invalidCheck()) {

            $('.data-input').fadeOut();
            $('.data-confirm').fadeIn();

            var html_category_contact = '';
            $.each($('input[name="category_contact[]"]:checked'), function(index, el) {
                html_category_contact += $(el).val() + '<br>';
            });
            $('.cfrm_category_contact').html(html_category_contact);

            var cfrm_name = $('input[name="first_name"]').val() + $('input[name="last_name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_phonenumber = $('input[name="phone_number"]').val();
            $('.cfrm_phonenumber').html(cfrm_phonenumber);

            var obj = LIST_SHOWROOM_INFO[$('select[name="show_room"]').val()];
            $('#showRoomInfoConfirm').html(obj.generateHTML());

            var cfrm_location = $('select[name="show_room"]').val() + ' ' + $('input[name="visit_date"]').val() + ' ' + $('select[name="visit_hour"]').val();
            $('.cfrm_location').html(cfrm_location);

            var cfrm_comments = $('textarea[name="free_detail_contact"]').val();
            $('.cfrm_comments').html(cfrm_comments);

        } else {
            // $('html').animate({
            //     scrollTop: $('.frm_consult_shoroom').offset().top
            // }, 1000, function() {});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function() {
        $('.data-input').fadeIn(function() {
            $('html').scrollTop($('.frm_consult_shoroom').offset().top);
        });
        $('.data-confirm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function() {
        if (invalidCheck()) {
            $('.frm_consult_shoroom').submit();
        } else {
            $('#goBack').click();
        }
    });
});

function demo(){
    var collectInputText = $('input[type="text"]');
    $.each(collectInputText, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    var collectTextArea = $('textarea');
    $.each(collectTextArea, function(i, e){
        var cfrmPrefix = '#cfrm_' + $(e).attr('name');
        $(e).val('TEST ' + cfrmPrefix);
    });
    $('input[name="email"]').val('khanh@propolife.co.jp');
    
    $('#ishow_room').val('東京日本橋');
    $('#ivisit_hour').val('10:00');

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#ivisit_date').datepicker('setDate', today);
}