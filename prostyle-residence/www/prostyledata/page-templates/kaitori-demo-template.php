<?php 
/* Template Name: Kaitori Demo - Page Template */
?>

<?php get_header(); ?>

<?php 

if (have_posts()):
    while (have_posts()): the_post();
?>

<section class="banner"></section>          

<main class="kaitori">
    <section class="bg_common">&nbsp;</section>

    <?php get_template_part( 'template-parts/kaitori/content', 'mansory' ); ?>
    <?php //get_template_part( 'template-parts/kaitori/content', 'mansory-new' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content', 'news' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content', 'records' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content', 'announce' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content', 'looking' ); ?>

    <?php get_template_part( 'template-parts/kaitori/content-branch', 'prostyle' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content-branch', 'prostylew' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content-branch', 'chronicleres' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content-branch', 'prostylev' ); ?>
    <?php get_template_part( 'template-parts/kaitori/content-branch', 'propolifeh' ); ?>

    <?php get_template_part( 'template-parts/kaitori/content-business', 'outline' ); ?>

    <section class="bg_common">&nbsp;</section>
    

</main>

<?php 
        
    endwhile;
endif;

?>

<?php get_footer(); ?>