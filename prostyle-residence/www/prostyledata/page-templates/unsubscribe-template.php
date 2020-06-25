<?php 
/* Template Name: Unsubscribe - Page Template */
?>

<?php get_header();?>

<main>
	<section class="content-page unsubscribe">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<?php 
					if(have_posts()):
						while(have_posts()): the_post();
							$thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
							?>

							<!-- <h2 class="sub_title"><?php //the_title(); ?></h2> -->
							
							<div id="main-content">
								<?php the_content(); ?>
					
								<section class="extra-content">

									<div id="section_title">
							            <h2><?php the_title(); ?></h2>
							            <!--<p class="ruby"><?php //echo strtoupper(str_replace('-', ' ', $post->post_name)); ?></p>-->
							            <!-- <p class="sapphire">株式会社プロスタイルでは、分譲マンション建設用地を募集し購入を積極的に行っております。</p> -->
							            <p class="line"></p>
							        </div>

									<div id="contents_inner">
									    
									    <?php if(isset($_GET['finish']) && $_GET['finish'] == 1): ?>

										<!-- <h2 align="center">
					                        <div>資料請求が完了しました</div>
					                        <span style="line-height:3;">REGISTRATION COMPLETED</span>
					                    </h2> -->
					                	<div style="font-size:16pt; text-align:center; padding: 10% 0; border: #000 1px solid;">お問い合わせありがとうございました。</div>

										<?php else: ?>

											<p>■物件情報停止依頼<br>
		                                    お名前・メールアドレス等をご記入の上、「確認」ボタンを押して下さい。<br>
		                                    ●配信停止の手続きに必要となりますので、全ての項目にご記入頂きますようお願いいたします。<br>
		                                    ●<span class="red">（※）</span>は必須入力項目となっております。</p>

											<form action="https://go.pardot.com/l/185822/2020-06-23/q7777x" method="POST" role="form" class="frm_email">
												
												<section class="defaultForm">
			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">物件情報停止内容 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="custom-control custom-radio custom-control-inline">
			                                                    <input class="custom-control-input" type="radio" name="suspension_type[]" id="enquete1_1" value="メール配信のみ" checked>
			                                                    <label class="custom-control-label" for="enquete1_1">
			                                                       メール配信のみ
			                                                    </label>
			                                                </div>
			                                                <div class="custom-control custom-radio custom-control-inline">
			                                                    <input class="custom-control-input" type="radio" name="suspension_type[]" id="enquete1_2" value="郵送のみ">
			                                                    <label class="custom-control-label" for="enquete1_2">
			                                                        郵送のみ
			                                                    </label>
			                                                </div>
			                                                <div class="custom-control custom-radio custom-control-inline">
			                                                    <input class="custom-control-input" type="radio" name="suspension_type[]" id="enquete1_3" value="メール配信＋郵送">
			                                                    <label class="custom-control-label" for="enquete1_3">
			                                                        メール配信＋郵送
			                                                    </label>
			                                                </div>
			                                            </div>
			                                        </div>


			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">配信されているご氏名 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="row">
			                                                    <div class="col-12 col-md-6 align-self-center">
			                                                        <div class="row mb-2 mb-md-0">
			                                                            <div class="col-2 col-md-2 align-self-center">
			                                                                <label for="">姓</label>
			                                                            </div>
			                                                            <div class="col-10 col-md-10 align-self-center">
			                                                                <input type="text" name="family_name" id="family_name" class=" form-control" value="">
			                                                            </div>
			                                                        </div>
			                                                    </div>
			                                                    <div class="col-12 col-md-6 align-self-center">
			                                                        <div class="row mb-2 mb-md-0">
			                                                            <div class="col-2 col-md-2 align-self-center">
			                                                                <label for="">名</label>
			                                                            </div>
			                                                            <div class="col-10 col-md-10 align-self-center">
			                                                                <input type="text" name="first_name" id="first_name" class=" form-control" value="">
			                                                            </div>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">ふりがな <span class="red">（※）</span>（全角）</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="row">
			                                                    <div class="col-12 col-md-6 align-self-center">
			                                                        <div class="row mb-2 mb-md-0">
			                                                            <div class="col-2 col-md-2 align-self-center">
			                                                                <label for="">セイ</label>
			                                                            </div>
			                                                            <div class="col-10 col-md-10 align-self-center">
			                                                                <input type="text" name="family_name_kana" id="family_name_kana" class=" form-control" value="">
			                                                            </div>
			                                                        </div>
			                                                    </div>
			                                                    <div class="col-12 col-md-6 align-self-center">
			                                                        <div class="row mb-2 mb-md-0">
			                                                            <div class="col-2 col-md-2 align-self-center">
			                                                                <label for="">メイ</label>
			                                                            </div>
			                                                            <div class="col-10 col-md-10 align-self-center">
			                                                                <input type="text" name="first_name_kana" id="first_name_kana" class=" form-control" value="">
			                                                            </div>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">ご住所 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="row">
			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【郵便番号】</label>
			                                                    </div>
			                                                    <div class="col-6 col-md-3 align-self-center mb-2">
			                                                        <input type="text" name="post_1" id="eCOL_475" class="form-control" maxlength="3" value="" style="ime-mode:inactive;" onkeyup="AjaxZip3.zip2addr(this, 'post_2','pref','city','town','aza');">
			                                                    </div>
			                                                    <div class="col-6 col-md-3 align-self-center mb-2">
			                                                        <input type="text" name="post_2" id="eCOL_476" class="form-control" maxlength="4" value="" style="ime-mode:inactive;" onkeyup="AjaxZip3.zip2addr('post_1', this,'pref','city','town','aza');">
			                                                        <span class="line_space">&ndash;</span>
			                                                    </div>
			                                                    <div class="col-12 col-md-4 align-self-center mb-2">
			                                                        <p class="mb-0"><span class="font_sm">（海外居住の方は"000-0000" と入れてください）</span></p>
			                                                    </div>

			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【都道府県】</label>
			                                                    </div>
			                                                    <div class="col-12 col-md-6 align-self-center mb-2">
			                                                        <select name="pref" class="custom-select">
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
			                                                    <div class="col-12 col-md-4 align-self-center mb-2">
			                                                    </div>

			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【市区名】</label>
			                                                    </div>
			                                                    <div class="col-12 col-md-10 align-self-center mb-2">
			                                                        <input type="text" name="city" id="city" class="form-control" value="">
			                                                    </div>

			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【町村名】</label>
			                                                    </div>
			                                                    <div class="col-12 col-md-10 align-self-center mb-2">
			                                                        <input type="text" name="town" id="town" class="form-control" value="">
			                                                    </div>

			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【丁目番地】</label>
			                                                    </div>
			                                                    <div class="col-12 col-md-10 align-self-center mb-2">
			                                                        <input type="text" name="aza" id="aza" class="form-control" value="">
			                                                    </div>

			                                                    <div class="col-12 col-md-2 align-self-center mb-2">
			                                                        <label for="">【マンション名】</label>
			                                                    </div>
			                                                    <div class="col-12 col-md-10 align-self-center mb-2">
			                                                        <input type="text" name="building" id="building" class="form-control" value="">
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>


			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">配信されている<br>E-mail<span class="red">（※）</span>（半角）</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <input type="email" name="email" id="email" class="form-control" value="">
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">配信されている<br>E-mail再入力<span class="red">（※）</span>（半角）</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <input type="email" name="re_email" id="re_email" class="form-control" value="">
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">物件情報停止をご希望される理由を、<br>こちらにご記入ください</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="custom-control custom-radio">
			                                                    <input class="custom-control-input" type="radio" name="reason[]" id="send_suspend_reason_01" value="他決" checked>
			                                                    <label class="custom-control-label" for="send_suspend_reason_01">
			                                                        他社の物件をご購入
			                                                    </label>
			                                                </div>
			                                                <div class="custom-control custom-radio">
			                                                    <input class="custom-control-input" type="radio" name="reason[]" id="send_suspend_reason_02" value="賃貸">
			                                                    <label class="custom-control-label" for="send_suspend_reason_02">
			                                                        賃貸をご契約
			                                                    </label>
			                                                </div>
			                                                <div class="custom-control custom-radio">
			                                                    <input class="custom-control-input" type="radio" name="reason[]" id="send_suspend_reason_03" value="延期">
			                                                    <label class="custom-control-label" for="send_suspend_reason_03">
			                                                        ご購入の延期
			                                                    </label>
			                                                </div>
			                                                <div class="custom-control custom-radio mb-2">
			                                                    <input class="custom-control-input" type="radio" name="reason[]" id="send_suspend_reason_04" value="その他">
			                                                    <label class="custom-control-label" for="send_suspend_reason_04">
			                                                        その他（他物件をご購入された方は、よろしければ物件名をお知らせください。）
			                                                    </label>
			                                                </div>

			                                                <textarea name="content_inquiry" id="" cols="30" rows="6" class="form-control" readonly=""></textarea>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 text-center">
			                                                <input type="button" class="btn btnConfirmation mx-auto" id="goConfirm" value="確認">

			                                            </div>
			                                        </div>

		                                        </section>

						                        <section class="confirmForm">
						                        	<div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">物件情報停止内容 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_suspension_type"></div>
			                                            </div>
			                                        </div>


			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">配信されているご氏名 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_name"></div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">ふりがな <span class="red">（※）</span>（全角）</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_name_kana"></div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">ご住所 <span class="red">（※）</span></label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_address"></div>
			                                            </div>
			                                        </div>


			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">配信されている<br>E-mail<span class="red">（※）</span>（半角）</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_email"></div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 col-md-3 align-self-center">
			                                                <label for="">物件情報停止をご希望される理由を、<br>こちらにご記入ください</label>
			                                            </div>
			                                            <div class="col-12 col-md-9 align-self-center">
			                                                <div class="cfr_reason"></div>
			                                                <div class="cfr_content_inquiry"></div>
			                                            </div>
			                                        </div>

			                                        <div class="row row_line">
			                                            <div class="col-12 text-center">
			                                                <input type="button" class="btn btnConfirmation mx-auto" id="goBack" value="戻る"> &nbsp;
							                                <input type="submit" class="btn btnConfirmation mx-auto" id="goSubmit" value="送信する">
			                                            </div>
			                                        </div>
						                        </section>

						                       <input type="hidden" name="post" id="ipost" class="form-control" value="">

		                                    </form>

					                    <?php endif; ?>

									</div>
								</section>

								
						
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