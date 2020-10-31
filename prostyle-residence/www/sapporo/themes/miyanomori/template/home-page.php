<?php
/* 
Template Name: Home
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template/home/header'); ?>

<main>
    <?php
        $currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';
        get_template_part( 'template/home/content', $currentLanguage); 
    ?>
</main>

<?php get_template_part( 'template/home/footer'); ?>

<?php get_footer(); ?>