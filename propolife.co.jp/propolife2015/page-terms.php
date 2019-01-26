<?php
global $current_lang;
$dir_name = 'terms';
?>
<?php
$post_id = $post -> ID;
$top_text = get_field('top_text');
$title_desc = get_field('head_title_desc');
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2>
            <span class="pc"><img src="<?php bloginfo('template_directory'); ?>/common/images/terms/img_title_h2.png" alt="TERM OF SERVICE"></span>
        </h2>
        <p class="ruby"><?php echo $title_desc; ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <div id="section_terms">
            <p class="date"><?php echo $top_text; ?></p>
            <ul>
                <?php
                    while(the_repeater_field('terms_table')):
                    $terms_title = get_sub_field('terms_title');
                    $terms_text = get_sub_field('terms_text');
                    $terms_text = str_replace('（', '<span class="indent">（</span>', $terms_text);
                    $terms_text = str_replace('）', '<span class="indent_right">）</span>', $terms_text);
                ?>
                <li>
                    <h3><?php echo $terms_title; ?></h3>
                    <?php echo $terms_text; ?>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>