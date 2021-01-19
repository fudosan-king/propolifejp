<?php
/* 
Template Name: Outline
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header2'); ?>
<main>
    <section class="section_general outline">
        <div class="container">
            <h2 class="title_sub"><?php the_field('outline_heading'); ?></h2>
           
            <div id="物件概要" class="equip-spec_box">
                <h4><span><?php the_field('outline_sub_heading'); ?></span></h4>
                <div class="outline-table">
                    <?= the_content(); ?>
                </div>
            </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>