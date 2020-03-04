<?php
global $temp_dir;
$dir_name = 'job';
?>
<?php
    $page_title = get_the_title();
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>
<?php
    $business_args = array('taxonomy' => 'business', 'orderby' => 'name', 'order'   => 'ASC', "parent" => 0);
    $business_taxonomy = get_categories($business_args);
?>

<div id="contents">
<div id="contents_inner" class="index">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/job/img_title_h2.png" alt="JOB" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/job/img_title_h2_sp.png" alt="JOB" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
        
    <div id="page_job_index">
        <p class="job_copy"><?php echo get_field('job_top_text'); ?></p>
        <div class="page_job_list">
            <div class="row ml-0 mr-0">
                <?php foreach($business_taxonomy  as $business): ?>
                <div class="col-12 mb-5 page-job-group">
                    <h3><?php echo $business->name; ?></h3>
                    <div class="profession-box">
                        <?php 
                            $profession_args = array('taxonomy' => 'business', "parent" => $business->term_id);
                            $profession_taxonomy = get_categories($profession_args);                          
                        ?>
                        <?php $num = 1; ?>
                        <?php foreach($profession_taxonomy  as $profession): ?>
                        <div class="profession <?php echo 'profession-'.$num;  ?>">
                            <div class="profession-tx">
                                <h4><?php echo $profession->name; ?></h4>
                            </div>
                            <?php 
                                $args = array(
                                'post_type' => 'job',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                    'taxonomy' => 'business',
                                    'field' => 'term_id',
                                    'terms' => $profession->term_id
                                     )
                                  )
                                );
                                $posts = new WP_Query( $args );
                                // echo $posts->request;
                            ?>
                            <?php if ( $posts->have_posts() ) : ?>
                                <ul class="<?php if($num == 1) { echo 'custom-class'; } ?>">
                            <?php 
                                while ( $posts->have_posts() ) : $posts->the_post();
                                    $post_id = $posts->post->ID; 
                                    $job_visual = wp_get_attachment_image_src(get_field('job_list_image_thumb'), 'medium');
                                    $job_division_copy = get_field('job_division_copy');
                                    $job_division = get_field('job_name');
                                    $job_permalink = get_permalink();
                                    if(isset($post_id)):
                            ?>
                                    <li>
                                        <a href="<?php echo $job_permalink; ?>">
                                            <p class="pic"><img src="<?php echo $job_visual[0]; ?>" alt="<?php echo strip_tags($job_division); ?>"></p>
                                            <p class="division_copy"><?php echo $job_division_copy; ?></p>
                                            <p class="division"><?php echo $job_division; ?></p>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php $num += 1; endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <?php $num += 1; endforeach; ?>
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata(); wp_reset_query(); ?>
            </div>
        </div>
    </div><!-- // #page_job_index -->

<p class="img_btm_animal"></p>
</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<?php get_footer(); ?>