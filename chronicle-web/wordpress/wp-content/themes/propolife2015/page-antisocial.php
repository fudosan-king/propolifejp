<?php $dir_name = 'antisocial'; ?>
<?php
$post_id = $post -> ID;
$top_text = get_field('top_text');
$main_text = get_field('main_text');
?>
<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/antisocial/img_title_h2.png" alt="ANTISOCIAL"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        <div id="section_antisocial">
            <p class="first"><?php echo $top_text; ?></p>

            <?php echo $main_text; ?>
        </div>
    </div>

 </div><!-- // #contents -->
<?php get_footer(); ?>