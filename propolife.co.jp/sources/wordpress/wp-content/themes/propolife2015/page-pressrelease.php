<?php
$dir_name = 'pressrelease';
$dir_category = 'news';
$post_title = get_the_title();
$is_post_parent = $post->post_parent;
$post_parent_title = get_the_title($is_post_parent);
?>
<?php
global $posts;
$paged = $wp_query->query_vars['paged'];
$posts = query_posts(array(
    'post_type' => 'pressrelease',
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
        <h2><img src="<?php echo $temp_dir; ?>/common/images/pressrelease/img_title_h2.png" alt="PRESS RELEASE"></h2>
        <p class="ruby"><?php echo $post_title; ?></p>
        <p class="line"></p>
        <?php include_news_sns_share(); ?>
    </div>
    
    <div id="contents_inner">
        <div id="section_pressrelease">
            <?php
                $loop_num = 0;
                $post_length = count($posts);
                for($i = 0; $i < $post_length; $i ++):
                setup_postdata($posts[$i]);
            ?>
            <?php
                $post_id = $posts[$i] -> ID;
                $post_name = $posts[$i] -> post_title;
                $post_year = date('Y', strtotime($posts[$i] -> post_date)) . '年';
                $prev_year = date('Y', strtotime($posts[$i - 1] -> post_date)) . '年';
                $post_date = date('Y/m/d', strtotime($posts[$i] -> post_date));
                $post_content = $posts[$i]->post_content;
                $post_content = str_replace('<p>', '', $post_content);
                $post_content = str_replace('</p>', '', $post_content);
                $post_pdf = get_field('post_pdf', $post_id);
                $is_show_head = ($post_year != $prev_year)? true: false;
            ?>
            <?php if($is_show_head): ?>
            <h3><?php echo $post_year; ?></h3>
            <dl>
            <?php endif; ?>
                <dt><?php echo $post_date; ?><?php get_newicon($post_date); ?></dt>
                <dd><?php echo $post_content; ?><?php if(!empty($post_pdf)): ?><span><a href="<?php echo $post_pdf; ?>" target="_blank"><img src="<?php echo $temp_dir; ?>/common/images/parts_ico_pdf.png" width="24" alt=""></a></span><?php endif; ?></dd>
            <?php if($is_show_head): ?>
            </dl>
            <?php endif; ?>
            <?php $loop_num += 1; endfor; wp_reset_postdata(); ?>
        </div>
    </div>
    
    <div id="btm_nav">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
     <p class="btmnav_nextpage"><?php next_posts_link('次のページへ'); ?></p>
<?php wp_reset_query(); ?>
 </div><!-- // #contents -->
<?php get_footer(); ?>