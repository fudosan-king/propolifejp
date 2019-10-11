<?php 
/*Template Name: Contact Page */

get_template_part( 'header', 'contact' );
?>

<section id="mainVisual" class="sp-force">
    <h2 class="headLine01"> </h2>
</section>
<div id="pagePath"><div class="inner">
<?php if(function_exists('bcn_display')) { bcn_display();} ?>
</div></div>
<div id="main">
    <section id="pressrelease">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content-inner">

                <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>
                    <h2>エントリーありがとうございます。</h2>
                    <p>書類選考後、通過者のみ次回選考のご連絡をいたします。<br>
                        ※応募書類は返却いたしませんので、あらかじめご了承ください。<br>
                    選考終了後、当社が責任を持って破棄します。</p>
                    <p>《株式会社プロポライフグループ》東京都中央区⼋重洲1-5-17 ⼋重洲⾹川ビルディング8F<br>
                    電話：0120-933-759</p>
                <?php else: ?>
                    <form action="https://go.pardot.com/l/185822/2019-07-04/hqd32n" method="POST" role="form" class="frm_contact">
                        <h2 class="form-title" style="margin-bottom: 30px;">エントリーフォーム</h2>

                        <p align="center">
                            必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                            <span class="red">＊</span>がついている項目はご記入必須項目になります。
                        </p>
                        <dl class="Rtable Rtable--3cols Rtable--collapse table_register">

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>希望採用過程</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ul class="list_interest">
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="job_type[]" id="" value="中途採用" checked="checked" onchange=""> 中途採用
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="job_type[]" id="job_type_1" value="新卒採用" onchange=""> 新卒採用
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="job_type[]" id="job_type_2" value="アルバイト・その他" onchange=""> アルバイト・その他
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <input type="hidden" name="employment_screening" id="iemployment_screening" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>希望職種（併願も可能です）  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="form-group">
                                    <input name="job" type="job" class="form-control" id="job" placeholder="">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text job">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>


                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お名前 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="last-name" id="last-name" type="text" class="form-control" placeholder="姓" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="first-name" id="first-name" type="text" class="form-control" placeholder="名" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text name">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>フリガナ <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="myouji" type="text" class="form-control" id="myouji" placeholder="セイ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="namae" type="text" class="form-control" id="namae" placeholder="メイ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text phonetic">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>年齢 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="age" type="number" class="form-control" id="age" placeholder="" min="1" max="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text age">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>性別 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                            <select name="gender" id="gender" class="form-control" required="required" onchange="">
                                                <option value="null">▼ 選択してください </option>
                                                <option value="男性">男性</option>
                                                <option value="女性">女性</option>
                                                <option value="その他">その他</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </dd>
                            
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>メールアドレス  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="">
                                </div>
                                <div class="form-group">
                                    <p>（確認用）</p>
                                    <input name="email-confirm" type="email" class="form-control" id="" placeholder="">
                                     <p style="margin-top:10px; margin-bottom:0">（半角英数）</p>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text email">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>電話番号 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text phone">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>履歴書（PDFにてご登録ください</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="form-group">
                                    <input type="file" id="fileResume">
                                    <input type="hidden" name="resume_url" id="resume_url" class="form-control" value="">
                                </div>
                                <p class="requiment-notice">※PDFファイルは、ファイル名を半角英数で設定して登録してください（例：rireki_yamada-taro.pdf)</p>
                            </dd>
                            
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>職務経歴書（PDFにてご登録ください）</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="form-group">
                                    <input type="file" id="fileRecord">
                                    <input type="hidden" name="curriculum_vitae_url" id="curriculum_vitae_url" class="form-control" value="">
                                </div>
                                <p class="requiment-notice">※PDFファイルは、ファイル名を半角英数で設定して登録してください（例：keireki_yamada-hanako.pdf)</p>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>ご質問がありましたら、こちらにご入力ください。</strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <textarea name="description" id="description" class="form-control" rows="5" required="required"></textarea>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>個人情報の取扱について <span class="red">＊</span>

                      </strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="box_dot">
                                    <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                </div>
                                <p><a class="btn btn-link" href="https://www.propolife.co.jp/privacypolicy/">▶「プライバシーポリシー」を開く</a></p>
                                <div class="checkbox">
                                    <label>
                                        <input name="secret-info" type="checkbox" id="" value="同意する" checked="" onchange=""> 同意する
                                    </label>
                                </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text secret-info" style="margin-top: 15px;">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>
                            <!-- <dt class="Rtable-cell Rtable-cell--medium"><strong></strong></dt> -->
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center" style="border-bottom: none;">
                                <input type="button" class="btn btn-lg btnForm" id="goConfirm" value="入力内容を確認する">
                               <!--  <input type="button" class="btn btn-lg btnForm" id="goTest" value="BUTTON TEST"> -->
                            </dd>
                        </dl>

                        <dl class="Rtable Rtable--3cols Rtable--collapse table_confirm" style="display: none;">
                            
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>希望採用過程</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_jobprocess">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>希望職種（併願も可能です）<span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_job">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お名前 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row cfrm_name">

                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>フリガナ <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_phonetic">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>年齢 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_age">

                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>性別  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_gender">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>メールアドレス  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                 <div class="row  cfrm_email">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>電話番号 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_phone">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>履歴書（PDFにてご登録ください</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_resume">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>職務経歴書（PDFにてご登録ください）</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_jobrecord">

                                </div>
                            </dd>
                            

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>ご質問がありましたら、こちらにご入力ください。</strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                               <div class="row  cfrm_description">

                                </div>
                            </dd>

                            <!-- <dt class="Rtable-cell Rtable-cell--medium"><strong></strong></dt> -->
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center" style="border-bottom: none;">
                                <input type="button" class="btn btn-lg btnForm" id="goBack" value="戻る"> &nbsp;
                                <input type="button" class="btn btn-lg btnForm" id="goSubmit" value="送信する">
                            </dd>
                        </dl>


                    </form>
                <?php endif; ?>
            </div>
        
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>
<p><!-- /#main --></p>

