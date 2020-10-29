<style type="text/css">
   .frm_confirm .btnAgree {
      width: 90%;
   }
   .frm_confirm .label_sub {
      line-height: 1rem;
      margin-left: 1em;
      margin-bottom: .5rem
   }
   .frm_confirm .confirm-text {
      font-size: 0.875em;
      width: 70%;
   }
   .frm_confirm .table-bordered td {
      border: 1px solid #555;
   }
</style>
<?php include_once 'nav/top.php'; ?>
<div class="tab-content" id="nav-tabContent">
   <div class="tab-pane fade show active" id="nav-rentalproperty" role="tabpanel" aria-labelledby="nav-rentalproperty-tab">
      <section class="section_content_top">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1>その他のお問い合わせ</h1>
                  <ul class="steps d-flex">
                     <li class="active input flex-fill"><span >入力</span></li>
                     <li class="confirm flex-fill"><span>確認</span></li>
                     <li class="finish flex-fill"><span>完了</span></li>
                  </ul>
                  <?php if(empty($_GET['finish'])): ?>
                     <ul class="list">
                        <li>当社営業時間外に受付したものは、翌営業日の対応とさせて頂きます。</li>
                     </ul>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
      <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>
         <div class="success-submit">
             <div class="mb-4"><b>お問い合わせが完了しました</b></div>
             <div class="mb-3">お問い合わせありがとうございます。<br>
             後ほど、担当者からご連絡させて頂きます。<br>
             今しばらくお待ちくださいませ。</div>
            <p>※休業日などでご返信が遅くなる場合がございます。<br>
            お急ぎの場合はお電話でご確認お願いいたします。</p>
         </div>
      <?php else: ?>
         <section class="section_content_body bg_bluelight">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <form action="https://go.pardot.com/l/185822/2020-10-20/qllptq" class="frm_general" method="post">
                        <div class="frm_general_content frm-input">
                           <div class="form-group">
                             <label for="">会社名</label>
                              <div class="row">
                                 <div class="col-2 col-lg-1 align-self-center">
                                 </div>
                                 <div class="col-10 col-lg-11 align-self-center">
                                    <input type="text" name="company_name" class="form-control" placeholder="会社名">
                                 </div>
                              </div>
                           </div>
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
                                          <input type="text" name="postal-code" class="form-control required numbersOnly" placeholder="例：1234567" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','pref','city','address')">
                                       </div>
                                       <div class="col-12 col-lg-6 align-self-center">
                                          <a class="btnAuto btn mt-2 mt-lg-0" style="cursor: pointer;" onclick="AjaxZip3.zip2addr('postal-code','','pref','city')"><img src="<?=base_url();?>assets/images/1x/arrow_right.png" width="20" alt="" class="img-fluid"> ※郵便番号から住所が自動で入力されます</a>
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
                                    <input type="text" name="phone-number" placeholder="例：0312341234" class="form-control required">
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
                              <label for="">お問い合わせ項目（複数選択可）</label>
                              <div class="row">
                                 <div class="col-2 col-lg-1">
                                 </div>
                                 <div class="col-10 col-lg-11 align-self-center">
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio1" name="contact_item[]" class="custom-control-input" value="お部屋を借りたい">
                                       <label class="custom-control-label" for="customRadio1">お部屋を借りたい</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio2" name="contact_item[]" class="custom-control-input" value="お部屋を貸したい">
                                       <label class="custom-control-label" for="customRadio2">お部屋を貸したい</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio3" name="contact_item[]" class="custom-control-input" value="ご自宅を売却したい">
                                       <label class="custom-control-label" for="customRadio3">ご自宅を売却したい</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio4" name="contact_item[]" class="custom-control-input" value="賃貸管理について">
                                       <label class="custom-control-label" for="customRadio4">賃貸管理について</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio5" name="contact_item[]" class="custom-control-input" value="建物・設備について">
                                       <label class="custom-control-label" for="customRadio5">建物・設備について</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio6" name="contact_item[]" class="custom-control-input" value="リフォーム">
                                       <label class="custom-control-label" for="customRadio6">リフォーム</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio7" name="contact_item[]" class="custom-control-input" value="採用について">
                                       <label class="custom-control-label" for="customRadio7">採用について</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio8" name="contact_item[]" class="custom-control-input" value="ご意見・ご要望">
                                       <label class="custom-control-label" for="customRadio8">ご意見・ご要望</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                       <input type="checkbox" id="customRadio9" name="contact_item[]" class="custom-control-input" value="その他">
                                       <label class="custom-control-label" for="customRadio9">その他</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="">お問い合わせ内容</label>
                              <textarea name="contact_content" id="" class="form-control" cols="30" rows="8" placeholder="お問合せ事項やご意見・ご要望等はこちらにご記入ください"></textarea>
                           </div>
                           <div class="box_content_footer">
                               <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                               個人情報の取扱に関しましては <a class="btn-link" href="<?=base_url();?>privacy-policy/" target="_blank"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                               ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                               <div class="form-group text-center">
                                   <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="agree" class="custom-control-input required" id="ck_agree" value="1" checked>
                                       <label class="custom-control-label" for="ck_agree">同意する</label>
                                   </div>

                                   <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                               </div>
                           </div>
                        </div>
                        <!-- confirm -->
                        <div class="frm_general_content frm_confirm" style="display: none">
                           <table class="table table-bordered">
                              <tr>
                                 <td>
                                    <label>会社名</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="company_name"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>お名前</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="kanji_familyname"></span>
                                    <span id="kanji_name"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>お名前（フリガナ）</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="kata_familyname"></span>
                                    <span id="kata_name"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>住所</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="postal-code"></span><br>
                                    <span id="pref"></span><br>
                                    <span id="city"></span><br>
                                    <span id="address"></span><br>
                                    <span id="building-room"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>電話番号</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="phone-number"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>メールアドレス</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="email"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>お問い合わせ項目</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="contact_item"></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>お問い合わせ内容</label>
                                 </td>
                                 <td class="confirm-text">
                                    <span id="contact_content"></span>
                                 </td>
                              </tr>
                           </table>
                           <div class="box_content_footer">
                               <div class="form-group text-center">
                                   <div class="row">
                                       <div class="col-12 col-lg-6">
                                           <button type="button" class="btn btnAgree" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                                       </div>
                                       <div class="col-12 col-lg-6">
                                           <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
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
      <?php endif; ?>
   </div>
</div>