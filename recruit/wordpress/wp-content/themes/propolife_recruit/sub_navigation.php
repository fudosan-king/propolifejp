<?php
global $temp_dir, $dir_name, $dir_category;
?>

<div id="sub_global_nav">

    <h2><img src="<?php echo $temp_dir; ?>/common/images/img_logo_sub_nav.png" alt="PROPO LAND" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/img_logo_sub_nav_sp.png" alt="PROPO LAND" class="sp"></h2>
    <p class="btn_entry"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-odkap-274e494d5fffdd615a8b6234aafe76ae" target="_blank"><span><img src="<?php echo $temp_dir; ?>/common/images/parts_sub_nav_txt_entry.png" alt="ENTRY"></span></a></p>
<?php if($dir_name == 'home'): ?>
    <p class="home_sub_nav_title">採用ページMENU</p>
<?php endif; ?>
    <div id="sub_global_nav_list">
        <ul>
            <li<?php if($dir_name == 'home'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li<?php if($dir_name == 'concept'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/concept/">メッセージ</a></li>
            <li<?php if($dir_name == 'point'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/point/">企業を知る</a></li>
            <li<?php if($dir_name == 'job'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/job/">プロポのお仕事</a></li>
            <li class="parent">
                <p>採用情報</p>
                <ul>
                    <li<?php if($dir_category == 'newgraduate'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/newgraduate/">新卒採用</a></li>
                    <li<?php if($dir_category == 'career'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/career/">中途採用</a></li>
                </ul>
            </li>
            <li<?php if($dir_name == 'training'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/training/">人材育成</a></li>
            <li<?php if($dir_name == 'benefit'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/benefit/">福利厚生</a></li>
            <li<?php if($dir_name == 'support'): ?> class="current li-support"<?php endif; ?>><a href="<?php echo home_url(); ?>/support/">子育て支援</a></li>
            <li<?php if($dir_name == 'office'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/office/">オフィス紹介</a></li>
        </ul>
    </div>


    <div id="sub_nav_banner">
        <ul>
<?php
$posts = query_posts(array(
    'post_type' => 'nav_side_banner',
    'posts_per_page' => 3,
    'order' => 'menu_order',
    'post_status' => 'publish'
));
foreach($posts as $post):
    $post_id = $post->ID;
    $side_banner_title = get_the_title($post_id);
    $side_banner_image = wp_get_attachment_image_src(get_field('side_banner_image'), 'medium');
    $side_banner_url = get_field('side_banner_url');
?>
            <li><a href="<?php echo $side_banner_url; ?>" target="_blank"><img src="<?php echo $side_banner_image[0]; ?>" alt="<?php echo $side_banner_title; ?>"></a></li>
<?php $num += 1; endforeach; wp_reset_postdata(); wp_reset_query(); ?>
        </ul>
    </div>

<?php if($dir_name == 'home'): ?>
    <p class="btn_home_sub_ico"></p>
<?php endif; ?>

</div><!-- // #global_sub_nav -->