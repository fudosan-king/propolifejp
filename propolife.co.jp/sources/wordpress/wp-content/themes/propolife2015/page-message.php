<?php
$dir_name = 'message';
$dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
$main_text = get_field('main_text');

$main_visual = wp_get_attachment_image_src(get_post_meta($post_id, 'main_visual', true), 'large');
$main_copy_img = wp_get_attachment_image_src(get_post_meta($post_id, 'main_copy_img', true), 'large');
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/message/img_title_h2.png" alt="MESSAGE"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="main_visual">
        <p><img src="<?php echo $main_visual[0]; ?>" width="100%" alt=""></p>
    </div>
        
    <div id="contents_inner">
        <div id="section_message">
            <h3><img src="<?php echo $main_copy_img[0]; ?>" width="100%" alt=""></h3>
            <?php echo $main_text; ?>
        </div>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>