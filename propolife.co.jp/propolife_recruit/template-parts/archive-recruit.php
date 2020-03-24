<!-- SE: Khanh Nguyen -->
<?php 
    global $temp_dir; 
    $obj = get_queried_object();
    if ($obj->name == "part-time-limit") {
        $business_slug = "business-part-time-limit";
    } else {
        $business_slug = "business-career-limit";
    }

    $newgraduateType = array('newgraduate', 'newgraduate-limit');
    $careerType = array('career', 'career-limit');
    $parttimeType = array('part-time', 'part-time-limit');

    $pageType = null;
    switch ($obj->query_var) {
        case 'newgraduate':
        case 'newgraduate-limit':
            $pageType = 'newgraduate';
            break;
        case 'career':
        case 'career-limit':
            $pageType = 'career';
            break;
        case 'part-time':
        case 'part-time-limit':
            $pageType = 'part-time';
            break;
    }

    $page = get_page_by_path( $pageType , $output = OBJECT, $post_type = 'page' );
?>
<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2>
            <img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2.png" alt="RECRUIT INFO" class="pc">
            <img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2_sp.png" alt="RECRUIT INFO" class="sp">
        </h2>
        <p class="title_sub">【<?php echo $page->post_title; ?>】勤務地限定<span class="line"></span></p>
    </div>
    
    <div id="page_recruit">
        <?php
            $business_args = array('taxonomy' => $business_slug, 'orderby' => 'name', 'order'   => 'ASC', "parent" => 0);
            $business_taxonomy = get_categories($business_args);
        ?>
        <?php 
            foreach($business_taxonomy  as $business): 
                if ($business->count > 0):
        ?>
        <div class="page_recruit_content">
            <h3><?php echo $business->name; ?></h3>
            <div class="business-content">
                <?php 
                    $profession_args = array('taxonomy' => $business_slug, "parent" => $business->term_id);
                    $profession_taxonomy = get_categories($profession_args);                    
                ?>
                <?php foreach($profession_taxonomy  as $profession): ?>
                <?php 
                    $args = array(
                        'post_type' => $obj->name,
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        // 'meta_key'      => 'part_time',
                        // 'meta_value'    => $kind_of_time,
                        'tax_query' => array(
                            array(
                            'taxonomy' => $business_slug,
                            'field' => 'term_id',
                            'terms' => $profession->term_id
                            )
                        )
                    );
                                
                    $query = new WP_Query( $args );

                    $job_total = $query->post_count;
                    

                    if ($job_total > 0): ?>
                        <h4><?php echo $profession->name; ?></h4>
                        <article class="recruit_region mb-4">
                            
                    <?php

                        if($query->have_posts()) : while($query->have_posts()): $query->the_post();
                            $objUrl = get_the_permalink();
                            $term_obj_list_area = get_the_terms( $query->post->ID, 'area' );
                            ?> 
                            <a href="<?php echo $objUrl; ?> " target="_blank"> 
                                <section>
                                    <div class="row">
                                        <div class="col-md-6 col-9"><h5><strong><?php the_title(); ?></strong></h5></div>
                                        <div class="col-md-2 col-3 are-name" >
                                            <?php 
                                                // echo $term_obj_list_area[0]->name;
                                                if (count($term_obj_list_area) > 1) {
                                                    $i = 1;
                                                    foreach ($term_obj_list_area as $term_area) {
                                                        if($i % 2 == 0){
                                                            echo ', '.$term_area->name;
                                                        }else{
                                                            echo $term_area->name;
                                                        }
                                                        $i += 1;
                                                    }
                                                } else {
                                                    echo $term_obj_list_area[0]->name;
                                                }
                                            ?>     
                                        </div>
                                        <div class="col-md-4 col-12 company-name"><?php echo get_field('recruit_short_description');?></div>
                                    </div>
                                </section>
                            </a>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            wp_reset_query();
                        endif;
                    ?>
                             <div class="clearfix"></div>
                        </article>
                    <?php
                    endif;
                ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; endforeach; ?>
        <p class="img_process"><img src="<?php echo $recruit_process_image_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $recruit_process_image_sp[0]; ?>" alt="" class="sp"></p>
    </div><!-- // #page_recruit -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->