<?php
global $temp_dir;
$dir_name = 'job';
?>
<?php
    $page_title = get_post_type_object(get_post_type())->label;
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<?php
$posts = query_posts(array(
    'post_type' => 'job',
    'posts_per_page' => 8,
    'order' => 'menu_order',
    'post_status' => 'publish'
));

$posts_length = count($posts);
$is_even = ($posts_length % 4 == 0)? true: false;

?>

<div id="contents">
<div id="contents_inner" class="single">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/job/img_title_h2.png" alt="JOB" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/job/img_title_h2_sp.png" alt="JOB" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
        
    <div id="page_job_single">
        <?php
        $job_business_content = get_field('job_business_content');
        $job_division_copy = get_field('job_division_copy');
        $job_division = get_field('job_division');
        $job_position = get_field('job_position');
        $job_name = get_field('job_name');
        $job_main_visual = wp_get_attachment_image_src(get_field('job_main_visual'), 'large');
        $job_main_copy = get_field('job_main_copy');
        $job_movie_url = get_field('job_movie_url');
        ?>
        <div id="job_body">
            <div id="job_title">
                <h3><?php echo $job_division_copy; ?></h3>
                <p class="name"><span class="position"><?php echo $job_position; ?></span><?php echo $job_name; ?></p>
            </div><!-- // #job_title -->
            
            <div id="job_content">
                <p class="main_visual"><img src="<?php echo $job_main_visual[0]; ?>" alt=""></p>
                <p class="main_copy"><?php echo $job_main_copy; ?></p>
                <div class="business-content">
                    <h4><?php echo $job_business_content['title']; ?></h4>
                    <p><?php echo $job_business_content['content']; ?></p>
                </div>
                <div id="content_body">
                    <?php
                    $row_num = 0;
                    while(the_repeater_field('job_content_repeater_field')):
                    $job_content_image = wp_get_attachment_image_src(get_sub_field('job_content_image'), 'medium');
                    $job_content_title = get_sub_field('job_content_title');
                    $job_content_text = get_sub_field('job_content_text');
                    ?>
                    <div class="section<?php if($row_num % 2 == 1): ?> right<?php endif; ?>">
                        <p class="pic"><img src="<?php echo $job_content_image[0]; ?>" alt=""></p>
                        <div class="desc">
                            <h4><?php echo $job_content_title; ?></h4>
                            <p><?php echo $job_content_text; ?></p>
                        </div>
                    </div>
                    <?php $row_num += 1; endwhile; ?>
                </div><!-- // #content_body -->
            </div><!-- // #job_content -->

        </div><!-- // #job_body -->
        <div class="job_entry_are">
            <div class="newgraduate">
                <a href="<?php echo home_url(); ?>/newgraduate/">新卒採用</a>
            </div>
            <div class="mid_carrer">
                <a href="<?php echo home_url(); ?>">中途採用</a>
            </div>
        </div><!-- // #job_entry_are -->
        <div class="job_list">
            <div class="multiple-jobs">
                <?php
                $num = 1;
                foreach($posts as $post):
                    $post_id = $post->ID;    
                    $job_image_thumb = wp_get_attachment_image_src(get_field('job_image_thumb'), 'medium');
                    $job_name = get_field('job_name');
                    $job_permalink = get_permalink();
                ?>
                <div>
                    <div><a href="<?php echo $job_permalink; ?>"><img class="img-fuild" src="<?php echo $job_image_thumb[0]; ?>" alt></a></div>
                    <a class="caption" href="<?php echo $job_permalink; ?>"><?php echo $job_name; ?></a>
                </div>
                <?php $num += 1; endforeach; wp_reset_postdata(); wp_reset_query(); ?>
            </div>
        </div><!-- // .page_job_list -->
        <div id="job_btm_nav" style="display: none;">
        <?php
            $prev_link = get_next_post_link('%link', '<img src="' . $temp_dir . '/common/images/job/btn_page_back.png" alt="BACK">');
            $next_link = get_previous_post_link('%link', '<img src="' . $temp_dir . '/common/images/job/btn_page_next.png" alt="NEXT">');
        ?>
            <?php if($prev_link): ?><p class="btn_prev"><?php echo $prev_link; ?></p><?php endif; ?>
            <?php if($next_link): ?><p class="btn_next"><?php echo $next_link; ?></p><?php endif; ?>
        </div><!-- // #job_btm_nav -->
    </div><!-- // #page_job_single -->

<p class="img_btm_animal" style="display: none;"></p>
</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<?php get_footer(); ?>
<script type="text/javascript">
    $('.multiple-jobs').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1
    });
</script>