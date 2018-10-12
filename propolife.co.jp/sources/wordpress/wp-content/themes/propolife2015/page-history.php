<?php
$dir_name = 'history';
$dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/history/img_title_h2.png" alt="HISTORY"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <table>
            <?php
                $row_num = 0;
                while(the_repeater_field('history_table')):
                $th = get_sub_field('table_title');
                $td = get_sub_field('table_content');
                $col_bg = ($row_num % 2 == 0)? true: false;
            ?>
            <tr<?php if($col_bg): echo ' class="bg"'; endif; ?>>
                <th><?php echo $th; ?></th>
                <td><?php echo $td; ?></td>
            </tr>
            <?php $row_num += 1; endwhile; ?>
        </table>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>