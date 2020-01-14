<?php
/*Template Name: Home - Page Template*/
?>

<?php get_header(); ?>

<section class="section_top">

    <?php get_template_part( 'template-parts/header/main', 'header' ); ?>
    <?php get_template_part( 'template-parts/header/banner', 'front' ); ?>

</section>


<!-- CONCEPT -->
<?php 
if (have_rows('concept_block')):
    $group = get_field('concept_block');
    $label = get_field_object('concept_block')['label'];
    ?>

    <section class="section_concept">
        <div class="jarallax">
            <img class="jarallax-img" src="<?php echo $group['background']['url']; ?>" alt="">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-8 offset-md-2">
                        <div class="boxconcept">
                            <div class="row reverse">
                                <div class="col col-12 col-sm-6">
                                    <div class="reveal_main">
                                        <div class="reveal_cont-img">
                                            <div class="reveal_block-img"></div>
                                            <?php 
                                                $imgUrl = wp_get_attachment_image_url( $group['image']['ID'], $size = 'medium', $icon = false )
                                            ?>
                                            <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid img_concept reveal_img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-sm-6">
                                    <div class="boxconcept_content" data-jarallax-element="-100">
                                        <h2 class="title_small"><?php echo $label; ?></h2>
                                        <h3><?php echo $group['title']; ?></h3>
                                        <p><?php echo $group['description']; ?></p>

                                        <?php if (!empty($group['link_to'])): ?>
                                            <a href="<?php echo $group['link_to']['url']; ?>" class="url_manager more_container" target="<?php echo $group['link_to']['target']; ?>">
                                                <div class="more">
                                                    <p class="more_text"><?php echo $group['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
endif;
?>

<!-- ACCOMMODATION -->
<?php 
if (have_rows('accommodation_block')):
    $group = get_field('accommodation_block');
    $label = get_field_object('accommodation_block')['label'];
    ?>

    <section class="section_accommodation">
        <div class="jarallax">
            <img class="jarallax-img" src="<?php echo TEMPLATE_DIR; ?>/images/1x/bg_accommodation.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <h2 class="title_small"><?php echo $label; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <?php get_template_part( 'template-parts/page/home', 'accommodation' ); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-12">
                        <?php if (!empty($group['link_to'])): ?>
                            <a href="<?php echo $group['link_to']['url']; ?>" class="more_container" target="<?php echo $group['link_to']['target']; ?>">
                                <div class="more">
                                    <p class="more_text"><?php echo $group['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                </div>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
                 <div class="row">
                    <?php 
                        if (!empty($group['link_direct'])):
                            foreach ($group['link_direct'] as $link){
                                ?>
                                <div class="col col-12 moreAnchor">
                                   <a href="<?php echo $link['link_to']['url']; ?>" class="more_container" target="<?php echo $link['link_to']['target']; ?>">
                                        <div class="more">
                                            <p class="more_text"><?php echo $link['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                        endif;
                    ?>
                        
                    </div>
            </div>

        </div>
    </section>

    <?php
endif;
?>



<!-- RESTAURANT -->
<?php 
if (have_rows('restaurant_block')):
    $group = get_field('restaurant_block');
    $label = get_field_object('restaurant_block')['label'];
    ?>

    <section class="section_restaurant">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12">
                    <div class="restaurant_content">
                        <?php 
                            $imgUrl = wp_get_attachment_image_url( $group['big_image']['ID'], $size = 'large', $icon = false )
                        ?>
                        <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid big_img" data-aos="fade-right">

                        <?php 
                            $imgUrl = wp_get_attachment_image_url( $group['small_image']['ID'], $size = 'medium', $icon = false )
                        ?>
                        <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid small_img" data-aos="fade-left">
                        <h3 class="meal" data-aos="fade-left"><?php echo $group['title']; ?></h3>


                        <?php if (!empty($group['link_to'])): ?>
                            <a href="<?php echo $group['link_to']['url']; ?>" class="more_container" target="<?php echo $group['link_to']['target']; ?>">
                                <div class="more">
                                    <p class="more_text"><?php echo $group['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                </div>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
endif;
?>


<!-- ACCESS -->
<?php 
if (have_rows('access_block')):
    $group = get_field('access_block');
    $label = get_field_object('access_block')['label'];
    $distance_from_train = $group['distance_from_train'];
    $distance_from_airport = $group['distance_from_airport'];
    $location_to_hotel = $group['location_to_hotel'];
    ?>

    <section class="section_access" id="access">
        <div class="jarallax">
            <img class="jarallax-img" src="<?php echo TEMPLATE_DIR; ?>/images/1x/bg_accommodation.jpg" alt="">
            <div class="container">
                <h2 class="title_small text-center"><?php echo $label; ?></h2>
                <div class="row no-gutters">
                    <div class="col col-12 col-sm-4 col_access">
                        <div class="img_building">
                            <?php 
                                $imgUrl = wp_get_attachment_image_url( $group['image_hotel']['ID'], $size = 'medium', $icon = false )
                            ?>
                            <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col col-12 col-sm-8 col_access">
                        <div class="map_frame">
                            <!-- <img src="<?php //echo $group['image_location']['url'] ?>" alt="" class="img-fluid w-100"> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.3200526222568!2d139.6328788505673!3d35.44687015030032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185cf429d00515%3A0xd99b30b911e923e1!2z5pel5pys44CB44CSMjMxLTAwMTQg56We5aWI5bed55yM5qiq5rWc5biC5Lit5Yy65bi455uk55S677yV5LiB55uu77yW77yU!5e0!3m2!1sja!2s!4v1531193406450" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $group['map_direct']['lat']; ?>" data-lng="<?php echo $group['map_direct']['lng']; ?>">
                                    <p class="address"><?php echo $group['map_direct']['address']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col col-12 col-sm-6 col_access">

                        <!-- DISTANCE FROM GOOGLE MAP -->
                        <?php if (!empty($group['goolge_map_link'])): ?>
                            <a href="<?php echo $group['goolge_map_link']['url']; ?>" class="btn btn_linkmap" target="<?php echo $group['goolge_map_link']['target']; ?>"><?php echo $group['goolge_map_link']['title']; ?></a>
                        <?php endif; ?>

                        <!-- HOTEL INFO -->

                        <h3><?php echo $group['title_location']; ?></h3>
                        <p><?php echo $group['adress']; ?></p>

                        <!-- DISTANCE FROM TRAIN -->
                        <h3><?php echo $group['title_train']; ?></h3>
                        <div class="box_comebytrain">
                            <?php 
                            if (!empty($distance_from_train)): 
                                echo ' <div class="row">';
                                foreach($distance_from_train as $field){
                                    echo '<div class="col-sm-4 col-md-3">'.$field['location_name'].'</div>';
                                    echo '<div class="col-sm-8 col-md-9">'.$field['distance'].'</div>';
                                }
                                echo '</div>';                           
                            endif; 
                            ?>
                        </div>

                        <!-- DISTANCE FROM BULLET TRAIN -->
                        <h3><?php echo $group['title_bullet_train']; ?></h3>
                        <p><?php echo $group['distance_from_bullet_train']; ?></p>
                    </div>

                    <div class="col col-12 col-sm-6 col_access">

                        <!-- FROM CURRENT MAP -->
                        <?php if (!empty($group['current_map_link'])): ?>
                            <a href="<?php echo $group['current_map_link']['url']; ?>" class="btn btn_linkmap" target="<?php echo $group['current_map_link']['target']; ?>"><?php echo $group['current_map_link']['title']; ?></a>
                        <?php endif; ?> 
                        
                        <!-- DISTANCE FROM AIRPORT -->
                        <h3><?php echo $group['title_airport']; ?></h3>
                        <?php 
                        if (!empty($distance_from_airport)): 
                            foreach($distance_from_airport as $field){
                                echo ' <h4>'.$field['location_name'].'</h4>';
                                echo '<p>'.$field['distance'].'</p>';
                            }                    
                        endif; 

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
endif;
?>



<?php get_footer(); ?>