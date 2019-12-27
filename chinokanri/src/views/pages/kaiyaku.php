<section class="row kaiyaku">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <h3 class="block-title text-center">お問い合わせ</h3>
        <article class="content">
            <p class="text_gray">弊社管理物件お住まいの方専用となります。管理会社が不明な場合は、弊社までご連絡下さい。</p>
            <p class="text_red">退去の連絡は、解約する日まで１ヶ月以上前に連絡しないといけない場合が多いのでご注意下さい。 お部屋によっては２ヶ月などある場合もございます。お手持ちの契約書類のご確認をお願いします。</p>
            <div class="btn-block btn_cancel text-center">解約通知届</div>
            <p>「下記物件の賃貸借契約を賃貸借契約書の条項に基づき解約することを通知いたします。」</p>
            <form action="https://go.pardot.com/l/185822/2019-07-29/j1kchx" class="frm_contact" method="post">

                <section class="table_info">

                    <div class="box_contact">
                        <h3>下記フォームご入力下さい。</h3>
                        <h4>契約物件情報をご入力ください。</h4>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">物件名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="bukkenmei" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 no-padding">
                            </div>
                            <div class="col-12 col-md-9 no-padding">
                                <div class="form-group mb0">
                                    <div class="checkbox">
                                        <label>
                                            <input class="text-danger" type="checkbox" name="disable_bukkenmei"><span class="text-danger  disable-box">一戸建てを契約されているお客様はこちらにチェックを入れて下さい。物件名は省略頂けます。
                                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">部屋番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="roomnumber" class="form-control" placeholder="部屋番号" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <p class="room_num">号室</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="post" id="ipost" class="form-control" placeholder="入力してください" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <button class="btn btnSearch_address" id="ibtnSearch_address_1">住所検索</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <select name="pref" class="form-control" required>
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
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="aza" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box_contact">
                        <h3>ご契約者様の情報をご入力ください。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ご契約者様の氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name_contractor" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ふりがな</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="kana_contractor" class="form-control" placeholder="入力してください" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-3 no-padding">
                            </div>
                            <div class="col-12 col-md-9 no-padding">
                                <div class="form-group mb0">
                                    <div class="checkbox">
                                        <label>
                                            <input class="text-danger" type="checkbox" name="disable_living"><span class="text-danger">ご契約者様と入居者様が同じ場合は、こちらにチェックを入れて下さい。
                                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <p class="text-danger mt10">※ご契約者様と入居者様が異なる場合は、入居者様の氏名もご入力下さい。</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">入居者様の氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name_living" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ふりがな</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="kana_living" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">電話番号</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="phone_contractor" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">FAX</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="fax_contractor" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">メールアドレス</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                            <p class="text-danger pl30">※上記、ご入力いただきました電話番号およびメールアドレスへ連絡させていただきます。</p>
                        </div>
                    </div>

                    <div class="box_contact">
                        <h3>転居先情報をご入力ください。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">物件名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="estatename_moved" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">部屋番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="room_moved" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <p class="room_num">号室</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="moved_post" id="imoved_post" class="form-control" placeholder="入力してください" onkeyup="AjaxZip3.zip2addr(this,'','pref_moved','city_moved');" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <button class="btn btnSearch_address" id="ibtnSearch_address_2">住所検索</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <select name="pref_moved" class="form-control" required>
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
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="city_moved" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="aza_moved" class="form-control" placeholder="入力してください" required>
                                    <p class="text-danger mt10">※解約後の書類送付先となります。</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h3>敷金・日割賃料返金先口座をご入力下さい。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">銀行名</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="bank" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <label for="">支店名</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="bank_branch" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座種類</label>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group">
                                    <div class="radio">
                                        <label class="mt0">
                                            <input type="radio" name="bank_type[]" value="普通預金" checked> 普通預金
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="form-group">
                                    <div class="radio">
                                        <label class="mt0">
                                            <input type="radio" name="bank_type[]" value="当座預金"> 当座預金
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座番号</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="bank_account" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座名義人
                                    <br>（カタカナ）</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="bank_holder" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h3>緊急連絡先をご入力ください。<span>（ご本人様以外の情報をご入力下さい）</span></h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="emergency_name" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">続柄</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <input type="text" name="emergency_relate" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="emergency_post" id="iemergency_post" class="form-control" placeholder="入力してください" onkeyup="AjaxZip3.zip2addr(this,'','emergency_pref','emergency_city');" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <button class="btn btnSearch_address" id="ibtnSearch_address">住所検索</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <select name="emergency_pref" class="form-control" required>
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
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <!-- <select name="" class="form-control">
                                                        <option value="">選択してください</option>
                                                    </select> -->

                                    <input type="text" name="emergency_city" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="emergency_aza" class="form-control" placeholder="入力してください" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">電話番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <input type="text" name="emergency_phone" class="form-control" placeholder="入力してください。" required>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact box_date">
                        <h4>解約日・立会希望日をご入力ください。</h4>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">解約通知日</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <div class="form-control note_date" id="icancellation_notice_date_display"></div>
                                    <input type="hidden" name="cancellation_notice_date" id="icancellation_notice_date" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">解約日</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-group date_picker">
                                    <input type="text" name="cancellation_date" id="icancellation_date" class="form-control" placeholder="日付を選択してください" required>
                                    <i class="i_date"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="list_contact">
                            <li>
                                解約日までの賃料が発生いたします。解約日当月の賃料は通常月と同じよう全額お振込みお願いいたします。
                                <br>敷金精算時に精算いたします。
                            </li>
                            <li>
                                解約日までに室内お荷物をすべて移動をお願いいたします。
                                <br>ライフラインの解約手続きもお願いいたします。
                            </li>
                            <li>
                                例　1ヶ月前予告の場合、通知日が1月1日なら解約日は最短で2月1日となります。
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">立会希望</label>
                            </div>
                            <div class="col-12 col-md-7">

                                <div class="form-inline">
                                    <div class="form-group mb-0">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="hope_attend[]" value="無し" checked>&nbsp;無し
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 ml-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="hope_attend[]" value="有り">&nbsp;有り
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group mb0">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="restration_fee[]" value="明渡時に立会いをしませんので、原状回復費用の精算については全て委任いたします。" checked> 明渡時に立会いをしませんので、原状回復費用の精算については全て委任いたします。
                                            <br>
                                            <span class="text-danger mt10">※立会希望無しの場合はチェックを入れてください。</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h4>伝達事項・質問等をご入力ください。</h4>
                        <textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
                        <p><small>解約通知受理後、弊社よりお電話またはメールにてご連絡させていただきます。連絡が1週間経っても来ない場合はお手数ですが 045-581-9556までご連絡下さい。</small></p>
                    </div>

                    <p class="text-center">
                        <input type="button" class="btn btn_CheckEntries" id="ibtnConfirm" value="入力内容を確認する">
                    </p>

                </section>

                <!-- ------------------ -->
                <!-- TABLE CONFIRM FLAG -->
                <!-- ------------------ -->
                <section class="table_confirm">

                    <div class="box_contact">
                        <h3>以下の情報を確認してください。</h3>
                        <h4>契約物件情報をご確認ください。</h4>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">物件名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_bukkenmei" required></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">部屋番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_roomnumber"></label><span>号室</span>
                            </div>
                            <div class="col-12 col-md-2">
                                <p class="room_num">号室</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_post"></label>
                            </div>
                            <div class="col-12 col-md-5">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="cfrm-data" id="cfrm_pref"></label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_city"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_aza"></label>
                            </div>
                        </div>
                    </div>

                    <div class="box_contact">
                        <h3>ご契約者様の情報をご確認ください。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ご契約者様の氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_name_contractor"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ふりがな</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_kana_contractor"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">入居者様の氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_name_living"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">ふりがな</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_kana_living"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">電話番号</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_phone_contractor"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">FAX</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_fax_contractor"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">メールアドレス</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_email"></label>
                            </div>
                            <p class="text-danger pl30">※上記、ご入力いただきました電話番号およびメールアドレスへ連絡させていただきます。</p>
                        </div>
                    </div>

                    <div class="box_contact">
                        <h3>転居先情報をご確認ください。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">物件名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_estatename_moved"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">部屋番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_room_moved"></label>
                            </div>
                            <div class="col-12 col-md-2">
                                <p class="room_num">号室</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_moved_post"></label>
                            </div>
                            <div class="col-12 col-md-5">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="cfrm-data" id="cfrm_pref_moved"></label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_city_moved"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_aza_moved"></label>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h3>敷金・日割賃料返金先口座をご確認く下さい。</h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">銀行名</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="cfrm-data" id="cfrm_bank"></label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label for="">支店名</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_bank_branch"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座種類</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_bank_type"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座番号</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_bank_account"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">口座名義人
                                    <br>（カタカナ）</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_bank_holder"></label>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h3>緊急連絡先をご確認ください。<span>（ご本人様以外の情報をご確認く下さい）</span></h3>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">氏名</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_emergency_name"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">続柄</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <label class="cfrm-data" id="cfrm_emergency_relate"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">郵便番号</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_emergency_post"></label>
                            </div>
                            <div class="col-12 col-md-5">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">都道府県</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="cfrm-data" id="cfrm_emergency_pref"></label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label for="">市区町村</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="cfrm-data" id="cfrm_emergency_city"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">丁目・番地</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_emergency_aza"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">電話番号</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_emergency_phone"></label>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact box_date">
                        <h4>解約日・立会希望日をご確認ください。</h4>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">解約通知日</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_cancellation_notice_date"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">解約日</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <label class="cfrm-data" id="cfrm_cancellation_date"></label>
                            </div>
                        </div>
                        <ul class="list_contact">
                            <li>
                                解約日までの賃料が発生いたします。解約日当月の賃料は通常月と同じよう全額お振込みお願いいたします。
                                <br>敷金精算時に精算いたします。
                            </li>
                            <li>
                                解約日までに室内お荷物をすべて移動をお願いいたします。
                                <br>ライフラインの解約手続きもお願いいたします。
                            </li>
                            <li>
                                例　1ヶ月前予告の場合、通知日が1月1日なら解約日は最短で2月1日となります。
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">立会希望</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="form-inline">
                                    <label class="cfrm-data" id="cfrm_hope_attend"></label>
                                </div>
                                <div>
                                    <label class="cfrm-data" id="cfrm_restration_fee"></label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box_contact">
                        <h4>伝達事項・質問等をご確認ください。</h4>

                        <p class="cfrm-data mt10 mb10" id="cfrm_comment"></p>

                        <p><small>解約通知受理後、弊社よりお電話またはメールにてご連絡させていただきます。連絡が1週間経っても来ない場合はお手数ですが 045-581-9556までご連絡下さい。</small></p>
                    </div>

                    <p class="text-center">
                        <input type="button" class="btn btn_CheckEntries" id="ibtnGoBack" value="戻る">
                        <input type="button" class="btn btn_CheckEntries" id="ibtnGoSubmit" value="送信する">
                    </p>

                </section>

            </form>
        </article>
    </div>
</section>