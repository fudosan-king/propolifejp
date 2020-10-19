<?php 
/*
    Template Name: Events Thanks
*/
?>

<?php get_header(); ?>

<main class="bg-white">
    <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>

    <section class="section_mailmagazine">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box_thanks_mailmagazine" style="max-width: 550px">
                        <?php 
                            if(have_posts()):
                                while(have_posts()): the_post();
                                    the_content();
                                endwhile;
                            endif;
                        ?>
                        <a href="<?php echo get_home_url(); ?>" class="btn btnAgree">ログリノベトップに戻る <i class="i_rightwhite"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>