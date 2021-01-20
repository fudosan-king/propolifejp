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
                <?php $contact_us_headings = get_field('contact_us_headings'); ?>
                <div class="col-12 col-lg-12">
                    <div class="contactus_top">
                        <h2 class="title_sub"><?php echo $contact_us_headings['heading_text']; ?></h2>
                        <p class="mb-0"><i class="i_tel"><img src="<?php bloginfo('template_url'); ?>/assets/images/SVG/i_tel.svg" alt="" class="img-fluid" width="17"></i></p>
                        <h3>Tel. <a href="tel:0120853133"><?php echo $contact_us_headings['tel_number'] ?></a></h3>
                        <p class="op-cl-time"><?php echo $contact_us_headings['work_time']; ?></p>
                        <p><small><?php echo $contact_us_headings['small_note'] ?></small></p>
                        <p><?php echo $contact_us_headings['big_note']; ?></p>
                    </div>
                    <div class="contactus_content">
                        <?php $form_labels = get_field('form_labels'); ?>
                        <form action="https://go.pardot.com/l/185822/2020-11-01/qmzh5l" class="frm_contactus" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required" ><?php echo $form_labels['email']; ?><span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="<?php echo $form_labels['email_placeholder']; ?>" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3 align-self-center">
                                        <label for="" class="label_required" ><?php echo $form_labels['name']; ?><span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for=""><?php echo $form_labels['kanji_familyname'] ?></label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control required" placeholder="<?php echo $form_labels['kanji_family_name_placeholder']; ?>" name="kanji_familyname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for=""><?php echo $form_labels['kanji_name'] ?></label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control required" placeholder="<?php echo $form_labels['kanji_name_placeholder']; ?>" name="kanji_name">
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
                                        <label for=""><?php echo $form_labels['name_2'] ?></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for=""><?php echo $form_labels['kata_familyname'] ?></label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control" placeholder="<?php echo $form_labels['kata_family_name_placeholder'] ?>" name="kata_familyname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-12 col-lg-2 align-self-center">
                                                        <label for=""><?php echo $form_labels['kata_name'] ?></label>
                                                    </div>
                                                    <div class="col-12 col-lg-10 align-self-center mb-2 mb-lg-0">
                                                        <input type="text" class="form-control" placeholder="<?php echo $form_labels['kata_name_placeholder'] ?>" name="kata_name">
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
                                        <label for="" class="label_required"><?php echo $form_labels['phone'] ?><span class="red">（※）</span></label>
                                    </div>
                                    <div class="col-12 col-lg-9 align-self-center">
                                        <input type="text" class="form-control required" placeholder="<?php echo $form_labels['phone_placeholder'] ?>" name="phone_number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label for="" class="label_required"><?php echo $form_labels['check_box_text'] ?><span class="red">（※）</span></label>
                                        <input type="hidden"  name="contact_item_text" value="">
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_document" id="customCheck1" name="contact_item[]" value="資料請求したい">
                                            <label class="custom-control-label" for="customCheck1"><span><?php echo $form_labels['check_1'] ?></span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_meet " id="customCheck2" name="contact_item[]" value="来場予約したい">
                                            <label class="custom-control-label" for="customCheck2"><span><?php echo $form_labels['check_2'] ?></span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_staff" id="customCheck3_" name="contact_item[]" value="担当者から連絡が欲しい">
                                            <label class="custom-control-label" for="customCheck3_"><span><?php echo $form_labels['check_3'] ?></span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input contact_item_other" id="customCheck4_" name="contact_item[]" value="その他お問い合わせ">
                                            <label class="custom-control-label" for="customCheck4_"><span><?php echo $form_labels['check_4'] ?></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="materials">
                                <?php $document_request = get_field('document_request'); ?>
                                <p><?php echo $document_request['title']; ?></p>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="" class="label_required"><?php echo $document_request['input_1_label']; ?><span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <input type="text" class="form-control numbersOnly" name="postal_code" placeholder="<?php echo $document_request['input_1_placeholder']; ?>" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','city', 'chome_address')" >
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <a class="btn_autozipcode" id="btn_autozipcode" href="javascript:void(0)" onclick="AjaxZip3.zip2addr('postal_code','','prefecture','city', 'chome_address')"><img src="<?php bloginfo('template_url'); ?>/assets/images/SVG/i_right.svg" alt="" class="img-fluid mr-2" width="20">
                                                        <?php echo $document_request['input_1_note']; ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="" class="label_required" ><?php echo $document_request['input_2_label']; ?><span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <select name="prefecture" class="form-control custom-select">
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
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="" class="label_required"><?php echo $document_request['input_3_label']; ?><span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for=""><?php echo $document_request['input_4_label']; ?></label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <input type="text" class="form-control" name="building_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reservation">
                                <?php $book_a_visit = get_field('book_a_visit'); ?>
                                <p><?php echo $book_a_visit['title']; ?></p>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="" class="label_required"><?php echo $book_a_visit['input_1_label']; ?><span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="row  align-self-center">
                                                <!-- <div class="col-12 col-lg-12"> -->
                                                    <!-- <div class="row"> -->
                                                        <div class="col-12 col-lg-2">
                                                            <label for="" class="font-weight-normal"><?php echo $book_a_visit['input_1_des']; ?></label>
                                                        </div>
                                                       <!--  <div class="col-12 col-lg-10">
                                                            <div class="row"> -->
                                                                <div class="col-12 col-lg-5 pb-3">
                                                                    <div class="box_datetime">
                                                                        <input type="text" class="form-control datepicker" placeholder="<?php echo $book_a_visit['datepicker_1_placeholder']; ?>" name="date_meeting_1" readonly>
                                                                        <i class="i_datetime"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-5 pb-3">
                                                                    <select name="time_meeting_1" class="form-control custom-select">
                                                                        <option value="" ><?php echo $book_a_visit['timpicker_1_placeholder']; ?></option>
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
                                                       <!--      </div>
                                                        </div> -->
                                            </div>
                                            <div class="row  align-self-center">            
                                                        <div class="col-12 col-lg-2">
                                                            <label for="" class="font-weight-normal"><?php echo $book_a_visit['input_2_des']; ?></label>
                                                        </div>
                                                        <!-- <div class="col-12 col-lg-10 align-self-center"> -->
                                                            <!-- <div class="row"> -->
                                                                <div class="col-12 col-lg-5 pb-3">
                                                                    <div class="box_datetime">
                                                                        <input type="text" class="form-control datepicker" placeholder="<?php echo $book_a_visit['datepicker_2_placeholder']; ?>" name="date_meeting_2" readonly>
                                                                        <i class="i_datetime"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-5 pb-3">
                                                                    <select name="time_meeting_2" class="form-control custom-select">
                                                                        <option value="" ><?php echo $book_a_visit['timpicker_2_placeholder']; ?></option>
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
                                                            <!-- </div> -->
                                                        <!-- </div> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for=""><?php echo $book_a_visit['textarea_label']; ?></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="placeholder">
                                                <?php echo $book_a_visit['textarea_placeholder']; ?>
                                            </div>
                                            <textarea  name="reservation_question" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_sale">
                                <?php $contact_request = get_field('contact_request'); ?>
                                <p><?php echo $contact_request['title']; ?></p>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="" class="label_required" ><?php echo $contact_request['radio_label']; ?><span class="red">（※）</span></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="row">
                                                <div class="col-md-2 custom-checkradio">
                                                    <label class="check-radio"><?php echo $contact_request['check_box_1']; ?>
                                                        <input type="radio" checked="checked" name="contact_method" value="メール">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-2 custom-checkradio">
                                                    <label class="check-radio"><?php echo $contact_request['check_box_2'] ?>
                                                        <input type="radio"  value="電話" name="contact_method" value="電話">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="" class="label_required" ><?php echo $contact_request['select_label']; ?><span class="red">（※）</span></label>
                                            <input type="hidden"  name="contact_gmt_text" value="">
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9" checked name="contact_gmt[]" value="いつでも良い">
                                                <label class="custom-control-label" for="customCheck9"><?php echo $contact_request['selection_1']; ?></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10" name="contact_gmt[]" value="平日の日中（10時～18時）">
                                                <label class="custom-control-label" for="customCheck10"><?php echo $contact_request['selection_2']; ?></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11" name="contact_gmt[]" value="平日の夜間（18時～21時）">
                                                <label class="custom-control-label" for="customCheck11"><?php echo $contact_request['selection_3']; ?></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12" name="contact_gmt[]" value="休日の日中（10時～18時）">
                                                <label class="custom-control-label" for="customCheck12"><?php echo $contact_request['selection_4']; ?></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13" name="contact_gmt[]" value="休日の夜間（18時～21時）">
                                                <label class="custom-control-label" for="customCheck13"><?php echo $contact_request['selection_5']; ?></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <p><?php echo $contact_request['select_note']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for=""><?php echo $contact_request['textarea_label']; ?></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <div class="placeholder">
                                                <?php echo $contact_request['textarea_placeholder']; ?>
                                            </div>
                                            <textarea  name="sale_contact_question" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-other">
                                <?php $other_inquiry = get_field('other_inquiry'); ?>
                                <p><?php echo $other_inquiry['title']; ?></p>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for=""><?php echo $other_inquiry['textarea_label'] ?></label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <textarea name="contact_content" class="form-control" cols="30" rows="5" placeholder="<?php echo $other_inquiry['textarea_placeholder'] ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="frm_contactus_footer">
                                            <?php echo $form_labels['confirmation_text'] ?>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck_agree" checked>
                                                <label class="custom-control-label label_required" for="ck_agree"><?php echo $form_labels['agree_label'] ?></label>
                                            </div>
                                            <button type="submit" class="btn btnsubmit" id="ibtnGoSubmit" ><span><?php echo $form_labels['submit_button'] ?></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <section class="form_info  frm_confirm" style="display: none; max-width: 600px; margin:0 auto;">
                                <!-- 会社名 -->
                                <div class="row non-require frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required" >メールアドレス : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_email" ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- お名前 -->
                                <div class="row require frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                               <label for="" class="label_required" >お名前 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="cfr cfrm_kanji_familyname"></span> <span class="cfr cfrm_kanji_name"></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- フリガナ -->
                                <div class="row require frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="">お名前（フリガナ）: </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="cfr cfrm_kata_familyname"></span> <span class="cfr cfrm_kata_name"></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ご住所 -->
                                <div class="row require frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required">お電話番号 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_phone_number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ご連絡先電話番号 -->
                                <div class="row require frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required">お問い合わせ事項 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_contact_item">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- メールアドレス -->
                                <div class="row require section_contact_item cfrm_contact_item_document frm_confirm_item">
                                    <div class="col-12 left-side">
                                        <div class="row">
                                            <div class="ccol-12 col-sm-12 col-md-4 col-lg-4">
                                                <label for="" class="label_required">郵便番号 :   </label>
                                            </div>
                                            <div class="ccol-12 col-sm-12 col-md-8 col-lg-8">
                                                 <span class="cfrm_postal_code"> </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row require section_contact_item cfrm_contact_item_document frm_confirm_item">
                                    <div class="col-12 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                <label for="" class="label_required">都道府県 :  </label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                 <span class="cfrm_prefecture"> </span>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row require section_contact_item cfrm_contact_item_document frm_confirm_item">
                                    <div class="col-12  left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                <label for="" class="label_required">住所 :   </label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                <span class="cfrm_city"> </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- お問い合わせ項目(複数選択可) -->
                                <div class="row require section_contact_item cfrm_contact_item_document frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="">建物名・号室 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_building_name" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- お問い合わせ項目(複数選択可) -->
                                <div class="row require section_contact_item cfrm_contact_item_meet frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required">ご来場予約 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="cfr cfrm_date_meeting_1" ></span> <span class="cfr cfrm_time_meeting_1" ></span>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <span class="cfr cfrm_date_meeting_2" ></span>  <span class="cfr cfrm_time_meeting_2" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- お問い合わせ内容 -->
                                <div class="row require section_contact_item cfrm_contact_item_meet frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="">ご質問内容 :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_reservation_question" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- お問い合わせ項目(複数選択可) -->
                                <div class="row require section_contact_item cfrm_contact_item_staff frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required" >ご希望の連絡方法 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_contact_method">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- お問い合わせ項目(複数選択可) -->
                                <div class="row require section_contact_item cfrm_contact_item_staff frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="" class="label_required" >ご希望の連絡時間帯 : </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_contact_gmt" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- お問い合わせ内容 -->
                                <div class="row require section_contact_item  cfrm_contact_item_staff frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <label for="">ご質問内容 :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_sale_contact_question" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- お問い合わせ内容 -->
                                <div class="row require section_contact_item cfrm_contact_item_other frm_confirm_item">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                 <label for="">お問い合わせ内容 :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="cfr cfrm_contact_content" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <div class="end-form" style="width: 100%;">
                                            <button type="button" class="btn w-100 btn_brown " id="goBack" value="戻る"> 戻る</button>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="end-form" style="width: 100%;">
                                            <button type="button" class="btn w-100 btn_brown " id="goSubmit" value="送信する">送信する</button>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>