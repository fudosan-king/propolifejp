<?php
$post_title = get_the_title();
$dir_name = 'media';
$dir_category = 'news';
$is_post_parent = $post->post_parent;
$post_parent_title = get_the_title($is_post_parent);
?>
<?php
global $posts;
$paged = $wp_query->query_vars['paged'];
$posts = query_posts(array(
    'post_type' => 'media',
    'numberposts' => get_option('posts_per_page'),
    'paged' => $paged
    )
);
if(empty($posts)){ header('location: /'); exit();}
?>

<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/media/img_title_h2.png" alt="INFORMATION"></h2>
        <p class="ruby"><?php echo $post_title; ?></p>
        <p class="line"></p>
        <?php include_news_sns_share(); ?>
    </div>
    
    <div id="contents_inner">
        <div id="section_media">
            <dl>
                <?php foreach($posts as $post) : setup_postdata($post); ?>
                <?php
                    $post_id = $post -> ID;
                    $post_name = $post -> post_title;
                    $post_date = date('Y/m/d', strtotime($post -> post_date));
                    $post_content = $post->post_content;
                ?>
                <dt><?php echo $post_date; ?><?php get_newicon($post_date); ?></dt>
                <dd>
                    <h3><?php echo $post_name; ?></h3>
                    <p class="img"><?php while(the_repeater_field('image_field')): $post_image = wp_get_attachment_image_src(get_sub_field('post_image'), 'large'); ?><img src="<?php echo $post_image[0]; ?>" width="120" alt="<?php echo $post_name; ?>"><?php endwhile; ?></p>
                    <div class="news_post_content"><?php echo $post_content; ?></div>
                </dd>
                <?php endforeach; wp_reset_postdata(); ?>
                </dl>
        </div>
    </div>
    
    <div id="btm_nav">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
    
<?php wp_reset_query(); ?>
 </div><!-- // #contents -->
<?php get_footer(); ?>