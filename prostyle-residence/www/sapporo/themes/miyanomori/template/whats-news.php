<?php
/* 
Template Name: Whats News
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<main>
    <section class="section_general">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="title_sub">新着情報</h2>
                    <?php echo do_shortcode("[Miyanomori_Blogs]"); ?>
                </div>
            </div>
           
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>