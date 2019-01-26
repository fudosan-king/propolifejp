
<?php 
$page_info = get_page_by_path('general-addition-info');
$header_info = get_field('header', $page_info);

if (have_posts()):
    while(have_posts()): the_post();
        $featuredImageUrl = wp_get_attachment_image_url( get_post_thumbnail_id( $post ), $size = 'full');
    ?>

    <div class="jarallax bg_top">
        <img class="jarallax-img bg-scale" src="<?php echo $featuredImageUrl; ?>" alt="">
    </div>

    <a href="/" class="logo"><img src="<?php echo $header_info['header_logo']['url']; ?>" alt="" class="img-fluid" width="150"></a>

    <div class="w_site_content">
        <?php the_content(); ?>
    </div><!-- w_site_content -->

    <div id="scroll_down">
        <div class="vertical_elem">
            <div class="line white only vertical t_b hidden scroll_loop"></div>
            <div class="start_square has_transition_600"></div>
        </div>
    </div>

    <?php
    endwhile;
endif;
?>
