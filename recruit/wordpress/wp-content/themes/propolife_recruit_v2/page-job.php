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
$posts = query_posts(array(
    'post_type' => 'job',
    'posts_per_page' => 8,
    'order' => 'menu_order',
    'post_status' => 'publish'
));

$posts_length = count($posts);
$is_even = ($posts_length % 2 == 0)? true: false;
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
            <ul>
<?php
$num = 1;
foreach($posts as $post):
    $post_id = $post->ID;
    $job_visual = wp_get_attachment_image_src(get_field('job_list_image_thumb'), 'medium');
    $job_division_copy = get_field('job_division_copy');
    $job_division = get_field('job_division');
    $job_permalink = get_permalink();
?>
                <li<?php if($num % 4 == 0 || (!$is_even && $posts_length == $num)): ?> class="no_arrow"<?php endif; ?>>
                    <a href="<?php echo $job_permalink; ?>">
                        <p class="pic"><img src="<?php echo $job_visual[0]; ?>" alt="<?php echo strip_tags($job_division); ?>"></p>
                        <p class="division_copy"><?php echo $job_division_copy; ?></p>
                        <p class="division"><?php echo $job_division; ?></p>
                    </a>
                </li>
<?php $num += 1; endforeach; wp_reset_postdata(); wp_reset_query(); ?>
<?php if($num % 2 == 0): ?>
                <li class="empty"></li>
<?php endif; ?>
            </ul>
        </div>
    </div><!-- // #page_job_index -->

<p class="img_btm_animal"></p>
</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<?php get_footer(); ?>