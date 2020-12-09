<?php
$dir_name = 'news';
$dir_category = 'news';
$post_title = get_the_title();
$is_post_parent = $post->post_parent;
$post_parent_title = get_the_title($is_post_parent);
?>
<?php
global $posts;
$paged = $wp_query->query_vars['paged'];
$posts = query_posts(array(
    'post_type' => 'news',
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
        <h2><img src="<?php echo $temp_dir; ?>/common/images/news/img_title_h2.png" alt="ESTATE NEWS"></h2>
        <p class="ruby"><?php echo $post_title; ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <div id="section_estate">
            <dl>
                <?php
                    $loop_num = 0;
                    foreach($posts as $post) : setup_postdata($post);
                ?>
                <?php
                    $post_id = $post -> ID;
                    $post_date = date('Y/m/d', strtotime($post -> post_date));
                    $post_content = $post->post_content;
                    $post_content = str_replace('<p>', '', $post_content);
                    $post_content = str_replace('</p>', '', $post_content);
                ?>
                <dt><?php echo $post_date; ?></dt>
                <dd><?php get_newicon($post_date); ?><?php echo $post_content; ?></dd>
                <?php $loop_num += 1; endforeach; wp_reset_postdata(); ?>
            </dl>
        </div>
    </div>
    
    <div id="btm_nav">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
    <?php
        $next = get_next_posts_link();
    ?>
     <p class="btmnav_nextpage"><?php next_posts_link('次のページへ'); ?></p>
     <?php if(empty($next)): ?><p class="btmnav_nextpage"><?php previous_posts_link('前のページへ'); ?></p><?php endif; ?>
<?php wp_reset_query(); ?>
 </div><!-- // #contents -->
<?php get_footer(); ?>