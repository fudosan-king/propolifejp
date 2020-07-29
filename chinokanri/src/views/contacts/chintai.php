<style type="text/css">
    .frm-confirm button {
        background: #0180CD;
        border-radius: 100px;
        color: #fff;
        padding: 15px 20px;
        width: 70%;
        display: block;
        margin: 15px auto 0;
        font-family: 'SF Pro Display Semibold', "Noto Sans JP";
        font-size: 1.125em;
        position: relative;
    }
    .frm-confirm .form-group {
        font-size: 0.875em;
        border-color: #828282;
        margin-bottom: 30px;
    }
</style>
<nav class="nav_top">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link flex-fill" id="nav-previewrequest-tab" href="<?=base_url();?>contact/naiken" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問合せ</span></a>
               <a class="nav-item nav-link flex-fill active" id="nav-rentalproperty-tab" href="<?=base_url();?>contact/chintai" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問合せ</span></a>
               <a class="nav-item nav-link flex-fill" id="nav-propertysale-tab" href="<?=base_url();?>contact/bunjyo" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問合せ</span></a>
               <a class="nav-item nav-link flex-fill" id="nav-cancellation-tab" href="<?=base_url();?>contact/kaiyaku" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問合せ</span></a>
               <a class="nav-item nav-link flex-fill" id="nav-management-tab" href="<?=base_url();?>contact/important" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
            </div>
         </div>
      </div>
   </div>
