<?php
require_once("../../../../wp-config.php");
$page_data = get_page_by_path('home_settings');
$page_id = $page_data->ID;
$modal_text = get_field('home_modal_text_job', $page_id);
?>

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

<div id="modal_data" class="job">
<p class="desc"><?php echo $modal_text; ?></p>

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

<p class="modal_close"></p>
</div>