<?php
/*Template Name: Concept - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <?php 
        if (have_rows('block_content')):
            while (have_rows('block_content')): the_row();
            ?>
            <section class="section_comfortable" style="background-image: url(<?php echo get_sub_field('background_image')['url']; ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
                            <?php the_sub_field('content') ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            endwhile;
        endif;
    ?>
    
    <?php 
    if (have_rows('service_content')):
        while (have_rows('service_content')): the_row();
        ?>
            <section class="section_counter">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="concept_img">
                                <img src="<?php echo get_sub_field('background_content')['url']; ?>" alt="" class="img-fluid">
                            </div>
                            <?php the_sub_field('content_intro'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_digitalenvironment">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><?php echo get_sub_field('service_title'); ?></h2>
                            <?php 
                                if (!empty(get_sub_field('service_gallery'))):
                                    echo '<div class="row no-gutters mb-3">';
                                    foreach(get_sub_field('service_gallery') as $i => $img){
                                        $_class = ($i == 0) ? 'pr-md-2 pr-0' : 'pl-md-2 pl-0';
                                        ?>
                                        <div class="col-6 col-md-6 <?php echo $_class; ?>">
                                            <img src="<?php echo  $img['url']; ?>" alt="" class="img-fluid">
                                        </div>
                                        <?php
                                    }
                                    echo '</div>';
                                endif;
                            ?>

                            <?php 
                                if (have_rows('sub_content')):
                                    while (have_rows('sub_content')): the_row();
                                        $imgSection = get_sub_field('image');
                                        if (empty($imgSection)){
                                            the_sub_field('content');
                                        }
                                        else
                                        {
                                            ?>
                                            
                                            <div class="row mb-5">
                                                <div class="col-12 col-md-6">
                                                    <div class="box_counter_img">
                                                        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 align-self-end">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    endwhile;
                                endif;
                            ?>
                            
                            
                             
                        </div>
                    </div>
                </div>
            </section>
        <?php
            endwhile;
        endif;
    ?>

    

<?php get_footer(); ?>