<?php
/*Template Name: Experience 1 - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_experience section_experience_sub">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title"><?php echo get_field('title'); ?></h2>
                    <?php 
                        if (have_rows('block_content')):
                            $index = 1;
                            echo '<div class="row no-gutters mb140">';
                            while (have_rows('block_content')): the_row();
                                $mileClass = ($index%2==0) ? 'mile_right' : '';
                                $linkClass = ($index%2==0) ? 'even' : 'odd';
                                ?>
                                    <div class="col-12 col-md-6">
                                        <div class="box_location_item">
                                            <div class="box_location_item_img">
                                                <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="" class="img-fluid">
                                                <span class="mile <?php echo $mileClass; ?>"><?php echo get_sub_field('tag_title'); ?></span>
                                                <?php the_sub_field('content'); ?>

                                                <?php 
                                                    if (!empty(get_sub_field('button_link'))){
                                                        $str = substr(get_sub_field('button_link')['url'], 1);
                                                        ?>
                                                        <a href="#" class="box_walking <?php echo $linkClass; ?>" data-walk="<?php echo $str; ?>">
                                                          <?php echo get_sub_field('button_link')['title']; ?>
                                                          <div id="scroll_down" class="line_down">
                                                            <div class="vertical_elem">
                                                                <div class="line only vertical t_b hidden scroll_loop"></div>
                                                            </div>
                                                          </div>
                                                        </a>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $index++;
                            endwhile;
                            echo '</div>';
                        endif;
                    ?>

                    <?php 
                        $travelArray = array();
                        $travel_location = get_field('travel_location');
                        foreach ($travel_location as $cpost){
                            $termArray = wp_get_post_terms( $cpost->ID, $taxonomy = 'travel_type', array('fiels' => 'names') );

                            foreach($termArray as $term){
                                if (empty($travelArray[$term->name]))
                                    $travelArray[$term->name] = array();
                                array_push($travelArray[$term->name], $cpost);
                            }
                            
                        }

                        if (!empty($travelArray)){
                            foreach ($travelArray as $key => $loc){
                                echo '<h2 class="title" id="'.$key.'">'.$key.'</h2>';
                                foreach ($loc as $i => $cpost){
                                    $thumbnailImage = wp_get_attachment_image_url( get_post_thumbnail_id( $cpost->ID ), $size = 'large', $icon = false );
                                    echo '<div class="box_daytrip_item">
                                            <div class="row">';
                                    if ($i % 2 ==0):
                                        ?>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <h3><?php echo get_the_title( $cpost ); ?></h3>
                                                <?php echo $cpost->post_content; ?>
                                            </div>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="box_daytrip_item_img">
                                                    <img src="<?php echo $thumbnailImage; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        <?php
                                    else:
                                        ?>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="box_daytrip_item_img">
                                                    <img src="<?php echo $thumbnailImage; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <h3><?php echo get_the_title( $cpost ); ?></h3>
                                                <?php echo $cpost->post_content; ?>
                                            </div>
                                        <?php
                                    endif;

                                    echo '</div>
                                    </div>';
                                }
                            }
                        }


                        ?>


                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>