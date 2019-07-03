<?php 
/*Template Name: Contact Page */

get_header();
?>

<section id="mainVisual">
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
                    <div class="message">
                        <h2>お問い合わせを受け付けました</h2>
                        <p>確認後、追って担当者よりご連絡させていただきます。 <br> ※当社指定休⽇を挟んだ場合、ご連絡までに⽇数がかかる場合があります。あらかじめご了承ください。</p>
                        <p>&nbsp;</p>
                        <h3>事業⽤不動産に関するお電話でのお問い合わせ</h3>
                        <p>《株式会社クロニクル 開発事業部》</p>
                        <p>東京表参道&emsp;：03-6897-8570 <br>東京⽇本橋&emsp;：03-5299-0200 <br>横浜&emsp;：045-277-0750 <br>名古屋：052-218-6840 <br>京都&emsp;：075-283-0440 <br>⼤阪&emsp;：06-7669-9680 <br>神⼾&emsp;：078-322-2250 <br>福岡&emsp;：092-688-9180</p>
                        <p>営業時間：10：00〜19：00（＊⽕・⽔曜⽇定休&emsp;※祝⽇を除く）</p>
                    </div>
                <?php else: ?>
                    <br>
                    <form action="https://go.pardot.com/l/185822/2019-07-14/hvl9zq" method="POST" role="form" class="frm_contact">
                        <h2 class="form-title" style="margin-bottom: 30px;">事業用不動産の買取り査定・お問い合わせ（法人専用）</h2>

                        <p align="center">
                            必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                            <span class="red">＊</span>がついている項目はご記入必須項目になります。
                        </p>
                        <dl class="Rtable Rtable--3cols Rtable--collapse table_register">

                            <dt class="Rtable-cell Rtable-cell--medium">
                                  <strong>物件種別 <span class="red">＊</span></strong>
                              </dt>
                              <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="checkbox">
                                              <label>
                                                  <input name="estate_type[]" id="estate_type_1" type="checkbox" value="マンション" onchange=""> マンション
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">

                                      <div class="col-lg-4">
                                          <div class="checkbox">
                                              <label>
                                                  <input name="estate_type[]" id="estate_type_2" type="checkbox" value="土地" onchange=""> 土地
                                              </label>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="row">

                                      <div class="col-lg-4">
                                          <div class="checkbox">
                                              <label>
                                                  <input name="estate_type[]" id="estate_type_2" type="checkbox" value="その他（ホテル・会社寮等）" onchange=""> その他（ホテル・会社寮等）
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <span class="error-text estate_type" style="margin-top: 15px;">値を入力してください</span>
                                        </div>
                                    </div>
                              </dd>

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>物件住所  <span class="red">＊</span></strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <textarea name="shiire_address" id="shiire_address" class="form-control" rows="3" required="required"></textarea>
                                <p>※マンションの場合は「建物名」と「部屋番号」を正確にご記入ください </p>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text shiire_address">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>専有面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-10 col-lg-2">
                                        <div class="form-group">
                                            <input name="room_sqm" type="number" min="0" class="form-control" id="room_sqm" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-2 col-lg-1">
                                        <span>m<sup>2</sup></span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>建物面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-10 col-lg-2">
                                        <div class="form-group">
                                            <input name="building_sqm" type="number" min="0" class="form-control" id="building_sqm" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-2 col-lg-1">
                                        <span>m<sup>2</sup></span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>土地面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-10 col-lg-2">
                                        <div class="form-group">
                                            <input name="lot_sqm" type="number" min="0" class="form-control" id="lot_sqm" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-2 col-lg-1">
                                        <span>m<sup>2</sup></span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>間取り</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <input name="room_type" type="text" class="form-control" id="room_type" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>築年月</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <!-- <div class="row">
                                    <div class="col-2 col-lg-1">
                                        <p>西暦</p>
                                    </div>
                                    <div class="col-5 col-lg-2">
                                        <div class="form-group">
                                            <input name="building_age_year" type="number" class="form-control" id="building_age_year" placeholder="年">
                                        </div>
                                    </div>
                                    <div class="col-5 col-lg-2">
                                        <div class="form-group">
                                            <input name="building_age_month" type="number" class="form-control" id="building_age_month" placeholder="月">
                                        </div>
                                    </div>
                                    <input type="hidden" name="building_age" id="building_age" class="form-control" value="">
                                </div> -->
                                <div class="row">
                                    <div class="col-2 col-lg-1">
                                        <p>西暦</p>
                                    </div>
                                    <div class="col-5 col-lg-2">
                                        <div class="form-group">
                                            <input name="building_age" type="text" class="form-control" id="building_age" placeholder="年-月">
                                            
                                        </div>
                                    </div>
                                </div>
                            </dd>

                             <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>備考 </strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium div-line"><strong>法人名 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd div-line">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="company_name" type="text" class="form-control" id="company_name" placeholder="貴社名">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text company_name">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お名前 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input name="last-name" id="last-name" type="text" class="form-control" placeholder="姓" value="">
                                        </div>
                                    </div>
                                    <div class="col-6">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input name="myouji" type="text" class="form-control" id="myouji" placeholder="セイ">
                                        </div>
                                    </div>
                                    <div class="col-6">
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

                            
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご住所  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-3">
                                        <p><strong>郵便番号</strong></p>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input name="post" type="text" class="form-control" id="post" placeholder="" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="button" class="btn btn-xs btn-danger indentityLocation"  value="住所検索">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">都道府県</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <select name="pref" id="pref" class="form-control" required="required"  onchange="">
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
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">市区町村</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input name="city" type="text" class="form-control" id="city" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">丁目番地</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input name="aza" type="text" class="form-control" id="aza" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">建物名</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input name="building_name" type="text" class="form-control" id="building_name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text address">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご連絡先電話番号 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text phone-number">値を入力してください</span>
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

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>個人情報の取扱について <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="box_dot">
                                    <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                </div>
                                <p><a class="btn btn-link" href="https://www.chronicle-web.com/policy/">▶「プライバシーポリシー」を読む</a></p>
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

                        <dl class="Rtable Rtable--3cols Rtable--collapse table_confirm" style="display:none;">

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>物件種別  <span class="red">＊</span></strong></dt>
                              <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                   <div class="row">
                                    <div class="col-12 cfrm_estate_type">
                                        
                                    </div>

                                  </div>
                              </dd>

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>物件住所 <span class="red">＊</span></strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                               <div class="row">
                                <div class="col-12 cfrm_shiire_address">
                                    
                                </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>専有面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_room_sqm"></div>
                                        
                                    </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>建物面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_building_sqm"></div>
                                        
                                    </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>土地面積</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_lot_sqm"></div>
                                        
                                    </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>間取り</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_room_type"></div>
                                        
                                    </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>築年月</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 cfrm_building_age"></div>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>備考</strong>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                               <div class="row">
                                <div class="col-12 cfrm_comment">
                                    
                                </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium div-line"><strong>法人名 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd div-line">
                                <div class="row">
                                    <div class="col-12 cfrm_companyname">
                                        
                                    </div>
                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お名前 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_name">
                                        
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>フリガナ <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_phonetic">
                                        
                                    </div>
                                </div>
                            </dd>

                            
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご住所  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_address">
                                        
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご連絡先電話番号 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-12 cfrm_phonenumber">
                                        
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>メールアドレス  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                 <div class="row">
                                    <div class="col-12 cfrm_email">
                                        
                                    </div>
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

        <p>&nbsp;</p>
        <div class="pagenav_box"> </div>
        <p>&nbsp;</p>
    </section>
</div>
<p><!-- /#main --></p>

<?php get_footer(); ?>