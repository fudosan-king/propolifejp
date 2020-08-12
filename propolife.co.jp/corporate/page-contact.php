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
                <?php the_content(); ?>

                <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>
                    <h2 class="headLine02" style="text-align: center;"><b>お問い合わせを受け付けました</b></h2>
                    <p>確認後、追って担当者よりご連絡させていただきます。 <br>
                    ※当社指定休⽇を挟んだ場合、ご連絡までに⽇数がかかる場合があります。あらかじめご了承ください。</p>
                    <p>&nbsp;</p>
                    <p>《株式会社プロポライフグループ》</p>
                    <p>東京都港区北⻘⼭3-6-23</p>
                    <!-- <p>電話：03-6897-8560</p> -->
                <?php else: ?>

                    <form action="https://go.pardot.com/l/185822/2019-06-27/hnbz5j" method="POST" role="form" class="frm_contact">
                        <h2 class="form-title" style="margin-bottom: 30px;">お問い合わせ</h2>

                        <!-- <div class="contact_tel">
                            <p>
                                <b>＜お電話でのお問い合わせについて＞</b> <br>
                                お電話でのお問い合わせは次の番号までお願いいたします。 <br>
                                　電話番号：<a href="tel:03-6897-8560">03-6897-8560</a> <br>
                                　営業時間：10：00～19：00
                            </p>
                        </div> -->

                        <p align="center">
                            必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
                            <span class="red">＊</span>がついている項目はご記入必須項目になります。
                        </p>
                        <dl class="Rtable Rtable--3cols Rtable--collapse table_register">
                            <!-- <dt class="Rtable-cell Rtable-cell--medium"><strong>来場予約・資料請求 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-3" style="display:none;">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="iraijo" value="来場予約">来場予約</label>
                                                <input type="hidden" name="raijo" id="input" class="form-control" value="false">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" style="display:none;">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="isiryou" value="資料請求">資料請求</label>
                                                <input type="hidden" name="siryou" id="input" class="form-control" value="false">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="form-title"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text type">値を入力してください</span>
                                    </div>
                                </div>
                            </dd> -->

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お問い合わせ項目 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ul class="list_interest">
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="" value="採用に関するお問い合わせ" checked="checked" onchange=""> 採用に関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="category_contact_1" value="物件・リフォームに関するお問い合わせ" onchange=""> 物件・リフォームに関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="category_contact_2" value="不動産買取りに関するお問い合わせ" onchange=""> 不動産買取りに関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="category_contact_3" value="アフターサービスに関するお問い合わせ" onchange=""> アフターサービスに関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="category_contact_4" value="取材・撮影に関するお問い合わせ" onchange=""> 取材・撮影に関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="category_contact[]" id="category_contact_5" value="その他サービスに関するお問い合わせ" onchange="">
                                                            その他サービスに関するお問い合わせ
                                                        </label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
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

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>貴社名（※法人様の場合）</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="company_name" type="text" class="form-control" id="company_name" placeholder="貴社名">
                                        </div>
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご住所  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p><strong>郵便番号</strong></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input name="post" type="text" class="form-control" id="post" placeholder="" onkeyup="AjaxZip3.zip2addr(this,'','pref','city');">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
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
                                            <label for="">建物・部屋番号</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <input name="building-roomnumber" type="text" class="form-control" id="building-roomnumber" placeholder="">
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
                            
                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>お問い合わせ内容 <span class="red">＊</span></strong>
                                <p>（全角2000字まで）</p>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <textarea name="free_detail_contact" id="free_detail_contact" class="form-control" rows="5" required="required"></textarea>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span class="error-text iken">値を入力してください</span>
                                    </div>
                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>個人情報の取扱について <span class="red">＊</span>

                      </strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="box_dot">
                                    <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                </div>
                                <p><a class="btn btn-link" href="https://www.propolife.co.jp/privacypolicy/">▶「プライバシーポリシー」を開く（株式会社プロポライフグループ）</a></p>
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

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>お問い合わせ項目<span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_firstimpression">

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

                            <dt class="Rtable-cell Rtable-cell--medium"><strong>貴社名（※法人様の場合）</strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_companyname">

                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご住所  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_address">

                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>ご連絡先電話番号 <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                <div class="row  cfrm_phonenumber">

                                </div>
                            </dd>
                            <dt class="Rtable-cell Rtable-cell--medium"><strong>メールアドレス  <span class="red">＊</span></strong></dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                                 <div class="row  cfrm_email">

                                </div>
                            </dd>

                            <dt class="Rtable-cell Rtable-cell--medium">
                                <strong>お問い合わせ内容</strong>
                                <p>（全角2000字まで）</p>
                            </dt>
                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
                               <div class="row  cfrm_comments">

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