<?php get_footer(); ?>

<script>
    
//---------------------------------------------------

// KHANH NGUYEN PROCESS CODE

var ERROR_NO_INPUT = '値を入力してください';
var ERROR_MAIL_FORMAT = 'メールアドレスの形式が正しくありません';
var ERROR_MAIL_NOTSAME = '電子メールの確認は異なる';

// GET QUERY STRING
function getQueryStr(){
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
function invalidCheck(){

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        $('input[name="job"]'),
        $('input[name="first-name"]'),
        $('input[name="last-name"]'),

        $('input[name="myouji"]'),
        $('input[name="namae"]'),

        $('input[name="age"]'),

        $('select[name="gender"]'),

        $('input[name="phone"]'),

        $('input[name="email"]'),
        $('input[name="email-confirm"]'),
        
        $('input[name="secret-info"]'),
    ];

    $.each(elemsChk, function(key, elem){

        if(typeof($(this)) !== 'undefined' && $(this).prop('type')=='checkbox'){
            if(!$(this).is(':checked')){
                $(this).closest('.checkbox').css('background-color', invalidColor);
                $(this).closest('.checkbox').css('padding', '2px 4px');
                isValid = false;

            }else{
                $(this).closest('.checkbox').css('background-color', 'initial');
                $(this).closest('.checkbox').css('padding', 'initial');
            }
        }else{
            if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
                elem.css('background-color', invalidColor);
                isValid = false;

                // Set error text
                if(elem.prop('name') == 'job'){
                    $('.error-text.job').html(ERROR_NO_INPUT);
                    $('.error-text.job').css('display', 'block');
                }

                if(elem.prop('name') == 'first-name' || elem.prop('name') == 'last-name'){
                    $('.error-text.name').html(ERROR_NO_INPUT);
                    $('.error-text.name').css('display', 'block');
                }

                if(elem.prop('name') == 'myouji' || elem.prop('name') == 'namae'){
                    $('.error-text.phonetic').html(ERROR_NO_INPUT);
                    $('.error-text.phonetic').css('display', 'block');
                }

                if(elem.prop('name') == 'age'){
                    $('.error-text.age').html(ERROR_NO_INPUT);
                    $('.error-text.age').css('display', 'block');
                }

                if(elem.prop('name') == 'phone'){
                    $('.error-text.phone').html(ERROR_NO_INPUT);
                    $('.error-text.phone').css('display', 'block');
                }

                if(elem.prop('name') == 'email' || elem.prop('name') == 'email-confirm'){
                    $('.error-text.email').html(ERROR_NO_INPUT);
                    $('.error-text.email').css('display', 'block');
                }

            }else{
                elem.css('background-color', 'initial');
            }
        }

    });

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    console.log(emailPattern.test($('input[name="email"]').val()));
    if (!emailPattern.test($('input[name="email"]').val())){
        $('input[name="email"]').css('background-color', invalidColor);
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_FORMAT);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email"]').css('background-color', 'initial');
    }


    if($('input[name="email-confirm"]').val() != $('input[name="email"]').val()){
        $('input[name="email-confirm"]').css('background-color', invalidColor);
        isValid = false;

        $('.error-text.email').html(ERROR_MAIL_NOTSAME);
        $('.error-text.email').css('display', 'block');

    }else{
        $('input[name="email-confirm"]').css('background-color', 'initial');
    }

    return isValid;
}

