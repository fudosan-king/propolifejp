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
                    <h2 class="title_sub"><?= _e('価値あるものと暮らす幸せを。','miyanomori'); ?></h2>
                    <p class="text-center"><?= _e('人生は、つねに「住まい」とともにあります。','miyanomori'); ?><br>
                        <?= _e('いうなれば「住まい」はその人の生き方そのもの。','miyanomori'); ?><br>
                        <?= _e('人それぞれ、十人十色のスタイルがあるなか、','miyanomori'); ?><br>
                        <?= _e('私たちは「住」のプロフェッショナルとして','miyanomori'); ?><br>
                        <?= _e('お客様に最適な「住まい」、','miyanomori'); ?><br>
                        <?= _e('そしてライフスタイルを提案していきます。','miyanomori'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>