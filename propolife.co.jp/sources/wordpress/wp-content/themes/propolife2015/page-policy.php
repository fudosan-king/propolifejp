<?php $dir_name = 'policy'; ?>
<?php
$post_id = $post -> ID;
$top_text = get_field('top_text');
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/policy/img_title_h2.png" alt="PRIVACY POLICY"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <div id="section_policy">
            <p class="policy"><?php echo $top_text; ?></p>
            <ul>
                <?php
                    while(the_repeater_field('policy_table')):
                    $policy_title = get_sub_field('policy_title');
                    $policy_text = get_sub_field('policy_text');
                    $policy_text = str_replace('（', '<span class="indent">（</span>', $policy_text);
                    $policy_text = str_replace('）', '<span class="indent_right">）</span>', $policy_text);
                ?>
                <li>
                    <h3><?php echo $policy_title; ?></h3>
                    <?php echo $policy_text; ?>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>