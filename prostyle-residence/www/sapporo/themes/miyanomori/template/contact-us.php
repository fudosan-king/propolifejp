<?php
/* 
Template Name: Contact Us
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header2'); ?>
<main>
    <section class="section_contactus">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contactus_top">
                        <h2 class="title_sub">お問い合わせ</h2>
                        <p class="mb-0"><i class="i_tel"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_tel.svg" alt="" class="img-fluid" width="17"></i></p>
                        <h3>Tel. <a href="tel:0000000000">0000-00-0000</a></h3>
                        <p><small>受付時間：9:00～12:00／13:00～17:00（土日・祝日は除く）</small></p>
                        <p>物件のご相談・ご依頼や資料請求について、お問い合わせフォームよりお気軽にお問い合わせください。<br>
                            <span class="red">※</span>は必須項目です。</p>
                    </div>
                    <div class="contactus_content">
                        <form action="https://go.pardot.com/l/185822/2020-11-01/qmzh5l" class="frm_contactus" method="POST" >
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">メールアドレス<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="email" class="form-control required" placeholder="例：xxxxxxx@logrenove.jp" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">お名前<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">姓</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control required" placeholder="例：宮の森" name="kanji_familyname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">名</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control required" placeholder="例：太郎" name="kanji_name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="">お名前（フリガナ）</label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">セイ</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control" placeholder="例：ミヤノモリ" name="kata_familyname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="">メイ</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control" placeholder="例：タロウ" name="kata_name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">電話番号<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="例：0312341234　(※ハイフンなしでご記入ください)" name="phone_number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="" class="label_required" >お問い合わせ事項<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="contact_item[]">
                                            <label class="custom-control-label" for="customCheck1"><span>資料請求したい</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="contact_item[]" >
                                            <label class="custom-control-label" for="customCheck2"><span>営業から連絡が欲しい</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2_" name="contact_item[]">
                                            <label class="custom-control-label" for="customCheck2_"><span>営業から連絡が欲しい</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3_" name="contact_item[]">
                                            <label class="custom-control-label" for="customCheck3_"><span>オンライン商談がしたい</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="contact_item[]">
                                            <label class="custom-control-label" for="customCheck3"><span>その他お問い合わせ</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="" class="label_required">物件を知ったきっかけ<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck4"><span>ご友人からの紹介</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck5"><span>物件の近所に住んでいるので知っていた</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck6"><span>隈研吾のファンなので知っていた</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck7"><span>Web検索でたまたま知った</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck8"><span>SNS広告で知った</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="contact_ways[]">
                                            <label class="custom-control-label" for="customCheck9"><span>●●社からの物件紹介メールで知った</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">郵便番号<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control required" placeholder="例：1234567" name="postal_code">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <a class="btn_autozipcode" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/i_right.svg" alt="" class="img-fluid mr-2" width="20">郵便番号から住所を自動的入力</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">都道府県<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <select name="prefecture" id="" class="form-control custom-select required">
                                            <option value="">都道府県を選択してください </option>
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
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required" >住所<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required" >建物</label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control" name="building_name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required" >来場予約<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="" class="font-weight-normal">第1希望日時</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <div class="box_datetime">
                                                                    <input name="date_meeting_1" type="text" class="form-control datepicker required" placeholder="日付を選択">
                                                                    <i class="i_datetime"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <select name="time_meeting_1"  class="form-control custom-select required">
                                                                    <option value="時間を選択">時間を選択</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="20:00">20:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="" class="font-weight-normal">第2希望日時</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <div class="box_datetime">
                                                                    <input name="date_meeting_2" type="text" class="form-control datepicker required" placeholder="日付を選択">
                                                                    <i class="i_datetime"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <select name="time_meeting_2" class="form-control custom-select required">
                                                                    <option value="時間を選択">時間を選択</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="20:00">20:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="" class="label_required">ご希望の連絡時間帯<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" checked name="contact_gmt[]">
                                            <label class="custom-control-label" for="customCheck9">いつでも良い</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="contact_gmt[]">
                                            <label class="custom-control-label" for="customCheck10">平日の日中（10時～18時）</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="contact_gmt[]">
                                            <label class="custom-control-label" for="customCheck11">平日の夜間（18時～21時）</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="contact_gmt[]">
                                            <label class="custom-control-label" for="customCheck12">休日の日中（10時～18時）</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="contact_gmt[]">
                                            <label class="custom-control-label" for="customCheck13">休日の夜間（18時～21時）</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required">商談予約<span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="" class="font-weight-normal">第1希望日時</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <div class="box_datetime">
                                                                    <input name="date_synod_1" type="text" class="form-control datepicker required" placeholder="日付を選択">
                                                                    <i class="i_datetime"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <select name="time_synod_1" class="form-control custom-select required">
                                                                    <option value="時間を選択">時間を選択</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="20:00">20:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for="" class="font-weight-normal">第2希望日時</label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <div class="box_datetime">
                                                                    <input name="date_synod_2" type="text" class="form-control datepicker required" placeholder="日付を選択">
                                                                    <i class="i_datetime"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 mb-3">
                                                                <select name="time_synod_2" class="form-control custom-select required">
                                                                    <option value="時間を選択">時間を選択</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="20:00">20:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="">ご質問内容</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <textarea name="contact_question" class="form-control" cols="30" rows="5" placeholder="気になることがございましたらお気軽にご記入ください。
お打ち合わせ時に回答いたします。"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="">お問い合わせ内容</label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <textarea class="form-control" name="contact_content" cols="30" rows="5" placeholder="ご質問やご希望があればご記入ください。" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="frm_contactus_footer">
                                            <p class="text-center">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                個人情報の取扱に関しましては <a href="#">プライバシーポリシー</a> をご覧ください。<br>
                                                ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck_agree" checked>
                                                <label class="custom-control-label" for="ck_agree">同意する</label>
                                            </div>
                                            <button type="submit" class="btn btnsubmit" id="ibtnGoSubmit">上記に同意して確認画面へ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>