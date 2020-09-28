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

    <section class="section_status" data-sticky-container>
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
                                    <div class="tab-pane fade <?php echo $n == 1 ? 'show active' : '' ?>" id="<?php echo $cat->slug ?>" role="tabpanel" data-cat-id="<?php echo $cat->cat_ID ?>" aria-labelledby="<?php echo $cat->slug ?>_tab">
                                        <div class="row">

                                        </div>

                                    </div>
                                 <?php $n++; endforeach; wp_reset_postdata(); wp_reset_query();?>
                            </div>
                        </div>
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer() ?>
