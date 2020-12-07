<?php
/*Template Name: How to Sauna - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_experience sauna sauna_update pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title"><?php echo get_field('title'); ?></h2>

                    <?php 
                        if(have_rows('record_flexible')):
                            $count = 0;
                            while(have_rows('record_flexible')): the_row();

                                switch (get_row_layout()) {
                                    case 'description_item':
                                        $count=-1;

                                        ?>
                                            <div class="box_more_step mb-0">
                                                <h3 class="mb-3"><?php echo get_sub_field('title');  ?></h3>
                                                <p><?php echo get_sub_field('content');  ?></p>
                                            </div>
                                        <?php
                                    
                                        break;
                                    
                                    default:
                                        $leftRight = $count%2==0 ? 'offset-md-3' : 'offset-md-5';
                                        $firstMb = $count != 2 ? 'mb140' : '';
                                        ?>
                                        <div class="box_experience_steps <?php echo $firstMb; ?>">
                                            <div class="row">
                                                <div class="col-12 col-md-6 <?php echo $leftRight; ?>">
                                                    <h3><?php echo get_sub_field('title');  ?></h3>
                                                    <div class="box_experience_img">
                                                        <img src="<?php echo get_sub_field('image')['url'];  ?>" alt="" class="img-fluid">
                                                        <?php echo get_sub_field('description');  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        break;
                                }

                                $count++;
                            endwhile;
                        endif;
                    ?>
                    
                    

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>