</nav>
<div class="tab-content" id="nav-tabContent">
   <div class="tab-pane fade show active" id="nav-rentalproperty" role="tabpanel" aria-labelledby="nav-rentalproperty-tab">
      <section class="section_content_top">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1>当社管理賃貸物件に関するお問合せ</h1>
                  <ul class="steps">
                     <li class="active"><a href="#">入力</a></li>
                     <li><a href="#">確認</a></li>
                     <li><a href="#">完了</a></li>
                  </ul>
                  <ul class="list">
                     <li>内容によってはお答えできない場合や、電子メール以外の方法でお答えさせていただく場合がございます。</li>
                     <li>夜間、水、日、祝祭日、年末年始など当社営業時間外にいただいたメールは翌営業日以降に回答いたします。</li>
                     <li>お客様あてにお送りした電子メールの一部または全体を、当社の許可なく、転用、二次使用することは、固くお断りいたします。</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="section_content_body bg_bluelight">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="http://go.pardot.com/l/185822/2020-07-17/q9wn7h" class="frm_general" method="post">
                     <div class="frm_general_content frm-input">
                        <div class="form-group">
                           <label for="">お名前</label>
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
                                             <input type="text" name="kanji_familyname" class="form-control required" placeholder="例：千野">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <div class="row">
                                          <div class="col-2 align-self-center">
                                             <p class="mb-0">名</p>
                                          </div>
                                          <div class="col-10 align-self-center">
                                             <input type="text" name="kanji_name" class="form-control required" placeholder="例：太郎">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">お名前（フリガナ）</label>
                           <div class="row">
                              <div class="col-12 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-12 col-lg-11 align-self-center">
                                 <div class="row">
                                    <div class="col-12 col-lg-6">
                                       <div class="row mb-2 mb-lg-0">
                                          <div class="col-2 align-self-center">
                                             <p class="mb-0">セイ</p>
                                          </div>
                                          <div class="col-10 align-self-center">
                                             <input type="text" name="kata_familyname" class="form-control required" placeholder="例：チノ">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <div class="row">
                                          <div class="col-2 align-self-center">
                                             <p class="mb-0">メイ</p>
                                          </div>
                                          <div class="col-10 align-self-center">
                                             <input type="text" name="kata_name" class="form-control required" placeholder="例：タロウ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">住所</label>
                           <p class="mb-1">郵便番号</p>
                           <div class="row mb-3">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <div class="row">
                                    <div class="col-12 col-lg-6 align-self-center">
                                       <input type="text" name="postal-code" class="form-control required" placeholder="例：1234567" onKeyUp="AjaxZip3.zip2addr(this,'','pref','city','address')">
                                    </div>
                                    <div class="col-12 col-lg-6 align-self-center">
                                       <a class="btnAuto btn mt-2 mt-lg-0" style="cursor: pointer;" onclick="AjaxZip3.zip2addr('postal-code','','pref','city')"><img src="<?=base_url();?>assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> 郵便番号から住所を自動的入力</a>
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
                                 <select name="pref" id="" class="form-control custom-select required">
                                    <option value="">都道府県を選択してください</option>
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
                                 </select>
                              </div>
                           </div>
                           <p class="mb-1">市区町村</p>
                           <div class="row mb-3">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <input type="text" name="city" class="form-control required">
                              </div>
                           </div>
                           <p class="mb-1">丁目番地</p>
                           <div class="row mb-3">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <input type="text" name="address" class="form-control required">
                              </div>
                           </div>
                           <p class="mb-1">建物名・号室</p>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <input type="text" name="building-room" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">電話番号（半角数字）<span>※ハイフンなしでご記入ください。</span></label>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-6 align-self-center">
                                 <input type="number" name="phone-number" placeholder="例：0312341234" class="form-control required">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">メールアドレス（半角英数字）</label>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-6 align-self-center">
                                 <input type="email" name="email" placeholder="例：xxxxxxx@hchinokanri.co.jp" class="form-control required">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">ご連絡方法（ご希望がある場合はご指定ください）</label>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="rdo_phone" name="contact-method" class="custom-control-input" value="電話">
                                    <label class="custom-control-label" for="rdo_phone">電話</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="rdo_email" name="contact-method" class="custom-control-input" value="E-mail">
                                    <label class="custom-control-label" for="rdo_email">E-mail</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">お問合せ分類</label>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                                 <span class="label_sub">必須</span>
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="classification_contact" class="custom-control-input required" value="当社管理賃貸物件に住んでいる">
                                    <label class="custom-control-label" for="customRadioInline1">当社管理賃貸物件に住んでいる</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="classification_contact" class="custom-control-input required" value="当社管理賃貸物件に住んでいない">
                                    <label class="custom-control-label" for="customRadioInline2">当社管理賃貸物件に住んでいない</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">お問い合わせ項目（複数選択可）</label>
                           <div class="row">
                              <div class="col-2 col-lg-1 align-self-center">
                              </div>
                              <div class="col-10 col-lg-11 align-self-center">
                                 <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio1" name="contact_item" class="custom-control-input" value="建物設備故障について">
                                    <label class="custom-control-label" for="customRadio1">建物設備故障について</label>
                                 </div>
                                 <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio2" name="contact_item" class="custom-control-input" value="引越しを検討中、新しい物件を探してる">
                                    <label class="custom-control-label" for="customRadio2">引越しを検討中、新しい物件を探してる</label>
                                 </div>
                                 <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio3" name="contact_item" class="custom-control-input" value="ご意見・ご要望">
                                    <label class="custom-control-label" for="customRadio3">ご意見・ご要望</label>
                                 </div>
                                 <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio4" name="contact_item" class="custom-control-input" value="その他">
                                    <label class="custom-control-label" for="customRadio4">その他</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="">お問い合わせ内容</label>
                           <textarea name="contact_content" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                        </div>
                        <div class="box_content_footer">
                            <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                            個人情報の取扱に関しましては <a class="btn-link" href="#"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                            ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                            <div class="form-group text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input required" id="ck_agree" value="1">
                                    <label class="custom-control-label" for="ck_agree">同意する</label>
                                </div>

                                <button type="submit" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                            </div>
                        </div>
                     </div>
                     <!-- confirm -->
                     <div class="frm_general_content frm-confirm" style="display: none">
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">お名前</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="kanji_familyname"></span>
                                 <span id="kanji_name"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">お名前（フリガナ）</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="kata_familyname"></span>
                                 <span id="kata_name"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">住所</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="postal-code"></span><br>
                                 <span id="pref"></span><br>
                                 <span id="city"></span><br>
                                 <span id="address"></span><br>
                                 <span id="building-room"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">電話番号</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="phone-number"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">メールアドレス</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="email"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">ご連絡方法</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="contact-method"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">お問合せ分類</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="classification_contact"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">お問い合わせ項目</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="contact_item"></span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-2 col-lg-4">
                                 <label for="">お問い合わせ内容</label>
                              </div>
                              <div class="col-10 col-lg-8">
                                 <span id="contact_content"></span>
                              </div>
                           </div>
                        </div>
                        <div class="box_content_footer">
                            <div class="form-group text-center">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <button type="submit" class="btn" id="btnBack">戻る</button>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <button type="submit" class="btn" id="btnSubmit">送信する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>