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