<?php
/* 
Template Name: Thanks
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
                        <h2 class="title">THANK YOU</h2>
                        <p class="sub_title">お問い合わせが送信されました</p>
                        <div class="box_thanks">
                            <h4>お問い合わせを受け付けました。<br><br>
                            確認のため、お客様にメールをお送りしております。お問い合わせ頂き、ありがとうございました。</h4>
                            <p class="text-center">
                                <a href="<?php echo home_url(); ?>" class="btn btnback">トップページへ戻る</a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>