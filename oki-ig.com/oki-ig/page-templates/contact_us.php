<?php 
/*Template Name: Contact Us Page*/
?>

<?php get_header(); ?>

<section class="section_sub_banner">      
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-12">
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_field('description'); ?></p>
			</div>
		</div>
	</div>
</section>

<main>
	<section class="section_products">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-sm-8 offset-0 offset-sm-2">
					<?php 
					if(isset($_GET['finish']) && $_GET['finish'] == 1):
						?>
						<p>送信が完了いたしました。</p>
						<p>追って担当者よりご連絡させていただきます。連絡がない場合はメールが届いていない可能性がありますので、お手数ですが再度お問い合わせください。</p>
						<p>※当社指定日を挟んだ場合やお見積り内容により、回答に日数がかかる場合があります。あらかじめご承知ください。</p>
						<?php
					else:
						if (have_posts()):
							while(have_posts()): the_post();
								the_content();
								?>
									<!-- <form class="frm_contact" action="https://go.pardot.com/l/185822/2018-05-16/86z26r" method="post"> -->
									<form class="frm_contact" action="" method="post">
										<div class="form-row">
											<div class="form-group col-sm-4 col-12"><label class="mt-sm-4 mt-0" for="">お名前</label></div>
											<div class="form-group col-sm-4 col-6">
												<p>姓</p>
												<p><input id="first-name" class="form-control" name="first-name" type="text" required /></p>
											</div>
											<div class="form-group col-sm-4 col-6">
												<p>名</p>
												<p><input id="last-name" class="form-control" name="last-name" type="text" required /></p>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4"><label for="">メールアドレス</label></div>
											<div class="form-group col-sm-8"><input id="email" class="form-control" name="email" type="text" required /></div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4"><label for="">ご連絡先電話番号</label></div>
											<div class="form-group col-sm-8"><input id="phone" class="form-control" name="phone" type="text" /></div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4"><label for="">法人名</label></div>
											<div class="form-group col-sm-8"><input id="company" class="form-control" name="company" type="text" /></div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4 col-12"><label class="mt-sm-5 mt-0" for="">住所</label></div>
											<div class="form-group col-sm-8 col-12">
												<div class="form-row border-bottom-0 mb-0">
													<div class="form-group col-sm-12 col-6">
														<p>都道府県</p>
														<p><input id="pref" class="form-control" name="pref" type="text" placeholder="沖縄県" /></p>
													</div>
													<div class="col-sm-12 col-6">
														<p>住所</p>
														<p><input id="address" class="form-control" name="address" type="text" placeholder="南城市佐敷字津波古978番地" /></p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4"><label class="mt-0 mt-sm-5" for="">お問合わせ内容</label></div>
											<div class="form-group col-sm-8"><textarea id="details" class="form-control" name="details" rows="5" required></textarea></div>
										</div>
										<div class="form-row border-bottom-0">
											<div class="form-group col-sm-4"> </div>
											<div class="form-group col-sm-8"><button class="btn btnSend" type="submit">送信する</button></div>
										</div>
									</form>
								<?php
							endwhile;
						endif;
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>