<?php get_header(); ?>
    <section class="section_banner">
        <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/home_banner.jpg" alt="home banner" class="img-fluid">
        <div class="banner_content">
            <h3><?php echo get_option('chrs_theme_options')['homepageFistSmallText'] ?></h3>
            <h1><?php echo get_option('chrs_theme_options')['homepageSecondLargerText'] ?></h1>
        </div>
    </section>
    <main>
        <section class="section_slide_promotions">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel carousel_promotions" data-flickity='{ "wrapAround": true, "imagesLoaded": true }'>
                            <?php
                            $posts = get_posts([
                                'numberposts'	=> 3,
                                'post_type'		=> 'post',
                                'order' => 'DESC',
                                'meta_query'    => [
                                        [
                                    'key'	  	=> 'enable_promotion',
                                    'value'	  	=> 'yes',
                                    'compare' 	=> 'LIKE',
                                            ]
                                ]
                            ]);
                            if ($posts) : foreach ($posts as $post) : $category = get_the_category($post->ID)[0];
                            ?>
                            <div class="carousel-cell">
                                <div class="row flex-row-reverse">
                                    <div class="col-12 col-lg-7">
                                        <div class="carousel_promotions_img">
                                            <a href="<?php echo get_post_permalink($post->ID) ?>"><img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id( $post->ID ),'post-thumbnail-homepage-posts-slider') ?>" alt="<?php echo $post->post_title ?>" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <p class="tag"><span style="background: <?php echo get_field('color_label', $category) ?>"><?php echo get_cat_name($category->term_id) ?></span></p>
                                        <h2><?php echo $post->post_title ?></h2>
                                        <p class="date"><?php echo get_the_time('Y\.m\.d') ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_status">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $n = 1; foreach(get_categories() as $category): ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php echo $n == 1 ? 'active' : '' ?>" id="<?php echo $category->slug ?>_tab" data-toggle="tab" href="#<?php echo $category->slug ?>" role="tab" aria-controls="<?php echo $category->slug ?>" aria-selected="true"><?php echo $category->name ?></a>
                            </li>
                            <?php $n++; endforeach; wp_reset_postdata(); wp_reset_query(); ?>
                        </ul>
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="tab-content" id="myTabContent">
                                    <?php $n = 1; foreach(get_categories() as $cat): ?>
                                        <div class="tab-pane fade <?php echo $n === 1 ? 'show active' : '' ?>" id="<?php echo $cat->slug ?>" role="tabpanel" aria-labelledby="<?php echo $cat->slug ?>_tab">
                                            <div class="row">
                                                <?php foreach (get_posts(['posts_per_page' => 6, 'category' => $cat->cat_ID]) as $post ) : $cat = get_the_category($post->ID)[0]?>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="box_item">
                                                            <div class="box_item_img">
                                                                <a href="<?php echo get_post_permalink($post->ID) ?>"><img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id( $post->ID ),'post-thumbnail-homepage') ?>" alt="<?php echo $post->post_title ?>" class="img-fluid"></a>
                                                            </div>
                                                            <p class="tag"><span style="background: <?php echo get_field('color_label', $cat) ?>"><?php echo get_cat_name($cat->term_id) ?></span></p>
                                                            <p class="box_item_content"><a href="<?php echo get_post_permalink($post->ID) ?>"><?php echo $post->post_title ?></a></p>
                                                            <p class="date"><?php echo get_the_time('Y\.m\.d') ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php if ($n > 6): ?>
                                                <div class="text-center"><a href="#" class="btn btnmore misha_loadmore">MORE</a></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php $n++; endforeach; wp_reset_postdata(); wp_reset_query();?>
                                </div>
                            </div>
                            <?php get_template_part('template-parts/content/content', 'banner-sidebar') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer() ?>
