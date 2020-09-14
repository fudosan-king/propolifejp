<?php 
/*
    Template Name: Disclaim
*/
?>

<?php get_header(); ?>

<main class="sub_underpage">

    <section class="section_contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box_contact">
                        <?php 
                            if(have_posts()):
                                while(have_posts()): the_post();
                                    ?>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        <p class="text-center"><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="btn_tocontactus">お問い合わせはこちら</a></p>
                                    <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>