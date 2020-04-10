<?php 
if (have_posts()):
    while(have_posts()): the_post();
        $imgFeature = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'full', $icon = false );
        ?>

        <section class="section_top">
            <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
            <div class="jarallax bg_top">
                <img class="jarallax-img" src="<?php echo $imgFeature; ?>" alt="">
                <a href="/yokohamabashamichi/" class="logo"><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/logo_white.svg" alt="" class="img-fluid" width="150"></a>
                <div class="accomodation_content">
                  <span class="box_line">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 200 169" style="enable-background:new 0 0 200 169;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:tranperant; fill-opacity: 0;}
                    </style>
                    <g>
                      <rect x="0.5" y="0.5" class="st0" width="199" height="168"/>
                      <path class="path" stroke="#f8ba00" stroke-width="2" d="M199,1v167H1V1H199 M200,0H0v169h200V0L200,0z"/>
                    </g>
                    </svg>
                  </span>
                  <span class="box_line box_line_step">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 200 169" style="enable-background:new 0 0 200 169;" xml:space="preserve">
                    <style type="text/css">
                      .st0{fill:tranperant; fill-opacity: 0;}
                    </style>
                    <g>
                      <rect x="0.5" y="0.5" class="st0" width="199" height="168"/>
                      <path class="path" stroke="#f8ba00" stroke-width="2" d="M199,1v167H1V1H199 M200,0H0v169h200V0L200,0z"/>
                    </g>
                    </svg>
                  </span>
                  <div class="box_line_content bg_white">
                    <h4><?php echo get_field('customer_name'); ?></h4>
                        <h3>Experience</h3>
                  </div>

                </div>
                <h2 class="blog_title exp2"><?php the_title(); ?></h2>
            </div>

            
            <div id="scroll_down">
              <div class="vertical_elem">
                <div class="line white only vertical t_b hidden scroll_loop"></div>
                <div class="start_square has_transition_600"></div>
              </div>
           </div>
        </section>

        <section class="section_expericence_content bg_pattern">
    
            <div class="container">
                
                <div align="center">
                    <div class="the_content">
                        <?php the_content(); ?>
                    </div>
                </div>
                

            <?php 
                if (have_rows('block_content')):
                    $index = 0;
                    $total = count(get_field('block_content'));
                    while (have_rows('block_content')): the_row();
                        if ($index % 2 == 0){
                            ?>
                            <article class="expericence_content_item">
                                <div class="row">
                                    <div class="col col-12 col-sm-12 col-md-7">
                                        <div class="expericence_content_item_img">
                                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-sm-12 col-md-5">
                                        <div class="w_box_text">
                                            <div class="box_text_right">
                                                <h3><?php echo get_sub_field('title'); ?></h3>
                                                <p><?php echo get_sub_field('description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            
                            <?php
                        }else{
                            ?>
                            <article class="d-none d-sm-block expericence_content_item">
                                <div class="row">
                                     <div class="col col-12 col-sm-12 col-md-5">
                                        <div class="w_box_text">
                                            <div class="box_text_left">
                                                <h3><?php echo get_sub_field('title'); ?></h3>
                                                <p><?php echo get_sub_field('description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-sm-12 col-md-7">
                                        <div class="expericence_content_item_img">
                                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- SP -->
                            <article class="d-block d-sm-none expericence_content_item">
                                <div class="row">
                                    <div class="col col-12 col-sm-12 col-md-7">
                                        <div class="expericence_content_item_img">
                                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-sm-12 col-md-5">
                                        <div class="w_box_text">
                                            <div class="box_text_right">
                                                <h3><?php echo get_sub_field('title'); ?></h3>
                                                <p><?php echo get_sub_field('description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            
                            <?php
                        }
                        $index++;
                    endwhile;
                endif;
            ?>

            </div>
        </section>
            
<?php
    endwhile;
endif;
?>