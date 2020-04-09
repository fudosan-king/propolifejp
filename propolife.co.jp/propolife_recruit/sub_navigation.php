<?php
global $temp_dir, $dir_name, $dir_category;
?>

<div id="sub_global_nav">

    <h2><img src="<?php echo $temp_dir; ?>/common/images/img_logo_sub_nav.png" alt="PROPO LAND" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/img_logo_sub_nav_sp.png" alt="PROPO LAND" class="sp"></h2>
    <p class="btn_entry"><a href="https://www.propolife.co.jp/recruit/contact/" target="_blank"><span><img src="<?php echo $temp_dir; ?>/common/images/parts_sub_nav_txt_entry.png" alt="ENTRY"></span></a></p>
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
                    <!-- <?php if (total_objects_inside_tax('newgraduate-limit', 'area')>0 ): ?>
                    <li<?php if($dir_category == 'newgraduate-limit'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/【新卒採用】勤務地限定/">【新卒採用】勤務地限定</a></li>
                    <?php endif; ?> -->

                 <!--    <li<?php if($dir_category == 'career'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/career/">中途採用</a></li> -->

                    <?php if (total_objects_inside_tax('career-limit', 'area')>0 ): ?>
                    <li<?php if($dir_category == 'career-limit'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/【中途採用】勤務地限定/">中途採用</a></li>
                    <li<?php if($dir_category == 'part-time-limit'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/【アルバイト】勤務地限定/">アルバイト</a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <li<?php if($dir_name == 'benefit'): ?> class="current"<?php endif; ?>><a href="<?php echo home_url(); ?>/benefit/">福利厚生</a></li>
        </ul>
    </div>


    <div id="sub_nav_banner">
        <ul>
<?php

function total_objects($postType){   
    $args = array(
        'post_type'   => $postType,
        'post_status' => 'publish',
        'posts_per_page'         => -1,
    );
    $query = new WP_Query( $args );
    $total = $query->post_count;
    wp_reset_postdata();
    wp_reset_query();
    return $total;
}

function total_objects_inside_tax($postType, $taxName){
    // SE: Khanh Nguyen

    $sum = 0;

    $args = array(
        'taxonomy'      => $taxName,
        'hide_empty'    => false,
        'parent'        => 0,
    );
    $categories = get_categories($args);
    foreach ($categories as $cat){
        $args = array(

            'post_type'   => $postType,
            'post_status' => 'publish',
    
            'posts_per_page'         => -1,

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

        $sum += $query->post_count;

    }
    return $sum;
}


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