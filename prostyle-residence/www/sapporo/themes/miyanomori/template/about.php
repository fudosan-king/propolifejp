<?php
/* 
Template Name: About
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header2'); ?>
<main>
    <section class="section_general">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="title_sub"><?p= _e('価値あるものと暮らす幸せを。','miyanomori'); ?></h2>
                    <p class="text-center"><?p= _e('人生は、つねに「住まい」とともにあります。','miyanomori'); ?><br>
                        <?p= _e('いうなれば「住まい」はその人の生き方そのもの。','miyanomori'); ?><br>
                        <?p= _e('人それぞれ、十人十色のスタイルがあるなか、','miyanomori'); ?><br>
                        <?p= _e('私たちは「住」のプロフェッショナルとして','miyanomori'); ?><br>
                        <?p= _e('お客様に最適な「住まい」、','miyanomori'); ?><br>
                        <?p= _e('そしてライフスタイルを提案していきます。','miyanomori'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>