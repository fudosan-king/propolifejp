<?php
    $location_data_first = array();
    $terms = get_terms( array(
        'taxonomy' => 'showroom',
        'hide_empty' => false,
    ));

    $location_data_first['showroom_id'] = $terms[0]->term_id;
    $location_data_first['area_id'] = get_field('area', $terms[0])->term_id;
    
?>

<div class="box_search_serminar">
    <h2>セミナー＆イベントを探す</h2>
    <div class="row mb-3 box_list_search_serminar">
        <div class="col-9 mx-auto">
            <div class="form-group">
                <select name="" id="" class="form-control">
                    <?php 
                        foreach ($terms as $key => $term) {
                        $areObj = get_field('area', $term);
                        ?>
                            <option value=""><?php echo $areObj->name;?></option>
                        <?php
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <ul class="list_location">
    <?php 
        foreach ($terms as $key => $term) {
            $areObj = get_field('area', $term);
            ?>
                <li class="<?php echo $key == 0 ? 'active' : ''; ?>" data-showroom-id="<?php echo $term->term_id; ?>"  data-area-id="<?php echo $areObj->term_id; ?>"><a href="<?php //echo get_term_link( $term, $taxonomy = 'showroom' ) ?>"><i class="fal fa-map-marker-alt"></i> <?php echo $areObj->name;?></a></li>
            <?php
        }
    ?>
    </ul>

    <div class="w_box_location_items">

        <?php 
            $args = array(
                
       
                // Type & Status Parameters
                'post_type'   => 'event',
                'post_status' => 'publish',

                'meta_key'       => 'showroom',
                'meta_value' => $location_data_first['showroom_id'],
        
                // Order & Orderby Parameters
                'order'               => 'DESC',
                'orderby'             => 'date',
                'ignore_sticky_posts' => false,

                // Pagination Parameters
                'posts_per_page'         => get_option('posts_per_page'),
                // 'posts_per_page'         => 1,
                // 'nopaging'               => false,
                // 'paged'                  => max(1, get_query_var( 'paged' )),
        
                // Permission Parameters -
                'perm' => 'readable',
        
                // Parameters relating to caching
                'no_found_rows'          => false,
                'cache_results'          => true,
                'update_post_term_cache' => true,
                'update_post_meta_cache' => true,
        
            );
            
            $query = new WP_Query( $args );

            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                    $img = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );
                    $firstCat = get_the_category()[0];
                    $stringTime = get_field('visit_time').'〜'.get_field('end_time');

                    $showroomObj = get_field('showroom');
                    $areObj = get_field('area', $showroomObj);
                    ?>
                        <div class="box_location_items">
                            <div class="row no-gutters">
                                <div class="col-5 col-md-3 align-self-center">
                                    <a href="<?php the_permalink(); ?>" target="_blank" class="box_location_items_img"><img class="img-fluid" src="<?=$img;?>" alt=""></a>
                                </div>
                                <div class="col-7 col-md-9 align-self-center">
                                    <div class="box_location_items_content">
                                        <p class="badge-secondary badge badge_cate"><i class="fal fa-map-marker-alt"></i> <?php echo $areObj->name; ?></p>
                                        <p class="date"><?php echo get_field('date'); ?> <span><?php echo $stringTime; ?></span></p>
                                        <h4><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    
                endwhile;

                $max_pages = max(1, $query->max_num_pages);
                $htmlPagination = '';
                if($max_pages > 1){
                    for($i = 1; $i <= $max_pages; $i++){
                        if($i == 1){
                            $htmlPagination .= '<li class="page-item active"><a class="page-link" href data-paged="'.$i.'">'.$i.'</a></li>';
                        }else{
                            $htmlPagination .= '<li class="page-item"><a class="page-link" href data-paged="'.$i.'">'.$i.'</a></li>';
                        }
                    }
                }

                wp_reset_query();
                wp_reset_postdata();
            endif;
            
        ?>
    </div>
    
    <div class="col-12 mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php 
                    echo $htmlPagination;
                ?>
            </ul>
        </nav>
    </div>
    
</div>