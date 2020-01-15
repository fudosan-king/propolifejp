<?php 
/*
    Template Name: Contact
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
                    <h2 class="title">お問い合わせ</h2>
                    <p class="text-center">必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                    <span class="red">＊</span>がついている項目はご記入必須項目になります。</p>

                    <form action="https://go.pardot.com/l/185822/2019-07-04/hqcm3b" method="POST" role="form" class="frm_contactus">
                        <section class="content_register">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">お名前 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input name="last-name" id="last-name" type="text" class="form-control" placeholder="姓">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input name="first-name" id="first-name" type="text" class="form-control" placeholder="名">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text name">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">フリガナ <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input name="myouji" id="myouji" type="text" class="form-control" placeholder="セイ">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input name="namae" id="namae" type="text" class="form-control" placeholder="メイ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text phonetic">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">ご連絡先電話番号 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="phone-number" id="phone-number" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text phone-number">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">メールアドレス <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <input name="email" id="email" type="text" class="form-control">
                                                <p>（確認用）</p>
                                                <input name="email-confirm" id="email-confirm" type="text" class="form-control">
                                                <p>（半角英数）</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text email">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-0">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label class="pt-4" for="">ご住所 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-md-3">
                                                            <label for="">郵便番号</label>
                                                        </div>
                                                        
                                                        <div class="col-12 col-md-9">
                                                            <div class="row">
                                                                <div class="col-6 col-md-3">
                                                                    <input name="post" id="post" type="text" class="form-control" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
                                                                </div>
                                                                <div class="col-6 col-md-6">
                                                                    <input type="button" class="btn btn-sm btn-danger btn_address_search indentityLocation"  value="住所検索">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                    <span class="error-text post">値を入力してください</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-md-3">
                                                            <label for="">都道府県</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12">
                                                                    <select name="pref" id="pref"  class="form-control">
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
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                    <span class="error-text pref">値を入力してください</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-md-3">
                                                            <label for="">市区町村</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12">
                                                                    <input name="city" id="city" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                    <span class="error-text city">値を入力してください</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12 col-md-3">
                                                            <label for="">丁目番地</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input name="aza" id="aza" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group border-bottom-0">
                                                    <div class="row">
                                                        <div class="col-12 col-md-3">
                                                            <label for="">建物・部屋番号</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input name="building-roomnumber" id="building-roomnumber" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text address">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">お問い合わせ内容 <span class="red">＊</span><br>
                                    （全角2000字まで）</label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <textarea  name="iken" id="iken" cols="30" rows="8"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <span class="error-text iken">値を入力してください</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <label for="">個人情報の取扱について <span class="red">＊</span></label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="box_note">
                                        <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                        <p><a href="https://www.propolife.co.jp/privacypolicy/" class="btn btn-link">▶「プライバシーポリシー」を開く</a></p>
                                        <div class="form-check checkbox">
                                            <input name="secret-info" class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <span class="text_checkbox">同意する</span>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="error-text secret-info" style="margin-top: 15px;">値を入力してください</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <p class="text-center mt-4">
                            <button type="button" class="btn btn-lg btn_checkentries"  id="goConfirm">入力内容を確認する</button>
                            </p>
                        </section>
                        <section class="content_confirm" style="display:none;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">お名前 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8 cfrm_name">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">フリガナ <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8 cfrm_phonetic">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">ご連絡先電話番号 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8 cfrm_phonenumber">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">メールアドレス <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8 cfrm_email">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-0">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label class="pt-4" for="">ご住所 <span class="red">＊</span></label>
                                    </div>
                                    <div class="col-12 col-md-8 cfrm_address">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="">お問い合わせ内容 <span class="red">＊</span><br>
                                    （全角2000字まで）</label>
                                </div>
                                <div class="col-12 col-md-8 cfrm_comments">
                                    
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-4">
                            <input type="button" class="btn btn-lg btn_checkentries" id="goBack" value="戻る"> &nbsp;
                            <input type="button" class="btn btn-lg btn_checkentries" id="goSubmit" value="送信する">
                        </p>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
