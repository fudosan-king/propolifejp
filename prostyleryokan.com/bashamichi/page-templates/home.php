<?php
/*Template Name: Home - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <!-- CONCEPT -->
    <?php 
        if (have_rows('concept_block')):
            $group = get_field('concept_block');
            $label = get_field_object('concept_block')['label'];
            $imgUrl = wp_get_attachment_image_url( $group['image']['ID'], $size = 'large', $icon = false );
            ?>

            <section class="section_concept">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 mx-auto">
                            <h2 class="title"><?php echo $label; ?></h2>
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="concept_img">
                                        <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="concept_content">
                                        <?php echo $group['description']; ?>
                                        <?php if (!empty($group['link_to'])): ?>
                                            <div class="row">
                                                <div class="row col-12 col-md-6"></div>
                                                <div class="col-12 col-md-6">
                                                    <a class="btnMore" href="<?php echo $group['link_to']['url']; ?>" target="<?php echo $group['link_to']['target']; ?>">
                                                        <span class="more">
                                                            <p class="more_text"><?php echo $group['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
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
    <section id="section_accommodation" class="section_accommodation">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h2 class="title">Rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <?php get_template_part( 'template-parts/home/accommodation', 'top' ); ?>
                </div>
            </div>
            
            <?php if(!empty(get_terms('accommodation_type'))): ?>
            <div class="row mt-3">
                <div class="col-12 col-md-8"></div>
                <div class="col-12 col-md-4">
                    <?php 
                        foreach(get_terms('accommodation_type') as $term){
                            ?>
                                <a class="btnMore d-block mb-2" href="<?php echo get_term_link($term); ?>">
                                    <span class="more">
                                        <p class="more_text"><?php echo $term->name ?> Floor<span class="line more_loop no_width"></span></p>
                                    </span>
                                </a>
                            <?php
                        } 
                    ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php 
        if (have_rows('restaurant_block')):
            $group = get_field('restaurant_block');
            $label = get_field_object('restaurant_block')['label'];
            $imgUrl = wp_get_attachment_image_url( $group['image']['ID'], $size = 'large', $icon = false );
            ?>
            <section class="section_concept">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><?php echo $label; ?></h2>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid w-100">
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="restaurant_content">
                                        <?php echo $group['description']; ?>
                                        <?php if (!empty($group['link_to'])): ?>
                                            <div class="row">
                                                <div class="col-12 col-md-6"></div>
                                                <div class="col-12 col-md-6">
                                                    <a class="btnMore" href="<?php echo $group['link_to']['url']; ?>" target="<?php echo $group['link_to']['target']; ?>">
                                                        <span class="more">
                                                            <p class="more_text"><?php echo $group['link_to']['title']; ?><span class="line more_loop no_width"></span></p>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
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

    <!-- ACCESS -->
    <?php 
    if (have_rows('access_block')):
        $group = get_field('access_block');
        $label = get_field_object('access_block')['label'];
        $distance_from_train = $group['distance_from_train'];
        $distance_from_bullet_train = $group['distance_from_bullet_train'];
        $distance_from_airport = $group['distance_from_airport'];
        // $location_to_hotel = $group['location_to_hotel'];
        $imgUrl = wp_get_attachment_image_url( $group['image_hotel']['ID'], $size = 'medium', $icon = false );
        ?>
            <section class="section_access">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">Access</h2>
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <div class="map_img">
                                        <img src="<?php echo $imgUrl; ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="map_frame">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.320253337414!2d139.6327426152523!3d35.44686518024966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185cf429d00515%3A0xd99b30b911e923e1!2zNS1jaMWNbWUtNjQgVG9raXdhY2jFjSwgTmFrYS1rdSwgWW9rb2hhbWEsIEthbmFnYXdhIDIzMS0wMDE0LCBOaOG6rXQgQuG6o24!5e0!3m2!1svi!2s!4v1583372397529!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                        <!-- <div class="acf-map">
                                            <div class="marker" data-lat="<?php //echo $group['map_direct']['lat']; ?>" data-lng="<?php //echo $group['map_direct']['lng']; ?>">
                                                <p class="address"><?php //echo $group['map_direct']['address']; ?></p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row mb-5">
                                <div class="col-12 col-md-6">
                                     <!-- DISTANCE FROM GOOGLE MAP -->
                                    <?php if (!empty($group['goolge_map_link'])): ?>
                                        <a href="<?php echo $group['goolge_map_link']['url']; ?>" class="btn btn_linkmap" target="<?php echo $group['goolge_map_link']['target']; ?>"><?php echo $group['goolge_map_link']['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- FROM CURRENT MAP -->
                                    <?php if (!empty($group['current_map_link'])): ?>
                                        <a href="<?php echo $group['current_map_link']['url']; ?>" class="btn btn_linkmap" target="<?php echo $group['current_map_link']['target']; ?>"><?php echo $group['current_map_link']['title']; ?></a>
                                    <?php endif; ?> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="box_info_access">
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <h3><?php echo $group['title_location']; ?></h3>
                                                <p><?php echo $group['adress']; ?></p>

                                                <h3><?php echo $group['title_train']; ?></h3>
                                                <?php 
                                                    if (!empty($distance_from_train)): 
                                                        echo '<ul>';
                                                        foreach($distance_from_train as $field){
                                                            echo '<li>'.$field['location_name'].' '.$field['distance'].'</li>';
                                                        }
                                                        echo '</ul>';                           
                                                    endif; 
                                                ?>
                                            </div>
                                            <div class="col-12">
                                                <h3><?php echo $group['title_bullet_train']; ?></h3>
                                                <?php 
                                                    if (!empty($distance_from_bullet_train)): 
                                                        echo '<ul>';
                                                        foreach($distance_from_bullet_train as $field){
                                                            echo '<li>'.$field['location_name'].'<br>'.$field['distance'].'</li>';
                                                        }
                                                        echo '</ul>';                           
                                                    endif; 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="box_info_access">
                                        <div class="row">
                                            <div class="col-12">
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
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endif;
    ?>

<?php get_footer(); ?>