$(document).ready(function(){

    var reservation = typeof(queryString['reservation'])!=='undefined' ? queryString['reservation'] : null;
    var material = typeof(queryString['material'])!=='undefined' ? queryString['material'] : null;



    // Bootstrap Datepicker configuration
    // $('#iraijo-date').datepicker({
    //     language: 'ja',
    //     autoclose: true,
    //     todayHighlight: true,
    //     beforeShowDay: function (date){
    //     var toDay = (new Date());
    //     toDay.setDate(toDay.getDate() - 1);
    //     if (date.getTime() < toDay.getTime()){
    //                     return false;
    //             }
    //         // if (date.getMonth() == (new Date()).getMonth())
    //         //     switch (date.getDate()){
    //         //         case 4:
    //         //             return {
    //         //               tooltip: 'Example tooltip',
    //         //               classes: 'active'
    //         //             };
    //         //         case 8:
    //         //             return false;
    //         //         case 12:
    //         //             return "green";
    //         // }
    //     },
    //     // datesDisabled: ['09/06/2017', '09/21/2017']

    // });


    // CONDITION TO DISPLAY FORM TYPE
    $('.form-title').html('お問い合わせ');

    // BUTTON SET AJAXZIP2ADDRESS
    $('.mt5').click(function(){

        $('input[name="post"]').keyup();
    });

    // BUTTON SET CONFIRM ACTION
    $('#goConfirm').click(function(){

        if(invalidCheck()){

            $('.table_register').fadeOut();
            $('.table_confirm').fadeIn(function(){
                 $('body').scrollTop(0);
            });

            var cfrm_jobprocess =  $('input[name="job_type[]"]:checked').val();
            $('.cfrm_jobprocess').html(cfrm_jobprocess);
            $('input[name="employment_screening"]').val(cfrm_jobprocess);

            var cfrm_job = $('input[name="job"]').val();
            $('.cfrm_job').html(cfrm_job);

            var cfrm_name = $('input[name="last-name"]').val() + $('input[name="first-name"]').val();
            $('.cfrm_name').html(cfrm_name);

            var cfrm_phonetic = $('input[name="myouji"]').val() + $('input[name="namae"]').val();
            $('.cfrm_phonetic').html(cfrm_phonetic);

            var cfrm_age = $('input[name="age"]').val();
            $('.cfrm_age').html(cfrm_age);

            var cfrm_gender = $('select[name="gender"]').val();
            $('.cfrm_gender').html(cfrm_gender);

            var cfrm_email = $('input[name="email"]').val();
            $('.cfrm_email').html(cfrm_email);

            var cfrm_phone = $('input[name="phone"]').val();
            $('.cfrm_phone').html(cfrm_phone);

            var cfrm_resume = $('input[type=file]#fileResume')[0].files[0].name;
            $('.cfrm_resume').html(cfrm_resume);

            var cfrm_jobrecord = $('input[type=file]#fileRecord')[0].files[0].name;
            $('.cfrm_jobrecord').html(cfrm_jobrecord);

            var cfrm_description = $('textarea[name="description"]').val();
            $('.cfrm_description').html(cfrm_description);

            // dataLayer.push({'event': 'inquiry-confirm-nihonbashi-material'});

        }else{
            $('html').animate({scrollTop: 0}, 1000, function(){});
        }
    });

    // BUTTON SET GO BACK ACTION
    $('#goBack').click(function(){
        $('.table_register').fadeIn(function(){
            $('html').scrollTop(0);
        });
        $('.table_confirm').fadeOut();
    });

    // BUTTON SET SUBMIT FORM ACTION
    $('#goSubmit').click(function(){
        if(invalidCheck()){

            // RE-SET VALUE ON FINAL TURN
            $('form input[type="text"]').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            $('form textarea').each(function(){
                if($(this).val() == '')
                    $(this).val('null');
            });

            var fd = new FormData();
            fd.append("resume",$('input[type=file]#fileResume')[0].files[0]);
            fd.append("record",$('input[type=file]#fileRecord')[0].files[0]);
            $.ajax({
                url: '<?php echo get_stylesheet_directory_uri()."/upload-feature.php"; ?>',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
            })
            .success(function(data) {
                console.log(data);
                $('input[name="resume_url"]').val(data.resume_link);
                $('input[name="curriculum_vitae_url"]').val(data.record_link);
                $('.frm_contact').submit();
            })
            .fail(function(e) {
                console.log(e);
            })

            
        }else{
            $('#goBack').click();
        }
    });

    // BUTTON TEST ACTION
    $('#goTest').click(function(){
        console.log(queryString['reservation']);
    });
});

</script>