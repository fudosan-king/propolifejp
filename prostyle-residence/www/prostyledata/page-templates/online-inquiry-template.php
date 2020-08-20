<?php 
/* Template Name: Online Inquiry - Page Template */
?>

<?php get_header();?>

<div class="space"></div>
<section class="section_subbanner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>オンライン相談ご予約フォーム</h1>
                <ul class="breadcrumb_reservation d-flex">
                    <li class="flex-fill input active"> <a href="#">入力</a> </li>
                    <li class="flex-fill confirm"> <a href="#">確認</a> </li>
                    <li class="flex-fill finish"> <a href="#">完了</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<main>
    <section class="section_reservation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>
                        <div style="
                        color:#AE8148;
                        font-size:16pt; 
                        text-align:center; 
                        padding: 8%; 
                        border: #e8e8e8 1px solid;
                        border-radius: 10px;
                        width: 70%;
                        margin: 0 auto;
                        line-height: 1.6;
                        -webkit-box-shadow: 12px 12px 13px 1px rgba(0,0,0,0.32);
                        -moz-box-shadow: 12px 12px 13px 1px rgba(0,0,0,0.32);
                        box-shadow: 12px 12px 13px 1px rgba(0,0,0,0.32);
                        ">
                            ご予約ありがとうございました。
                        </div>
                    <?php else: ?>                   
                        <form action="https://go.pardot.com/l/185822/2020-07-16/q9v5sf" name="pardotForm" id="pardotForm" class="frm_reservation" method="POST">
                            <section class="data-input">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 align-self-center">
                                            <label for="">物件名 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-10 col-lg-10 align-self-center">
                                            <select name="property_name" id="" class="form-control custom-select" data-require="true"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">氏名 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">姓</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="last_name" class="form-control" placeholder="例：山田" data-require="true"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">名</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="first_name" class="form-control" placeholder="例：太郎" data-require="true"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">氏名（ふりがな） <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">せい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="myouji" class="form-control" placeholder="例：やまだ" data-require="true"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">めい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" name="namae" class="form-control" placeholder="例：たろう" data-require="true"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 align-self-center">
                                            <label for="">E-mail <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-10 col-lg-10 align-self-center">
                                            <input type="email" name="email" id="email" class="form-control" value="" data-require="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">住所 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">郵便番号</p>
                                                </div>
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <input type="text" name="post" class="form-control" placeholder="例：1234567" data-require="true" onkeyup="AjaxZip3.zip2addr(this, '', 'pref','city','aza');"> </div>
                                                <div class="col-12 col-lg-4 align-self-center">
                                                    <a class="btnAuto btn mt-2 mt-lg-0" href="#"> <img src="images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> 郵便番号から住所を自動的入力 </a>
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">都道府県</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <select name="pref" class="form-control custom-select" data-require="true">
                                                        <option value="null">▼ 選択してください </option>
                                                        <option value="北海道">北海道</option>
                                                        <option value="青森県">青森県</option>
                                                        <option value="岩手県">岩手県</option>
                                                        <option value="宮城県">宮城県</option>
                                                        <option value="秋田県">秋田県</option>
                                                        <option value="山形県">山形県</option>
                                                        <option value="福島県">福島県</option>
                                                        <option value="茨城県">茨城県</option>
                                                        <option value="栃木県">栃木県</option>
                                                        <option value="群馬県">群馬県</option>
                                                        <option value="埼玉県">埼玉県</option>
                                                        <option value="千葉県">千葉県</option>
                                                        <option value="東京都">東京都</option>
                                                        <option value="神奈川県">神奈川県</option>
                                                        <option value="新潟県">新潟県</option>
                                                        <option value="山梨県">山梨県</option>
                                                        <option value="長野県">長野県</option>
                                                        <option value="富山県">富山県</option>
                                                        <option value="石川県">石川県</option>
                                                        <option value="福井県">福井県</option>
                                                        <option value="岐阜県">岐阜県</option>
                                                        <option value="静岡県">静岡県</option>
                                                        <option value="愛知県">愛知県</option>
                                                        <option value="三重県">三重県</option>
                                                        <option value="滋賀県">滋賀県</option>
                                                        <option value="京都府">京都府</option>
                                                        <option value="大阪府">大阪府</option>
                                                        <option value="兵庫県">兵庫県</option>
                                                        <option value="奈良県">奈良県</option>
                                                        <option value="和歌山県">和歌山県</option>
                                                        <option value="鳥取県">鳥取県</option>
                                                        <option value="島根県">島根県</option>
                                                        <option value="岡山県">岡山県</option>
                                                        <option value="広島県">広島県</option>
                                                        <option value="山口県">山口県</option>
                                                        <option value="徳島県">徳島県</option>
                                                        <option value="香川県">香川県</option>
                                                        <option value="愛媛県">愛媛県</option>
                                                        <option value="高知県">高知県</option>
                                                        <option value="福岡県">福岡県</option>
                                                        <option value="佐賀県">佐賀県</option>
                                                        <option value="長崎県">長崎県</option>
                                                        <option value="熊本県">熊本県</option>
                                                        <option value="大分県">大分県</option>
                                                        <option value="宮崎県">宮崎県</option>
                                                        <option value="鹿児島県">鹿児島県</option>
                                                        <option value="沖縄県">沖縄県</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">市区町村</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" name="city" class="form-control"> </div>
                                            </div>
                                            <div class="row mb30">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">丁目番地</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" name="aza" class="form-control"> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-2 align-self-center">
                                                    <p class="mb-0">建物名</p>
                                                </div>
                                                <div class="col-12 col-lg-10 align-self-center">
                                                    <input type="text" name="building" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-2 align-self-center">
                                            <label for="">予算</label>
                                        </div>
                                        <div class="col-10 col-lg-10 align-self-center">
                                            <select name="budget" id="" class="form-control custom-select">
                                                <option value="">予算を選択</option>
                                                <option value="～3000万円">～3000万円</option>
                                                <option value="～3500万円">～3500万円</option>
                                                <option value="～4000万円">～4000万円</option>
                                                <option value="～4500万円">～4500万円</option>
                                                <option value="～5000万円">～5000万円</option>
                                                <option value="～5500万円">～5500万円</option>
                                                <option value="～6000万円">～6000万円</option>
                                                <option value="～6500万円">～6500万円</option>
                                                <option value="6500万円以上">6500万円以上</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">希望ツール <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio1" name="request_online[]" class="custom-control-input" value="Zoom" checked="">
                                                <label class="custom-control-label" for="customRadio1">Zoom</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio2" name="request_online[]" class="custom-control-input" value="Googlemeet">
                                                <label class="custom-control-label" for="customRadio2">Googlemeet</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio3" name="request_online[]" class="custom-control-input" value="Calling">
                                                <label class="custom-control-label" for="customRadio3">Calling</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio4" name="request_online[]" class="custom-control-input" value="どれでも可">
                                                <label class="custom-control-label" for="customRadio4">どれでも可</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <label for="">資料請求 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="rdo_documentrequest_do" name="request_document[]" class="custom-control-input" value="する" checked>
                                                <label class="custom-control-label" for="rdo_documentrequest_do">する</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="rdo_documentrequest_not" name="request_document[]" class="custom-control-input" value="しない">
                                                <label class="custom-control-label" for="rdo_documentrequest_not">しない</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-2 align-self-center">
                                            <label for="">希望日時 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-10 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_datetime mb-2 mb-lg-0">
                                                        <input type="text" name="datepicker" class="form-control datepicker" placeholder="日付を選択" autocomplete="off" readonly="" data-require="true"> <i class="i_datetime"></i> </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <select name="time" id="" class="form-control custom-select" data-require="true">
                                                        <option value="">時間を選択</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-2">
                                            <label for="">ご質問・ご要望など</label>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <textarea name="inquiry_content" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box_content_footer">
                                    <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。
                                        <br> 個人情報の取扱に関しましては
                                        <a class="btn-link" href="https://www.prostyle-residence.com/privacy-policy/"> <b>プライバシーポリシー</b> </a> をご覧ください。
                                        <br> ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。 </p>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="ck_agree" value="同意する" data-require="true" checked>
                                            <label class="custom-control-label" for="ck_agree">同意する</label>
                                        </div>
                                        <button type="button" id="btn_confirm" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i> </button>
                                    </div>
                                </div>
                                <div class="box_precautions">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <h5>注意事項</h5> </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <p>※各種オンラインミーティングツール(zoom、calling、Google meet)で対応いたします。
                                                <br> ※カメラ機能がついたパソコン、タブレット、スマートフォンのいずれかが必要です。
                                                <br> ※お顔が映るのが苦手な方は音声のみで問題ございません。
                                                <br> ※ご利用は無料ですが、別途通信料がかかります。データ通信料はお客さまのご負担となります。
                                                <br> 従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合はご注意ください。
                                                <br> 安定した画質で利用するためにも、Wi-Fi環境下での利用を推奨します。 </p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- <section class="data-confirm"> -->
                            <section class="data-confirm" style="display: none;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-4 align-self-center">
                                            <label for="">物件名 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-10 col-lg-8 align-self-center">
                                            <div class="cfr_property_name"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <label for="">氏名 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="cfr_name"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <label for="">氏名（ふりがな） <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="cfr_name_kana"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-4 align-self-center">
                                            <label for="">E-mail <span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-10 col-lg-8 align-self-center">
                                            <div class="cfr_email"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <label for="">住所 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div class="cfr_address"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2 col-lg-4 align-self-center">
                                            <label for="">予算</label>
                                        </div>
                                        <div class="col-10 col-lg-8 align-self-center">
                                            <div class="cfr_budget"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <label for="">希望ツール <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div class="cfr_request_online"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <label for="">資料請求 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div class="cfr_request_document"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <label for="">希望日時 <span class="red">（※）</span> </label>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="cfr_date_time"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="">ご質問・ご要望など</label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div class="cfr_inquiry_content"></div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="box_content_footer">
                                    <div class="form-inline justify-content-center">
                                        <button type="button" id="btn_return" class="btn btnAgree cfr"><i class="i_rightwhite rotate"></i> 戻る</button>
                                        <button type="submit" id="btn_send" class="btn btnAgree cfr">送信する <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </section>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>