<?php
/*Template Name: Plan - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>

    <section class="section_plan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
                        if (have_rows('plan_content')): 
                            while (have_rows('plan_content')): the_row();
                                ?>

                                <div class="box_plan_item">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-5 align-self-center">
                                            <div class="box_plan_item_content">
                                                <h2><?php echo get_sub_field('title'); ?></h2>
                                                <p><?php echo get_sub_field('content'); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7 align-self-center">
                                            <div class="box_plan_item_img">
                                                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                        if (have_rows('plan_options')):
                                            echo '<div class="box_plan_item_footer">
                                                    <div class="row">
                                                        <div class="col-12 col-md-8 mx-auto">';
                                            while (have_rows('plan_options')): the_row();
                                                ?>
                                                    <div class="box_plan_item_footer_item">
                                                        <div class="row">
                                                            <div class="col-12 col-md-2 align-self-center">
                                                                <p><?php echo get_sub_field('name'); ?></p>
                                                            </div>
                                                            <?php 
                                                            if (have_rows('options')):
                                                                $count = 0;
                                                                while (have_rows('options')): the_row();
                                                                    if (!empty(get_sub_field('choice'))):
                                                                        $class = ( $count % 2 == 0) ? 'btn_accommodation' : 'btn_breakfast';
                                                                        echo '<div class="col col-12 col-sm-5">';
                                                                        echo '<a href="'.get_sub_field('choice')['url'].'" class="btn '.$class.'" target="'.get_sub_field('choice')['target'].'">'.get_sub_field('choice')['title'].'</a>';
                                                                        echo '</div>';
                                                                    endif;
                                                                    $count++;
                                                                endwhile;
                                                            endif;
                                                            ?>

                                                        </div>
                                                    </div>
                                                <?php
                                            endwhile; 
                                            echo '
                                                        </div>
                                                    </div>
                                                </div>';
                                        endif; 
                                    ?>
                                </div>

                                <?php 
                            endwhile;
                        endif; 
                    ?>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>