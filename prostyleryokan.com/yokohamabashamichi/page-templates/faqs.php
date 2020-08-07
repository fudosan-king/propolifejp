<?php
/*Template Name: FAQs - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_faqs">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <?php 
                        $args = array(

                            // Type & Status Parameters
                            'post_type'   => 'faq',
                            'post_status' => 'publish',

                            // Order & Orderby Parameters
                            'order'               => 'ASC',
                            'orderby'             => 'date',

                            // Pagination Parameters
                            'posts_per_page'         => -1,

                            // Permission Parameters -
                            'perm' => 'readable',

                            // Parameters relating to caching
                            'no_found_rows'          => false,
                            'cache_results'          => true,
                            'update_post_term_cache' => true,
                            'update_post_meta_cache' => true,

                        );

                        $query = new WP_Query( $args );

                        if ($query->have_posts()):

                            echo '<ul class="nav nav-pills mb-3 justify-content-center" id="pills_faqs" role="tablist">';
                            $index = 0;
                            while ($query->have_posts()): $query->the_post();
                                $active = $index == 0 ? 'active' : '';
                                echo '<li class="nav-item">
                                    <a class="nav-link '.$active.'" id="pills_'.$post->ID.'_tab" data-toggle="pill" href="#pills_'.$post->ID.'" role="tab" aria-controls="pills_'.$post->ID.'" aria-selected="true">'.get_the_title().'</a>
                                </li>';
                                $index++;
                            endwhile;
                            echo '</ul>';

                            $index = 0;
                            echo '<div class="tab-content" id="pills-faqsContent">';
                            while ($query->have_posts()): $query->the_post();
                                $active = $index == 0 ? 'show active' : '';
                                ?>
                                <div class="tab-pane fade <?php echo $active; ?>" id="pills_<?php echo $post->ID; ?>" role="tabpanel" aria-labelledby="pills_<?php echo $post->ID; ?>">
                                    <h3><?php the_title(); ?></h3>
                                    <?php
                                        if (have_rows('block_content')):
                                            while (have_rows('block_content')): the_row();
                                                
                                                $totalRow = count(get_sub_field('qa'));
                                                if (have_rows('qa')):
                                                    echo '<ul class="list-group">';
                                                    $index = 0;
                                                    while (have_rows('qa')): the_row();
                                                        $first = $index == 0 ? 'first' : '';
                                                        $last = ($index + 1) == $totalRow ? 'last' : '';

                                                        if (!empty(get_sub_field('question')))
                                                            // echo '<li class="list-group-item '.$last.' '.$first.'">Q. '.get_sub_field('question').'</li>';
                                                            echo '<li class="list-group-item">Q. '.get_sub_field('question').'</li>';
                                                        if (!empty(get_sub_field('answer')))
                                                            // echo '<li class="list-group-item '.$last.'">A. '.get_sub_field('answer').'</li>';
                                                            echo '<li class="list-group-item">A. '.get_sub_field('answer').'</li>';

                                                        $index++;
                                                    endwhile;
                                                    echo '</ul>';
                                                endif;

                                                

                                            endwhile;
                                        endif;
                                    ?>
                                </div>
                                <?php
                                $index++;
                            endwhile;
                            echo '</div>';
                            wp_reset_query();
                            wp_reset_postdata();
                        endif;

                    ?>
                    
                    
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>