<!-- SE: Khanh Nguyen -->
<?php 
    global $temp_dir; 
    $obj = get_queried_object();

    $newgraduateType = array('newgraduate', 'newgraduate-limit');
    $careerType = array('career', 'career-limit');

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
        <div class="page_recruit_content">
            <?php 
                // SE: Khanh Nguyen

                $post_type = $obj->query_var;
                $taxonomy_name = $obj->taxonomies[0];
                $archive_slug = $obj->rewrite['slug'];

                $args = array(
                    'taxonomy'      => $taxonomy_name,
                    'hide_empty'    => false,
                    'parent'        => 0,
                );
                $categories = get_categories($args);
                $post_count = count($categories);
                foreach ($categories as $cat){
                    // print_r($cat);
                    ?>
                    
                        <?php 

                            $args = array(
                    
                                // Type & Status Parameters
                                'post_type'   => $post_type,
                                'post_status' => 'publish',
                        
                                // Order & Orderby Parameters
                                'order'               => 'DESC',
                                'orderby'             => 'date',
                        
                                // Pagination Parameters
                                'posts_per_page'         => -1,
                                // 'posts_per_archive_page' => 10,
                                // 'nopaging'               => false,
                                // 'paged'                  => get_query_var( 'paged' ),
                                // 'offset'                 => 3,
                    
                                // Taxonomy Parameters
                                'tax_query' => array(
                                    array(
                                        'taxonomy'         => $cat->taxonomy,
                                        'field'            => 'slug',
                                        'terms'            => $cat->slug,
                                        'include_children' => true,
                                        'operator'         => 'IN',
                                    )
                                )

                            );
                            
                            $query = new WP_Query( $args );

                            $job_total = $query->post_count;

                            if ($job_total > 0): ?>
                                <article class="recruit_region">
                                    <header><?php echo $cat->name; ?></header>
                            <?php

                                if($query->have_posts()) : while($query->have_posts()): $query->the_post();

                                    $objUrl = trailingslashit(path_join( home_url(), path_join( $archive_slug, path_join( $cat->slug, $post->post_name))) );
                                    ?>
                                        <a href="<?php echo $objUrl; ?> " target="_blank">
                                            <section>
                                                <h3><strong><?php the_title(); ?></strong></h3>
                                                <div class="description">“<?php echo get_field('recruit_short_description');?>“</div>
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

                         <?php 

                            // if($job_total == 0) {
                                ?>
                                 <!-- <div align="center">ジョブが見つかりません。</div> -->
                                <?php
                            // }

                         ?>
                    <br><br>
                    <?php
                }

                 // SE: Khanh Nguyen

            ?>
            <?php 
                if($post_count == 0) {
                    ?>
                     <div align="center">エリアが見つかりませんでした。</div>
                    <?php
                }
            ?>
        </div>
        
        <p class="img_process"><img src="<?php echo $recruit_process_image_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $recruit_process_image_sp[0]; ?>" alt="" class="sp"></p>
    </div><!-- // #page_recruit -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->