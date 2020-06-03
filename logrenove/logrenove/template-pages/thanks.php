<?php 
/*
    Template Name: Thanks
*/
?>

<?php get_header(); ?>

<main class="sub_underpage">

    <section class="section_thanks">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box_thanks">
                        <div class="box_thanks_content">
                            <?php 
                            if(have_posts()):
                                while(have_posts()): the_post();
                                    the_content();
                                endwhile;
                            endif;
                        ?>
                        </div>
                        <a href="<?php echo get_home_url(); ?>" class="btnback">ログリノベにもどる</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>