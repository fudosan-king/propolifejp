<?php
$dir_name = 'philosophy';
$dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
$main_text = get_field('main_text');
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/philosophy/img_title_h2.png" alt="PHILOSOPHY"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>
            
    <div id="contents_inner">
        <div id="section_philosophy">
            <div class="section_inner">
                <?php echo $main_text; ?>
            </div>
        </div>
    </div>
    
 </div><!-- // #contents -->

<?php get_footer(); ?>