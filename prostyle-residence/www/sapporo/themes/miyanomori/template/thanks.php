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
                <div class="col-12 col-lg-12 text-center">
                        <h2 class="title">THANK YOU</h2>
                        <div class="box_thanks">
                            <h4>お問い合わせありがとうございました。</h4>
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