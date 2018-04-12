<?php
$dir_name = 'president';
$dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
$main_copy = get_post_meta($post_id, 'main_copy', true);
$main_text = get_field('main_text');

$portrait = wp_get_attachment_image_src(get_post_meta($post_id, 'portrait', true), 'large');
$portrait_name_pc = wp_get_attachment_image_src(get_post_meta($post_id, 'name_img', true), 'large');
$portrait_name_sp = wp_get_attachment_image_src(get_post_meta($post_id, 'name_img_sp', true), 'large');
?>
<?php get_header(); ?>
<div id="contents">
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/president/img_title_h2.png" alt="TOP MESSAGE"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <?php if(!empty($main_copy)): ?><h3><?php echo $main_copy; ?></h3><?php endif; echo "\n"; ?>
        
        <div id="section_greeting">
            <?php if(!empty($portrait[0])): ?>
            <div class="col_left">
                <p clsss="pic"><img src="<?php echo $portrait[0]; ?>" alt="株式会社プロポライフ 代表取締役社長 野澤泰之"></p>
            </div>
            <?php endif; ?>
            <div class="col_right">
                <?php echo $main_text; ?>
            </div>
        </div>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>