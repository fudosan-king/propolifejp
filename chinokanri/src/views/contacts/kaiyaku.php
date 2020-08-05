<?php include_once 'nav/top.php'; ?>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-cancellation" role="tabpanel" aria-labelledby="nav-cancellation-tab">
        <section class="section_content_top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>解約に関するお問合せ</h1>
                        <ul class="steps d-flex">
                            <li class="active flex-fill" id="input"><span>入力</span></li>
                            <li id="confirm" class="flex-fill"><span>確認</span></li>
                            <li id="finish" class="flex-fill"><span>完了</span></li>
                        </ul>
                        <ul class="list">
                            <li>弊社管理物件お住まいの方専用となります。管理会社が不明な場合は、弊社までご連絡下さい。</li>
                            <li><span class="red">退去の連絡は、解約する日まで１ヶ月以上前に連絡しないといけない場合が多いのでご注意下さい。<br>お部屋によっては２ヶ月などある場合もございます。お手持ちの契約書類のご確認をお願いします。</span></li>
                        </ul>
                        <h2>解約通知届</h2>
                        <p class="text-center">下記物件の賃貸借契約を賃貸借契約書の条項に基づき解約することを通知いたします。</p>
                    </div>
                </div>
            </div>
        </section>

        <form class="frm_general" id="form-kaiyaku" action="http://go.pardot.com/l/185822/2020-07-20/qb1qx9" method="POST" novalidate>
            <section class="section_content_body bg_bluelight">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2 id="form-title">契約物件情報</h2>
                                <div class="form-group">
                                    <label for="">物件名</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <input type="text" class="form-control mb-2" name="contract_estate_name" required>
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" class="custom-control-input" name="contract_detached_house" value="なし">
                                                <input type="checkbox" class="custom-control-input" name="contract_detached_house_ckb" id="contract_detached_house_ckb">
                                                <label class="custom-control-label" for="contract_detached_house_ckb">一戸建てを契約されているお客様はこちらにチェックを入れて下さい。物件名は省略頂けます。</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">号室</label>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-8 col-lg-10 align-self-center">
                                            <input type="text" class="form-control" placeholder="部屋番号" name="contract_estate_room_number" required>
                                        </div>
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span>号室</span>
                                        </div>
                                    </div>

                                    <p class="mb-1">郵便番号</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：1234567" name="contract_estate_postal_code" required onkeyup="AjaxZip3.zip2addr(this,'','contract_estate_pref','contract_estate_city', 'contract_estate_chome_address')">
                                                </div>
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <a class="btnAuto btn mt-2 mt-lg-0 btn-link" onclick="AjaxZip3.zip2addr('contract_estate_postal_code','','contract_estate_pref','contract_estate_city', 'contract_estate_chome_address')"><img src="<?=base_url();?>/assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1">都道府県</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <select name="contract_estate_pref" id="" class="form-control custom-select" required>
                                                <option value="">▼ 選択してください </option>
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

                                    <p class="mb-1">市区町村</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="contract_estate_city" required>
                                        </div>
                                    </div>


                                    <p class="mb-1">丁目番地</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="contract_estate_chome_address" required>
                                        </div>
                                    </div>

                                    <p class="mb-1">建物名・号室</p>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="contract_estate_building_name">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_content_body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2>ご契約者様の情報</h2>

                                <div class="form-group">
                                    <label for="">ご契約者様の氏名</label>
                                    <div class="row">
                                        <div class="col-12 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-12 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">姓</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：千野" name="contractor_kanji_family_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">名</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：太郎" name="contractor_kanji_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">ご契約者様</label>
                                    <div class="row">
                                        <div class="col-12 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-12 col-lg-11">
                                            <div class="row mb-3">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">せい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：ちの" name="contractor_furigana_family_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">めい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：たろう" name="contractor_furigana_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" class="custom-control-input" name="contractor_same_resident">
                                                <input type="checkbox" class="custom-control-input" id="contractor_same_resident_ckb" name="contractor_same_resident_ckb">
                                                <label class="custom-control-label" for="contractor_same_resident_ckb">ご契約者様と入居者様が同じ場合は、こちらにチェックを入れて下さい。<br>
                                                <span class="red">※ご契約者様と入居者様が異なる場合は、入居者様の氏名もご入力下さい。</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">入居者様の氏名</label>
                                    <div class="row">
                                        <div class="col-12 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-12 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">性</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：千野" name="resident_kanji_family_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">名</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：太郎" name="resident_kanji_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">入居者様の氏名（ふりがな）</label>
                                    <div class="row">
                                        <div class="col-12 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-12 col-lg-11">
                                            <div class="row mb-3">
                                                <div class="col-12 col-lg-6">
                                                    <div class="row mb-2 mb-lg-0">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">せい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：ちの" name="resident_furigana_family_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center">
                                                            <p class="mb-0">めい</p>
                                                        </div>
                                                        <div class="col-10 align-self-center">
                                                            <input type="text" class="form-control" placeholder="例：たろう" name="resident_furigana_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="mb-2 mb-lg-0">
                                                        <input type="text" class="form-control" placeholder="例：0312341234" name="contractor_phone_number" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">メールアドレス（半角英数字）</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <div class="row mb-2">
                                                <div class="col-12 col-lg-6">
                                                    <div class="mb-2 mb-lg-0">
                                                        <input type="email" class="form-control" placeholder="例：xxxxxxx@hchinokanri.co.jp" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="red">※上記、ご入力いただきました電話番号およびメールアドレスへ連絡させていただきます。</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_content_body bg_bluelight">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2>転居先情報</h2>

                                <div class="form-group">
                                    <label for="">物件名</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="relocation_estate_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">号室</label>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-8 col-lg-10 align-self-center">
                                            <input type="text" class="form-control" placeholder="部屋番号" name="relocation_room_number" required>
                                        </div>
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <p class="mb-0">号室</p>
                                        </div>
                                    </div>

                                    <p class="mb-1">郵便番号</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：1234567" name="relocation_postal_code" required onkeyup="AjaxZip3.zip2addr(this,'','relocation_refectures','relocation_city')">
                                                </div>
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <a class="btnAuto btn mt-2 mt-lg-0 btn-link" onclick="AjaxZip3.zip2addr('relocation_postal_code','','relocation_refectures','relocation_city')"><img src="<?=base_url();?>/assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="mb-1">都道府県</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <select class="form-control custom-select" name="relocation_refectures" required>
                                                <option value="">▼ 選択してください </option>
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

                                    <p class="mb-1">市区町村・番地</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control mb-2" name="relocation_city" required>
                                            <p class="mb-0"><span class="red">※解約後の書類送付先となります。</span></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_content_body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2>敷金・日割賃料返金先口座</h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 align-self-center">
                                            <label for="">【銀行名】</label>
                                            <div class="row">
                                                <div class="col-2 col-lg-2 align-self-center">
                                                    <span class="label_sub">必須</span>
                                                </div>
                                                <div class="col-10 col-lg-10 align-self-center">
                                                    <input type="text" class="form-control" name="bank_name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 align-self-center">
                                            <label for="">支店名</label>
                                            <input type="text" class="form-control" name="bank_branch_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">口座の種類</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="bank_account_type" class="custom-control-input" id="ordinary-deposit" required value="普通預金">
                                                <label class="custom-control-label" for="ordinary-deposit">普通預金</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="bank_account_type" class="custom-control-input" id="current-account" required value="当座預金">
                                                <label class="custom-control-label" for="current-account">当座預金</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">口座番号  <span class="ml-1">※ハイフンなしでご記入ください。</span></label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" placeholder="例：123456789" name="bank_account_number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">口座名義人（カタカナ）</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="bank_account_holder" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


             <section class="section_content_body bg_bluelight">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2 class="mb-2">緊急連絡先</h2>
                                <p class="text-center">（ご本人様以外の情報をご入力下さい）</p>

                                <div class="form-group">
                                    <label for="">氏名</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="emergency_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">続柄</label>
                                    <div class="row mb-4">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="emergency_relationship_name" required>
                                        </div>
                                    </div>

                                    <p class="mb-1">郵便番号</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <input type="text" class="form-control" placeholder="例：1234567" name="emergency_postal_code" onkeyup="AjaxZip3.zip2addr(this,'','emergency_refectures','emergency_city','emergency_location_number')" required>
                                                </div>
                                                <div class="col-12 col-lg-6 align-self-center">
                                                    <a class="btnAuto btn mt-2 mt-lg-0 btn-link" onclick="AjaxZip3.zip2addr('emergency_postal_code','','emergency_refectures','emergency_city','emergency_location_number')"><img src="<?=base_url();?>/assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="mb-1">都道府県</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <select name="emergency_refectures" id="" class="form-control custom-select">
                                                <option value="">▼ 選択してください </option>
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

                                    <p class="mb-1">市区町村</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="emergency_city" required>
                                        </div>
                                    </div>

                                    <p class="mb-1">丁目・番地</p>
                                    <div class="row mb-3">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" class="form-control" name="emergency_location_number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-6 align-self-center">
                                            <input type="text" class="form-control" placeholder="例：0312341234" name="emergency_phone_number" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_content_body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="frm_general_content">
                                <h2>解約日・立会希望日</h2>

                                <div class="form-group">
                                    <label for="">解約通知日</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <div class="box_datetime">
                                                <input type="text" class="form-control datepicker" placeholder="2020/06/26" name="cancellation_notice_date" required>
                                                <i class="i_datetime"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">解約日</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <div class="box_datetime mb-3">
                                                <input type="text" class="form-control datepicker" placeholder="2020/06/26" name="cancellation_date" required>
                                                <i class="i_datetime"></i>
                                            </div>
                                            <p class="mb-0 red">※　解約日までの賃料が発生いたします。解約日当月の賃料は通常月と同じよう全額お振込みお願いいたしま 
                                            す。敷金精算時に精算いたします。<br>※　解約日までに室内お荷物をすべて移動をお願いいたします。ライフラインの解約手続きもお願いいたします。<br>
                                            ※　例：1ヶ月前予告の場合、通知日が1月1日なら解約日は最短で2月1日となります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">立会希望</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub mt-2">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="rdo_question1" name="wish_attend" class="custom-control-input" checked value="なし">
                                                <label class="custom-control-label" for="rdo_question1">なし</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="rdo_question2" name="wish_attend" value="あり" class="custom-control-input">
                                                <label class="custom-control-label" for="rdo_question2">あり</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mt-3">
                                                <input type="hidden" name="delegate_all_settlement">
                                                <input type="checkbox" class="custom-control-input" checked name="delegate_all_settlement_ckb" id="deletgate_all_settlement_ckb">
                                                <label class="custom-control-label" for="deletgate_all_settlement_ckb">明渡時に立会いをしませんので、原状回復費用の精算については全て委任いたします。</label>
                                            </div>
                                            <p class="mb-2 red">※　立会希望無しの場合はチェックを入れてください。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">お問い合わせ内容</label>
                                    <textarea name="contact_content" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                    <p class="mb-0 mt-2 red">※　解約通知受理後、弊社よりお電話またはメールにてご連絡させていただきます。<br>
                                    連絡が1週間経っても来ない場合はお手数ですが <a class="red btn-link" href="tel:045-581-9556">045-581-9556</a> までご連絡下さい。</p>
                                </div>

                                <div class="box_content_footer">
                                    <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                    個人情報の取扱に関しましては <a class="btn-link" href="http://html-static.fudosan-king.jp/chinokanri/kaiyaku.php#"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ck_agree" name="ck_agree" required>
                                            <label class="custom-control-label" for="ck_agree">同意する</label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btnAgree bg-secondary mr-2" id="btnBack" style="display: none; max-width: 40%">戻る <i class="i_leftwhite"></i></button>
                                        <button type="button" class="btn btnAgree d-inline-block" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>