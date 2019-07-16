<?php 
/*Template Name: Contact Finish Page */

get_header();
?>

<section id="mainVisual">
    <h2 class="headLine01"> </h2>
</section>
<div id="pagePath"><div class="inner">
<?php if(function_exists('bcn_display')) { bcn_display();} ?>
</div></div>
<div id="main">
    <section id="pressrelease">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content-inner">
                <?php the_content(); ?>
            </div>
        
        <?php endwhile; ?>
        <?php endif; ?>

        <p>&nbsp;</p>
        <div class="pagenav_box"> </div>
        <p>&nbsp;</p>
    </section>
</div>
<p><!-- /#main --></p>

<?php get_footer(); ?>