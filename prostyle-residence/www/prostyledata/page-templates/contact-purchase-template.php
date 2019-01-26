<?php 
/* Template Name: Contact Purchase Pardot Form - Page Template */
?>

<?php get_header();?>

<main>
	<section class="content-page contact">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>

							<h2 class="sub_title"><?php the_title(); ?></h2>
							
							<div id="main-content">
								<?php the_content(); ?>

								

								<?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>

								<!-- <h2 align="center">
			                        <div>資料請求が完了しました</div>
			                        <span style="line-height:3;">REGISTRATION COMPLETED</span>
			                    </h2> -->
			                	<div style="font-size:16pt; text-align:center; padding: 10% 0; border: #000 1px solid;">お問い合わせありがとうございました。</div>

								<?php else: ?>

								<!-- <div class="d-none d-sm-block" align="center" style="margin-bottom: 40px;">
									<img src="<?php //SGVinK::the_images_uri(); ?>/1x/logo.svg" alt="" class="img-responsive" style="width:350px;">
								</div> -->

								<form action="https://go.pardot.com/l/185822/2019-01-13/ctf4ss" method="POST" role="form" class="frm_contact">
			                        <!-- <h2 class="form-title d-none d-sm-block" style="margin-bottom: 30px;"></h2> -->

			                        <?php 
						                /*WORKING HOUR PART*/
						                $working_hour = get_field('working_hour', 'option');

						                if (!empty(get_field('working_hour_define')) && get_field('working_hour_define') == 'custom'){
						                    $working_hour = get_field('working_hour');
						                }
						            ?>
			                        <div class="contact_tel">
			                            <p><b>＜お電話でのお問い合わせについて＞</b><br>
			                            お電話でのお問い合わせは次の番号までお願いいたします。<br>
			                            電話番号：<a href="tel:<?php echo get_field('phone_number', 'option') ?>"><?php echo get_field('phone_number', 'option') ?></a> <br>
			                            <?php echo $working_hour; ?></p>
			                        </div>
			                        <p align="center">
			                            必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>
			                            <span class="red">＊</span>がついている項目はご記入必須項目になります。
			                        </p>
			                        <br>
									
									<section class="defaultForm">
									
				                        <legend>■用地情報をご入力ください</legend>
				                        <dl class="Rtable Rtable--3cols Rtable--collapse table_register web_info">

				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>土地所在地  <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                <div class="row">
				                                    <div class="col-lg-3">
				                                        <p><strong>郵便番号</strong></p>
				                                    </div>
				                                    <div class="col-lg-3">
				                                        <div class="form-group">
				                                            <input name="shiire_post" type="text" class="form-control" id="shiire_post" placeholder="" onkeyup="AjaxZip3.zip2addr(this,'','shiire_pref','shiire_city');">
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
				                                            <select name="shiire_pref" id="shiire_pref" class="form-control" required="required"  onchange="">
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
				                                            <input name="shiire_city" type="text" class="form-control" id="shiire_city" placeholder="">
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
				                                            <input name="shiire_aza" type="text" class="form-control" id="shiire_aza" placeholder="">
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
				                                            <input name="shiire_building_roomnumber" type="text" class="form-control" id="shiire_building_roomnumber" placeholder="">
				                                        </div>
				                                    </div>
				                                </div>
				                                 <div class="row">
				                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                                        <span class="error-text shiire_address">値を入力してください</span>
				                                    </div>
				                                </div>
				                            </dd>
				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>面積 <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                <div class="row">
				                                    <div class="col-lg-12">
				                                        <div class="form-inline">
				                                        	<label>約&nbsp;</label>
				                                            <input name="shiire_sqm" type="text" class="form-control" id="shiire_sqm" placeholder=""><label>&nbsp;坪（半角でご入力ください）※1m <sup>2</sup>=0.3025坪</label>
				                                        </div>
				                                    </div>
				                                </div>
				                                 <div class="row">
				                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                                        <span class="error-text shiire_sqm">値を入力してください</span>
				                                    </div>
				                                </div>
				                            </dd>

				                            <dt class="Rtable-cell Rtable-cell--medium Finish"><strong>利用状況 <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd Finish">
				                                <div class="row">
				                                    <div class="col-lg-12">
				                                        <div class="form-group">
				                                            <ul class="shiire_latest">
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="" value="ご自宅"  onchange=""> ご自宅
				                                                        </label>
				                                                    
				                                                </li>
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="shiire_latest_1" value="駐車場" onchange=""> 駐車場
				                                                        </label>
				                                                    
				                                                </li>
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="shiire_latest_2" value="戸建" onchange=""> 戸建
				                                                        </label>
				                                                    
				                                                </li>
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="shiire_latest_3" value="アパート" onchange=""> アパート
				                                                        </label>
				                                                    
				                                                </li>
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="shiire_latest_4" value="ビル" onchange=""> ビル
				                                                        </label>
				                                                    
				                                                </li>
				                                                <li>
				                                                    
				                                                        <label>
				                                                            <input type="checkbox" name="shiire_latest[]" id="shiire_latest_5" value="その他" onchange="">
				                                                            その他
				                                                        </label>
				                                                    
				                                                </li>

				                                            </ul>
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="row">
				                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                                        <span class="error-text shiire_latest">値を入力してください</span>
				                                    </div>
				                                </div>
				                            </dd>
				                           
				                        </dl>

				                        <legend>■連絡先をご入力ください</legend>
				                        <dl class="Rtable Rtable--3cols Rtable--collapse table_register human_info">
		
				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>情報提供者様のお名前 <span class="red">＊</span></strong></dt>
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
				                                <textarea name="free_detail_contact" id="free_detail_contact" class="form-control" rows="8" required="required"></textarea>
				                                <div class="row">
				                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                                        <span class="error-text iken">値を入力してください</span>
				                                    </div>
				                                </div>
				                            </dd>
				                            <!-- <dt class="Rtable-cell Rtable-cell--medium"><strong>個人情報の取扱について <span class="red">＊</span>

				                      </strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                <div class="box_dot">
				                                    <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
				                                </div>
				                                <p><a class="btn btn-link" href="https://www.prostyle-residence.com/privacypolicy">▶「プライバシーポリシー」を開く（売主：株式会社プロスタイル）</a></p>
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
				                            </dd> -->
				                            <!-- <dt class="Rtable-cell Rtable-cell--medium"><strong></strong></dt> -->
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd text-center" style="border-bottom: none;">
				                                <input type="button" class="btn btn-lg btnForm" id="goConfirm" value="入力内容を確認する">
				                                <!-- <input type="button" class="btn btn-lg btnForm" id="goTest" value="BUTTON TEST"> -->
				                            </dd>
				                        </dl>

			                        </section>

			                        <section class="confirmForm">

			                        	<legend>■用地情報をご入力ください</legend>
				                        <dl class="Rtable Rtable--3cols Rtable--collapse">

				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>土地所在地  <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                <div class="row  cfrm_shiire_address">

				                                </div>
				                            </dd>
				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>面積 <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                <div class="row  cfrm_shiire_sqm">

				                                </div>
				                            </dd>
				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>利用状況  <span class="red">＊</span></strong></dt>
				                            <dd class="Rtable-cell Rtable-cell--highlight Rtable-cell--2of3 Rtable-cell--rowEnd">
				                                 <div class="row  cfrm_shiire_latest">

				                                </div>
				                            </dd>

										</dl>

										<legend>■連絡先をご入力ください</legend>
				                        <dl class="Rtable Rtable--3cols Rtable--collapse">


				                            <dt class="Rtable-cell Rtable-cell--medium"><strong>情報提供者様のお名前 <span class="red">＊</span></strong></dt>
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

			                         </section>


			                    </form>

			                    <?php endif; ?>
						
							</div>

							<?php
						endwhile;
					else:
						?>
							<p align="center">404 Page not found.</p>
						<?php
					endif;
					?>

					
				</div>
			</div>
		</div>
	</section>
</main>


<?php get_footer();?>