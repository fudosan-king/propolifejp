<?php 
/*
    Template Name: Campaign 01  
*/
?>

<?php
get_header();
?>

    <section class="section_logo_underpage">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/" class="logo"><img src="<?php echo TEMPLATE_ASSETS_PATH; ?>/img/1x/logo_underpage.png" alt="" class="img-fluid" width="200"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section_contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">キャンペーン</h2>
                    
                    <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>
                        <div style="
                            font-size:16pt;
                            text-align:center;
                            padding: 10% 0;
                            border: #efefef 1px solid;
                            margin-bottom: 5%;
                            -webkit-box-shadow: 10px 10px 15px 0px rgba(171,171,171,0.87);
                            -moz-box-shadow: 10px 10px 15px 0px rgba(171,171,171,0.87);
                            box-shadow: 10px 10px 15px 0px rgba(171,171,171,0.87);
                        ">お問い合わせありがとうございました。</div>
                    <?php else: ?>
                        <p class="text-center">必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                        <span class="red">＊</span>がついている項目はご記入必須項目になります。</p>

                        <form action="https://go.pardot.com/l/185822/2020-06-30/q7x71b" method="POST" role="form" class="frm_handler">
                                                    
                            <section class="defaultForm">

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">名前 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="row mb-2 mb-md-0">
                                                    <div class="col-2 col-md-2 align-self-center">
                                                        <label for="">姓</label>
                                                    </div>
                                                    <div class="col-10 col-md-10 align-self-center">
                                                        <input type="text" name="family_name" id="family_name" class=" form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="row mb-2 mb-md-0">
                                                    <div class="col-2 col-md-2 align-self-center">
                                                        <label for="">名</label>
                                                    </div>
                                                    <div class="col-10 col-md-10 align-self-center">
                                                        <input type="text" name="first_name" id="first_name" class=" form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">カタカナ <span class="red">（※）</span>（全角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="row mb-2 mb-md-0">
                                                    <div class="col-2 col-md-2 align-self-center">
                                                        <label for="">セイ</label>
                                                    </div>
                                                    <div class="col-10 col-md-10 align-self-center">
                                                        <input type="text" name="family_name_kana" id="family_name_kana" class=" form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="row mb-2 mb-md-0">
                                                    <div class="col-2 col-md-2 align-self-center">
                                                        <label for="">メイ</label>
                                                    </div>
                                                    <div class="col-10 col-md-10 align-self-center">
                                                        <input type="text" name="first_name_kana" id="first_name_kana" class=" form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">会社名<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <input type="text" name="company_name" id="company_name" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">電話番号<span class="red">（※）</span>（半角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">E-mail<span class="red">（※）</span>（半角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <input type="email" name="email" id="email" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">E-mail再入力<span class="red">（※）</span>（半角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <input type="email" name="re_email" id="re_email" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 text-center">
                                        <input type="button" class="btn btnConfirmation mx-auto" id="goConfirm" value="確認">

                                    </div>
                                </div>

                            </section>

                            <section class="confirmForm">

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">名前 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="cfr_name"></div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">カタカナ <span class="red">（※）</span>（全角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="cfr_name_kana"></div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">会社名 <span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="cfr_company_name"></div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">電話番号 <span class="red">（※）</span>（半角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="cfr_phone_number"></div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 col-md-3 align-self-center">
                                        <label for="">E-mail<span class="red">（※）</span>（半角）</label>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <div class="cfr_email"></div>
                                    </div>
                                </div>

                                <div class="row row_line">
                                    <div class="col-12 text-center">
                                        <input type="button" class="btn btnConfirmation mx-auto" id="goBack" value="戻る"> &nbsp;
                                        <input type="submit" class="btn btnConfirmation mx-auto" id="goSubmit" value="送信する">
                                    </div>
                                </div>
                            </section>

                           <input type="hidden" name="post" id="ipost" class="form-control" value="">

                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
