<?php get_header(); ?>

<section class="default_page" style="height: auto;">
    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
    <div class="jarallax bg_top">
        <img class="jarallax-img" src="<?php echo TEMPLATE_DIR; ?>/images/1x/bg_menu.jpg" alt="">
        <a href="/yokohamabashamichi/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_gray.svg" alt="" class="img-fluid" width="150"></a>
        <div class="page_content">
            <div class="black_title">
                <h2><?php the_title(); ?></h2>
            </div>
            <span class="bor_title"></span>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php 
                        if (have_posts()):
                            while(have_posts()): the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<?php get_footer(); ?>