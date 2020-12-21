<?php 
/*
    Template Name: Events
*/
?>

<?php get_header(); ?>
<main class="bg-white pb-0">
    <?php get_template_part('template-parts/events/breadcrumb','event') ?>
    <section class="section_main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">

                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="main_left">
                                <div class="head_services">
                                    <?php get_template_part('template-parts/events/header','event') ?>
                                </div>
                                <div class="box_popular_seminar d-block d-lg-none">
                                    <?php get_template_part( 'template-parts/events/popularseminar', 'event' ); ?>
                                </div>
                                <div class="body_services">
                                    <?php get_template_part( 'template-parts/events/archive', 'default' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="main_right">
                                <div class="box_popular_seminar d-none d-lg-block">
                                    <?php get_template_part( 'template-parts/events/popularseminar', 'event' ); ?>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="banner_online">
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img src="<?=IMAGE_PATH;?>/1x/online_consultation.png" alt="" class="img-fluid d-none d-lg-block"></a>
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img src="<?=IMAGE_PATH;?>/1x/online_consultation_sp.png" alt="" class="img-fluid d-block d-lg-none"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
