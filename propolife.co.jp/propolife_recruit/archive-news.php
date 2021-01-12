<?php
global $temp_dir;
$dir_name = 'news';
?>
<?php
    $page_title = get_post_type_object(get_post_type())->label;
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/news/img_title_h2.png" alt="NEWS" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/news/img_title_h2_sp.png" alt="NEWS" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>

    <div id="menu_archives">
        <p class="current"><span class="inner"><?php echo get_query_var('year'); ?>年</span><span class="arrow"></span></p>
        <ul>
<?php
    $archives = wp_get_archives('type=yearly&post_type=news&echo=0');
    $archive_list = str_replace('?post_type=news', '', $archives);
    $archive_list = preg_replace('/<\/a>/', '年</a>', $archive_list );
    echo $archive_list;
?>
        </ul>
    </div>
        
    <div id="page_news">
<?php
$posts = query_posts(array(
    'post_type' => 'news',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged'),
    'year' => get_query_var('year'),
    'post_status' => 'publish'
));
?>
        <ul>
<?php
foreach($posts as $post):
$post_id = $post->ID;
$post_title = $post->post_title;
$post_date = date('Y/m/d', strtotime($post -> post_date));
$post_content = get_field('news_content');
$post_pdf = get_field('news_pdf');
?>
            <li>
                <div class="post_head">
                    <p class="date"><?php echo $post_date; ?></p>
                    <div class="category">
<?php
$post_cats = get_the_category();
?>
<?php foreach($post_cats as $cat): ?>
                            <p class="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></p>
<?php endforeach; ?>
                            <?php get_newicon($post -> post_date); ?>
                            
                    </div><!-- // .category -->
                </div><!-- // .post_head -->
                <div class="post_body">
                    <h4><?php echo $post_title; ?><?php if(!empty($post_pdf)): ?><span class="pdf"><a href="<?php echo $post_pdf; ?>" target="_blank"><img src="<?php echo $temp_dir; ?>/common/images/parts_ico_pdf.png" alt="<?php echo $post_title; ?>"></a></span><?php endif; ?></h4>
                    <div class="post_content">
<?php
while(the_repeater_field('news_image_repeater_field')):
    $news_image = wp_get_attachment_image_src(get_sub_field('news_image'), 'medium');
    $news_image_full = wp_get_attachment_image_src(get_sub_field('news_image'), 'full');
?>
                        <a href="<?php echo $news_image_full[0]; ?>" target="_blank"><img src="<?php echo $news_image[0]; ?>" alt=""></a>
<?php endwhile; ?>
                        <?php echo $post_content; ?>
                    </div>
                </div>
            </li>
<?php endforeach; wp_reset_postdata();?>
        </ul>

    <div id="btm_nav">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
    <?php
        $next = get_next_posts_link();
    ?>
     <p class="btmnav_nextpage"><?php next_posts_link('次のページへ'); ?></p>
     <?php if(empty($next)): ?><p class="btmnav_nextpage prev"><?php previous_posts_link('前のページへ'); ?></p><?php endif; ?>
     
    </div><!-- // #page_news -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<?php get_footer(); ?>